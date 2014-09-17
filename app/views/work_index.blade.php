@extends('layouts.default')

@section('content')
    <div class="stripeList">
    @foreach ($categories as $category)
    <div class="cf stripe">
        <a href="work/{{ strtolower($category->name)}}">
            <div class="stripe_bg" style="background-image:url(/images/{{ $category->name }}.jpg)">
                <h1>{{ $category->name }}</h1>
            </div></a></div>
    @endforeach
    </div>
@stop
