@include('admin.template.partials.head')
@include('admin.template.partials.sidemenu')

    <div class="container"><br><br><br>
        <h1>Add Collection</h1>
        <form method="POST" action="{{route('collection.store')}}" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputEmail1">Collection Name:</label>
            <input type="text" class="form-control" id="collection_name" name="collection_name"  placeholder="Collection Name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Collection Description:</label>
            <textarea class="form-control" id="collection_description" name="collection_description" rows="3" placeholder="Collection Description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Collection Image:</label>
            <input type="file" class="form-control" id="collection_image" >
        </div>
       
        <button type="submit" class="btn btn-primary">Add Collection</button>
    </form>
    </div>

@include('admin.template.partials.footer')