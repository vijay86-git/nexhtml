@extends('front.layout.app')

@section('content')

<div class="row">

     <div class="col-md-12" style="margin:15px 0 0 0">
        <h2><strong>{!! $info->topic !!}</strong></h2>
     </div>

     <div class="col-md-12" style="margin:15px 0 0 0">
        {!! $info->detail !!}
     </div>

</div>

@stop