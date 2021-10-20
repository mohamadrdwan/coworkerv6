@extends('layouts.needhelp')

@section('content')
<div class="body">
  <div id="left">
    <div class='logo'>
      <!-- <div class="img"><img src="../assets/images/logo.png" alt="Coworker"></div> -->
     
      <div class="contactInfo">
        <div class="box">
          <div class="slogo" > <img src="{{ asset('/assets/images/slogo.png') }}"> </div>
    
          <div class = "text">
            <h3>تواصل معنا </h3>
    
          </div></div>
        <div class="box">
          <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          <div class="text">
            <h5 style="text-align: right;">عناوين المراكز </h5>
            <p style="text-align: right;"> دمشق / البرامكة</p><br>
            <p>دمشق / الجسر الابيض</p>
          </div>
        </div>
        <div class="box">
          <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
          <div class="text">
            <h5 style="text-align: right;">الايميل</h5>
            <p style="text-align: right;"> Coworker2021@gmail.com</p><br>
            </div>
        </div>
        <div class="box">
          <div class="icon"><i class="fa fa-phone"></i></div>
          <div class="text">
            <h5 style="text-align: right;">الجوال </h5><br>
            <p> 0963 934036761</p>
                      </div>
        </div>
      </div>

    </div>

  </div>
  <div id="right">
    <!-- <img src="../assets/images/logo.png" alt="Coworker"> -->

    <div id="container"></div>
  
      <div class="flip-card" on-click="toggle('flipCard')"></div>
      <div class="contact-wrapper">
        <div class="envelope {{ 'flipCard' ? 'active' : '' }} ">
        <div class="back paper"></div>
            <div class="content">
              <div class="form-wrapper">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
                </ul>
                </div>
                @endif
              <form method="post" action="{{url('need')}}">
                {{csrf_field()}}
                @if(session()->has('message'))
                  <div class="alert alert-success">
                    {{ session()->get('message') }}
                  </div>
                  @endif
                  <div class="top-wrapper">
                    <div class="input">
                      <label>الاسم</label>
                      <input type="text" name="name"/>
                    </div>
                    <div class="input">
                      <label>الجوال</label>
                      <input type="text" name="phone"/>
                    </div>
                    <div class="input" >
                      <label>الايميل</label>
                      <input type="text" name="email"/>
                    </div>
                    <div class="input " >
                      <label>تحديد الموضوع</label>
                      <!-- <input type="text" name="_subject"/> -->
                <div>  
                <select name="subject" style="width: 100%;">
                    <!-- <option value="-1" ><h3>: حدد موضوع</h3></option> -->
            <option value="شكاوي" class="custom-select"><h3>شكاوي</h3></option>
            <option value="اقتراحات"><h3>اقتراحات</h3></option>
            <option value="أخرى"><h3>أخرى </h3></option>
                  </select></div>
                    </div>
                    <div class="input">
                      <label>الرسالة</label>
                      <textarea rows="5" name="message"></textarea>
                    </div>
                    <div class="submit">
                      <button type="submit" class="submit-card">
                        ارسال
                    </button>
                    </div>
                  </div>
                  <div class="bottom-wrapper"></div>
                </form>
              </div>
            </div>
            <div class="front paper"></div>
          </div>
        </div>
  </div>

</div>

  <!-- <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script> -->
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
@endsection
