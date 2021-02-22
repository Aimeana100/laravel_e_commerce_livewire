<div>
<div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel pane-default">
                    <div class=" panel-heading">
                      <div class="row"> 
                        <div class="col-md-6">
                            Add new Product
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Products</a>
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
                       <form class="form-hoizontal" enctype="multipart/form-data" wire:submit.prevent="storeProduct">
                            <div class="form-group">
                                <label for="product_name" class="col-md-8 control-label">Product Name</label>
                                <div class="col-md-8">
                                    <input id="product_name" type="text" placeholder="Product name"  class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product_slug" class="col-md-8 control-label">Product Slug</label>
                                <div class="col-md-8">
                                    <input id="product_slug" type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="product_short_desc" class="col-md-8 control-label">Short Description </label>
                                <div class="col-md-8">
                                    <textarea id="product_short_desc" type="text" placeholder="Short Descrition"  rows="9"  class="form-control" wire:model="short_description" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="desc"  class="col-md-8 control-label">Description </label>
                                <div class="col-md-8">
                                    <textarea id="desc" placeholder="Descrition"  class="form-control" rows="9"  wire:model="description" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-8 control-label">Regural Price </label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Regural Price"  class="form-control input-md" wire:model="regular_price">
                                </div>                           
                            </div>                           

                            <div class="form-group">
                                <label  class="col-md-8 control-label">Sale Price </label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Sale Price"  class="form-control input-md" wire:model="sale_price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-8 control-label">SKU </label>
                            <div class="col-md-8">
                                <input type="text" placeholder="SKU"  class="form-control input-md" wire:model="SKU">
                            </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-8 control-label">Stock </label>
                            <div class="col-md-8">
                                <select class="form-control" wire:model="stock_status">
                                    <option value="instock">InStock</option>
                                    <option value="outofstock">Out of Stock</option>
                                </select>
                            </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-8 control-label">Featured </label>
                            <div class="col-md-8">
                                <select class="form-control" wire:model="featured">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-8 control-label">Quantity </label>
                                <div class="col-md-8">
                                    <input type="text" placeholder="Quantity"  class="form-control" wire:model="quantity">
                                </div>                           
                            </div>  

                            <div class="form-group">
                                <label   class="col-md-8 form-control-label">Product Image </label>
                                <div class="col-md-8">
                                    <input type="file" class="form-control input-file" wire:model="image">
                                    @if($image)
                                       <img src="{{$image->temporaryUrl()}}" width="120" />
                                     @endif
                                </div>                           
                            </div>  

                            <div class="form-group">
                                <label  class="col-md-8 control-label">Category </label>
                            <div class="col-md-8">
                                <select class="form-control" wire:model="category_id">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>                                                      

                            <div class="form-group">
                                <label class="col-md-8 control-label"></label>
                                <div class="col-md-8">
                                    <button id="" type="submit" class="btn btn-primary"> Submit</button>
                                </div>
                            </div>
                       </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
