@extends('front.layout.template')

@section('content')

<div class="row">
    <div class="col-md-3">
          @if (count($section) > 0)
              @foreach($section as $sec_data)
                <ul class="list-group">
                    <li class="list-group-item disabled"><strong>{{ $sec_data->section}}</strong></li>
                      @foreach (App\Section::find($sec_data->id)->topics as $data)
                          <li class="list-group-item"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i><a class="{{ (Request::segment(2) == $data->slug) ? 'active' : '' }}" title="{{ $data->topic }}" href="{{ route('topics', ['subject' => $slug, 'slug' => $data->slug]) }}">{{ $data->topic }}</a></li>
                      @endforeach
                </ul>
              @endforeach
           @endif

           <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Ad 7 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:270px;height:600px"
                 data-ad-client="ca-pub-9716398444039739"
                 data-ad-slot="5997201134"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

   </div>
   <div class="col-md-9">
      <!-- content -->
    <div class="row mrgnbtm15">

     <div class="col-md-12 mrgnbtm15">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Ad 1 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-9716398444039739"
             data-ad-slot="5095344703"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
     </div>
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
    
    <div class="row">
       <div class="col-md-12">
         <div class="col-md-6 col-sm-6 text-left pad0">
            @if (!empty($nextprevarr['prevlink']))
               <a title="{{ $nextprevarr['prevtopic'] }}" href="{{ $nextprevarr['prevlink'] }}" class="btn btn-default prev"><i class="fa fa-arrow-left" aria-hidden="true"></i>  Previous</a><span class='nexprv'><a title="{{ $nextprevarr['prevtopic'] }}" href='{{ $nextprevarr["prevlink"] }}'>{{ $nextprevarr["prevtopic"] }}</a></span>
            @endif
         </div>
         <div class="col-md-6 col-sm-6 text-right pad0">
          @if (!empty($nextprevarr['nextlink']))
             <span class='nexprv'><a title="{{ $nextprevarr['nexttopic'] }}" href='{{ $nextprevarr["nextlink"] }}'>{{ $nextprevarr["nexttopic"] }}</a></span><a title="{{ $nextprevarr['nexttopic'] }}" href="{{ $nextprevarr["nextlink"] }}" class="btn btn-default next">Next  <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
          @endif
         </div>
       </div> 
     </div> 

     <div class="row mrgnTpBtm">
       <div class="col-md-12">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- Ad 3 -->
          <ins class="adsbygoogle"
               style="display:inline-block;width:728px;height:90px"
               data-ad-client="ca-pub-9716398444039739"
               data-ad-slot="9117871264"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
       </div>
     </div>


     @if ( ! empty(Request::segment(2)))
     <div class="row mrgnTpBtm">
       <div class="col-md-12">

        <div id="disqus_thread"></div>
          <script>

          /**
          *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
          *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          
          var disqus_config = function () {
          this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = {{ $info->id }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          
          (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = 'https://nexladder.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
          })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
       </div>
     </div>
     @endif

  </div>         
 </div>

@stop