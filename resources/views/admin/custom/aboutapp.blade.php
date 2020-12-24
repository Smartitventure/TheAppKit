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
  <!--div class="form-group">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">Upload</span>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="app_logo" id="image">
            <label class="custom-file-label" for="inputGroupFile01">Choose App logo</label>
        </div>
    </div>
  </div-->
  <div class="form-group">
    <label for="exampleInputPassword1">Upload Wireframes (Optional)</label>
    <br>
    <input type="file" name="wireframes" id="exampleInputPassword1">
  </div>
  <div class="form-group">

    <label for="">App idea</label>
    <textarea class="form-control" id="description" name="app_idea" rows="3" placeholder="Give us a brief outline of your App idea"></textarea>
   
  </div>
  <!---------------------------------------Questions------------------------------------>
  <div class="yn">
    <h6>Have you thought about this idea for a while?</h6>
    <input type="radio" id="yes" name="idea" value="yes">
    <label for="yes">Yes</label><br>
    <input type="radio" id="no" name="idea" value="no">
    <label for="no">No</label><br>

  </div>
  <div class="ques">
     <h6>Are you looking for an iOS & Android App?</h6>
    <input type="radio" id="android" name="looking" value="android">
    <label for="android">Android</label><br>
    <input type="radio" id="ios" name="looking" value="ios">
    <label for="ios">iOS</label><br>
    <input type="radio" id="both" name="looking" value="both">
    <label for="both">Both</label>

  </div>
  <div class="yn1">
    <h6>Do you require a website to be development with the App</h6>
    <input type="radio" id="yes1" name="website" value="yes1">
    <label for="yes1">Yes</label><br>
    <input type="radio" id="no1" name="website" value="no1">
    <label for="no1">No</label><br>

  </div>

  <div class="form-group">
  
  <button type="submit" class="btn btn-primary">Save</button>
  
  </div>


</form>
    </div>
        </div>
            </div>
            
   




  

@include('admin.custom.partials.footer')