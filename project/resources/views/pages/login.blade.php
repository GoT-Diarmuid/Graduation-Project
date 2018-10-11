@extends('layouts.app2')
@section('content')
<div class="jumbotron text-center">
       <h1>{{$title}}</h1>
       <h2>this is dashboard page</h2>
       <p>
        {{ Form::open(['action' => 'PageControllers@ver']) }}

		<label>username: <input type="text" name="user" required></label><br>
        <label>password: <input type="password" name="psw" required></label><br>

        <select name="per">

            <option value="1">Student</option>
            <option value="2">Teacher</option>
            <option value="3">Admin</option>

        </select>

        <input type="submit" value="OK">

        {{ Form::close() }}
        </p>
</div>
@endsection
