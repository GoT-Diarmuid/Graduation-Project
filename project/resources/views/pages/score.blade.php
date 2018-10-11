@extends('layouts.app2')
<script>


        function showyear() {

            var SelecYear = document.getElementById("year").value;
            alert(SelecYear);

        }
        function showpj() {
            var pj = document.getElementById("pj_name");
            var option = document.createElement("option");
            option.text = "Kiwi";
            pj.add(option);

        }
    </script>
@section('content')
@php
    session_start();
    use App\MyClass\main_class;
    $main_class= new main_class();
    $year = "<script>document.write(SelecYear)</script>";
    $result_team=$db-> query("SELECT * FROM team group by year");
    $result_pj_name=$db-> query("SELECT * FROM team where year='$year'");

    @endphp
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
<h2>Score Page</h2>

    <p>
        {{ Form::open(['action' => 'PageControllers@ver']) }}

		<div>
            <label>Years:
                <select name="year" id="year" onchange="showyear(),showpj()">
                    <option  selected="selected"}>Plaece choose Year</option>
                    @foreach ($result_team as $values)
                        <option  value={{$values["year"]}}>{{$values["year"]}}</option>
                    @endforeach
                </select>
                </label>


        </div>
        <div>
            <label>project Name:
                <select name="pj_name" id="pj_name">
                    @foreach ($result_pj_name as $values)
                        <option id ="pj_name" value={{$values["project_name"]}}>{{$values["project_name"]}}</option>
                    @endforeach
                </select>
                </label>


        </div>
        <div>
            Comment:<br>
                <textarea id="Textarea">
                </textarea>
        </div>
        <input type="submit" value="OK">

        {{ Form::close() }}
    </p>
    </div>
    @endsection




