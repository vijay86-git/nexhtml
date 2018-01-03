@extends('front.layout.master')

@section('subjects')

<ul>
@foreach($subjects as $sub_data)
<li><a style="color:#ffffff" href="{{ route('topic', $sub_data->slug) }}">{{ $sub_data->name }}</a></li>
@endforeach
</ul>

@stop


@section('topics')

@if (count($section) > 0)
@foreach($section as $sec_data)
<h1 style="color:#fff;font-size:16px">{{ $sec_data->section}}</h1>
<ul>
@foreach (App\Section::find($sec_data->id)->topics as $data)
      <li style="color:#ffffff"><a href="{{ route('topics', ['subject' => $slug, 'slug' => $data->slug]) }}">{{ $data->topic }}</a></li>
@endforeach

</ul>

@endforeach

@endif



@stop

@section('content')

@if(isset($info)):
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Topics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

               {!!html_entity_decode($info->detail)!!}

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
@endif
@stop