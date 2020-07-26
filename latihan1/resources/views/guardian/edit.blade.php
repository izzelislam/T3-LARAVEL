@extends('layout.app')
@section('title','Guardian')
@section('content')
	<h1>insert data</h1>
	<form method="POST" action="/guardians/update/{{$guardian->id}}">
		@csrf
		@method('PUT')
		<table>
			<tr>
				<td>nama :</td>
				<td> <input type="text" name="name" placeholder="nama" value="{{$guardian->name}}"></td>
			</tr>
			<tr>
				<td>nik :</td>
				<td> <input type="number" name="nik" placeholder="nik" value="{{$guardian->nik}}"></td>
			</tr>
			<tr>
				<td>gender :</td>
				<td> laki-laki <input type="radio" name="gender" value="l" {{$guardian->gender == 'l' ?'checked': null}}> 
					 perempuan <input type="radio" name="gender" value="p" {{$guardian->gender == 'p' ?'checked':null}}>
				</td>
			</tr>
			<tr>
				<td>phone :</td>
				<td> <input type="number" name="phone" placeholder="phone" value="{{$guardian->phone}}"></td>
			</tr>
			<tr>
				<td>Tanngal Lahir :</td>
				<td> <input type="date" name="birth_date" placeholder="Tanngal Lahir" value="{{$guardian->birth_date}}"></td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><textarea name="address">{{$guardian->address}}</textarea></td>
			</tr>
			<tr>
				<td>anak kandung :</td>
				<td>
					ya <input type="radio" name="is_parent" value="1" {{ $guardian->is_parent ? 'checked' : null}}>
					tidak <input type="radio" name="is_parent" value="0" {{ !$guardian->is_parent ? 'checked' : null}}>
			</td>
			</tr>
			<tr>
				<td> <input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
@endsection