@extends('includes.layouts')




@section('content')


<div class="page-title">
    <div class="container">
        <div class="padding-tb-180px">
            <h1>About Us</h1>
        </div>
    </div>
</div>


<!-- Send us a Brief  -->
<div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content margin-top-150px background-main-color">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="assets/img/brief.png" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="padding-30px">
                        <h3 class="padding-bottom-15px">Send Us a Brief</h3>
                        <form action="/contact/us" method="GET">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="name" id="inputName4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
                            </div>
                            <button type="submit" href="#" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Send a Brief  -->
<!--============= About Us =============-->
<div class="nile-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 sm-mb-45px">

                <div class="section-title-right text-main-color clearfix">
                    <div class="icon"><img src="assets/icons/title-icon-1.png" alt=""></div>
                    <h2 class="title-text">Who We Are ?</h2>
                </div>
                <div class="about-text margin-tb-25px">
                    <h4>Nigeria's leading boutique PR and marketing communications agency.</h4>
                    Modion Communications is focused on providing public relations, brand development, marketing activations, media engagement, crisis communications, financial PR, investors’ relation Support, event management, digital marketing and media publishing.
                    <br><br>Based in Lagos, Nigeria, we envision an African dominance through superior, innovative, creative, cutting-edge communications solutions to individuals, small businesses, large corporates, industries and government agencies.
                </div>
                <a href="#" class="nile-bottom sm">Read More</a>

            </div>
            <div class="col-lg-6">
                <img src="assets/img/About Us.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!--============= //About Us =============-->





<div class="call-action the-clients">
    <div class="container">
        <div class="row">
            <div class="container">
                <section class="customer-logos c-slider">
                   <div class="slide"><img src="assets/img/clients/01.png"></div>
                   <div class="slide"><img src="assets/img/clients/02.png"></div>
                   <div class="slide"><img src="assets/img/clients/03.png"></div>
                   <div class="slide"><img src="assets/img/clients/04.png"></div>
                   <div class="slide"><img src="assets/img/clients/05.png"></div>
                   <div class="slide"><img src="assets/img/clients/06.png"></div>
                   <div class="slide"><img src="assets/img/clients/07.png"></div>
                   <div class="slide"><img src="assets/img/clients/08.png"></div>
                   <div class="slide"><img src="assets/img/clients/09.png"></div>
                   <div class="slide"><img src="assets/img/clients/10.png"></div>
                   <div class="slide"><img src="assets/img/clients/11.png"></div>
                   <div class="slide"><img src="assets/img/clients/12.png"></div>
                   <div class="slide"><img src="assets/img/clients/13.png"></div>
                   <div class="slide"><img src="assets/img/clients/14.png"></div>
                   <div class="slide"><img src="assets/img/clients/15.png"></div>
                   <div class="slide"><img src="assets/img/clients/16.png"></div>
                   <div class="slide"><img src="assets/img/clients/17.png"></div>
                   <div class="slide"><img src="assets/img/clients/18.png"></div>
                   <div class="slide"><img src="assets/img/clients/19.png"></div>
                   <div class="slide"><img src="assets/img/clients/20.png"></div>
                   <div class="slide"><img src="assets/img/clients/21.png"></div>
                </section>
             </div>
        </div>
    </div>
</div>





<div class="nile-about-section">
    <div class="container">
        <!-- Title -->
        <div class="section-title margin-bottom-40px">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="icon text-main-color"><i class="fa fa-home"></i></div>
                    <div class="h2">The Agency</div>
                    <div class="des" style="font-size: 16px;">We offer <br>Dynamic, Creative, Strategic, Client-Tailored and Result-Driven Advisory... </div>
                </div>
            </div>
        </div>
        <!-- // End Title -->

        <div class="row">

            <div class="col-lg-4">
                <div class="service-icon-box round">
                    <div class="icon"><img src="assets/icons/vision.png" alt=""></div>
                    <a href="#" class="title h2">Vision</a>
                    <div class="des">    To be Africa’s most respected communications and media group, delivering cutting edge services to industries, individuals, organizations and governments.</div>
                </div>
                <div class="service-icon-box">
                    <div class="icon"><img src="assets/icons/coreval.png" alt=""></div>
                    <a href="#" class="title h2">Mission</a>
                    <div class="des">To be at the forefront of consistently providing the most creative, dynamic and engaging communications solutions</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center sm-mb-45px">
                    <img src="assets/img/circle.jpg" alt=""  class="border-radius-500">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-icon-box">
                    <div class="icon"><img src="assets/icons/mission.png" alt=""></div>
                    <a href="#" class="title h2">Core Value</a>
                    <div class="des">Leadership<br> Integrity<br> Professionalism<br> Passion</div>
                </div>
                <div class="service-icon-box">
                    <div class="icon"><img src="assets/icons/gprinciples.png" alt=""></div>
                    <a href="#" class="title h2">Guiding Principles</a>
                    <div class="des">Taking into cognisance <br>the power of communication in influencing behaviours, we are committed.</div>
                </div>
            </div>



        </div>


        <div class="text-center margin-top-35px">
            <a href="/allguides" class="nile-bottom md">Show all <i class="fa fa-arrow-right"></i> </a>
        </div>

    </div>
</div>

<!-- // Get A Quote  -->

