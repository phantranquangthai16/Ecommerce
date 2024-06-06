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
                <div class="card-header">Liệt kê danh mục</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            <a href="{{route('category.create')}}" class="btn btn-success">thêm danh mục thời trang </a>
                            <table id="myTable" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Title_inside</th>
                                    <th>Description_inside</th>
                                    <th>image</th>
                                    <th>status</th>
                                    <th>quản lý</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($category as $key => $cate)
                                    <tr>
                                        <td>{{ $key }}</td>
                                        <td>{{ $cate->title }}</td>
                                        <td>{{ $cate->slug }}</td>
                                        <td>{{ $cate->description }}</td>
                                        <td>{{ $cate->name_inside }}</td>
                                        <td>{{ $cate->description_inside }}</td>
                                        <td>{{ $cate->image }}</td>
                                        <td>
                                            @if($cate->status==0)
                                                không hiển thị
                                            @else
                                                hiển thị
                                            @endif
                                        </td>
                                        <td><img src="{{asset('uploads/category/'.$cate->image)}}" height="150px"width="150px"></td>
                                        <td>
                                            <a href="{{route('category.edit',$cate->id)}}" class="btn btn-primary">Sửa</a>
                                            <form action="{{route('category.destroy',[$cate->id])}}"method = "POST">
                                                @method('DELETE')
                                                @csrf
                                                <button onclick=" return confirm('bạn có muốn xóa danh mục này không ?');"class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    {{$category->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
@endsection
