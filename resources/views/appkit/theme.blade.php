@include('appkit.partials.head')
@include('appkit.partials.sidebar')

<div class="container">
<br><br><br><br>
<h2 class="text-center">Themes Here</h2>
<ul class="list-group">
@foreach($template as $data)
    <a href="{{ URL::to('theme_category/'.$data->slug) }}">{{$data->template_name}}</a>
@endforeach
</ul>
</div>


