<?php

namespace KNone\Grecha\Entity;

use KNone\Grecha\Entity\BaseRepositoryInterface;

interface PriceRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * @return Price|null
     */
    public function findActualPrice();

    /**
     * @return PriceStack
     */
    public function getPriceStack();

    /**
     * @param \DateTimeInterface $dateTime
     * @return Price|null
     */
    public function findPriceByDateTime(\DateTimeInterface $dateTime);

    /**
     * @return Price[]
     */
    public function findPricesForWeek();

    /**
     * @return Price[]
     */
    public function findPricesForMonth();
}
