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
                    <a class="" href="/aboutapp">
                        <img class="" src="asset/images/sidebar-icon-1.png" alt="logo"> <span class="menuname">About App</span>
                    </a>
                </li>
                <li>
                    <a class="" href="/domaindetail">
                        <img class="" src="asset/images/sidebar-icon-3.png" alt="logo">
                         <span class="menuname">Domain Details</span>
                    </a>
                </li>
                <li>
                <a class="" href="">
                    <img class="" src="asset/images/sidebar-icon-5.png" alt="logo">
                    <span class="menuname">Design</span>
                </a>
                </li>
                <li>
                <a class="" href="">
                    <img class="" src="asset/images/sidebar-icon-5.png" alt="logo">
                    <span class="menuname">Chat</span>
                </a>
                </li> <li>
                <a class="" href="">
                    <img class="" src="asset/images/sidebar-icon-5.png" alt="logo">
                    <span class="menuname">Test Builds</span>
                </a>
                </li> <li>
                <a class="" href="">
                    <img class="" src="asset/images/sidebar-icon-5.png" alt="logo">
                    <span class="menuname">Bugs</span>
                </a>
                </li> <li>
                <a class="" href="">
                    <img class="" src="asset/images/sidebar-icon-5.png" alt="logo">
                    <span class="menuname">Payments</span>
                </a>
                </li>
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