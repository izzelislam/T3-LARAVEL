@extends('layouts.app')
@section('title','Anggota')
@section('content')
    <div class="container">
      <h1 class="center">Daftar Petugas</h1>
      <a href="{{ route('petugasCreate') }}" class="btn btn-dark mb-3">tambah data</a>
        <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No Petugas</th>
            <th scope="col">email</th>
            <th scope="col">alamat</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($Petugas as $ang)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$ang->nama}}</td>
            <td>{{$ang->no_petugas}}</td>
            <td>{{$ang->email}}</td>
            <td>{{$ang->alamat}}</td>
            <td>
              <a href="/Petugas/edit/{{$ang->id}}" class="btn btn-primary btn-sm">Edit</a>
              <form method="POST" action="/Petugas/delete/{{$ang->id}}">
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