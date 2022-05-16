@extends('layouts.backend.app')

@push('css')
    <link rel="stylesheet" href="{{ asset('backend_assets/assets/css/editors/tinymce.css?ver=2.9.1') }}">
@endpush
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">{{ $job->job_name }} All Description</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Please Write Job Description Below and Select Jobs to assign Job Description.</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                @if(session('alert-green'))
                                    <a class="alert alert-success mt-3 text-center">
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
                                                <li class="nk-block-tools-opt"><button class="btn btn-primary" id="add"><em class="icon ni ni-plus"></em><span>Add More Description</span></button></li>
                                            </ul>
                                        </div>
                                    </div><!-- .toggle-wrap -->
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->

                        <div class="nk-block">
                            <form method="post" action="{{ route('description.store') }}">
                                @csrf
                                <table class="nk-tb-list is-separate nk-tb-ulist" id="table_field">
                                    <tbody>
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col" colspan="2">
                                            @error('description')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                            <div class="row gy-4">
                                                <div class="col-lg-10 ">
                                                    <div class="form-group mt-2 ">
                                                        <span class="preview-title overline-title">Job Description Text here!</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <textarea class="tinymce-basic form-control" name="description[]" ></textarea>
                                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                                        </td>
                                    </tr><!-- .nk-tb-item -->
                                    </tbody>
                                </table><!-- .nk-tb-list -->
                                <input type="submit" class="btn btn-primary btn-block" value="Save All Description">
                            </form>
                        </div><!-- .nk-block -->

                        <div class="nk-block">
                            <table class="nk-tb-list is-separate nk-tb-ulist" >
                                <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid-all">
                                            <label class="custom-control-label" for="pid-all"></label>
                                        </div>
                                    </th>
                                    <th class="nk-tb-col">
                                        <h4>Description Lists</h4>
                                    </th>
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

                                @foreach($jobDescriptions as $jobDescription)
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid-01">
                                            <label class="custom-control-label" for="pid-01"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col">
                                        <a href="#" class="project-title">
                                            <div class="user-avatar sq bg-purple-dim"><span>{{ $jobDescription->id }}</span></div>
                                            <div class="project-info">
                                                <p class="sub-text">{!! $jobDescription->description !!}</p>
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
                                @endforeach
                                </tbody>
                            </table><!-- .nk-tb-list -->
                        </div><!-- .nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('backend_assets/assets/js/libs/editors/tinymce.js?ver=2.9.1') }}"></script>
    <script src="{{ asset('backend_assets/assets/js/editors.js?ver=2.9.1') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var html= '<tr class="nk-tb-item"><td class="nk-tb-col" colspan="2">@error('description[]')<span class="form-note text-danger">* {{ $message }}</span>@enderror<div class="row g-4"><div class="col-12"><div class="form-control-wrap"><div class="input-group"><textarea class="tinymce-basic form-control" name="description[]" aria-label="With textarea"></textarea><div class="input-group-prepend"><span class="input-group-text"><button class="btn btn-outline-danger btn-dim" id="remove"><em class="icon ni ni-delete"></em></button></span> </div></div></div></div></div></td></tr>';
            var x =1;
            var max =10;
            $("#add").click(function () {
                if (x<=max){
                    $("#table_field").append(html);
                    x++;
                }
            })
            $("#table_field").on('click', '#remove', function () {
                $(this).closest('tr').remove();
                x--;
            })
        });
    </script>
@endpush
