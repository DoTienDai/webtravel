<?php
namespace App\Http\Controllers;
use Str;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Category;
use Flasher;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = Tour::with('category')->orderBy('id', 'DESC')->get();
        return view('admin.tours.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('id','DESC')->get();
        return view('admin.tours.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|unique:tours|max:255',
            'description' => 'required|max:220',
            'quantity'=>'required',
            'categories_id'=>'required',
            'price'=>'required',
            'vehicle'=>'required',
            'departure_date'=>'required',
            'return_date'=>'required',
            'tour_from'=>'required',
            'tour_to'=>'required',
            'tour_time'=>'required',
            'image' => 'required',
            'status' => 'required',
          
        ],[
            'title.required' => 'yeu cau nhap tieu de',
            'title.unique' => 'Trung ten yeu cau nhap lai',

            'image.required' => 'yeu cau them anh',
            'status.required' => 'yeu cau tick',
            'categories_id.required' => 'yeu cau tick',
            'description.required' => 'yeu cau dien mo ta',
            'quantity.required' => 'yeu cau nhap so luong',
            'price.required' => 'yeu cau nhap gia tour',
            'vehicle.required' => 'yeu cau nhap loai phuong tien',
            'departure_date.required' => 'yeu cau nhap ngay di',
            'return_date.required' => 'yeu cau nhap ngay ve',
            'tour_from.required' => 'yeu cau nhap noi di',
            'tour_to.required' => 'yeu cau nhap noi den',
            'tour_time.required' => 'yeu cau nhap tong thoi gian tour',

            
        ]);
        $tours= new Tour();
        $tours->title = $data['title'];
        $tours->description = $data['description'];
        $tours->quantity = $data['quantity'];
        $tours->vehicle = $data['vehicle'];
        $tours->price = $data['price'];
        $tours->categories_id = $data['categories_id'];
        $tours->departure_date = $data['departure_date'];
        $tours->return_date = $data['return_date'];
        $tours->tour_from = $data['tour_from'];
        $tours->tour_to = $data['tour_to'];
        $tours->tour_time = $data['tour_time'];
        $tours->tour_code = rand(0000,9999);

        $tours->status = $data['status'];
        $tours->slug = Str::slug($data['title']);
         // Xử lý ảnh sản phẩm
         $get_image = $request->image;
         $path ='uploads/tour/';
        
             $get_name_image = $get_image->getClientOriginalName();
             $name_image = current(explode('.',$get_name_image));
             $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
             $get_image->move($path, $new_image);
        $tours->image =$new_image;
        Flasher::addSuccess('Thêm thành công!');
        $tours->save();
        return redirect()->route('tours.index');
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
        $categories = Category::orderBy('id','DESC')->get();
        $tours = Tour::find($id);
        return view('admin.tours.edit',compact('tours','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|unique:tours|max:255',
            'description' => 'required|max:220',
            'quantity'=>'required',
            'categories_id'=>'required',
            'price'=>'required',
            'vehicle'=>'required',
            'departure_date'=>'required',
            'return_date'=>'required',
            'tour_from'=>'required',
            'tour_to'=>'required',
            'tour_time'=>'required',
            
            'status' => 'required',
          
        ],[
            'title.required' => 'yeu cau nhap tieu de',
            'title.unique' => 'Trung ten yeu cau nhap lai',
            'status.required' => 'yeu cau tick',
            'categories_id.required' => 'yeu cau tick',
            'description.required' => 'yeu cau dien mo ta',
            'quantity.required' => 'yeu cau nhap so luong',
            'price.required' => 'yeu cau nhap gia tour',
            'vehicle.required' => 'yeu cau nhap loai phuong tien',
            'departure_date.required' => 'yeu cau nhap ngay di',
            'return_date.required' => 'yeu cau nhap ngay ve',
            'tour_from.required' => 'yeu cau nhap noi di',
            'tour_to.required' => 'yeu cau nhap noi den',
            'tour_time.required' => 'yeu cau nhap tong thoi gian tour',

            
        ]);
        $tours=  Tour::find($id);
        $tours->title = $data['title'];
        $tours->description = $data['description'];
        $tours->quantity = $data['quantity'];
        $tours->vehicle = $data['vehicle'];
        $tours->price = $data['price'];
        $tours->categories_id = $data['categories_id'];
        $tours->departure_date = $data['departure_date'];
        $tours->return_date = $data['return_date'];
        $tours->tour_from = $data['tour_from'];
        $tours->tour_to = $data['tour_to'];
        $tours->tour_time = $data['tour_time'];
        $tours->tour_code = $tours->tour_code;

        $tours->status = $data['status'];
        $tours->slug = Str::slug($data['title']);
         // Xử lý ảnh sản phẩm
         if($request->image){
            $get_image = $request->image;
            $path ='uploads/tour/';
                $get_name_image = $get_image->getClientOriginalName();
                $name_image = current(explode('.',$get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move($path, $new_image);
           $tours->image =$new_image;
       }
           
        Flasher::addSuccess('Sua thành công!');
        $tours->save();
        return redirect()->route('tours.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tours = Tour::find($id);
        Flasher::addSuccess('Xoa thành công!');
    
        $tours->delete();
        return redirect()->route('tours.index');
    }
}
