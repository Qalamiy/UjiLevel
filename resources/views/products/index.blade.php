@extends('layouts.master')
@section('content')
<div class="container-fluit p-3">
    <h1>My Products</h1>
    {{-- categori --}}
    <ul class="list-group list-group-horizontal ">
      @foreach ($category as $item)
        <a href="{{route('ke-productSaya')}}?category={{$item->id}}" >
        <div class="nav-item text-button-small text-secondary border border-blue-2px border-r">{{$item->title}}</div>  
        </a>  
      
        
        @endforeach
      </ul>
      {{-- tabel products --}}
      
          
     
      <div class="row mt-3 ">@foreach ($products as $item)
        <div class="col-md-6 col-lg-4 col-xl-3 mt-1"><div class="card">
            <img src=" {{ asset($item->file) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$item->title}}</h5>
              <p class="card-text">{{$item->description}}</p>
              <a href="#" class="btn btn-primary">go where</a>
            </div>
          </div></div>
         @endforeach
      </div>
      
</div>
@endsection