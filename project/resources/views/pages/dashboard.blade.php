@extends('layouts.app2')
@section('content')
@php
    session_start();
    use App\MyClass\main_class;
    $main_class= new main_class();

    $username =$_SESSION["username"];

    $db=$main_class->db_link();
    switch ($_SESSION["per"]) {
        case '3':
        $name=$db-> query("SELECT name FROM administrator where username ='$username'");
            break;

        case '2':
        $name=$db-> query("SELECT name FROM teacher where username ='$username'");
            break;
        case '1':
        $name=$db-> query("SELECT name FROM student where username ='$username'");
            break;
    }



   foreach ($name as $key => $value) {
       echo $showname=$value["name"];
   }

    @endphp
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
<h2>hi {{$showname}}</h2>

    <p>
        @switch($_SESSION["per"])
            @case(3)
                <a href="/team"class="btn btn-primary btn-lg">Team</button></a>
                <a href="/score"class="btn btn-primary btn-lg disabled">score</a>
                <a href="project_upload"class="btn btn-primary btn-lg disabled">project upload</a>
                @break
            @case(2)
                <a href="/team"class="btn btn-primary btn-lg disabled">Team</button></a>
                <a href="/score"class="btn btn-primary btn-lg">score</a>
                <a href="project_upload"class="btn btn-primary btn-lg disabled">project upload</a>
                @break
            @case(1)
                <a href="/team"class="btn btn-primary btn-lg disabled">Team</button></a>
                <a href="/score"class="btn btn-primary btn-lg disabled">score</a>
                <a href="/upload"class="btn btn-primary btn-lg ">project upload</a>
                @break
        @endswitch


    </p>
    </div>
    @endsection

