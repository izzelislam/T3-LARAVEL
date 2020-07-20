@extends('admin.index')
@section('title','categori')
@section('content')
	<div class="row content pt-3">
		<div class="col-md-12">
			<div class="card card-info">
			  <div class="card-header">
			    <h3 class="card-title">Buat Categori</h3>
			  </div>
			  <!-- /.card-header -->
			  <!-- form start -->
			  @if ($errors->has('nama'))
			  	<div class="alert alert-danger">
			  		{{$errors->first('nama')}}
			  	</div>	
			  @endif
			  <form class="form-horizontal" method="POST" action="{{ route('categoriInsert') }}">
			  	@csrf
			    <div class="card-body">
			      <div class="form-group row">
			        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
			        <div class="col-sm-10">
			          <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama">
			        </div>
			      </div>
			    </div>
			    <!-- /.card-body -->
			    <div class="card-footer">
			      <button type="submit" class="btn btn-info">Submit</button>
			      <button  class="btn btn-default float-right"><a href="{{route('categori')}}">Kembali</a></button>
			    </div>
			    <!-- /.card-footer -->
			  </form>
			</div>
		</div>
	</div>
@endsection