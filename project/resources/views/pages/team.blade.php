@extends('layouts.app2')
@php
use Carbon\Carbon;
    $result_team=$db-> query("SELECT * FROM team");
    $year = date('Y');
@endphp
@section('content')
<?
?>
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <h2>This is team page</h2>

    <div>
        <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Team ID</th>
                <th scope="col">Project Name</th>
                <th scope="col">Teacher ID</th>
                <th scope="col">Year</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($result_team as $item)

                <tr>
                    <th scope="row">1</th>
                <td>{{$item["team_id"]}}</td>
                    <td>{{$item["project_name"]}}</td>
                    <td>{{$item["teacher_username"]}}</td>
                    <td>{{$year}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    <p>
        <a href="/create_team"class="btn btn-primary btn-lg">create team</button></a>
        <a href="search_group.php"class="btn btn-primary btn-lg">search group</button></a>
        <a href="/join_student"class="btn btn-primary btn-lg disabled">join student</a>
    </p>
    </div>
    @endsection
