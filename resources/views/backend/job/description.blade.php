@extends('layouts.backend.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                                <h3 class="nk-block-title fw-normal">Job Description</h3>
                                <div class="nk-block-des">
                                    <p class="lead">Please Write Job Description Below and Select Jobs to assign Job Description</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <span class="preview-title overline-title">Job Description Text here!</span>
                                    <textarea class="tinymce-basic form-control">Job Description!</textarea>
                                    <br>
                                    <div class="row gy-4">
                                        <div class="col-12">
                                            <div class="preview-block">
                                                <span class="preview-title overline-title">Select Jobs</span>

                                                <div class="g-3 align-center flex-wrap">
                                                    <div class="g">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="sr_nurse">
                                                            <label class="custom-control-label" for="sr_nurse">sr nurse</label>
                                                        </div>
                                                    </div>
                                                    <div class="g">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="jr_nurse">
                                                            <label class="custom-control-label" for="jr_nurse">jr nurse</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <input type="submit" class="btn btn-lg btn-primary" value="Save">
                                            </div>
                                        </div>
                                    </div>
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
