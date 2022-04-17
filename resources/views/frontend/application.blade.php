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
        <form action="{{ route('application') }}" method="get" data-parsley-validate class="form-horizontal form-label-left">
            @csrf

            <div class="text-center">
                <div class="form-check">
                    <input  type="radio" value="1" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    <label class="form-check-label" for="flexRadioDefault1">সিনিয়র ষ্টাফ নার্স</label>
                </div>
                <div class="form-check">
                    <input  type="radio" value="2" name="flexRadioDefault" id="flexRadioDefault2" >
                    <label class="form-check-label" for="flexRadioDefault2">নার্স</label>
                </div>
                <div class="form-check">
                    <input  type="radio" value="3" name="flexRadioDefault" id="flexRadioDefault3" >
                    <label class="form-check-label" for="flexRadioDefault3">ষ্টাফ নার্স</label>
                </div>
                <div class="form-check">
                    <input  type="radio" value="4" name="flexRadioDefault" id="flexRadioDefault4" >
                    <label class="form-check-label" for="flexRadioDefault4">জুনিয়র ষ্টাফ নার্স</label>
                </div>
            </div>
            <div class="fa-pull-right">
                <input class="btn btn-sm btn-outline-secondary" type="submit" name="submit" value="Next">
            </div>
        </form>
    </div>
@endsection

@push('js')

@endpush

