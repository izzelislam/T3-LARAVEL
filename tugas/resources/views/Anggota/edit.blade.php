@extends('layouts.app')
@section('title','Anggota')
@section('content')
    <div class="container">
      <h1 class="my-3" >Update Data Anggota</h1>
      <form method="POST" action="{{ route('update',['id'=>$anggota->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">Nama </label>
          <input name="nama" type="text" class="form-control @error ('nama') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name example" value="{{$anggota->nama}}">
           @error ('nama')
           <div class="invalid-feedback">
              {{$message}}
           </div>
           @enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">No Anggota </label>
          <input name="no_anggota" type="number" class="form-control @error ('no_anggota') is-invalid @enderror" id="exampleFormControlInput1" placeholder="09826354" value="{{$anggota->no_anggota}}">
          @error ('no_anggota')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email </label>
          <input name="email" type="email" class="form-control @error ('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$anggota->email}}">
          @error ('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Alamat</label>
          <textarea name="alamat" class="form-control @error ('alamat') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" >{{$anggota->alamat}}</textarea>
          @error ('alamat')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" value="update">
        </div>
      </form>
    </div>
@endsection