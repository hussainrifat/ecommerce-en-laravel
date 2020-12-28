@extends('layout')
@section('content')

<head>
    
    <link href="{{asset('resources')}}/frontend/css/step-wizard.css?{{time()}}" rel="stylesheet">
    

</head>

<body> 

<!-- Body Start -->
<div class="wrapper">
    <div class="gambo-Breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="all-product-grid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div id="checkout_wizard" class="checkout accordion left-chck145">
                        
                        <div class="checkout-step">
                            <div class="checkout-card" id="headingTwo">
                                <span class="checkout-step-number">1</span>
                                <h4 class="checkout-step-title">
                                    <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Your Delivery Address</button>
                                </h4>
                            </div>
                            <div id="collapseTwo"  aria-labelledby="headingTwo" data-parent="#checkout_wizard">
                                <div class="checkout-step-body">
                                    <div class="checout-address-step">
                                        <div class="row">
                                            <div class="col-lg-12">												
                                                <form class="">
                                                    <!-- Multiple Radios (inline) -->
                                                    <div class="form-group">
                                                        <div class="product-radio">
                                                            <ul class="product-now">
                                                                <li>
                                                                    <input type="radio" id="ad1" name="address1" checked>
                                                                    <label for="ad1">Home</label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" id="ad2" name="address1">
                                                                    <label for="ad2">Office</label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" id="ad3" name="address1">
                                                                    <label for="ad3">Other</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="address-fieldset">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Name*</label>
                                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Email Address*</label>
                                                                    <input id="email1" name="email1" type="text" placeholder="Email Address" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Flat / House / Office No.*</label>
                                                                    <input id="flat" name="flat" type="text" placeholder="Address" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Street / Society / Office Name*</label>
                                                                    <input id="street" name="street" type="text" placeholder="Street Address" class="form-control input-md">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Pincode*</label>
                                                                    <input id="pincode" name="pincode" type="text" placeholder="Pincode" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Locality*</label>
                                                                    <input id="Locality" name="locality" type="text" placeholder="Enter City" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <div class="address-btns">
                                                                        <button class="save-btn14 hover-btn">Save</button>
                                                                        <a class="collapsed ml-auto next-btn16 hover-btn" role="button" data-toggle="collapse" data-parent="#checkout_wizard" href="#collapseThree"> Next </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-step">
                            <div class="checkout-card" id="headingThree"> 
                                <span class="checkout-step-number">3</span>
                                <h4 class="checkout-step-title">
                                    <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Delivery Time & Date </button>
                                </h4>
                            </div>
                            <div id="collapseThree" caria-labelledby="headingThree" >
                                <div class="checkout-step-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">Select Date and Time*</label>
                                                <div class="date-slider-group">
                                                    <div class="owl-carousel date-slider owl-theme">
                                                        <div class="item">
                                                            <div class="date-now">
                                                                <input type="radio" id="dd1" name="address1" checked="">
                                                                <label for="dd1">Today</label>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="date-now">
                                                                <input type="radio" id="dd2" name="address1">
                                                                <label for="dd2">Tomorrow</label>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="date-now">
                                                                <input type="radio" id="dd3" name="address1">
                                                                <label for="dd3">10 May 2020</label>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="date-now">
                                                                <input type="radio" id="dd4" name="address1">
                                                                <label for="dd4">11 May 2020</label>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="date-now">
                                                                <input type="radio" id="dd5" name="address1">
                                                                <label for="dd5">12 May 2020</label>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="date-now">
                                                                <input type="radio" id="dd6" name="address1">
                                                                <label for="dd6">13 May 2020</label>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="date-now">
                                                                <input type="radio" id="dd7" name="address1">
                                                                <label for="dd7">14 May 2020</label>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <div class="date-now">
                                                                <input type="radio" id="dd8" name="address1">
                                                                <label for="dd8">15 May 2020</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="time-radio">
                                                    <div class="ui form">
                                                        <div class="grouped fields">
                                                            <div class="field">
                                                                <div class="ui radio checkbox chck-rdio">
                                                                    <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
                                                                    <label>8.00AM - 10.00AM</label>
                                                                </div>
                                                            </div>
                                                            <div class="field">
                                                                <div class="ui radio checkbox chck-rdio">
                                                                    <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                    <label>10.00AM - 12.00PM</label>
                                                                </div>
                                                            </div>
                                                            <div class="field">
                                                                <div class="ui radio checkbox chck-rdio">
                                                                    <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                    <label>12.00PM - 2.00PM</label>
                                                                </div>
                                                            </div>
                                                            <div class="field">
                                                                <div class="ui radio checkbox chck-rdio">
                                                                    <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                    <label>2.00PM - 4.00PM</label>
                                                                </div>
                                                            </div>
                                                            <div class="field">
                                                                <div class="ui radio checkbox chck-rdio">
                                                                    <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                                    <label>4.00PM - 6.00PM</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="collapsed next-btn16 hover-btn" role="button" data-toggle="collapse"  href="#collapseFour"> Proccess to payment </a>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-step">
                            <div class="checkout-card" id="headingFour">
                                <span class="checkout-step-number">4</span>
                                <h4 class="checkout-step-title"> 
                                    <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Payment</button>
                                </h4>
                            </div>
                            <div id="collapseFour"  aria-labelledby="headingFour" data-parent="#checkout_wizard">
                                <div class="checkout-step-body">
                                    <div class="payment_method-checkout">	
                                        <div class="row">	
                                            <div class="col-md-12">
                                                <div class="rpt100">													
                                                    <ul class="radio--group-inline-container_1">
                                                        <li>
                                                            <div class="radio-item_1">
                                                                <input id="cashondelivery1" value="cashondelivery" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                <label for="cashondelivery1" class="radio-label_1">Cash on Delivery</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="radio-item_1">
                                                                <input id="card1" value="card" name="paymentmethod" type="radio" data-minimum="50.0">
                                                                <label  for="card1" class="radio-label_1">Credit / Debit Card</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="form-group return-departure-dts" data-method="cashondelivery">															
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="pymnt_title">
                                                                <h4>Cash on Delivery</h4>
                                                                <p>Cash on Delivery will not be available if your order value exceeds $10.</p>
                                                            </div>
                                                        </div>														
                                                    </div>
                                                </div>
                                                <div class="form-group return-departure-dts" data-method="card">															
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="pymnt_title mb-4">
                                                                <h4>Credit / Debit Card</h4>
                                                            </div>
                                                        </div>														
                                                        <div class="col-lg-6">
                                                            <div class="form-group mt-1">
                                                                <label class="control-label">Holder Name*</label>
                                                                <div class="ui search focus">
                                                                    <div class="ui left icon input swdh11 swdh19">
                                                                        <input class="prompt srch_explore" type="text" name="holdername" value="" id="holder[name]" required="" maxlength="64" placeholder="Holder Name">															
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group mt-1">
                                                                <label class="control-label">Card Number*</label>
                                                                <div class="ui search focus">
                                                                    <div class="ui left icon input swdh11 swdh19">
                                                                        <input class="prompt srch_explore" type="text" name="cardnumber" value="" id="card[number]" required="" maxlength="64" placeholder="Card Number">															
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group mt-1">																	
                                                                <label class="control-label">Expiration Month*</label>
                                                                <select class="ui fluid search dropdown form-dropdown" name="card[expire-month]">
                                                                    <option value="">Month</option>
                                                                    <option value="1">January</option>
                                                                    <option value="2">February</option>
                                                                    <option value="3">March</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">May</option>
                                                                    <option value="6">June</option>
                                                                    <option value="7">July</option>
                                                                    <option value="8">August</option>
                                                                    <option value="9">September</option>
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>
                                                                  </select>	
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group mt-1">
                                                                <label class="control-label">Expiration Year*</label>
                                                                <div class="ui search focus">
                                                                    <div class="ui left icon input swdh11 swdh19">
                                                                        <input class="prompt srch_explore" type="text" name="card[expire-year]" maxlength="4" placeholder="Year">															
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group mt-1">
                                                                <label class="control-label">CVV*</label>
                                                                <div class="ui search focus">
                                                                    <div class="ui left icon input swdh11 swdh19">
                                                                        <input class="prompt srch_explore" name="card[cvc]" maxlength="3" placeholder="CVV">															
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="next-btn16 hover-btn">Place Order</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="pdpt-bg mt-0">
                        <div class="pdpt-title">
                            <h4>Order Summary</h4>
                        </div>

                        <?php 
            
                        use App\Http\Controllers\ProductController;
                        $total= ProductController::cartItem();
                        $product= ProductController::cartList();
                        ?>



                        <div class="right-cart-dt-body">

                            @foreach ($product as $item)
                            <?php 
                            $price= $item->getProduct->product_selling_price;
                            $discount_price= $item->getProduct->product_discount_price;

                            $quantity=$item->product_quantity;
                            $total_price= $price*$quantity;
                            $total_discount_price= $discount_price*$quantity;
                            $total=$total+$total_discount_price ;
                            ?>


                            <div class="cart-item border_radius">
                                <div class="cart-product-img">
                                    <img src="{{$item->getProduct->product_image}}" alt="">
                                </div>
                                <div class="cart-text">
                                    <h4>{{$item->getProduct->product_name}}</h4>
                                    <div class="quantity buttons_added">
                                        <h5>{{$item->product_quantity}} Item(s) Added To Cart</h4>
            
                                    </div>
                                    <div class="cart-item-price">Price: {{$total_discount_price}}<span>{{$total_price}}</span></div>


                                    <form action=" {{url('remove_from_cart') }}" method="POST"> 
                                        @csrf                                           
                                         <input type="hidden" name="cart_id" value="{{$item->id}}">
                                    <button type="submit" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
                                </form>


                                </div>		
                            </div>

                            @endforeach



                        </div>



                        <div class="total-checkout-group">
                            
                            <div class="cart-total-dil pt-3">
                                <h4>Delivery Charges</h4>
                                <span>BDT 60 Taka</span>
                            </div>
                        </div>
                       
                        <div class="main-total-cart">
                            <h2>Total</h2>
                            <span>{{$total}}</span>
                        </div>
                        <div class="payment-secure">
                            <i class="uil uil-padlock"></i>Secure checkout
                        </div>
                    </div>
                    <a href="#" class="promo-link45">Have a promocode?</a>
                    <div class="checkout-safety-alerts">
                        <p><i class="uil uil-sync"></i>100% Replacement Guarantee</p>
                        <p><i class="uil uil-check-square"></i>100% Genuine Products</p>
                        <p><i class="uil uil-shield-check"></i>Secure Payments</p>
                    </div>
                </div>
            </div>
        </div>
    </div>	
</div>
<!-- Body End -->

</body>

<script src="{{asset('resources')}}/frontend/js/jquery-3.3.1.min.js?{{time()}}"></script>
<script src="{{asset('resources')}}\frontend\vendor\bootstrap\js\bootstrap.bundle.min.js?{{time()}}"></script>



@endsection