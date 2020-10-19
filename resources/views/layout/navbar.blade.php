<nav class="pcoded-navbar menupos-fixed menu-light ">
    <div class="navbar-wrapper content-main  container">
        <div class="navbar-content scroll-div " >
            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Manager</label>
                </li>
                <li class="nav-item"><a href="{{route('dashboard.index')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">User</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('user.index')}}">List</a></li>
                        <li><a href="{{route('user.create')}}">New user</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-tag"></i></span><span class="pcoded-mtext">Category</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="">List</a></li>
                        <li><a href="">New category</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Product</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="">List</a></li>
                        <li><a href="">New product</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-message-square"></i></span><span class="pcoded-mtext">Comment</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('cmt.index')}}">List</a></li>
                        <li><a href="{{route('cmt.create')}}">New comment</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
