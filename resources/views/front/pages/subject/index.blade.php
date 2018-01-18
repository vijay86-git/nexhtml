@extends('front.layout.template')

@section('nav')
<nav class="navbar navbar-inverse-inner">
                  <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="#"></a>
                  </div>

                  <div class="collapse navbar-collapse" id="navBar">

                    <ul class="nav navbar-nav">
                      @foreach($subjects as $sub_data)
                       <li><a style="" href="{{ route('topic', $sub_data->slug) }}">{{ ucfirst($sub_data->name) }}</a></li>
                      @endforeach
                    </ul>

                  </div>


                  </div>
                </nav>
@stop

@section('topics')

  @if (count($section) > 0)
      
      @foreach($section as $sec_data)
        <ul class="list-group">
          <li class="list-group-item disabled"><strong>{{ $sec_data->section}}</strong></a></li>
              @foreach (App\Section::find($sec_data->id)->topics as $data)
                  <li style="" class="list-group-item"><span class="fa fa-book"></span><a href="{{ route('topics', ['subject' => $slug, 'slug' => $data->slug]) }}">{{ $data->topic }}</a></li>
              @endforeach
       </ul>
      @endforeach

   @endif
@stop

@section('topiccontentheader')

              <h1 class='headingtop'>{{$info->topic}}</h1>
               <div class="topnexprev">
                 
               <span class="share">
                 <label>share with:</label>
               
                 <a class="btn btn-social-icon btn-facebook" title="share with facebook">
                  <span class="fa fa-facebook"></span>
                 </a>
                 
                 <a class="btn btn-social-icon btn-twitter" title="share with twitter">
                  <span class="fa fa-twitter"></span>
                 </a>
                 
                 <a class="btn btn-social-icon  btn-linkedin" title="share with twitter">
                  <span class="fa fa-linkedin"></span>
                 </a>
                 
                 <a class="btn btn-social-icon btn-google" title="share with google+">
                  <span class="fa fa-google-plus"></span>
                 </a>
                 
                 <a class="btn btn-social-icon btn-pinterest" title="share with pinterest">
                  <span class="fa fa-pinterest"></span>
                 </a>
        
               
               </span>


               @if (!empty($nextprevarr['prevlink']))
                  <a href="{{ $nextprevarr['prevlink'] }}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a>
               @endif

               @if (!empty($nextprevarr['nextlink']))
                  <a href="{{ $nextprevarr["nextlink"] }}" class="btn btn-default next">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
               @endif


               </div>

@stop
@section('content')
  {!!html_entity_decode($info->detail)!!}
@stop


{{--
@extends('front.layout.master')

 
</style>

@section('subjects')

<ul>
@foreach($subjects as $sub_data)
<li><a style="" href="{{ route('topic', $sub_data->slug) }}">{{ $sub_data->name }}</a></li>
@endforeach
</ul>

@stop


@section('topics')

@if (count($section) > 0)
@foreach($section as $sec_data)
<h1 style="">{{ $sec_data->section}}</h1>
<ul>
@foreach (App\Section::find($sec_data->id)->topics as $data)
      <li style="color:#ffffff;display:block;"><a href="{{ route('topics', ['subject' => $slug, 'slug' => $data->slug]) }}">{{ $data->topic }}</a></li>
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

      <div class="row">

         <div class="col-xs-12 text-left">{{ $prevlink }}</div>

         <div class="col-xs-12 text-right">{{ $nextlink }}</div>
      </div>


    </section>
@endif
@stop

--}}