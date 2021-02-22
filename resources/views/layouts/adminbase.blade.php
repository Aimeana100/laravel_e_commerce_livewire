<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>@yield('page_title')</title>
   {{-- <link href="{{asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all"> --}}


{{-- <link rel="icon" type="image/x-icon" href="https://royalscripts.com/demo/kingcommerce/assets/images/1571567283favicon.png" /> --}}

<link href="https://royalscripts.com/demo/kingcommerce/assets/admin/css/bootstrap.min.css" rel="stylesheet" />

<link rel="stylesheet" href="https://royalscripts.com/demo/kingcommerce/assets/admin/css/fontawesome.css">

<link rel="stylesheet" href="https://royalscripts.com/demo/kingcommerce/assets/admin/css/icofont.min.css">

<link href="https://royalscripts.com/demo/kingcommerce/assets/admin/plugins/fullside-menu/css/dark-side-style.css" rel="stylesheet" />
<link href="https://royalscripts.com/demo/kingcommerce/assets/admin/plugins/fullside-menu/waves.min.css" rel="stylesheet" />
<link href="https://royalscripts.com/demo/kingcommerce/assets/admin/css/plugin.css" rel="stylesheet" />
<link href="https://royalscripts.com/demo/kingcommerce/assets/admin/css/jquery.tagit.css" rel="stylesheet" />
<link rel="stylesheet" href="https://royalscripts.com/demo/kingcommerce/assets/admin/css/bootstrap-coloroicker.css">


<link href="https://royalscripts.com/demo/kingcommerce/assets/admin/css/style.css" rel="stylesheet" />
<link href="https://royalscripts.com/demo/kingcommerce/assets/admin/css/custom.css" rel="stylesheet" />
<link href="https://royalscripts.com/demo/kingcommerce/assets/admin/css/responsive.css" rel="stylesheet" />
<link href="https://royalscripts.com/demo/kingcommerce/assets/admin/css/common.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


    @livewireStyles

</head>

<body>


<div class="header">

    <div class="container-fluid">
    <div class="d-flex justify-content-between">
    <div class="menu-toggle-button">
    <a class="nav-link" href="javascript:;" id="sidebarCollapse">
    <div class="my-toggl-icon">
    <span class="bar1"></span>
    <span class="bar2"></span>
    <span class="bar3"></span>
    </div>
    </a>
    </div>
    <div class="right-eliment">
    <ul class="list">


    <li class="login-profile-area">
    <a class="dropdown-toggle-1" href="javascript:;">
    <div class="user-img">
    <img src="https://royalscripts.com/demo/kingcommerce/assets/images/admins/1556780563user.png" alt="">
    </div>
    </a>
    <div class="dropdown-menu">
    <div class="dropdownmenu-wrapper">
    <ul>
        @if(session('ADMIN_F_NAME'))

       <h4>{{ session('ADMIN_F_NAME') }}</h4>
      @else
      <h5>Welcome!</h5>

    @endif
    <li>
    <a href="#"><i class="fas fa-user"></i> Edit Profile</a>
    </li>
    <li>
    <a href="#"><i class="fas fa-cog"></i> Change Password</a>
    </li>
    <li>
    <a href="{{route('logout')}}"><i class="fas fa-power-off"></i> Logout</a>
    </li>
    </ul>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>



    <div class="wrapper">

        <nav id="sidebar" class="nav-sidebar">
        <ul class="list-unstyled components" id="accordion">
        <li class="@yield('dashboard_select')">
        <a href="{{route('admin.dashboard')}}" class="wave-effect active"><i class="fa fa-home mr-2"></i>Dashboard</a>
        </li>
        <li>
        <a href="#order" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false"><i class="fas fa-hand-holding-usd"></i>Orders</a>
        <ul class="collapse list-unstyled" id="order" data-parent="#accordion">
        <li>
        <a href="#"> All Orders</a>
        </li>
        <li>
        <a href="#"> Pending Orders</a>
        </li>
        <li>
        <a href="#"> Processing Orders</a>
        </li>
        <li>
        <a href="#"> Completed Orders</a>
        </li>
        <li>
        <a href="#"> Declined Orders</a>
        </li>
        </ul>
        </li>
        <li>
        <a href="#menu2" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="fab fa-product-hunt"></i>Products
        </a>
        <ul class="collapse list-unstyled" id="menu2" data-parent="#accordion">
        <li>
        <a href="{{ route('admin.addproduct')}}"><span>Add New Product</span></a>
        </li>
        <li>
        <a href="{{ route('admin.products')}}"><span>All Products</span></a>
        </li>
        <li>
        <a href="#"><span>Deactivated Product</span></a>
        </li>
        </ul>
        </li>
        <li>


        </li>
        <li>
        <a href="#menu3" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
        <i class="fa fa-user"></i>Customers
        </a>
        <ul class="collapse list-unstyled" id="menu3" data-parent="#accordion">
        <li>
        <a href="#"><span>Customers List</span></a>
        </li>

        </ul>

        </li>
        <li>
            <a href="#"><span>Featured Banners</span></a>
        </li>

        <li>
            <a href="{{ route('admin.categories')}}" class="wave-effect"><i class="fas fa-percentage"></i>Manage Categories</a>
        </li>

        </ul>



        </nav>


        <div class="content-area" id="modalEdit">

            {{$slot}}
        </div>



     </div>  {{-- Closing wrapper --}}







<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/vendors/jquery-1.12.4.min.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/vendors/vue.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/vendors/bootstrap.min.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/jqueryui.min.js"></script>

<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/plugins/fullside-menu/waves.min.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/plugin.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/Chart.min.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/tag-it.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/nicEdit.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/bootstrap-colorpicker.min.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/notify.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/jquery.canvasjs.min.js"></script>
<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/load.js"></script>

<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/custom.js"></script>

<script src="https://royalscripts.com/demo/kingcommerce/assets/admin/js/myscript.js"></script>

<script language="JavaScript">
    displayLineChart();

    function displayLineChart() {
        var data = {
            labels: [
            '19 Feb','18 Feb','17 Feb','16 Feb','15 Feb','14 Feb','13 Feb','12 Feb','11 Feb','10 Feb','09 Feb','08 Feb','07 Feb','06 Feb','05 Feb','04 Feb','03 Feb','02 Feb','01 Feb','31 Jan','30 Jan','29 Jan','28 Jan','27 Jan','26 Jan','25 Jan','24 Jan','23 Jan','22 Jan','21 Jan',
            ],
            datasets: [{
                label: "Prime and Fibonacci",
                fillColor: "#3dbcff",
                strokeColor: "#0099ff",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [
                '0','0','0','1','0','0','0','2','0','0','0','0','0','0','0','3','0','0','0','0','0','0','0','0','0','0','0','0','0','0',
                ]
            }]
        };
        var ctx = document.getElementById("lineChart").getContext("2d");
        var options = {
            responsive: true
        };
        var lineChart = new Chart(ctx).Line(data, options);
    }



</script>
<script type="text/javascript">
    $('#poproducts').dataTable( {
      "ordering": false,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : false,
          'info'        : false,
          'autoWidth'   : false,
          'responsive'  : true,
          'paging'  : false
    } );
    </script>
<script type="text/javascript">
    $('#pproducts').dataTable( {
      "ordering": false,
      'lengthChange': false,
          'searching'   : false,
          'ordering'    : false,
          'info'        : false,
          'autoWidth'   : false,
          'responsive'  : true,
          'paging'  : false
    } );
    </script>






{{--
    <script src="{{asset('admin_assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/main.js')}}"></script>
 --}}

    @livewireScripts
</body>
</html>
