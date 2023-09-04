<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Product;

class CatalogController extends Controller
{
    public function index()
    {
        $domain = request()->query('domain') ? request()->query('domain') : 'msk';
        $prices = Price::where('domain', $domain)->get();
        $productIds = $prices->pluck('product_id')->toArray();
        $products = Product::whereIn('id', $productIds)->get();
        return view('catalog.index', compact('products', 'prices', 'domain'));
    }
}
