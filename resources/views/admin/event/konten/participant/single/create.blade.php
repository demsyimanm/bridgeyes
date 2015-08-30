@extends('admin.master')
@section('content')
    <section class="content-header">
        <h1>
          Upload Data For Single Participant ({{$event->judul}})
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
    <div style="border:solid 2px #D9DCE0;background-color:#F5F5F5"><br>
      <form id="form1" runat="server" class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label class="col-md-2 control-label">File</label>
          <div class="col-md-6">
             <input type='file' class="form-control" style="" name="file" />
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
