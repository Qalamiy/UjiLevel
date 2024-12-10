@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
    <div class="card-body">
    <h2>tambah product</h2>    
    {{-- @if($errors)
    @foreach($errors->all() as $item)
    <a class="text-danger">{{$item}}</a>
    @endforeach
    @endif --}}
    <form   class="user p-4" action="products/aksi_tambah" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group p-3">
            <input type="text" name="title" class="form-control form-control-user"
            aria-describedby="emailHelp" placeholder="Masukan judul">
        </div>
        <div class="form-group">
            <select name="category" class="form-control" id="">
                <option value="">pilih</option>
                @foreach($category as $item)
                 <option value="{{$item->id}}">{{$item->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group p-3">
            <textarea name="description" class="form-control" placeholder="Masukan descripsi" id="" cols="30" rows="3"></textarea>
        </div>
        <div class="form-group p-3">
            <input type="number" name="price" class="form-control form-control-user"
            aria-describedby="emailHelp" placeholder="Masukan harga">
        </div>
        <div class="form-group p-3">
            <input type="number" name="discount" class="form-control form-control-user"
            aria-describedby="emailHelp" placeholder="Masukan discount">
        </div>
        <div class="form-group p-3">
            <input type="file" name="file" class="form-control form-control-user" placeholder="Masukan file" >
        </div>
        <div>
            <button type="submit"  class="btn btn-primary btn-user">
               tambah
            </button>
        </div>
    
    
    </form>
    </div>
    </div>
      
           
        
    </div>
@endsection