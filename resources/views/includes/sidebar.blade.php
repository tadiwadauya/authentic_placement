
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="html/index.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="{{asset('admin/assets/images/logo.png')}}" srcset="{{asset('admin/assets/images/logo2x.png 2x')}}" alt="logo">
                            <img class="logo-dark logo-img" src="{{asset('admin/assets/images/logo.png')}}" srcset="{{asset('admin/assets/images/logo-dark2x.png')}} 2x" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-menu-trigger me-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
<div class="nk-sidebar-element">
                    <div class="nk-sidebar-body" data-simplebar>
                        <div class="nk-sidebar-content">
                            <div class="nk-sidebar-menu">
                                <ul class="nk-menu">
                              
                                    <li class="nk-menu-item">
                                        <a href="html/loan/index.html" class="nk-menu-link" target="_blank">
                                            <span class="nk-menu-icon"><em class="icon ni ni-cc-new"></em></span>
                                            <span class="nk-menu-text">Home</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    @auth
                                    @if (auth()->user()->is_admin == 0)
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title text-primary-alt">User Management</h6>
                                    </li><!-- .nk-menu-heading -->
                                    </div><!-- .nk-sidebar-menu -->
                                    @endif
                                    @endauth
                                    @auth
                                    @if (auth()->user()->is_admin == 1)
                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                            <span class="nk-menu-text">User Manage</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="{{ url('users') }}" class="nk-menu-link"><span class="nk-menu-text">Users</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="html/user-card.html" class="nk-menu-link"><span class="nk-menu-text">User Contact - Card</span></a>
                                            </li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->

                                    <li class="nk-menu-item">
                                        <a href="{{ url('categories') }}" class="nk-menu-link" >
                                            <span class="nk-menu-icon"><em class="icon ni ni-briefcase"></em></span>
                                            <span class="nk-menu-text">Job Categories</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    
                            @endif
@endauth
                                </ul><!-- .nk-menu -->
                            </div><!-- .nk-sidebar-menu -->
                            <div class="nk-sidebar-footer">
                                <ul class="nk-menu nk-menu-footer">
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                            <span class="nk-menu-text">Support</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item ms-auto">
                                        <div class="dropup">
                                            <a href="#" class="nk-menu-link dropdown-indicator has-indicator" data-bs-toggle="dropdown" data-offset="0,10">
                                                <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                                                <span class="nk-menu-text">English</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="{{asset('admin/assets/images/flags/english.png')}}" alt="" class="language-flag">
                                                            <span class="language-name">English</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="{{asset('admin/assets/images/flags/spanish.png')}}" alt="" class="language-flag">
                                                            <span class="language-name">Español</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="{{asset('admin/assets/images/flags/french.png')}}" alt="" class="language-flag">
                                                            <span class="language-name">Français</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="{{asset('admin/assets/images/flags/turkey.png')}}" alt="" class="language-flag">
                                                            <span class="language-name">Türkçe</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul><!-- .nk-footer-menu -->
                            </div><!-- .nk-sidebar-footer -->
                        </div><!-- .nk-sidebar-content -->
                    </div><!-- .nk-sidebar-body -->
                </div><!-- .nk-sidebar-element -->
            </div>