@extends('includes.layouts')




@section('content')


<div class="page-title Vertical">
    <div class="container">
        <div class="padding-tb-180px">
            <h1>Our Verticals</h1>
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
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
              <div class="card">
                <a href="https://insurancemeetstech.com">
                 <img src="assets/img/IMT.jpg" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Disruptive Multilogues</h5>
                  <div class="text" style="line-height: 19px;
                  font-size: 13px;">A forward-thinking conference platform for strategic conversations and sustainable solutions.</div>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <a href="https://www.insidemainland.com">
                <img src="assets/img/IM.png" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Insidemainland</h5>
                  <div class="text" style="line-height: 19px;
                  font-size: 13px;">Nigeria’s largest and most authoritative online community media platform.</div>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <a href="{{route('pages.unlearn')}}">
                  <img src="assets/img/Un.png" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Unlearn</h5>
                  <div class="text" style="line-height: 16px;
                  font-size: 13px;">An avant-garde service designed for disruptive, superior, and practical learnings for Public Relations and Marketing Communications professionals.</div>
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card">
                <img src="assets/img/MC.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">MediaComms</h5>
                  <div class="text" style="line-height: 16px;
                  font-size: 13px;">A grassroot community-based organization heralding inclusive and responsible citizen journalism.</div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<!--============= //About Us =============-->


    
@endsection