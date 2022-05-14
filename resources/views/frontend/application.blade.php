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
            <div class="text-center">
                @if(isset($jobs))
                    @foreach($jobs as $job)
                        <p><a class="nav-link" href="{{ route('form',$job->id) }}">{{ $job->job_name }}</a></p>
                    @endforeach
                @endif
            </div>
    </div>
@endsection

@push('js')

@endpush

