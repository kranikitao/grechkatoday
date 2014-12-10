<?php

namespace KNone\Grecha\Entity;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;

/**
 * @deprecated
 */
class PriceRepository
{
    /**
     * @var \Doctrine\DBAL\Driver\Connection
     */
    private $connection;

    /**
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return Price
     */
    public function findLastPrice()
    {
        $date = new \DateTime('today');
        $sql = 'SELECT * FROM k_prices p WHERE p.date <= ? ORDER BY p.date DESC LIMIT 1';

        /** @var Statement $statement */
        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $date, 'datetime');
        $statement->execute();
        $result = $statement->fetchAll();

        if (empty($result)) {
            return null;
        }

        return $this->createPriceObject($result);
    }

    /**
     * @param array $values
     * @return Price
     */
    private function createPriceObject(array $values)
    {
        $values = $values[0];
        $date = \DateTime::createFromFormat('Y-m-d H:i:s', $values['date']);

        $price = new Price($values['price'], $date, $values['description']);

        $reflection = new \ReflectionObject($price);
        $idProperty = $reflection->getProperty('id');
        $idProperty->setAccessible(true);
        $idProperty->setValue($price, $values['id']);

        return $price;
    }
}