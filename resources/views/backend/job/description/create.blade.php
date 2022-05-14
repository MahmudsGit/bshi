@extends('layouts.backend.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">সিনিয়র ষ্টাফ নার্স All Description</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Please Write Job Description Below and Select Jobs to assign Job Description.</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                @if(session('alert-green'))
                                    <a clsiass="alert alert-success mt-3 text-center">
                                        {{ session('alert-green') }}
                                    </a>
                                @endif
                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="{{ route('job.index') }}" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" ><em class="d-none d-sm-inline icon ni ni-list"></em><span>All Jobs</span></em></a>
                                                    </div>
                                                </li>
                                                <li class="nk-block-tools-opt"><a href="{{ route('description.index') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add More Description</span></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- .toggle-wrap -->
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->

                        <div class="nk-block">
                            <table class="nk-tb-list is-separate nk-tb-ulist">
                                <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid-all">
                                            <label class="custom-control-label" for="pid-all"></label>
                                        </div>
                                    </th>
                                    <th class="nk-tb-col"><span class="sub-text">Description Detail</span></th>
                                    <th class="nk-tb-col nk-tb-col-tools text-right">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-xs btn-trigger btn-icon dropdown-toggle mr-n1" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As Archive</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Projects</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </th>
                                </tr><!-- .nk-tb-item -->
                                </thead>
                                <tbody>
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid-01">
                                            <label class="custom-control-label" for="pid-01"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a href="#" class="project-title">
                                            <div class="user-avatar sq bg-purple-dim"><span>1</span></div>
                                            <div class="project-info">
                                                <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolores eaque eveniet fuga id illum molestias mollitia porro, possimus veniam?</p>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Description</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-delete"></em><span>Delete Description</span></a></li>
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
                                            <input type="checkbox" class="custom-control-input" id="pid-01">
                                            <label class="custom-control-label" for="pid-01"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a href="#" class="project-title">
                                            <div class="user-avatar sq bg-purple-dim"><span>2</span></div>
                                            <div class="project-info">
                                                <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolores eaque eveniet fuga id illum molestias mollitia porro, possimus veniam?</p>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Description</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-delete"></em><span>Delete Description</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                                </tbody>
                            </table><!-- .nk-tb-list -->
                        </div><!-- .nk-block -->

                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <form method="post" action="{{ route('description.store') }}">
                                        @csrf
                                        <span class="preview-title overline-title">Job Description Text here!</span>
                                        @error('description')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                        <textarea class="tinymce-basic form-control" name="description[]"></textarea>
                                        <input class="form-control" type="hidden" name="job_id[]" value="{{ $job->id }}">
                                        <div class="row gy-4">
                                            <div class="col-lg-2 offset-lg-10">
                                                <div class="form-group mt-2 text-right">
                                                    <input type="submit" class="btn btn-sm btn-primary" value="Save">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <link rel="stylesheet" href="{{ asset('backend_assets/assets/css/editors/tinymce.css?ver=2.9.1') }}">
    <script src="{{ asset('backend_assets/assets/js/libs/editors/tinymce.js?ver=2.9.1') }}"></script>
    <script src="{{ asset('backend_assets/assets/js/editors.js?ver=2.9.1') }}"></script>
@endpush
