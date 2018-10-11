@extends('layouts.app2')
@php
    $result_s=$db-> query("SELECT * FROM student where team_id is NULL");
    $result_team=$db-> query("SELECT * FROM team");
    $result_t=$db-> query("SELECT * FROM teacher");
@endphp
@section('content')

<div class="jumbotron text-center">
       <h1>{{$title}}</h1>
       <h2>this is join student page</h2>
       <p>
        {{ Form::open(['action' => 'PageControllers@join_ver']) }}

<div>
    <label>studnt Userame:
           @foreach ($result_s as $values)
           <input type="checkbox" name="student_id[]" value={{$values["username"]}}>{{$values["username"]}}
           @endforeach

        </label>
</div>
<div>
    <label>Team Name:
        <select name="team_id">
            @foreach ($result_team as $values)
                <option value={{$values["team_id"]}}>{{$values["team_id"]}}</option>
            @endforeach
        </select>
        </label>


</div>

<div>
        <label>Teacher ID:
            <select name="teacher_id">
                @foreach ($result_t as $values)
                    <option value={{$values["username"]}}>{{$values["username"]}}</option>
                @endforeach
            </select>
            </label>


    </div>

        <input type="submit" value="Submit">

        {{ Form::close() }}
        </p>
</div>
@endsection
