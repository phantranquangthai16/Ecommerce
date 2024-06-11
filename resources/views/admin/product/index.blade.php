@extends('layouts.app')
@section('navbar')
<div class="container">
    @include('admin.include.navbar')
</div>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">liệt kê sản phẩm</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                        <a href="" class="btn btn-success">thêm sản phẩm </a>
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Product Code</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>created_at	</th>
                                    <th>image	</th>


                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $key => $prod)
                                        <tr>
                                            <td>{{ $key }}</td>
                                            <td>{{$prod ->product_name }}</td>
                                            <td>{{$prod->product_code }}</td>
                                            <td>{{$prod->category_id }}</td>
                                            <td>{{$prod->brand }}</td>
                                            <td>{{$prod->price }}</td>
                                            <td>{{$prod->description }}</td>
                                            <td>{{$prod->created_at }}</td>                                    
                                            <td><img src="{{asset('uploads/product/'.$prod->image)}}" height="150px"width="150px"></td>
                                            <td>
    {{--                                            <a href="{{route('product.edit',$prod->id)}}" class="btn btn-primary">Sửa</a>--}}
                                                <button class="btn btn-primary edit-product" onclick="editProduct({{$prod->id}})">Sửa</button>
                                                <form action="" method = "POST">
                                                    @method('DELETE')
                                                    @csrf
                                                <button onclick=" return confirm('bạn có muốn xóa danh mục này không ?');" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
 @endsection