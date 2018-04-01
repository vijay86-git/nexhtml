@extends('front.layout.template')
<style>
.sitemap{float:left}
.sitemap h2{font-size:16px}
.sitemap ul {margin:0;padding:0}
.sitemap ul li{padding:0 0 0 10px;line-height:16px}
.sitemap ul li a{color:#888;font-size:13px}
</style>

@section('content')
 <div class="row">
    <div class="col-md-12">
        <h1>Sitemap</h1>
        <div class="col-md-3">
             <div class="sitemap">
                 <h2>php</h2>
                 <ul class="points">
                    <li><a href="">Introduction</a></li>
                    <li><a href="">Overview</a></li>
                 </ul>
            </div>
        </div>
     </div>
  </div>
@stop