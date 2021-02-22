<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if(File::exists(public_path('assets/images/products/'.$product->image))){
            File::delete(public_path('assets/images/products/'.$product->image));
            $product->delete();
            session()->flash('message', 'Product has been deleted successfully');
        }else{

            session()->flash('message', ' Error: Image not Exist');
        }
       
    }
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.admin.admin-product-component', ['products'=>$products])->layout('layouts.adminbase');
    }
}
