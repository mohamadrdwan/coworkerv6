@extends('layouts.dashboard')

@section('content')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <nav class="menu">
                        <div class="slogo" > <img src="{{ asset ('assets/images/slogo.png') }}" > </div>
                         <a href="#" class="menu_item menu_item--active">
                           <i class="material-icons">add</i>
                         </a>
                         <!-- <a href="#" class="menu_item dropdow">
                            <div class= "hamburger"> <i class="material-icons ">menu</i></div>
                           </a> -->
                         <a href="#" class="menu_item " >
                           <i class="material-icons">search</i>
                         </a>
                         <a href="#" class="menu_item" >
                           <i class="material-icons">bookmark</i>
                         </a>
                         <!-- icons bottom -->
                         <div class="marg_bottom">
                         <a href="#" class="menu_item">
                             <i class="material-icons">notifications</i>
                             <!-- <span class="num">7</span> -->
                             
                 
                           </a>
                         <a href="#" class="menu_item notification" >
                           <i class="material-icons">person</i>
                         </a>
                         <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();" class="menu_item" >
                             <i class="material-icons power__color ">power_settings_new</i>
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                           </div>
                       </nav>
                     <!-- menu dynamic -->
                       <div class = "backdrop" onclick="toggleSidebar()"></div>
                       <div class="frontside">
                 
                       <div class="sidebar">
                           <div class="sidebar_profile">
                               <h3>coworker</h3>
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
                              <li class ="sidebar_item"> <a href="{{ route('services') }}">
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
                   <div  class="btn"><span class="fa fa-bars"></span></div>
                 </header>
                 <main> 
                   <div class="container mt-5">
                 
                     <div class="row">
                       <div class="col-md-3">
                         <h1>Content</h1>
                 
                         <div class="card-body bg-light mb-3">
                           <i class="fa fa-ticket"></i>
                           <span class="count-name">Booking Today</span>
                 
                         </div>
                         </div>
                         <div class="col-md-3">
                           <h1>Events</h1>
                           <div class="card-body bg-light mb-3">
                             <i class="fa fa-ticket"></i>
                             <span class="count-name">Booking Today</span>
                           </div>
                           </div>
                           <div class="col-md-3">
                             <h1>News Letters</h1>
                             <div class="card-body bg-light mb-3">
                               <i class="fa fa-ticket"></i>
                               <span class="count-name">Booking Today</span>
                             </div>
                             </div>
                             </div>
                             <div class="row">
                               <div class="col-md-3 ">
                                 <div class="card-body  bg-light mb-3 card-hover  ">
                                   <i class="fa fa-ticket"></i>
                                   <div class="count-name">Booking Today</div>
                                   <span class="one"></span>
                                   <span class="two"></span>
                                   <span class="three"></span>
                                   <span class="four"></span>
                                 </div>
                             </div>
                             <div class="col-md-3">
                       
                               <div class="card-body bg-light mb-3">
                                 <i class="fa fa-ticket"></i>
                                 <span class="count-name">Booking Today</span>
                       
                               </div>
                 
                           </div>
                           <div class="col-md-3">
                     
                             <div class="card-body bg-light mb-3">
                               <i class="fa fa-ticket"></i>
                               <span class="count-name">Booking Today</span>
                             </div>
                         </div>
                           </div>
                           <div class="row">
                             <div class="col-md-3">
                               <div class="card-body bg-light mb-3">
                                 <i class="fa fa-ticket"></i>
                                 <span class="count-name">Booking Today</span>
                               </div>
                           </div>
                           <div class="col-md-3">
                             <div class="card-body bg-light mb-3">
                               <i class="fa fa-ticket"></i>
                               <span class="count-name">Booking Today</span>
                             </div>
                         </div>
                         <div class="col-md-3">
                           <div class="card-body bg-light mb-3">
                             <i class="fa fa-ticket"></i>
                             <span class="count-name">Booking Today</span>
                           </div>
                       </div>
                         </div>
                         <div class="row">
                           <div class="col-md-3">
                             <div class="card-body bg-light mb-3">
                               <i class="fa fa-ticket"></i>
                               <span class="count-name">Booking Today</span>
                             </div>
                         </div>
                         <div class="col-md-3">
                   
                           <div class="card-body bg-light mb-3">
                             <i class="fa fa-ticket"></i>
                             <span class="count-name">Booking Today</span>
                   
                           </div>
                 
                       </div>
                    </div>
                </div>   
                 </main> 
                 <script>
                   $('.btn').click(function(){
                     $(this).toggleClass("click");
                     $('.sidebar').toggleClass("hide");
                     // $('this').toggleSidebar("show");
                     $('main').toggleClass("show")
                 
                   });
                   $('.sidebar_item ').click(function(){
                     $(this).addClass("active").siblings().removeClass("active");
                   })
                   </script>
                 <script src="{{ asset('/js/script.js') }}"></script>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection
