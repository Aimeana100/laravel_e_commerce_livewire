<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><a href="/cart" class="link">Cart</a></li>
            <li class="item-link"><span>Checkout</span></li>
        </ul>
    </div>
    <div class=" main-content-area">
        <div class="wrap-address-billing row">
            <div class="col-md-6 col-xs-12">
                <h3 class="box-title"><b> Billing Address</b></h3>
                <form class="" action="#" method="get" name="frm-billing">
                    <p class="row-in-form">
                        <label for="fname">first name<span>*</span></label>
                        <input id="fname" type="text" name="fname" value="" placeholder="Your name">
                    </p>
                    <p class="row-in-form">
                        <label for="lname">last name<span>*</span></label>
                        <input id="lname" type="text" name="lname" value="" placeholder="Your last name">
                    </p>
                    <p class="row-in-form">
                        <label for="email">Email Addreess:</label>
                        <input id="email" type="email" name="email" value="" placeholder="Type your email">
                    </p>
                    <p class="row-in-form">
                        <label for="phone">Phone number<span>*</span></label>
                        <input id="phone" type="number" name="phone" value="" placeholder="10 digits format">
                    </p>
                    <p class="row-in-form">
                        <label for="add">Address:</label>
                        <input id="add" type="text" name="add" value="" placeholder="Street at apartment number">
                    </p>
                    <p class="row-in-form">
                        <label for="country">Country<span>*</span></label>
                        <input id="country" type="text" name="country" value="" placeholder="United States">
                    </p>
                    <p class="row-in-form">
                        <label for="zip-code">Postcode / ZIP:</label>
                        <input id="zip-code" type="number" name="zip-code" value="" placeholder="Your postal code">
                    </p>
                    <p class="row-in-form">
                        <label for="city">Town / City<span>*</span></label>
                        <input id="city" type="text" name="city" value="" placeholder="City name">
                    </p>
                </form>
            </div>
            <div class="col-md-6 col-xs-12">
                <h3 class="box-title"><b> Your Orders</b></h3>
            <hr/>
                <div class="wrap-iten-in-cart">
                    {{-- @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success</strong> {{Session::get('success_message')}}
                        </div>
                    @endif --}}
                    @if(Cart::count() > 0)
                        <ul class="products-cart">
                        @foreach(Cart::content() as $item)
                            <li class="pr-cart-item row">
                                <div class="product-image  col-4">
                                    <figure><img src="{{ ('assets/images/products') }}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
                                </div>
                                <div class="product-name  col-6 row">
                                   <div class=" m-b-2">
                                    <a class="link-to-product" href="{{ route('product.details', ['slug'=>$item->model->slug]) }}"> {{$item->model->name}} </a>
                                </div>
                                    <div class="m-b-2">
                                        ${{$item->price}}

                                    </div>
                                </div>


                                <div class="quantity col-2">
                                        <label name="product-quatity"> {{$item->qty}} </label>
                                </div>
                            </li>
                            @endforeach

                        </ul>
                        @else
                        <p> Your Cart is Empty </p>
                    @endif
                    </div>
            <hr/>

            {{-- <div class="summary"> --}}
                <div class="order-summary">
                    <p class="summary-info"><span class="title">Subtotal</span><b class="index">${{Cart::subtotal()}}</b></p>
                    <p class="summary-info"><span class="title">Tax</span><b class="index">${{Cart::tax()}}</b></p>
                    <p class="summary-info total-info "><span class="title"><b>Total</b></span><b class="index">${{Cart::total()}}</b></p>
                </div>

            {{-- </div> --}}

            </div>

        </div>
        <div class="summary summary-checkout">
            <div class="summary-item payment-method">
                <h4 class="title-box">Payment Method</h4>
                <p class="summary-info"><span class="title">Check / Money order</span></p>
                <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
                <div class="choose-payment-methods">
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                        <span>Direct Bank Transder</span>
                        <span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
                    </label>
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
                        <span>visa</span>
                        <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                    </label>
                    <label class="payment-method">
                        <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                        <span>Paypal</span>
                        <span class="payment-desc">You can pay with your credit</span>
                        <span class="payment-desc">card if you don't have a paypal account</span>
                    </label>
                </div>
                <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">$100.00</span></p>
                <a href="thankyou.html" class="btn btn-medium">Place order now</a>
            </div>
            <div class="summary-item shipping-method">
                <h4 class="title-box f-title">Shipping method</h4>
                <p class="summary-info"><span class="title">Flat Rate</span></p>
                <p class="summary-info"><span class="title">Fixed $50.00</span></p>
                <h4 class="title-box">Discount Codes</h4>
                <p class="row-in-form">
                    <label for="coupon-code">Enter Your Coupon code:</label>
                    <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">
                </p>
                <a href="#" class="btn btn-small">Apply</a>
            </div>
        </div>

        <div class="wrap-show-advance-info-box style-1 box-in-site">
            <h3 class="title-box">Most Viewed Products</h3>
            <div class="wrap-products">
                <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                    @foreach ($mostViewedProducts as $item)

                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="#" title="{{$item->name}}">
                                <figure><img src="{{ ('assets/images/products') }}/{{$item->image}}" width="214" height="214" alt="{{$item->name}}"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item new-label">new</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="{{route('product.details',['slug'=> $item->slug])}}" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="#" class="product-name"><span>{{$item->name}}</span></a>
                            <div class="wrap-price"><span class="product-price">${{$item->regular_price}}</span></div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div><!--End wrap-products-->
        </div>

    </div><!--end main content area-->
</div><!--end container-->

</main>
