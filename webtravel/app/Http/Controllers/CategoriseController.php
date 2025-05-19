<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Str;
use Flasher;
use Database;
use Illuminate\Support\Facades\Validator;
class CategoriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->get();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this -> getCategoriesProduct();
        // $categories = Category::orderBy('id','DESC')->get();
   
        return view('admin.categories.create',compact('categories'));
    }
    public function getCategoriesProduct(){
        $categories = Category::orderBy('id','DESC')->get();
        $listCategory =[];
        Category::recursive($categories,$parents =0,$level = 1,$listCategory);
        return $listCategory;
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:categories|max:255',
            'description' => 'required|max:220',
            'image' => 'required',
            'status' => 'required',
            'category_parent' => 'required',
          
        ],[
            'title.required' => 'yeu cau nhap tieu de',
            'title.unique' => 'Trung ten yeu cau nhap lai',
            'image.required' => 'yeu cau them anh',
            'status.required' => 'yeu cau tick',
            'description.required' => 'yeu cau dien mo ta',
            
        ]);
        $category= new Category();
        $category->title = $data['title']; 
        $category->description = $data['description'];
        $category->category_parent = $data['category_parent'];
         // Xử lý ảnh sản phẩm
         $get_image = $request->image;
         $path ='uploads/category/';
        
             $get_name_image = $get_image->getClientOriginalName();
             $name_image = current(explode('.',$get_name_image));
             $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
             $get_image->move($path, $new_image);
        $category->image =$new_image;
         
        $category->status = $data['status'];
        $category->slug = Str::slug($data['title']);
        Flasher::addSuccess('Thêm thành công!');
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        $categories = $this -> getCategoriesProduct();

        return view('admin.categories.edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|unique:categories|max:255',
            'description' => 'required|max:220',
            'status' => 'required',
            'category_parent' => 'required',
          
        ],[
            'title.required' => 'yeu cau nhap tieu de',
            'title.unique' => 'Trung ten yeu cau nhap lai',
           
            'status.required' => 'yeu cau tick',
            'description.required' => 'yeu cau dien mo ta',
            
        ]);
        $category= Category::find($id);
        $category->title = $data['title']; // Đúng cú pháp
        $category->description = $data['description'];
        $category->category_parent = $data['category_parent'];
         // Xử lý ảnh sản phẩm
        if($request->image){
         $get_image = $request->image;
         $path ='uploads/category/';
             $get_name_image = $get_image->getClientOriginalName();
             $name_image = current(explode('.',$get_name_image));
             $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
             $get_image->move($path, $new_image);
        $category->image =$new_image;
    }
         
        $category->status = $data['status'];
        $category->slug = Str::slug($data['title']);
        Flasher::addSuccess('Sua thành công!');
        $category->save();
        return redirect()->route('categories.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $categories = Category::find($id);
    Flasher::addSuccess('Xoa thành công!');

    $categories->delete();
    return redirect()->route('categories.index');

    }
}
