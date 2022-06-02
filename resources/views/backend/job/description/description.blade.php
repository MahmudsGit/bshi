@extends('layouts.backend.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Job Descriptions</h3>
                            <div class="nk-block-des text-soft">
                                <p>You have total {{ count($jobs) }} Job Post.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="pull-right">
                            <a class="back-to btn btn-outline-secondary" href="{{ route('dashboard') }}"><em class="icon ni ni-arrow-left"></em><span>Back to DashBoard</span></a>
                            <a href="{{ route('job.index') }}" class="btn btn-info "><em class="icon ni ni-list"></em><span>All Jobs</span></a>
                            <a href="{{ route('job.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Create Job</span></a>
                        </div>
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    @if(count($jobs) > 0)
                    <div class="row g-gs">
                        @foreach($jobs as $job)
                        <div class="col-xxl-3 col-sm-6">
                            <a href="{{ route('description.view',$job->id) }}">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title"><span class="text-info">{{ count($job->jobDescription) }}</span> Job Descriptions</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount">{{ $job->job_name }}</div>
                                                    <div class="nk-ecwg6-ck">
                                                        <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="change down text-danger"><em class="icon ni ni-calendar"></em>{{ Carbon\Carbon::parse($job->open_date)->format('d/m/Y') }}</span>
                                                    <span> <em class="icon ni ni-arrow-right"></em></span>
                                                    <span class="change down text-danger"><em class="icon ni ni-calendar"></em>{{ Carbon\Carbon::parse($job->expired_date)->format('d/m/Y') }}</span></div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </a>
                        </div><!-- .col -->
                        @endforeach
                    </div><!-- .row -->
                    @else
                        <h3 class="text-center text-danger">Currently Non of Job Description is Created !</h3>
                    @endif
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
