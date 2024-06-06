@extends('layouts.app')
@section('navbar')
    <div class="container">
        @include('admin.include.navbar')
    </div>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">chỉnh sửa danh mục
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $errors)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('category.index')}}" class="btn btn-success">Liệt kê danh mục </a>
                        <a href="{{route('category.create')}}" class="btn btn-success">Tạo danh mục </a>
                        <form action="{{route('category.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" required value="{{$category->title}}" name="title" id="slug" onkeyup="ChangeToSlug();" placeholder="..." required>
                        </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" required value="{{$category->slug}}" name="slug" id="convert_slug" placeholder="..." required>
                            </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" required placeholder="...">{{$category->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="name_inside">Name Inside</label>
                            <textarea class="form-control" name="name_inside" required placeholder="..." required>{{$category->name_inside}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description_inside">Description Inside</label>
                            <textarea class="form-control" name="description_inside" required placeholder="..." required>{{$category->description_inside}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" required name="image" required>
                            <img src="{{asset('uploads/category/'.$category->image)}}" height="150px" width="150px">

                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" required name="status" >
                                @if($category->status==1)
                                <option value="0">Không hiển thị</option>
                                <option value="1"selected>Hiển thị</option>
                                @else
                                    <option value="0"selected>Không hiển thị</option>
                                    <option value="1">Hiển thị</option>
                                @endif
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">cập nhật</button>
                    </form>
                </div>
            </div>
        </div>



@endsection
