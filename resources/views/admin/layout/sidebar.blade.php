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
                        <li class="submenu">
                            <a href="javascript:void(0);" class="subdrop active"><i
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
                                <li><a href="student-grid.html">All Students</a></li>
                                <li><a href="students.html">Student List</a></li>
                                <li><a href="student-details.html">Student Details</a></li>
                                <li><a href="student-promotion.html">Student Promotion</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="ti ti-user-bolt"></i><span>Courses</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="parent-grid.html">All Parents</a></li>
                                <li><a href="parents.html">Parent List</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>




                <li>
                    <h6 class="submenu-hdr"><span>Support</span></h6>
                    <ul>
                        <li><a href="contact-messages.html"><i class="ti ti-message"></i><span>Contact
                                    Messages</span></a></li>
                        <li><a href="tickets.html"><i class="ti ti-ticket"></i><span>Tickets</span></a></li>
                    </ul>
                </li>

                <li>
                    <h6 class="submenu-hdr"><span>Settings</span></h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-shield-cog"></i><span>General Settings</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="profile-settings.html">Profile Settings</a></li>
                                <li><a href="security-settings.html">Security Settings</a></li>
                                <li><a href="notifications-settings.html">Notifications Settings</a></li>
                                <li><a href="connected-apps.html">Connected Apps</a></li>
                            </ul>
                        </li>

                        <!-- Till -->
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <i class="ti ti-device-laptop"></i><span>Website Settings</span><span
                                    class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="company-settings.html">Company Settings</a></li>
                                <li><a href="localization.html">Localization</a></li>
                                <li><a href="prefixes.html">Prefixes</a></li>
                                <li><a href="preferences.html">Preferences</a></li>
                                <li><a href="social-authentication.html">Social Authentication</a></li>
                                <li><a href="language.html">Language</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>



            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
