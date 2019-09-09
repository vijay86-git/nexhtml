@extends('front.layout.blog')

@section('title')
 {!! $info->post_title !!}
@stop


@section('content')
 {! $info->post_content !}
@stop