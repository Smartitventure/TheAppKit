<?php

namespace App\Http\Controllers\Admin\Template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Collection;
use App\Product;
use App\ProductCategory;
use DB;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.template.onlinestore.all_products");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $collections = Collection::get();
        return view('admin.template.onlinestore.add_products', compact('collections'));
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
            'product_name'=>'required', 'string', 'max:255',
            'product_description'=>'required', 'string', 'max:255',
        ]);
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['user_id'] = $request->user_id;
        $data['product_description'] = $request->product_description;
        $data['product_type'] = $request->product_type;
        $data['sale_price'] = $request->sale_price;
        $data['stock_qty'] = $request->stock_qty;
        $data['shipping_weight'] = $request->shipping_weight;
        $data['shipping_length'] = $request->shipping_length;
        $data['shipping_width'] = $request->shipping_width;
        $data['shipping_height'] = $request->shipping_height;
        $image = $request->file('product_image');
        if ($image) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            $data['product_image'] = $image_url;
        }
        $galleryimage = $request->file('product_display_image');
        if ($galleryimage) {
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($galleryimage->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/';
            $image_url = $upload_path.$image_full_name;
            $success = $galleryimage->move($upload_path,$image_full_name);
            $data['product_display_image'] = $image_url;
        }
        $product = Product::create($data);
      
        $product_id =  DB::getPdo()->lastInsertId();

        \App\ProductCategory::create([                    
        'product_id' => $product_id,
        'collection_id' => $data['product_collection'],
        'user_id' => $data['user_id'],
        ]);

        session::flash('statuscode','info');
        return redirect('/product')->with('status','Product is Added');
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
