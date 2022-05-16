@extends('layouts.backend.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">All Jobs</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>You have total {{ count($jobs) }} Job Post.</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                <a href="{{ route('job.create') }}" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Create Job</span></a>
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
                                <thead>
                                <tr class="nk-tb-item nk-tb-head">
                                    <th class="nk-tb-col tb-col-sm"><span>SL</span></th>
                                    <th class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid">
                                            <label class="custom-control-label" for="puid">All</label>
                                        </div>
                                    </th>
                                    <th class="nk-tb-col tb-col-sm"><span>Job Name</span></th>
                                    <th class="nk-tb-col"><span>Open Date</span></th>
                                    <th class="nk-tb-col"><span>Expired Date</span></th>
                                    <th class="nk-tb-col"><span>Age(min-max,quata)</span></th>
                                    <th class="nk-tb-col tb-col-md">Registration Fee</th>
                                    <th class="nk-tb-col tb-col-md">Job Description</th>
                                    <th class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Selected</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </th>
                                </tr><!-- .nk-tb-item -->
                                </thead>
                                <tbody>
                                @foreach($jobs as $job)
                                    <tr class="nk-tb-item">
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">{{ $job->id }}</span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="puid{{ $job->id }}">
                                            <label class="custom-control-label" for="puid{{ $job->id }}"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{ $job->job_name }}</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{ Carbon\Carbon::parse($job->open_date)->format('d/m/Y') }}</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{ Carbon\Carbon::parse($job->expired_date)->format('d/m/Y') }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-lead">{{ $job->minimum_age.'-'.$job->maximum_age.', '.$job->quota_age }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span class="tb-lead">{{ $job->registration_fee }} TK.</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <a href="{{ route('description.view',$job->id) }}"><em class="icon ni ni-eye"></em><span>vew Description</span></a>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="{{ route('job.edit',$job->id) }}"><em class="icon ni ni-edit"></em><span>Edit Selected</span></a></li>
                                                            <li>
                                                                <a style="cursor: pointer;" onclick="deletejob({{ $job->id }})"> <em class="icon ni ni-trash"></em><span>Remove Selected</span></a>
                                                                <form id="delete-form-{{$job->id}}" action="{{ route('job.destroy',$job->id) }}" method="post">
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
                        </div> <!-- nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('backend_assets/js/sweetalert2.js') }}"></script>
    <script type="text/javascript">
        function deletejob(id) {
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
