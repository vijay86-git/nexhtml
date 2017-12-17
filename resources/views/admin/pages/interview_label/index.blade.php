@extends('admin.layout.master')

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Interview Labels</h3>
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
                  <th>Label</th>
                  <th>Slug</th>
                  <th>Page Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($response as $data)
                @php
                  $status_img = ($data->status == 1) ? "bullet-green.png" : "bullet-red.png";
                @endphp

                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $data->interview_label }}</td>
                  <td>{{ $data->slug }}</td>
                  <td>{{ $data->page_title }}</td>
                  <td><img src="{{ URL::asset('images/'.$status_img) }}" /></td>

                  <td><a class="btn btn-primary" href="{{ route('interview.edit',$data->id) }}"><span class="fa fa-edit"></a>&nbsp;<a class="btn btn-info" onclick="return confirm('Are you sure ?')" href="{{ route('interview.destroy',$data->id) }}"><span class="fa fa-trash"></a></td>
                  
                </tr>

                @endforeach
               
              
                </tbody>
                
              </table>

             
              {!! $response->links() !!}


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