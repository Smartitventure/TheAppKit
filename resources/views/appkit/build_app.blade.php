@include('appkit.partials.head')
<div class="container">
<br><br><br><br><br><br><br>
    <div class="card">
        <div class="card-header text-center">
           <h2> How would you like to build your app ? <h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>Select a mordern template</h5>
                        <p> Start building your app with ur app builder platform.<br>
                            no coding require</p><br>
                            <!-- <form method ="POST" action="{{route('theme.index')}}">
                                @foreach($buildapp as $data)
                                <input type="hidden" id="name" name="name" value="{{$data->user_template}}">
                                @endforeach
                                <button type="submit" class="btn btn-primary">Select a template</button>
                            </form> -->
                            <a href="{{route('theme.index')}}" class="btn btn-primary">Select a template</a>
                    </div>
                <div class="col-md-6">
                    <h5>Create a custom app</h5>
                        <p> Start building your app with ur app builder platform.<br>
                            no coding require</p><br>
                        <form method ="GET" action="{{route('register')}}">
                            @foreach($buildapp as $data)
                            <input type="hidden" id="name" name="name" value="{{$data->user_custom}}">
                            <button type="submit" class="btn btn-danger">Let's talk</button>
                            @endforeach
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
