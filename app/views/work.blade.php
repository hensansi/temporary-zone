@extends('layouts.default')

@section('class')
none 
@stop

@foreach ($work as $work)


@section('content')

    <div class="box--full-height clearfix">
	<h2>{{ $work->name }}</h2>
    <h3>Client: {{ $work->client }}'</h3>
    <p>{{ $work->descricao }}</p>
    <h3>Website: <a href="http://{{ $work->url }}" target="_blank">{{ $work->url }}</a></h3>
	@endforeach
	</div>

	<div class="bge" style="background-image: url(/images/web/{{ $work->a }}.jpg)"></div>



@stop
