<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeComponent extends Component
{

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');

        return redirect()->route('product.cart');

    }
    public function render()
    {
        //Getting count
        // $count = Product::count();
        // $skip = 5;
        // $limit = $count - $skip; // the limit
        // $collection = Product::skip($skip)->take($limit)->get();

        $Allproducts = Product::all();
        $AllLatestproducts = Product::orderBy('updated_at', 'desc')->get();
        $categories = Category::with('products')->get();
        $featuredProducts =DB::table('products as P')->inRandomOrder()->take(8)
            ->join('categories as C', 'P.category_id', '=', 'C.id', )
            ->select('P.*', 'C.slug as Cat_slug', 'C.name')
            ->get();

        return view('livewire.home-component', ['allproducts'=>$Allproducts, 'categories'=>$categories,'AllLatestProducts'=>$AllLatestproducts, 'featuredProducts'=> $featuredProducts])->layout('layouts.base');
    }
}
