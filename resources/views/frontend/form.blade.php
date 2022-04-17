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
                                        <label>১.১ পূর্ণ নাম স্পষ্ট অক্ষরে (বাংলায়)</label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 1.1 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label class="en">(খ) (In English Capital)</label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 1.2 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label>১.২ পদের নামঃ</label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 1.3 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label>১.৩ পিতা/স্বামীর নাম (ক) বাংলাঃ</label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 1.3 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label class="en">(খ) (In English Capital)</label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 1.4 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label>১.৪ মাতার নাম  (ক) বাংলাঃ</label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 1.4 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label class="en">(খ) (In English Capital)</label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 1.5 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label>১.৫ জন্ম তারিখ <br> (এসএসসি সনদ অনুযায়ী)</label> <span> : </span>
                                    </div>

                                    <div class="input birth">

                                        <div class="input">
                                            <input type="text" name="">
                                        </div>

                                        <div class="age">

                                            <div class="age_item first">

                                                <div class="lavel_age age_applycation">
                                                    <label>বয়স (আবেদনের তারিখ অনুযায়ী)</label> <span> : </span>
                                                </div>

                                                <div class="input_age">
                                                    <input type="text" name="">
                                                </div>

                                            </div>

                                            <div class="age_item">

                                                <div class="lavel_age">
                                                    <label>দিন</label>
                                                </div>

                                                <div class="input_age">
                                                    <input type="text" name="">
                                                </div>

                                            </div>

                                            <div class="age_item">

                                                <div class="lavel_age">
                                                    <label>মাস</label>
                                                </div>

                                                <div class="input_age">
                                                    <input type="text" name="">
                                                </div>

                                            </div>

                                            <div class="age_item">

                                                <div class="lavel_age">
                                                    <label>বছর</label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <!-- 1.6 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label>১.৬ জাতীয় পরিচয় পত্র নম্বর</label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 1.7 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label>১.৭ স্থায়ী ঠিকানা (ক) বাংলা <span> : </span>
                                    </div>

                                    <div class="input">

                                        <div class="address">

                                            <div class="address_item">

                                                <!-- Left -->
                                                <div class="left">

                                                    <div class="lavel_address">
                                                        <label>গ্রাম/শহর <span> : </span>
                                                    </div>

                                                    <div class="input">
                                                        <input type="text" name="">
                                                    </div>

                                                </div>

                                                <!-- Right -->
                                                <div class="left">

                                                    <div class="lavel_address">
                                                        <label>ডাকঘর <span> : </span>
                                                    </div>

                                                    <div class="input">
                                                        <input type="text" name="">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="address_item last_child">

                                                <!-- Left -->
                                                <div class="left">

                                                    <div class="lavel_address">
                                                        <label>থানা <span> : </span>
                                                    </div>

                                                    <div class="input">
                                                        <input type="text" name="">
                                                    </div>

                                                </div>

                                                <!-- Right -->
                                                <div class="left">

                                                    <div class="lavel_address">
                                                        <label>জেলা <span> : </span>
                                                    </div>

                                                    <div class="input">
                                                        <input type="text" name="">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <!-- 1.7 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label class="en"> (খ) (In English Capital)</label> <span> : </span>
                                    </div>

                                    <div class="input">

                                        <div class="address">

                                            <div class="address_item">

                                                <!-- Left -->
                                                <div class="left Eng_village">

                                                    <div class="lavel_address">
                                                        <label>Village/City <span> : </span>
                                                    </div>

                                                    <div class="input">
                                                        <input type="text" name="">
                                                    </div>

                                                </div>

                                                <!-- Right -->
                                                <div class="left Eng_village">

                                                    <div class="lavel_address">
                                                        <label>Post Office <span> : </span>
                                                    </div>

                                                    <div class="input">
                                                        <input type="text" name="">
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="address_item last_child">

                                                <!-- Left -->
                                                <div class="left Eng_village">

                                                    <div class="lavel_address">
                                                        <label>P.S. <span> : </span>
                                                    </div>

                                                    <div class="input">
                                                        <input type="text" name="">
                                                    </div>

                                                </div>

                                                <!-- Right -->
                                                <div class="left Eng_village">

                                                    <div class="lavel_address">
                                                        <label>District:  <span> : </span>
                                                    </div>

                                                    <div class="input">
                                                        <input type="text" name="">
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <!-- 1.8 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label> যোগাযোগের ঠিকানা  (ক) বাংলা</label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 1.8 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label class="en"> (খ) (In English Capital)</label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 1.8 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label class="en">টেলিফোন/মোবাইল নম্বর</label> <span> : </span>
                                    </div>

                                    <div class="input birth mobile">

                                        <div class="input">
                                            <input type="text" name="">
                                        </div>

                                        <div class="age">

                                            <div class="age_item">

                                                <div class="lavel_age age_applycation email">
                                                    <label>ই-মেইল (যদি থাকে)</label> <span> : </span>
                                                </div>

                                                <div class="input_age">
                                                    <input type="text" name="">
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </li>

                                <!-- 1.9 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label> ১.৯ বৈবাহিক  অবস্থাঃ </label> <span> : </span>
                                    </div>

                                    <div class="input cheakbox">
                                        <select name="">
                                            <option value="">বিবাহিত</option>
                                            <option value="">অবিবাহিত</option>
                                        </select>
                                    </div>

                                </li>

                                <!-- 1.10 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label> ধর্ম </label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 2.0 -->
                                <li class="form_item">

                                    <div class="lavel">
                                        <label> নাগরিকত্ব </label> <span> : </span>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 2.1 -->
                                <li class="form_item two_point_one sorkari_besorkari">

                                    <div class="lavel">
                                        <label> ২.১ সরকারী/আধাসরকারী/স্বায়ত্বশাহিত/বেসরকারী সংস্থায় নিযুক্ত থাকিলে পদের নামসহ চাকুরীর সংক্ষিপ্ত বিবরণঃ </label>
                                    </div>

                                    <div class="input">
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 3.0 -->
                                <li class="form_item two_point_one">

                                    <div class="lavel">
                                        <label> ৩.০ শিক্ষাগত যোগ্যতার বিবরণঃ </label>
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
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                    </tr>

                                    <tr>
                                        <td>এইচ এস সি বা সমতুল্য পরীক্ষা</td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                    </tr>

                                    <tr>
                                        <td>চার বছর মেয়াদী ডিপ্লোমা ইন- <br>
                                            নার্সিং সায়েন্স ও মিডওয়াইফারী <br>
                                            অথবা <br>
                                            তিন বছর মেয়াদী ডিপ্লোমা ইন- <br>
                                            নার্সিং সায়েন্স ও মিডওয়াইফারী</td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                    </tr>

                                    <tr>
                                        <td>চার বছর মেয়াদী বি এস সি <br>
                                            ইন নার্সিং পাস </td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                    </tr>

                                    <tr>
                                        <td>অন্যান্য</td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                        <td><input type="text" name=""></td>
                                    </tr>

                                    </tbody>

                                </table>

                            </div>

                            <!-- 4.0 -->
                            <ul>

                                <!-- 4.0 -->
                                <li class="form_item two_point_one">

                                    <div class="two_point_one_4_1">
                                        <label> ৪. অভিজ্ঞতার বিস্তারিত বিবরণ (প্রয়োজনে আলাদা কাগজ সংযোজন করা যাইবে) :</label>
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 4.1 -->
                                <li class="form_item two_point_one">

                                    <div class="two_point_one_4_1 f_two">
                                        <label> ৪.১ বাংলাদেশ নাসিং ও মিডয়োইফাইরি কাউন্সিলের রেজিস্ট্রেশেন নম্বর</label>
                                        <input type="text" name="">
                                        <label> তারিখ:</label>
                                        <input type="text" name="">
                                    </div>

                                </li>

                                <!-- 5.0 -->
                                <li class="form_item two_point_one">

                                    <div class="two_point_one_4_1">
                                        <label> ৫.০ প্রার্থী সম্বন্ধে অবহিত কিন্তু আত্মীয় নন এমন দু’জন বিশিষ্ট ব্যক্তিঃ (যদি থাকে)</label>
                                    </div>

                                </li>

                                <!-- 5.0 -->
                                <li class="form_item two_point_one five">

                                    <div class="five_one">

                                        <div class="five_one_item">
                                            <label>ব্যক্তির নাম <span> : </span></label>
                                            <input type="text" name="">
                                        </div>

                                        <div class="five_one_item">
                                            <label>পেশা/পদবী <span> : </span></label>
                                            <input type="text" name="">
                                        </div>

                                        <div class="five_one_item">
                                            <label>ঠিকানা <span> : </span></label>
                                            <input type="text" name="">
                                        </div>

                                    </div>

                                    <div class="five_one">

                                        <div class="five_one_item">
                                            <label>ব্যক্তির নাম <span> : </span></label>
                                            <input type="text" name="">
                                        </div>

                                        <div class="five_one_item">
                                            <label>পেশা/পদবী <span> : </span></label>
                                            <input type="text" name="">
                                        </div>

                                        <div class="five_one_item">
                                            <label>ঠিকানা <span> : </span></label>
                                            <input type="text" name="">
                                        </div>

                                    </div>

                                </li>

                                <!-- 6.0 -->
                                <li class="form_item two_point_one six">

                                    <div class="two_point_one_4_1 f_two">
                                        <label>৬.০ পে-অর্ডার/ব্যাংক ড্রাফট নম্বর:</label>
                                        <input type="text" name="" class="pay_order">
                                        <label> ব্যাংকের নাম:</label>
                                        <input type="text" name="" class="bank_name">
                                        <br>
                                        <label> শাখার নাম:</label>
                                        <input type="text" name="" class="brunch">
                                        <label> তারিখ:</label>
                                        <input type="text" name="" name="dates">
                                    </div>

                                </li>

                            </ul>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection

@push('js')

@endpush
