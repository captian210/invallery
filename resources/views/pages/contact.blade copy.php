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

       <div class="row mt-4 mt-lg-5">
           <div class="col-sm-12 col-md-6 "><a class="btn btn-neutral btn-simple btn-block" href="mailto:help@invalley.com">Send us an email</a></div>
       </div>
   </div>
</div>

<div class="w-divider skew-up text-center"></div>


<div class="section bg-neutral pt-5 ">
  <div style="height: 10px;"></div>
    <h1 class="text-center mt-2" style="margin-bottom: 28px;">We look forward to hearing from you</h1>

    <p class="text-center" style="max-width:650px;">We are ready to answer any questions you have about our services or about any special requests you might have. Go ahead and take a moment to fill out the contact form below to send us a message.</p>

    <br><br>

    <div class="row justify-content-md-center contact">
        <div class="col-sm-4" style="background: #fafafa; padding: 30px 30px 20px;">
            <form method="post" action="https://dashboard.invalley.com/contact/helpdesk">
                
                <div class="form-group input-group-sm">
                    <label for="name">Your name</label>
                    <input type="text" class="form-control" id="name" name="name" required="">
                </div>

                <div class="form-group form-group-lg" data-field="2">

    <label for="email">Email</label>

    
        <input type="email" name="email" id="email" class="form-control" placeholder="" value="" required="">
        
    </div>

                <div class="form-group form-group-lg" data-field="3">
    <label for="field_3" class="">
        Subject    </label>

    <input type="text" class="form-control data-input" name="field_3" id="field_3" placeholder="" required="" value="">

    </div>

<div class="form-group form-group-lg" data-field="4">

    <label for="field_4" class="">
        Message    </label>

    <textarea name="field_4" id="field_4" class="form-control data-input" placeholder="" required="" style="height:54px;overflow-y:hidden;"></textarea>

    </div>

                <div class="form-group input-group-sm">
                    <button type="submit" class="px-5 mt-5 d-block mx-auto btn btn-primary btn-simple">Send message</button>
                </div>
            </form>
        </div>
    </div>
<div style="height: 120px;"></div>
</div>
@append