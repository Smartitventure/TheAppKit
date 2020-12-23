<div class="sidemenu-wrapper">
    <div class="sidemenu">
        <div class="logo">
            <a class="logoimg" href="">
                <!-- <img class="" src="asset/images/davinci_logo.p" style="height:60px;"alt="logo"> -->
            </a>
        </div>
        <nav class="sidenavbar">
            <ul class="sidenavbarul">
                <li>
                    <a class="" href="{{ route('logout') }}">
                        <img class="" src="asset/images/sidebar-icon-4.png" alt="logo"><span class="menuname"> Log out</span>
                        <form id="logout-form" action="/logout" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>