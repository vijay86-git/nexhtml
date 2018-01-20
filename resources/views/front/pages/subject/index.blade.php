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
                        <li class="{{ (Request::segment(2) == '') ? 'active' : '' }}"><a href="{{ URL('/') }}"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                        @foreach($subjects as $sub_data)
                         <li class="{{ (Request::segment(2) == $sub_data->slug) ? 'active' : '' }}"><a title="{{ $sub_data->name }}" href="{{ route('topic', $sub_data->slug) }}">{{ $sub_data->name }}</a></li>
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
                  <li class="list-group-item"><i class="fa fa-book" aria-hidden="true"></i><a class="{{ (Request::segment(3) == $data->slug) ? 'active' : '' }}" href="{{ route('topics', ['subject' => $slug, 'slug' => $data->slug]) }}">{{ $data->topic }}</a></li>
              @endforeach
        </ul>
      @endforeach
   @endif
@stop

@section('topiccontentheader')

              <h1 class='headingtop'>{{ ! empty($topic_title) ? $topic_title : $info->topic}}</h1>
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
                  <a  title="{{ $nextprevarr['prevtopic'] }}" href="{{ $nextprevarr['prevlink'] }}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a>
               @endif

               @if (!empty($nextprevarr['nextlink']))
                  <a title="{{ $nextprevarr['nexttopic'] }}" href="{{ $nextprevarr['nextlink'] }}" class="btn btn-default next">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
               @endif


               </div>

@stop
@section('content')
  {!!html_entity_decode($info->detail)!!}
@stop