<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ URL::to('assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item">
                    <a href="{{ route('home') }}" class='sidebar-link'>
                        <i class="bi bi-house-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <div class="card-body">
                        <div class="badges">
                            @if (Auth::user()->role_name=='Admin')
                            <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                            <hr>
                            <span>Role Name:</span>
                            <span class="badge bg-success">Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Super Admin')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-info">Super Admin</span>
                            @endif
                            @if (Auth::user()->role_name=='Normal User')
                                <span>Name: <span class="fw-bolder">{{ Auth::user()->name }}</span></span>
                                <hr>
                                <span>Role Name:</span>
                                <span class="badge bg-warning">User Normal</span>
                            @endif
                        </div>
                    </div>
                </li>
                <li class="sidebar-item">
                    <a href="{{ route('change/password') }}" class='sidebar-link'>
                        <i class="bi bi-shield-lock"></i>
                        <span>เปลี่ยนรหัสผ่าน</span>
                    </a>
                </li>

                @if (Auth::user()->role_name=='Admin')
                    <li class="sidebar-title">เพจ &amp; คอนโทรลเลอร์</li>
                    <li class="sidebar-item  has-sub ">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>การบำรุงรักษา</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="{{ route('userManagement') }}">การควบคุมผู้ใช้</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/log') }}">บันทึกกิจกรรมของผู้ใช้</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('register') }}">ลงทะเบียนผู้ใช้</a>
                            </li>
                            <li class="submenu-item">
                            <a href="/income2page">รายรับ-จ่าย</a>
                            </li>
                            <!-- <li class="submenu-item">
                                <a href="{{ route('activity/login/logout') }}">บันทึกกิจกรรม</a>
                            </li> -->

                        </ul>
                    </li>
                @endif

                @if (Auth::user()->role_name=='Admin')
                    <li class="sidebar-title">จัดการ &amp; ระบบ </li>
                    <li class="sidebar-item  has-sub active">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>รายรับ-จ่าย</span>
                        </a>
                        <ul class="submenu active">
                            <li class="submenu-item">
                                <a href="/posts">ใบเสร็จรับเงิน</a>
                            </li>

                            <li class="submenu-item active">
                            <a href="/income2page">รายรับ-จ่าย</a>
                            </li>
                            <!-- <li class="submenu-item">
                                <a href="{{ route('register') }}">ลงทะเบียนผู้ใช้</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/login/logout') }}">บันทึกกิจกรรม</a>
                            </li> -->
                        </ul>
                    </li>
                @endif

                @if (Auth::user()->role_name=='Super Admin')
                    <li class="sidebar-title">จัดการ &amp; ระบบ </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>รายรับ-จ่าย</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="/posts">ใบเสร็จรับเงิน</a>
                            </li>

                            <li class="submenu-item">
                            <a href="/income2page">รายรับ-จ่าย</a>
                            </li>
                            <!-- <li class="submenu-item">
                                <a href="{{ route('register') }}">ลงทะเบียนผู้ใช้</a>
                            </li>
                            <li class="submenu-item">
                                <a href="{{ route('activity/login/logout') }}">บันทึกกิจกรรม</a>
                            </li> -->
                        </ul>
                    </li>
                @endif

                <li class="sidebar-title">ตาราง &amp; แบบฟอร์ม</li>
                <!-- <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-file-earmark-medical-fill"></i>
                        <span>Form Elements</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item active">
                            <a href="{{ route('form/staff/new') }}">Staff Input</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-grid-1x2-fill"></i>
                        <span>View Record</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="{{ route('form/view/detail') }}">View Detail</a>
                        </li>
                    </ul> -->
                    <li class="sidebar-item">
                        <a href="{{ route('logout') }}" class='sidebar-link'>
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
