@extends('front.layout.template')

@section('css')

<link rel="stylesheet" href="{{ Helper::loadAssetsFiles('codemirror/lib/bin/css/editor-js.css') }}?v=1">
@stop

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
    <div class="col-md-12" id="" style="height:400px">
        <h2>About Us</h2>
        <p>
           About Us - nexladder.com is a learning online platform that helps anyone can learn Web Technologies. nexladder provides all web tutorials like Php, Mysqli, Vuejs, Html, Jquery etc in simple and easy steps starting from basic to advanced concepts with examples. nexladder helps students, developers and project manager where they can learn topics in easy and simple language with examples. To make our website better for you, we bring updates to the website regularly.
        </p><br />
        <p>
           Our mission - To help you learn the skills you need to achieve your goal.
        </p>
    </div>

    <div class="col-md-1"></div>
  </div>

@stop

@section('javascript')
<script src="{{ Helper::loadAssetsFiles('codemirror/lib/bin/js/codemirror.5.31.0.js?v=1') }}"></script>
<script src="{{ Helper::loadAssetsFiles('codemirror/lib/bin/js/editor.js?v=1') }}"></script>
@stop