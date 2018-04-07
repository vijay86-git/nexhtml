@extends('front.layout.template')
@section('content')
 <div class="row">
    <div class="col-md-12">
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
 </div>
 
 <div class="row">
    <div class="col-md-12">
        <h1>Sitemap</h1>
            @foreach ($subjects as $data)
               <div class="col-md-3">
                     <div class="sitemap">
                         <a href="{{ route('topic', $data->slug) }}" title="{{ $data->name }}"><h2>{{ $data->name }}</h2></a>
                         @php
                          $key      =  $data->slug.'_sitemap_cache';
                          if (Cache::has($key))
                              {
                                    $pinfo =  Cache::get($key);
                              } 
                          else  {
                                    $pinfo =  App\Topic::select('id', 'topic', 'slug')->where('subject_id', $data->id)->get();
                                    Cache::put($key, $pinfo, env('CACHE_TIME', 60));
                                }
                          @endphp

                         <ul>
                            @foreach ($pinfo as $infodata)
                              <li><a title="{{ $infodata->topic }}" href="{{ route('topics', ['subject' => $data->slug, 'slug' => $infodata->slug]) }}">{{ $infodata->topic }}</a></li>
                            @endforeach
                         </ul>
                    </div>
                </div>
            @endforeach

     </div>
  </div>
@stop