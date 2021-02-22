
	<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div style=" z-index: -1;"class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
					<div class="item-slide">
						<img src="{{ asset('assets/images/main-slider-1-1.jpg') }}" alt="" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title">Kid Smart <b>Watches</b></h2>
							<span class="subtitle">Compra todos tus productos Smart por internet.</span>
							<p class="sale-info">Only price: <span class="price">$59.99</span></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
					<div class="item-slide">
						<img src="{{ asset('assets/images/main-slider-1-2.jpg') }}" alt="" class="img-slide">
						<div class="slide-info slide-2">
							<h2 class="f-title">Extra 25% Off</h2>
							<span class="f-subtitle">On online payments</span>
							<p class="discount-code">Use Code: #FA6868</p>
							<h4 class="s-title">Get Free</h4>
							<p class="s-subtitle">TRansparent Bra Straps</p>
						</div>
					</div>
					<div class="item-slide">
						<img src="{{ asset('assets/images/main-slider-1-3.jpg') }}" alt="" class="img-slide">
						<div class="slide-info slide-3">
							<h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
							<span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
							<p class="sale-info">Stating at: <b class="price">$225.00</b></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
				</div>
			</div>

			<!-- banner connect-->
			<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Free Shipping</h4>
								<p class="fc-desc">Free On Oder Over $99</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Guarantee</h4>
								<p class="fc-desc">30 Days Money Back</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Safe Payment</h4>
								<p class="fc-desc">Safe your online payment</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-life-ring" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Online Suport</h4>
								<p class="fc-desc">We Have Support 24/7</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			</div>

			<!-- Featured-->
			<div class="wrap-show-advance-info-box style-1 border border-1 border-success has-countdown">
				<h3 class="title-box">Featured Products</h3>



					<div class="row">

						<ul class="product-list grid-products equal-container wrap-products style-nav-1 equal-container">
						@foreach($featuredProducts as $product)
							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-6 ">
								<div class="product product-style-2 product-style-3 equal-elem ">
									<div class="product-thumnail">
										<a href="{{ route('product.category', ['category_slug'=>$product->Cat_slug]) }} " title="{{$product->name}}">
											<figure><img src="{{ asset('assets/images/products') }}/{{$product->image}} " alt="{{$product->name}}"></figure>
										</a>
                                        <div class="wrap-btn">
                                            <a href="{{ route('product.details', ['slug'=>$product->slug]) }}" class="function-link">quick view</a>
                                        </div>
									</div>

									<div class="product-info">
										<a href="{{ route('product.details', ['slug'=>$product->slug]) }} " class="product-name"><span>{{$product->name}}</span></a>
										<div class="wrap-price"><span class="product-price">${{ $product->regular_price }} </span></div>
										<a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->regular_price}})"  >Add To Cart</a>
									</div>
								</div>
							</li>
							@endforeach
						</ul>

					</div>

				{{-- <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>


					@foreach($allproducts as $product)
					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="{{url('/shop')}}" title="{{ $product->name}}">
								<figure><img src="{{ asset('assets/images/products') }}/{{$product->image}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item sale-label">sale</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info">
							<a href="#" class="product-name"><span>{{ $product->name}}</span></a>
							<div class="wrap-price"><ins><p class="product-price">${{ $product->sale_price}}</p></ins> <del><p class="product-price">${{$product->regular_price}}</p></del></div>
						</div>
					</div>
					@endforeach

				</div> --}}
			</div>

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Latest Products</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{ asset('assets/images/digital-electronic-banner.jpg') }}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                                    @foreach ($AllLatestProducts as $item)
									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="{{ route('product.details',['slug'=>$item->slug]) }}" title="{{$item->name}}">
												<figure><img src="{{ asset('assets/images/products') }}/{{$item->image}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>{{ $item->name }}</span></a>
											<div class="wrap-price"><span class="product-price">${{$item->sale_price}}</span></div>
										</div>
									</div>
                                    @endforeach



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>/<small>subjected to change this banner</small>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<figure><img src="{{ asset('assets/images/products') }}/{{$allproducts[0]->image}}" width="1170" height="240" alt=""></figure>
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">

						@foreach($categories as $category)

						<a href="#category-{{$category->slug}}" class="tab-control-item">{{$category->name}}</a>

						@endforeach

						</div>
						<div class="tab-contents">
                            @php $count = 0; @endphp
                            @foreach ($categories as $category)

                            @php
                            $count++;
                            @endphp
                            @php if ( $count == 1) $isActive = 'active'; @endphp

                                <div class="tab-content-item {{$isActive}}" id="category-{{$category->slug}}">

								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                                    @foreach ($category->products as $product)
                                    <div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="{{ route('product.details',['slug'=>$product->slug]) }}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
												<figure><img src="{{ asset('assets/images/products') }}/{{$product->image}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item new-label">new</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>{{$product->name}}</span></a>
											<div class="wrap-price"><span class="product-price">{{$product->regular_price}}</span></div>
										</div>
									</div>


                                    @endforeach

								</div>
							</div>

                            @endforeach


						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
