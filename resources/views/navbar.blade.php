<!-- Navbar start  -->
<div id="nav">
    <div class="navbar navbar-custom " role="navigation" id="slide-nav">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="navbar-brand" href="#">
                    <img src="{{ url('img/A.svg') }}">
                </a>
            </div>
            <div id="slidemenu">

                <form class="navbar-form " role="form">
                    <div class="form-group">
                        <i class=" fa fa-search "></i>
                        <input type="search" placeholder="search" class="form-control">
                    </div>
                </form>

                <ul id="navbar-desktop" class="nav navbar-nav navbar-right">
                    <li><a class="nav-link" href="#">HOME</a></li>
                    <li><a href="#" class="btn button  upload "><i class="fa fa-upload"></i> UPLOAD</a></li>
                    <li>
                        <a href="#" class="btn button-notif button"><i class="fa fa-envelope-o"></i></a>
                    </li>
                    <li>
                        <a href="#" class="btn button-notif button"><i class="fa fa-bell-o"></i></a>
                    </li>
                    <li>
                        <li>
                            <div class="pull-right profileImg">
                                <a href="#" class="collapseMenu">
                                    <img src="{{ url('img/IMG_0823.JPG') }}">
                                </a>
                                <ul class="triangle">
                                    <li>
                                        <a href="#">
                                            <div>Your profile</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>Accounte settings</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div>Log out</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                </ul>
                <ul id="navbar-collapse" class="nav navbar-nav navbar-right ">
                    <li>
                        <div class="profileImg pull-left">
                            <a href="#" class="collapseMenu">
                                <img src="{{ url('img/IMG_0823.JPG') }}">
                            </a>
                        </div>
                        <a class="pull-left user-name" href="#">Tofiq Aliyev</a>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="clearfix"></div>
                        <a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-upload"></i> Upload</a></li>
                    <li>
                        <a href="#"><i class="fa fa-envelope-o"></i> Bookmark</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bell-o"></i> Notification</a>
                    </li>
                    <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>

                </ul>

            </div>
        </div>
    </div>
</div>
<!-- Navbar end  -->
