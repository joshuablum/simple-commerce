<?php

namespace DoubleThreeDigital\SimpleCommerce\Gateways;

use DoubleThreeDigital\SimpleCommerce\Contracts\Order;
use DoubleThreeDigital\SimpleCommerce\Facades\Cart;

class Purchase
{
    protected $request;
    protected $order;

    public function __construct($request, Order $order)
    {
        $this->request = $request;
        $this->order = $order;
    }

    public function request()
    {
        return $this->request;
    }

    public function order()
    {
        return $this->order;
    }

    public function cart()
    {
        return Cart::find($this->order->id());
    }
}
