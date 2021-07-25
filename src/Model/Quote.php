<?php

namespace BitcoinVN\Model;

use JMS\Serializer\Annotation as Serializer;

class Quote
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $id;

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
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $depositMethod;

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
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $settleMethod;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $rate;

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
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    private $accepted;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
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
     * @return string
     */
    public function getDepositMethod(): string
    {
        return $this->depositMethod;
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
     * @return string
     */
    public function getSettleMethod(): string
    {
        return $this->settleMethod;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
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
     * @return bool
     */
    public function isAccepted(): bool
    {
        return $this->accepted;
    }
}