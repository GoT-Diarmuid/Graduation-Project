@extends('layouts.app2')

@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>
        {{ Form::open(['url' => '/uploadfile', 'files' => true]) }}
        {{ Form::file('picture') }}
        {{ Form::submit('OK') }}
        {{ Form::close() }}
    </p>
</div>
@endsection
