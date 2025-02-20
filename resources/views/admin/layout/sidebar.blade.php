<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li>
                    <a href="javascript:void(0);" class="d-flex align-items-center border bg-white rounded p-2 mb-4">
                        <img src="{{ Avatar::create(auth()->user()->name)->toBase64() }}"
                            class="avatar avatar-md img-fluid rounded" alt="Profile">
                        <span class="text-dark ms-2 fw-normal">{{ Auth::user()->name }}</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <h6 class="submenu-hdr"><span>Main</span></h6>
                    <ul>
                        <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                            <a href="{{ url('admin/dashboard') }}"><i
                                    class="ti ti-layout-dashboard"></i><span>Dashboard</span></a>
                        </li>
                    </ul>
                </li>

                <li>
                    <h6 class="submenu-hdr"><span>Universities</span></h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="ti ti-school"></i><span>University</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="">All Universities</a></li>

                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="ti ti-user-bolt"></i><span>Courses</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="">All Courses</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>




                <li>
                    <h6 class="submenu-hdr"><span>Support</span></h6>
                    <ul>
                        <li><a href=""><i class="ti ti-message"></i><span>Contact
                                    Messages</span></a></li>
                        <li><a href=""><i class="ti ti-ticket"></i><span>Tickets</span></a></li>
                    </ul>
                </li>

                <li>
                    <h6 class="submenu-hdr"><span>Settings</span></h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->is('admin/settings*') ? 'subdrop active' : '' }} ">
                                <i class="ti ti-shield-cog"></i><span>General Settings</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="{{ request()->is('admin/settings/profile') ? 'active' : '' }}"><a
                                        href="{{ url('admin/settings/profile') }}"><span>Profile
                                            Settings</span></a></li>

                                <li class="{{ request()->is('admin/settings/company') ? 'active' : '' }}"><a
                                        href="{{ url('admin/settings/company') }}"><span>Company
                                            Settings</span></a></li>



                            </ul>
                        </li>


                    </ul>
                </li>



            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
