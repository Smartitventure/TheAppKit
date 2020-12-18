<div class="sidemenu-wrapper">
    <div class="sidemenu">
        <div class="logo">
            <a class="logoimg" href="">
            </a>
        </div>
        <nav class="sidenavbar">
            <ul class="sidenavbarul">
            @foreach($list as $data)
                <li>
                    <a class="" href="{{ URL::to('theme_category/'.$data->slug) }}">
                        <span class="menuname">{{$data->category_name}}</span>
                    </a>
                </li>
            @endforeach
            </ul>
        </nav>
    </div>
</div>