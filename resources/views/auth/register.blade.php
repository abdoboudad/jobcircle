@extends('job.layouts.layout')
@section('content')
<div class="subvisual-block subvisual-theme-1 bg-dark-green d-flex pt-60 pt-md-90 pt-lg-150 pb-30 text-white">
    <div class="pattern-image"><img src="images/bg-pattern-overlay.jpg" width="1920" height="570" alt="Pattern"></div>
    <div class="container position-relative text-center">
        <div class="row">
            <div class="col-12">
                <div class="subvisual-textbox">
                    <h1>My Account</h1>
                    <p>Create an account & Start posting or hiring talents</p>
                </div>
                <nav class="breadcrumb-nav text-white d-flex justify-content-center mt-20 mt-lg-40">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- contain main informative part of the site -->
<main class="main">
    <!-- Accounts Section -->
    <section class="section section-accounts section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-100 pt-xxl-120 pb-35 pb-md-50 pb-lg-75 pb-xl-100 pb-xxl-120">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="account-box">
                        <span class="icon">
                            <img src="images/user-icon.svg" alt="user">
                        </span>
                        <div class="account-box-frame">
                            <div class="form-head">
                                <h2>Hi, Welcome Back!</h2>
                                <p>Enter username and password to log on:</p>
                            </div>
                            <form class="contac-form" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-15 mb-md-20">
                                        <input class="form-control" type="email" placeholder="Email Address">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-15 mb-md-20">
                                        <input class="form-control" type="password" placeholder="Password">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-lg-6 mb-25">
                                        <label class="custom-checkbox mt-5 ms-10">
                                            <input type="checkbox">
                                            <span class="fake-checkbox"></span>
                                            <span class="label-text">Remember me</span>
                                        </label>
                                    </div>
                                    <div class="col-12 col-lg-6 mb-15 mb-md-20 mb-lg-25 text-center text-lg-end">
                                        <a href="#" class="link mx-10">Lost Your Password?</a>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-green btn-sm"><span class="btn-text">Login</span></button>
                                    </div>
                                </div>
                            </form>
                            <div class="social-login">
                                <strong class="title">Login with Social Network</strong>
                                <ul class="social-networks">
                                    <li><a class="facebook" href="#"><img src="images/facebook-icon.svg" alt="Facebook"></a></li>
                                    <li><a class="google" href="#"><img src="images/google-icon.svg" alt="Google"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="account-box">
                        <span class="icon">
                            <img src="images/user-icon.svg" alt="user">
                        </span>
                        <div class="account-box-frame">
                            <div class="form-head">
                                <h2>Create Account</h2>
                                <p>Start posting or hiring talents</p>
                            </div>
                        
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="nav-tab01">
                                   
                                    <form class="contac-form" action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <ul class="nav form-tabs mb-15 mb-md-20">
                                            <li>
                                                <button class="nav-link b1 active" onclick="can()" data-bs-toggle="tab" data-bs-target="#nav-tab01" type="button">Candidates</button>
                                                <input type="text" class="role1" name="role" value="condidate" hidden>
                                            </li>
                                            <li>
                                                <button class="nav-link b2"  onclick="dis()"   type="button">Employer</button>
                                                <input type="text" class="role" name="role" value="employer" hidden  disabled>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" name="name" type="name" placeholder="Complete Name">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" name="email" type="email" placeholder="Email Address">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-15 mb-md-20">
                                                <input class="form-control" name="password" type="password" placeholder="Password">
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-15 mb-md-20">
                                                <label class="custom-checkbox terms mt-5 ms-10">
                                                    <input type="checkbox">
                                                    <span class="fake-checkbox"></span>
                                                    <span class="label-text">By hitting the "Register" button, you agree to the 
                                                        <a class="link" href="#">Terms conditions</a> & <a class="link" href="#">Privacy Policy</a></span>
                                                </label>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-green btn-sm"><span class="btn-text">Register</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            
                            </div>
                            <div class="social-login">
                                <strong class="title">Login with Social Network</strong>
                                <ul class="social-networks">
                                    <li><a class="facebook" href="#"><img src="images/facebook-icon.svg" alt="Facebook"></a></li>
                                    <li><a class="google" href="#"><img src="images/google-icon.svg" alt="Google"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
     const can = ()=>{
        $('.role1').attr('disabled',false);
        $('.role').attr('disabled',true);
        $('.b1').addClass('active');
        $('.b2').removeClass('active');
    }
    const dis = ()=>{
        $('.role').attr('disabled',false);
        $('.role1').attr('disabled',true);
        $('.b2').addClass('active');
        $('.b1').removeClass('active');
    }
</script>
@endsection
