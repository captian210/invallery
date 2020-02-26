@extends('layouts.main', [
    'pageTitle' => 'Contact Us - Invalley',
    'pageClass' => 'home',
    'navItem' => 'contact'
])

@section('content')
<div class="wrapper container header floatingOverHeader">
   <div class="col-sm-12 col-lg-5 ml-md-auto text-center px-sm-1 px-md-0 order-lg-12 d-none d-lg-block"></div>
   <div class="col-12 col-md-6" style="float: right;">
            <img style="height: 300px;" class="card-shadow20" src="img/SCREEN-contact.jpg">
   </div>
   <div class="col-sm-12 col-lg-6 px-sm-1 px-md-0 pt-md-3 text-left order-lg-1">
       <h1 class="mb-4 mb-lg-5">Contact Us</h1>

       <p>We greatly enjoy hearing from both new and existing clients. Engaging with webmasters, bloggers, marketers, and other SEO professionals is one of the joys in our business. Let us help you find the right link strategy for your needs.</p>

   </div>
</div>

<div class="w-divider skew-up text-center"></div>


<div class="section bg-neutral pt-5 ">
  <div style="height: 10px;"></div>
    <h1 class="text-center mt-2" style="margin-bottom: 28px;">We look forward to hearing from you</h1>

    <p class="text-center" style="max-width:650px;">We are ready to answer any questions you have about our services or about any special requests you might have. Go ahead and take a moment to fill out the contact form below to send us a message.</p>

    
                <div class="form-group input-group-sm">
                    <button onclick="window.location.href = 'https://dashboard.invalley.com/contact/PZP47L';" type="submit" class="px-5 mt-5 d-block mx-auto btn btn-primary btn-simple">Send message</button>
                </div>
    
    </div>
<div style="height: 120px;"></div>

@append