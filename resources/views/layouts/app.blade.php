<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ar" dir="rtl">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online - Shopping </title>
        <link rel="shortcut icon" href="images/shop.jpg">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body id="mizo">
<!-- header top section -->
<section class="banner" role="banner">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo pull-right" href="/"><img width="110px" height="110px" src="images/shop.jpg" 
     style="margin-top: -30%" alt=""></a>
      <nav class="navigation pull-left" role="navigation" >
        <ul class="primary-nav" >
          <?php if(Auth::check()){ ?>
           <li>612.269.8419</li>
          <li><a href="mainlto:hello@phdl.co">hello@agency.com</a></li>
             <?php       } ?>
         <li><a href="#" onclick="login()">Login</a></li>
          <li><button onclick="mido()" style="font-weight: bold; border-radius: 10px;background-color: #71a8c7; height: 40px"><i class="fa fa-plus"></i>  أضــف إعـــلان </button></li>
        </ul>
      </nav>
      <a href="#" class="nav-toggle">Menu<span></span></a> </div>
  </header>
</section>


<div class="modal fade" id="moodal"  role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button"  class="close pull-left" data-dismiss="modal">&times;</button>
                <h4 style="margin-top: -2px"> أضـــف إعــــلان</h4> 
            </div>
            <div class=" modal-body" >                
              <form method="POST" action="/add_pro" id="pro_form" enctype="multipart/form-data" >
                        {!! csrf_field() !!}

                  <input id="p_title" name="p_title" class="form-control img-responsive" type="text"  placeholder="إســــم الاعــــلان">
                <br>                 
                  <input id="p_type"  class="form-control img-responsive" type="text" name="p_type" placeholder="نـــوع الاعــــلان">
                <br>
                  <input id="p_role"  class="form-control img-responsive" type="text" name="p_role" placeholder="حـــاله الاعــــلان">
                <br>
                  <textarea id="p_details" name="p_details" style=" resize: none;" class="form-control img-responsive" maxlength="200" rows="3" cols="6" placeholder="وصـــف الاعــــلان"></textarea>
                <br>
                  <input id="p_cost"  class="form-control img-responsive" type="text" name="p_cost" placeholder="سعر البيع">
                <br>

                    <img src="images/msg.jpg" width="100px" height="70px">
                    <input type="file" id="p_image" name="p_image" style="display: none;">
                    <a href="#" onclick="$('#p_image').trigger('click'); return false;">
                      <img src="images/img.png" width="55px" height="65px"></a>

                      <input type="file" multiple id="img" name="img" style="display: none;">
                    <a href="#" onclick="$('#img').trigger('click'); return false;">
                      <img src="images/im1.png" width="65px" height="65px"></a>
                  <br>
                  <br>
                                
                  <input id="p_address" class="form-control" type="text" name="p_address" placeholder="العنوان">
                <br>
                <table>
                  <tr>
                    <td><input type="checkbox" name="" value="" style="margin: 10px"></td>
                    <td><h5>نستخدم بيانات الاكونت الشخصيه</h5></td>
                    <td><button type="button"  onclick="showData()" style="margin:10px;border-radius: 10px;background-color: #71a8c7; height: auto;" >ادخل بيانات جديده</button></td>
                  </tr>
                </table><br>
                          
                <div id="data_user" style="display: none;">
                  <input id="user_mobile"  class="form-control img-responsive" type="text" name="user_mobile" placeholder="رقم الموبايل">
                <br>
                  <input id="user_email"  class="form-control img-responsive" type="email" name="user_email" placeholder="الايميل ">
                <br>
                <input id="user_address" class="form-control img-responsive" type="text" name="user_address" placeholder="العنوان">
                <br>
                                          </div>                     
              <div class="modal-footer">
                     <button  type="submit"  class="pull-right" style="border-radius: 10px;background-color: #71a8c7; height: 35px" >إضــــــافه</button>
                     <button type="button" class="pull-left" style="border-radius: 10px;background-color: #71a8c7; height: 35px"  data-dismiss="modal">إغـــــلاق</button>
              </div>
              </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  // function add_pro(){
    // var t=$("#p_title").val(),ty=$("#p_type").val(),r=$("#p_role").val(),d=$("#p_details").val(),
    // c=$("#p_cost").val(),i=$("#p_image").val(),i2=$("#image").val(),ad=$("#p_address").val(),
    // m=$("#user_mobile").val(),e=$("#user_email").val(),ud=$("#user_address").val();
  //   $.POST("/add_pro",{p_title:t,p_type:ty,p_role:r,p_details:d,p_cost:c,p_image:i,p_address:ad,user_mobile:m,user_email:e,user_address:ud},function(res){
  //     alert(res);
  //   });
  // }

   // function add_pro() {
   //                var t=$("#p_title").val(),ty=$("#p_type").val(),r=$("#p_role").val(),d=$("#p_details").val(),
   //                c=$("#p_cost").val(),i=$("#p_image").val(),i2=$("#image").val(),ad=$("#p_address").val(),
   //                m=$("#user_mobile").val(),e=$("#user_email").val(),ud=$("#user_address").val();
   //                  $.ajax({
   //                      url: "/add_pro",
   //                      type: "POST",
   //                      data:{p_title:t,p_type:ty,p_role:r,p_details:d,p_cost:c,p_image:i,p_address:ad,user_mobile:m,user_email:e,user_address:ud} ,
   //                      contentType: false,
   //                      cache: false,
   //                      processData: false,
   //                      success: function (data) {
   //                        alert(data)
   //                      },
   //                      error: function () {
   //                      }
   //                  });
   //                       return false;
   //              }
</script>

