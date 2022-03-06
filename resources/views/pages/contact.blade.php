@extends('layouts.app')

@section('content')
    <div class="architecture_breadcrumb-area bg-img" data-bg="img/bg/architecture-breadcrumb_bg.jpg" style="background-image: url(&quot;img/bg/architecture-breadcrumb_bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 ml-md-auto">
                    <div class="breadcrumb_box text-start ml-md-5">
                        <h4 class="text-color-secondary mb-10 font-weight--normal">Contact</h4>
                        <h2 class="breadcrumb-title text-color-primary mb-10">Contact us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-wrapper-reveal">

        <!--============ Personal Contact Us Area Start ============-->
        <div class="personal-contact-us-area  section-space--ptb_120">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title-wrap">
                            <h3 class="mb-20 theme-color-default">Call us or <br> Visit us</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-us-info section-space--mb_40">
                            <div class="section-title-wrap">
                                <p class="mb-15 font-weight--light">Most popular typesetting, remaining are essentially was popu
                                    larised in the 1960s with the release of uncov er many web sites
                                    in their infancy. Various are versions have evolved</p>
                            </div>

                            <div class="contact-widget__wrap section-space--mt_50">
                                <div class="single-footer-widger mb-30">
                                    <h5 class="mb-10">Address</h5>
                                    <p>275 South Poal, 4th Floor Central Plaza, Main Town, New Yourk, USA</p>
                                </div>
                                <div class="single-footer-widger mb-30">
                                    <h5 class="mb-10">Phone</h5>
                                    <p>01254 879 658, 65987 456 987 <br> 01256 879 857, 01345 678 123</p>
                                </div>
                                <div class="single-footer-widger mb-30">
                                    <h5 class="mb-10">Web</h5>
                                    <p>
                                        <a href="#">info@example.com</a> <br>
                                        <a href="#">www.example.com</a>
                                    </p>
                                </div>

                                <div class="social-share">
                                    <h5 class="mb-10 personal-share-title">Also find me here</h5>
                                    <ul class="list ht-social-networks default-color">

                                        <li class="item">
                                            <a href="https://facebook.com/" target="_blank">
                                                <i class="fa fa-facebook-f link-icon"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="https://twitter.com/" target="_blank">
                                                <i class="fa fa-twitter link-icon"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="https://instagram.com/" target="_blank">
                                                <i class="fa fa-instagram link-icon"></i>
                                            </a>
                                        </li>
                                        <li class="item">
                                            <a href="https://linkedin.com/" target="_blank">
                                                <i class="fa fa-linkedin link-icon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-us-form section-space--mb_40">
                            <form id="contact-form" action="https://hasthemes.com/file/mail.php" method="post">
                                <div class="contact-form__one ml-lg-5">

                                    <div class="contact-title section-space--mb_30">
                                        <h4 class="text-white">Send us a message</h4>
                                    </div>

                                    <div class="contact-input input-row">
                                        <div class="contact-inner input-col-5">
                                            <input name="con_name" type="text" placeholder="Name *">
                                        </div>
                                        <div class="contact-inner input-col-5">
                                            <input name="con_email" type="email" placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="con_email" type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="con_message" placeholder="Message*"></textarea>
                                    </div>
                                    <div class="comment-submit-btn text-end">
                                        <button class="ht-btn ht-btn-sm personal-contact-btn" type="submit">Submit</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Personal Contact Us Area End ============-->


    </div>
@endsection
