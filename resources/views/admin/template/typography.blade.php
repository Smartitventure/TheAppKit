@include('admin.template.partials.head')
@include('admin.template.partials.sidemenu')

<div class="container"><br/><br/>
<div class="row clearfix">
    <div class="col-md-6">
        <div class="card">
        <div class="card-header">
            <h2>Templates</h2>
        </div>
<div class="card-body">
    <form method ="POST" action="{{route('typography.store')}}" enctype="multipart/form-data">
@csrf
<!-- Heading Start -->
<div class="form-group">
    <h5 class="text-center">Heading</h5><br>
    <input type="text" class="form-control" placeholder="Enter Text" id="heading_name" aria-label="Username" aria-describedby="basic-addon1" maxlength="35">
    <label for="">colour :</label>
    <div class="">
        <input type="color" id="myHeadingColor">
    </div>
    <label for="">Font Size :</label>
    <select class="form-control" id="heading_size">
        <option value="20">20px</option>
        <option value="18">18px</option>
        <option value="16">16px</option>
        <option value="14">14px</option>
        <option value="12">12px</option>
    </select>    
</div>
<!-- Heading End -->
<!--Sub-Heading Start -->
<div class="form-group">
    <h5 class="text-center">Sub-Heading</h5><br>
    <input type="text" class="form-control" placeholder="Enter Text" id="sub_heading_name" aria-label="Username" aria-describedby="basic-addon1">
    <label for="">colour :</label>
    <div class="">
        <input type="color" id="mySubColor">
    </div>
    <br>
    <label for="">Font Size :</label>
    <select class="form-control" id="sub_heading_size">
        <option value="20">20px</option>
        <option value="18">18px</option>
        <option value="16">16px</option>
        <option value="14">14px</option>
        <option value="12">12px</option>
    </select>       
</div>
<!--Sub-Heading End -->
<div class="form-group">
    <h5 class="text-center">Paragraph</h5><br>
    <input type="text" class="form-control" placeholder="Enter Text" id="paragraph_name" aria-label="Username" aria-describedby="basic-addon1">
    <label for="">colour :</label>
    <div class="">
        <input type="color" id="myParagraphColor">
    </div>
    <br>
    <label for="">Font Size :</label>
    <select class="form-control" id="paragraph_size">
        <option value="20">20px</option>
        <option value="18">18px</option>
        <option value="16">16px</option>
        <option value="14">14px</option>
        <option value="12">12px</option>
    </select>
</div>
<!-- Heading Start -->
<div class="form-group">
    <h5 class="text-center">Button</h5>
        <label for="">colour :</label>
    <div class="">
        <input type="color" id="myButtonColor">
    </div>
    <br>
    <label for="">Font Size :</label>
    <select class="form-control" id="button_size">
        <option value="20">20px</option>
        <option value="18">18px</option>
        <option value="16">16px</option>
        <option value="14">14px</option>
        <option value="12">12px</option>
    </select>
</div>

<!-- Button Background Start -->
<div class="form-group">
        <h5 class="text-center">Button Background</h5>
        <label for="">colour :</label>
        <div class="">
        <input type="color" id="myButtonBgColor">
    </div>  
</div>
<!-- Button Background End -->

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
                        <h2 id="heading" class="heading">Heading</h2><br>
                        <h4 id="sub_heading">Sub Heading</h4><br>
                        <p id="paragraph">Paragraph</p><br>
                        <input type="submit" value="Button" id="button"><br><br>
                        <img src="" alt="..." class="img-thumbnail" id="preview"><br>
                     <br>
                  </div>
                  <div class="card-footer">
                    Show details
                  <div>
               </div>
            </div>
         </div>

@include('admin.template.partials.footer')