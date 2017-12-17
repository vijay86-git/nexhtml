@extends('admin.layout.master')

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Subjects</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              @if ($success = Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $success }}</p>
                  </div>
              @endif


              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S. No</th>
                  <th>Subject</th>
                  <th>Slug</th>
                  <th>Page Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($subject as $subjectdata)

                @php
                  $status_img = ($subjectdata->status == 1) ? "bullet-green.png" : "bullet-red.png";
                @endphp

                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $subjectdata->name }}</td>
                  <td>{{ $subjectdata->slug }}</td>
                  <td>{{ $subjectdata->page_title }}</td>
                  <td><img src="{{ URL::asset('images/'.$status_img) }}" /></td>

                  <td><a class="btn btn-primary" href="{{ route('subject.edit',$subjectdata->id) }}"><span class="fa fa-edit"></a>&nbsp;<a class="btn btn-info" onclick="return confirm('Are you sure ?')" href="{{ route('subject.destroy',$subjectdata->id) }}"><span class="fa fa-trash"></a></td>
                  
                </tr>

                @endforeach
               
              
                </tbody>
                
              </table>

              {!! $subject->links() !!}


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