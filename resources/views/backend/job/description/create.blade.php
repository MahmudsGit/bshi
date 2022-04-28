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
                                    <h3 class="nk-block-title page-title">New Description</h3>
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
                                                <li class="nk-block-tools-opt"><a href="{{ route('description.create') }}" class="btn btn-primary"><em class="icon ni ni-list"></em><span>All Description</span></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- .toggle-wrap -->
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <form method="post" action="{{ route('description.store') }}">
                                        @csrf
                                        <span class="preview-title overline-title">Job Description Text here!</span>
                                        @error('description')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                        <textarea class="tinymce-basic form-control" name="description"></textarea>
                                        <br>
                                        <div class="row gy-4">
                                            <div class="col-12">
                                                <div class="preview-block">
                                                    <span class="preview-title overline-title">Select Jobs</span>
                                                    @error('job_id')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                    <div class="g-3 align-center flex-wrap">
                                                        @foreach($jobs as $job)
                                                        <div class="g">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="job_id" id="{{ $job->id }}" value="{{ $job->id }}">
                                                                <label class="custom-control-label" for="{{ $job->id }}">{{ $job->job_name }}</label>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 offset-lg-5">
                                                <div class="form-group mt-2">
                                                    <input type="submit" class="btn btn-lg btn-primary" value="Save">
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
