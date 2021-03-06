@extends('layouts.backend.app')

@push('css')
@endpush
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Description @if($job) of {{ $job->job_name }} @endif </h3>
                                    <div class="nk-block-des text-soft">
                                        <p>Please Write Job Description Below and Select Jobs to assign Job Description.</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                <div class="pull-right">
                                    <a class="back-to btn btn-outline-secondary" href="{{ route('dashboard') }}"><em class="icon ni ni-arrow-left"></em><span>Back to DashBoard</span></a>
                                    <a href="{{ route('description.index') }}" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" ><em class="d-none d-sm-inline icon ni ni-list"></em><span>All Description</span></a>
                                </div>
                                @if(session('alert-green'))
                                    <a class="alert alert-success mt-3 text-center">
                                        {{ session('alert-green') }}
                                    </a>
                                @endif
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->

                        <div class="nk-block">
                            <button class="btn btn-lg btn-info btn-block" id="add"><em class="icon ni ni-plus"></em><span>Add Job Description Text</span></button>
                            <form method="post" action="{{ route('description.store') }}">
                                @csrf
                                <table class="nk-tb-list is-separate nk-tb-ulist" id="table_field">
                                    <tbody>
                                    <tr class="nk-tb-item">
                                        <td class="" >
                                            @error('description')<span class="form-note text-danger">* {{ $message }}</span>@enderror
                                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                                        </td>
                                    </tr><!-- .nk-tb-item -->
                                    </tbody>
                                </table><!-- .nk-tb-list -->
                            </form>
                        </div><!-- .nk-block -->

                        <div class="nk-block">
                            <table class="nk-tb-list is-separate nk-tb-ulist" >
                                <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="pid-all">
                                            <label class="custom-control-label" for="pid-all"></label>
                                        </div>
                                    </th>
                                    <th class="nk-tb-col">
                                        <h4>Description Lists</h4>
                                    </th>
                                    <th class="nk-tb-col nk-tb-col-tools text-right">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-xs btn-trigger btn-icon dropdown-toggle mr-n1" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-archive"></em><span>Mark As Archive</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Projects</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </th>
                                </tr><!-- .nk-tb-item -->
                                </thead>
                                <tbody>

                                @foreach($jobDescriptions as $jobDescription)
                                    <tr class="nk-tb-item">
                                        <td class="nk-tb-col nk-tb-col-check">
                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                <input type="checkbox" class="custom-control-input" id="pid-01">
                                                <label class="custom-control-label" for="pid-01"></label>
                                            </div>
                                        </td>
                                        <td class="nk-tb-col">
                                            <a href="{{ route('description.edit',$jobDescription->id) }}" class="project-title">
                                                <div class="user-avatar sq bg-purple-dim"><span>{{ $jobDescription->id }}</span></div>
                                                <div class="project-info">
                                                    <p class="sub-text">{!! $jobDescription->description !!}</p>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="nk-tb-col nk-tb-col-tools">
                                            <ul class="nk-tb-actions gx-1">
                                                <li>
                                                    <div class="drodown">
                                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="{{ route('description.edit',$jobDescription->id) }}"><em class="icon ni ni-edit"></em><span>Edit Description</span></a></li>
                                                                <li>
                                                                    <a style="cursor: pointer;" onclick="deletejobDescription({{ $jobDescription->id }})"> <em class="icon ni ni-trash"></em><span>Remove Selected</span></a>
                                                                    <form id="delete-form-{{$jobDescription->id}}" action="{{ route('description.destroy',$jobDescription->id) }}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr><!-- .nk-tb-item -->
                                @endforeach
                                </tbody>
                            </table><!-- .nk-tb-list -->
                        </div><!-- .nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('backend_assets/assets/js/editors.js?ver=2.9.1') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var html= '<tr class="nk-tb-item"><td class="nk-tb-col" >@error('description[]')<span class="form-note text-danger">* {{ $message }}</span>@enderror<div class="row g-4"><div class="col-12"><div class="form-control-wrap"><div class="input-group"><textarea id="mytextarea" class="mytextarea form-control" name="description[]" ></textarea><div class="input-group-prepend"><button class="btn btn-outline-danger btn-dim" id="remove"><em class="icon ni ni-delete"></em></button></div></div></div></div></div></td></tr>';
            var sbtn ='<input type="submit" id="sbtn" class="btn btn-primary btn-block" value="Save All Description">';
            var x =1;
            var min =2;
            var max =10;
            $("#add").click(function () {
                if (x<=max){
                    $("#table_field").append(html);
                    x++;
                }
                if (x<=min){
                    $("#table_field").append(sbtn);
                }

            })
            $("#table_field").on('click', '#remove', function () {
                $(this).closest('tr').remove();
                x--;

            })
        });
    </script>
    <script src="{{ asset('backend_assets/js/sweetalert2.js') }}"></script>
    <script type="text/javascript">
        function deletejobDescription(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it !',
                cancelButtonText: 'No, cancel !',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();

                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )

                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your file is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush
