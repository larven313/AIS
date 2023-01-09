<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Admin)-->
                <div class="sidenav-menu-heading">Admin</div>
                <!-- Sidenav (Dashboard)-->
                <a class="nav-link" href="/">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboards
                </a>
                <!-- Sidenav Heading (Items)-->
                <div class="sidenav-menu-heading">Items</div>
                <!-- Sidenav Accordion (Data)-->
                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Data
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapseData" data-bs-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavDataMenu">
                        <!-- Nested Sidenav Accordion (Data)-->
                        <a class="nav-link" href="/asdos">
                            Asdos
                        </a>
                        <a class="nav-link" href="{{ route('mahasiswa') }}">
                            Mahasiswa
                        </a>
                    </nav>
                </div>

                <!-- Sidenav Heading (Users)-->
                <div class="sidenav-menu-heading">Users</div>
                <!-- Sidenav Users (Layout)-->
                <a class="nav-link" href="/users">
                    <div class="nav-link-icon"><i data-feather="users"></i></div>
                    Users
                </a>
                <!-- Sidenav Heading (Profile)-->
                <div class="sidenav-menu-heading">Setting</div>
                <!-- Sidenav Profile (Layout)-->
                <a class="nav-link" href="/profile">
                    <div class="nav-link-icon"><i data-feather="user"></i></div>
                    Profile
                </a>
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Nama User</div>
            </div>
        </div>
    </nav>
</div>