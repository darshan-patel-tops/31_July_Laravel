@include('layouts.header')
<section class="contact_sec1">
    <div class="container">
        <div class="row align-items">
            <div class="col_50">
                <div class="contact_text">
                    <h3>Contact us​</h3>
                    <h5> We love conversations. let's talk! </h5>
                </div>
            </div>
            <div class="col_50">
                <div class="contact_img">
                    <img src="assets/img/img/contact-us-hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>



<section class="contact_sec2">
    <div class="container">
        <div class="row">
            <div class="col_50">
                <div class="contact_box">
                    <div class="contact_box_text">
                        <h3>Contact Us</h3>


                        <form action="" method="post">
                            @csrf

                            <label for="name">name</label>
                            <input type="text" id="name" name="name" placeholder="name">
                            <label for="mobile_number">mobile_number</label>
                            <input type="text" id="mobile_number" name="mobile_number" placeholder="mobile_number">
                            <label for="email"> email</label>
                            <input type="email" id="email" name="email"placeholder="email">
                            
                            {{-- <div class="blue_box">
                                <div class="box_left">
                                    <p>Recaptcha requires verification. </p>
                                    <p> <span>Privacy</span> <span>policy</span></p>
                                </div>
                            </div> --}}

<div class="col-6">
    <button type="submit" class="submit"> send</button>

</div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col_50">
                <div class=" contact_box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14685.81114675293!2d72.50863949793711!3d23.04385596814998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b767b0a48ed%3A0x713f82e619ac7868!2sTOPS%20Technologies!5e0!3m2!1sen!2sin!4v1672127990484!5m2!1sen!2sin"
                        width="100%" height="546px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact_sec2">
    <div class="container">
        <div class="row">
            <div class="col_30">
                <div class="text_box">

                    <div class="icon_text">
                        <a href=""><i class="fa-solid fa-location-dot"></i></a>
                        <h3> <a href="">head office</a> </h3>
                        <p>311, Shalin Galleria Complex, Sangeet Circle G1. Ghandhinagar, Gujarat, 382006</p>
                    </div>

                </div>
            </div>
            <div class="col_30">
                <div class="text_box">

                    <div class="icon_text">
                        <a href=""><i class="fa-solid fa-phone"></i></a>
                        <h3> <a href="tel:7777991357">Contact Us</a> </h3>

                        <p>CALL US TODAY!</p>
                        <p> <a href="tel:7777991357">+91 7777991357</a> ,<a href="tel:7777991352">+91
                                7777991352</a></p>
                    </div>

                </div>
            </div>
            <div class="col_30">
                <div class="text_box">

                    <div class="icon_text">
                        <a href=""><i class="fa-solid fa-envelopes-bulk"></i></a>
                        <h3> <a href="mailto:hello@websankul.org">Mail us</a> </h3>
                        <p>WE'RE STANDING BY</p>
                        <p><a href="mailto:hello@websankul.org">hello@websankul.org</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