<div class="padding-tb-100px">
    <div class="container">
        <!-- Title -->
       
        <div class="section-title margin-bottom-40px">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="icon text-main-color"> What </div>
                    <div class="h2">We Do</div>
                </div>
            </div>
        </div>
        <!-- // End Title -->


        <div class="row justify-content-center">
            <div class="col-lg-8 mt-5">
                <div id="accordion3" class="nile-accordion layout_2 sm-mb-45px">

                    <div class="card">
                        <div class="card-header" id="headingOne3">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link active" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3"> Reputation Management</button>
                            </h5>
                        </div>
                        <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#accordion3">
                            <div class="card-body">
                                We provide brand reputational surveillance across online and offline media platforms. 
                                Tracking conversations around the brand to keep an eye and manage negative comments that could damage 
                                the reputation of the brand whilst providing PR advisory services. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo3">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo">Strategic Planning</button>
                            </h5>
                        </div>
                        <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo3" data-parent="#accordion3">
                            <div class="card-body">
                                Our strategy unit researches and recommends thorough and end-to-end strategies to drive brand objectives. The amplification of a brand’s corporate strategy, corporate actions, milestones industry trends unique symbolic events and plan of action to connect with target stakeholders lies within our forte. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree3">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">Content Creation and Curation</button>
                            </h5>
                        </div>
                        <div id="collapseThree3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion3">
                            <div class="card-body">
                                Advancing our client’s brand story, corporate actions, and milestones through a series of curated contents, guided articles, features, opinion articles, short motion videos, etc.. to connect with the target stakeholders; we help to achieve a content strategy that cultivates a positive narrative about the brand. 
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading43">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapse43" aria-expanded="false" aria-controls="collapse4">Media Relations & Publicity Engagement (Social & Mainstream Media)</button>
                            </h5>
                        </div>
                        <div id="collapse43" class="collapse" aria-labelledby="heading43" data-parent="#accordion3">
                            <div class="card-body">
                                We believe in the power of collaborations and conversations hence we maintain a network of industry reporters and social influencers to help seed and amplify positive narratives to build newsroom affinity, brand positioning and equity. </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading9">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">Collateral Materials Development and Management</button>
                            </h5>
                        </div>
                        <div id="collapse9" class="collapse" aria-labelledby="heading15" data-parent="#accordion9">
                            <div class="card-body">
                                We are expert content curators and provide strong support in the preparation of media kits, talking points, factsheets, or other relevant material when the need arises. Ensuring brand compliant, consistent, value-for-money and quality assurance checks on every brand related asset. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading18">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">Thought Leadership for C-Suite</button>
                            </h5>
                        </div>
                        <div id="collapse18" class="collapse" aria-labelledby="heading15" data-parent="#accordion18">
                            <div class="card-body">
                                We provide perception shaping thought leadership services for brand CEOs and senior executives leveraging strong media activity such as interviews, features, news, photo moments and speaking opportunities across key industry events to strengthen leadership and equity build.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading00">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapse00" aria-expanded="false" aria-controls="collapse00">Media Monitoring, Tracking and Social Media Listening</button>
                            </h5>
                        </div>
                        <div id="collapse00" class="collapse" aria-labelledby="heading15" data-parent="#accordion00">
                            <div class="card-body">
                                We offer 24/7 media monitoring and track conversations about brands, senior executives, and general industry; to monitor and spot trends and policies to predict events and provide PR advisory. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading90">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapse90" aria-expanded="false" aria-controls="collapse90">Stakeholder Management</button>
                            </h5>
                        </div>
                        <div id="collapse90" class="collapse" aria-labelledby="heading15" data-parent="#accordion90">
                            <div class="card-body">
                                We organise, manage, and sustain robust, beneficial relationship with key associations and stakeholders within our client’s industry of operation. Seeking new, mutual-beneficial partnerships for brands to drive growth and reputational currency. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading40">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapse40" aria-expanded="false" aria-controls="collapse40">Media Trainings</button>
                            </h5>
                        </div>
                        <div id="collapse40" class="collapse" aria-labelledby="heading15" data-parent="#accordion40">
                            <div class="card-body">
                                Provide guidance, workshops as well as media and public speaking trainings for key brand executives and stakeholders. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading50">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapse50" aria-expanded="false" aria-controls="collapse50">Issues and Crises Management</button>
                            </h5>
                        </div>
                        <div id="collapse50" class="collapse" aria-labelledby="heading15" data-parent="#accordion50">
                            <div class="card-body">
                                We provide brand reputational surveillance and PR Advisory on how to proactively deal with issues before they degenerate into full crisis. Effectively delivering crisis management solutions when the need arises. 
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading60">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapse60" aria-expanded="false" aria-controls="collapse60">Measurements and Reporting</button>
                            </h5>
                        </div>
                        <div id="collapse60" class="collapse" aria-labelledby="heading15" data-parent="#accordion60">
                            <div class="card-body">
                                We track and curate daily news briefs on brand, competition, and industry in tracking brand and competition’s share of media report, operations, and media spend to stay abreast of corporate actions and strategy. This informs the development of daily, weekly, monthly and quarterly performance reporting with actionable recommendations and learning.  
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading70">
                            <h5 class="mb-0">
                                <button class="btn btn-block btn-link collapsed" data-toggle="collapse" data-target="#collapse70" aria-expanded="false" aria-controls="collapse70">Research and Insights</button>
                            </h5>
                        </div>
                        <div id="collapse70" class="collapse" aria-labelledby="heading15" data-parent="#accordion70">
                            <div class="card-body">
                                We are data driven hence we have strong capabilities in conducting key industry research, focus group discussions, policies, and study trends to forecast policies, industry outlook and provide key advisory for brands, and industries.  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // row -->
    </div>
    <!-- // container -->
</div>
    
@endsection