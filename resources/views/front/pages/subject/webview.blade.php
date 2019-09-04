@extends('front.layout.app')

@section('content')

<div class="row">
   <div class="col-md-9">
      <!-- content -->
    <div class="row mrgnbtm15">

     <div class="col-md-12">
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
     </div> 
    </div>
     
   <div class="row">
     <div class="col-md-12">
        {!! $info->detail !!}
     </div>
    </div>
    

  </div>         
 </div>

@stop