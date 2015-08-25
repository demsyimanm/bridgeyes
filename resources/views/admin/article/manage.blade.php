@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
        	{{$kategori->nama}} Article 
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
    @if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<div class="box-body">
		<br><div class="col-xs-3 text-left">
	        <a href="{{ URL::to('admin/artikel/'.$kategori->id.'/create') }}" class="btn btn-block btn-social btn-instagram">
            	<i class="fa fa-plus"></i> Tambah Artikel {{$kategori->nama}}
          	</a>
      	</div><br><br><br>
		<script> 
		    $(function () {
		    	$("#data_table").DataTable();
		    });
	    </script>
	  	<table id="data_table" class="table table-bordered table-striped">
	  	<?php $i = 1;?>
	    <thead>
		    <tr>
		        <th width="5%" class="text-center">No</th>
		        <th width="12.5%">Judul</th>
		        <th width="10%">Penulis</th>
		        <th width="20%">Konten</th>
	        	<th width="17.5%">Tanggal</th>
	        	<th width="20%">Poster</th>
	        	<th width="10%">Action</th>
	      	</tr>
	    </thead>
	    <tbody>
	    	@foreach($artikel as $art)
	      	<tr>
	      		<td class="text-center"><?php echo $i++ ?></td>
	      		<td><a href="{{ URL::to('admin/artikel/'.$id_kategori.'/update/'. $art->id) }}" >{{ $art->judul }}</td>
	      		<td>{{ $art->users_id }}</td>
	      		<td><?php echo substr(nl2br($art->konten),0,30)." ..."; ?></td>
	      		<td>{{ $art->tanggal }}</td>
	      		<td><img src="{{$art->gambar}}" style="width:25%"> </td>
	      		<td>
	      				<a href="{{ URL::to('admin/artikel/'.$id_kategori.'/update/'. $art->id) }}" class="btn btn-default"><i class="fa fa-pencil"></i>
	      				<a href="{{ URL::to('admin/artikel/'.$id_kategori.'/delete/'. $art->id) }}" class="btn btn-default" ><i class="fa fa-times"></i>
	      		</td>
	      	</tr>
	      	@endforeach
	    </tbody>
	    <tfoot>
	      	<tr>
	       		<th class="text-center">No</th>
		        <th>Judul</th>
		        <th>Penulis</th>
		        <th>Konten</th>
	        	<th>Tanggal</th>
	        	<th>Poster</th>
	        	<th>Action</th>
	      	</tr>
	    </tfoot>
	  	</table>
	</div><!-- /.box-body -->
    </section><!-- /.content -->
@endsection
