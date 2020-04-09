<!DOCTYPE html>
<html>
<head>
  <title>home</title>
</head>
<body>
  <h1>masukin nama</h1>
  <form method="get" action="/home/nama/{nama}">
    @csrf
    <label>nama</label>
    <input type="text" name="nama">
    <input type="submit" name="" value="sub">
  </form>
  <br>
  <button><a href="{{route("nama")}}">route name</a></button>
</body>
</html>