@extends('front.layout.template')
@section('content')
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