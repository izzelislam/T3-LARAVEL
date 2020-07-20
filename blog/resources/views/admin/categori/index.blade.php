@extends('admin.index')
@section('title','categori')
@section('content')
	<div class="row content pt-3">
	  <div class="col-md-12">
	    <div class="card">
	      <div class="card-header">
	        <h3 class="card-title">Bordered Table</h3>
	      </div>
	      <!-- /.card-header -->
	      @if (session('status'))
	      	<div class="alert alert-success">
	      		{{session('status')}}
	      	</div>
	      @elseif(session('hapus'))
	      	<div class="alert alert-danger">
	      		{{session('hapus')}}
	      	</div>
	      @elseif(session('berhasil'))
	      	<div class="alert alert-warning">
	      		{{session('berhasil')}}
	      	</div>
	      @endif
	      <div class="card-body">
	        <table class="table table-bordered">
	          <thead>                  
	            <tr>
	              <th style="width: 10px">No</th>
	              <th>Nama</th>
	              <th style="width: 100px">Action</th>
	            </tr>
	          </thead>
	          <tbody>
	            @foreach ($category as $data)
	            	<tr>
	            	  <td>{{$loop->iteration}}</td>
	            	  <td>{{$data->name}}</td>
	            	  <td>
	            	    <a href="/categori/edit/{{$data->id}}" class="btn btn-primary btn-sm"><i class="fa fa-wrench"></i></a>
	            	    <a href="/categori/hapus/{{$data->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
	            	  </td>
	            	</tr>
	            @endforeach
	           </tbody>
	        </table>
	      </div>
	      <!-- /.card-body -->
	      <div class="card-footer clearfix">
	        <ul class="pagination pagination-sm m-0 float-right">
	          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
	          <li class="page-item"><a class="page-link" href="#">1</a></li>
	          <li class="page-item"><a class="page-link" href="#">2</a></li>
	          <li class="page-item"><a class="page-link" href="#">3</a></li>
	          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
	        </ul>
	      </div>
	    </div>
	    <!-- /.card -->

	    <!-- /.card -->
	  </div>
	  <!-- /.col -->
	  <!-- /.col -->
	</div>
@endsection