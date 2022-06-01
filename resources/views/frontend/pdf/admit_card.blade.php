<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- ----------------------- Start Style Part ----------------------- -->
<style media="screen">

    h1,h2,h3,h4,h5,h6{
        margin: 0;
        padding: 0;
    }

    ul{
        list-style-type: none;
    }

    .container {
        width: 720px;
        margin: auto;
        padding: 40px 0;
    }

    /* Header part */
    .header_part{
        display: flex;
        justify-content: space-between;
        text-align: center;
        align-items: center;
    }

    .header_part .left img{
        height: 150px;
    }

    .header_part .middle img{
        height: 100px;
    }

    .header_part .middle h1{
        font-size: 30px;
        font-weight: 700;
        margin-top: 10px;
    }

    .middle h3{
        font-size: 20px;
        font-weight: 400;
        margin-top: 10px;
    }

    /* Admit Cart */
    .admit_cart{
        margin-top: 30px;
        position: relative;
    }

    .admit_cart .left{
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
    }

    .admit_cart .left h4{
        font-size: 20px;
        font-weight: 700;
        border: 2px solid #000;
        padding: 10px;
        padding-right: 50px;
    }

    .admit_cart .left h4 span{
        margin-left: 15px;
    }

    .admit_cart{
        text-align: center;
    }

    .admit_cart h2{
        font-size: 24px;
        font-weight: 700;
    }

    /* Version Part */
    .version{
        margin-top: 40px;
    }

    .version ul{
        background: #d2cb06;
        padding: 10px;
    }

    .version ul li{
        display: inline-block;
        margin-right: 30px;
        font-size: 20px;
        font-weight: 700;
        color: #000;
    }

    .version ul li span{
        margin-left: 10px;
    }

    /* Table part */

    /* applicant_name */
    .applicant_name{
        margin-top: 40px;
    }

    .applicant_name table {
        width: 100%;
        border: 1px solid #000;
        margin-bottom: 30px;
        padding: 10px;
    }

    .applicant_name table td{
        font-size: 18px;
        padding: 10px 0;
        position: relative;
    }

    .width{
        width: 20%;
    }

    .font_width{
        font-weight: 700;
    }

    .applicant_name table td span{
        position: absolute;
        right: 10%;
    }

    /* Lottery Table */
    table.Lottery .width{
        width: 30%;
    }

    table.Lottery td.color{
        color: #800000;
        font-weight: 700;
    }

    .applicant_name table.Lottery td span{
        right: 5px;
    }

    .signature{
        position: relative;
        padding-top: 80px;
        margin-bottom: 40px;
    }

    .signature h5{
        position: absolute;
        right: 30px;
    }

    /* Remarks */
    .applicant_name.remarks td {
        padding: 25px 0;
    }

    .applicant_name.remarks table{
        margin-bottom: 0;
    }

    .applicant_name.remarks td span{
        right: 94%;
    }

    .applicant_name.copy {
        margin-top: 20px;
    }

    /* admit_card_generation_time */

    .admit_card_generation_time{
        position: relative;
    }

    .admit_card_generation_time h4{
        font-size: 16px;
        font-style: italic;
        font-weight: 500;
    }

    .admit_card_generation_time a{
        font-size: 16px;
        font-size: 700;
        margin-top: 30px;
        display: block;
        text-decoration: none;
        color: #000;
    }

    .admit_card_generation_time .footer_logo{
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .admit_card_generation_time .footer_logo img{
        height: 40px;
    }

</style>
<!-- ----------------------- End Style Part ----------------------- -->


<!-- --------------------------------------------------------------------------
    Start Html Part
--------------------------------------------------------------------------- -->
<section>

    <div class="container">

        <!-- Header Part -->
        <div class="header_part">

            <!-- Left -->
            <div class="left">
                <img src="images/qr.png" alt="">
            </div>

            <!-- Middle -->
            <div class="middle">

                <div class="logo">
                    <img src="images/logo.png" alt="">
                </div>

                <div class="text">
                    <h1>BAF Shaheen College Dhaka</h1>
                    <h3>Dhaka Cantonment, Dhaka-1206</h3>
                </div>

            </div>

            <!-- Right -->
            <div class="left">
                <img src="images/qr.png" alt="">
            </div>

        </div>

        <!-- Admit Cart -->
        <div class="admit_cart">

            <div class="left">
                <h4>Serial Number : <span>{{ $candidate->mother_name_english }}</span></h4>
            </div>

            <div class="middle">

                <h2>Admit Card</h2>
                <h3>Position: {{ $candidate->mother_name_english }}</h3>

            </div>

        </div>

        <!-- Version Part -->
        <div class="version">

            <ul>
                <li>Version: <span>English</span> </li>
                <li>Shift: <span>Morning</span> </li>
                <li>Gender: <span>{{ $candidate->mother_name_english }}</span></li>
                <li>Type: Civil</li>
            </ul>

        </div>

        <!-- Table Part -->
        <div class="applicant_name">

            <!--  Applicant's Name -->
            <table>

                <tr>
                    <td class="width font_width">Applicant's Name  <span>:</span></td>
                    <td class="font_width">{{ $candidate->mother_name_english }}</td>
                </tr>

                <tr>
                    <td class="width">Date of Birth <span>:</span></td>
                    <td>{{ $candidate->mother_name_english }}</td>
                </tr>

                <tr>
                    <td class="width">Age <span>:</span></td>
                    <td>{{ $candidate->mother_name_english }}</td>
                </tr>

                <tr>
                    <td class="width">NID Number <span>:</span></td>
                    <td>{{ $candidate->mother_name_english }}</td>
                </tr>

                <tr>
                    <td class="width">Father's Name <span>:</span></td>
                    <td>{{ $candidate->mother_name_english }}</td>
                </tr>

                <tr>
                    <td class="width">Mother's Name <span>:</span> </td>
                    <td>{{ $candidate->mother_name_english }}</td>
                </tr>

                <tr>
                    <td class="width">Contact Number <span>:</span> </td>
                    <td>{{ $candidate->mother_name_english }}</td>
                </tr>

                <tr>
                    <td class="width">Present Address <span>:</span> </td>
                    <td>{{ $candidate->mother_name_english }}</td>
                </tr>



            </table>

            <!-- Lottery Date & Time -->
            <table class="Lottery">

                <tr>
                    <td class="width color">Examination Date & Time<span>:</span></td>
                    <td class=" color"> {{ $candidate->mother_name_english }}</td>
                </tr>

                <tr>
                    <td class="width color">Venu</td>
                    <td class="color">Shaheen Hall, BAF Shaheen College Dhaka <span>:</span></td>
                </tr>

                <tr>
                    <td colspan="2">N.B. Applicant must bring printed color Admit Card at the time of lottery & Viva Voce.</td>
                </tr>

            </table>



        </div>

        <!-- Signature -->
        <div class="signature">

            <h5>Principal</h5>

        </div>

        <!-- Remarks -->
        <div class="applicant_name remarks">

            <!-- Table -->
            <table>

                <tr>
                    <td class="width font_width">Remarks  <span>:</span></td>
                </tr>

            </table>

        </div>

        <!-- BAF Shaheen College Dhaka -->
        <div class="applicant_name copy">

            <!-- Table -->
            <table>

                <tr>
                    <td class="width font_width">©2021, BAF Shaheen College Dhaka, All Rights Reserved.</td>
                </tr>

            </table>

        </div>

        <!-- Admit Card Generation Time : -->
        <div class="admit_card_generation_time">

            <h4>Admit Card Generation Time : 07/12/2021 14:32:34 PM</h4>
            <a href="">www.addiesoft.com</a>

            <div class="footer_logo">
                <img src="images/footer_logo.png" alt="">
            </div>

        </div>

    </div>


</section>



</body>
</html>
