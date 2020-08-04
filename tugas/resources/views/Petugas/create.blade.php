@extends('layouts.app')
@section('title','Anggota')
@section('content')
    <div class="container">
      <h1 class="my-3" >Masukkan Data Petugas</h1>
      <form method="POST" action="{{ route('petugasStore') }}">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Nama </label>
          <input name="nama" type="text" class="form-control @error ('nama') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name example" value="{{old('nama')}}">
           @error ('nama')
           <div class="invalid-feedback">
              {{$message}}
           </div>
           @enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">No Petugas </label>
          <input name="no_petugas" type="number" class="form-control @error ('no_petugas') is-invalid @enderror" id="exampleFormControlInput1" placeholder="09826354" value="{{old('no_anggota')}}">
          @error ('no_petugas')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email </label>
          <input name="email" type="email" class="form-control @error ('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name@example.com" value="{{old('email')}}">
          @error ('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Alamat</label>
          <textarea name="alamat" class="form-control @error ('alamat') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" value="{{old('alamat')}}"></textarea>
          @error ('alamat')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" value="submit">
        </div>
      </form>
    </div>
@endsection