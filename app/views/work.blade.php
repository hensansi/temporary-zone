@extends('layouts.default')

@section('class')
none 
@stop

@foreach ($work as $work)


@section('content')

	
    <div class="box--full-height">
	<h2>{{ $work->name }}</h2>
    <h3>Client: {{ $work->client }}'</h3>
    <p>{{ $work->descricao }}</p>
    {{--<img src="/images/web/{{ $work->a }}.jpg">--}}
    <h3>Website: <a href="http://{{ $work->url }}" target="_blank">{{ $work->url }}</a></h3>
	@endforeach


	</div>
<div class="mask">

	<div class="bge" style="background-image: url(/images/web/{{ $work->a }}.jpg)"></div>
</div>

	

	



@stop
