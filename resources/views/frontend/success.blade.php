@extends('layouts.frontend.app')
@push('css')

@endpush

@section('content')
    <div class="container">
        <div class="alert alert-icon alert-success" role="alert">
            <em class="icon ni ni-alert-circle"></em>
            Hi, <strong>{{ $candidate->full_name_english }}  </strong> User ID: <strong>{{ $candidate->JobApply->identification_number }}</strong> Your Application is Successful. Download Your Application Information bellow...
            <br>
            <br>
            <div class="text-center">
                <a href="{{ route('download.pdf',$candidate->id) }}" class="btn btn-outline-success" >Download Application Information</a>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush

