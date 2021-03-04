<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        // popurar products
        $products = Product::paginate(12);
        // $date = Carbon::today()->subDays(7);
        // $latest_products = Product::where('created_at','>=',$date)->orderBy('updated_at', 'desc')->take(10)->get();

        $latest_products = Product::orderBy('updated_at', 'desc')->take(10)->get();

        return view('livewire.admin.admin-dashboard-component',['latest_products'=>$latest_products] )->layout('layouts.adminbase');
    }
}
