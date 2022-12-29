@extends('admin.mainsection.admin_main')
@section('section')
<div class="main_container">
    <!-- gretings section -->
    <section class="grettings">
        <!-- admit_section_container -->
        <div class="section_container">
            <div class="admit_section_container">
                <!-- left side-->
                <div>
                    <h1><span class="hello">হ্যালো,</span> <span class="student_name"> তানিয়া আক্তার</span>
                    </h1>
                </div>

                <!-- right side -->
                <div class="admit_btn_section_container">
                    <div class="button1"><a href="#">পিরিয়ড পরিবর্তন করুণ</a></div>
                    <div class="button2 text_blue fw_700"><a href="#">ভর্তি হোন</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- courses -->
    <section class="section_container mt_45">
        <div class="courses">
            <!-- single card -->
            <div class="courses_card">
                <div class="card_info">
                    <h5 class="card_title">মোট ক্লাস</h5>
                    <h3 class="card_count">৪৮/২৪০</h3>
                </div>
                <div class="card_img">
                    <img src="./assets/icons/workshop.png" alt="">
                </div>
            </div>
            <!-- single card -->
            <div class="courses_card">
                <div class="card_info">
                    <h5 class="card_title">মোট ছাত্র</h5>
                    <h3 class="card_count">৪৫৮ জন</h3>
                </div>
                <div class="card_img">
                    <img src="./assets/icons/cap.png" alt="">
                </div>
            </div>
            <!-- single card -->
            <div class="courses_card">
                <div class="card_info">
                    <h5 class="card_title">মোট পাঠ</h5>
                    <h3 class="card_count">৪৮/২৪০</h3>
                </div>
                <div class="card_img">
                    <img src="./assets/icons/audio_book.png" alt="">
                </div>
            </div>
            <!-- single card -->
            <div class="courses_card">
                <div class="card_info">
                    <h5 class="card_title">মোট ঘণ্টা</h5>
                    <h3 class="card_count">১২/২৪০</h3>
                </div>
                <div class="card_img">
                    <img src="./assets/icons/clock.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- skills section -->
    <section class="section_container">
        <div class="skills_body_container mt_24">
            <!-- single card -->
            <div class="my_skills">
                <h5 class="fw_300 text_gray">আসন্ন পাঠ</h5>

                <!--single পাঠ  -->
                <div class="lesson_container mt_24">
                    <!-- left side -->
                    <div>
                        <h2 class="fs_26 fw_700">পাঠ 30</h2>
                        <p class="fw_300 text_primary text_lg">সেপ্টেম্বার ২৫, ০৮.০০ PM</p>
                    </div>
                    <!-- right side -->
                    <div>
                        <div class="admit_btn_section_container">
                            <div class="button2 text_blue fw_700"><a href="#">নিশ্চিত</a></div>
                            <div class="button1"><a href="#">পুনঃনির্ধারণ</a></div>
                        </div>
                    </div>
                </div>
                <!--single পাঠ  -->
                <div class="lesson_container mt_59">
                    <!-- left side -->
                    <div>
                        <h2 class="fs_26 fw_700">পাঠ 30</h2>
                        <p class="fw_300 text_primary text_lg">সেপ্টেম্বার ২৫, ০৮.০০ PM</p>
                    </div>
                    <!-- right side -->
                    <div>
                        <div class="admit_btn_section_container">
                            <div class="button2 text_blue fw_700"><a href="#">নিশ্চিত</a></div>
                            <div class="button1"><a href="#">পুনঃনির্ধারণ</a></div>
                        </div>
                    </div>
                </div>
                <!--single পাঠ  -->
                <div class="lesson_container mt_59">
                    <!-- left side -->
                    <div>
                        <h2 class="fs_26 fw_700">পাঠ 30</h2>
                        <p class="fw_300 text_primary text_lg">সেপ্টেম্বার ২৫, ০৮.০০ PM</p>
                    </div>
                    <!-- right side -->
                    <div>
                        <div class="admit_btn_section_container">
                            <div class="button2 text_blue fw_700"><a href="#">নিশ্চিত</a></div>
                            <div class="button1"><a href="#">পুনঃনির্ধারণ</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- callender -->
            <div class="callender">
                <img src="./assets/images/callender.png" alt="">
            </div>
            <!-- circle -->
            <div class="web_development pl_30 pt_20 pb_25">
                <h5 class="fw_300 text_gray">ওয়েব ডেভেলাপমেন্ট</h5>
                <div class="avarage_overview">
                    <!-- left -->
                    <!-- avarage_circle -->
                    <div class="avarage_circle mt_30">
                        <div role="progressbar_circle" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                            style="--value:75"></div>

                    </div>
                    <!-- right -->
                    <div class="lang_avarage_main">
                        <!-- html percent -->
                        <div class="lang_avarage_percent">
                            <div class="html_percent">
                                <p class="text_sm text_primary">HTML</p>
                                <p class="text_sm text_primary fw_700">88%</p>
                            </div>

                        </div>
                        <!-- css percent -->
                        <div class="lang_avarage_percent">
                            <div class="html_percent">
                                <p class="text_sm text_primary">CSS</p>
                                <p class="text_sm text_primary fw_700">45%</p>
                            </div>

                        </div>
                        <!-- JAVASCRIPT percent -->
                        <div class="lang_avarage_percent">
                            <div class="html_percent">
                                <p class="text_sm text_primary">JAVASCRIPT</p>
                                <p class="text_sm text_primary fw_700">65%</p>
                            </div>

                        </div>
                        <!-- html percent -->
                        <div class="lang_avarage_percent">
                            <div class="html_percent">
                                <p class="text_sm text_primary">RUBY ON RAILS</p>
                                <p class="text_sm text_primary fw_700">75%</p>
                            </div>

                        </div>
                        <!-- html percent -->
                        <div class="lang_avarage_percent">
                            <div class="html_percent">
                                <p class="text_sm text_primary">C++</p>
                                <p class="text_sm text_primary fw_700">50%</p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- learn info -->
                <div class="self_info mr_31 mt_40">
                    <div class="self_single_info asignment">
                        <p class="text_primary fw_300">Asignment</p>
                        <p class="text_primary fw_700">45/80</p>
                    </div>
                    <div class="self_single_info asignment">
                        <p class="text_primary fw_300">Lesson Learned</p>
                        <p class="text_primary fw_700">90/125</p>
                    </div>
                    <div class="self_single_info asignment">
                        <p class="text_primary fw_300">Lessons</p>
                        <p class="text_primary fw_700">156/240</p>
                    </div>
                </div>

            </div>
    </section>
</div>
@endsection