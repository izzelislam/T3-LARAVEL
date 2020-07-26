@extends('layouts.app')
@section('title','Buku')
@section('content')
    <div class="container">
      <h1 class="center">Daftar Buku</h1>
      <a href="/Buku/create" class="btn btn-dark mb-3">tambah Buku</a>
        <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">judul</th>
            <th scope="col">penulis</th>
            <th scope="col">penerbit</th>
            <th scope="col">jumlah</th>
            <th scope="col">kondisi</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($Buku as $ang)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$ang->judul}}</td>
            <td>{{$ang->penulis}}</td>
            <td>{{$ang->penerbit}}</td>
            <td>{{$ang->jumlah}}</td>
            <td>{{$ang->kondisi}}</td>
            <td>
              <a href="/Buku/edit/{{$ang->id}}" class="btn btn-primary btn-sm">Edit</a>
              <form method="POST" action="/Buku/delete/{{$ang->id}}">
                @csrf
                @method('DELETE')
                  <button  class="btn btn-danger btn-sm">Hapus</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
        </table>
    </div>
@endsection