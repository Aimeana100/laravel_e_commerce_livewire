
@section('page_title', 'Dashboard')
<div>
          {{-- start cards --}}
          <div class="row row-cards-one">
            <div class="col-md-12 col-lg-6 col-xl-4">
               <div class="mycard bg1">
               <div class="left">
               <h5 class="title">Orders Pending! </h5>
               <span class="number">50</span>
               <a href="#" class="link">View All</a>
               </div>
               <div class="right d-flex align-self-center">
               <div class="icon">
                <i class="fas fa-dollar-sign"></i>
               </div>
               </div>
               </div>
               </div>
               <div class="col-md-12 col-lg-6 col-xl-4">
               <div class="mycard bg2">
               <div class="left">
               <h5 class="title">Orders Procsessing!</h5>
               <span class="number">20</span>
               <a href="#" class="link">View All</a>
               </div>
               <div class="right d-flex align-self-center">
               <div class="icon">
               <i class="fa fa-truck-moving"></i>
               </div>
               </div>
               </div>
               </div>
               <div class="col-md-12 col-lg-6 col-xl-4">
               <div class="mycard bg3">
               <div class="left">
               <h5 class="title">Orders Completed!</h5>
               <span class="number">87</span>
               <a href="#" class="link">View All</a>
               </div>
               <div class="right d-flex align-self-center">
               <div class="icon">
               <i class="icofont-check-circle"></i>
               </div>
               </div>
               </div>
               </div>
               <div class="col-md-12 col-lg-6 col-xl-4">
               <div class="mycard bg4">
               <div class="left">
               <h5 class="title">Total Products!</h5>
               <span class="number">45</span>
               <a href="{{ route('admin.products')}}" class="link">View All</a>
               </div>
               <div class="right d-flex align-self-center">
               <div class="icon">
               <i class="fa fa-product-hunt"></i>
               </div>
               </div>
               </div>
               </div>
               <div class="col-md-12 col-lg-6 col-xl-4">
               <div class="mycard bg5">
               <div class="left">
               <h5 class="title">Total Customers!</h5>
               <span class="number">20</span>
               <a href="#" class="link">View All</a>
               </div>
               <div class="right d-flex align-self-center">
               <div class="icon">
               <i class="fa fa-user"></i>
               </div>
               </div>
               </div>
               </div>

               </div>
               {{-- end cards --}}


               {{-- data Summary  start--}}

               <div class="row row-cards-one">
                <div class="col-md-6 col-xl-3">
                <div class="card c-info-box-area">
                <div class="c-info-box box1">
                <p>4</p>
                </div>
                <div class="c-info-box-content">
                <h6 class="title">New Customers</h6>
                <p class="text">Last 30 Days</p>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-xl-3">
                <div class="card c-info-box-area">
                 <div class="c-info-box box2">
                <p>98</p>
                </div>
                <div class="c-info-box-content">
                <h6 class="title">Total Customers</h6>
                <p class="text">All Time</p>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-xl-3">
                <div class="card c-info-box-area">
                <div class="c-info-box box3">
                <p>6</p>
                </div>
                <div class="c-info-box-content">
                <h6 class="title">Total Sales</h6>
                <p class="text">Last 30 days</p>
                </div>
                </div>
                </div>
                <div class="col-md-6 col-xl-3">
                <div class="card c-info-box-area">
                <div class="c-info-box box4">
                <p>87</p>
                </div>
                <div class="c-info-box-content">
                <h6 class="title">Total Sales</h6>
                <p class="text">All Time</p>
                </div>
                </div>
                </div>
                </div>

               {{-- data summary end --}}


               {{-- product sales  chart start --}}
               <div class="row row-cards-one">
                <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                <h5 class="card-header">Total Sales in Last 30 Days</h5>
                <div class="card-body">
                <canvas id="lineChart" width="942" height="417" style="width: 942px; height: 417px;"></canvas>
                </div>
                </div>
                </div>
                </div>

               {{-- product sals chart end --}}



               {{-- data summary popular products start --}}
               <div class="row row-cards-one">
                <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                <h5 class="card-header">Latest 10 Product(s)</h5>
                <div class="card-body">
                <div class="table-responsiv  dashboard-home-table">
                <div id="poproducts_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row btn-area"><div class="col-sm-4"></div><div class="col-sm-4"></div></div><div class="row"><div class="col-sm-12"><table id="poproducts" class="table table-hover dt-responsive dataTable no-footer dtr-inline" role="grid" width="100%" cellspacing="0">
                <thead>
                <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1">Featured Image</th><th class="sorting_disabled" rowspan="1" colspan="1">Name</th><th class="sorting_disabled" rowspan="1" colspan="1">Category</th><th class="sorting_disabled" rowspan="1" colspan="1">Price</th><th class="sorting_disabled" rowspan="1" colspan="1"></th></tr>
                </thead>
                <tbody>

                    @foreach ($latest_products as $product)
                    <tr role="row" class="odd">
                        <td tabindex="0"><img src="{{ asset('assets/images/products') }}/{{$product->image}}"></td>
                        <td>{{$product->name}}</td>
                        <td>
                            {{$product->category->name}}

                        </td>
                        <td> {{$product->regular_price}}$ </td>
                        <td>
                        <div class="action-list"><a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}"><i class="fas fa-eye"></i> Details</a>
                        </div>
                        </td>
                        </tr>
                    @endforeach



            </tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div><div class="col-sm-12 col-md-7"></div></div></div>
                </div>
                </div>
                </div>
                </div>
                </div>

               {{-- data summary popular products end --}}



</div>
