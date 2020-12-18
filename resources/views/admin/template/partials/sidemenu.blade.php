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
                    <a class="" href="#">
                         <span class="menuname">My Apps</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
						<a href="#">
						 <span class="menuname">Template</span>
						 <i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
						  <ul class="sidebar-submenu" style="display:none;">
							<li>
							  <a href="/typography">Typography</a>
							</li>
							<!-- <li>
							  <a href="#">Dashboard 2</a>
							</li>
							<li>
							  <a href="#">Dashboard 3</a>
							</li> -->
						  </ul>
				</li>
                <li class="sidebar-dropdown">
						<a href="#">
						 <span class="menuname">Online Store</span>
						 <i class="fa fa-angle-right" aria-hidden="true"></i>
						</a>
                          <ul class="sidebar-submenu" style="display:none;">
                            <li>
							  <a href="/add_product">All Products</a>
							</li>
                            <li>
							  <a href="/collection">Collections</a>
							</li>
						  </ul>
				</li>
                <li>
                    <a class="" href="/pushnotification">
                       
                        <span class="menuname">Push Notification / Email</span>
                    </a>
                </li>
                <li>
                    <a class="" href="/publish">
                       
                        <span class="menuname">Publish</span>
                    </a>
                </li>
                <li>
                    <a class="" href="#">
                       
                        <span class="menuname">Billing / Payments</span>
                    </a>
                </li>
                <li>
                    <a class="" href="/myaccount">
                       
                        <span class="menuname"> My Account</span>
                    </a>
                </li> 
                <li>
                    <a class="" href="{{ route('logout') }}">
                        <span class="menuname"> Log out</span>
                        <form id="logout-form" action="/logout" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>