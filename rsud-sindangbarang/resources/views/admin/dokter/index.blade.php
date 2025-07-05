@extends('admin.layouts.main')

@section('content') 
    <div class="row">
        <div class="col-lg-12">
            <div class="card stretch stretch-full">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover" id="paymentList">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Spesifikasi</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="single-item">
                                    <td>
                                        <div class="item-checkbox ms-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox" id="checkBox_2">
                                                <label class="custom-control-label" for="checkBox_2"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="invoice-view.html" class="fw-bold">#987456</a></td>
                                    <td>
                                        <a href="javascript:void(0)" class="hstack gap-3">
                                            <div class="avatar-image avatar-md bg-warning text-white">N</div>
                                            <div>
                                                <span class="text-truncate-1-line">Nancy Elliot</span>
                                                <small class="fs-12 fw-normal text-muted">nancy.elliot@outlook.com</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="fw-bold text-dark">$120.50 USD</td>
                                    <td>2023-05-20, 12:23PM</td>
                                    <td><a href="javascript:void(0);">#SDEG4589SE1E</a></td>
                                    <td>
                                        <div class="badge bg-soft-warning text-warning">Unpaid</div>
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="invoice-view.html" class="avatar-text avatar-md">
                                                <i class="feather feather-eye"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                    <i class="feather feather-more-horizontal"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-edit-3 me-3"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                            <i class="feather feather-printer me-3"></i>
                                                            <span>Print</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-clock me-3"></i>
                                                            <span>Remind</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-archive me-3"></i>
                                                            <span>Archive</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-alert-octagon me-3"></i>
                                                            <span>Report Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-trash-2 me-3"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="single-item">
                                    <td>
                                        <div class="item-checkbox ms-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox" id="checkBox_3">
                                                <label class="custom-control-label" for="checkBox_3"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="invoice-view.html" class="fw-bold">#741258</a></td>
                                    <td>
                                        <a href="javascript:void(0)" class="hstack gap-3">
                                            <div class="avatar-image avatar-md">
                                                <img src="./../assets/images/avatar/2.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <span class="text-truncate-1-line">Green Cute</span>
                                                <small class="fs-12 fw-normal text-muted">green.cute@outlook.com</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="fw-bold text-dark">$300.00 USD</td>
                                    <td>2023-01-02, 10:36AM</td>
                                    <td><a href="javascript:void(0);">#SDEG4589SE1E</a></td>
                                    <td>
                                        <div class="badge bg-soft-success text-success">Complted</div>
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="invoice-view.html" class="avatar-text avatar-md">
                                                <i class="feather feather-eye"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                    <i class="feather feather-more-horizontal"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-edit-3 me-3"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                            <i class="feather feather-printer me-3"></i>
                                                            <span>Print</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-clock me-3"></i>
                                                            <span>Remind</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-archive me-3"></i>
                                                            <span>Archive</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-alert-octagon me-3"></i>
                                                            <span>Report Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-trash-2 me-3"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="single-item">
                                    <td>
                                        <div class="item-checkbox ms-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox" id="checkBox_4">
                                                <label class="custom-control-label" for="checkBox_4"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="invoice-view.html" class="fw-bold">#321456</a></td>
                                    <td>
                                        <a href="javascript:void(0)" class="hstack gap-3">
                                            <div class="avatar-image avatar-md bg-teal text-white">H</div>
                                            <div>
                                                <span class="text-truncate-1-line">Henry Leach</span>
                                                <small class="fs-12 fw-normal text-muted">henry.leach@outlook.com</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="fw-bold text-dark">$249.99 USD</td>
                                    <td>2023-04-25, 04:22PM</td>
                                    <td><a href="javascript:void(0);">#SDEG4589SE1E</a></td>
                                    <td>
                                        <div class="badge bg-soft-success text-success">Complted</div>
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="invoice-view.html" class="avatar-text avatar-md">
                                                <i class="feather feather-eye"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                    <i class="feather feather-more-horizontal"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-edit-3 me-3"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                            <i class="feather feather-printer me-3"></i>
                                                            <span>Print</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-clock me-3"></i>
                                                            <span>Remind</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-archive me-3"></i>
                                                            <span>Archive</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-alert-octagon me-3"></i>
                                                            <span>Report Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-trash-2 me-3"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="single-item">
                                    <td>
                                        <div class="item-checkbox ms-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox" id="checkBox_5">
                                                <label class="custom-control-label" for="checkBox_5"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="invoice-view.html" class="fw-bold">#357895</a></td>
                                    <td>
                                        <a href="javascript:void(0)" class="hstack gap-3">
                                            <div class="avatar-image avatar-md">
                                                <img src="./../assets/images/avatar/3.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <span class="text-truncate-1-line">Marianne Audrey</span>
                                                <small class="fs-12 fw-normal text-muted">marine.adrey@outlook.com</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="fw-bold text-dark">$150.00 USD</td>
                                    <td>2023-02-15, 05:23PM</td>
                                    <td><a href="javascript:void(0);">#SDEG4589SE1E</a></td>
                                    <td>
                                        <div class="badge bg-soft-success text-success">Complted</div>
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="invoice-view.html" class="avatar-text avatar-md">
                                                <i class="feather feather-eye"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                    <i class="feather feather-more-horizontal"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-edit-3 me-3"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                            <i class="feather feather-printer me-3"></i>
                                                            <span>Print</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-clock me-3"></i>
                                                            <span>Remind</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-archive me-3"></i>
                                                            <span>Archive</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-alert-octagon me-3"></i>
                                                            <span>Report Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-trash-2 me-3"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="single-item">
                                    <td>
                                        <div class="item-checkbox ms-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox" id="checkBox_6">
                                                <label class="custom-control-label" for="checkBox_6"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="invoice-view.html" class="fw-bold">#321456</a></td>
                                    <td>
                                        <a href="javascript:void(0)" class="hstack gap-3">
                                            <div class="avatar-image avatar-md">
                                                <img src="./../assets/images/avatar/1.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <span class="text-truncate-1-line">Alexandra Della</span>
                                                <small class="fs-12 fw-normal text-muted">alex.della@outlook.com</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="fw-bold text-dark">$249.99 USD</td>
                                    <td>2023-04-25, 11:43AM</td>
                                    <td><a href="javascript:void(0);">#SDEG4589SE1E</a></td>
                                    <td>
                                        <div class="badge bg-soft-success text-success">Complted</div>
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="invoice-view.html" class="avatar-text avatar-md">
                                                <i class="feather feather-eye"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                    <i class="feather feather-more-horizontal"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-edit-3 me-3"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                            <i class="feather feather-printer me-3"></i>
                                                            <span>Print</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-clock me-3"></i>
                                                            <span>Remind</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-archive me-3"></i>
                                                            <span>Archive</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-alert-octagon me-3"></i>
                                                            <span>Report Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-trash-2 me-3"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="single-item">
                                    <td>
                                        <div class="item-checkbox ms-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox" id="checkBox_7">
                                                <label class="custom-control-label" for="checkBox_7"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="invoice-view.html" class="fw-bold">#987456</a></td>
                                    <td>
                                        <a href="javascript:void(0)" class="hstack gap-3">
                                            <div class="avatar-image avatar-md bg-warning text-white">N</div>
                                            <div>
                                                <span class="text-truncate-1-line">Nancy Elliot</span>
                                                <small class="fs-12 fw-normal text-muted">nancy.elliot@outlook.com</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="fw-bold text-dark">$120.50 USD</td>
                                    <td>2023-05-20, 03:46PM</td>
                                    <td><a href="javascript:void(0);">#SDEG4589SE1E</a></td>
                                    <td>
                                        <div class="badge bg-soft-warning text-warning">warning</div>
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="invoice-view.html" class="avatar-text avatar-md">
                                                <i class="feather feather-eye"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                    <i class="feather feather-more-horizontal"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-edit-3 me-3"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                            <i class="feather feather-printer me-3"></i>
                                                            <span>Print</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-clock me-3"></i>
                                                            <span>Remind</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-archive me-3"></i>
                                                            <span>Archive</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-alert-octagon me-3"></i>
                                                            <span>Report Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-trash-2 me-3"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="single-item">
                                    <td>
                                        <div class="item-checkbox ms-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox" id="checkBox_8">
                                                <label class="custom-control-label" for="checkBox_8"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="invoice-view.html" class="fw-bold">#741258</a></td>
                                    <td>
                                        <a href="javascript:void(0)" class="hstack gap-3">
                                            <div class="avatar-image avatar-md">
                                                <img src="./../assets/images/avatar/2.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <span class="text-truncate-1-line">Green Cute</span>
                                                <small class="fs-12 fw-normal text-muted">green.cute@outlook.com</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="fw-bold text-dark">$300.00 USD</td>
                                    <td>2023-01-02, 02:35PM</td>
                                    <td><a href="javascript:void(0);">#SDEG4589SE1E</a></td>
                                    <td>
                                        <div class="badge bg-soft-success text-success">Complted</div>
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="invoice-view.html" class="avatar-text avatar-md">
                                                <i class="feather feather-eye"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                    <i class="feather feather-more-horizontal"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-edit-3 me-3"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                            <i class="feather feather-printer me-3"></i>
                                                            <span>Print</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-clock me-3"></i>
                                                            <span>Remind</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-archive me-3"></i>
                                                            <span>Archive</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-alert-octagon me-3"></i>
                                                            <span>Report Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-trash-2 me-3"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="single-item">
                                    <td>
                                        <div class="item-checkbox ms-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox" id="checkBox_9">
                                                <label class="custom-control-label" for="checkBox_9"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="invoice-view.html" class="fw-bold">#321456</a></td>
                                    <td>
                                        <a href="javascript:void(0)" class="hstack gap-3">
                                            <div class="avatar-image avatar-md bg-teal text-white">H</div>
                                            <div>
                                                <span class="text-truncate-1-line">Henry Leach</span>
                                                <small class="fs-12 fw-normal text-muted">henry.leach@outlook.com</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="fw-bold text-dark">$249.99 USD</td>
                                    <td>2023-04-25,06:35PM</td>
                                    <td><a href="javascript:void(0);">#SDEG4589SE1E</a></td>
                                    <td>
                                        <div class="badge bg-soft-danger text-danger">Declined</div>
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="invoice-view.html" class="avatar-text avatar-md">
                                                <i class="feather feather-eye"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                    <i class="feather feather-more-horizontal"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-edit-3 me-3"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                            <i class="feather feather-printer me-3"></i>
                                                            <span>Print</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-clock me-3"></i>
                                                            <span>Remind</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-archive me-3"></i>
                                                            <span>Archive</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-alert-octagon me-3"></i>
                                                            <span>Report Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-trash-2 me-3"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="single-item">
                                    <td>
                                        <div class="item-checkbox ms-1">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbox" id="checkBox_10">
                                                <label class="custom-control-label" for="checkBox_10"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="invoice-view.html" class="fw-bold">#357895</a></td>
                                    <td>
                                        <a href="javascript:void(0)" class="hstack gap-3">
                                            <div class="avatar-image avatar-md">
                                                <img src="./../assets/images/avatar/3.png" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <span class="text-truncate-1-line">Marianne Audrey</span>
                                                <small class="fs-12 fw-normal text-muted">marianne.audrey@outlook.com</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="fw-bold text-dark">$150.00 USD</td>
                                    <td>2023-02-15, 08:36PM</td>
                                    <td><a href="javascript:void(0);">#SDEG4589SE1E</a></td>
                                    <td>
                                        <div class="badge bg-soft-success text-success">Complted</div>
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 justify-content-end">
                                            <a href="invoice-view.html" class="avatar-text avatar-md">
                                                <i class="feather feather-eye"></i>
                                            </a>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                    <i class="feather feather-more-horizontal"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-edit-3 me-3"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                            <i class="feather feather-printer me-3"></i>
                                                            <span>Print</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-clock me-3"></i>
                                                            <span>Remind</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-archive me-3"></i>
                                                            <span>Archive</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-alert-octagon me-3"></i>
                                                            <span>Report Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0)">
                                                            <i class="feather feather-trash-2 me-3"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection