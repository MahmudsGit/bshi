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
                                    <h3 class="nk-block-title page-title">Examination Date & Time</h3>
                                    <div class="nk-block-des text-soft">
                                        <p class="sub">Set Examination Date, Time & Assign AdmitCard for desire Job</p>
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
                                <form action="{{ route('examination.store') }}" method="post" class="gy-3">
                                    @csrf
                                    <table class="table table-tranx">
                                        <tbody>
                                        <tr class="tb-tnx-item bg-light">
                                            <td class="" width="40%">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <select class="form-select" name="job_id" data-search="on">
                                                            @foreach($jobs as $job)
                                                                <option value="{{ $job->id }}">{{ $job->job_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-note">Select <code>Job Name</code></div>
                                                    @error('job_id')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                </div>
                                            </td>
                                            <td class="" width="30%">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" id="exam_date" name="exam_date" class="form-control date-picker" placeholder="Input Date of Examination">
                                                    </div>
                                                    <div class="form-note">Date format <code>mm/dd/yyyy</code></div>
                                                    @error('exam_date')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                </div>
                                            </td>
                                            <td class="" width="25%">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="exam_time" id="exam_time" class="form-control time-picker" placeholder="Input Time of Examination">
                                                    </div>
                                                    <div class="form-note">Time format <code>h.i A</code></div>
                                                    @error('exam_time')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                                </div>
                                            </td>
                                            <td class="" width="15%">
                                                <div class="form-group mt-0">
                                                    <input type="hidden"  name="admit" id="admit" value="admit_card" >
                                                    <input type="submit" class="btn btn-success" value="Assign Admit Card">
                                                    <div class="form-note mt-1">Save <code>Info</code></div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <div class="card-inner">

                                    <table class="table table-tranx">
                                        <thead>
                                            <tr class="tb-tnx-head">
                                                <th class="" width="5%">#SL</th>
                                                <th class="" width="30%">Job Name
                                                </th>
                                                <th class="" width="25%">Examination Date
                                                </th>
                                                <th class="" width="20%">Examination Time
                                                </th>
                                                <th class="" width="15%">
                                                    Admit Card
                                                </th>
                                                <th class="" width="5%">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($examinations as $examination)
                                            <tr class="tb-tnx-item">
                                                <td class="tb-tnx-id">
                                                    <a href="#"><span>{{ $examination->id }}</span></a>
                                                </td>
                                                <td class="">
                                                    <h4>{{ $examination->Job->job_name }}</h4>
                                                </td>
                                                <td class="">
                                                    <h5>{{ $examination->exam_date }}</h5>
                                                </td>
                                                <td class="">
                                                    <h5>{{ $examination->exam_time }}</h5>
                                                </td>
                                                <td class="">
                                                    <span class="badge badge-pill badge-md {{ $examination->admit == 'admit_card' ? 'badge-success' : 'badge-danger' }} ">{{ $examination->admit == 'admit_card' ? 'Enabled' : 'Disabled' }}</span>
                                                </td>
                                                <td class="">
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- card -->
                        </div><!-- .nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
