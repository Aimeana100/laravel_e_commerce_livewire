<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured= 0;

    }
    public function generateslug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function storeProduct()
    {   
        $product = new Product();
        $product->short_description = 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th ';
        $product->description = 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th ';
        $product->regular_price = 10000;
        $product->sale_price = 10000;
        $product->SKU = 'SKU_12';
        $product->stock_status = 'instock';
        $product->is_featured = 1;
        $product->quantity = 100; 

        // $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        // $product->short_description = $this->short_description;
        // $product->description = $this->description;
        // $product->regular_price = $this->regular_price;
        // $product->sale_price = $this->sale_price;
        // $product->SKU = $this->SKU;
        // $product->stock_status = $this->stock_status;
        // $product->is_featured = $this->featured;
        // $product->quantity = $this->quantity;
        $imagename = 'prod_'.Carbon::now()->timestamp. '.' .$this->image->extension(); 
        $this->image->storeAs('products', $imagename);
        // $this->image->move(public_path().'/storage/images/products', $img = $imagename);
        $product->image = $imagename;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message', 'Product has created successfuly');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component', ['categories'=>$categories])->layout('layouts.adminbase');
    }
}
