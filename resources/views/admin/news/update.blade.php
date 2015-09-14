@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
          Article Update
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
    <br><br>
    <div style="border:solid 2px #D9DCE0;background-color:#F5F5F5">
      <form id="form1" runat="server" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group" style="margin-top:1%">
          <label class="col-md-2 control-label">Judul</label>
          <div class="col-md-6">
            <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{ $news->judul }}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Poster/Gambar</label>
          <div class="col-md-6">
             <input type='file'  id="imginp" class="form-control" style="" name="imginp" value="<?php echo URL::to(substr($news->gambar,6)); ?>" />
            <input type='hidden' class="form-control" style="" name="img_temp" value="{{$news->gambar }}" />           
          </div>
        </div>
       <div class="form-group">
          <div class="col-md-6">
            <label class="col-md-4 control-label"></label>
            <img id="blah" src="<?php echo URL::to(substr($news->gambar,6)); ?>" style="margin-left:2%;width:30%" />
            </div>
       </div>
       <div class="form-group">
          <div class="col-md-11" style="margin-left:4%">
            <textarea id="summernote" name="konten">{{ $news->konten }}</textarea>
          </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right" style="margin-right:6%">Post</button>
        </div>
      </form>
    </div>
      
    <br><br>
    
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
            ['insert', ['link','video']],
            ['misc',['codeview']]
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
@endsection
