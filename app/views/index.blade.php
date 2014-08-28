@extends('layouts.default')


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
