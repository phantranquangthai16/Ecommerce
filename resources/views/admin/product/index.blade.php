<!-- resources/views/products/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Products List</h2>

    <!-- Hiển thị thông báo thành công nếu có -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Nút tạo mới sản phẩm -->
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create New Product</a>

    <!-- Bảng danh sách sản phẩm -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_code }}</td>
                <td>{{ $product->category->title }}</td>
                <td>{{ $product->brand }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <!-- Các hành động -->
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
