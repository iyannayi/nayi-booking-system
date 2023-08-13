<div class="nk-header nk-header-fixed">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-header-logo ms-n1">
                <div class="nk-sidebar-toggle">
                    <button class="btn btn-sm btn-icon btn-zoom sidebar-toggle d-sm-none"><em class="icon ni ni-menu"></em></button>
                    <button class="btn btn-md btn-icon btn-zoom sidebar-toggle d-none d-sm-inline-flex"><em class="icon ni ni-menu"></em></button>
                </div>
                <a href="/html/index.html" class="logo-link">
                    <div class="logo-wrap">
                        <img class="logo-img logo-light" src="/images/logo.png" srcset="/images/logo2x.png 2x" alt="">
                        <img class="logo-img logo-dark" src="/images/logo-dark.png" srcset="/images/logo-dark2x.png 2x" alt="">
                        <img class="logo-img logo-icon" src="/images/logo-icon.png" srcset="/images/logo-icon2x.png 2x" alt="">
                    </div>
                </a>
            </div>
            <nav class="nk-header-menu nk-navbar">
                
            </nav>
            <div class="nk-header-tools">
                <ul class="nk-quick-nav ms-2">
                    <li class="dropdown">
                        <a href="#" data-bs-toggle="dropdown">
                            <div class="d-sm-none">
                                <div class="media media-md media-circle">
                                    <img src="/images/avatar/a.jpg" alt="" class="img-thumbnail">
                                </div>
                            </div>
                            <div class="d-none d-sm-block">
                                <div class="media media-circle">
                                    <img src="/images/avatar/a.jpg" alt="" class="img-thumbnail">
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md">
                            <div class="dropdown-content dropdown-content-x-lg py-3 border-bottom border-light">
                                <div class="media-group">
                                    <div class="media media-xl media-middle media-circle"><img src="/images/avatar/a.jpg" alt="" class="img-thumbnail"></div>
                                    <div class="media-text">
                                        <div class="lead-text">{{ Auth::user()->name }}</div>
                                        <span class="sub-text">{{ Auth::user()->staffid }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-content dropdown-content-x-lg py-3 border-bottom border-light">
                                <ul class="link-list">
                                    <li><a href="/html/profile.html"><em class="icon ni ni-user"></em> <span>My Profile</span></a></li>
                                    <li><a href="/html/user-manage/user-cards.html"><em class="icon ni ni-contact"></em> <span>My Contacts</span></a></li>
                                    <li><a href="/html/profile-edit.html"><em class="icon ni ni-setting-alt"></em> <span>Account Settings</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-content dropdown-content-x-lg py-3">
                                
                                <ul class="link-list">
                                    <li>
                                        @auth
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="nav_link w-100 btn">
                                            <em class="icon ni ni-signout"></em> <span>Log Out</span>
                                            </button>
                                        </form>
                                        @endauth
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>