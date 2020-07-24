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
      <h1 class="center">Daftar Anggota</h1>
      <a href="/Anggota/create" class="btn btn-dark mb-3">tambah data</a>
        <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">No Anggota</th>
            <th scope="col">email</th>
            <th scope="col">alamat</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($anggota as $ang)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$ang->nama}}</td>
            <td>{{$ang->no_anggota}}</td>
            <td>{{$ang->email}}</td>
            <td>{{$ang->alamat}}</td>
            <td>
              <a href="/Anggota/edit/{{$ang->id}}" class="btn btn-primary btn-sm">Edit</a>
              <form method="POST" action="/Anggota/delete/{{$ang->id}}">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>