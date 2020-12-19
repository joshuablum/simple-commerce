<?php

namespace DoubleThreeDigital\SimpleCommerce\Http\Controllers;

use DoubleThreeDigital\SimpleCommerce\Facades\Product;
use DoubleThreeDigital\SimpleCommerce\Http\Requests\CartItem\DestroyRequest;
use DoubleThreeDigital\SimpleCommerce\Http\Requests\CartItem\StoreRequest;
use DoubleThreeDigital\SimpleCommerce\Http\Requests\CartItem\UpdateRequest;
use DoubleThreeDigital\SimpleCommerce\SessionCart;
use Illuminate\Support\Arr;
use Statamic\Facades\Stache;

class CartItemController extends BaseActionController
{
    use SessionCart;

    public function store(StoreRequest $request)
    {
        $cart = $this->hasSessionCart() ? $this->getSessionCart() : $this->makeSessionCart();
        $product = Product::find($request->product);

        $items = $cart->has('items') ? $cart->get('items') : [];

        // Ensure there's enough stock to fulfill the customer's quantity
        if (isset($product->data['stock']) && $product->data['stock'] < $request->quantity) {
            return $this->withErrors($request, "There's not enough stock to fulfil the quantity you selected. Please try again later.");
        }

        // Ensure the product doesn't already exist in the cart
        $alreadyExistsQuery = collect($items)
            ->where('product', $request->product);

        if ($request->has('variant')) {
            $alreadyExistsQuery = $alreadyExistsQuery->where('variant', $request->get('variant'));
        }

        if ($alreadyExistsQuery->count() >= 1) {
            return $this->withErrors($request, 'You can only add a product/variant to the same cart once.');
        }

        $item = [
            'id'       => Stache::generateId(),
            'product'  => $request->product,
            'quantity' => (int) $request->quantity,
            'total'    => 0000,
        ];

        if ($request->has('variant')) {
            $item['variant'] = $request->variant;
        }

        $cart->data([
            'items' => array_merge($items, [$item]),
        ])->save();

        $cart->calculateTotals();

        return $this->withSuccess($request);
    }

    public function update(UpdateRequest $request, string $requestItem)
    {
        $cart = $this->getSessionCart();

        $cart->data([
            'items' => collect($cart->data['items'] ?? [])
                ->map(function ($item) use ($request, $requestItem) {
                    if ($item['id'] !== $requestItem) {
                        return $item;
                    }

                    return array_merge(
                        $item,
                        Arr::except($request->all(), ['_token', '_params', '_redirect']),
                    );
                })
                ->toArray(),
        ])->save();

        $cart->calculateTotals();

        return $this->withSuccess($request);
    }

    public function destroy(DestroyRequest $request, string $item)
    {
        $cart = $this->getSessionCart();

        $cart->data([
            'items' => collect($cart->data['items'])
                ->where('id', '!==', $item)
                ->toArray(),
        ])->save();

        $cart->calculateTotals();

        return $this->withSuccess($request);
    }
}
