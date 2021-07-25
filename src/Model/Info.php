<?php

namespace BitcoinVN\Model;

use BitcoinVN\Model\Info\Asset;
use BitcoinVN\Model\Info\TransferMethod;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class Info
{
    /**
     * @var ArrayCollection|Asset[]
     *
     * @Serializer\Type("ArrayCollection<BitcoinVN\Model\Info\Asset>")
     */
    private $assets;

    /**
     * @var ArrayCollection|TransferMethod[]
     *
     * @Serializer\Type("ArrayCollection<BitcoinVN\Model\Info\TransferMethod>")
     */
    private $transferMethods;

    /**
     * @return Asset[]|ArrayCollection
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * @return TransferMethod[]|ArrayCollection
     */
    public function getTransferMethods()
    {
        return $this->transferMethods;
    }
}