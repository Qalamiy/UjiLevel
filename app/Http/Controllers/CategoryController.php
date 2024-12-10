<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index(){
      $category=Categories::get();
    return view('categories.index',compact('category'));
   }
}
