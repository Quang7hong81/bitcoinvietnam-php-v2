<?php

namespace BitcoinVN\Model\Info;

use JMS\Serializer\Annotation as Serializer;

class TransferMethod
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
    private $asset;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    private $decimals;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    private $enabled;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    private $depositEnabled;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    private $settleEnabled;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    private $internalBalance;

    /**
     * @var boolean
     *
     * @Serializer\Type("float")
     */
    private $networkFee;

    /**
     * @var boolean
     *
     * @Serializer\Type("float")
     */
    private $depositFee;

    /**
     * @var boolean
     *
     * @Serializer\Type("float")
     */
    private $settleFee;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     */
    private $infoUrl;

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
    public function getAsset(): string
    {
        return $this->asset;
    }

    /**
     * @return int
     */
    public function getDecimals(): int
    {
        return $this->decimals;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @return bool
     */
    public function isDepositEnabled(): bool
    {
        return $this->depositEnabled;
    }

    /**
     * @return bool
     */
    public function isSettleEnabled(): bool
    {
        return $this->settleEnabled;
    }

    /**
     * @return bool
     */
    public function isInternalBalance(): bool
    {
        return $this->internalBalance;
    }

    /**
     * @return bool
     */
    public function isNetworkFee(): bool
    {
        return $this->networkFee;
    }

    /**
     * @return bool
     */
    public function isDepositFee(): bool
    {
        return $this->depositFee;
    }

    /**
     * @return bool
     */
    public function isSettleFee(): bool
    {
        return $this->settleFee;
    }

    /**
     * @return string|null
     */
    public function getInfoUrl(): ?string
    {
        return $this->infoUrl;
    }
}