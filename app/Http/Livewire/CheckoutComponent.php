<?php

namespace App\Http\Livewire;

use Cart;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CheckoutComponent extends Component
{
    public function render()
    {
        $mostViewed =DB::table('products as P')->inRandomOrder()->take(8)
        ->join('categories as C', 'P.category_id', '=', 'C.id', )
        ->select('P.*', 'C.slug as Cat_slug', 'C.name')
        ->orderBy('updated_at', 'desc')
        ->inRandomOrder()
        ->take(6)
        ->get();
        return view('livewire.checkout-component', ['mostViewedProducts'=>$mostViewed])->layout('layouts.base');
    }
}
