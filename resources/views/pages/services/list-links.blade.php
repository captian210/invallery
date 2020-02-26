@extends('layouts.main', [
    'pageTitle' => 'List Links by Invalley',
    'pageClass' => 'service-list-link',
    'navItem' => 'services'
])

@section('content')
<style>
    .gradian-bg {
        height: 70px;
        width: 100%;
        background: #fff;
        display: block;
        position: absolute;
        top: 4vw;
        background-image: linear-gradient(rgba(226, 226, 226, 0.5), #ffff 80%);
        transform: skewY(-5deg);
        margin-top: 27px;
    }
    .section p.blockquote{
        color: #fff;
    }
</style>
<div class="wrapper container header floatingOverHeader">
    <div class="row">
        <div class="col-sm-12 col-lg-4 px-sm-1 px-md-0 pt-md-3 text-left ">
            <h1 class="mb-4 mb-lg-5">List Links</h1>
            <p>
                Ever noticed how so many articles and blog posts online
                have numbers in the titles? Well, there’s a reason for
                that <strong>- people love lists.</strong>
                
                <br>
                <br>
                Studies show that ‘listicle’ headlines are much more
                clickable than other kinds of headlines, and it’s clear
                why. List articles are easy to scan, visually appealing, 
                and highly shareable - there’s no better type of content
                for your link building campaign.
                <br>
                <br>
                Our team will write 10 engaging Listicles to help you to
                get backlinks from powerful List sites. 
            </p>
            <div class="row mt-4 mt-lg-5">
                <div class="col-sm-12 col-md-8 "><a class="btn btn-neutral btn-block" href="#order-now">Order now</a></div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-8 pt-sm-5 pt-md-0">
            <img class="w-100" src="/img/screens/listlinkheader.png">
        </div>
    </div>
</div>

<div class="w-divider skew-up">
    <div class="content">
        <a href="" class="btn-continue shadow" style="z-index: 11;top: -15px;">
            <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
        </a>
    </div>
</div>

<div class="section container1 bg-neutral">
    <div class="row mb-3">
        <div class="col-sm-12 pb-4 text-center">
            <h3 class="mt-md-5">Why Your Link Profile Needs List Links</h3>
        </div>
    </div>
    <div class="row mb-3 mb-md-5 pt-md-4">
        <div class="col-sm-12 col-md-4">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <img class="icon" src="../../img/icons/services/icon1.png">
                </div>

                <div class="col-sm-12 col-md-8">
                    <h6 class="text-center text-sm-center text-md-left">
                        Content that matches 
                        your audience’s interest
                    </h6>
                    <p>
                        The most powerful backlinks are embedded in niche-relevant content.
                        With List Links, we’ll place natural links in list articles that are <strong>highly relevant</strong> to your brand. 
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <img class="icon" src="../../img/icons/services/icon2.png">
                </div>

                <div class="col-sm-12 col-md-8">
                    <h6 class="text-center text-sm-center text-md-left">Fun Links That Everyone Loves</h6>
                    <p>
                        Listicles are super shareable and
                        can help you to maximize your social reach.
                        Google wants to see you <strong>diversify your link 
                        profile</strong> and List Links will help you do that. 
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <img class="icon" src="../../img/icons/services/icon3.png">
                </div>

                <div class="col-sm-12 col-md-8">
                    <h6 class="text-center text-sm-center text-md-left">Your Private Team of Experts</h6>
                    <p>
                        You’re busy running your business; you don’t
                        have the time to research and write awesome 
                        content for your marketing efforts. With our 
                        List Links package, you don’t have to. We’ll
                        assign <strong>a team of expert listicle researchers, 
                        writers, and link builders to do the creative 
                        work</strong> on your campaign.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-divider-highlight skew-down m-maxscreen-height dm-maxscreen-height" style="height: 10rem;">
</div>

<div class="section bg-highlight">
    <div class="container1">
        <div class="text-center mt-5 pt-3">
            <h3>Links From The Most Popular Content Category</h3>
        </div>
        <div class="mt-5 text-center" style="position: relative;width: 840px;max-width: 100%;left: 50%;transform: translateX(-50%);">
            <img class="mt-3" src="/img/screens/listicle.png" alt="">
        </div>
        <div class="row align-items-center">
            <div class="col-sm-12 m-auto py-5 ">
                <p>
                    Invalley has worked on thousands of linkbuilding campaigns over the past 10 years.
                    One thing that we learned in that time is that listicles are super powerful in every SEO campaign. 
                </p>
                <p class="pt-4">
                    Listicles always seem to outperform other types of content.
                    They earn more social shares, rank better, and get indexed faster - and it isn’t just us that noticed this.
                    There are dozens of other case studies that confirmed our data:
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class = "col-12 col-sm-12 col-md-6">
                <img class="w-100" src="../../img/screens/average_shares.png">
            </div>
            <div class = "col-12 col-sm-12 col-md-6 hidden-sm hidden-xs roundcheck">
                <div class="col-12 inner">
                    <div class="row pb-4 align-items-center">
                        <div class="col-2 text-right" >
                            <img class="text-right" src="../../img/icons/services/roundcheck.png">
                        </div>
                        <div class="col-10">
                            <p>
                                Listicles are the most shared content type across different social platforms, 
                                according to <strong>a study of 630,000 posts</strong> in 14 industries.
                            </p>
                        </div>
                    </div>
                    <div class="row pt-4 pb-4 align-items-center">
                        <div class="col-2 text-right" >
                            <img class="text-right" src="../../img/icons/services/roundcheck.png">
                        </div>
                        <div class="col-10">
                            <p>
                                List posts earn <strong>4 times as many social shares</strong> as other content types like how-to posts and infographics, per Backlinko.
                            </p>
                        </div>
                    </div>
                    <div class="row pt-4 pb-4 align-items-center">
                        <div class="col-2 text-right" >
                            <img class="text-right" src="../../img/icons/services/roundcheck.png">
                        </div>
                        <div class="col-10">
                            <p>
                                Readers prefer numbered list headlines much more than other kinds of headlines.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "col-12 col-sm-12 col-md-6 visible-sm mt-3 roundcheck">
                    <div class="row pb-4 align-items-center">
                        <div class="col-2 text-right" >
                            <img class="text-right" src="../../img/icons/services/roundcheck.png">
                        </div>
                        <div class="col-10">
                            <p>
                                Listicles are the most shared content type across different social platforms, 
                                according to <strong>a study of 630,000 posts</strong> in 14 industries.
                            </p>
                        </div>
                    </div>
                    <div class="row pt-4 pb-4 align-items-center">
                        <div class="col-2 text-right" >
                            <img class="text-right" src="../../img/icons/services/roundcheck.png">
                        </div>
                        <div class="col-10">
                            <p>
                                List posts earn <strong>4 times as many social shares</strong> as other content types like how-to posts and infographics, per Backlinko.
                            </p>
                        </div>
                    </div>
                    <div class="row pt-4 pb-4 align-items-center">
                        <div class="col-2 text-right" >
                            <img class="text-right" src="../../img/icons/services/roundcheck.png">
                        </div>
                        <div class="col-10">
                            <p>
                                Readers prefer numbered list headlines much more than other kinds of headlines.
                            </p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-sm-12 m-auto py-5 ">
                <p>
                    You can leverage the power of listicles with our List Link package.
                    Once you’ve ordered it, we’ll set up a custom campaign for your website and deliver a high-quality report within 2 weeks.
                </p>
                <p class="pt-4">
                    Every part of the List Link strategy is carefully planned;
                    from researching the content topics for your listicles to planning how we naturally include the backlink. 
                </p>
                <p class="pt-4">
                    We’ve shared the whole process with you below...
                </p>
            </div>
        </div>
    </div>
</div>
<div class="w-divider skew-up">
    <div class="content">
        <a href="#partner" class="btn-continue shadow" style="z-index: 11;top: -15px;">
            <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
        </a>
    </div>
</div>

<div class="section bg-neutral py-5">
    <div class="container1">
        <div class="row">
            <div class="col-4 col-sm-4 col-md-2">
                <img class="img-bottom" src="/img/icons/linkv-1.png" alt="">
            </div>
            <div class="col-8 col-sm-8 col-md-4">
                <h3 class="text-left">Step 1: Research & Brainstorm Listicle Ideas</h3>
                <small>
                    <p>
                        Our writers always start by researching unique, fresh, niche-relevant angles for your listicles. 
                        We get to know your brand and use sites like Buzzsumo to find out what kinds of titles and topics are the most popular in your niche. 
                        We’ll then put together <strong>a list of fun and unique listicle ideas designed to grab your customers’ attention.</strong>
                    </p>
                    <p class="pt-4">
                        You can have as much or as little input as you like here. 
                        f you have any ideas for the article topics already in mind or instructions on how we should include the backlink, just let us know!                    
                    </p>
                </small>
            </div>
            <div class="col-sm-12 col-md-6 text-center pt-md-0 pt-sm-4 pt-4 text-md-left text-sm-center">
                <img class="img-fluid" src="/img/screens/liststep1.png">
            </div>
        </div>
    </div>
</div>

<div class="w-divider-highlight skew-down ">
    <div class="content">
    </div>
</div>

<div class="section bg-highlight">
    <div class="container1">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-5 pt-sm-4 pt-md-0 text-md-left text-sm-center">
                <img class="img-fluid" src="/img/screens/liststep2.png">
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h3 class="text-left">Step 2: Create Pages Optimized for Search Engines</h3>
                        <p>
                            Next, our team of expert writers and link builders will create the content and publish it on powerful list sites. 
                            Our writers are experts in keyword optimization and know how to write content that both your readers and Google will love. 
                            Here are just some of the things we do to make sure your listicle is perfect:
                        </p>
                        <p class="pt-4">
                            - Write from personal experience<br />
                            - Choose a compelling, clickable title<br />
                            - Provide fresh insight on the topic and include useful statistics<br />
                            - Include a strong Call To Action
                        </p>
                        <p class="pt-4">
                            We offer two packages. 
                            You can decide if you want articles with a minimum of 250 words or 500 words. 
                            If your goal is to diversify your link profile with high-quality backlinks, we recommend the Basic package. 
                            If you care about in-depth content that people are interested in reading and sharing, go for the Premium plan.
                        </p>
                    </div>
                    <div class="col-3">
                        <img class="icon" src="/img/icons/linkv-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>

<div class="w-divider skew-up">
</div>

<div class="section bg-neutral pt-5 ">
    <div class="container1">
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <div class="row">
                    <div class="col-3">
                        <img class="img-bottom" src="/img/icons/linkv-3.png" alt="">
                    </div>
                    <div class="col-9">
                        <h3 class="text-left">Step 3: Deliver the Results</h3>
                        <p>
                            Because we publish your listicles on authoritative List sites, they tend to rank well and be indexed very quickly. 
                            Many of our listicles rank #1 for the target keyword and generate tons of traffic from visitors clicking-through. 
                            We make sure to optimize your CTA so that as many of those visitors click through to your website as possible.
                        </p>
                        <p class="pt-4">
                            Not only that, but you’ll also have a bunch of indexed backlinks from <strong>authoritative domains passing link juice</strong> back to your website.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 pt-4 pt-sm-4 pt-md-0  text-md-left text-sm-center">
                <img class="img-fluid" src="/img/screens/liststep3.png">
            </div>
        </div>        
    </div>
</div>

<div class="w-divider-highlight skew-down ">
</div>

<div class="section bg-highlight">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-sm-12 py-5 text-center"><img class="img-fluid mb-4" src="/img/imaging/gannett_logo.png" style="height:55px; width:242px">
                <p class="blockquote pb-md-0">  As a Fortune 500 company, we pride ourselves on partnering with only the best, and Invalley has been that partner.  </p>
                <p class ="blockquote_p text-right pr-md-4">Alex Jovicich, Gannett Inc.</p>
            </div>
        </div>
    </div>
</div>

<div class="w-divider skew-down">
    <div class="content">
        <a href="#partner" class="btn-continue shadow" style="z-index: 11;top: -15px;">
            <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
        </a>
    </div>
</div>

<div class="section bg-neutral pt-5 ">
    <h3 class="text-primary text-center h3-topic-m-b-0">Our Guarantees: <br> Building Your Links The Right Way</h3>
    <ul class="checklist pt-5">
        <li>
            <span> Whitehat links from quality domains</span>
            You want to make sure your links help your SEO, not hurt it. 
            That’s why we only build links from trusted and established domains. 
            Many of these sites have strict moderation and editorial guidelines to ensure that <strong>only high-quality content gets published.</strong>
            These are the kind of links that aren’t easy to get.

        </li>
        <li>
            <span>Natural anchor text optimization</span>
            We help you to build a natural backlink profile by including a mix of generic, 
            universal and branded links unless specified otherwise in the campaign data form.
        </li>
        <li>
            <span>Diversify your link profile</span>
            We’ll find the 10 best websites to publish your 10 listicles. 
            You can choose up to 5 keywords and 5 URLs to target with the Basic package and up to 10 keywords and 10 URLs with the Premium package.
        </li>
    </ul>
</div>
<div class="w-divider-highlight skew-up">    
</div>

<div class="section bg-highlight">
    <div class="container1">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6 m-auto py-5 text-center">
                <h3>What Our List Links Look Like</h3>
                <p>
                    List Links are the perfect type of content for every link building campaign, 
                    regardless of the kind of business niche and website you have. 
                    They excel at two things: improving your website’s SEO and bolstering your social authority.
                </p>
                <p class="pt-4">
                    If you’re wondering what your List Links will look like, check out these samples:
                </p>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <a href="https://rankly.com/list/the-3-best-edm-aftermovies-2" target="_blank">
                            <img style="max-width: 600px;" src="../img/screens/list-sample1.png" class="img-fluid w-100 card-shadow20">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <a href="http://listoid.com/list/2319" target="_blank">
                            <img style="max-width: 600px;" src="../img/screens/list-sample2.png" class="img-fluid w-100 card-shadow20">
                        </a>
                    </div>
                </div>
                <br /><br />
            </div>
            <div class="col-sm-12 col-md-6 m-auto text-center">
                <p>
                    As you can see, the article is split up into bite-sized chunks of information under separate subheadings to maximize readability. 
                    We also link back to the sites in the most natural and contextual way possible. 
                </p>
            </div>
        </div>
    </div>
</div>


<div class="w-divider skew-down">
    <div class="content">
        <a href="#partner" class="btn-continue shadow" style="z-index: 11;top: -15px;">
            <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
        </a>
    </div>
</div>

<div class="section bg-neutral">
    <div class="container1">
        <div class="row align-items-center">
            <div class="col-sm-12 text-center">
                <img class="img-fluid mb-4" src="../../img/icons/a1.png">
                <h3 class="mb-3">Go For Big Results With Our <br>Monthly Mix Package!</h3>
            </div>
            <div class="col-12 py-5">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="col text-center ">
                            <h5 class="mb-3">Nubmer of referring domains</h5>
                            <img src="../img/screens/graph-new.png">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 pt-4 pt-sm-4 pt-md-0">
                        <p>
                            Backlinko.com's analysis of over <strong>1 million Google search results</strong> clearly showed that backlinks built 
                            from a diverse group of domains is the best way of getting #1 rankings. 
                            While our one-off packages are a great way to get started on your campaign, 
                            our Monthly Mix package gives your site the link diversity it needs.
                        </p>
                        <p class="pt-4">
                            We created the Monthly Mix plan, so that your link-building campaign is not isolated to just one single link type. 
                            We've <strong>bundled ALL of our link types</strong> into our Monthly Mix package, and we are constantly developing new strategies in-house every month, 
                            so there will never be a month that we don't have something of great value to add to your SEO efforts.
                        </p>
                        <p class="pt-4">
                            Compared with our one-off packages, you have the potential to <strong>save at least 25% every month</strong>! Whichever package you choose, 
                            we are super excited to have you on board and look forward to working on your campaign.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 py-5 align-items-center">
                <center>
                    <div style="width: 400px;">
                        <button onclick="window.location.href='/services/monthly-mix#order-now'" type="submit" class="btn btn-primary btn-block" style="border-radius:0; font-size: 1.2rem;">
                            EXPLORE MONTHLY MIX
                            </button>
                    </div>
                    
                    <p>
                        Starting at $299 per month,
                    </p>
                    <p class="pt-1">
                        20 new backlinks per month, including List Links!
                    </p>
                </center>
            </div>
        </div>
    </div>
</div>

<div style="padding-bottom: 60px;" class="section bg-highlight pt-5">
    
    <div style="margin-top: -30px;" class="container">
        <div class="row py-3">
            <div class="col-sm-12 text-center">
                <h3 class="text-center mb-5">
                    Order Your List Links Package
                </h3>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-sm-12 col-md-9 pr-sm-3 pr-md-0">
                <p class="text-left">
                    <span class=" font-italic">
                    "Search Engine Optimization is my full-time job. It's what I do 24/7. It requires non-stop analysis,
                    testing, consistent link building and maintenance in order to stay ahead of your competition. No two
                    websites or niches are the same, so the longer Invalley get to work with you and your business, the more
                    we can do to increase rankings and drive traffic to your websites."
                    </span>
                    <span class="text-right d-block mt-3">
                    Joost Smedts, Co-Founder Invalley
                </span>
                </p>

            </div>

            <div class="col-sm-12 col-md-3 text-center px-5 px-md-3 px-lg-5">
                <img src="../img/team/joost.png" style="width: 144px; height: 144px;">
            </div>
        </div>
    </div>
</div>

<div class="section bg-neutral bg-shadow pt-5 ">
    <div class="container">
        <div id="order-now"></div>
        <div class="row pt-5">
            <div class="col-sm-12 bg-gradient-r py-3 text-center">
                <h3 class=" mb-0 ">
                    Our Packages
                </h3>
            </div>
        </div>
    </div>
</div>


<div id="order-now"></div>

<div class="section bg-neutral bg-gradient2 pt-0 mt-0 " style="">
    <div class="container">
        <div class="row pb-3 bg-transparent">
            <div class="col-sm-12 col-md-4 py-1 text-center  text-d-block ">
                <div class="bg-white ">
                    <img style="width: 200px; height: 180.44px;" src="/img/icons/list-links-box-icon.png" />

                    <span class="h6 mt-3 mb-1 tracking-500">List Links</span>
                    <span class="display-4 leading-1">
                    <small class="currency">$</small>149
                    </span>
                    <span class="text-secondary tracking-200">one-time</span>
                    <span class="text-secondary px-md-1 px-lg-2 px-xl-4 mt-4">
                        Dominate your niche with the List Links package. Get great results with:
                    </span>
                    <ul class="checklist checklist-small">
                        <li>
                            10 Popular List Backlinks
                        </li>
                        <li>
                            <strong>5 URLs</strong> And Keywords To Target
                        </li>
                        <li>
                            10 Unique Listicles With Images
                        </li>
                        <li>
                            Optimized Call-To-Actions
                        </li>
                        <li>
                            Report Within <strong>21 Days</strong>
                        </li>
                    </ul>
                    <div style="margin-bottom: -120px;"></div>
                        <a href="" class="d-block text-center">
                            <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
                        </a>

                    <center><div style="width: 300px;"><button onclick="window.location.href='https://dashboard.invalley.com/order/2LGJLP'" type="submit" class="btn btn-primary btn-block my-5">Order now</button></div></center>
                        <br />
                </div>
            </div>

            <div class="col-sm-12 col-md-4 py-1 text-center  text-d-block ">
                <div class="bg-white ">
                    <img style="width: 200px; height: 180.44px;" src="/img/icons/list-links-box-icon.png" />

                    <span class="h6 mt-3 mb-1 tracking-500">List Premium</span>
                    <span class="display-4 leading-1">
                    <small class="currency">$</small>249
                    </span>
                    <span class="text-secondary tracking-200">one-time</span>
                    <span class="text-secondary px-md-1 px-lg-2 px-xl-4 mt-4">
                        Get more content, target more keywords and URLs and receive your report faster.
                    </span>
                    <ul class="checklist checklist-small">
                        <li>
                            10 List Backlinks with <strong>2000 Extra Words</strong>
                        </li>
                        <li>
                            <strong>10 URLs</strong> and Keywords To Target
                        </li>
                        <li>
                            10 Unique Listicles With Images
                        </li>
                        <li>
                            Optimized Call-To-Actions
                        </li>
                        <li>
                            Report Within <strong>14 Days</strong>
                        </li>
                    </ul>
                    <div style="margin-bottom: -120px;"></div>
                        <a href="" class="d-block text-center">
                            <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
                        </a>

                    <center><div style="width: 300px;"><button onclick="window.location.href='https://dashboard.invalley.com/order/PO2MRO'" type="submit" class="btn btn-primary btn-block my-5">Order now</button></div></center>
                        <br />
                </div>
            </div>

            <div class="col-sm-12 col-md-4 py-1 text-center text-d-block ">
                <div class="bg-white ml-0">
                    <img style="width: 200px; height: 180.44px;" src="/img/icons/monthly-mix-box-icon.png" />

                    <span class="h6 mt-3 mb-1 tracking-500">Monthly Mix</span>
                    <span class="display-4 leading-1">
                        <small class="currency">$</small>299
                    </span>
                    <span class="text-secondary tracking-200">per month</span>
                    <span class="text-secondary px-md-1 px-lg-2 px-xl-4 mt-4">
                        Choose the Monthly Mix Basic package to get a diversified set of <strong>20 backlinks</strong> per month.
                    </span>

                    <ul class="checklist checklist-small ">
                        <li>
                            20 Unique Backlinks Per Month
                        </li>
                        <li>
                            URL And Keyword Analysis
                        </li>
                        <li>
                            17 Bundled Link Strategies
                        </li>
                        <li>
                            5 URLs And Keywords To Target
                        </li>
                        <li>
                            QA, List, Brand Links in Month 1
                        </li>
                    </ul>
                    <div style="margin-bottom: -120px;"></div>

                        <a href="" class="d-block text-center">
                            <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
                        </a>
                    
                    <center><div style="width: 300px;"><button onclick="window.location.href='/services/monthly-mix#order-now'" type="submit" class="btn-neutral2">Discover</button></div></center>
                        <br />
                </div>
            </div>
        </div>

    </div>
</div>

@append