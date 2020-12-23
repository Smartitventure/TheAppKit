@include('admin.super_admin.partials.head')
@include('admin.super_admin.partials.sidemenu')

<div class="container"><br><br><br><br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Business Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->first_name}}{{$user->last_name}}</td>
                <td>{{$user->business_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->number}}</td>
            </tr>    
            @endforeach
        </tbody>
      </table>
</div>

@include('admin.super_admin.partials.footer')