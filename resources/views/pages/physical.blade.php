<!DOCTYPE html>
<html lang="en">


<!-- index16:47  -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon.png">
    <!-- Page Title -->
    <title> Unlearn | Modion Communications </title>
    <!-- Icon fonts -->
    <link href="{{ asset('website') }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/flaticon.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('website') }}/css/bootstrap.min.css" rel="stylesheet">
    <!-- Plugins for this template -->
    <link href="{{ asset('website') }}/css/animate.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/slick.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/slick-theme.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/slicknav.min.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/jquery.fancybox.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('website') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('website') }}/css/responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- start page-loader -->
    <div class="page-loader">
        <div class="page-loader-inner">
            <div class="inner"></div>
        </div>
    </div>
    <!-- end page-loader -->
   <!-- header-area start -->
    <header>
        <div class="header-area"  id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="logo">
                            <a href="{{route('pages.unlearn')}}"><img src="{{ asset('website') }}/images/logo.png" alt=""></a>
                        </div>
                    </div>
                    
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

	
	
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100 mt-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-8">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h3 class="text-uppercase text-center mb-5">Enter Payment Details</h3>
                    <form method="POST" action="{{route('pay.store')}}" id="paymentAction">
                        @csrf
                            <div class="form-outline mb-3">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter full name" class="form-control form-control-lg" required />
                                  </div>
                            </div>
                            <div class="form-outline mb-3">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" name='email' id="email" placeholder="Your email address" class="form-control form-control-lg" required />
                                 </div>
                            </div>
                            <div class="form-outline mb-3">
                                <div class="form-group">
                                  <label class="form-label">Phone Number</label>
                                  <input type="number" name="number" id="number" class="form-control form-control-lg" required />
                                </div>
                            </div>
                            <div class="form-outline mb-3">
                                <div class="form-group">
                                  <label class="form-label">Amount</label>
                                  <input type="text" name="amount" id="amount" value="50000" class="form-control form-control-lg" required />
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-block btn-lg text-body" type="submit" value="Pay Now!" style="background-color: #142440; color: white;">
                                    Pay Now!
                                </button>
                            </div>
                    </form> 
                                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	



	<!-- Footer -->

</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Footer Column -->
            <div class="col-lg-6 footer_col">
                <div class="footer_about">
                    <!-- Logo -->
                    <h3 style="color: white">Who is it for?</h3>
                    <div class="footer_about_text">
                        <p style="color: white">The Unlearn series is deliberately designed for PR and marketing communication professionals as well as of high value to individuals in related fields.</p>
                    </div>
                    <div class="copyright">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script><a href="https://modioncommunications.com" target="_blank"> Modion Communications</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 footer_col">
                <div class="footer_about flex-row flex-wrap  justify-content-end">
                    <!-- Logo -->
                    <h3 style="color: white; text-align: end;" >For Enquiries</h3>
                    <div class="footer_about_text" style="text-align: end;">
                        modioncommunications@gmail.com
                        <br>
                        enquiry@modioncommunications.com
                        <br>
                            0902 222 2226 
                            0803 226 2350
                            
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

 <!-- .footer-area end -->
    <!-- All JavaScript files
================================================== -->
<script src="https://checkout.flutterwave.com/v3.js"></script>
<script src="{{ asset('website') }}/js/jquery.min.js"></script>
<script src="{{ asset('website') }}/js/bootstrap.min.js"></script>
<!-- Plugins for this template -->
<script src="{{ asset('website') }}/js/jquery-plugin-collection.js"></script>
<script src="{{ asset('website') }}/js/jquery.slicknav.min.js"></script>
<!-- Custom script for this template -->
<script src="{{ asset('website') }}/js/script.js"></script>

<script>
      $(function(){
      $("#paymentAction").submit(function (e) {
          e.preventDefault();
          var name = $('#name').val();
          var email = $('#email').val();
          var phone = $('#number').val();
          var amount = $('#amount').val();
        //   Make Our Payment
        makePayment(amount, email, phone, name);
      })
  })
  
  
  function makePayment(amount,email,phone_number,name) {
    FlutterwaveCheckout({
      public_key: "FLWPUBK-0ee455c36467549a0d83ae7bd9ccd070-X",
      tx_ref: `RX1_`+Math.floor((Math.random()*100000000)+1),
      amount,
      currency: "NGN",
      country: "NG",
      payment_options: " ",
      
      
      customer: {
        email,
        phone_number,
        name,
      },
      callback: function (data) {
        var transaction_id = data.transaction_id;
        // Make ajax request
        var _token = $("input[name='_token']").val();
        $.ajax({
            type: "POST",
            url: "{{URL::to('verify-payment')}}",
            data: {
              transaction_id,
              _token
            },
            success: function (response){}
        });
      },
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "Unlearn",
        description: "An avant-garde service designed for disruptive",
        logo: "https://www.modioncommunications.com/assets/images/unl.png",
      },
    });
  }

</script>

</body>
</html>