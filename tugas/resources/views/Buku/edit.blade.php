@extends('layouts.app')
@section('title','Buku')
@section('content')
    <div class="container">
      <h1 class="my-3" >Masukkan Data Buku</h1>
      <form method="POST" action="/Buku/update/{{$Buku->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlInput1">judul </label>
          <input name="judul" type="text" class="form-control @error ('judul') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name example" value="{{$Buku->judul}}">
           @error ('judul')
           <div class="invalid-feedback">
              {{$message}}
           </div>
           @enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">penulis </label>
          <input name="penulis" type="text" class="form-control @error ('penerbit') is-invalid @enderror" id="exampleFormControlInput1" placeholder="09826354" value="{{$Buku->penulis}}">
          @error ('penerbit')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">penerbit </label>
          <input name="penerbit" type="text" class="form-control @error ('penerbit') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$Buku->penerbit}}">
          @error ('penerbit')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">jumlah </label>
          <input name="jumlah" type="number" class="form-control @error ('jumlah') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$Buku->jumlah}}">
          @error ('jumlah')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror
        </div>
        <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">kondisi</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="kondisi" id="gridRadios1" value="baik" {{$Buku->kondisi == 'baik' ? 'checked' : null}}>
                  <label class="form-check-label" for="gridRadios1">
                    baik
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="kondisi" id="gridRadios2" value="rusak" {{ !$Buku->kondisi == 'baik' ? 'checked' : null}}>
                  <label class="form-check-label" for="gridRadios2">
                    rusak
                  </label>
                </div>
              </div>
            </div>
          </fieldset>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" value="Update">
        </div>
      </form>
    </div>
@endsection