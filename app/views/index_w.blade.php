@extends('layouts.default')


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
