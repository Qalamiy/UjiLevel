@extends('layouts.master')
@section('content')
<div class="container-fluit p-3">
    <div class="card-shadow">
        <div class="card-body">
            <h1>Categories</h1>
            <button type="submit" class="btn btn-primary">tambah</button>

            <table class="table table-bordered align-middle">
                <thead class="table table-hover">
                    <tr>
                        <th>id</th>
                        <th>Tittle</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="m-5">
                    @foreach ($category as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
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