@extends('front.layout.template')


@section('topics')
  @if (count($section) > 0)
      @foreach($section as $sec_data)
        <ul class="list-group">
            <li class="list-group-item disabled"><strong>{{ $sec_data->section}}</strong></li>
              @foreach (App\Section::find($sec_data->id)->topics as $data)
                  <li class="list-group-item"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a class="{{ (Request::segment(3) == $data->slug) ? 'active' : '' }}" title="{{ $data->topic }}" href="{{ route('topics', ['subject' => $slug, 'slug' => $data->slug]) }}">{{ $data->topic }}</a></li>
              @endforeach
        </ul>
      @endforeach
   @endif
@stop

@section('topiccontentheader')
        <h1 class='headingtop'>{{ ! empty($topic_title) ? $topic_title : $info->topic}}</h1>
         <div class="topnexprev">
          <div class="share">
           <label>share with:</label>
             <a target="_blank" href="https://www.facebook.com/sharer.php?u={{ Request::url() }}" class="btn" title="share with facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
             <a target="_blank" href="http://twitter.com/share?url={{ Request::url() }}&text={{ $info->page_title }}" class="btn" title="share with twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
             
             <a target="_blank" href="https://plusone.google.com/_/+1/confirm?hl=en&url={{ Request::url() }}" class="btn" title="share with google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
             <a target="_blank" href="https://www.pinterest.com/pin/create/button/?url={{ Request::url() }}&description={{ $info->page_title }}" class="btn" title="share with pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>

             <a target="_blank" href="http://www.tumblr.com/share/link?url={{ Request::url() }}" class="btn" title="share with tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i></a>

             @if (!empty($nextprevarr['prevlink']))
                <a title="{{ $nextprevarr['prevtopic'] }}" href="{{ $nextprevarr['prevlink'] }}" class="btn btn-default"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a>
             @endif
             @if (!empty($nextprevarr['nextlink']))
                <a title="{{ $nextprevarr['nexttopic'] }}" href="{{ $nextprevarr['nextlink'] }}" class="btn btn-default next">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
             @endif

          </div>
         
       </div>
@stop

@section('content')
  {!! $info->detail !!}
@stop