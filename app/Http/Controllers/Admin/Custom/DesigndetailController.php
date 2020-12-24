<?php

namespace App\Http\Controllers\Admin\Custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Designdetail;
use Session;

class DesigndetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.custom.designdetail");
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
         $this->validate($request,[
            
        ]);
        $data = array();
       
        $dp1 = $request->file('dp1');
        $dp2 = $request->file('dp2');
        $dp3 = $request->file('dp3');
        $dp4 = $request->file('dp4');
        $logo = $request->file('logo');
       
        if($dp1)
         {
            $file = $request->file('dp1');
            $filename = time() . '.' . $request->file('dp1')->extension();
            $filePath = '/files/uploads/';
            $file_url = $filePath.$filename;
            $file->move($filePath, $filename);
            $data['dp1'] = $file_url;
        }

        if($dp2)
         {
            $file = $request->file('dp2');
            $filename = time() . '.' . $request->file('dp2')->extension();
            $filePath = '/files/uploads/';
            $file_url = $filePath.$filename;
            $file->move($filePath, $filename);
            $data['dp2'] = $file_url;
        }

        if($dp3)
         {
            $file = $request->file('dp3');
            $filename = time() . '.' . $request->file('dp3')->extension();
            $filePath = '/files/uploads/';
            $file_url = $filePath.$filename;
            $file->move($filePath, $filename);
            $data['dp3'] = $file_url;
        }

        if($dp4)
         {
            $file = $request->file('dp4');
            $filename = time() . '.' . $request->file('dp4')->extension();
            $filePath = '/files/uploads/';
            $file_url = $filePath.$filename;
            $file->move($filePath, $filename);
            $data['dp4'] = $file_url;
        }

        if($logo)
         {
            $file = $request->file('logo');
            $filename = time() . '.' . $request->file('logo')->extension();
            $filePath = '/files/uploads/';
            $file_url = $filePath.$filename;
            $file->move($filePath, $filename);
            $data['logo'] = $file_url;
        }
        $data['design_details'] = $request->design_details;
      
        $user = Designdetail::create($data);
        
        session::flash('statuscode','info');
        return redirect('designdetail')->with('status','Data is Added');
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
