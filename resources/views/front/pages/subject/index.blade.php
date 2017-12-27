@extends('admin.layout.master')

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Topics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              @if ($success = Session::get('success'))
                  <div class="alert alert-success">
                      <p>{{ $success }}</p>
                  </div>
              @endif

              <select class="form-control" name="subject" onchange="load(this.value)">
                    <option value="">-- Select Subject--</option>
                    @foreach ($subject as $data)
                      <option value="{{ $data->id }}" {{ (Input::get('subject_id') == $data->id) ? "selected='selected'" : ""}}>{{ $data->name }}</option>
                    @endforeach
              </select>


              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S. No</th>
                  <th>Subject</th>
                  <th>Topic</th>
                  <th>Slug</th>
                  <th>Page Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($topics as $data)
                @php
                  $status_img = ($data->status == 1) ? "bullet-green.png" : "bullet-red.png";
                @endphp

                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $data->subject->name }}</td>
                  <td>{{ $data->topic }}</td>
                  <td>{{ $data->slug }}</td>
                  <td>{{ $data->page_title }}</td>
                  <td><img src="{{ URL::asset('images/'.$status_img) }}" /></td>

                  <td><a class="btn btn-primary" href="{{ route('topic.edit',$data->id) }}"><span class="fa fa-edit"></a>&nbsp;<a class="btn btn-info" onclick="return confirm('Are you sure ?')" href="{{ route('topic.destroy',$data->id) }}"><span class="fa fa-trash"></a></td>
                  
                </tr>

                @endforeach
               
              
                </tbody>
                
              </table>

             
              {!! $topics->appends(Request::only('subject_id'))->links() !!}


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
  function load(id)
   {
      location.href = 'topic?subject_id='+id;
   }
</script>