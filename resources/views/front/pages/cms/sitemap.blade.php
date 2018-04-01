@extends('front.layout.template')
<style>
.sitemap{float:left;margin:0 0 15px 0;}
.sitemap h2{font-size:16px;margin:0 0 7px 0;}
.sitemap ul {margin:0;padding:0}
.sitemap ul li{padding:0 0 0 10px;line-height:24px;list-style-type:none}
.sitemap ul li a{color:#505763;font-size:13px}
</style>

@section('content')
 <div class="row">
    <div class="col-md-12">
        <h1>Sitemap</h1>
            @foreach ($subjects as $data)
               <div class="col-md-3">
                     <div class="sitemap">
                         <a href="{{ route('topic', $data->slug) }}" title="{{ $data->name }}"><h2>{{ $data->name }}</h2></a>
                         <ul>
                            <li><a href="">Introduction</a></li>
                            <li><a href="">Overview</a></li>
                         </ul>
                    </div>
                </div>
            @endforeach

     </div>
  </div>
@stop