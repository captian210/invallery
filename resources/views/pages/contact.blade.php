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

    
   <div class="container container-sm contact-us">
        <section>

            <form role="form" method="post" action="https://dashboard.invalley.com/contact/PZP47L" target="_parent" class="formbuilder-form" novalidate="" data-pjax="" id="spp-PZP47L">

                <input type="hidden" name="spp_token" value="096a9e044967055691f3ff2c2bbb2acf" id="spp_token">

                <input type="hidden" id="form-rules" value="[]">

                <fieldset class="active">

                    <div class="form-group-lg" data-field="1">
                        <label for="name_f">Name</label>

                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="name_f" id="name_f" value="" required="">

                                <div class="help-block">First name</div>
                            </div>

                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="name_l" value="" required="">

                                <div class="help-block">Last name</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group form-group-lg" data-field="2">

                        <label for="email">Email</label>

                        <input type="email" name="email" id="email" class="form-control" placeholder="" value="" required="">

                        <div class="help-block">
                            Already have an account? <a href="https://dashboard.invalley.com/login/contact/PZP47L?">Sign in here</a>. </div>

                    </div>

                    <div class="form-group form-group-lg" data-field="3">
                        <label for="field_3" class="">
                            Subject </label>

                        <input type="text" class="form-control data-input" name="field_3" id="field_3" placeholder="" required="" value="">

                    </div>

                    <div class="form-group form-group-lg" data-field="4">

                        <label for="field_4" class="">
                            Message </label>

                        <textarea name="field_4" id="field_4" class="form-control data-input" placeholder="" required="" style="height:70px;overflow-y:hidden;border: 1px solid #E3E3E3;border-radius: .25rem;"></textarea>

                    </div>

                    <div class="form-group form-group-lg" data-field="5">
                        <script src="https://www.google.com/recaptcha/api.js"></script>
                        @if(env('GOOGLE_RECAPTCHA_KEY'))
                             <div class="g-recaptcha"
                                  data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                             </div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-lg">Send</button>
                </fieldset>
            </form>

        </section>
    </div>
    
    </div>
<div style="height: 120px;"></div>

@append