@extends('layouts.default')

@section('header')
 	<ul class="breadcrumb">
        <li><h2>tz</h2></li>
    </ul>
    <h1>Temporary <span>Zone</span></h1>
@stop


@section('content')
<main class="cf top">

		@foreach ($categories as $category)
        	<div class="cf stripe">
            <a href="/{{ strtolower($category->name)}}">
    		<div class="bg" style="background-image:url(/images/{{ $category->name }}.jpg)">
    		<h1>{{ $category->name }}</h1>
    		</div></a></div>
    	@endforeach
    </main>

@stop
