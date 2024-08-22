@extends('layouts.default')

@section('content')
<div class="stripe-list-container">
    @if (count($works))
        @foreach ($works as $work)
        <div class="stripe clearfix">
            {{-- <div class="stripe__thumbnail" style="background-image:url({{ asset('images/web/thumbnails/' . $work->a . '.jpg') }})"></div> --}}
            <div class="stripe__title">
                <a href="{{ route('work.slug', $work->a) }}">
                    <h2>{{ $work->name }}</h2>
                </a>
            </div>
            <h3 class="stripe__subinfo">{{ $work->client }}</h3>
            {{-- <h4>{{ $work->technologies }}</h4> --}}
        </div>
        @endforeach
    @else
        <div class="stripe">
            <div class="stripe__thumbnail" style="background-color:blue">
                <h2 class="stripe__title colored-link">There are no works to display</h2>
            </div>
        </div>
    @endif
</div>
@endsection