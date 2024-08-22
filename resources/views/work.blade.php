@extends('layouts.default')

@section('class', 'none')

@section('content')
    @if(isset($work) && count($work) > 0)
        @foreach ($work as $item)
            <div class="box--full-height">
                <h2>{{ $item->name }}</h2>
                <h3>Client: {{ $item->client }}</h3>
                <p>{{ $item->descricao }}</p>
                {{-- <img src="{{ asset('images/web/' . $item->a . '.jpg') }}" alt="{{ $item->name }}"> --}}
                <h3>Website: <a href="http://{{ $item->url }}" target="_blank">{{ $item->url }}</a></h3>
            </div>
        @endforeach

        @if(isset($item))
            <div class="mask">
                <div class="bge" style="background-image: url({{ asset('images/web/' . $item->a . '.jpg') }})"></div>
            </div>
        @endif
    @else
        <p>No work items found.</p>
    @endif
@endsection