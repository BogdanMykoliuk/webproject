<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Models\Product;
use App\Models\Manufacturer;


class MainController extends Controller
{
    public static function product($id)
    {
        session_start();

        $product = Product::where("id", $id)->first();

        if($product)
        {
            return view('product', ['product' => $product]);
        }
        else{
            return 'Error!';
        }
    }


	public static function catalog()
    {
        session_start();
		$products = Product::all();
        if($products)
        {
            return view('catalog', ['products' => $products]);
        }
        else{
            return 'Error!';
        }
		

    }

	public static function index()
    {
        session_start();
		$products = Product::all();
        if($products)
        {
            return view('index', ['products' => $products]);
        }
        else{
            return 'Error!';
        }
    }
}