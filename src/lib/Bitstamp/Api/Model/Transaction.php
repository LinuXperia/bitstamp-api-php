<?php
namespace Bitstamp\Api\Model;

class Transaction extends \Bitstamp\Api\ModelAbstract
{

    private $id;
    private $datetime;
    private $price;
    private $amount;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param  integer $id
     * @return \Bitstamp\Api\Model\Transaction
     */
    public function setId($id)
    {
        $this->id = (int) $id;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime($format = null)
    {
        if (null !== $format) {
            return $this->datetime->format($format);
        }

        return $this->datetime;
    }

    /**
     * @param  \DateTime $datetime
     * @return \Bitstamp\Api\Model\Transaction
     */
    public function setDateTime(\DateTime $datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param  float $price
     * @return \Bitstamp\Api\Model\Transaction
     */
    public function setPrice($price)
    {
        $this->price = (float) $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param  float $amount
     * @return \Bitstamp\Api\Model\Transaction
     */
    public function setAmount($amount)
    {
        $this->amount = (float) $amount;

        return $this;
    }

}
