<?php

namespace KoleImports\DropshipApi\Service;

use KoleImports\DropshipApi\Model\Request\Order;

class TransactionService
{
    private $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function getTransaction($id)
    {
        $order = new Order;
        $order->setOrderId($id);

        return $this->client->GetTransaction(array('order_id' => $order->getOrderId()));
    }

    public function getTransactions()
    {
        return $this->client->GetTransactions();
    }
}
