@extends('admin.layout.master')

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sections</h3>
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
                  <th>Section</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($section as $data)

                @php
                  $status_img = ($data->status == 1) ? "bullet-green.png" : "bullet-red.png";
                @endphp

                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $data->subject->name }}</td>
                  <td>{{ $data->section }}</td>
                  <td><img src="{{ URL::asset('images/'.$status_img) }}" /></td>

                  <td><a class="btn btn-primary" href="{{ route('section.edit',$data->id) }}"><span class="fa fa-edit"></a>&nbsp;<a class="btn btn-info" onclick="return confirm('Are you sure ?')" href="{{ route('section.destroy',$data->id) }}"><span class="fa fa-trash"></a></td>
                  
                </tr>

                @endforeach
               
              
                </tbody>
                
              </table>

             
              {!! $section->appends(Request::only('subject_id'))->links() !!}


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
      location.href = 'section?subject_id='+id;
   }
</script>