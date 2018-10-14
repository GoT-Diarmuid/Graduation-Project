@extends('layouts.app2')

@section('content')

<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>
        {{ Form::open(['url' => '/uploadfile', 'files' => true]) }}
        {{ Form::text('team_id','Input the group name :3', ['required']) }}
        <br>
        {{ 'Project report : ' }}
        {{ Form::file('report') }}
        <br>
        {{ 'Project picture : ' }}
        {{ Form::file('picture') }}
        <br>
        {{ Form::submit('OK') }}
        {{ Form::close() }}
    </p>
</div>
@endsection
