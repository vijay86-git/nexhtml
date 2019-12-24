@extends('front.layout.template')

@section('css')
<link rel="stylesheet" href="{{ Helper::loadAssetsFiles('codemirror/lib/bin/css/codemirror5.31.0.css') }}?v=1">
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
        

        <section id="static">          
            <pre>
            <code id="static-js">console.log("Hello World!");
// Hello World!
            </code>
            </pre>      
            </section>      
            <section id="live" class="live hidden">                    
              <div id="editor" class="editor">
              </div>          
              <div class="output-container">              
                <div class="buttons-container">                  
                  <button id="execute" class="button run" type="button">Run &rsaquo;
                  </button>                  
                  <button id="reset" type="button" class="button">Reset
                  </button>              
                </div>              
                <div id="console" class="output">
                  <code>
                  </code>
                </div>          
              </div>      
            </section>    


            
    </div>

    <div class="col-md-1"></div>
  </div>

@stop

@section('javascript')
<script src="{{ Helper::loadAssetsFiles('codemirror/lib/bin/js/codemirror.5.31.0.js?v=1') }}"></script>
<script src="{{ Helper::loadAssetsFiles('codemirror/lib/bin/js/editor.js?v=1') }}"></script>
@stop