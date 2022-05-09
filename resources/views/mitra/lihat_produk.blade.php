@extends('mitra.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">List Product</h1>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Jenis</th>
        <th scope="col">Stok</th>
        <th scope="col">Harga</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($list as $data)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$data->jenis}}</td>
            <td>{{$data->stok}}</td>
            <td>{{$data->harga}}</td>
            <td>{{$data->tanggal}}</td>
            <td>
                <a href="{{route('edit',$data->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
