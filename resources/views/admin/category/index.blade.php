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
{{--                                            <a href="{{route('category.edit',$cate->id)}}" class="btn btn-primary">Sửa</a>--}}
                                            <button class="btn btn-primary edit-category" onclick="editCategory({{$cate->id}})">Sửa</button>
                                            <form action="{{route('category.destroy',[$cate->id])}}"method = "POST">
                                                @method('DELETE')
                                                @csrf
                                                <button onclick=" return confirm('bạn có muốn xóa danh mục này không ?');" class="btn btn-danger">Delete</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {

    });
    function editCategory(id) {
            // Sử dụng AJAX để gửi yêu cầu GET đến một URL
            $.ajax({
                url: "/edit-category", // Thay thế bằng URL của API hoặc tệp PHP xử lý yêu cầu
                data: {id: id},
                type: "GET",
                success: function(response){
                    // Xử lý phản hồi từ máy chủ
                    console.log(response);
                    const html =`
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Sửa Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                ...
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    `;

                    $('body').append(html);
                    $('#exampleModalCenter').modal();
                },
                error: function(xhr, status, error){
                    // Xử lý lỗi nếu có
                }
            });
    }
</script>
