@extends('includes.layouts')



@section('content')

<div class="page-title">
    <div class="container">
        <div class="padding-tb-170px">
            <h1>Contact Us</h1>
        </div>
    </div>
</div>


<div class="padding-tb-100px">

    <div class="container">
        <div class="row">

            <div class="col-lg-6 sm-mb-45px">
                <p> Modion Communications is focused on providing public relations, brand development, marketing activations, media engagement, crisis communications, financial PR, investors’ relation Support, event management, digital marketing and media publishing..</p>
                <h5>Phone :</h5>
                <span class="d-block"><i class="fa fa-phone text-main-color margin-right-10px" aria-hidden="true"></i> +234902 222 2226</span>
                <span class="d-block sm-mb-30px"><i class="fa fa-mobile text-main-color margin-right-10px" aria-hidden="true"></i>+234803 226 2350</span>
                <h5 class="margin-top-20px">Address :</h5>
                <span class="d-block sm-mb-30px"><i class="fa fa-map text-main-color margin-right-10px" aria-hidden="true"></i>38, Okunola Aina Street, off Sunmola Street, Mende, Maryland </span>
                <h5 class="margin-top-20px">Email :</h5>
                <span class="d-block sm-mb-30px"><i class="fa fa-envelope-open text-main-color margin-right-10px" aria-hidden="true"></i>enquiry@modioncommunications.com </span>
            </div>

            <div class="col-lg-6">
                <div class="contact-modal">
                    <div class="background-main-color">
                        <div class="padding-30px">
                            <h3 class="padding-bottom-15px">Send a Brief</h3>
                            <form action="{{route('pages.contact')}}" method="POST">
                                @csrf
                                @include('includes.errors')
                                @if(Session::has('message-send'))
                                    <div class="alert alert-success">{{ Session::get('message-send') }}</div>
                                @endif
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Full Name</label>
                                        <input name="name" class="form-control" id="inputName44" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input name="email" class="form-control" id="inputEmail44" placeholder="Email">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                      <label>Subject</label> 
                                      <input type="subject" id="subject" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                  </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control" id="exampleFormControlTextarea11" rows="3"></textarea>
                                </div>
                                <button type="submit" value="Send Message" class="btn-sm btn-lg btn-block background-dark text-white text-center  text-uppercase rounded-0 padding-15px ">SEND MESSAGE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="map-layout">
    <div class="map-embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19860.32694861947!2d3.378691720353092!3d6.569967004473522!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xab6bb09149c39426!2sModion%20Communications!5e0!3m2!1sen!2sng!4v1626242872811!5m2!1sen!2sng" width="100%" height="390" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-4">
                
                <div class="padding-tb-50px padding-lr-30px background-main-color pull-top-309px">
                    <div class="contact-info-map">
                        <div class="margin-bottom-30px">
                            <div class="contact-info opacity-9">
                                <div class="icon margin-top-5px"><span class="icon_pin_alt"></span></div>
                                <div class="text">
                                    <span class="">38A, Okunola Aina Street, off Sunmola Street, Mende, <br>Maryland.</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="call_center margin-top-30px">
                            <div class="contact-info opacity-9">
                                <div class="icon  margin-top-5px"><span class="icon_phone"></span></div>
                                <div class="text">
                                    <span class="">0803 226 2350 <br>0902 222 2226</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection