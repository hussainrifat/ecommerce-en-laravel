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
                    <form action="{{url('payment')}}" method="POST"> 
                        @csrf
                    <div id="checkout_wizard" class="checkout accordion left-chck145">

       
                     
                        
                        <div class="checkout-step">
                            <div class="checkout-card" id="headingTwo">
                                <h4 class="checkout-step-title">
                                    <h4> Your Billing Address</h1> 
                                </h4>
                            </div>
                                <div class="checkout-step-body">
                                    <div class="checout-address-step">
                                        <div class="row">
                                            <div class="col-lg-12">												
                                                    <!-- Multiple Radios (inline) -->
                                                
                                                    <div class="address-fieldset">
                                                        <div class="row">
                                                          
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Billing Name</label>
                                                                    <input  name="b_name" id="b_name" type="text" placeholder="Your Name" class="form-control input-md" required="">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Contact Number</label>
                                                                    <input name="b_contact_number" id="b_contact_number" type="text" placeholder="Your Contact Number" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Flat / House </label>
                                                                    <input id="b_house" name="b_house" type="text" placeholder="Address" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Street</label>
                                                                    <input id="b_street" name="b_street" type="text" placeholder="Street Address" class="form-control input-md">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Postal Code*</label>
                                                                    <input id="b_postal" name="b_postal" type="text" placeholder="Postal Code" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">City*</label>
                                                                    <input id="b_city" name="b_city" type="text" placeholder="Enter City" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                       
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>


                            </div>
                            <input type="checkbox" id="billtoship" >
                            <label for="vehicle1"> Shipping Address As Same As Billing Address</label><br>


                        </div>

                        <div class="checkout-step">
                            <div class="checkout-card" id="headingTwo">
                                <h4 class="checkout-step-title">
                                    <h4> Your Shipping Address</h1> 
                                </h4>
                            </div>
                                <div class="checkout-step-body">
                                    <div class="checout-address-step">
                                        <div class="row">
                                            <div class="col-lg-12">												
                                                    <!-- Multiple Radios (inline) -->
                                                 
                                                    <div class="address-fieldset">
                                                        <div class="row">
                                                                  
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Shipping Name</label>
                                                                    <input name="s_name" id="s_name" type="text" placeholder="Your Name" class="form-control input-md" required="">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Contact Number</label>
                                                                    <input name="s_contact_number" id="s_contact_number" type="text" placeholder="Your Contact Number" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Flat / House </label>
                                                                    <input id="s_house" name="s_house" type="text" placeholder="Address" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Street</label>
                                                                    <input id="s_street" name="s_street" type="text" placeholder="Street Address" class="form-control input-md">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">Postal Code*</label>
                                                                    <input id="s_postal" name="s_postal" type="text" placeholder="Postal Code" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="control-label">City*</label>
                                                                    <input id="s_city" name="s_city" type="text" placeholder="Enter City" class="form-control input-md" required="">
                                                                </div>
                                                            </div>
                                                      
                                                    
                                                        
                                                        
                                                        </div>
                                                    </div>
                                             
                                            </div>
                                        </div>
                                    </div>


                            </div>

                        </div>


                        <button type="submit"  class="login-btn hover-btn">Proceed To Checkout</button>

                   
                    </div>
                </form>
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
                            <span>{{$total+60}}</span>
                        </div>
                        <div class="payment-secure">
                            <a href="{{url('secure_payment')}}" class="promo-link45">Secure Checkout</a>

                        </div>
                    </div>
                    <a href="" class="promo-link45">Have a promocode?</a>
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

<script>

$('#billtoship').click(function(){

    if(this.checked)
    {
        $('#s_name').val($('#b_name').val());
        $('#s_house').val($('#b_house').val());
        $('#s_street').val($('#b_street').val());
        $('#s_postal').val($('#b_postal').val());
        $('#s_city').val($('#b_city').val());
        $('#s_contact_number').val($('#b_contact_number').val());


    }

    else
    {
     $('#s_name').val(null);
    $('#s_house').val(null);
    $('#s_street').val(null);
    $('#s_postal').val(null);
    $('#s_city').val(null);
    $('#s_contact_number').val(null);


    }



});

</script>



@endsection