<!-- header top section --> 
<section id="hero" class=" section" style="margin-bottom: 3%"></section>
@if(Session::has('alert'))
<center>
    <div>
      <?php $a = [];  $a = session()->pull('alert');  ?>
          @if($a[0]=="success")
            <div class="alert alert-success">
                <label>{{$a[1]}}</label>
            </div>
          @else
            <div class="alert alert-danger">
                <label>{{$a[1]}}</label>
            </div>
          @endif
     </div>
</center>                 
@endif

    @if(count($errors)>0)
    <div  style="padding: 30px; direction: ltr;">
        <ul > 
            <li class="alert alert-danger">
                <?php
                foreach($errors->all() as $error){               
                        echo $error."<br>";
                    }
               ?>
            </li>
        </ul>
    </div>
    @endif
<!-- header content section -->
<style type="text/css">
  .cate:hover{
    opacity: 0.6;
  }
</style>
<section id="work-detail">
  <div class="container">
    <hr>
    <div class="row" style="background-color: #71a8c7; border-radius: 10px;padding: 15px;margin: 20px">
       <!-- <div class="col-md-12 col-sm-6"> -->
        <div class="col-md-2 col-sm-6  text-center">
      <button style="border-radius: 10px;height: 35px;width: 110px; background-color: black;padding-bottom: 5px" class="cate img-responsive"><i class="fa fa-search"></i> إبحث</button></div>
      <div class="col-md-4 col-sm-6  text-center">
       <input autofocus type="text" class="form-control img-responsive" name="" placeholder="نـــوع المنتج ">
      </div>
        <div class="col-md-6 col-sm-6  text-center">
      <input  type="text"  style="padding-bottom: 5px" class="form-control " placeholder="إبحث باسم المنتج "></div>
       <!-- </div> -->
    </div>
  </div>
</section>

<section id="hero" class=" section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-6">
        <a href="/show_special_product" class="cate"><div class="col-md-3 col-sm-6 service text-center"> 
         <img src="images/plus.png" width="70px" height="70px"> 
          <div class="service-content">
            <h4>خدمات اخري</h4>
          </div>
        </div></a>
        <a href="/show_special_product" class="cate"><div class="col-md-3 col-sm-6 service text-center"> 
         <img src="images/cars.png" width="70px" height="70px"> 
          <div class="service-content">
            <h4>عـــربيات</h4>
          </div>
        </div></a>
        <a href="/show_special_product" class="cate"><div class="col-md-3 col-sm-6 service text-center"> 
         <img src="images/mob.png" width="70px" height="70px"> 
          <div class="service-content">
            <h4>موبايلات والكترونيات</h4>
          </div>
        </div></a>
        <a  href="/show_special_product" class="cate"><div class="col-md-3 col-sm-6 service text-center">
         <img src="images/homes.png" width="70px" height="70px"> 
                  <div class="service-content">
            <h4>عقــارات و محــلات</h4>
          </div>
        </div></a>
      </div>
    </div>
  </div>
</section>


    @yield('content')
<!-- portfolio grid section --> 
<!-- footer section -->
<footer class="footer">
  <div class="container">
    <div class="col-md-6 left">
      <h4>Let's work together</h4>
      <p> Call: 01021952160 OR Email : <a href="mailto:red.devile2011@gmail.com"> red.devile2011@gmail.com </a></p>
    </div>
    <div class="col-md-6 right">
      <p>© 2015 All rights reserved.<br>
        Made with <i class="fa fa-heart pulse"></i> by <a href="http://know-me.ml/">Mohamed Khairy</a></p>
    </div>
  </div>
</footer>


 
<div class="modal fade" id="login_modal"  role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button"  class="close pull-left" data-dismiss="modal">&times;</button>
                <h4 style="margin-top: -2px">   
                         <a class=" btn-link" href="#" onclick="log()">Login</a> or
                         <a class=" btn-link" href="#" onclick="reg()">Registeration</a>
                </h4> 
            </div>
            <div class=" modal-body" >
    <div class="row">
        <div class="col-md-12" id="log">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="">
                                    <h5>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class=" btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class=" btn-link pull-left" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
        </div>
        <div class="col-md-12" id="reg" style="display: none;">
                <input  class="form-control img-responsive" type="text" name="" placeholder="الاسم">
                <br>
                <input  class="form-control img-responsive" type="text" name="" placeholder="الايميل">
                <br>
                <input  class="form-control img-responsive" type="text" name="" placeholder="الباسورد">
                <br>
                <input  class="form-control img-responsive" type="text" name="" placeholder="تاكيد الباسورد">
                <br>
                <input  class="form-control img-responsive" type="text" name="" placeholder="الموبايل">
                <br>
                <input  class="form-control img-responsive" type="text" name="" placeholder="العنوان">
                <br>
                <button type="submit" class=" btn-primary">
                                    <i class="fa fa-btn fa-sign-up"></i> Register
                                </button>

                        </div>
    </div>
            </div>
             <div class="modal-footer">
                     <button type="button" class="pull-left" style="border-radius: 10px;background-color: #71a8c7; height: 35px"  data-dismiss="modal">إغـــــلاق</button>
              </div>
        </div>
    </div>
</div>
<!-- footer section --> 

<!-- JS FILES --> 
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('textarea.max').keyup(function() {
        var $textarea = $(this);
        var max = 200;
        if ($textarea.val().length > max) {
            var top = $textarea.scrollTop();
            $textarea.val($textarea.val().substr(0, max));
            $textarea.scrollTop(top);

        }
    });
});
  function mido(){
      $("#moodal").modal('show');
  }
  function login(){
      $("#login_modal").modal('show');
  }
 function showData(){
      $("#data_user").show();
  }

  function log(){
    $("#reg").hide();
    $("#log").show();
  }
  function reg(){
    $("#log").hide();
    $("#reg").show();
  }

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script>
</body>
</html>




