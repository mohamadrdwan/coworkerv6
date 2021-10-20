@extends('layouts.services')

@section('content')
<nav class="menu">
    <div class="slogo" > <img src="{{ asset ('assets/images/slogo.png') }}" > </div>
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
          <h3>محمد الأحمد</h3>
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
<!-- end menu dynamic -->
<header>
<div class="container">
 <div class="btn_sidebar"><span class="fa fa-bars"></span></div>
 <div id="btn_full"><span class="fa fa-arrows-alt" aria-hidden="true"></span>
 </div><br><h1>    الخدمات  </h1>
   <!-- Search box -->
   <div class="search-box">
       <form action="" onsubmit="return false">
           <input type="text" id="search" placeholder="بحث">
           <!-- <button id="btn-search">Search</button> -->
       </form>
   </div>
   <div class="filter-box">
       <a href="#" class="btn active" data-filter="alll"> الكل  </a> <div class="vl"></div> 
       <a href="#" class="btn" data-filter="Moard"> المورد</a> <div class="vl"></div> 
       <!-- <a href="#" class="btn" data-filter="moamalat">  معاملات </a> <div class="vl"></div>  -->
       <a href="#" class="btn" data-filter="serv-cor">   خدمات كوركر  </a>
       <!-- <a href="#" class="btn" data-filter="jewelry">Jewelry</a> -->
   </div>
</div>
</header>



<main>
<div class="slide-container">
<section class="container" id="store-services">
 <div class="store-service alll">
   <a href="bill.html" class="lin">
    <img class ="img" src="{{asset ('/assets/images/mobile.png') }}" alt="">
     <div class="service-details">
         <h2> فواتير  </h2></a>
       
     </div>
 </div>
<div class="store-service alll">
 <img class ="img" src="{{asset ('/assets/images/6.png') }}" alt="">
 <div class="service-details">
     <h2> المعاملات</h2>

 </div>
</div> <div class="store-service alll">
<img class ="img" src="./images/6.png" alt="">
<div class="service-details">
   <h2> خدمات كوركر</h2>

</div>
</div>

<!-- <div class="store-service foater">
 <a href="phon-bill.html" class="lin">
  <img class ="img" src="../assets/images/mobile.png" alt="">
   <div class="service-details">
       <h2> فواتير جوال </h2></a>
     
   </div>
</div> -->
<!-- <div class="col-md-3"> -->
<!-- <div class="store-service  foater">
 <a href="internet.html" class="lin">
   <img class ="img" src="../assets/images/wireless-router-c.svg" alt="">
   <div class="service-details">
       <h2> فواتير انترنت </h2></a>
     
   </div>
</div> -->
<!-- </div> -->
<!-- <div class="col-md-3"> -->
<!-- <div class="store-service  foater">
   <img class ="img" src="../assets/images/4444.png" alt="">
   <div class="service-details">
       <h2>فواتير كهرباء </h2>
      
   </div>
 </div> -->
<!-- <div class="col-md-3"> -->
<!-- <div class="store-service  foater">
 <img class ="img" src="../assets/images/ST22.jpeg" alt="">
 <div class="service-details">
     <h2> فواتير أرضي  </h2>

 </div>
</div> -->
<!-- </div> -->

<!-- <div div class="row"> -->
<!-- <div class="col-md-3"> -->
<!-- <div class="store-service foater">
<img class ="img" src="../assets/images/Wtar.png" alt="" >
<div class="service-details">
   <h2> فواتير ماء  </h2>
  
</div>
</div> -->
<!-- </div> -->
<!-- <div class="col-md-3"> -->

<!-- <div class="store-service  foater">
<img class ="img" src="../assets/images/madfoat.jpg" alt="">
<div class="service-details">
   <h2 style="font-size: 14px;"> فواتير السورية للمدفوعات  </h2>

</div>
</div> -->
<!-- </div> -->
<!-- <div class="col-md-3"> -->
<!-- <div class="store-service foater">
<img class ="img" src="../assets/images/MOHE.png" alt="">
<div class="service-details">
   <h2> فواتير جامعات  </h2>
   
</div>
</div> -->
<!-- </div> -->
<!-- <div class="col-md-3"> -->
<!-- <div class="store-service  foater">
<img class ="img" src="./images/13.png" alt="">
<div class="service-details">
   <h2> فواتير الإسكان  </h2>

</div>
</div> -->
<!-- </div></div> -->
<!-- <div class="row"> -->
<!-- <div class="store-service  foater">
<img class ="img" src="./images/13.png" alt="">
<div class="service-details">
   <h2>فواتير حوالات   </h2>
  
</div>
</div> -->
<!-- <div class="store-service foater">
<a href="bank.html" class="lin">
<img class ="img" src="../assets/images/mobile.png" alt="">
 <div class="service-details">
     <h2> فواتير بنوك  </h2></a>
   
 </div>
</div> -->
<!-- 
<div class="store-service  moamalat">
   <img class ="img" src="../assets/images/aqar.jpg" alt="">
   <div class="service-details">
       <h2>معاملات عقارية</h2>
       
   </div>
</div>
<div class="store-service moamalat">
   <img class ="img" src="../assets/images/id.svg" alt="">
   <div class="service-details">
       <h2>معاملات تأمين</h2>
 
   </div>
</div> -->
<!-- </div> -->
<!-- <div class="row"> -->
<!-- <div class="store-service moamalat">
   <img  class ="img" src="./images/5.png" alt="">
   <div class="service-details">
       <h2>معاملات مالية </h2>

   </div>
</div> -->
<div class="store-service  serv-cor">
   <img  class ="img" src="./images/6.png" alt="">
   <div class="service-details">
       <h2>عقود استضافة</h2>
      
   </div>
</div>



<!-- <div class="row"> -->
<div class="store-service serv-cor">
<a href="{{ route ('mtnsyrtemp') }}" class="lin">

<img class ="img" src="{{ asset('/assets/images/syr.png') }}" alt="">
<div class="service-details">
   <h2> فواتير سيرياتيل   </h2></a>
 </div>
  

</div>
<div class="store-service serv-cor">
<a href="{{ route('mtnsyrtemp') }}" class="lin">

<img class ="img" src="{{ asset('/assets/images/mtn.png') }}" alt="">
<div class="service-details">
   <h2> فواتير MTN   </h2></a>
</div>

</div>
<div class="store-service serv-cor">
 <a href="{{ route('mtnsyrtemp') }}" class="lin">

 <img class ="img"  src="{{ asset ('/assets/images/syr.png') }}" alt="">
 <div class="service-details">
     <h2>وحدات سيرياتيل</h2></a>
   </div>

</div>
 
 

<div class="store-service serv-cor">
<a href="{{ route('mtnsyrtemp') }}" class="lin">

<img  class ="img" src="{{ asset ('/assets/images/mtn.png') }}" alt="">
<div class="service-details">
   <h2>وحدات MTN   </h2></a>
 </div>
   

</div>

<div class="store-service serv-cor">
<img class ="img" src="./images/6.png" alt="">
<div class="service-details">
   <h2> مكاتب مرنة</h2>

</div>
</div>

<div class="store-service Moard">
 <a href="{{ route('mtnsyrtemp') }}" class="lin">
 <img  class ="img" src="{{asset ('/assets/images/mtn.png') }}" alt="">
 <div class="service-details">
     <h2>MTN  </h2></a>
 </div>
</div>
<!-- ` -->
<div class="store-service Moard">
 <a href="{{ route('mtnsyrtemp') }}" class="lin">
 <img class ="img" src="{{ asset ('/assets/images/syr.png') }}" alt="">
 <div class="service-details">
     <h2>  سيرياتيل   </h2>   </a>  
 </div>

</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  مزود آية    </h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  مزود سوا   </h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  مزود الكم    </h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  مزود امواج</h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  مزود رنت   </h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  بنك بيمو   </h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2> بنك سوريا الاسلامي    </h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  بنك البركة    </h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  بنك العقاري    </h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  بنك التجاري    </h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  مدرارت    </h2>
    
 </div>
</div>
<div class="store-service Moard">
 <img class ="img" src="../assets/images/" alt="">
 <div class="service-details">
     <h2>  انتراكوم  </h2>
    
 </div>
</div>
</div></div>
</div>
</section>
</div>
</main>
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
<script src="{{asset ('/js/services.js') }}"></script>
@endsection