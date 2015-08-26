@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
        	{{$eve->judul}} Dashboard
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
		<br>
        <div class="col-md-12">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#information" data-toggle="tab">Information</a></li>
                  <li><a href="#participant" data-toggle="tab">Participant</a></li>
                  <li><a href="#bulletin" data-toggle="tab">Bulletin</a></li>
                  <li><a href="#result" data-toggle="tab">Result</a></li>
                  <li><a href="#gallery" data-toggle="tab">Gallery</a></li>
                </ul><br><br>
                <div class="tab-content">
                  <div class="active tab-pane" id="information">
                  	<form id="form1" action="{{URL::to('admin/event/manage/'.$eve->id.'/bulletin/create')}}" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				        <input type="hidden" name="_token" value="{{ csrf_token() }}">
				        <div class="form-group" style="margin-top:1%">
				          <label class="col-md-2 control-label">Judul</label>
				          <div class="col-md-6">
				            <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{ $eve->judul }}">
				          </div>
				        </div>
				        <div class="form-group" style="margin-top:1%">
				          <label class="col-md-2 control-label">Tanggal</label>
				          <div class="col-md-6">
				            <input type="text" class="form-control datepicker" name="tanggal" placeholder="Tanggal" value="{{ $eve->tanggal }}">
				          </div>
				        </div>
				        <div class="form-group">
				          <label class="col-md-2 control-label">Poster/Gambar</label>
				          <div class="col-md-6">
				             <input type='file'  id="imginp" class="form-control" style="" name="imginp" value="<?php echo URL::to(substr($eve->gambar,6)); ?>" />
				            <input type='hidden' class="form-control" style="" name="img_temp" value="{{$eve->gambar }}" />           
				          </div>
				        </div>
				       <div class="form-group">
				          <div class="col-md-6">
				            <label class="col-md-4 control-label"></label>
				            <img id="blah" src="<?php echo URL::to(substr($eve->gambar,6)); ?>" style="margin-left:2%;width:30%" />
				            </div>
				       </div>
				       <div class="form-group">
				          <label class="col-md-2 control-label">File</label>
				          <div class="col-md-6">
				             <input type='file' class="form-control" style="" name="file" value="<?php echo URL::to(substr($eve->file,6)); ?>" />
				             <input type='hidden' class="form-control" style="" name="file_temp" value="{{$eve->file }}" />     
				             <br><b>Uploaded File : </b><p style="margin-left:5%;font-size:16px"><?php echo substr($eve->file,17); ?></p>
				          </div>
				        </div>
				       <div class="form-group">
				          <div class="col-md-11" style="margin-left:4%">
				            <textarea id="summernote" name="konten">{{ $eve->konten }}</textarea>
				          </div>
				        </div>
				        <div class="form-group">
				            <button type="submit" class="btn btn-primary pull-right" style="margin-right:6%">Update</button>
				        </div>
				      </form>
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="participant">
                    
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="bulletin">
                    <div class="col-xs-3 text-left">
				        <a href="{{ URL::to('admin/event/create') }}" class="btn btn-block btn-social btn-instagram">
			            	<i class="fa fa-plus"></i> Tambah Bulletin
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
					        <th width="40%">Tanggal<span style="font-size:10px;"></th>
					        <th width="45%">Buletin</th>
					        <th width="10%">Action</th>
				      	</tr>
				    </thead>
				    <tbody>
				    	@foreach($bulletin as $bull)
				      	<tr>
				      		<td class="text-center"><?php echo $i++ ?></td>
				      		<td>{{ $bull->tanggal }}</td>
				      		<td>
				      			@if(!empty($bull->file))
				      				<a href="{{URL::to($bull->file) }}" class="btn btn-default" style="margin:auto;position:relative;display:block" download><i class="fa fa-download"></i> Download</a>
				      			@else 
				      				<p>No File</p>
				      			@endif
				      		</td>
				      		<td>
				      				<a href="{{ URL::to('admin/event/bulletin/update/'.$bull->id) }}" class="btn btn-default"><i class="fa fa-pencil"></i>
				      				<a href="{{ URL::to('admin/event/bulletin/delete/'.$bull->id) }}" class="btn btn-default" ><i class="fa fa-times"></i>
				      		</td>
				      	</tr>
				      	@endforeach
				    </tbody>
				    <tfoot>
				      	<tr>
				       		<th class="text-center">No</th>
					        <th>Tanggal</th>
				        	<th>File</th>
				        	<th>Action</th>
				      	</tr>
				    </tfoot>
				  	</table>
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="result">
                    
                  </div><!-- /.tab-pane -->

                  <div class="tab-pane" id="gallery">
                    
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
        </div>
	</div><!-- /.box-body -->

    </section><!-- /.content -->
    <script type="text/javascript">
      $(document).ready(function() {
        $('#summernote').summernote({
          
          height: 300,
          minHeight: null,
          maxHeight: null,
          focus: true,

          toolbar: [     
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['table', ['table']],
            ['insert', ['link','video']]
          ]
        });
    }); 
    </script>
    <script>
   function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            $('#blah').attr('width', "50%");
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#imginp").change(function(){
      readURL(this);
    });
  </script>
  <script type="text/javascript">
        $('.datepicker').datepicker({
          format: 'yyyy/mm/dd',
          startDate: '-3d',
          clearBtn: true,
           autoclose: true
      });
    </script>
@endsection
