@extends('front.layout.master')

@section('subjects')

<ul>
@foreach($subjects as $sub_data)
<li><a style="color:#ffffff" href="{{ route('topic', $sub_data->slug) }}">{{ $sub_data->name }}</a></li>
@endforeach
</ul>

@stop
