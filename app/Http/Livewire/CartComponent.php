<?php

namespace App\Http\Livewire;

use Cart;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $Qty = $product->qty + 1;
        Cart::update($rowId, $Qty);

    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $Qty = $product->qty - 1;
        Cart::update($rowId, $Qty);

    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_meassage', 'Item has been removed');
    }

    public function destroyAll()
    {
        Cart::destroy();
        session()->flash('success_meassage', 'Item has been removed');
    }

    public function render()
    {
        // most viewed products
        // $mostViewed = Product::orderBy('updated_at', 'desc')->inRandomOrder()->take(6);
        $mostViewed =DB::table('products as P')->inRandomOrder()->take(8)
        ->join('categories as C', 'P.category_id', '=', 'C.id', )
        ->select('P.*', 'C.slug as Cat_slug', 'C.name')
        ->orderBy('updated_at', 'desc')
        ->inRandomOrder()
        ->take(6)
        ->get();
        return view('livewire.cart-component', ['mostViewedProducts'=> $mostViewed])->layout('layouts.base');
    }
}
