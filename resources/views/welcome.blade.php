@extends('layouts.app')

@section('content')

    <section class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-lg-2"></div>
                <div class="col-md-10 col-lg-8">
                    <div class="intro">
                        <div class="profile-img"><img src="{{ asset('/images/Kevin_Koo_Yi_Zen.jpg') }}" alt="Kevin Koo Yi Zen Full-Stack Web Developer" title="Kevin Koo Yi Zen Full-Stack Web Developer" loading="lazy"></div>
                        <h1 class="d-none">Kevin Koo Yi Zen | Full-Stack Web Developer</h1>
                        <span class="header-name"><b>Kevin Koo Yi Zen</b></span>
                        <br>
                        <span class="header-role">Full-Stack Web Developer</span>
                        <ul class="information margin-tb-30">
                            <!-- <li><b>BORN : </b>22 July, 1994</li> -->
                            <li><b>EMAIL : </b> <a href="mailto:kooyizen@outlook.com">kooyizen@outlook.com</a></li>
                            <li><b>PHONE : </b> <a href="tel:+60123658503">+60123658503</a></li>
                            <!-- <li><b>MARITAL STATUS : </b>Single</li> -->
                        </ul>
                        <ul class="social-icons">
                            <!-- <li><a href="#"><i class="ion-social-pinterest"></i></a></li> -->
                            <li><a href="https://www.linkedin.com/in/kevinkooyizen/" target="_blank"><i class="ion-social-linkedin"></i><span class="d-none">Kevin Koo Yi Zen LinkedIn Profile</span></a></li>
                            <li><a href="https://github.com/kevinkooyizen/" target="_blank"><i class="ion-social-github"></i><span class="d-none">Kevin Koo Yi Zen Github Profile</span></a></li>
                            <!-- <li><a href="#"><i class="ion-social-instagram"></i></a></li> -->
                            <!-- <li><a href="#"><i class="ion-social-facebook"></i></a></li> -->
                            <!-- <li><a href="#"><i class="ion-social-twitter"></i></a></li> -->
                        </ul>
                    </div><!-- intro -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->
    </section>

    <section class="about-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h2><b>About me</b></h2>
                        <h3 class="font-lite-black"><b>PROFESSIONAL PATH</b></h3>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">
                    <p class="margin-b-50">
                        One who is always hungry into learning new ways for optimisation and scalability. In the work environment, I would constantly try to find the most efficient methods in performing my daily routines and to also help my future self by building strong foundations whether it be improving the relationships amongst my colleagues, writing clean and scalable code or good documentation.
                    </p>

                    {{--<div id="mobile-section">
                        <h6 class="font-lite-black"><b>Skills</b></h6>
                        <ul>
                            <li>PHP & Laravel</li><br>
                            <li>Ruby & ROR</li><br>
                            <li>Javascript & Vue</li><br>
                            <li>Python</li><br>
                            <li>HTML & CSS</li><br>
                            <li>MYSQL & POSTGRESQL</li><br>
                            <li>APACHE2 & NGINX</li><br>
                            <li>GOOGLE CLOUD PLATFORM</li><br>
                            <li>REST & OOP</li><br>
                            <li>GIT</li><br>
                            <li>Ubuntu & CentOS</li>
                        </ul>
                    </div>--}}

