@include('admin.custom.partials.head')
@include('admin.custom.partials.sidemenu')
<div class="container"><br/><br/><br/><br/>
    <div class="row clearfix">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>Domain Details</h2><br>
                    <p>You will need to purchase a domain name for your business. You can purchase a domain from Godaddy for super cheap! </p><br>

                        <a href="www.godaddy.com">www.godaddy.com</a>

                   
                </div>
                <div class="card-body">
                    <form method ="POST" action="{{route('domaindetail.store')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">If you already have a domain, please enter it below.</label>
                            <textarea class="form-control" id="domian_details" name="domain_details" placeholder="Enter Domain" rows="4"></textarea>
                    </div>
                  
                    

                    <p>We will need to access your domain DNS in order to keep all files for your App together in one place. To allow us access you will need to:</p>
                       <ul>
                         1) Log in to your domain provider<br>
                        2) Go to settings<br>
                        3) Click teams or member access<br>
                        4) Enter our email documents@theappkit.co.uk
                        </ul><br><br>
                      <input type="checkbox" name="allow" value="allow" >
  <label for="vehicle3"> I have allowed you access</label><br><br>
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
