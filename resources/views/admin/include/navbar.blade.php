<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/home')}}">Dashboard</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" target="_blank" href="{{url('/')}}">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('category.index')}}">Danh mục quần áo</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link"    href="{{ url('/products') }}">Danh sách sản phẩm</a>
                </li>
    
        </ul>
    </div>
</nav>
