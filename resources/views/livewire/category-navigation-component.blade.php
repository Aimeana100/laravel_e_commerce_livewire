
    <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" style="" >

        <li class="menu-item home-icon ">
            <div class="dropdown" style="float-left">
                <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    All Category
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="z-index:1000">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="{{route('product.category',['category_slug'=>$category->slug])}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </li>
    </ul>

