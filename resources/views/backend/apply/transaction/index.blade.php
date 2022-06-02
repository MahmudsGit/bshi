@extends('layouts.backend.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-sm ">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title fw-normal">Transactions of All Successful Candidates</h3>
                                    <div class="nk-block-des">
                                        <p class="lead">List Candidates who have Paid for examination</p>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <a class="back-to btn btn-outline-secondary" href="{{ route('dashboard') }}"><em class="icon ni ni-arrow-left"></em><span>Back to DashBoard</span></a>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <div class="card card-preview">
                                <div class="card-inner">
                                    @if(count($transactions) > 0)
                                    <table class="datatable-init-export nowrap table" data-export-title="Export">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>User Id</th>
                                            <th>Applicant Name</th>
                                            <th>transaction</th>
                                            <th>Mobile No</th>
                                            <th>Amount</th>
                                            <th>email</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ?>
                                            @foreach($transactions as $transaction)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $transaction->identification_number }}</td>
                                                <td>{{ $transaction->name }}</td>
                                                <td>{{ $transaction->transaction_id }}</td>
                                                <td>{{ $transaction->phone }}</td>
                                                <td>{{ $transaction->amount }}</td>
                                                <td>{{ $transaction->email }}</td>
                                                <td>{{ $transaction->address }}</td>
                                                <td>{{ $transaction->status }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @else
                                        <h3 class="text-center text-danger">Currently Non of Applied Candidate is Paid</h3>
                                    @endif
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
