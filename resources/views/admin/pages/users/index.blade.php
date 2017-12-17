@extends('admin.layout.master')

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S. No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Ip Address</th>
                  <th>Date</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($users as $usersdata)

                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $usersdata->name }}</td>
                  <td>{{ $usersdata->email }}</td>
                  <td>{{ $usersdata->ip_address }}</td>
                  <td>{{ date('D, d M \'y h:i a', $usersdata->unix_timestamp) }}</td>
                </tr>

                @endforeach
               
              
                </tbody>
                
              </table>

              {!! $users->links() !!}


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