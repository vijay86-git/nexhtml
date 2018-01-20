@extends('front.layout.master')

{{-- 
@section('subjects')

<ul>
@foreach($subjects as $sub_data)
<li><a style="" href="{{ route('topic', $sub_data->slug) }}">{{ $sub_data->name }}</a></li>
@endforeach
</ul>

@stop

--}}

@section('nav')
<nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="#"></a>
                  </div>

                  <div class="collapse navbar-collapse" id="navBar">

                  	<ul class="nav navbar-nav">
                      <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>

              						@foreach($subjects as $sub_data)
              						 <li><a style="" href="{{ route('topic', $sub_data->slug) }}">{{ ucfirst($sub_data->name) }}</a></li>
              						@endforeach
				            </ul>

                  </div>


                  </div>
                </nav>
@stop
