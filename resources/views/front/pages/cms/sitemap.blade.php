@extends('front.layout.template')
<style>
.sitemap{float:left}
.sitemap h2{font-size:16px}
.sitemap ul {margin:0;padding:0}
.sitemap ul li{padding:0 0 0 10px;line-height:20px;list-style-type:none}
.sitemap ul li a{color:#505763;font-size:13px}
</style>

@section('content')
 <div class="row">
    <div class="col-md-12">
        <a href="#"><h1>Sitemap</h1></a>
        <div class="col-md-3">
             <div class="sitemap">
                 <h2>php</h2>
                 <ul>
                    <li><a href="">Introduction</a></li>
                    <li><a href="">Overview</a></li>
                 </ul>
            </div>
        </div>
     </div>
  </div>
@stop