<?php

enum OrderStatus {
    case Pending;
    case Shipped;
    case Delivered;
}

class Order {
    public function __construct(public int $id,public OrderStatus $status)
     { }
}

$order = new Order(1, OrderStatus::Pending);
echo $order->status->name;

?>