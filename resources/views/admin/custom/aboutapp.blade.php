@include('admin.custom.partials.head')
@include('admin.custom.partials.sidemenu')

<div class="container">
         <br/>
         <br/>
<div class="row clearfix">
    <div class="col-md-6">
        <div class="card">
        <div class="card-header">
            <h2>About App</h2>
        </div>
            <div class="card-body">
            <form method ="POST" action="{{route('aboutapp.store')}}" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">App Name</label>
    <input type="text" id="name" name="app_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter App Name">
  </div>
  <div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="app_logo" id="image">
            <label class="custom-file-label" for="inputGroupFile01">Choose App logo</label>
        </div>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Upload Wireframes</label>
    <br>
    <input type="file" name="wireframes" id="exampleInputPassword1">
  </div>
  <div class="form-group">

    <label for="">App idea</label>
    <textarea class="form-control" id="description" name="app_idea" rows="3"></textarea>
   
  </div>
  <div class="form-group">
  
  <button type="submit" class="btn btn-primary">Submit</button>
  
  </div>
</form>
    </div>
        </div>
            </div>
            <div class="col-md-6">
               <div class="card">
                  <div class="card-header">
                     <h2>Display section</h2>
                  </div>
                  <div class="card-body">
                     <h2 id="app_name">App Name</h2>
                     <br>
                     <img src="" alt="..." class="img-thumbnail" id="preview">
                     <br><br>
                     <h2 id="app_idea">App idea here</h2>
                  </div>
                  <div class="card-footer">
                    Show details
                  <div>
               </div>
            </div>
         </div>

@include('admin.custom.partials.footer')