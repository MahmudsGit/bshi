@extends('layouts.frontend.app')
@push('css')

@endpush

@section('content')
    <div class="container">
        @include('frontend.partials.menu')

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
            @endif
            </tbody>
        </table>

    </div>
@endsection

@push('js')

@endpush

