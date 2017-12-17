@extends('admin.layout.master')

@section('content')
  <section class="content">
      <div class="row">

        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Interview label</h3>
            </div>
            <!-- /.box-header -->

               @if ($errors->all())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p><i class="fa fa-exclamation-circle"></i> {{ $error }} </p>
                            @endforeach
                    </div>
                    @endif
                    
                    @if(Session::has('error'))
                    <div class="alert-box success">
                      <h4 class='error'>{{ Session::get('error') }}</h2>
                    </div>
               @endif

            <!-- form start -->

            {!! Form::open(['route' => 'interview.store', 'role' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}

              <div class="box-body">

                <div class="form-group">
                  <label for="category">Subject&nbsp;<span class="req">*</span></label>
                  <select class="form-control" name="subject_id[]" multiple="multiple">
                    <option value="">-- Select Subject--</option>
                    @foreach ($subject as $data)
                      <option value="{{ $data->id }}">{{ $data->name }}</option>
                    @endforeach
                  </select>

                </div>

                <div class="form-group">
                  <label for="category">Interview Label&nbsp;<span class="req">*</span></label>
                  <input class="form-control" name="interview_label" placeholder="Interview label" type="text" value="{{ old('interview_label') }}">
                </div>

                <div class="form-group">
                  <label for="category">Slug&nbsp;<span class="req">*</span></label>
                  <input class="form-control" name="slug" placeholder="Slug" type="text" value="{{ old('slug') }}">
                </div>

                <div class="form-group">
                  <label for="page_title">Page Title&nbsp;<span class="req">*</span></label>
                
                  <textarea class="form-control" name="page_title" id="page_title" placeholder="Enter Page Title">{{ old('page_title') }}</textarea>
                </div>

                <div class="form-group">
                  <label for="page_title">Meta Keywords</label>
                  <textarea class="form-control" name="meta_keywords" id="meta_keywords" placeholder="Enter Meta Keywords">{{ old('meta_keywords') }}</textarea>
                </div>


                <div class="form-group">
                  <label for="page_title">Meta Description</label>
                  <textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description">{{ old('meta_description') }}</textarea>
                </div>

                <div class="form-group">
                  <label for="category">Status&nbsp;</label>
                  <select class="form-control" name="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                  </select>

                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success btn-flat">Submit</button>
              </div>
            
            {!! Form::close() !!}

          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->

        </div>


      </div>
      <!-- /.row -->
 </section>
@stop

@section('pagejs')

    <script src="{{ URL::asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ URL::asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <script>
     $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
         //bootstrap WYSIHTML5 - text editor
       $('.textarea').wysihtml5()
   })
</script>

@stop