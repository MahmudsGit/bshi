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
                                <h2 class="nk-block-title fw-normal">Transactions of All Successful Candidates</h2>
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
                                            <th>transaction</th>
                                            <th>Mobile No</th>
                                            <th>Amount</th>
                                            <th>email</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($transactions))
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
