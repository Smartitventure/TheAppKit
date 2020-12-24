@include('admin.custom.partials.head')
@include('admin.custom.partials.sidemenu')
<div class="container"><br/><br/><br/><br/>
    <div class="row clearfix">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>Designs</h2><br>
                    <p>In this section you can upload any design inspiration, logos or documents which will help us bring your App to life.</p><br>
                    <p>You will also find our XD link below. This link will be used throughout the design process and will give you live updates on the screens for your App. In the XD link, feel free to leave comments on each page to help us understand what changes are required
                     </p><br>

                        
                   
                   
                </div>
                <div class="card-body">
                    <form method ="POST" action="{{route('designdetail.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="exampleInputPassword1">Upload Documents or Picture </label>
                        <br>
                        <input type="file" name="dp1" id="exampleInputPassword1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Upload Documents or Picture </label>
                        <br>
                        <input type="file" name="dp2" id="exampleInputPassword1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Upload Documents or Picture </label>
                        <br>
                        <input type="file" name="dp3" id="exampleInputPassword1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Upload Documents or Picture </label>
                        <br>
                        <input type="file" name="dp4" id="exampleInputPassword1">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Upload Logo </label>
                        <br>
                        <input type="file" name="logo" id="exampleInputPassword1">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">References link of app designs </label>
                            <textarea class="form-control" id="design_details" name="design_details" placeholder="Enter Links" rows="4"></textarea>
                    </div>
                  
  <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                        </form>
                </div>
            </div>
                
        </div>
    </div>
</div>
@include('admin.custom.partials.footer')
