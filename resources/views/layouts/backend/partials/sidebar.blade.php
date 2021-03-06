<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="#" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('backend_assets/images/logo.png') }}" srcset="{{ asset('backend_assets/images/logo2x.png 2x') }}" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('backend_assets/images/logo-dark.png') }}" srcset="{{ asset('backend_assets/images/logo-dark2x.png 2x') }}" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('backend_assets/images/logo-small.png') }}" srcset="{{ asset('backend_assets/images/logo-small2x.png 2x') }}" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <a href="{{ route('application') }}" class="" target="_blank">
                            <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                            <h4 class="overline-title text-primary-alt">Visit Site</h4>
                        </a><br>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{route('dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                            <span class="nk-menu-text">Jobs</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('job.create') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-plus"></em></span>
                                    <span class="nk-menu-text">Job Create</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('job.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-list"></em></span>
                                    <span class="nk-menu-text">Job List</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('description.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-list-round"></em></span>
                                    <span class="nk-menu-text">Job Description</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{ route('examination.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-calender-date"></em></span>
                            <span class="nk-menu-text">Exam Date & Admit</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Job Apply</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('candidate.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-list-thumb"></em></span>
                                    <span class="nk-menu-text">Applied Candidates</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('transaction') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-list-check"></em></span>
                                    <span class="nk-menu-text">Transactions</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
