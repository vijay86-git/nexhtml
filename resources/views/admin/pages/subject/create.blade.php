@extends('admin.layout.master')

@section('content')
  <section class="content">
      <div class="row">

        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Subject</h3>
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

            {!! Form::open(['route' => 'subject.store', 'role' => 'form', 'autocomplete' => 'off', 'files' => true]) !!}

              <div class="box-body">

                <div class="form-group">
                  <label for="category">Subject Name&nbsp;<span class="req">*</span></label>
                  <input class="form-control" name="name" placeholder="Name" type="text" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                  <label for="category">Slug&nbsp;<span class="req">*</span></label>
                  <input class="form-control" name="slug" placeholder="Slug" type="text" value="{{ old('slug') }}">
                </div>

                <div class="form-group">
                  <label for="category">Logo&nbsp;<span class="req">*</span></label>
                  <input class="form-control" type="file" name="logo" placeholder="Image Upload" accept="image/*" />
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
                  <label for="page_title">About</label>
                  <textarea class="form-control" name="about" id="about" placeholder="About">{{ old('about') }}</textarea>
                </div>


              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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