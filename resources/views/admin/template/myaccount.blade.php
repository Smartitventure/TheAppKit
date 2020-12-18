@include('admin.template.partials.head')
@include('admin.template.partials.sidemenu')

<div class="container"><br/><br/><br/><br/>
    <div class="row clearfix">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>My Account</h2>
                </div>
                <div class="card-body">
                    <h5>Username:- &nbsp&nbsp{{ Auth::user()->first_name }}{{ Auth::user()->last_name }}</h5><br>
                    <h5>Email:- &nbsp&nbsp{{ Auth::user()->email }}</h5><br>
                    <h5>Business Name:- &nbsp&nbsp{{ Auth::user()->business_name }}</h5><br>
                    <h5>Number:- &nbsp&nbsp{{ Auth::user()->number}}</h5><br>
                    <h5>Country:- &nbsp&nbsp{{ Auth::user()->country }}</h5>
                </div>
            </div>   
        </div>
    </div>
</div>
@include('admin.template.partials.footer')