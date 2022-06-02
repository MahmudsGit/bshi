@extends('layouts.frontend.app')
@push('css')

@endpush

@section('content')
    <div class="container">
        @include('frontend.partials.menu')

        @if(count($jobs) > 0 )
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col" width="8%">#SERIAL</th>
                <th scope="col" width="70%">Position name</th>
                <th scope="col" width="12%">Application</th>
            </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                @foreach($jobs as $job)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $job->job_name }}</td>
                <td>
                    <a class="btn btn-sm btn-outline-secondary " href="{{ route('form',$job->id) }}">Apply Now !</a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <h3 class="text-center text-danger">Currently No Job Available</h3>
        @endif
    </div>
@endsection

@push('js')

@endpush

