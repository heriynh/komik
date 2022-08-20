<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
			
			<?php if (in_groups('admin')): ?>
			<!-- Heading -->
            <div class="sidebar-heading">
                ADMIN
            </div>
            <!-- List user -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin'); ?>">
                    <i class="fas fa-users"></i>
                    <span>LIST USER</span></a>
            </li>
			<!-- end List user -->
			<?php endif; ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                USER
            </div>

           <!-- my profile -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user'); ?>">
                    <i class="fas fa-user"></i>
                    <span>MY PROFILE</span></a>
            </li>
            <!-- end my profile -->
            	
			<!-- Divider -->
            <hr class="sidebar-divider my-0">
            	<!--blogout -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>LOGOUT</span></a>
            </li>
            <!-- end logout -->
            	
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
