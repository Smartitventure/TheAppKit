@include('admin.template.partials.head')
@include('admin.template.partials.sidemenu')
<div class="container"><br/><br/><br/><br/>
    <div class="row clearfix">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>Publish</h2>
                </div>
                <div class="card-body">
                    <form method ="POST" action="{{route('publish.store')}}">
                        @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">App Store Details</label>
                            <textarea class="form-control" id="app_details" name="app_details" placeholder="App Store Details" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">About App</label>
                            <textarea class="form-control" id="about_app" name="about_app" placeholder="About App" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                    </form>
                </div>
            </div>
                
        </div>
    </div>
</div>
@include('admin.template.partials.footer')