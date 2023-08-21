<?php require_once("header.php");?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid pt-4">
                <div class="row">
                    <!-- table -->
                    <div class="col-6">
                        <div class="card shadow-lg rounded-4 card-h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h3>table</h3>
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
                                    </tbody>
                                </table>
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
                        </div>
                    </div>

                    <!-- Form -->
                    <div class="col-6">
                        <div class="card shadow-lg rounded-4 card-h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h3>Form</h3>
                                </div>
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">First name</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input">
                                    </div>

                                    <div class="row">                                                            
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-email-input">Email</label>
                                                <input type="email" class="form-control" id="formrow-email-input">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="formrow-password-input">Password</label>
                                                <input type="password" class="form-control" id="formrow-password-input">
                                            </div>
                                        </div>
                                    </div>
                                     
                                    <div class="d-flex mb-3">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="formRadios"
                                                id="formRadios1" checked>
                                            <label class="form-check-label" for="formRadios1">
                                                Form Radio
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="formRadios"
                                                id="formRadios2">
                                            <label class="form-check-label" for="formRadios2">
                                                Form Radio checked
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check form-switch mb-3" dir="ltr">
                                        <input type="checkbox" class="form-check-input" id="customSwitchsizesm" checked>
                                        <label class="form-check-label" for="customSwitchsizesm">Small Size Switch</label>
                                    </div>

                                    <input type="checkbox" id="switch1" switch="none" checked />
                                    <label for="switch1" data-on-label="On" data-off-label="Off"></label>

                                    <input type="checkbox" id="switch3" switch="bool" checked />
                                    <label for="switch3" data-on-label="Yes" data-off-label="No"></label>

                                    <div class="form-group">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="formrow-customCheck">
                                            <label class="form-check-label" for="formrow-customCheck">Check me out</label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </form>                      
                            </div>
                        </div>
                    </div>

                    <!-- Breadcrumbs -->
                    <div class="col-6">
                        <div class="card shadow-lg rounded-4 card-h-100">
                            <div class="card-body bg-primary">
                                <div class="d-flex justify-content-between mb-2">
                                    <h3>Breadcrumbs</h3>
                                </div>
                                <ol class="breadcrumb mb-3">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">首頁</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">報價管理</a></li>
                                    <li class="breadcrumb-item active">新增報價單</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <!-- modal -->
                    <div class="col-6">
                        <div class="card shadow-lg rounded-4 card-h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h3>modal</h3>
                                </div>
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal">Standard modal</button>
                                <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">Default Modal Heading</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Default
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

                                <!-- Tooltip -->
                                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                    Tooltip on top
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Icons -->
                    <div class="col-6">
                        <div class="card shadow-lg rounded-4 card-h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h3>Icons</h3>
                                </div>
                                <a href="/assets/iconfont/demo_index.html" target="_blank">Icons</a>
                            </div>
                        </div>
                    </div>

                    <!-- Alerts -->
                    <div class="col-6">
                        <div class="card shadow-lg rounded-4 card-h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h3>Alerts</h3>
                                </div>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="icon font_family icon-check-circle me-2"></i>
                                    A simple success alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    A simple danger alert—check it out!
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    A simple warning alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
                                    A simple info alert—check it out!
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdowns -->
                    <div class="col-6">
                        <div class="card shadow-lg rounded-4 card-h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h3>Dropdowns</h3>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Primary <i class="mdi mdi-chevron-down"></i></button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                    </div>
                                </div><!-- /btn-group -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Secondary <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Success <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Warning <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Danger <i class="mdi mdi-chevron-down"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                        </div>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="col-6">
                        <div class="card shadow-lg rounded-4 card-h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <h3>Button</h3>
                                </div>
                                <div class="d-flex flex-wrap gap-3">
                                    <a href="quotation_add.php" class="btn btn-primary waves-effect waves-light flex-shrink-0">
                                        <i class="icon font_family icon-plus-square me-2"></i> 新增報價單
                                    </a>
                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light">
                                        <i class="icon font_family icon-capslock-fill me-2"></i> 產出
                                    </button>
                                    <button type="submit" class="btn btn-outline-success waves-effect waves-light">
                                        <i class="icon font_family icon-folder-fill me-2"></i> 儲存
                                    </button>
                                    <button type="button" class="btn btn-outline-danger waves-effect waves-light">
                                        <i class="icon font_family icon-trash3-fill me-2"></i> 刪除
                                    </button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light" disabled>
                                        <i class="icon font_family icon-capslock-fill me-2"></i> 產出
                                    </button>
                                    <button type="button" class="btn btn-success waves-effect waves-light">
                                        <i class="icon font_family icon-folder-fill me-2"></i> 儲存
                                    </button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light">
                                        <i class="icon font_family icon-trash3-fill me-2"></i> 刪除
                                    </button>
                                    <button type="button" class="btn btn-warning waves-effect waves-light">
                                        <i class="icon font_family icon-trash3-fill me-2"></i> 警告
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!--  End row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->

<?php require_once("footer.php");?>