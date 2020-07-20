@extends('admin.index')
@section('title','create article')
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
			  <div class="card-body">
			    <form role="form" method="post" action="{{ route('articleInsert') }}">
			    	@csrf
			      <div class="row">
			        <div class="col-sm-12">
			          <!-- select -->
			          <div class="form-group">
			            <label>Pilih Categori</label>
			            <select class="form-control" name="category">
			            	@foreach ($category as $data)
			            		<option value="{{$data->id}}">{{$data->name}}</option>
			            	@endforeach
			            </select>
			          </div>
			        </div>  
			      </div>

			      <div class="row">
			        <div class="col-sm-12">
			          <!-- text input -->
			          <div class="form-group">
			            <label>Title</label>
			            <input type="text" name="title" class="form-control" placeholder="Enter ...">
			          </div>
			        </div>
			      </div>

			      <div class="row">
			        <div class="col-sm-12">
			          <!-- textarea -->
			          <div class="form-group">
			            <label>Article</label>
			            <textarea name="article" class="form-control" rows="3" placeholder="Enter ..."></textarea>
			          </div>
			        </div>
			      </div>

			      <div class="mt-5">
			        <button type="submit" class="btn btn-info">Submit</button>
			        <button  class="btn btn-default float-right"><a href="{{route('categori')}}">Kembali</a></button>
			      </div>
			    </form>
			  </div>
			</div>
		</div>
	</div>
@endsection