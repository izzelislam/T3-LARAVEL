@extends('layout.app')
@section('title','Guardian')
@section('content')
	<h1>insert data</h1>
	<form method="POST" action="/guardians/store">
		@csrf
		<table>
			<tr>
				<td>nama :</td>
				<td> <input type="text" name="name" placeholder="nama"></td>
			</tr>
			<tr>
				<td>nik :</td>
				<td> <input type="number" name="nik" placeholder="nik"></td>
			</tr>
			<tr>
				<td>gender :</td>
				<td> laki-laki <input type="radio" name="gender" value="l"> perempuan <input type="radio" name="gender" value="p"></td>
			</tr>
			<tr>
				<td>phone :</td>
				<td> <input type="number" name="phone" placeholder="phone"></td>
			</tr>
			<tr>
				<td>Tanngal Lahir :</td>
				<td> <input type="date" name="birth_date" placeholder="Tanngal Lahir"></td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<td>anak kandung :</td>
				<td>ya <input type="radio" name="is_parent" value="1">tidak <input type="radio" name="is_parent" value="0"></td>
			</tr>
			<tr>
				<td> <input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
@endsection