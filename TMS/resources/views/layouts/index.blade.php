<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- google icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="row justify align-items">
                <div class="col">
                    @foreach($logos as $logo)
                    <img src="/storage/{{$logo->logo}}" height="50px" width="50px">
                    @endforeach
                </div>
                <div class="col">
                    <div class="header_text">
                        <ul>
                            
                            @foreach ($navbars as $navbar)
                            @if (count($navbar->subnavbar) > 0)

                            
                            <li class="dropdown"><a href="{{$navbar->navbar}}">{{$navbar->navbar}}<i class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-nav">
                                    @foreach($navbar->subnavbar as $sub)
                                    <li><a href="{{$sub->subnavbar}}">{{$sub->subnavbar}}</a></li>
                                    
                                    {{-- <li><a href="#">Walling &amp; Fencing</a></li>
                                    <li><a href="#">jee </a></li>
                                    <li><a href="#">neet</a></li> --}}
                                    
                                    @endforeach
                                </ul>
                            </li>
                            @else
                            
                            <li><a href="{{$navbar->navbar}}">{{$navbar->navbar}}</a></li>
                            @endif
                            
                            @endforeach

                        @guest
                            
                        {{-- <li><a href="{{ route('login')}}">Login</a></li> --}}
                        <li><a href="login">Login</a></li>
                        <li><a href="registration">Register</a></li>
                        {{-- <li><a href="{{ route('registration')}}">Register</a></li> --}}
                        
                        @else

                        <li><a href="logout">Logout</a></li>

                        @endguest
                           
                             {{--<li><a href="contact">Contact Us</a></li>
                            <li><a href="about">About Us</a></li> --}}
                        
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="number">
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-phone"></i></a></li>
                            <li><a href="#">+91 8905512020</a></li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </header>
    <div class="marging"></div>

    <!-- -------------- section 1 --------------  -->

    <section class="se_1">
        <div class="container">
            <div class="row align-items">
                <div class="col_50">
                    <div class="se_1_text">
                        @foreach($sliders as $slider)
                        <h1>{{$slider->title}}</h1>
                        <button>Join Us</button>
                        <p>{{$slider->description}}</p>
                    </div>
                </div>
                <div class="col_50">
                    <div class="se_1_img">
                        <img src="/storage/{{$slider->image}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- -------------- section 2 --------------  -->

    <section class="se_2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="se2_img_text">
                        <p>OUR FEATURES</p>
                        <h4>WebSankul Is One Of The Best Online Platform For Competitive Exam Preparation In Gujarat.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col_30">
                    <div class="card">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h4>Best Educators</h4>
                        <p>We have expert faculties from all over Gujarat who have decades of experience in their respective field.</p>

                    </div>
                </div>
                <div class="col_30">
                    <div class="card">
                        <i class="fas fa-mobile-alt"></i>
                        <h4>Learn anytime, anywhere</h4>
                        <p>Additionally, we offer a mobile app for online courses as well as the offline course on a pendrive.</p>

                    </div>
                </div>
                <div class="col_30">
                    <div class="card">
                        <i class="fa-solid fa-indian-rupee-sign"></i>
                        <h4>Affordable Education</h4>
                        <p>Quality education must be made accessible for everyone. We provide all courses at extremely low prices. </p>
                    </div>
                </div>
                <div class="col_30">
                    <div class="card">
                        <i class="fab fa-leanpub"></i>
                        <h4>Smart Study Plan</h4>
                        <p>To help all students achieve their goals and objectives, we provide them with practical study schedules.</p>
                    </div>
                </div>
                <div class="col_30">
                    <div class="card">
                        <i class="fas fa-book"></i>
                        <h4>Quality Materials</h4>
                        <p>Our inhouse content team prepare quality content for materials, books, Ebooks, PDFs etc.</p>
                    </div>
                </div>
                <div class="col_30">
                    <div class="card">
                        <i class="fas fa-file-download"></i>
                        <h4>Free Current affairs</h4>
                        <p>We provide most recent news & current affairs for free, so that students may find everything in one</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------- section 3 --------------  -->

    <section class="se_3">
        <div class="container">
            <div class="row align-items">
                <div class="col_50">
                    <div class="se_3_img">
                        <img src="assets/img/1st-home-image-min.png" alt="">
                    </div>
                </div>

                <div class="col_50">
                    <div class="se_3_text">
                        <h5>WHAT WE PROVIDE !</h5>
                        <h4>Websankul is a one-stop solution for all your needs! Providing offline batch to online courses and books.</h4>
                        <p>Our online and offline coaching academy offer you the best training in preparation for various competitive exams like GPSC, Dy.SO, Dy. Mamlatdar, STI, PI, PSI, Constable, Talati, Junior Clerk, Tet/Tat, Forest dept., FHW, MPHW etc.</p>
                        <p>Books and study resources are crucial for passing any competitive exam. To help you attain your desired result, WebSankul Publication has Published more than 60 books.</p>
                    </div>
                    <div class="row">
                        <div class="col_50">
                            <div class="se_3_text1">
                                <p> <i class="fas fa-check-circle"></i> Academy</p>
                                <p> <i class="fas fa-check-circle"></i>Publication</p>
                                <p> <i class="fas fa-check-circle"></i>Reading Library</p>
                            </div>
                        </div>
                        <div class="col_50">
                            <div class="se_3_text1">
                                <p><i class="fas fa-check-circle"></i>Digital Class</p>
                                <p><i class="fas fa-check-circle"></i>Pendrive Courses</p>
                                <p><i class="fas fa-check-circle"></i>Mock Interview</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------- section 4 --------------  -->

    <section class="se_4">
        <div class="container">
            <div class="row align-items">
                <div class="col_50">
                    <div class="se_3_text">
                        <h5>WHAT MAKES US DIFFERENT !</h5>
                        <h4>Visit Websankul to crack any competitive exam.</h4>
                        <p>WebSankul is one among the leading coaching institute in Gujarat. Our faculty members have vast experience in teaching various competitive exams. We offer free demo classes for students who want to know about our services before
                            joining us. Our low prices, high-quality teaching, and robust materials are designed to get you the best results.</p>
                    </div>
                    <div class="row">
                        <div class="col_50">
                            <div class="se_3_text1">
                                <p> <i class="fas fa-check-circle"></i> Lower Price Guarantee</p>
                                <p> <i class="fas fa-check-circle"></i>Roadmap of Success</p>
                            </div>
                        </div>
                        <div class="col_50">
                            <div class="se_3_text1">
                                <p><i class="fas fa-check-circle"></i>Best Teaching</p>
                                <p><i class="fas fa-check-circle"></i>Free Demo Lecture</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col_50">
                    <div class="se_4_img">
                        <img src="assets/img/2nd-home-image-min.png" alt="">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------- section 5 --------------  -->

    <section class="se_5">
        <div class="container">
            <div class="row align-items">
                <div class="col_40">
                    <div class="se_5_text">
                        <h5>WHY WEBSANKUL ?</h5>
                        <h4>Students from all over Gujarat have faith on us.</h4>
                    </div>
                </div>
                <div class="col_20">
                    <div class="youtube">
                        <i class="fa-brands fa-4x fa-youtube"></i>
                        <h4>738k+</h4>
                        <p>Subscribers</p>
                    </div>
                </div>
                <div class="col_20">
                    <div class="instagram">
                        <i class="fa-brands fa-4x fa-instagram"></i>
                        <h4>159k+</h4>
                        <p>Followers</p>
                    </div>
                </div>
                <div class="col_20">
                    <div class="google">
                        <i class="fa-brands fa-4x fa-google-play"></i>
                        <h4>450k+</h4>
                        <p>Downloads</p>
                    </div>
                </div>
                <div class="col_20">
                    <div class="stars">
                        <i class="fa-solid fa-4x fa-star"></i>
                        <h4>4.6</h4>
                        <p>Ratings</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------- section 6 --------------  -->

    <section class="se_6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="se_6_text">
                        <h4>Begin Your Path To Become an Officer With WebSankul</h4>
                        <p>Just one click away to start your journey to become an officer</p>
                    </div>
                </div>
            </div>
            <div class="row padding">
                <div class="col_30">
                    <div class="se_6_text1">
                        <h4>1000 +</h4>
                        <p>Passout Students</p>
                    </div>
                </div>
                <div class="col_30">
                    <div class="se_6_text1">
                        <h4>6000 +</h4>
                        <p>online Videos</p>
                    </div>
                </div>
                <div class="col_30">
                    <div class="se_6_text1">
                        <h4>30 +</h4>
                        <p>Expert Educators</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------- section 7 --------------  -->

    <section class="se_7">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="se_7_text">
                        <h4>Testimonials</h4>
                        <p>Websankul has a proven track record of success. Our past students have obtained ranks in the top 10% and above, with some even becoming state toppers. Here are some feedbacks of them.</p>
                    </div>
                </div>
            </div>


            <div class="row padding">
                <div class="col_50">
                    <div class="row">
                        <div class="col-12">
                            <div class="se_7_slider_1_text">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>All the faculties are very exceptional. They have covered almost all topics. There are many videos on various topics of the syllabus. Great work and effort with an affordable price. In every video, they tried their best.
                                    I am very happy and satisfied with our app, faculty and content. I have only one suggestion, the cvidios should be easily played back and forth.</p>
                                <img src="assets/img/user_female.png.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>



                <div class="col_50">

                </div>
            </div>
        </div>
    </section>

    <!-- -------------- section 8 --------------  -->


    <section>
        <div class="se_8">
            <div class="container">
                <div class="row padding">
                    <div class="col-12">
                        <div class="se_8_text">
                            <h4>How to Enroll in WebSankul Online courses</h4>
                        </div>

                    </div>
                </div>
                <div class="row align-items">
                    <div class="col_50 corsae">
                        <div class="se_8_mobile">
                            <img src="assets/img/s9-black.png" alt="">
                            <div class="img_box">
                                <div class="kaushik"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col_50">
                        <div class="row align-items padding1">
                            <div class="col_20">
                                <div class="se_8_icon">
                                    <span class="material-symbols-outlined">download</span>
                                </div>

                            </div>
                            <div class="col_80">
                                <div class="se_8_text1">
                                    <h4>Download The App</h4>
                                    <p>You can easily download the application from play store by just writing websankul in the search bar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items padding1">
                            <div class="col_20">
                                <div class="se_8_icon">
                                    <span class="material-symbols-outlined">logout</span>
                                </div>

                            </div>
                            <div class="col_80">
                                <div class="se_8_text1">
                                    <h4>Sign up Now</h4>
                                    <p>You can easily sign up with your mobile number.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items padding1">
                            <div class="col_20">
                                <div class="se_8_icon">
                                    <span class="material-symbols-outlined md-48">subscriptions</span>
                                </div>

                            </div>
                            <div class="col_80">
                                <div class="se_8_text1">
                                    <h4>Subscription</h4>
                                    <p>ust pay a short amount to get access to the premium videos which can help you out to clear any competitive exams</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="google_play">
                            <a href="#">
                                <img src="assets/img/google-play-badge.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- -------------- section 9 --------------  -->


    <section class="se_9">
        <div class="container">
            <div class="row align-items">
                <div class="col_50">
                    <div class="se_9_img">
                        <img src="assets/img/inquiry-min.png" alt="">
                    </div>
                </div>
                <div class="col_50">
                    <form class="forme_color" action="" method="post">
                        @csrf
                        <input type="text" name="name" placeholder="name">
                        <input type="tel" name="mobile_number"placeholder="mobile_number">
                        <select name="mode_of_education" id="">
                            <option value="online ">Online Course</option>
                            <option value="offline ">Offline Admission</option>
                        </select>
                        <select name="course" id="">
                            <option value="Jee">JEE</option>
                            <option value="Neet">NEET</option>
                            {{-- <option value="GPSC Class 1/2">GPSC Class 1/2</option>
                            <option value="Forest Guard">Forest Guard</option>
                            <option value="Talati &amp; Jr. Clerk">Talati &amp; Jr. Clerk</option>
                            <option value="GPSC Mains">GPSC Mains</option>
                            <option value="Other">Other</option> --}}
                        </select>
                        {{-- <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea> --}}
                        {{-- <div class="g-recaptcha" data-sitekey="your_site_key"></div> --}}
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer_sec">
        <div class="container">
            <div class="row">
                <div class="col_25 f_ma">
                    <div class="logo_img">
                        <img src="./img/websankul-logo.webp" alt="">
                    </div>
                    <div class="logo_text">
                        <p>© 2022 WebSankul Pvt. Ltd. All rights reserved.</p>
                    </div>

                    <div class="logo_icon">
                        <a href="#"><i class="fa-brands fa-facebook foot_facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube  foot_youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin  foot_linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram  foot_instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-telegram  foot_telegram "></i></a>
                    </div>
                </div>


                <div class="col_25 f_ma">
                    <div class="footer_text">
                        <h3> Get in Touch</h3>
                        <p>311, WebSankul, Shalin Galleria Complex, 3rd Floor, Sangeet Circle G1, Gandhinagar-382006</p>
                        <a href="tel:+917777991357 ">+917777991357 ,</a>
                        <a href="tel:+917777991352">+917777991352</a>
                        <a href="mail:hello@websankul.org">hello@websankul.org</a>
                    </div>

                </div>

                <div class="col_25 f_ma">
                    <div class="footer_list ">
                        <h3>Learn More</h3>

                        <div class="f_list">
                            <ul>
                                <li><a href="#">General Course</a></li>
                                <li><a href="#">Talati & Jr. Clerk</a></li>
                                <li><a href="#">Forest</a></li>
                                <li><a href="#">Mission GPSC</a></li>
                                <li><a href="#">TAT & TAT</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col_25 f_ma">
                    <div class="footer_list ">
                        <h3>Quick Links</h3>

                        <div class="f_list">
                            <ul>
                                <li><a href="#">about</a></li>
                                <li><a href="#">contact</a></li>
                                <li><a href="#">privacy policy </a></li>
                                <li><a href="#">Mission GPSC</a></li>
                                <li><a href="#">trems & conditions </a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>

            

    {{-- <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>
    <script type="text/javascript">
        var onloadCallback = function() {
            alert("grecaptcha is ready!");
        };
    </script> --}}


</body>

</html>