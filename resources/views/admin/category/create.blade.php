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
                <div class="card-header">Liệt kê danh mục</div>
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
                    <a href="{{route('category.index')}}" class="btn btn-success">liet kê danh mục </a>
                        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="slug" onkeyup="ChangeToSlug();" name="title" placeholder="..." required>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" class="form-control" name="slug" id="convert_slug" placeholder="..." required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" placeholder="..." required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="name_inside">Name Inside</label>
                                <textarea class="form-control" name="name_inside" placeholder="..." required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="description_inside">Description Inside</label>
                                <textarea class="form-control" name="description_inside" placeholder="..." required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" name="image" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Status</label>
                                <select class="form-control" name="status" >
                                    <option value="0">Không hiển thị</option>
                                    <option value="1">Hiển thị</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                </div>
            </div>
        </div>



@endsection
