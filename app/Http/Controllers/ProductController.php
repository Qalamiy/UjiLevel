<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index(){
    $DataProduct=Products::get();
    return view('dataproducts.index',compact('DataProduct'));
}
public function tambah(){
    $category=Categories::get();
    return view('dataproducts.tambah',compact('category'));
 }
 public function aksi_tambah(Request $request){

    $request->validate([
        'title'=> 'required',
        'price'=> 'required',
        'category'=> 'required',
        'file' => 'required'
    ]);
    $data = [
        'title' =>$request->title,
        'category' =>$request->category,
        'price' =>$request->price,
        'discount'=>$request->discount,
        'description'=>$request->description,
    ];
    if($request->hasFile('file')){
        $file=$request->file('file');
        //time.png
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('products'),$filename);
        // menambahkan key name ke $data 
        $data['file'] = 'products/'.$filename;
    }
    Products::create($data);
    return redirect()->route('ke-dataProducts');
 }
}
