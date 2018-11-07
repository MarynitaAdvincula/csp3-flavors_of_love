@extends('main')

@section('title', '| Welcome to the Flavors of love')

@section('content')

<div class="row">
  <div class="col-md-12">
    <h1 class="section_contactTitle">We Love to Hear From You</h1>
  </div>
  <div class="col-md-6 mt-5">
    <p>If you have photos, images or recommendations that you want to share, you can email us directly at flavors@gmail.com </p>
  </div>

  <div class="form-group col-md-6">
    <form method="" id="contactform" name="contactform" data-toggle="validator">

      {{-- Name Section --}}
      <div class="form-group col-md-6">
        <label for="name">First Name</label>
        <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" required data-error="Please Enter Your First Name"><div class="help-block with-errors"></div>
      </div>      
      
      <div class="form-group col-md-6">
        <label for="name">Last Name</label>
        <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" required data-error="Please Enter Your Last Name"><div class="help-block with-errors"></div>
      </div>
      
      {{-- Email Address Section --}}
      <div class="form-group col-md-12">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" required data-error="Please Enter Your Email Address"><div class="help-block with-errors"></div>
      </div>

      {{-- Message Section --}}
      <div class="form-group col-md-12">
        <label for="subject">Message</label>
        <textarea class="form-control" rows="4" id="message" name="message" placeholder="Enter your Message" required data-error="Please Write Your Message"></textarea><div class="help-block with-errors"></div>
      </div>

      <div class="form-submit col-md-6">
        <button class="btn btn-primary" type="submit" id="form-submit">Submit</button>
      </div>
    </form>
  </div>
</div>

@endsection

