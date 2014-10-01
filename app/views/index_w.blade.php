@extends('layouts.default')


@section('content')
    <div class="stripe-list-container">
        @if (count($works))
    		@foreach ($works as $work)
            	<div class="stripe clearfix">
        			<h2 class="stripe__subinfo">{{ $work->client }}</h2>
                    <a href="work/{{$work->a}}">
                        {{--<div class="stripe__thumbnail" style="background-image:url(/images/web/thumbnails/{{ $work->a }}.jpg)"></div>--}}
                        <div class="stripe__title">
                            <h1>{{ $work->name }}</h1>
                    </div>
            		</a>
            		{{--<h4>{{ $work->technologies }}</h4>--}}
        		</div>
        	@endforeach
        @else
            <div class="stripe">
            <div class="stripe__thumbnail" style="background-color:blue">
            <h1 class="stripe__title colored-link">There are no works to display</h1>
            </div></a>
            </div>
        @endif
    </div>

@stop
