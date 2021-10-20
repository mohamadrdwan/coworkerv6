@extends('layouts.mtnsyr')

@section('content')
<nav class="menu">
    <div class="slogo" > <img src="{{ asset ('/assets/images/slogo.png') }}" > </div>
     <a href="#" class="menu_item menu_item--active">
       <i class="material-icons">add</i>
     </a>
     <a href="#" class="menu_item dropdow">
        <div class= "hamburger" onclick="toggleSidebar()"> <i class="material-icons ">menu</i></div>
       </a>
     <a href="#" class="menu_item " >
       <i class="material-icons">search</i>
     </a>
     <a href="#" class="menu_item" >
       <i class="material-icons">bookmark</i>
     </a>
     <div class="marg_bottom">
     <a href="#" class="menu_item">
         <i class="material-icons">notifications</i>
         <!-- <span class="num">7</span> -->

       </a>
     <a href="#" class="menu_item notification" >
       <i class="material-icons">person</i>
     </a>
     <a href="#" class="menu_item" >
      <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();" class="menu_item" >
         <i class="material-icons power__color ">power_settings_new</i>
       </a>
      </a>
       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
       </div>
      
  
   </nav>
   <!-- <nav>
       <div class="hum">
           <i class="ri-menu-line"></i>
           <div class="nav-text">Sidebar </div>
       </div>
   </nav> -->
    <!-- menu dynamic -->
  <div class = "backdrop" onclick="toggleSidebar()"></div>
  <div class="frontside">

  <div class="sidebar">
      <div class="sidebar_profile">
          <h3>Coworker</h3>
          <p>مدير عام</p>
      </div>
   
       <div class="sidebar_list">
         <li class ="sidebar_item"> <a href="dashboard.html" >
              <i class="material-icons">dashboard</i>الصفحة الرئيسية
            </a></li>
           <li class ="sidebar_item"> <a href="crm.html" >
            <i class="fa fa-shopping-bag" aria-hidden="true"></i> إدارة التسويق والبيع
            </a></li>
          <li class ="sidebar_item"> <a href="sales.html" >
            <i class="fa fa-id-card" aria-hidden="true"></i> المبيعات والزبائن
            </a></li>
           <li class ="sidebar_item"> <a href="servic.html" >
              <i class="material-icons">assignment_turned_in</i>الخدمات
            </a></li>
            <li class ="sidebar_item"><a href="finance.html" >
              <i class="fa fa-database" aria-hidden="true"></i>  العمليات
            </a></li>
            <li class ="sidebar_item"><a href="report.html" >
              <i class="fa fa-file-text" aria-hidden="true"></i>  تقارير 
            </a></li>
            <li class ="sidebar_item"><a href="setting.html" >
              <i class="material-icons">settings</i> الأعدادات 
            </a></li>
           
  </div>
  </div>
</div>
 </div>
</div>
<header>
<div class="container">
 <div class="btn_sidebar"><span class="fa fa-bars"></span></div>
 <div id="btn_full"><span class="fa fa-arrows-alt" aria-hidden="true"></span>
 </div><br><h1> MTN  < الخدمات > فواتير الجوال </h1>
 <!-- Search box -->
   <div class="search-box">
       <form action="" onsubmit="return false">
           <input type="text" id="search" placeholder="بحث">
           <!-- <button id="btn-search">Search</button> -->
       </form>
   </div>
   <!-- <div class="filter-box"> -->
       <!-- <a href="#" class="btn active" data-filter="alll"> الكل  </a> <div class="vl"></div>  -->
       <!-- <a href="#" class="btn" data-filter="Moard"> المورد</a> <div class="vl"></div>  -->
       <!-- <a href="#" class="btn" data-filter="moamalat">  معاملات </a> <div class="vl"></div>  -->
       <!-- <a href="#" class="btn" data-filter="serv-cor">   خدمات كوركر  </a> -->
       <!-- <a href="#" class="btn" data-filter="jewelry">Jewelry</a> -->
   <!-- </div> -->
   <div class="filter-box">
     <a href="#" class="btn active" data-filter="all"> الكل </a> <div class="vl"></div> 
     <a href="#" class="btn" data-filter="syriatel">  سيرياتيل</a> <div class="vl"></div> 
     <a href="#" class="btn" data-filter="mtn">  MTN </a>
     <!-- <a href="#" class="btn" data-filter="jewelry">Jewelry</a> -->
 </div>
