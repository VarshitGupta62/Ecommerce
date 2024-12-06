<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png">

    <!-- Core Css -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>MatDash Bootstrap Admin</title>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid">
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="side-mini-panel with-vertical">
            <!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
            <div class="iconbar">
                <div>
                    <div class="mini-nav">
                        <div class="brand-logo d-flex align-items-center justify-content-center">
                            <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                                <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-7"></iconify-icon>
                            </a>
                        </div>
                        <ul class="mini-nav-ul" data-simplebar="">

                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <!-- Dashboards -->
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <li class="mini-nav-item" id="mini-1">
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Dashboards">
                                    <iconify-icon icon="solar:layers-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>

                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <!-- Pages -->
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <li class="mini-nav-item" id="mini-3">
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Pages">
                                    <iconify-icon icon="solar:notes-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <!-- Forms  -->
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <li class="mini-nav-item" id="mini-4">
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Forms">
                                    <iconify-icon icon="solar:palette-round-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>

                            <li>
                                <span class="sidebar-divider lg"></span>
                            </li>
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <!-- Tables -->
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <li class="mini-nav-item" id="mini-5">
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Tables">
                                    <iconify-icon icon="solar:tuning-square-2-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <!-- Charts -->
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <li class="mini-nav-item" id="mini-6">
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Charts">
                                    <iconify-icon icon="solar:chart-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <!-- Ui -->
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <li class="mini-nav-item" id="mini-7">
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Ui Components">
                                    <iconify-icon icon="solar:widget-6-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <!-- Components -->
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <li class="mini-nav-item" id="mini-8">
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Components">
                                    <iconify-icon icon="solar:archive-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>

                            <li>
                                <span class="sidebar-divider lg"></span>
                            </li>
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <!-- Auth -->
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <li class="mini-nav-item" id="mini-9">
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Authentication Pages">
                                    <iconify-icon icon="solar:lock-keyhole-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>

                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <!-- Multi level -->
                            <!-- --------------------------------------------------------------------------------------------------------- -->
                            <li class="mini-nav-item" id="mini-10">
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" data-bs-placement="right" data-bs-title="Docs &amp; Other">
                                    <iconify-icon icon="solar:mirror-left-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="sidebarmenu">
                        <div class="brand-logo d-flex align-items-center nav-logo">
                            <a href="index.html" class="text-nowrap logo-img">
                                <img src="assets/images/logos/logo.svg" alt="Logo">
                            </a>

                        </div>
                        <!-- ---------------------------------- -->
                        <!-- Dashboard -->
                        <!-- ---------------------------------- -->
                        <nav class="sidebar-nav" id="menu-right-mini-1" data-simplebar="">
                            <ul class="sidebar-menu" id="sidebarnav">
                                <!-- ---------------------------------- -->
                                <!-- Home -->
                                <!-- ---------------------------------- -->
                                <li class="nav-small-cap">
                                    <span class="hide-menu">Dashboards</span>
                                </li>
                                <!-- ---------------------------------- -->
                                <!-- Dashboard -->
                                <!-- ---------------------------------- -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="" id="get-url" aria-expanded="false">
                                        <iconify-icon icon="solar:atom-line-duotone"></iconify-icon>
                                        <span class="hide-menu">Dashboard 1</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="index2.html" aria-expanded="false">
                                        <iconify-icon icon="solar:chart-line-duotone"></iconify-icon>
                                        <span class="hide-menu">Dashboard 2</span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="index3.html" aria-expanded="false">
                                        <iconify-icon icon="solar:screencast-2-line-duotone"></iconify-icon>
                                        <span class="hide-menu">Dashboard 3</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <!-- ---------------------------------- -->
                        <!-- Pages -->
                        <!-- ---------------------------------- -->


                        <!-- ---------------------------------- -->
                        <!-- Forms -->
                        <!-- ---------------------------------- -->


                        <!-- ---------------------------------- -->
                        <!-- Tables -->
                        <!-- ---------------------------------- -->


                        <!-- ---------------------------------- -->
                        <!-- Charts -->
                        <!-- ---------------------------------- -->


                        <!-- ---------------------------------- -->
                        <!-- Ui Components -->
                        <!-- ---------------------------------- -->


                        <!-- ---------------------------------- -->
                        <!-- Comoponents -->
                        <!-- ---------------------------------- -->


                        <!-- ---------------------------------- -->
                        <!-- Auth Pages -->
                        <!-- ---------------------------------- -->


                        <!-- ---------------------------------- -->
                        <!-- Docs & Other -->
                        <!-- ---------------------------------- -->

                    </div>
                </div>
            </div>
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    <!-- ---------------------------------- -->
                    <!-- Start Vertical Layout Header -->
                    <!-- ---------------------------------- -->
                    <nav class="navbar navbar-expand-lg p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item d-flex d-xl-none">
                                <a class="nav-link nav-icon-hover-bg rounded-circle  sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                                    <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-6"></iconify-icon>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-flex nav-icon-hover-bg rounded-circle">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                                </a>
                            </li>
                            <li class="nav-item d-none d-lg-flex dropdown nav-icon-hover-bg rounded-circle">
                                <div class="hover-dd">
                                    <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                                        <iconify-icon icon="solar:widget-3-line-duotone" class="fs-6"></iconify-icon>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden" aria-labelledby="drop2">
                                        <div class="position-relative">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="p-4 pb-3">

                                                        <div class="row">
                                                             
                                                            <div class="col-md-6">
                                                                <div class="position-relative">
                                                                    <a href="page-user-profile.html" class="d-flex align-items-center pb-9 position-relative">
                                                                        <div class="bg-success-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon icon="solar:user-bold-duotone" class="fs-7 text-success"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">User Profile</h6>
                                                                            <span class="fs-11 d-block text-body-color">learn more information</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                                                                        <div class="bg-primary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon icon="solar:calendar-minimalistic-bold-duotone" class="fs-7 text-primary"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Calendar App</h6>
                                                                            <span class="fs-11 d-block text-body-color">Get dates</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                                                                        <div class="bg-secondary-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon icon="solar:smartphone-2-bold-duotone" class="fs-7 text-secondary"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Contact List Table</h6>
                                                                            <span class="fs-11 d-block text-body-color">Add new contact</span>
                                                                        </div>
                                                                    </a>
                                                                    <a href="app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                                                                        <div class="bg-warning-subtle rounded round-48 me-3 d-flex align-items-center justify-content-center">
                                                                            <iconify-icon icon="solar:notes-bold-duotone" class="fs-7 text-warning"></iconify-icon>
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">Notes Application</h6>
                                                                            <span class="fs-11 d-block text-body-color">To-do and Daily tasks</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 d-none d-lg-flex">
                                                    <img src="assets/images/backgrounds/mega-dd-bg.jpg" alt="mega-dd" class="img-fluid mega-dd-bg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="d-block d-lg-none py-9 py-xl-0">
                            <img src="assets/images/logos/logo.svg" alt="matdash-img">
                        </div>
                        <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <iconify-icon icon="solar:menu-dots-bold-duotone" class="fs-6"></iconify-icon>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                                            <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link moon dark-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)">
                                            <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                                        </a>
                                        <a class="nav-link sun light-layout nav-icon-hover-bg rounded-circle" href="javascript:void(0)" style="display: none">
                                            <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item d-block d-xl-none">
                                        <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>

                                     

                                    

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                            <div class="d-flex align-items-center gap-2 lh-base">
                                                <img src="assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="matdash-img">
                                                <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                            <div class="position-relative px-4 pt-3 pb-2">
                                                <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                                                    <img src="assets/images/profile/user-1.jpg" class="rounded-circle" width="56" height="56" alt="matdash-img">
                                                    <div>
                                                        <h5 class="mb-0 fs-12">David McMichael <span class="text-success fs-11">Pro</span>
                                                        </h5>
                                                        <p class="mb-0 text-dark">
                                                            david@wrappixel.com
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="page-user-profile.html" class="p-2 dropdown-item h6 rounded-1">
                                                        My Profile
                                                    </a>
                                                    <a href="page-pricing.html" class="p-2 dropdown-item h6 rounded-1">
                                                        My Subscription
                                                    </a>
                                                    <a href="app-invoice.html" class="p-2 dropdown-item h6 rounded-1">
                                                        My Invoice <span class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                                                    </a>
                                                    <a href="page-account-settings.html" class="p-2 dropdown-item h6 rounded-1">
                                                        Account Settings
                                                    </a>
                                                    <a href="authentication-login2.html" class="p-2 dropdown-item h6 rounded-1">
                                                        Sign Out
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- ---------------------------------- -->
                    <!-- End Vertical Layout Header -->
                    <!-- ---------------------------------- -->


                </div>
                <div class="app-header with-horizontal">
                    <nav class="navbar navbar-expand-xl container-fluid p-0">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item d-flex d-xl-none">
                                <a class="nav-link sidebartoggler nav-icon-hover-bg rounded-circle" id="sidebarCollapse" href="javascript:void(0)">
                                    <iconify-icon icon="solar:hamburger-menu-line-duotone" class="fs-7"></iconify-icon>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-flex align-items-center">
                                <a href="index.html" class="text-nowrap nav-link">
                                    <img src="assets/images/logos/logo.svg" alt="matdash-img">
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-flex align-items-center nav-icon-hover-bg rounded-circle">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <iconify-icon icon="solar:magnifer-linear" class="fs-6"></iconify-icon>
                                </a>
                            </li>

                        </ul>
                        <div class="d-block d-xl-none">
                            <a href="index.html" class="text-nowrap nav-link">
                                <img src="assets/images/logos/logo.svg" alt="matdash-img">
                            </a>
                        </div>
                        <a class="navbar-toggler nav-icon-hover p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                                <ul class="navbar-nav flex-row mx-auto ms-lg-auto align-items-center justify-content-center">
                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                                            <iconify-icon icon="solar:sort-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav-icon-hover-bg rounded-circle moon dark-layout" href="javascript:void(0)">
                                            <iconify-icon icon="solar:moon-line-duotone" class="moon fs-6"></iconify-icon>
                                        </a>
                                        <a class="nav-link nav-icon-hover-bg rounded-circle sun light-layout" href="javascript:void(0)" style="display: none">
                                            <iconify-icon icon="solar:sun-2-line-duotone" class="sun fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="nav-item d-block d-xl-none">
                                        <a class="nav-link nav-icon-hover-bg rounded-circle" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <iconify-icon icon="solar:magnifer-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>



                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                            <div class="d-flex align-items-center gap-2 lh-base">
                                                <img src="assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="matdash-img">
                                                <iconify-icon icon="solar:alt-arrow-down-bold" class="fs-2"></iconify-icon>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu profile-dropdown dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                                            <div class="position-relative px-4 pt-3 pb-2">
                                                <div class="d-flex align-items-center mb-3 pb-3 border-bottom gap-6">
                                                    <img src="assets/images/profile/user-1.jpg" class="rounded-circle" width="56" height="56" alt="matdash-img">
                                                    <div>
                                                        <h5 class="mb-0 fs-12">David McMichael <span class="text-success fs-11">Pro</span>
                                                        </h5>
                                                        <p class="mb-0 text-dark">
                                                            david@wrappixel.com
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="message-body">
                                                    <a href="page-user-profile.html" class="p-2 dropdown-item h6 rounded-1">
                                                        My Profile
                                                    </a>
                                                    <a href="page-pricing.html" class="p-2 dropdown-item h6 rounded-1">
                                                        My Subscription
                                                    </a>
                                                    <a href="app-invoice.html" class="p-2 dropdown-item h6 rounded-1">
                                                        My Invoice <span class="badge bg-danger-subtle text-danger rounded ms-8">4</span>
                                                    </a>
                                                    <a href="page-account-settings.html" class="p-2 dropdown-item h6 rounded-1">
                                                        Account Settings
                                                    </a>
                                                    <a href="authentication-login2.html" class="p-2 dropdown-item h6 rounded-1">
                                                        Sign Out
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </header>
            <!--  Header End -->

            <aside class="left-sidebar with-horizontal">
                <!-- Sidebar scroll-->
                <div>
                    <!-- Sidebar navigation-->
                    <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
                        <ul id="sidebarnav">
                            <!-- ============================= -->
                            <!-- Home -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Home</span>
                            </li>
                            <!-- =================== -->
                            <!-- Dashboard -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                                    <span>
                                        <iconify-icon icon="solar:layers-line-duotone" class="ti"></iconify-icon>
                                    </span>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="index.html" class="sidebar-link">
                                            <i class="ti ti-aperture"></i>
                                            <span class="hide-menu">Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index2.html" class="sidebar-link">
                                            <i class="ti ti-shopping-cart"></i>
                                            <span class="hide-menu">Dashboard 2</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="index3.html" class="sidebar-link">
                                            <i class="ti ti-atom"></i>
                                            <span class="hide-menu">Dashboard 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>