{{--                    <button class="btn btn-primary" id="see-skills-button" onclick="seeSkills()">See all skills</button>--}}
                    {{--<br><br>

                    {{--<div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".85">
                                    <div></div>
                                    <span class="progress-title">PHP</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".85">
                                    <div></div>
                                    <span class="progress-title">Laravel</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".50">
                                    <div></div>
                                    <span class="progress-title">Symfony</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".80">
                                    <div></div>
                                    <span class="progress-title">OOP</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".85">
                                    <div></div>
                                    <span class="progress-title">JAVASCRIPT</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".60">
                                    <div></div>
                                    <span class="progress-title">VUE</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".80">
                                    <div></div>
                                    <span class="progress-title">HTML & CSS</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".50">
                                    <div></div>
                                    <span class="progress-title">WEBPACK</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".85">
                                    <div></div>
                                    <span class="progress-title">MYSQL</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".50">
                                    <div></div>
                                    <span class="progress-title">NGINX</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".30">
                                    <div></div>
                                    <span class="progress-title">APACHE2</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".80">
                                    <div></div>
                                    <span class="progress-title">GIT</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".60">
                                    <div></div>
                                    <span class="progress-title">CI/CD - CIRCLECI</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".85">
                                    <div></div>
                                    <span class="progress-title">UBUNTU</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30">
                                <div class="radial-progress" data-prog-percent=".40">
                                    <div></div>
                                    <span class="progress-title">RUBY/ROR</span>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                    </div>--}}

                    {{--<div class="row">
                        <div id="back-end-start"></div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30 back-end">
                                <div class="radial-progress" data-prog-percent=".70">
                                    <div></div>
                                    <h6 class="progress-title">PHP & LARAVEL</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-30 back-end">
                                <div class="radial-progress" data-prog-percent=".50">
                                    <div></div>
                                    <h6 class="progress-title">RUBY & ROR</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50 back-end">
                                <div class="radial-progress" data-prog-percent=".70">
                                    <div></div>
                                    <h6 class="progress-title">JAVASCRIPT</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50 back-end">
                                <div class="radial-progress" data-prog-percent=".20">
                                    <div></div>
                                    <h6 class="progress-title">VUE</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->
                        <div id="back-end-end"></div>

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50 front-end">
                                <div class="radial-progress" data-prog-percent=".40">
                                    <div></div>
                                    <h6 class="progress-title">PYTHON</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50 front-end">
                                <div class="radial-progress" data-prog-percent=".70">
                                    <div></div>
                                    <h6 class="progress-title">HTML & CSS</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50 front-end">
                                <div class="radial-progress" data-prog-percent=".60">
                                    <div></div>
                                    <h6 class="progress-title">MYSQL & <br> POSTGRESQL</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50 front-end">
                                <div class="radial-progress" data-prog-percent=".50">
                                    <div></div>
                                    <h6 class="progress-title">APACHE 2 & NGINX</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50 server">
                                <div class="radial-progress" data-prog-percent=".30">
                                    <div></div>
                                    <h6 class="progress-title">GOOGLE CLOUD PLATFORM</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50 server">
                                <div class="radial-progress" data-prog-percent=".80">
                                    <div></div>
                                    <h6 class="progress-title">REST & OOP</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50 server">
                                <div class="radial-progress" data-prog-percent=".80">
                                    <div></div>
                                    <h6 class="progress-title">GIT</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="radial-prog-area margin-b-50 server">
                                <div class="radial-progress" data-prog-percent=".70">
                                    <div></div>
                                    <h6 class="progress-title">Ubuntu & CentOS</h6>
                                </div>
                            </div><!-- radial-prog-area-->
                        </div><!-- col-sm-6-->

                    </div><!-- row -->--}}
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- about-section -->

    <experience-component></experience-component>

    <portfolio-component></portfolio-component>

    <section class="education-section purple-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h2><b>Education</b></h2>
                        <h3 class="font-lite-black"><b>ACADEMIC CAREER</b></h3>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">
                    <div class="education-wrapper">

                        <div class="education margin-b-50">
                            <h4><b>FULL STACK WEB DEVELOPER BOOTCAMP</b></h4>
                            <h5 class="font-yellow"><b>NEXT ACADEMY</b></h5>
                            <h6 class="font-lite-black margin-t-10">GRADUATED IN OCTOBER 2017 (3 MONTHS)</h6>
                        </div><!-- education -->

                        <div class="education margin-b-50">
                            <h4><b>BACHELORS IN MECHANICAL ENGINEERING WITH MANAGEMENT</b></h4>
                            <h5 class="font-yellow"><b>UNIVERSITY OF MANCHESTER</b></h5>
                            <h6 class="font-lite-black margin-t-10">GRADUATED IN JULY 2016 (3 YEARS)</h6>
                        </div><!-- education -->

                        <div class="education margin-b-50">
                            <h4><b>DIGITAL MARKETING</b></h4>
                            <h5 class="font-yellow"><b>DIGITAL MARKETING CONSULTING SDN BHD</b></h5>
                            <h6 class="font-lite-black margin-t-10">GRADUATED IN MAY 2018 (2 MONTHS)</h6>
                        </div><!-- education -->
                    </div><!-- education-wrapper -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->

    </section><!-- about-section -->

    <section class="education section white-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h2><b>Social Enterprise Experience</b></h2>
                        <h3 class="font-lite-black"><b>VOLUNTEERING</b></h3>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">

                    <div class="experience margin-b-50">
                        <h4><b>Global Brigades (Engineering), Tegucigalpa, Honduras</b></h4>
                        <h5 class="font-yellow"><b><a href="https://www.globalbrigades.org" target="_blank">https://www.globalbrigades.org</a></b></h5>
                        <h6 class="margin-t-10">June 2016</h6>
                        <p class="margin-tb-30">
                            I volunteered to be a part of this brigade to Tegucigalpa with the sole mission of improving the community’s living standard.
                            <br><br>
                            Tegucigalpa is the capital of Honduras which contains numerous villages having a huge shortage of clean water. There are plenty of villages within this state that still relies on the traditional water pumping system to obtain their daily need of water. The villages also lack proper water treatment processes which have led to plenty of health problems.
                            <br><br>
                            I had the golden opportunity in putting some of my engineering knowledge that I have acquired from my degree into real-life applications:</p>
                        <ul class="list margin-b-30">
                            <li>Data collection of water requirement through surveying the village (flow rate, pressure and volume)</li>
                            <li>Design of pipe diameter and lengths</li>
                            <li>Design of pipeline schematic</li>
                            <li>Marking of pipeline schematic at the village</li>
                        </ul>
                    </div><!-- experience -->

                    <div class="experience margin-b-50">
                        <h4><b>Kechara Soup Kitchen, Kuala Lumpur</b></h4>
                        <h5 class="font-yellow"><b><a href="http://www.kechara.com/soup-kitchen" target="_blank">http://www.kechara.com/soup-kitchen</a></b></h5>
                        <h6 class="margin-t-10">December 2011</h6>
                        <p class="margin-tb-30">
                            Kechara Soup Kitchen is an NPO established in Malaysia with a mission to provide to the poor and homeless around Malaysia. Although the organisation was established by a Buddhist Spiritual Guide, they believe in respecting others’ beliefs and do not discriminate when providing to the needy. The organisation does not only limit themselves to providing food to the homeless but also assist them in finding jobs for them to be able to sustain themselves.
                            <br><br>
                            I have participated in more than 10 occasions on the following social activities:
                        </p>
                        <ul class="list margin-b-30">
                            <li>Packing and distribution of food to homeless</li>
                            <li>Helping survey homeless on their daily activities and also find suitable jobs for them</li>
                        </ul>
                    </div><!-- experience -->

                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->

    </section><!-- experience-section -->

    <section class="purple-section section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="heading">
                        <h2><b>Personal Interests</b></h2>
                        <h3 class="font-lite-black"><b>LEISURE</b></h3>
                    </div>
                </div><!-- col-sm-4 -->
                <div class="col-sm-8">
                    <div class="education-wrapper">
                        <div class="education margin-b-50">
                            <h4><b>CODING</b></h4>
                            <p class="margin-tb-30 font-semi-white">I consistently want to learn as much as possible in the world of technology as I am very intrigued by it’s potential. I am currently in the midst of a <a href="https://www.coursera.org/learn/machine-learning">Machine Learning course</a> as I believe automation is the key to the future of all industries and am extremely fascinated in systems that are capable of making decisions on their own e.g. self-driving cars.</p>
                        </div><!-- education -->

                        <div class="education margin-b-50">
                            <h4><b>FUTSAL</b></h4>
                            <p class="margin-tb-30 font-semi-white">To keep myself fit, I enjoy a weekly game of 5-a-side futsal with my friends. I usually prefer the goalkeeper position whenever I am to play casually or even competitively throughout the past five years.</p>
                        </div><!-- education -->

                        <div class="education margin-b-50">
                            <h4><b>3D Modeling (Solidworks)</b></h4>
                            <p class="margin-tb-30 font-semi-white">SolidWorks is an AutoCAD software which I have picked up throughout my degree. During seasonal holidays, I enjoy freelancing and performing 3D Modeling works for some extra side income. It also acts as good practice as I am required to do a lot of 3D Modeling work for my degree. A portfolio of my personal work is available upon request.</p>
                        </div><!-- education -->

                        <div class="education margin-b-50">
                            <h4><b>Drumming</b></h4>
                            <p class="margin-tb-30 font-semi-white">When young, I was initially introduced to the music world by learning how to play the piano. I then felt like I didn’t manage to feel any connection to music as compared to playing the drums which I then switched to. I realised I  enjoy hearing music with a heavy base and began my love for drums. I am a certified grade 8 drummer.</p>
                        </div><!-- education -->

                        <div class="education margin-b-50">
                            <h4><b>E-Sports</b></h4>
                            <p class="margin-tb-30 font-semi-white">During my downtime and when I am not working/studying, when I take breaks, I enjoy immersing myself in online strategy games which requires the combination of teamwork as well as planning and strategising. Eg. Dota 2, Artifact.</p>
                        </div><!-- education -->
                    </div><!-- education-wrapper -->
                </div><!-- col-sm-8 -->
            </div><!-- row -->
        </div><!-- container -->

    </section><!-- about-section -->
@endsection
