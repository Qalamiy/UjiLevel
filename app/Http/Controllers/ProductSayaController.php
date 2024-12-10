<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductSayaController extends Controller
{
   public function index(){
      $category=Categories::get();
      $products=Products::get();
    return view('products.index',compact('products','category'));
   }

}
