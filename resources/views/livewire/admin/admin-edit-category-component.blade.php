<div>
<div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel pane-default">
                    <div class=" panel-heading">
                      <div class="row"> 
                        <div class="col-md-6">
                            Edit Category
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">All Category</a>
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
                       <form class="form-hoizontal" wire:submit.prevet="updateCategory">
                            <div class="form-group">
                                <label for="category_name control-label" class="col-md-4 control-label">Category Name</label>
                            
                                <input id="category_name" type="text" placeholder="Category name"  class="form-control input-md" wire:model="name" wire:keyup="generateslug">
                            </div>

                            <div class="form-group">
                                <label for="category_slug control-label" class="col-md-4 control-label">Category Slug</label>
                            
                                <input id="category_slug" type="text" placeholder="Category Slug" class="form-control input-md" wire:model="slug">
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                            
                                <button id="" type="submit" class="btn btn-primary"> Update</button>
                            </div>
                       </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
