<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>

    <!-- FONT LINK -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}" type="text/css">

</head>

<body>

<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START header PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
<header id="header">

    <div class="container">

        <div class="header_content">
            <h2>BANGLADESH SHISHU HOSPITAL & INSTITUTE</h2>
            <h3>Sher-e-Bangla Nagar, Dhaka-1207, Bangladesh</h3>
        </div>

    </div>

</header>



<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START Applicant’s Information PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->
<section id="applicants">

    <div class="container">

        <div class="applicants_headers">
            <h5>Applicant’s Information (Applicant's Copy)</h5>
        </div>

        <!-- Table Part -->
        <div class="table_part">

            <div class="row">

                <div class="col-lg-12">

                    <div class="form_part">

                        <form action="" method="">

                            <table class="table border">

                                <tr>
                                    <td>User Id: </td>
                                    <td>{{ $candidate->JobApply->identification_number }}</td>
                                </tr>

                                <tr>
                                    <td>{{ $candidate->Job->job_name }} </td>
                                    <td>Junior Nurse</td>
                                </tr>

                                <tr>
                                    <td>Applicant's Name </td>
                                    <td>{{ $candidate->full_name_english }} ( {{ $candidate->full_name_bangla }} )</td>
                                </tr>

                                <tr>
                                    <td>Father's Name </td>
                                    <td>{{ $candidate->clo_name_english }} ( {{ $candidate->clo_name_bangla }} )</td>
                                </tr>

                                <tr>
                                    <td>Mother's Name </td>
                                    <td>{{ $candidate->mother_name_english }} ( {{ $candidate->mother_name_bangla }} )</td>
                                </tr>

                                <tr>
                                    <td>Date Of Birth</td>
                                    <td>{{ $candidate->birth_date }} ( {{
                                                                        json_decode($candidate->age)[0].'Years, '.
                                                                        json_decode($candidate->age)[1].'Months, '.
                                                                        json_decode($candidate->age)[2].'Day'
                                                                        }})
                                    </td>
                                </tr>

                                <tr>
                                    <td>Contact Address</td>
                                    <td>{{ $candidate->contact_address_bangla }}</td>
                                </tr>

                                <tr>
                                    <td>Gender</td>
                                    <td>{{ $candidate->sex }}</td>
                                </tr>

                                <tr>
                                    <td>Nationality</td>
                                    <td>{{ $candidate->nationality }}</td>
                                </tr>

                                <tr>
                                    <td>National ID</td>
                                    <td>{{ $candidate->nid_number }}</td>
                                </tr>

                                <tr>
                                    <td>Village</td>
                                    <td>{{ json_decode($candidate->parmanet_address_bangla)[0] }}</td>
                                </tr>

                                <tr>
                                    <td>Post Office</td>
                                    <td>{{ json_decode($candidate->parmanet_address_bangla)[1] }}</td>
                                </tr>

                                <tr>
                                    <td>Sub District</td>
                                    <td>{{ json_decode($candidate->parmanet_address_bangla)[2] }}</td>
                                </tr>

                                <tr>
                                    <td>District </td>
                                    <td>{{ json_decode($candidate->parmanet_address_bangla)[3] }}</td>
                                </tr>

                                <tr>
                                    <td>Religion</td>
                                    <td>{{ $candidate->religion }}</td>
                                </tr>

                                <tr>
                                    <td>Marital Status </td>
                                    <td>{{ $candidate->married_status }}</td>
                                </tr>

                                <tr>
                                    <td>Contact Mobile</td>
                                    <td>{{ $candidate->mobile_number }}</td>
                                </tr>

                                <tr>
                                    <td>E-mail </td>
                                    <td>{{ $candidate->email }}</td>
                                </tr>

                            </table>

                            <!-- Academic Qualifications: Examination -->
                            <div class="Academic_Examination">

                                <h3>Academic Qualifications: Examination</h3>

                                <table class="table border">

                                    <tr>
                                        <th>EXAMINATION</th>
                                        <th>INSTITUTE</th>
                                        <th>BOARD</th>
                                        <th>RESULT</th>
                                        <th>YEAR</th>
                                    </tr>

                                    <tr>
                                        <td>SSC</td>
                                        <td>{{ json_decode($candidate->ssc)[0] }}</td>
                                        <td>{{ json_decode($candidate->ssc)[1] }}</td>
                                        <td>{{ json_decode($candidate->ssc)[2] }}</td>
                                        <td>{{ json_decode($candidate->ssc)[3] }}</td>
                                    </tr>

                                    <tr>
                                        <td>HSC</td>
                                        <td>{{ json_decode($candidate->hsc)[0] }}</td>
                                        <td>{{ json_decode($candidate->hsc)[1] }} </td>
                                        <td>{{ json_decode($candidate->hsc)[2] }} </td>
                                        <td>{{ json_decode($candidate->hsc)[3] }}</td>
                                    </tr>

                                    <tr>
                                        <td>Diploma</td>
                                        <td>{{ json_decode($candidate->diploma)[0] }}</td>
                                        <td>{{ json_decode($candidate->diploma)[1] }}</td>
                                        <td>{{ json_decode($candidate->diploma)[2] }}</td>
                                        <td>{{ json_decode($candidate->diploma)[3] }}</td>
                                    </tr>

                                    <tr>
                                        <td>BSc</td>
                                        <td>{{ json_decode($candidate->diploma)[0] }}</td>
                                        <td>{{ json_decode($candidate->diploma)[1] }}</td>
                                        <td>{{ json_decode($candidate->diploma)[2] }}</td>
                                        <td>{{ json_decode($candidate->diploma)[3] }}</td>
                                    </tr>

                                    <tr>
                                        <td>Others</td>
                                        <td>{{ json_decode($candidate->others_degree)[0] }}</td>
                                        <td>{{ json_decode($candidate->others_degree)[1] }} </td>
                                        <td>{{ json_decode($candidate->others_degree)[2] }} </td>
                                        <td>{{ json_decode($candidate->others_degree)[3] }}</td>
                                    </tr>

                                </table>

                            </div>

                            <!-- Required Experience: -->
                            <div class="Academic_Examination Required_Experience">

                                <h3>Required Experience: </h3>

                                <table class="table border">

                                    <tr>
                                        <td class="font-weight-bold">Midwife Information  </td>
                                        <td>Registration Number: {{ $candidate->reg_number }}</td>
                                        <td>Date: {{ $candidate->reg_date }}</td>
                                    </tr>

                                    <tr>
                                        <td class="font-weight-bold">Experience History</td>
                                        <td colspan="2">{{ $candidate->experience }}</td>
                                    </tr>

                                    <tr>
                                        <td><span class="">Employment History</span></td>
                                        <td colspan="2">{{ $candidate->employment }}</td>
                                    </tr>

                                </table>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------
    START PART
--------------------------------------------------------------------------------------------------------------------------------------------------- -->





<!-- JS Link -->
<!-- <script src="frontend_assets/js/jquery-1.12.4.min.js"></script> -->

<script src="{{ asset('frontend_assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
