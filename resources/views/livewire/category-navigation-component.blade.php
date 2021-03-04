
    <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" style="z-index:999999999" >

        <li class="menu-item home-icon " style="z-index:999999999" >
            <div class="dropdown" >
                <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('lang.AllCategories') }}
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="z-index:999999999">
                    @foreach ($categories as $category)
                    <li style="z-index:999999999" ><a class="dropdown-item" href="{{route('product.category',['category_slug'=>$category->slug])}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </li>
    </ul>

