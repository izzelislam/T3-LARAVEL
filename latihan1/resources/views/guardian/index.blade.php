<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Data Wali</h1>
	<a href="/guardians/create">tambah data</a>
	<table border="1" style="width: 100%">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIK</th>
				<th>No Hp</th>
				<th>Gender</th>
				<th>Tangagal Lahir</th>
				<th>Alamat</th>
				<th>Orang Tua Kandung</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($guardians as $guardian)
				<tr>
					<td>{{$guardian->name}}</td>
					<td>{{$guardian->nik}}</td>
					<td>{{$guardian->phone}}</td>
					<td>{{ ($guardian->gender =='l') ? 'laki-laki' : 'perempuan'}}</td>
					<td>{{$guardian->birth_date}}</td>
					<td>{{$guardian->address}}</td>
					<td>{{$guardian->is_parent ? 'kandung':'angkat'}}</td>
					<td><a href="">Edit</a><br><a href="">Hapus</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>