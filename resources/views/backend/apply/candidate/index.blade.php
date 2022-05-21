@extends('layouts.backend.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href=""><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                                <h2 class="nk-block-title fw-normal">Candidate who? Have Applied</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Using , add advanced interaction controls to your HTML tables. It is a highly flexible tool and all advanced features allow you to display table instantly and nice way.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>User Id</th>
                                            <th>Applicant Name</th>
                                            <th>Position</th>
                                            <th>Mobile No</th>
                                            <th>Age</th>
                                            <th>Pay Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($candidates))
                                            <?php $i = 1 ?>
                                        @foreach($candidates as $candidate)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $candidate->JobApply->identification_number }}</td>
                                            <td>{{ $candidate->full_name_english }}</td>
                                            <td>{{ $candidate->position_name }}</td>
                                            <td>{{ $candidate->mobile_number }}</td>
                                            <td>{{ json_decode($candidate->age)[2]  }} Years</td>
                                            <td>{{ $candidate->JobApply->status }}</td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset Id</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- .card-preview -->
                        </div> <!-- nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('backend_assets/assets/js/libs/datatable-btns.js?ver=2.9.1') }}"></script>
@endpush
