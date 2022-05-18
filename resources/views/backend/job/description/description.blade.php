@extends('layouts.backend.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-block">
                    <div class="row g-gs">
                        @if(isset($jobs))
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
                        @endif
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
