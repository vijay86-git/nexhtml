@extends('admin.layout.master')

@section('content')
  <section class="content">
      <div class="row">

        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Question Edit</h3>
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

            {!! Form::model($data, ['files' => true, 'autocomplete' => 'off', 'role' => 'form', 'method' => 'PATCH', 'route' => ['question.update', $data->id]]) !!}

              <div class="box-body">

              

                <div class="form-group">
                  <label for="category">Labels&nbsp;<span class="req">*</span></label>
                  <select class="form-control" name="label_id">
                    <option value="">-- Select Label--</option>
                    @foreach ($labels as $label)
                      <option value="{{ $label->id }}" {{ ($label->id == $data->label_id) ? "selected='selected'" : '' }}>{{ $label->interview_label }}</option>
                    @endforeach
                  </select>

                </div>


               <div class="form-group">
                  <label for="category">Question&nbsp;<span class="req">*</span></label>
                  <input class="form-control" name="question" placeholder="Question" type="text" value="{{ $data->question }}">
                </div>

                <div class="form-group">
                  <label for="category">Slug&nbsp;<span class="req">*</span></label>
                  <input class="form-control" name="slug" placeholder="Slug" type="text" value="{{ $data->slug }}">
                </div>

                <div class="form-group">
                  <label for="page_title">Answer&nbsp;<span class="req">*</span></label>
                
                  <textarea id="editor1" class="form-control" name="answer" id="answer" placeholder="Enter Answer">{{ $data->answer }}</textarea>
                </div>

            
                <div class="form-group">
                  <label for="page_title">Page Title&nbsp;<span class="req">*</span></label>
                
                  <textarea class="form-control" name="page_title" id="page_title" placeholder="Enter Page Title">{{ $data->page_title }}</textarea>
                </div>

                <div class="form-group">
                  <label for="page_title">Meta Keywords</label>
                  <textarea class="form-control" name="meta_keywords" id="meta_keywords" placeholder="Enter Meta Keywords">{{ $data->meta_keywords }}</textarea>
                </div>


                <div class="form-group">
                  <label for="page_title">Meta Description</label>
                  <textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description">{{ $data->meta_description }}</textarea>
                </div>

                <div class="form-group">
                  <label for="category">Status&nbsp;</label>
                  <select class="form-control" name="status">
                      <option value="1" {{ ($data->status == 1) ? "selected='selected'" : ""}}>Active</option>
                      <option value="0" {{ ($data->status == 0) ? "selected='selected'" : ""}}>Inactive</option>
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