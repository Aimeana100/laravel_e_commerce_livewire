<div>
<style>
        nav svg{
            height:  15px;;
        }
        nav .hidden{
            display: block !important;
        }
     </style>
    <div class="container" style="padding: 30px">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <div class="row">
                    <div class="col-md-6">
                    All Products
                    </div>
                    <div class="col-md-6">
                    <a href="{{route('admin.addproduct') }}" class="btn btn-success pull-right " >Add Product</a>
                    </div>
                    </div>
                    </div>
                    <div class="panel-body">
                    @if(Session::has('message'))
                    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    {{ session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                    @endif
                    <table class="table table-striped table-data3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                            <th>Category</th>
                            {{-- <th>Date</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td><img src="{{ asset('assets/images/products') }}/{{$list->image}}" width="60" ></td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->stock_status}}</td>
                            <td>{{$list->regular_price}}</td>
                             <td>{{$list->category->name}}</td>
                            {{-- <td>{{$list->created_at}}</td> --}}
                            <td>
                                <a href="{{ route('admin.editproduct', ['product_slug'=>$list->slug]) }}"><button type="button" class="btn btn-success"><i class="fa fa-edit fa-1x" ></i></button></a>
                                <a href="#" wire:click.prevent="deleteProduct({{$list->id}})" style="margin-left: 10px;" > <i class="fa fa-times fa-2x text-danger" ></i> </a>


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
