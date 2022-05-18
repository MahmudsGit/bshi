@extends('layouts.frontend.app')
@push('css')

    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
@endpush
@section('content')
    <section id="form_part">
        <div class="container send">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form_content">
                        <form action="{{ route('apply') }}" method="post" id="main_form">
                            @csrf
                            <ul>
                                <!-- 1.1 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="full_name_bangla">১.১ পূর্ণ নাম স্পষ্ট অক্ষরে (বাংলায়)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="full_name_bangla" id="full_name_bangla">
                                        <span class="text-danger error-text full_name_bangla_error"></span>
                                    </div>
                                </li>
                                <!-- 1.1 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="full_name_english" class="en">(খ) (In English Capital)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="full_name_english" id="full_name_english">
                                        <span class="text-danger error-text full_name_english_error"></span>
                                    </div>
                                </li>
                                <!-- 1.2 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="position_name">১.২ পদের নামঃ</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="position_name" id="position_name">
                                        <span class="text-danger error-text position_name_error"></span>
                                    </div>
                                </li>
                                <!-- 1.3 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="clo_name_bangla">১.৩ পিতা/স্বামীর নাম (ক) বাংলাঃ</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="clo_name_bangla" id="clo_name_bangla">
                                        <span class="text-danger error-text clo_name_bangla_error"></span>
                                    </div>
                                </li>
                                <!-- 1.3 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="clo_name_english" class="en">(খ) (In English Capital)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="clo_name_english" id="clo_name_english">
                                        <span class="text-danger error-text clo_name_english_error"></span>
                                    </div>
                                </li>
                                <!-- 1.4 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="mother_name_bangla">১.৪ মাতার নাম  (ক) বাংলাঃ</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="mother_name_bangla" id="mother_name_bangla">
                                        <span class="text-danger error-text mother_name_bangla_error"></span>
                                    </div>
                                </li>
                                <!-- 1.4 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="mother_name_english" class="en">(খ) (In English Capital)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="mother_name_english" id="mother_name_english">
                                        <span class="text-danger error-text mother_name_english_error"></span>
                                    </div>
                                </li>
                                <!-- 1.5 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="birth_date">১.৫ জন্ম তারিখ <br> (এসএসসি সনদ অনুযায়ী)</label> <span> : </span>
                                    </div>
                                    <div class="input birth">
                                        <div class="input form-group date" id="datepicker">
                                            <input type="text" name="birth_date" id = "DOB" onchange="ageCalculator()" placeholder="YYYY/MM/DD">
                                            <span class="text-danger error-text birth_date_error" id="messege"></span>
                                        </div>
                                        <div class="age">
                                            <div class="age_item first">
                                                <div class="lavel_age age_applycation">
                                                    <label for="age_day" > &nbsp;বয়স (আবেদনের তারিখ অনুযায়ী)</label> <span> : </span>
                                                </div>
                                                <div class="input_age">
                                                    <input type="text" name="age_day" id="age_day" readonly>
                                                    <span class="text-danger error-text age_day_error"></span>
                                                </div>
                                            </div>
                                            <div class="age_item">
                                                <div class="lavel_age">
                                                    <label for="age_day">দিন</label>
                                                </div>
                                                <div class="input_age">
                                                    <input type="text" name="age_month" id="age_month" readonly>
                                                    <span class="text-danger error-text age_month_error"></span>
                                                </div>
                                            </div>
                                            <div class="age_item">
                                                <div class="lavel_age">
                                                    <label for="age_month">মাস</label>
                                                </div>
                                                <div class="input_age">
                                                    <input type="text" name="age_year" id="age_year" readonly>
                                                    <span class="text-danger error-text age_year_error"></span>
                                                </div>
                                            </div>
                                            <div class="age_item">
                                                <div class="lavel_age">
                                                    <label for="age_year">বছর</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- 1.6 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="nid_number">১.৬ জাতীয় পরিচয় পত্র নম্বর</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="nid_number" id="nid_number">
                                        <span class="text-danger error-text nid_number_error"></span>
                                    </div>
                                </li>
                                <!-- 1.7 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="parmanet_address_bangla">১.৭ স্থায়ী ঠিকানা (ক) বাংলা <span> : </span></label>
                                    </div>
                                    <div class="input">
                                        <div class="address">
                                            <div class="address_item">
                                                <!-- Left -->
                                                <div class="left">
                                                    <div class="lavel_address">
                                                        <label for="village_bangla">গ্রাম/শহর </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="village_bangla" id="village_bangla">
                                                        <span class="text-danger error-text village_bangla_error"></span>
                                                    </div>
                                                </div>
                                                <!-- Right -->
                                                <div class="left">
                                                    <div class="lavel_address">
                                                        <label for="post_office_bangla">ডাকঘর </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="post_office_bangla" id="post_office_bangla">
                                                        <span class="text-danger error-text post_office_bangla_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="address_item last_child">
                                                <!-- Left -->
                                                <div class="left">
                                                    <div class="lavel_address">
                                                        <label for="thana_bangla">থানা </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="thana_bangla" id="thana_bangla">
                                                        <span class="text-danger error-text thana_bangla_error"></span>
                                                    </div>
                                                </div>
                                                <!-- Right -->
                                                <div class="left">
                                                    <div class="lavel_address">
                                                        <label for="district_bangla">জেলা </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="district_bangla" id="district_bangla">
                                                        <span class="text-danger error-text district_bangla_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- 1.7 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="parmanet_address_english" class="en"> (খ) (In English Capital)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <div class="address">
                                            <div class="address_item">
                                                <!-- Left -->
                                                <div class="left Eng_village">
                                                    <div class="lavel_address">
                                                        <label for="village_english">Village/City </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="village_english" id="village_english">
                                                        <span class="text-danger error-text village_english_error"></span>
                                                    </div>
                                                </div>
                                                <!-- Right -->
                                                <div class="left Eng_village">
                                                    <div class="lavel_address">
                                                        <label for="post_office_english">Post Office </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="post_office_english" id="post_office_english">
                                                        <span class="text-danger error-text post_office_english_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="address_item last_child">
                                                <!-- Left -->
                                                <div class="left Eng_village">
                                                    <div class="lavel_address">
                                                        <label for="thana_english">P.S. </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="thana_english" id="thana_english">
                                                        <span class="text-danger error-text thana_english_error"></span>
                                                    </div>
                                                </div>
                                                <!-- Right -->
                                                <div class="left Eng_village">
                                                    <div class="lavel_address">
                                                        <label for="district_english">District:  </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="district_english" id="district_english">
                                                        <span class="text-danger error-text district_english_error"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- 1.8 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="contact_address_bangla"> যোগাযোগের ঠিকানা  (ক) বাংলা</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="contact_address_bangla" id="contact_address_bangla">
                                        <span class="text-danger error-text contact_address_bangla_error"></span>
                                    </div>
                                </li>
                                <!-- 1.8 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="contact_address_english" class="en"> (খ) (In English Capital)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="contact_address_english" id="contact_address_english">
                                        <span class="text-danger error-text contact_address_english_error"></span>
                                    </div>
                                </li>
                                <!-- 1.8 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="moblie_number" class="en">টেলিফোন/মোবাইল নম্বর</label> <span> : </span>
                                    </div>
                                    <div class="input birth mobile">
                                        <div class="input">
                                            <input type="text" name="moblie_number" id="moblie_number">
                                            <span class="text-danger error-text moblie_number_error"></span>
                                        </div>
                                        <div class="age">
                                            <div class="age_item">
                                                <div class="lavel_age age_applycation email">
                                                    <label for="email">ই-মেইল (যদি থাকে)</label> <span> : </span>
                                                </div>
                                                <div class="input_age">
                                                    <input type="text" name="email" id="email">
                                                    <span class="text-danger error-text email_error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- 1.9 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="married"> ১.৯ বৈবাহিক  অবস্থাঃ </label> <span> : </span>
                                    </div>
                                    <div class="input cheakbox">
                                        <select name="married" id="married">
                                            <option value="0">বিবাহিত</option>
                                            <option value="1">অবিবাহিত</option>
                                        </select>
                                    </div>
                                </li>
                                <!-- 1.10 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="religion"> ধর্ম </label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="religion" id="religion">
                                        <span class="text-danger error-text religion_error"></span>
                                    </div>
                                </li>
                                <!-- 2.0 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="nationality"> নাগরিকত্ব </label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="nationality" id="nationality">
                                        <span class="text-danger error-text nationality_error"></span>
                                    </div>
                                </li>
                                <!-- 2.1 -->
                                <li class="form_item two_point_one sorkari_besorkari">
                                    <div class="lavel">
                                        <label for="employment"> ২.১ সরকারী/আধাসরকারী/স্বায়ত্বশাহিত/বেসরকারী সংস্থায় নিযুক্ত থাকিলে পদের নামসহ চাকুরীর সংক্ষিপ্ত বিবরণঃ </label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="employment" id="employment">
                                        <span class="text-danger error-text employment_error"></span>
                                    </div>
                                </li>
                                <!-- 3.0 -->
                                <li class="form_item two_point_one">
                                    <div class="lavel">
                                        <label for="ssc"> ৩.০ শিক্ষাগত যোগ্যতার বিবরণঃ </label>
                                    </div>
                                </li>
                            </ul>
                            <!-- Table Part -->
                            <div class="table_part">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td>উত্তির্ণ পরীক্ষাসমূহ</td>
                                        <td>শিক্ষা প্রতিষ্ঠানের নাম</td>
                                        <td>বোর্ড/বিশ্ববিদ্যালয়ের নাম</td>
                                        <td>শ্রেণী/বিভাগ/গ্রেড</td>
                                        <td>পরীক্ষা পাশের সাল</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>এস এস সি বা সমতুল্য পরীক্ষা</td>
                                        <td><input type="text" name="ssc_institute"><span class="text-danger error-text ssc_institute_error"></span></td>
                                        <td><input type="text" name="ssc_board"><span class="text-danger error-text ssc_board_error"></span></td>
                                        <td><input type="text" name="ssc_grade"><span class="text-danger error-text ssc_grade_error"></span></td>
                                        <td><input type="text" name="ssc_yaar"><span class="text-danger error-text ssc_yaar_error"></span></td>
                                    </tr>
                                    <tr>
                                        <td>এইচ এস সি বা সমতুল্য পরীক্ষা</td>
                                        <td><input type="text" name="hsc_institute"><span class="text-danger error-text full_name_english_error"></span></td>
                                        <td><input type="text" name="hsc_board"><span class="text-danger error-text hsc_institute_error"></span></td>
                                        <td><input type="text" name="hsc_grade"><span class="text-danger error-text hsc_grade_error"></span></td>
                                        <td><input type="text" name="hsc_yaar"><span class="text-danger error-text hsc_yaar_error"></span></td>
                                    </tr>
                                    <tr>
                                        <td>চার বছর মেয়াদী ডিপ্লোমা ইন- <br>
                                            নার্সিং সায়েন্স ও মিডওয়াইফারী <br>
                                            অথবা <br>
                                            তিন বছর মেয়াদী ডিপ্লোমা ইন- <br>
                                            নার্সিং সায়েন্স ও মিডওয়াইফারী</td>
                                        <td><input type="text" name="diploma_institute"><span class="text-danger error-text diploma_institute_error"></span></td>
                                        <td><input type="text" name="diploma_board"><span class="text-danger error-text diploma_board_error"></span></td>
                                        <td><input type="text" name="diploma_grade"><span class="text-danger error-text diploma_grade_error"></span></td>
                                        <td><input type="text" name="diploma_yaar"><span class="text-danger error-text diploma_yaar_error"></span></td>
                                    </tr>
                                    <tr>
                                        <td>চার বছর মেয়াদী বি এস সি <br>
                                            ইন নার্সিং পাস </td>
                                        <td><input type="text" name="bsc_institute"><span class="text-danger error-text bsc_institute_error"></span></td>
                                        <td><input type="text" name="bsc_board"><span class="text-danger error-text bsc_board_error"></span></td>
                                        <td><input type="text" name="bsc_grade"><span class="text-danger error-text bsc_grade_error"></span></td>
                                        <td><input type="text" name="bsc_yaar"><span class="text-danger error-text bsc_yaar_error"></span></td>
                                    </tr>
                                    <tr>
                                        <td>অন্যান্য</td>
                                        <td><input type="text" name="others_degree_institute"><span class="text-danger error-text fothers_degree_institute_error"></span></td>
                                        <td><input type="text" name="others_degree_board"><span class="text-danger error-text others_degree_board_error"></span></td>
                                        <td><input type="text" name="others_degree_grade"><span class="text-danger error-text others_degree_grade_error"></span></td>
                                        <td><input type="text" name="others_degree_yaar"><span class="text-danger error-text others_degree_yaar_error"></span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- 4.0 -->
                            <ul>
                                <!-- 4.0 -->
                                <li class="form_item two_point_one">
                                    <div class="two_point_one_4_1">
                                        <label for="experience"> ৪. অভিজ্ঞতার বিস্তারিত বিবরণ (প্রয়োজনে আলাদা কাগজ সংযোজন করা যাইবে) :</label>
                                        <input type="text" name="experience" id="experience">
                                        <span class="text-danger error-text experience_error"></span>
                                    </div>
                                </li>
                                <!-- 4.1 -->
                                <li class="form_item two_point_one">
                                    <div class="two_point_one_4_1 f_two">
                                        <label for="reg_number"> ৪.১ বাংলাদেশ নাসিং ও মিডয়োইফাইরি কাউন্সিলের রেজিস্ট্রেশেন নম্বর:</label>
                                        <input type="text" name="reg_number" id="reg_number">
                                        <span class="text-danger error-text reg_number_error"></span>
                                        <label for="reg_date"> তারিখ:</label>
                                        <input type="text" name="reg_date" id="reg_date" placeholder="YYYY/MM/DD">
                                        <span class="text-danger error-text reg_date_error"></span>
                                    </div>
                                </li>
                                <!-- 5.0 -->
                                <li class="form_item two_point_one">
                                    <div class="two_point_one_4_1">
                                        <label for="reference_1"> ৫.০ প্রার্থী সম্বন্ধে অবহিত কিন্তু আত্মীয় নন এমন দু’জন বিশিষ্ট ব্যক্তিঃ (যদি থাকে)</label>
                                    </div>
                                </li>
                                <!-- 5.0 -->
                                <li class="form_item two_point_one five">
                                    <div class="five_one">
                                        <div class="five_one_item">
                                            <label for="reference_1_name">ব্যক্তির নাম <span> : </span></label>
                                            <input type="text" name="reference_1_name" id="reference_1_name">
                                            <span class="text-danger error-text reference_1_name_error"></span>
                                        </div>
                                        <div class="five_one_item">
                                            <label for="reference_1_occupation">পেশা/পদবী <span> : </span></label>
                                            <input type="text" name="reference_1_occupation" id="reference_1_occupation">
                                            <span class="text-danger error-text reference_1_occupation_error"></span>
                                        </div>
                                        <div class="five_one_item">
                                            <label for="reference_1_address">ঠিকানা <span> : </span></label>
                                            <input type="text" name="reference_1_address" id="reference_1_address">
                                            <span class="text-danger error-text reference_1_address_error"></span>
                                        </div>
                                    </div>
                                    <div class="five_one">
                                        <div class="five_one_item">
                                            <label for="reference_2_name">ব্যক্তির নাম <span> : </span></label>
                                            <input type="text" name="reference_2_name" id="reference_2_name">
                                            <span class="text-danger error-text reference_2_name_error"></span>
                                        </div>
                                        <div class="five_one_item">
                                            <label for="reference_2_occupation">পেশা/পদবী <span> : </span></label>
                                            <input type="text" name="reference_2_occupation" id="reference_2_occupation">
                                            <span class="text-danger error-text reference_2_occupation_error"></span>
                                        </div>
                                        <div class="five_one_item">
                                            <label for="reference_2_address">ঠিকানা <span> : </span></label>
                                            <input type="text" name="reference_2_address" id="reference_2_address">
                                            <span class="text-danger error-text reference_2_address_error"></span>
                                        </div>
                                    </div>
                                </li>
                                <!-- 6.0 -->
                                <li class="form_item two_point_one six">
                                    <div class="two_point_one_4_1 f_two">
                                        <label for="bank_draft_number">৬.০ পে-অর্ডার/ব্যাংক ড্রাফট নম্বর:</label>
                                        <input type="text" name="bank_draft_number" id="bank_draft_number" class="pay_order">
                                        <span class="text-danger error-text bank_draft_number_error"></span>
                                        <label for="bank_name"> ব্যাংকের নাম:</label>
                                        <input type="text" name="bank_name" id="bank_name" class="bank_name">
                                        <span class="text-danger error-text bank_name_error"></span>
                                        <br>
                                        <label for="bank_branch"> শাখার নাম:</label>
                                        <input type="text" name="bank_branch" id="bank_branch" class="brunch">
                                        <span class="text-danger error-text bank_branch_error"></span>
                                        <label for="bank_draft_date "> তারিখ:</label>
                                        <input type="text" name="bank_draft_date" id="bank_draft_date" placeholder="YYYY/MM/DD">
                                        <span class="text-danger error-text bank_draft_date_error"></span>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center">
                                <input type="submit" class="btn btn-lg btn-primary" value="Save Information">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
<br>
<br>
    <section id="form_part">
        <div class="container send">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form_content">
                        <ul>
                            <!-- 1.1 -->
                            <li class="form_item">
                                <div class="lavel">
                                    <h4 class="text-decoration-underline">শর্তাবলী :</h4>
                                </div>
                            </li>
                            @if(isset($job->jobDescription))
                                @foreach($job->jobDescription as $description)
                                <li>
                                    {{ $description->id }} ) {!! $description->description !!}
                                </li>
                            @endforeach
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@push('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

    <script src="{{ asset('frontend_assets/js/custom.js') }}"></script>
    <script>
        $(document).ready(function(){
            var date_input1=$('input[name="birth_date"]'); //our date input has the name "date"
            var date_input2=$('input[name="reg_date"]'); //our date input has the name "date"
            var date_input3=$('input[name="bank_draft_date"]'); //our date input has the name "date"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            var options={
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input1.datepicker(options);
            date_input2.datepicker(options);
            date_input3.datepicker(options);
        })
    </script>

@endpush
