@include('admin.template.partials.head')
@include('admin.template.partials.sidemenu')

    <div class="container"><br><br><br>
        <h1>Add Product</h1>
        
        <form method="POST" action="{{route('add_product.store')}}" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Product Name:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name">
            </div>
            
            <div class="form-group">
                <label for="">Product Description:</label>
                <textarea class="form-control" id="product_description" name="product_description" rows="3">Product Description</textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Product Image:</label>
                <input type="file" class="form-control" id="product_image" name="product_image">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Display Image:</label>
                <input type="file" class="form-control" id="product_display_image" name="product_display_image">
            </div>
            <!-- Product Prize: -->
            <h5 class="">Product Price:</h5><br>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2">
                        <label for="exampleInputEmail1" class="float-right">Regular Price:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="product_price" name="product_price" aria-describedby="emailHelp" placeholder="Regular Price">
                    </div>
                    <div class="col-md-4"></div><br><br>
                    <div class="col-md-2">
                        <label for="exampleInputEmail1" class="float-right">Sale Price:</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="sale_price" name="sale_price" aria-describedby="emailHelp" placeholder="Sale Price">
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div><br>
            <!-- Inventory: -->
            <h5 class="">Inventory:</h5><br>  
            <div class="form-group">
            <div class="row">
                <div class="col-md-2">
                    <label for="exampleInputEmail1" class="float-right" >Stock:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="stock_qty" name="stock_qty" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="col-md-4"></div>
            </div>
            </div><br>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="shipping">
                <label class="form-check-label" for="defaultCheck1">
                    Shipping
                </label>
            </div><br><br>
            <!-- Shipping  -->
            <div id="form_shipping">
               
                <div class="form-group"> 
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="">Weight:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="shipping_weight" name="shipping_weight" aria-describedby="emailHelp" placeholder="0.0">
                                </div>
                                <div class="col-md-3">
                                    <select id="inputState" class="form-control float-left">
                                        <option selected>Kg</option>
                                        <option>Oz</option>
                                        <option>lb</option>
                                        <option>g</option>
                                    </select><br><br>
                                </div>
                            </div><br>
                        </div><br>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="">length:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="shipping_length" name="shipping_length" aria-describedby="emailHelp" placeholder="0.0">
                                </div>
                                <div class="col-md-3">
                                    <select id="inputState" class="form-control float-left">
                                        <option selected>cm</option>
                                        <option>inch</option>
                                    </select><br><br>
                                </div>
                            </div><br>
                        </div><br>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="">Width:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="shipping_width" name="shipping_width" aria-describedby="emailHelp" placeholder="0.0">
                                </div>
                                <div class="col-md-3">
                                    <select id="inputState" class="form-control float-left">
                                        <option selected>cm</option>
                                        <option>inch</option>
                                    </select><br><br>
                                </div>
                            </div><br>
                        </div><br>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="">Height:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="shipping_height" name="shipping_height" aria-describedby="emailHelp" placeholder="0.0">
                                </div>
                                <div class="col-md-3">
                                    <select id="inputState" class="form-control float-left">
                                        <option selected>cm</option>
                                        <option>inch</option>
                                    </select><br><br>
                                </div>
                            </div><br>
                        </div><br>
                        <div class="col-md-6"></div>  
                    </div>
                </div>
            </div>
          
            <div class="form-group">
                <label for="exampleInputPassword1"><b>Product Type:</b></label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="formButton" value="option2">
            <label class="form-check-label" for="inlineRadio2">Product Variant</label>
            </div><br><br>
            <div id="form1">
                <form>
                    <div class="form-group"> 
                        <h5 class="">Variable Products:</h5><br>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="exampleInputEmail1" class="float-right" id="selectdata">Select Color:</label>
                            </div>
                            <div class="col-md-6">
                            <select class="form-control product_color" multiple="multiple"  style="width:100%;">
                                <option id="dataa"></option>
                            </select>
                            </div>
                            <div class="col-md-4"></div><br><br>
                            <div class="col-md-2">
                                <label for="exampleInputEmail1" class="float-right">Select Size:</label>
                            </div>
                            <div class="col-md-6">
                            <select class="form-control product_size" multiple="multiple" style="width:100%;">
                                <option></option>
                            </select>
                            </div>
                            <div class="col-md-4"></div><br><br>
                            <div class="col-md-2">
                                <label for="exampleInputEmail1" class="float-right">Select Material:</label>
                            </div>
                            <div class="col-md-6">
                            <select class="form-control product_material" multiple="multiple" style="width:100%;">
                                <option></option>
                            </select>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </form>
                <!-- <a id="btn1" href="#" >Add Flieds</a> -->
                <div id="append">
                
                </div>
            </div><br>
            <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
    </div>

@include('admin.template.partials.footer')