@extends('layouts.frontend.app')
@push('css')

@endpush

@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Application Form <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Admit Card</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <h6>Your payment is Comlete</h6>
        <p>Download Your Application Information </p>
        <form method="post" action="{{ route('download.pdf') }}">
            <input type="submit" value="Download Application Information">
        </form>
    </div>
@endsection

@push('js')

@endpush

