<?php require_once("header.php");?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- banner -->
                <div class="banner banner-inner">
                    <ol class="breadcrumb mb-3">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">首頁</a></li>
                        <li class="breadcrumb-item active">報價管理</li>
                    </ol>
                    <h4 class="text-white font-weight-500">報價管理</h4>
                </div>
                <!-- end banner -->

                <!-- card -->
                <div class="card mb-4 shadow-lg rounded-4 card-h-100">
                    <!-- card body -->
                    <div class="card-body mt-3">
                        <div class="d-flex justify-content-between mb-4">
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
                            <a href="quotation_add.php" class="btn btn-primary waves-effect waves-light flex-shrink-0">
                                <i class="icon font_family icon-plus-square me-2"></i> 新增報價單
                            </a>
                        </div>
                        <table class="table table-hover border-top">
                            <thead>
                                <tr>
                                    <th scope="col">編號</th>
                                    <th scope="col">專案編號</th>
                                    <th scope="col">專案內容</th>
                                    <th scope="col">建立日期</th>
                                    <th scope="col">編輯</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>DE-012459534</td>
                                    <td>五金配件/玻璃高度200cm/安裝負責施工...</td>
                                    <td>2023-07-26</td>
                                    <td>
                                        <a href="#"><i class="icon font_family icon-pencil-square text-success font-size-20 me-2"></i></a>
                                        <a href="#"><i class="icon font_family icon-trash3-fill text-danger font-size-20"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>DE-012459534</td>
                                    <td>五金配件/玻璃高度200cm/安裝負責施工...</td>
                                    <td>2023-07-26</td>
                                    <td>
                                        <a href="#"><i class="icon font_family icon-pencil-square text-success font-size-20 me-2"></i></a>
                                        <a href="#"><i class="icon font_family icon-trash3-fill text-danger font-size-20"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>DE-012459534</td>
                                    <td>五金配件/玻璃高度200cm/安裝負責施工...</td>
                                    <td>2023-07-26</td>
                                    <td>
                                        <a href="#"><i class="icon font_family icon-pencil-square text-success font-size-20 me-2"></i></a>
                                        <a href="#"><i class="icon font_family icon-trash3-fill text-danger font-size-20"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">01</th>
                                    <td>DE-012459534</td>
                                    <td>五金配件/玻璃高度200cm/安裝負責施工...</td>
                                    <td>2023-07-26</td>
                                    <td>
                                        <a href="#"><i class="icon font_family icon-pencil-square text-success font-size-20 me-2"></i></a>
                                        <a href="#"><i class="icon font_family icon-trash3-fill text-danger font-size-20"></i></a>
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

    </div>
    <!-- end main content-->
        
<?php require_once("footer.php");?>