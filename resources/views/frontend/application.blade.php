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
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col" width="10%">#SERIAL</th>
                <th scope="col" width="70%">Position name</th>
                <th scope="col" width="10%">Application</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($jobs))
                @foreach($jobs as $job)
            <tr>
                <th scope="row">{{ $job->id }}</th>
                <td>{{ $job->job_name }}</td>
                <td>
                    <a class="nav-link text-right" href="{{ route('form',$job->id) }}">Apply</a>
                </td>
            </tr>
                @endforeach
            @endif
            </tbody>
        </table>

    </div>
@endsection

@push('js')

@endpush

