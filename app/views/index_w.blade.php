@extends('layouts.default')

@section('header')
 	<ul class="breadcrumb">
        <li><h2>{{ link_to("/","tz") }}</h2></li>
        <li><h2 class="breadcrumb">web</h2></li>
    </ul>
    <h1>Temporary <span>Zone</span></h1>
@stop


@section('content')
   <main class="cf top">


     
        @if (count($works))
    		@foreach ($works as $work)
            	<div class="cf stripe">
    			<h2>{{ $work->client }}</h2>
    			<a href="/web/{{$work->a}}">
        		<div class="bg" style="background-image:url(/images/web/{{ $work->a }}.jpg)">
        		<h1 class="text_strip">{{ $work->name }}</h1>
        		</div></a>
        		<h4>CSS HTML PHP</h4>
        		</div>
        	@endforeach
        @else
            <div class="cf stripe">
            <div class="bg">
            <h1 class="text_strip">There are no works to display</h1>
            </div></a>
            </div>            
        @endif
    </main>

@stop
