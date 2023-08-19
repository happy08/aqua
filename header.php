<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>水藝空間官方網站</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/iconfont/iconfont.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/logo-100.png" alt="" height="32">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-100.png" alt="" height="32">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 header-item" id="vertical-menu-btn">
                        <i class="icon font_family icon-menu text-black-50" style="font-size: 42px;"></i>
                    </button>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="search" class="icon-lg"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Search Result">

                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="d-inline-block">
                        <button type="button" class="btn header-item noti-icon position-relative">
                            <i class="icon font_family icon-bell me-2"></i>
                            <span class="badge bg-danger rounded-pill">5</span>
                        </button>
                    </div>

                    <div class="d-inline-block">
                        <button type="button" class="btn header-item">
                            <img class="rounded-circle header-profile-user" src="assets/images/avatar.png"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">吳柏毅</span>
                        </button>
                        <button onclick="window.location.href='login.html'" type="button" class="btn btn-outline-info waves-effect waves-light">
                            <i class="icon font_family icon-plus-square me-2"></i>
                            登出
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu">頁面</li>
                        <li>
                            <a href="index.php">
                                <i class="icon font_family icon-house-door-1 me-2"></i>
                                <span>首頁</span>
                            </a>
                        </li>
                        <li>
                            <a href="quotation.php">
                                <i class="icon font_family icon-piggy-bank me-2"></i>
                                <span>報價管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="work_order.php">
                                <i class="icon font_family icon-piggy-bank me-2"></i>
                                <span>我的工單</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon font_family icon-layout-text-sidebar-reverse me-2"></i>
                                <span>合約管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon font_family icon-inbox me-2"></i>
                                <span>採購管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon font_family icon-displayport me-2"></i>
                                <span>件料管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon font_family icon-person me-2"></i>
                                <span>派工管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon font_family icon-file-earmark me-2"></i>
                                <span>專案管理</span>
                            </a>
                        </li>
                        <li class="menu-title" data-key="t-menu">系統</li>
                        <li>
                            <a href="#">
                                <i class="icon font_family icon-person-check me-2"></i>
                                <span>權限管理</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon font_family icon-gear me-2"></i>
                                <span>系統設定</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon font_family icon-info-circle me-2"></i>
                                <span>其他問題</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

