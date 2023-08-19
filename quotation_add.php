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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">報價管理</a></li>
                        <li class="breadcrumb-item active">新增報價單</li>
                    </ol>
                    <h4 class="text-white font-weight-500">新增報價單</h4>
                </div>
                <!-- end banner -->

                <!-- card -->
                <div class="card mb-4 shadow-lg rounded-4 card-h-100">
                    <form class="needs-validation" novalidate>
                        <!-- card body -->
                        <div class="card-body mt-3">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary me-3 waves-effect waves-light">
                                    <i class="icon font_family icon-capslock-fill me-2"></i> 產出
                                </button>
                                <button type="submit" class="btn btn-success me-3 waves-effect waves-light">
                                    <i class="icon font_family icon-folder-fill me-2"></i> 儲存
                                </button>
                                <button type="button" class="btn btn-danger waves-effect waves-light">
                                    <i class="icon font_family icon-trash3-fill me-2"></i> 刪除
                                </button>
                            </div>

                            <div class="pb-4 mb-4 border-bottom"></div>

                            <div class="row gx-5 w-75">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom01">訂單編號</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="請輸入" value="ADF236554" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">聯絡人</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="請輸入" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom03">公司名稱</label>
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom04">聯絡傳真</label>
                                        <input type="text" class="form-control" id="validationCustom04" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">聯絡電話</label>
                                        <input type="text" class="form-control" id="validationCustom05" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">統一編號</label>
                                        <input type="text" class="form-control" id="validationCustom05" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom05">施工地址</label>
                                        <input type="text" class="form-control" id="validationCustom05" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="pb-4 mb-4 border-bottom"></div>

                            <div class="d-flex justify-content-between mb-4">
                                報價品項
                                <a href="quotation_add.php" class="btn btn-outline-primary waves-effect waves-light flex-shrink-0">
                                    <i class="icon font_family icon-plus-square me-2"></i> 新增品項
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

                            <div class="mb-2">
                                圖片上傳
                            </div>
                            <div class="dropzone">
                                <div class="dz-preview dz-processing dz-error dz-complete dz-image-preview"> 
                                    <div class="dz-image">
                                        <img src="assets/images/banner-1.jpg" alt="">
                                    </div>
                                    <div class="dz-details">
                                        23232323
                                    </div> 
                                    <div class="dz-progress">
                                        <span class="dz-upload" data-dz-uploadprogress=""></span>
                                    </div> 
                                    <div class="dz-error-message">
                                        <span data-dz-errormessage="">Server responded with 0 code.</span>
                                    </div>
                                    <div class="dz-success-mark">
                                        <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>Check</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <path d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475" fill="#FFFFFF"></path> </g> </svg> 
                                    </div> 
                                    <div class="dz-error-mark"> 
                                        <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>Error</title> <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g stroke="#747474" stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475"> <path d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"></path> </g> </g> </svg>
                                    </div> 
                                </div>
                            </div>

                            <div class="pb-4 mb-4 border-bottom"></div>

                            <div class="mb-2">
                                注意事項
                            </div>
                            <div id="ckeditor-classic"></div>
                        </div><!-- end card body -->
                    </form><!-- end form -->

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

<!-- ckeditor -->
<script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<!-- ckeditor init js -->
<script src="assets/js/pages/form-editor.init.js"></script>
