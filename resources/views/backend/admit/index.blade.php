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
                                    <h3 class="nk-block-title page-title">Assign Admit Card</h3>
                                    <div class="nk-block-des text-soft">
                                        <p class="sub">Please Assign Examination Admit Card</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                @if(session('alert-green'))
                                    <a class="alert alert-success mt-3 text-center">
                                        {{ session('alert-green') }}
                                    </a>
                                @endif
                                <a href="{{ route('job.index') }}" class="btn btn-primary"><em class="icon ni ni-list"></em><span>All Jobs</span></a>
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <div class="card">
                                <div class="card-inner">
                                    <div class="card-head">
                                        <h5 class="card-title">Set Or <code>Remove</code> Admit Card for desire Job</h5>
                                    </div>
                                    <form action="" method="post" class="gy-3">
                                        @csrf
                                        @foreach($jobs as $job)
                                        <div class="row g-3 align-center ">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="form-label" for="job_name">{{ $job->job_name }}</label>
                                                        @error('job_name')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="preview-block">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="admit" id="{{ $job->id }}" checked>
                                                        <label class="custom-control-label" for="{{ $job->id }}">Assign Admit Card</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="row g-3">
                                            <div class="col-lg-8 offset-lg-4">
                                                <div class="form-group mt-2">
                                                    <input type="submit" class="btn btn-lg btn-primary" value="Save Assigned Admit Card">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- card -->
                        </div><!-- .nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
