@extends('layouts.master')
@section('first')
<div class="container">
     <section id="hero">
      <div class="hero-container">
      <h1>Save our Senior</h1>
      <h2>Please, fill out the for below to be notified for the latest updates!</h2>
      
      <form action="{{ url('insert') }}" method="post" role="form" class="php-email-form">
        <div class="row no-gutters">
           <div class="col-md-6 form-group pr-md-1">
             <input type="text" name="fullname" class="form-control txtOnly" id="fullname" placeholder="Full Name"
             maxlength="15" />
             <div class="invalid-feedback">The  Fullname field is required.</div>
           </div>
          
          <div class="col-md-6 form-group pl-md-1">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" maxlength="50" />
            <div class="invalid-feedback">The Email  field is required.</div>
          </div>
        </div>

         <div class="row no-gutters">
           <div class="col-md-6 form-group pr-md-1">
            <input type="text" name="dob" class="form-control dob" id="datepicker" placeholder="Date of Birth" />
            <div class="invalid-feedback">The Select dob field is required.</div>
          </div>
          <div class="col-md-6 form-group pl-md-1">
            <input type="text" class="form-control numOnly" name="mobile" id="mobile" placeholder="Phone" maxlength="10"  />
             <div class="invalid-feedback">The Mobile field is required.</div>
          </div>
        </div>

         <div class="row no-gutters">
          <div class="col-md-6 form-group pr-md-1">
          <input type="text" name="city" class="form-control txtOnly" id="city" placeholder="City" maxlength="15"/>
            <div class="invalid-feedback">The  city field is required.</div>
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group pl-md-1">
            <input type="text" class="form-control numOnly" name="amount" id="amount" placeholder="Your Pledge Amount in INR"  data-msg="Please Pledge Amount in INR " maxlength="9" />
             <div class="invalid-feedback">The employer name field is required.</div>
          </div>
        </div>
          <div class="mb-1">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your notification request was sent. Thank you!</div>
        </div>
         <input type="submit" name="submit" id="campbtn" value="Continue" class="btn btn-success nextBtn btn-lg" />
      </form>
    </div>

  </section><!-- #hero -->
</div>
@endsection



