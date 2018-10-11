@extends('layouts.app2')
@section('content')
<?
?>
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <h2>This is admin page</h2>
    <p>
        <a href="/create_team"class="btn btn-primary btn-lg">create team</button></a>
        <a href="search_group.php"class="btn btn-primary btn-lg">search group</button></a>
        <a href="/join_student"class="btn btn-primary btn-lg">join student</a>
    </p>
    </div>
    @endsection
