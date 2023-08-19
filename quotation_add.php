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
                                        <label class="form-label">訂單編號</label>
                                        <input type="text" class="form-control" placeholder="請輸入" value="ADF236554" required>
                                        <div class="invalid-feedback">
                                            必填
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">聯絡人</label>
                                        <input type="text" class="form-control" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            必填
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">公司名稱</label>
                                        <input type="text" class="form-control" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            必填
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">聯絡傳真</label>
                                        <input type="text" class="form-control" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            必填
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">聯絡電話</label>
                                        <input type="text" class="form-control" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            必填
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">統一編號</label>
                                        <input type="text" class="form-control" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            必填
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">施工地址</label>
                                        <input type="text" class="form-control" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            必填
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">施工地址</label>
                                        <input type="date" class="form-control" placeholder="請輸入" required>
                                        <div class="invalid-feedback">
                                            必填
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
                            <ul class="upload-ul clearfix">
                                <li class="upload-pick">
                                    <div class="webuploader-container clearfix" id="goodsUpload"></div>
                                </li>
                            </ul>

                            <div class="pb-4 mb-4 border-bottom"></div>

                            <div class="mb-2">
                                注意事項
                            </div>
                            <div id="ckeditor-classic"><p>This is some sample content.</p></div>

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

    </div>
    <!-- end main content-->

<?php require_once("footer.php");?>

<script src="https://s1.pstatp.com/cdn/expire-1-M/jquery/1.10.2/jquery.min.js"></script>
<script src="assets/libs/diyUpload/webuploader.min.js"></script>
<script src="assets/libs/diyUpload/diyUpload.js"></script>

<script>
    $(function(){
        //上传图片
        var $tgaUpload = $('#goodsUpload').diyUpload({
            url:'/uploadFilePath',
            success:function( data ) { },
            error:function( err ) { },
            buttonText : '',
            accept: {
                title: "Images",
                extensions: 'gif,jpg,jpeg,bmp,png'
            },
            thumb:{
                width:120,
                height:90,
                quality:100,
                allowMagnify:true,
                crop:true,
                type:"image/jpeg"
            }
        });
    });
</script>

<!-- ckeditor -->
<script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<!-- ckeditor init js -->
<script src="assets/js/pages/form-editor.init.js"></script>
