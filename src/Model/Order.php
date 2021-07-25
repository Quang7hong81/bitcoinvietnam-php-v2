<?php

namespace BitcoinVN\Model;

use JMS\Serializer\Annotation as Serializer;

class Order
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $shortId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $status;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $depositMethod;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $depositAsset;

    /**
     * @var float|null
     *
     * @Serializer\Type("float")
     */
    private $depositAmount;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $depositFee;

    /**
     * @var array
     *
     * @Serializer\Type("array")
     */
    private $depositData;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $settleMethod;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $settleAsset;

    /**
     * @var float|null
     *
     * @Serializer\Type("float")
     */
    private $settleAmount;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $settleFee;

    /**
     * @var array
     *
     * @Serializer\Type("array")
     */
    private $settleData;

    /**
     * @var float|null
     *
     * @Serializer\Type("float")
     */
    private $rate;

    /**
     * @var float|null
     *
     * @Serializer\Type("float")
     */
    private $depositMin;

    /**
     * @var float|null
     *
     * @Serializer\Type("float")
     */
    private $depositMax;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @Serializer\Type("DateTime")
     */
    private $expiresAt;

    /**
     * @var Quote|null
     *
     * @Serializer\Type("BitcoinVN\Model\Quote")
     */
    private $quote;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getShortId(): string
    {
        return $this->shortId;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getDepositMethod(): string
    {
        return $this->depositMethod;
    }

    /**
     * @return string
     */
    public function getDepositAsset(): string
    {
        return $this->depositAsset;
    }

    /**
     * @return float|null
     */
    public function getDepositAmount(): ?float
    {
        return $this->depositAmount;
    }

    /**
     * @return float
     */
    public function getDepositFee(): float
    {
        return $this->depositFee;
    }

    /**
     * @return array
     */
    public function getDepositData(): array
    {
        return $this->depositData;
    }

    /**
     * @return string
     */
    public function getSettleMethod(): string
    {
        return $this->settleMethod;
    }

    /**
     * @return string
     */
    public function getSettleAsset(): string
    {
        return $this->settleAsset;
    }

    /**
     * @return float|null
     */
    public function getSettleAmount(): ?float
    {
        return $this->settleAmount;
    }

    /**
     * @return float
     */
    public function getSettleFee(): float
    {
        return $this->settleFee;
    }

    /**
     * @return array
     */
    public function getSettleData(): array
    {
        return $this->settleData;
    }

    /**
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    /**
     * @return float|null
     */
    public function getDepositMin(): ?float
    {
        return $this->depositMin;
    }

    /**
     * @return float|null
     */
    public function getDepositMax(): ?float
    {
        return $this->depositMax;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime|null
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    /**
     * @return Quote|null
     */
    public function getQuote(): ?Quote
    {
        return $this->quote;
    }
}