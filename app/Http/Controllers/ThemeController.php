<?php

namespace App\Http\Controllers;

use App\ThemeCategory;
use App\ThemeTemplate;
use Illuminate\Http\Request;
use Session;
use Auth;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = ThemeCategory::get();
        $template = ThemeTemplate::get();
        return view("appkit.theme")->with('list',$list)->with('template',$template);
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
     * @param  \App\ThemeCategory  $theme
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ThemeCategory  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(ThemeCategory $theme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ThemeCategory  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThemeCategory $theme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ThemeCategory  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThemeCategory $theme)
    {
        //
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
