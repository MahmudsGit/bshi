@extends('layouts.frontend.app')
@push('css')

@endpush

@section('content')
    <div class="container">
        @include('frontend.partials.menu')

        <br>
        @if(session('alert-green'))
            <a class="alert alert-success mt-3 text-center">
                {{ session('alert-green') }}
            </a>
        @endif
        <br>
        <form action="{{ route('online_pay_later') }}" method="post">
            @csrf
            <div class="row mb-3">
                <label for="identification_number" class="col-sm-2 offset-3 col-form-label">User Id</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="identification_number" id="identification_number">
                </div>
            </div>
            <div class="row mb-3">
                <label for="identification_password" class="col-sm-2  offset-3 col-form-label">User Password</label>
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="identification_password" id="identification_password">
                </div>
                @error('applicants_copy')<span class="form-note text-danger">* {{ $message }}</span>@enderror
            </div>
            <div class="row mb-3">
                <div class="col-sm-4 offset-6">
                    <button type="submit" class="btn btn-primary">Proceed To Pay</button>
                </div>
                @error('applicants_copy')<span class="form-note text-danger">* {{ $message }}</span>@enderror
            </div>
        </form>
    </div>
@endsection

@push('js')

@endpush

