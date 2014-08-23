@extends('layouts.default')

@foreach ($work as $work)

@section('header')
 	<ul class="breadcrumb">
        <li><h2>{{ link_to("/","TZ") }}</h2></li>
        <li><h2>{{ link_to("/web","web") }}</h2></li>
        <li><h2 class="breadcrumb">{{ $work->a }}</h2></li>

    </ul>
    <h1>Temporary <span>Zone</span></h1>
@stop


@section('content')
<div class="bge" style="background-image: url(/images/web/{{ $work->a }}.jpg)"></div>

<main class="cf">
    <section class="cf">
	<h2>{{ $work->name }}</h2>
    <h3>Client: {{ $work->client }}'</h3>
    <p>{{ $work->descricao }}</p>
    <h3>Website: <a href="http://{{ $work->url }}" target="_blank">{{ $work->url }}</a></h3>
	@endforeach
	</section>

	</main>

@stop
