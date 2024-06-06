<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('id', 'DESC')->paginate(4);
        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|unique:categories,title',
            'description' => 'required|max:255',
            'name_inside' => 'required|max:255',
            'description_inside' => 'required|max:255',
            'image' => 'required|max:255',
            'status' => 'required',
            'slug' => 'required|unique:categories,slug|max:255',
        ], [
            'title.unique' => 'Tên danh mục đã có, xin điền tên khác',
            'title.required' => 'Trường tên danh mục là bắt buộc',
            'description.required' => 'Trường mô tả là bắt buộc',
            'name_inside.required' => 'Trường tên bên trong là bắt buộc',
            'description_inside.required' => 'Trường mô tả bên trong là bắt buộc',
            'image.required' => 'Trường hình ảnh là bắt buộc',
            'status.required' => 'Trường trạng thái là bắt buộc',
            'slug.unique' => 'Slug đã có, xin điền slug khác',
            'slug.required' => 'Trường slug là bắt buộc',
        ]);
        $data = $request->all();
        $category = new Category();
        $category->title=$data['title'];
        $category->slug=$data['slug'];
        $category->description=$data['description'];
        $category->name_inside=$data['name_inside'];
        $category->description_inside=$data['description_inside'];
        $category->image=['image'];
        $category->status=$data['status'];
        // thêm ảnh vào folder
        $get_image = $request->file('image');
        $path='uploads/category/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $category->image=$new_image;
        $category->save();
        return redirect()->back()-> with('status','thêm thành công');


    }



/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate các trường đầu vào
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:categories,title,' . $id,
            'slug' => 'required|max:255|unique:categories,slug,' . $id,
            'description' => 'required|max:1000|unique:categories,description,' . $id,
            'name_inside' => 'required|max:255|unique:categories,name_inside,' . $id,
            'description_inside' => 'required|max:1000|unique:categories,description_inside,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|boolean',
        ]);

        // Lấy danh mục hiện có
        $category = Category::find($id);
        if (!$category) {
            return redirect()->back()->withErrors(['Không tìm thấy danh mục']);
        }

        // Cập nhật các trường của danh mục
        $category->title = $validatedData['title'];
        $category->slug = $validatedData['slug'];
        $category->description = $validatedData['description'];
        $category->name_inside = $validatedData['name_inside'];
        $category->description_inside = $validatedData['description_inside'];
        $category->status = $validatedData['status'];

        // Xử lý tải lên hình ảnh
        $get_image = $request->file('image');
        if ($get_image) {
            $path = 'uploads/category/';
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();

            // Di chuyển tệp đã tải lên vào thư mục chỉ định
            $get_image->move(public_path($path), $new_image);

            // Xóa hình ảnh cũ nếu có
            $old_image_path = public_path($path . $category->image);
            if (file_exists($old_image_path) && $category->image) {
                if (!unlink($old_image_path)) {
                    return redirect()->back()->withErrors(['Không thể xóa hình ảnh cũ']);
                }
            }

            // Cập nhật trường hình ảnh của danh mục
            $category->image = $new_image;
        }

        // Lưu danh mục đã cập nhật
        $category->save();

        return redirect()->back()-> with('status','cập nhật thành công');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);

        if (!empty($category->image)){
            $path_unlink = 'public/uploads/category/'.$category->image;

            if(file_exists($path_unlink)){
                unlink($path_unlink);
            }
        }

        $category->delete();
        return redirect()->back()-> with('status','xóa mục thành công');
    }
}
