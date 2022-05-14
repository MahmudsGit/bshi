@extends('layouts.backend.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">সিনিয়র ষ্টাফ নার্স  All Description</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total 95 Description.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" ><em class="d-none d-sm-inline icon ni ni-list"></em><span>All Jobs</span></em></a>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt"><a href="{{ route('description.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add More Description</span></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->

                    <div class="nk-block">
                        <div class="row g-gs">

                            <div class="col-sm-6 col-lg-4 col-xxl-3">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="project">
                                            <div class="project-head">
                                                <a href="html/apps-kanban.html" class="project-title">
                                                    <div class="user-avatar sq bg-purple"><span>1</span></div>
                                                </a>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View </span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-details">
                                                <p>Design the website for Runnergy main website including their user dashboard.</p>
                                                <p>Design the website for Runnergy main website including their user dashboard.</p>
                                            </div>
                                            <div class="project-meta">
                                                <ul class="project-users row g-1">
                                                    <li>
                                                        <div class="badge badge-warning"><span>adadfdfA</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="badge badge-warning"><span>adadfdfA</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="badge badge-warning"><span>adadfdfA</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="badge badge-warning"><span>adadfdfA</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="badge badge-warning"><span>adadfdfA</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-3">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="project">
                                            <div class="project-head">
                                                <a href="html/apps-kanban.html" class="project-title">
                                                    <div class="user-avatar sq bg-purple"><span>2</span></div>
                                                </a>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View </span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit </span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-details">
                                                <p>Design the website for Runnergy main website including their user dashboard.</p>
                                                <p>Design the website for Runnergy main website including their user dashboard.</p>
                                            </div>
                                            <div class="project-meta">
                                                <ul class="project-users row g-1">
                                                    <li>
                                                        <div class="badge badge-warning"><span>adadfdfA</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="badge badge-warning"><span>adadfdfA</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="badge badge-warning"><span>adadfdfA</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="badge badge-warning"><span>adadfdfA</span></div>
                                                    </li>
                                                    <li>
                                                        <div class="badge badge-warning"><span>adadfdfA</span></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
