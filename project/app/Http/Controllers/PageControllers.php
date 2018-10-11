<?php

namespace App\Http\Controllers;
use App\MyClass\main_class;
use Illuminate\Http\Request;

class PageControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='Welcome to Index';
        return view('pages.index')->with('title',$title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(){
        $title='Login';
        return view('pages.login')->with('title',$title);
    }

    public function dashboard(){
        $title='dashboard';
        return view('pages.dashboard')->with('title',$title);
    }

    public function ver(){
        return view('pages.verification');
    }

    public function create_team(){
        $title='create team';
        $main_clss= new main_class;
        $db = $main_clss->db_link();
        return view('pages.create_team',compact('db'))->with('title',$title);
    }

    public function team_ver(){

        return view('pages.team_verification');

    }

    public function join_student(){
        $title='join student';
        $main_clss= new main_class;
        $db = $main_clss->db_link();
        return view('pages.join_student',compact('db'))->with('title',$title);
    }

    public function join_ver(){
        return view('pages.join_ver');

    }

    public function team(){
        $title='team page';
        $main_clss= new main_class;
        $db = $main_clss->db_link();
        return view('pages.team',compact('db'))->with('title',$title);
    }

    public function logout(){
        return view('pages.logout');
    }

    public function score(){
        $title='score page';
        $main_clss= new main_class;
        $db = $main_clss->db_link();
        return view('pages.score',compact('db'))->with('title',$title);
    }

}
