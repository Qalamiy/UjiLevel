@extends('layouts.master')
@section('content')
<div class="container-fluit p-3">
    <div class="card-shadow">
        <div class="card-body">
            <h1>Data Product</h1>
            <a href="{{route('ke-tambah_products')}}"><button type="submit" class="btn btn-primary">tambah</button></a>
            

            <table class="table table-bordered align-middle">
                <thead class="table table-hover">
                    <tr>
                        <th>id</th>
                        <th>Tittle</th>
                        <th>Description</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="m-5">
                    @foreach ($DataProduct as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->file}}</td>
                        <td>
                            <button type="submit" class="btn btn-danger">hapus</button>
                            <button type="submit" class="btn btn-warning">edit</button>
                        </td>
                    </tr>
                      @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
    
@endsection