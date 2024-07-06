@extends('Layouts.layout')
@section('content')

<div class="inner-banner">
<div class="container">
<div class="inner-title text-center">
<h3>Contact Us</h3>
</div>
</div>
</div>

<div class="contact-area pb-70">
<div class="container">
<div class="section-title text-center">
<span class="sp-before sp-after">Contact</span>
<h2>Get in Touch</h2>
</div>
<div class="row pt-45">
<div class="col-lg-4 col-md-6">
<div class="contact-card">
<i class="flaticon-planet-earth"></i>
<h3>Office Location</h3>
<p>Rue Abou Maachar par Boulevard Anoual, N°9, </p>
<p> Résidence Abou Maachar,1èr Etage, Appt 3 ,Casablanca – Maroc</p>

</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="contact-card">
<i class="flaticon-email"></i>
<h3>Contact</h3>
<p>contact@hrhub.ma</p>
<p> Mobile:+212 6 63 34 71 59</p>
<p> Mobile:+212 6 60 00 50 65 </p>

</div>
</div>
<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
<div class="contact-card">
<i class="flaticon-clock"></i>
<h3>Hours of Operation</h3>
<p>Monday - Friday: 09:00 - 20:00</p>
</div>
</div>
</div>
</div>
</div>


<div class="contact-section pt-100 pb-70">
<div class="container-fluid">
<div class="row">
<div class="col-lg-5 w-70">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.3548866781807!2d-7.6208855259872905!3d33.570133843036125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d3e698ab448b%3A0xd788deb29e6f35ae!2sHR%20Hub%20Morocco!5e0!3m2!1sen!2sma!4v1718019592173!5m2!1sen!2sma" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
</div>
<div class="col-lg-7">
<div class="contact-wrap">
<div class="contact-form">
<div class="section-title">
<span class="sp-before sp-after">Contact</span>
<h2>Contact With Us</h2>
</div>
<form method="POST" action="{{route('store')}}">
    @csrf
<div class="row">
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<i class="bx bx-user"></i>
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name*" required>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<i class="bx bx-user"></i>
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="E-mail*" required>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<i class="bx bx-phone"></i>
<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone" required>
<div class="help-block with-errors"></div>
</div>
</div>

<div class="col-lg-12 col-md-12">
<div class="form-group">
<i class="bx bx-envelope"></i>
<textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn border-radius">
Send Message
<i class="bx bx-plus"></i>
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection