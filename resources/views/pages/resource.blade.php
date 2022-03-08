@extends('includes.layouts')



@section('content')
  
<div class="page-title">
    <div class="container">
        <div class="padding-tb-170px">
            <h1>Resources</h1>
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
                        <form action="" method="GET">
                            @csrf
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
<!-- // Send us a Brief  -->


<!-- Gallery -->
        <section id="portfolio" class="portfolio pt-100 nile-about-section">
            <div class="container">
              <div class="row">
                  <div class="col-md-8 offset-md-2">
                      <!-- Title Of Section Center -->
                   <div class="filter-group">
                      <!-- Control List -->
                      <ul id="control" class="list-control">
                         <li class="active" data-filter="all">All</li>
                         <li data-filter="1">Articles</li>
                         <li data-filter="2">Design</li>
                         <a href="#services1"><li>Video</li></a>
                     </ul>
                   </div> 
                  </div>
              </div>
              <!-- End Row 1 Column -->
              <!-- Start Row 2 Column -->
              <div id="filtr-container" class="row">
                  <!-- Column Image -->
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/5.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/5.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  
                  
                  <!-- Column Image -->
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/6.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/6.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                <span>Modion</span>
                            </div>
                          </a>
                      </div>
                  </div>
                  
                  
                  
                  <!-- Column Image -->
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/3.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/3.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                <span>Modion</span>
                            </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Women in Business.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Women in Business.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                <span>Modion</span>
                            </div>
                          </a>
                      </div>
                  </div>
                  <!-- Column Image -->
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/19.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/19.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                <span>OLD MUTUAL</span>
                            </div>
                          </a>
                      </div>
                  </div>
                  <!-- Column Image -->
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 6x.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 6x.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                <span>LEADWAY</span>
                            </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 16.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 16.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>LEADWAY</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 32.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 16.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>LEADWAY</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 33.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 16.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>LEADWAY</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 47.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 16.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>LEADWAY</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Akin's Ad.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Akin's Ad.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>MODION</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/camel-03.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/camel-03.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>The Camel</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/camel-21.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/camel-21.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>The Camel</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/8.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/8.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/9.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/9.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/IM independence day.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/IM independence day.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 7.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 7.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/inside ml childrens day.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/inside ml childrens day.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="/assets/img/rs/fashion 2.jpg" alt="my-work">
                        </div>
                        <a class="overlay" href="/assets/img/rs/fashion 2.jpg">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>The Camel</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="/assets/img/rs/Fashion Cover.jpg" alt="my-work">
                        </div>
                        <a class="overlay" href="/assets/img/rs/Fashion Cover.jpg">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>The Camel</span>
                            </div>
                        </a>
                    </div>
                </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/10.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/10.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/11.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/11.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/12.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/12.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/13.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/13.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 8.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 8.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/14.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/14.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Leap Aframes Agric.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Leap Aframes Agric.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 9.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 9.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 10.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 10.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Leap Aframes Art.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Leap Aframes Art.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/15.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/15.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 13.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 13.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Leap Aframes Edu.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Leap Aframes Edu.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Leap Aframes Ent.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Leap Aframes Ent.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 15.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 15.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Leap Aframes Hos.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Leap Aframes Hos.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Leap Aframes Tou.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Leap Aframes Tou.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Leap frames-4.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Leap frames-4.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 24.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 24.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/16.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/16.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Oct 1st.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Oct 1st.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/17.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/17.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 26.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 26.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/18.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/18.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="2" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/19.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/19.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 27.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 27.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 29.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 29.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 39.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 39.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 41.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 41.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 42.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 42.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 46.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 46.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-3 filtr-item" data-category="1" data-sort="value">
                      <div class="my-work">
                          <div class="image">
                              <img class="img-fliud" src="/assets/img/rs/Article 49.jpg" alt="my-work">
                          </div>
                          <a class="overlay" href="/assets/img/rs/Article 49.jpg">
                              <span class="icon-img"><i class="fas fa-image"></i></span>
                              <div class="info-img">
                                  <span>Modion</span>
                              </div>
                          </a>
                      </div>
                  </div>
                </div>
            </div>
      </section>
    
<div class="dark-gray" id="services1">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/bedmate.png" >
                <h4>Bedmate 60' TVC</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-12'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/anniversary.png" >
                <h4>Nigeria Gas Association 20th Anniversary</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-1'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/2021.png">
                <h4>NGA INDUSTRY MULTILOGUES BUSINESS FORUM 2021</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-2'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/Audrey.png">
                <h4>NIGERIAN GAS ASSOCIATION SPEAKER AUDREY JOE EZIGBO</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-3'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/business.png">
                <h4>NGA INDUSTRY MULTILOGUES BUSINESS FORUM 2020</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-4'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/lsctf.png">
                <h4>LSETF PANDEMIC TO PROSPERITY</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-5'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/ogiri.png">
                <h4>NIGERIAN GAS ASSOCIATION SPEAKERS: OGA ADEJO OGIRI</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-6'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/eme.png">
                <h4>NIGERIAN GAS ASSOCIATION SPEAKER AUDREY JOE EZIGBO</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-7'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/emeka.png">
                <h4>NIGERIAN GAS ASSOCIATION SPEAKERS: EMEKA ENE</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-8'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/fato.png">
                <h4>NIGERIAN GAS ASSOCIATION SPEAKERS FESTUS OMOTOYINBO</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-9'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/oguns.png">
                <h4>NIGERIAN GAS ASSOCIATION SPEAKERS: MOBOLAJI OSUNSANYA</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-10'></i>
            </div>
            <div class="col-md-4">
                <img src="/assets/img/olu.png">
                <h4>NIGERIAN GAS ASSOCIATION SPEAKERS OLU VERHEIJEN</h4>
                <i class="fa fa-play" class="img-fluid" alt="" data-toggle='modal' data-target='#video-11'></i>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="video-12">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/NLA72859whk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
</div>
<div class="modal fade" id="video-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/CTu99PEg6Ac" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
</div>
<div class="modal fade" id="video-2">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/QnG7C3GsjAA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
<div class="modal fade" id="video-3">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/9AzdjR53tvA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
<div class="modal fade" id="video-4">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/-TK3gAR_-T0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
<div class="modal fade" id="video-5">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/-QhrsCZrgog" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
<div class="modal fade" id="video-6">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/k16g3Z2jC0E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
<div class="modal fade" id="video-7">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/9AzdjR53tvA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
<div class="modal fade" id="video-8">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/f508RrGtg8Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
<div class="modal fade" id="video-9">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/0W7ErefxYm0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
<div class="modal fade" id="video-10">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/Nj3zNh2yIIg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
<div class="modal fade" id="video-11">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <iframe width="600" height="400" src="https://www.youtube.com/embed/uAWBanRDx5A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>


@endsection