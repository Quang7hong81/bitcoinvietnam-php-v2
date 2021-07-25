<?php

namespace BitcoinVN\Model;

use JMS\Serializer\Annotation as Serializer;

class Pair
{
    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $rate;

    /**
     * @var float|null
     *
     * @Serializer\Type("float")
     */
    private $min;

    /**
     * @var float|null
     *
     * @Serializer\Type("float")
     */
    private $max;

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @return float|null
     */
    public function getMin(): ?float
    {
        return $this->min;
    }

    /**
     * @return float|null
     */
    public function getMax(): ?float
    {
        return $this->max;
    }
}