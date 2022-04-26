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
        <form action="{{ route('form') }}" method="get" data-parsley-validate class="form-horizontal form-label-left">
            @csrf
            <div class="text-center">
                @if(isset($jobs))
                    @foreach($jobs as $job)
                        <div class="form-check">
                            <input  type="radio" value="{{ $job->id }}" name="flexRadioDefault" id="{{ $job->id }}" >
                            <label class="form-check-label" for="{{ $job->id }}">{{ $job->job_name }}</label>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="fa-pull-right">
                <input class="btn btn-sm btn-outline-secondary" type="submit" name="submit" value="Next">
            </div>
        </form>
    </div>
@endsection

@push('js')

@endpush

