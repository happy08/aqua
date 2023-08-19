<?php require_once("header.php");?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- banner -->
                <div class="banner banner-home text-white">
                    <h1 class="mb-2 text-white">Hello 吳柏毅 !</h1>
                    <div class="font-size-20 text-white">歡迎您登入此系統</div>
                </div>
                <!-- end banner -->

                <!-- card -->
                <div class="card mb-4 shadow-lg rounded-4 card-h-100" style="margin-top: -100px">
                    <!-- card body -->
                    <div class="card-body mt-3">
                        <div class="d-flex justify-content-between mb-4">
                            <h3>
                                我的工單
                            </h3>
                            <form class="d-flex">
                                <div class="row g-3 flex-grow-1 me-2">
                                    <div class="col">
                                        <select class="form-select">
                                            <option selected>選擇專案類型</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="icon font_family icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <table class="table table-hover border-top">
                            <thead>
                                <tr>
                                    <th scope="col">編號</th>
                                    <th scope="col">訂單編號</th>
                                    <th scope="col">狀態</th>
                                    <th scope="col">建立日期</th>
                                    <th scope="col">編輯</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>DE-012459534</td>
                                    <td><span class="text-primary">代處理</span></td>
                                    <td>2023-07-26</td>
                                    <td>
                                        <a href="#"><i class="icon font_family icon-pencil-square text-success font-size-20 me-2"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>DE-012459534</td>
                                    <td><span class="text-danger">代處理</span></td>
                                    <td>2023-07-26</td>
                                    <td>
                                        <a href="#"><i class="icon font_family icon-pencil-square text-success font-size-20 me-2"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>DE-012459534</td>
                                    <td><span class="text-black-50">代處理</span></td>
                                    <td>2023-07-26</td>
                                    <td>
                                        <a href="#"><i class="icon font_family icon-pencil-square text-success font-size-20 me-2"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- end card body -->
                </div><!-- end card -->

                <!-- pagination -->
                <nav class="d-flex justify-content-end">
                    <ul class="pagination shadow-lg">
                        <li class="page-item disabled">
                            <a class="page-link">上頁</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">下頁</a>
                        </li>
                    </ul>
                </nav>
                <!-- End pagination -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#!" class="text-dark me-4">隱私權政策</a>
                        <a href="#!" class="text-dark">水藝空間官方網站</a>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            © 2023 <a href="#!" class="text-dark">AQUA</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->
        
<?php require_once("footer.php");?>