<?php

namespace App\Http\Controllers\Admin\Custom;

use App\Http\Controllers\Controller;
use App\Aboutapp;
use Illuminate\Http\Request;
use Session;

class AboutappController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.custom.aboutapp");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'app_name'=>'required', 'string', 'max:255',
        ]);
        $data = array();
        $data['app_name'] = $request->app_name;
        $data['app_idea'] = $request->app_idea;
        $app_logo = $request->file('app_logo');
        $wireframes = $request->file('wireframes');
        if ($app_logo) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($app_logo->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $success = $app_logo->move($upload_path,$image_full_name);
            $data['app_logo'] = $image_url;
        }
        if($wireframes)
        {
            $file = $request->file('wireframes');
            $filename = time() . '.' . $request->file('wireframes')->extension();
            $filePath = '/files/uploads/';
            $file_url = $filePath.$filename;
            $file->move($filePath, $filename);
            $data['wireframes'] = $file_url;
        }
        $user = Aboutapp::create($data);
        session::flash('statuscode','info');
        return redirect('aboutapp')->with('status','Data is Added');
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
}
