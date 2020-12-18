@include('admin.custom.partials.head')
@include('admin.custom.partials.sidemenu')
<div class="container"><br/><br/><br/><br/>
    <div class="row clearfix">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>Domain Details</h2>
                </div>
                <div class="card-body">
                    <form method ="POST" action="{{route('domaindetail.store')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">If you already have a domain, please enter it below.</label>
                            <textarea class="form-control" id="domian_details" name="domain_details" placeholder="Enter Domain" rows="4"></textarea>
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
