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
                                    <h3 class="nk-block-title page-title">New Job Post</h3>
                                    <div class="nk-block-des text-soft">
                                        <p class="sub">To Create a Job Please Fill the Form below...</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                @if(session('alert-green'))
                                    <a class="alert alert-success mt-3 text-center">
                                        {{ session('alert-green') }}
                                    </a>
                                @endif
                                <div class="pull-right">
                                    <a class="back-to btn btn-outline-secondary" href="{{ route('dashboard') }}"><em class="icon ni ni-arrow-left"></em><span>Back to DashBoard</span></a>
                                    <a href="{{ route('job.index') }}" class="btn btn-primary"><em class="icon ni ni-list"></em><span>All Jobs</span></a>
                                </div>
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <div class="card">
                                <div class="card-inner">
                                    <div class="card-head">
                                        <h5 class="card-title">Create a Job</h5>
                                    </div>
                                    <form action="{{ route('job.store') }}" method="post" class="gy-3">
                                        @csrf
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="job_name">Job Name</label>
                                                    <span class="form-note">Specify the name of Job.</span>
                                                    @error('job_name')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="job_name" id="job_name"  value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="open_date">Open Date</label>
                                                    <span class="form-note">Specify the Open Date of Job.</span>
                                                    @error('job_name')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" id="open_date" name="open_date" class="form-control date-picker">
                                                    </div>
                                                    <div class="form-note">Date format <code>mm/dd/yyyy</code></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="expired_date">Expired Date</label>
                                                    <span class="form-note">Specify the Expired Date of Job.</span>
                                                    @error('expired_date')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" id="expired_date" name="expired_date" class="form-control date-picker">
                                                    </div>
                                                    <div class="form-note">Date format <code>mm/dd/yyyy</code></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="minimum_age">Minimum Age</label>
                                                    <span class="form-note">Specify the Minimum Age of Job.</span>
                                                    @error('minimum_age')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap number-spinner-wrap">
                                                        <a class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></a>
                                                        <input type="number" id="minimum_age" name="minimum_age" class="form-control number-spinner" value="" >
                                                        <a class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="maximum_age">Maximum Age</label>
                                                    <span class="form-note">Specify the Maximum Age of Job.</span>
                                                    @error('maximum_age')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap number-spinner-wrap">
                                                        <a class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></a>
                                                        <input type="number" id="maximum_age" name="maximum_age" class="form-control number-spinner" value="" >
                                                        <a class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="quota_age">Quota Age</label>
                                                    <span class="form-note">Specify the Quota Age of Job.</span>
                                                    @error('quota_age')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap number-spinner-wrap">
                                                        <a class="btn btn-icon btn-outline-light number-spinner-btn number-minus" data-number="minus"><em class="icon ni ni-minus"></em></a>
                                                        <input type="number" id="quota_age" name="quota_age" class="form-control number-spinner" value="">
                                                        <a class="btn btn-icon btn-outline-light number-spinner-btn number-plus" data-number="plus"><em class="icon ni ni-plus"></em></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="registration_fee">Registration Fee</label>
                                                    <span class="form-note">Specify the Registration Fee of Job.</span>
                                                    @error('registration_fee')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="registration_fee" id="registration_fee"  value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-lg-7 offset-lg-5">
                                                <div class="form-group mt-2">
                                                    <input type="submit" class="btn btn-lg btn-primary" value="Save">
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
