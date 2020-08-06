@extends('layouts.app')
@section('title','Anggota')
@section('content')
    <div class="container">
      <h1 class="my-3" >Masukkan Data Petugas</h1>
      <form method="POST" action="/Petugas/store">
        @csrf
        <div class="form-group">
           <label for="exampleFormControlSelect1">Buku :</label>
           <select name="buku_id" class="form-control" id="exampleFormControlSelect1">
             <option>{{  }}</option>

           </select>
         </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" value="submit">
        </div>
      </form>
    </div>
@endsection