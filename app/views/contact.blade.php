@extends('layouts.default')

@section('content')
    <div class="box">
        <p> I am working on this page meanwhile you can contact me directly to {{  HTML::mailto('me@henriquesilva.pt');}}. Have a nice day.
        </p>
    </div>
@stop
