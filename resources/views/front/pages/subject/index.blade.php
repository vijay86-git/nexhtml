@extends('front.layout.master')

 <style>
  .post-text pre>code:first-child, .wmd-preview pre>code:first-child{max-height:600px\9;display:block\9}
pre{border-radius:0px !important;max-height:none\9}
li pre{margin:.5em 0 1em 0}
h1, h2, h3{line-height:1.3;margin:0 0 1em}
h1{font-size:22px}
h2{font-size:18px}
h3{font-size:15px}
h1.lead, h2.lead{font-weight:400}
h1.lead{font-size:2.6em;margin-bottom:.3em}
h2.lead{font-size:1.7em}
.post-text h1, .post-text h2, .post-text h3, .post-text h4, .post-text h5, .post-text h6{word-wrap:break-word}
.post-text ul p:last-of-type, .wmd-preview ul p:last-of-type, .post-text ol p:last-of-type, .wmd-preview ol p:last-of-type{margin-bottom:0}
.post-text li>ul, .wmd-preview li>ul, .post-text li>ol, .wmd-preview li>ol{padding-top:.5em}
blockquote, q{quotes:none}
blockquote:before, q:before, blockquote:after, q:after{content:"";content:none}
blockquote{margin-bottom:10px;padding:10px;background-color:#FFF8DC;border-left:2px solid #ffeb8e}
blockquote *:last-child{margin-bottom:0}
li blockquote{margin:.5em 0 1em 0}
.str, .lit, .tag{color:#7D2727}
.kwd, .dec{color:#101094}
.com{color:#858C93}
.typ{color:#2B91AF}
.pun, .pln{color:#303336}
.atn{color:#E64320}
.atv{color:#0F74BD}
.prettyprint{display:block;color:#393318}
@media print{.kwd, .typ, .tag{font-weight:bold}
.str, .atv{color:#060}
.kwd{color:#006}
.typ, .atn{color:#404}
.lit{color:#044}
.pun{color:#440}
.pln{color:#0C0D0E}
.tag{color:#006}
.com{color:#600;font-style:italic}
}
.blink{animation-name:blinking;animation-duration:3.5s}
@keyframes blinking{from{background:#f4a83d}
to{background:rgba(244,168,61,0)}
}
@-webkit-keyframes blinking{from{background:#f4a83d}
to{background:rgba(244,168,61,0)}
}
@-moz-keyframes blinking{from{background:#f4a83d}
to{background:rgba(244,168,61,0)}
}
@-webkit-keyframes opacity-in{0%{opacity:0}
100%{opacity:1}
}
@-moz-keyframes opacity-in{0%{opacity:0}
100%{opacity:1}
}
@keyframes opacity-in{0%{opacity:0}
100%{opacity:1}
}
.favicon{width:16px;height:16px;background-color:transparent;background-repeat:no-repeat;background-image:url('../../img/favicons-sprite16.png?v=dda98e2998c1')}
div.favicon{display:inline-block}
@media only screen and (min--moz-device-pixel-ratio:1.5), only screen and (-o-min-device-pixel-ratio:3/2), only screen and (-webkit-min-device-pixel-ratio:1.5), only screen and (min-device-pixel-ratio:1.5){.favicon{background-image:url('../../img/favicons-sprite32.png?v=0198fec0b8d4')}
}
@media only screen and (min--moz-device-pixel-ratio:1.5), only screen and (-o-min-device-pixel-ratio:3/2), only screen and (-webkit-min-device-pixel-ratio:1.5), only screen and (min-device-pixel-ratio:1.5){.favicon{-moz-background-size:16px 6642px;-o-background-size:16px 6642px;-webkit-background-size:16px 6642px;background-size:16px 6642px}
}

pre {
    margin-bottom: 1em;
    padding: 5px;
    padding-bottom: 20px !ie7;
    width: auto;
    width: 650px !ie7;
    max-height: 600px;
    overflow: auto;
font-family:'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
    font-size: 13px;
    background-color: #f3f3f3;
}
ul {margin:0;padding:0;}
ul li { padding:0 10px; display:block;color:#888;}
h1{color:#888;font-size:15px !important;}

</style>

@section('subjects')

<ul>
@foreach($subjects as $sub_data)
<li><a style="" href="{{ route('topic', $sub_data->slug) }}">{{ $sub_data->name }}</a></li>
@endforeach
</ul>

@stop


@section('topics')

@if (count($section) > 0)
@foreach($section as $sec_data)
<h1 style="">{{ $sec_data->section}}</h1>
<ul>
@foreach (App\Section::find($sec_data->id)->topics as $data)
      <li style="color:#ffffff;display:block;"><a href="{{ route('topics', ['subject' => $slug, 'slug' => $data->slug]) }}">{{ $data->topic }}</a></li>
@endforeach

</ul>

@endforeach

@endif



@stop

@section('content')

@if(isset($info)):
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Topics</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

               {!!html_entity_decode($info->detail)!!}

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endif
@stop