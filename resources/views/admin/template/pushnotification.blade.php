@include('admin.template.partials.head')
@include('admin.template.partials.sidemenu')
<div class="container"><br/><br/><br/><br/>
    <div class="row clearfix">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>Notifications</h2>
                </div>
                <div class="card-body">
                    <form method ="POST" action="{{route('pushnotification.store')}}">
                        @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                            <input type="email" class="form-control" id="notify_email" name="notify_email" placeholder="example@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message:</label>
                            <textarea class="form-control" id="notify_message" name="notify_message" placeholder="Enter Message" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Push</button>
                    </div>
                    </form>
                </div>
            </div>
                
        </div>
    </div>
</div>
@include('admin.template.partials.footer')