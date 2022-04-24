@extends('layouts.backend.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                <h3 class="nk-block-title fw-normal">All Job Post</h3>
                                <div class="nk-block-des">
                                    <p>Here is All Job List</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
                                <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid">
                                            <label class="custom-control-label" for="puid"></label>
                                        </div>
                                    </th>
                                    <th class="nk-tb-col tb-col-sm"><span>Name</span></th>
                                    <th class="nk-tb-col"><span>SKU</span></th>
                                    <th class="nk-tb-col"><span>Price</span></th>
                                    <th class="nk-tb-col"><span>Stock</span></th>
                                    <th class="nk-tb-col tb-col-md"><span>Category</span></th>
                                    <th class="nk-tb-col tb-col-md"><em class="tb-asterisk icon ni ni-star-round"></em></th>
                                    <th class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-bar-c"></em><span>Update Stock</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-invest"></em><span>Update Price</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </th>
                                </tr><!-- .nk-tb-item -->
                                </thead>
                                <tbody>
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid1">
                                            <label class="custom-control-label" for="puid1"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/a.png" alt="" class="thumb">
                                                            <span class="title">Pink Fitness Tracker</span>
                                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">UY3749</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">$ 99.49</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">49</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">Fitbit, Tracker</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid2">
                                            <label class="custom-control-label" for="puid2"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/b.png" alt="" class="thumb">
                                                            <span class="title">Purple Smartwatch</span>
                                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">UY3750</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">$ 89.49</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">103</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">Gadgets, Fitbit, Tracker</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid3">
                                            <label class="custom-control-label" for="puid3"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/c.png" alt="" class="thumb">
                                                            <span class="title">Black Mi Band Smartwatch</span>
                                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">UY3751</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">$ 299.49</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">68</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">Smartwatch, Tracker</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#" class="active"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid4">
                                            <label class="custom-control-label" for="puid4"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/d.png" alt="" class="thumb">
                                                            <span class="title">Black Headphones</span>
                                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">UY3752</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">$ 99.49</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">77</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">Headphone, Gadgets</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid5">
                                            <label class="custom-control-label" for="puid5"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/e.png" alt="" class="thumb">
                                                            <span class="title">iPhone 7 Headphones</span>
                                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">UY3753</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">$ 129.49</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">81</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">Headphone, Gadgets</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid6">
                                            <label class="custom-control-label" for="puid6"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/f.png" alt="" class="thumb">
                                                            <span class="title">Purple Blue Gradient iPhone Case</span>
                                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">UY3754</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">$ 29.00</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">28</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">Case, Gadgets</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid7">
                                            <label class="custom-control-label" for="puid7"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/g.png" alt="" class="thumb">
                                                            <span class="title">Plug In Speaker</span>
                                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">UY3755</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">$ 19.49</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">62</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">Gadgets, Speaker</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid8">
                                            <label class="custom-control-label" for="puid8"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/h.png" alt="" class="thumb">
                                                            <span class="title">Wireless Waterproof Speaker</span>
                                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">UY3756</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">$ 59.00</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">37</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">Speaker, Gadgets</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid9">
                                            <label class="custom-control-label" for="puid9"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/j.png" alt="" class="thumb">
                                                            <span class="title">AliExpress Fitness Trackers</span>
                                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">UY3758</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">$ 35.99</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">145</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">Fitbit, Tracker</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid10">
                                            <label class="custom-control-label" for="puid10"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                                        <span class="tb-product">
                                                            <img src="./images/product/i.png" alt="" class="thumb">
                                                            <span class="title">Pool Party Drink Holder</span>
                                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">UY3757</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">$ 9.49</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">73</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-sub">Men, Holder</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <div class="asterisk tb-asterisk">
                                            <a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-eye"></em><span>View Product</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Product Orders</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Product</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                </tbody>
                            </table><!-- .nk-tb-list -->
                        </div> <!-- nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
