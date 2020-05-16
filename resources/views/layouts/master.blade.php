<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Campaign Page</title>
<meta content="" name="descriptison">
<meta content="" name="keywords">

<!-- Favicons -->

<link href="{{ URL::asset('public/img/favicon.png') }}" rel="icon">


<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/vendor/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/vendor/boxicons/css/boxicons.min.css') }}">
<!-- Template Main CSS File -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/css/style.css') }}">

<script src="{{ URL::asset('public/js/jquery.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('public/css/jquery-ui.css') }}">
<script src="{{ URL::asset('public/js/jquery-ui.js') }}"></script>


</head>

<body>

<!-- ======= Header ======= -->
<header id="header">
<div class="container-fluid">
<div class="logo float-left">
</div>
</header><!-- End #header -->



<div class="container">
  <div class="row">
    @yield('first')
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
<div class="copyright">
&copy; Copyright <strong><span>ACL Mobile Ltd</span></strong>. All Rights Reserved
</div>
<div class="credits">
Designed by <a href="#">Tarun Saxena</a>
</div>
</div>


</body>
</html>






<script>
$(document).ready(function(){
  $("#campbtn").click(function(){
   var fullname=$('#fullname').val();
    var email=$('#email').val();
    var dob=$('.dob').val();
    var mobile=$('#mobile').val();
    var city=$('#city').val();
    var amount=$('#amount').val();

    $('#fullname').removeClass('is-invalid');
    $('#email').removeClass('is-invalid');
    $('.dob').removeClass('is-invalid');
    $('#mobile').removeClass('is-invalid');
    $('#city').removeClass('is-invalid');
    $('#amount').removeClass('is-invalid');
    
    if(fullname ==''){
     $('#fullname').addClass('is-invalid');
    }
    
    if(email ==''){
     $('#email').addClass('is-invalid');
     $('.email_error').text("The email field is required.");
   } 


     if(dob ==''){
     $('.dob').addClass('is-invalid');
    }


    if(mobile ==''){
     $('#mobile').addClass('is-invalid');
    }

    if(city ==''){
     $('#city').addClass('is-invalid');
    }
   if(amount ==''){
     $('#amount').addClass('is-invalid');
   } 

   
  if(fullname == '' ||  email == '' || dob == '' ||  mobile == '' || city == '' ||  amount == '' || $('.email_error').text() != '' ){
      return false;
  } else {
    return true;
  }


  });

$( ".txtOnly" ).keypress(function(e) {
var key = e.keyCode;
if (key >= 48 && key <= 57) {
e.preventDefault();
}
});

$('.numOnly').on('input blur paste', function(){
$(this).val($(this).val().replace(/\D/g, ''))
})



  $( function() {
    $( "#datepicker" ).datepicker();
  } );

                 
});
 </script>




       