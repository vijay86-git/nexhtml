@extends('front.layout.blog')

@section('title')
 {!! $info->post_title !!}
@stop


@section('content')
  @php
    echo mb_convert_encoding($info->post_content, 'UTF-8', 'UTF-8');
  @endphp
@stop