</div>
</header>

<main>
<div class="slide-container">
<section class="container" id="store-services">


<div class="store-service syriatel">
<a href="#" id ="button-pop" class="button-pop" >
<img class ="img"  src="{{ asset ('/assets/images/syr.png') }}" alt="">
<div class="service-details">
 <h4>  وحدات سيرياتيل   </h4>
 <!-- <p> <span>$39.99</span> $29.99</p> -->
   <!-- <a href="#">Add to Cart</a> -->
</div></a>
</div>
<div class="store-service syriatel">
<img class ="img" src="{{ asset ('/assets/images/syr.png') }}" alt="">
<div class="service-details">
 <h4>  <a href="#" id="button-pop2" class="button-pop2">فواتير سيرياتيل  </a> </h4>
   <!-- <p> <span>$39.99</span> $29.99</p> -->
   <!-- <a href="#">Add to Cart</a> -->
</div>
</div>
<div class="store-service mtn">
<img  class ="img" src="{{ asset ('/assets/images/mtn.png') }}" alt="">
<div class="service-details">
   <h4><a href="#" id="button-pop1" class="button-pop1">وحدات MTN </a>  </h4>
  
</div>
</div>
<div class="store-service mtn">
<img class ="img" src="{{ asset ('/assets/images/mtn.png') }}" alt="">
<div class="service-details">
   <h4><a href="#" id="button-pop3" class="button-pop3"> فواتير MTN </a>  </h4>
  
</div>
</div>

</section>
</div>
</main>
<div class="bg-model">
<div class="model-content">
   <div class="close"> + </div>
   <h4>وحدات سيرياتيل</h4>
   <img src = "{{ asset ('/assets/images/syr.png') }}" alt="" style="width: 80px;" >
 <form method="post" action="{{url('preprice')}}">
  {{csrf_field()}}
  @if(session()->has('message'))
       <div class="alert alert-success">
        {{ session()->get('message') }}
       </div>
       @endif
    <row>
      <input class="pop" type="text" id ="number" name ="number" placeholder="الرقم" required>
      <input class="pop" type="text"  id ="confirm_number" placeholder="تأكيد الرقم" required></row>
      <select class="pop" name="categories" id="categories">
          <option value="" disabled selected>الرصيد</option>
          @foreach ($categories as $cat)
              <option data-value="{{ $cat ->prepay_price }}" value="{{ $cat->categories }}">
                  {{ $cat->categories }}
              </option>
          @endforeach
      </select>
         <input class="pop" name="price" id="prepay_price"type="text" placeholder="السعر" required>
         <!-- <a href= "" class="button-syr">تسديد</a> -->
         <button type="submit" class="button-syr">تسديد</button>
 </form>
</div>
</div>
<div class="bg-model1">
<div class="model-content">
   <div class="close1"> + </div>
   <h4>وحداتMTN </h4>
   <img src = "{{ asset ('/assets/images/mtn.png') }}" alt="" style="width: 80px;" >

 <form method="post" action="{{url('mtnpreprice')}}">
  {{csrf_field()}}
    <row>
      <input class="pop_mtn" type="text" name="number" id ="number"  placeholder="الرقم" required>
      <input class="pop_mtn" type="text"  id ="confirm_number" placeholder="تأكيد الرقم" required></row>

      <select class="pop_mtn" name="categories" id="mtnprecategories">
          <option value="" disabled selected>الرصيد</option>
          @foreach ($categories as $cat)
              <option data-value="{{ $cat ->prepay_price }}" value="{{ $cat->categories }}">
                  {{ $cat->categories }}
              </option>
          @endforeach
      </select>
         <input class="pop_mtn" name="price" id="mtnprepay_price"type="text" placeholder="السعر" required>
         <!-- <a href= "" class="button-syr">تسديد</a> -->
         <button type="submit" class="button-syr1">تسديد</button>
 </form>
