<sidebar class="sidebar_area"> <!--sidebar begin-->
    <div class="statistics sidebar_box">
        <h4  class="sidebar_box_title"><i class="fa fa-dashboard"></i> Dashboard</h4>
        <ul class="sidebar_menu_area">
            <li class="sidebar_menu {{ Request::is('dashboard/user/*/profile') ? 'active' : '' }}"><a href="{{ url('dashboard/user/'.Auth::id().'/profile') }}">Profile</a></li>
            <li class="sidebar_menu {{ Request::is('dashboard/user/questions') ? 'active' : '' }}"><a href="{{ url('dashboard/user/questions') }}">Question</a></li>
        </ul>
    </div>
</sidebar><!--sidebar finished-->