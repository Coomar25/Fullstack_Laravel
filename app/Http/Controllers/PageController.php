<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function welcome_index()
    {
        // $products = Product::paginate(3);
        // return view('welcome', compact('products'));

        $products = Product::paginate(3);
        return view('welcome', compact('products'));
    }
}
