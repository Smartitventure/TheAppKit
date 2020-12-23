<?php

namespace App\Http\Controllers\Admin\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Collection;
use App\Usertheme;
use Illuminate\Support\Str;
use Session;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::get();
        return view('admin.template.onlinestore.collections',  compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view("admin.template.onlinestore.add_collection");
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
            'collection_name'=>'required', 'string', 'max:255',
            'collection_description'=>'required', 'string', 'max:255',
        ]);
        $data = array();
        $data['collection_name'] = $request->collection_name;
        $data['slug'] = $request->slug;
        $data['user_id'] = $request->user_id;
        $data['collection_description'] = $request->collection_description;
        $image = $request->file('collection_image');
        if ($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            $data['collection_image'] = $image_url;
        }
        $collection = Collection::create($data);
        session::flash('statuscode','info');
        return redirect('/collection')->with('status','Collection is Added');
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
