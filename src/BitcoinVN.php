<?php

namespace BitcoinVN;

use BitcoinVN\Model\Info;
use BitcoinVN\Model\Order;
use BitcoinVN\Model\Pair;
use BitcoinVN\Model\Quote;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Collections\ArrayCollection;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;

class BitcoinVN
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(
        string $apiKey,
        ?string $baseUrl = 'https://bitcoinvn.io/api',
        ?ClientInterface $client = null
    ) {
        $this->apiKey = $apiKey;
        $this->baseUrl = $baseUrl;
        $this->client = $client ?? new Client();
        $this->serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(new IdenticalPropertyNamingStrategy())
            ->build();
        AnnotationRegistry::registerLoader('class_exists');
    }

    public function info(): Info
    {
        return $this->serializer->deserialize(
            $this->request("get", "/info")->getBody()->getContents(),
            Info::class,
            'json'
        );
    }

    public function pair(string $depositMethod, string $settleMethod)
    {
        return $this->serializer->deserialize(
            $this->request("get", "/pairs/$depositMethod/$settleMethod")->getBody()->getContents(),
            Pair::class,
            'json'
        );
    }

    public function balances(): ArrayCollection
    {
        return $this->serializer->deserialize(
            $this->request("get", "/balances")->getBody()->getContents(),
            'ArrayCollection<string, float>',
            'json'
        );
    }

    public function order(string $id): Order
    {
        return $this->serializer->deserialize(
            $this->request("get", "/orders/$id")->getBody()->getContents(),
            Order::class,
            'json'
        );
    }

    public function orders(?int $page = 1): ArrayCollection
    {
        return $this->serializer->deserialize(
            $this->request("get", "/orders?p=$page")->getBody()->getContents(),
            "ArrayCollection<" . Order::class . ">",
            'json'
        );
    }

    public function quote(string $depositMethod, string $settleMethod, ?float $depositAmount = null, ?float $settleAmount = null): Quote
    {
        return $this->serializer->deserialize(
            $this->request("post", "/quotes", [
                'depositMethod' => $depositMethod,
                'settleMethod' => $settleMethod,
                'depositAmount' => $depositAmount,
                'settleAmount' => $settleAmount
            ])->getBody()->getContents(),
            Quote::class,
            'json'
        );
    }

    public function fixedSwap(string $quoteId, $destination = null, ?string $webhookUrl = null): Order
    {
        return $this->serializer->deserialize(
            $this->request("post", "/orders", [
                'quote' => $quoteId,
                'settleData' => is_string($destination) ? ['address' => $destination] : $destination,
                'webhookUrl' => $webhookUrl
            ])->getBody()->getContents(),
            Order::class,
            'json'
        );
    }

    public function variableSwap(string $depositMethod, string $settleMethod, $destination = null, ?string $webhookUrl = null): Order
    {
        return $this->serializer->deserialize(
            $this->request("post", "/orders", [
                'depositMethod' => $depositMethod,
                'settleMethod' => $settleMethod,
                'settleData' => is_string($destination) ? ['address' => $destination] : $destination,
                'webhookUrl' => $webhookUrl
            ])->getBody()->getContents(),
            Order::class,
            'json'
        );
    }

    private function request(string $method, string $path, $body = null): ResponseInterface
    {
        $options = [
            'headers' => [
                'X-API-KEY' => $this->apiKey,
                'User-Agent' => 'BitcoinVN PHP'
            ]
        ];

        if (null !== $body) {
            $options['body'] = $this->serializer->serialize($body, 'json');
        }

        return $this->client->request($method, "{$this->baseUrl}$path", $options);
    }
}