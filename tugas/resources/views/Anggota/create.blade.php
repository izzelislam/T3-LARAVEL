<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Data Anggota</title>
  </head>
  <body>
    <div class="container">
      <h1 class="my-3" >Masukkan Data Anggota</h1>
      <form method="POST" action="/Anggota/store">
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
          <label for="exampleFormControlInput1">No Anggota </label>
          <input name="no_anggota" type="number" class="form-control @error ('no_anggota') is-invalid @enderror" id="exampleFormControlInput1" placeholder="09826354" value="{{old('no_anggota')}}">
          @error ('no_anggota')
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>