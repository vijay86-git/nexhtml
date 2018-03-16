@extends('admin.layout.master')

@section('content')

<style type="text/css">
.url{margin:10px 0 0 0; float:left;border:1px solid #ddd;padding:2px 4px;width:155px;text-overflow: ellipsis;overflow:hidden !important;white-space: nowrap;}  
.cstm{margin:10px 0 0 5px;padding:3px;}

</style>
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Upload Images</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

               <div class="row">

                  <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">

                       @if ($success = Session::get('success'))
                          <div class="alert alert-success">
                              <p>{{ $success }}</p>
                          </div>
                       @endif

                       @if ($error = Session::get('error'))
                          <div class="alert alert-danger">
                              <p>{{ $error }}</p>
                          </div>
                       @endif

                       @if ($errors->all())
                          <div class="alert alert-danger">
                                  @foreach ($errors->all() as $error)
                                      <p><i class="fa fa-exclamation-circle"></i> {{ $error }} </p>
                                  @endforeach
                          </div>
                       @endif

                      <!-- /.box-header -->
                      <!-- form start -->
                        {!! Form::open(['route' => 'image.store', 'role' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}
                        <div class="box-body">
                          <div class="form-group">
                            <label for="inputfile">File input</label>
                            <input type="file" id="inputfile" name="image" accept="image/*" />
                          </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                          <button type="submit" class="btn btn-success btn-flat">Upload Images</button>
                        </div>
                      {!! Form::close() !!}
                    </div>
                    <!-- /.box -->

                  </div>
                 
               </div>

               <!-- gallery -->

               <div class="row">

               @if(count($images) > 0)
               @foreach ($images as $data)

                    <div class="col-sm-3" style="margin:10px 0">
                      <img class="img-responsive" src="{{ env('UPLOAD_PATH').$data->image_url }}" alt="Photo">
                      <input type="text" id="text_{{ $data->id }}" class="url" value="{{ env('UPLOAD_PATH').$data->image_url }}" /><button type="button" class="btn btn-success btn-flat btn-sm cstm" data-attr="{{ $data->id }}" onclick="copyContent({{ $data->id }})">Copy</button>
                    </div>

                @endforeach
              @endif
              </div>

              {!! $images->links() !!}

               <!-- close -->
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@stop


<script>

  function copyContent(id)
    {

       var $temp = $("<input>");
       $("body").append($temp);

       $temp.val($('#text_'+id).val()).select();
       document.execCommand("copy");
       $temp.remove();
    }

  function load(id)
   {
      location.href = 'topic?subject_id='+id;
   }
</script>