</div>
</div>
<div class="bg-model2">
<div class="model-content">
   <div class="close2"> + </div>
   <h4>فواتير سيرياتيل</h4>
   <img src = "{{ asset ('/assets/images/syr.png') }}" alt="" style="width: 80px;">
   <form method="post" action="{{url('postprice')}}">
    {{csrf_field()}}
    <row>
      <input class="pop" type="text" id ="number" name ="number" placeholder="الرقم" required>
      <input class="pop" type="text"  id ="confirm_number" placeholder="تأكيد الرقم" required></row>
      <select class="pop" name="categories" id="post_categories">
          <option value="" disabled selected>المحول</option>
          @foreach ($categories as $cat)
              <option data-value="{{ $cat ->postpay_price }}" value="{{ $cat->categories }}">
                  {{ $cat->categories }}
              </option>
          @endforeach
      </select>
         <input class="pop" name="price" id="postpay_price"type="text" placeholder="المقبوض" required>
         <!-- <a href= "" class="button-syr">تسديد</a> -->
         <button type="submit" class="button-syr">تسديد</button>
 </form>
</div>
</div>
<div class="bg-model3">
<div class="model-content">
   <div class="close3"> + </div>
   <h4> فواتيرMTN </h4>
   <img src = "{{ asset ('/assets/images/mtn.png') }}" alt="" style="width: 80px;" >
   <form method="post" action="{{url('mtnpostprice')}}">
    {{csrf_field()}}
    <row>
      <input class="pop_mtn" type="text" id ="number" name ="number" placeholder="الرقم" required>
      <input class="pop_mtn" type="text"  id ="confirm_number" placeholder="تأكيد الرقم" required></row>
      <select class="pop_mtn" name="categories" id="mtnpost_categories">
          <option value="" disabled selected>المحول</option>
          @foreach ($categories as $cat)
              <option data-value="{{ $cat ->postpay_price }}" value="{{ $cat->categories }}">
                  {{ $cat->categories }}
              </option>
          @endforeach
      </select>
         <input class="pop_mtn" name="price" id="mtnpostpay_price"type="text" placeholder="المقبوض" required>
         <!-- <a href= "" class="button-syr">تسديد</a> -->
         <button type="submit" class="button-syr">تسديد</button>
 </form>
</div>
</div>

<script>
$('.btn_sidebar').click(function(){
 $(this).toggleClass("click");
 $('.sidebar').toggleClass("hide");
 // $('this').toggleSidebar("show");
 $('main').toggleClass("show");
 $('header >div').toggleClass("show");
 $('menu').toggleClass("show");


});
$('.sidebar_item ').click(function(){
 $(this).addClass("active").siblings().removeClass("active");
})
</script>





<script>


</script>
<script>
let fullscreen;
let fsEnter = document.getElementById("btn_full");
fsEnter.addEventListener("click", function (e) {
e.preventDefault();
if (!fullscreen) {
fullscreen = true;
document.documentElement.requestFullscreen();
// fsEnter.innerHTML = "Exit Fullscreen";
} else {
fullscreen = false;
document.exitFullscreen();
// fsEnter.innerHTML = "Go Fullscreen";
}
});

</script>
<script src="{{ asset ('/js/phon-bill.js') }}"></script>
<script src="{{ asset ('/js/jquery-3.6.0.min.js') }}"></script>

<script>
  $(function() { 
    $('#categories').change(function() {
         var optionSelected = $("option:selected", this);
         $('#prepay_price').val(optionSelected.attr("data-value"));
    }).change(); // Trigger the event
});
</script>
<script>
  $(function() { 
    $('#post_categories').change(function() {
         var optionSelected = $("option:selected", this);
         $('#postpay_price').val(optionSelected.attr("data-value"));
    }).change(); // Trigger the event
});
</script>
<script>
  $(function() { 
    $('#mtnprecategories').change(function() {
         var optionSelected = $("option:selected", this);
         $('#mtnprepay_price').val(optionSelected.attr("data-value"));
    }).change(); // Trigger the event
});
$(function() { 
    $('#mtnpost_categories').change(function() {
         var optionSelected = $("option:selected", this);
         $('#mtnpostpay_price').val(optionSelected.attr("data-value"));
    }).change(); // Trigger the event
});
</script>
@endsection