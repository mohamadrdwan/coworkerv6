@extends('layouts.app')
@section('content')
    <div id = "wrapper">
    <div id = "left" >
        <div class="flow">
<div id="signin">

<form method="POST" action="{{ route('login') }}">
    @csrf

    <h1 class="title-form Pcolor">تسجيل دخول  </h1>
    <div>
        <input id="email" type="email" placeholder="البريد الألكتروني أو الهاتف " class="text-input" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    </div>
    <div>
        <input id="password" type="password" placeholder="كلمة المرور  " class="text-input" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>
    <!--<button onclick="dashboard.html" type="submit" class=" btn btn-background-slide primary-btn" class="shape">-->
         <!-- <a class="cmail" href="../html/dashboard.html" > -->
            <!--دخول-->
        <!-- </a> -->
    <!--</button>-->
    <button type="submit" class=" btn btn-background-slide primary-btn" class="shape">
        {{ __('دخول') }}
    </button>
  
    <div class="links">
        @if (Route::has('password.request'))
                <a class="forget" href="{{ route('password.request') }}">
                    نسيت كلمة المرور ؟
                </a>
            @endif
        <!--<a class="forget">نسيت كلمة المرور ؟</a>-->
    </div>
</form>   
<footer id= "main-footer">
    <a href="{{ route('need') }}">تحتاج مساعدة ؟</a>
</footer>
</div></div>
    </div>
    <div id ="right">
        <div class = "logo">
            <img src="assets/images/logo.png" alt="Coworker">
        </div>

    </div>
</div>
<!-- <div class="ftxt"> www.OnlineWebFonts.Com </div> -->
<!-- <script src="js/jquery-3.6.0.min.js"></script> -->

<!-- <script src="js/bootstrap.min.js"></script> -->
    @endsection
