@extends('layouts.backend.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('backend_assets/assets/css/editors/summernote.css?ver=2.9.1') }}">
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
                                    <h3 class="nk-block-title page-title">Description No </h3>
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
                                                        <a href="{{ route('job.index') }}" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" ><em class="d-none d-sm-inline icon ni ni-list"></em><span>All Jobs</span></a>
                                                    </div>
                                                </li>
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('description.view',$jobDescriptions->job_id) }}" class="dropdown-toggle btn btn-white btn-dim btn-outline-primary" ><em class="d-none d-sm-inline icon ni ni-list"></em><span>Descriptions</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .toggle-wrap -->
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->

                        <div class="nk-block">
                            <form method="post" action="{{ route('description.updateDescription',$jobDescriptions->id) }}">
                                @csrf
                                <table class="nk-tb-list is-separate nk-tb-ulist" id="table_field">
                                    <tbody>
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col" colspan="2">
                                            @error('description')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                            <textarea class="summernote-basic form-control" name="description" >{{ $jobDescriptions->description }}</textarea>
                                            <input type="hidden" name="job_id" value="{{ $jobDescriptions->job_id }}">
                                        </td>
                                    </tr><!-- .nk-tb-item -->
                                    </tbody>
                                </table><!-- .nk-tb-list -->
                                <input type="submit" class="btn btn-primary btn-block" value="Save Description">
                            </form>
                        </div><!-- .nk-block -->

                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('backend_assets/assets/js/libs/editors/summernote.js?ver=2.9.1') }}"></script>
    <script src="{{ asset('backend_assets/assets/js/editors.js?ver=2.9.1') }}"></script>
@endpush
