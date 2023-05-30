<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Home <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add/homeSliderInfo')}}">Add Home Slider</a>
                    </li>
                    <li>
                        <a href="{{url('/manage/homeSliderInfo')}}"> Manage Home Slider</a>
                    </li>
                    <li>
                        <a href="{{url('/add/homeNewsInfo')}}">Add Home News</a>
                    </li>
                    <li>
                        <a href="{{url('/manage/homeNewsInfo')}}"> Manage Home News</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> About  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add/aboutInfo')}}">Create About Info</a>
                    </li>
                    <li>
                        <a href="{{url('/manage/aboutInfo')}}">Manage About Info</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Company <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add/company')}}"> Add Company Info</a>
                    </li>
                    <li>
                        <a href="{{url('/manage/company')}}"> Manage Company Info</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Team <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add/teamInfo')}}"> Add Team Member Info</a>
                    </li>
                    <li>
                        <a href="{{url('/manage/teamInfo')}}"> Manage Team Member Info</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Blog <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/add/blogInfo')}}">Add Blog Info</a>
                    </li>
                    <li>
                        <a href="{{url('/manage/blogInfo')}}"> Manage Blog Info</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Client Contact Info  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/manage/contactInfo')}}">Manage Contact Info</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
</nav>