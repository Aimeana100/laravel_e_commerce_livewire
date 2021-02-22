<div>
     <style>
        nav svg{
            height:  15px;;
        }
        nav .hidden{
            display: block !important;
        }
     </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel pane-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Category
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

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
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->slug}}</td>
                            <td>
                                <a href="{{route('admin.editcategory',['category_slug'=>$list->slug])}}"><button type="button" class="btn btn-success"><i class="fa fa-edit fa-1x" ></i></button></a>
                                <a href="#" wire:click="deleteCategory({{$list->id}})" style="margin-left: 10px;" > <i class="fa fa-times fa-2x text-danger" ></i> </a>

                                @if($list->status==1)
                                    <a href=""><button type="button" class="btn btn-primary">Active</button></a>
                                 @elseif($list->status==0)
                                    <a href=""><button type="button" class="btn btn-warning">Deactive</button></a>
                                @endif

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{$categories->links()}}        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>