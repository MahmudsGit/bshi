@extends('layouts.frontend.app')
@push('css')

@endpush
@section('content')

    <section id="form_part">
        <div class="container send">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form_content">
                        <form action="">
                            <ul>
                                <!-- 1.1 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="full_name_bangla">১.১ পূর্ণ নাম স্পষ্ট অক্ষরে (বাংলায়)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="full_name_bangla" id="full_name_bangla">
                                    </div>
                                </li>
                                <!-- 1.1 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="full_name_english" class="en">(খ) (In English Capital)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="full_name_english" id="full_name_english">
                                    </div>
                                </li>
                                <!-- 1.2 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="position_name">১.২ পদের নামঃ</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="position_name" id="position_name">
                                    </div>
                                </li>
                                <!-- 1.3 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="clo_name_bangla">১.৩ পিতা/স্বামীর নাম (ক) বাংলাঃ</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="clo_name_bangla" id="clo_name_bangla">
                                    </div>
                                </li>
                                <!-- 1.3 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="clo_name_english" class="en">(খ) (In English Capital)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="clo_name_english" id="clo_name_english">
                                    </div>
                                </li>
                                <!-- 1.4 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="mother_name_bangla">১.৪ মাতার নাম  (ক) বাংলাঃ</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="mother_name_bangla" id="mother_name_bangla">
                                    </div>
                                </li>
                                <!-- 1.4 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="mother_name_english" class="en">(খ) (In English Capital)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="mother_name_english" id="mother_name_english">
                                    </div>
                                </li>
                                <!-- 1.5 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="birth_date">১.৫ জন্ম তারিখ <br> (এসএসসি সনদ অনুযায়ী)</label> <span> : </span>
                                    </div>
                                    <div class="input birth">
                                        <div class="input">
                                            <input type="text" name="birth_date" id="birth_date">
                                        </div>
                                        <div class="age">
                                            <div class="age_item first">
                                                <div class="lavel_age age_applycation">
                                                    <label for="birth_date_day">বয়স (আবেদনের তারিখ অনুযায়ী)</label> <span> : </span>
                                                </div>
                                                <div class="input_age">
                                                    <input type="text" name="birth_date_day" id="birth_date_day">
                                                </div>
                                            </div>
                                            <div class="age_item">
                                                <div class="lavel_age">
                                                    <label for="birth_date_day">দিন</label>
                                                </div>
                                                <div class="input_age">
                                                    <input type="text" name="birth_date_month" id="birth_date_month">
                                                </div>
                                            </div>
                                            <div class="age_item">
                                                <div class="lavel_age">
                                                    <label for="birth_date_month">মাস</label>
                                                </div>
                                                <div class="input_age">
                                                    <input type="text" name="birth_date_year" id="birth_date_year">
                                                </div>
                                            </div>
                                            <div class="age_item">
                                                <div class="lavel_age">
                                                    <label for="birth_date_year">বছর</label>
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
                                                    </div>
                                                </div>
                                                <!-- Right -->
                                                <div class="left">
                                                    <div class="lavel_address">
                                                        <label for="post_office_bangla">ডাকঘর </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="post_office_bangla" id="post_office_bangla">
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
                                                    </div>
                                                </div>
                                                <!-- Right -->
                                                <div class="left">
                                                    <div class="lavel_address">
                                                        <label for="district_bangla">জেলা </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="district_bangla" id="district_bangla">
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
                                                    </div>
                                                </div>
                                                <!-- Right -->
                                                <div class="left Eng_village">
                                                    <div class="lavel_address">
                                                        <label for="post_office_english">Post Office </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="post_office_english" id="post_office_english">
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
                                                    </div>
                                                </div>
                                                <!-- Right -->
                                                <div class="left Eng_village">
                                                    <div class="lavel_address">
                                                        <label for="district_english">District:  </label><span> : </span>
                                                    </div>
                                                    <div class="input">
                                                        <input type="text" name="district_english" id="district_english">
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
                                    </div>
                                </li>
                                <!-- 1.8 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="contact_address_english" class="en"> (খ) (In English Capital)</label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="contact_address_english" id="contact_address_english">
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
                                        </div>
                                        <div class="age">
                                            <div class="age_item">
                                                <div class="lavel_age age_applycation email">
                                                    <label for="email">ই-মেইল (যদি থাকে)</label> <span> : </span>
                                                </div>
                                                <div class="input_age">
                                                    <input type="text" name="email" id="email">
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
                                    </div>
                                </li>
                                <!-- 2.0 -->
                                <li class="form_item">
                                    <div class="lavel">
                                        <label for="nationality"> নাগরিকত্ব </label> <span> : </span>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="nationality" id="nationality">
                                    </div>
                                </li>
                                <!-- 2.1 -->
                                <li class="form_item two_point_one sorkari_besorkari">
                                    <div class="lavel">
                                        <label for="employment"> ২.১ সরকারী/আধাসরকারী/স্বায়ত্বশাহিত/বেসরকারী সংস্থায় নিযুক্ত থাকিলে পদের নামসহ চাকুরীর সংক্ষিপ্ত বিবরণঃ </label>
                                    </div>
                                    <div class="input">
                                        <input type="text" name="employment" id="employment">
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
                                        <td><input type="text" name="ssc_institute"></td>
                                        <td><input type="text" name="ssc_board"></td>
                                        <td><input type="text" name="ssc_grade"></td>
                                        <td><input type="text" name="ssc_yaar"></td>
                                    </tr>
                                    <tr>
                                        <td>এইচ এস সি বা সমতুল্য পরীক্ষা</td>
                                        <td><input type="text" name="hsc_institute"></td>
                                        <td><input type="text" name="hsc_board"></td>
                                        <td><input type="text" name="hsc_grade"></td>
                                        <td><input type="text" name="hsc_yaar"></td>
                                    </tr>
                                    <tr>
                                        <td>চার বছর মেয়াদী ডিপ্লোমা ইন- <br>
                                            নার্সিং সায়েন্স ও মিডওয়াইফারী <br>
                                            অথবা <br>
                                            তিন বছর মেয়াদী ডিপ্লোমা ইন- <br>
                                            নার্সিং সায়েন্স ও মিডওয়াইফারী</td>
                                        <td><input type="text" name="diploma_institute"></td>
                                        <td><input type="text" name="diploma_board"></td>
                                        <td><input type="text" name="diploma_grade"></td>
                                        <td><input type="text" name="diploma_yaar"></td>
                                    </tr>
                                    <tr>
                                        <td>চার বছর মেয়াদী বি এস সি <br>
                                            ইন নার্সিং পাস </td>
                                        <td><input type="text" name="bsc_institute"></td>
                                        <td><input type="text" name="bsc_board"></td>
                                        <td><input type="text" name="bsc_grade"></td>
                                        <td><input type="text" name="bsc_yaar"></td>
                                    </tr>
                                    <tr>
                                        <td>অন্যান্য</td>
                                        <td><input type="text" name="others_degree_institute"></td>
                                        <td><input type="text" name="others_degree_board"></td>
                                        <td><input type="text" name="others_degree_grade"></td>
                                        <td><input type="text" name="others_degree_yaar"></td>
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
                                    </div>
                                </li>
                                <!-- 4.1 -->
                                <li class="form_item two_point_one">
                                    <div class="two_point_one_4_1 f_two">
                                        <label for="reg_number"> ৪.১ বাংলাদেশ নাসিং ও মিডয়োইফাইরি কাউন্সিলের রেজিস্ট্রেশেন নম্বর:</label>
                                        <input type="text" name="reg_number" id="reg_number">
                                        <label for="reg_date"> তারিখ:</label>
                                        <input type="text" name="reg_date" id="reg_date">
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
                                        </div>
                                        <div class="five_one_item">
                                            <label for="reference_1_occupation">পেশা/পদবী <span> : </span></label>
                                            <input type="text" name="reference_1_occupation" id="reference_1_occupation">
                                        </div>
                                        <div class="five_one_item">
                                            <label for="reference_1_address">ঠিকানা <span> : </span></label>
                                            <input type="text" name="reference_1_address" id="reference_1_address">
                                        </div>
                                    </div>
                                    <div class="five_one">
                                        <div class="five_one_item">
                                            <label for="reference_2_name">ব্যক্তির নাম <span> : </span></label>
                                            <input type="text" name="reference_2_name" id="reference_2_name">
                                        </div>
                                        <div class="five_one_item">
                                            <label for="reference_2_occupation">পেশা/পদবী <span> : </span></label>
                                            <input type="text" name="reference_2_occupation" id="reference_2_occupation">
                                        </div>
                                        <div class="five_one_item">
                                            <label for="reference_2_address">ঠিকানা <span> : </span></label>
                                            <input type="text" name="reference_2_address" id="reference_2_address">
                                        </div>
                                    </div>
                                </li>
                                <!-- 6.0 -->
                                <li class="form_item two_point_one six">
                                    <div class="two_point_one_4_1 f_two">
                                        <label for="bank_draft_number">৬.০ পে-অর্ডার/ব্যাংক ড্রাফট নম্বর:</label>
                                        <input type="text" name="bank_draft_number" id="bank_draft_number" class="pay_order">
                                        <label for="bank_name"> ব্যাংকের নাম:</label>
                                        <input type="text" name="bank_name" id="bank_name" class="bank_name">
                                        <br>
                                        <label for="bank_branch"> শাখার নাম:</label>
                                        <input type="text" name="bank_branch" id="bank_branch" class="brunch">
                                        <label for="bank_draft_date"> তারিখ:</label>
                                        <input type="text" name="bank_draft_date" id="bank_draft_date" id="bank_draft_date" class="dates">
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center">
                                <input type="submit" class="btn btn-lg btn-primary" value="Apply">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('js')

@endpush
