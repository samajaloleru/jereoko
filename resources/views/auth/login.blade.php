@extends('layouts.app')

@section('content')
    <!-- SAB BANNER START-->
    <div class="sab_banner overlay">
        <div class="container">
            <div class="sab_banner_text">
                <h2>Login</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- SAB BANNER END-->
    
    <!--D HELP LOGIN WRAP START-->
    <div class="city_login_wrap">
        <div class="container">
            <div class="city_login_list">
                <div class="city_login">
                    <h4>sing in</h4>
                    <p>welcome back ; sign in your account</p>
                    <form method="post" id="commentform1" class="city_comment_form_login">
                        <div class="city_commet_field">
                            <label>username or email address</label>
                            <input placeholder="username or email address" name="author" type="text" value="" data-default="Name*" size="30" required>
                        </div>
                        <div class="city_commet_field">
                            <label>password</label>
                            <input placeholder="password" name="author" type="text" value="" data-default="Name*" size="30" required>
                        </div>
                        <div class="city_checked">
                            <div class="checkbox_radio">
                                <input id="forget" type="checkbox" />
                                <label for="forget">Forget Paswword</label>
                            </div>
                            <a class="city_forget" href="#">forgotten password</a>
                        </div>
                        <a class="theam_btn" href="#">login</a>
                    </form>	
                    <span class="city_or">or</span>
                </div>
                <div class="city_login register">
                    <h4>create new account</h4>
                    <p>welcome back ; sing in your account</p>
                    <form method="post" id="commentform" class="city_comment_form_login">
                        <div class="city_commet_field">
                            <label>email address</label>
                            <input placeholder=" email address" name="author" type="text" value="" data-default="Name*" size="30" required>
                        </div>
                        <a class="theam_btn" href="#">register</a>
                    </form>
                    <div class="city_register_list">
                        <h6>sing up today and you will be able to:</h6>
                        <ul class="city_checkout_list">
                            <li><a href="#">speed your way through thr checkout</a></li>
                            <li><a href="#">speed your way through thr checkout</a></li>
                            <li><a href="#">speed your way through thr checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--D HELP LOGIN WRAP END-->
    
    <!--CITY REQUEST WRAP START-->
    <div class="city_requset_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="city_request_list">
                        <div class="city_request_row">
                            <span><i class="fa icon-question"></i></span>
                            <div class="city_request_text">
                                <span>Recent</span>
                                <h4>Top Request</h4>
                            </div>
                        </div>
                        <div class="city_request_link">
                            <ul>
                                <li><a href="#">Pay a Parking Ticket</a></li>
                                <li><a href="#">Building Violation</a></li>
                                <li><a href="#">Affordable Housing</a></li>
                                <li><a href="#">Graffiti Removal</a></li>
                                <li><a href="#">Civil Service Exams</a></li>
                                <li><a href="#">Rodent Baiting</a></li>
                                <li class="margin0"><a href="#">Cleaning</a></li>
                                <li class="margin0"><a href="#">Uncleared Sidewalk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="city_request_list">
                        <div class="city_request_row">
                            <span><i class="fa icon-shout"></i></span>
                            <div class="city_request_text">
                                <span>Recent</span>
                                <h4>Announcement</h4>
                            </div>
                        </div>
                        <div class="city_request_link">
                            <ul>
                                <li><a href="#">Pay a Parking Ticket</a></li>
                                <li><a href="#">Building Violation</a></li>
                                <li><a href="#">Affordable Housing</a></li>
                                <li><a href="#">Graffiti Removal</a></li>
                                <li><a href="#">Civil Service Exams</a></li>
                                <li><a href="#">Rodent Baiting</a></li>
                                <li class="margin0"><a href="#">Cleaning</a></li>
                                <li class="margin0"><a href="#">Uncleared Sidewalk</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>		
@endsection