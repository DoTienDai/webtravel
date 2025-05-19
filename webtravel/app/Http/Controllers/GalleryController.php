<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\Gallery;
use Flasher;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

  
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'tour_id' => 'required',
            'image' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ], [
            'title.required' => 'yeu cau nhap tieu de',
            'image.required' => 'yeu cau them anh',
            'image.*.mimes' => 'Ảnh phải đúng định dạng (jpeg, jpg, png, gif)',
            'image.*.max' => 'Kích thước ảnh tối đa 10MB',
        ]);
    
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $gal) {
                $gallery = new Gallery();
                $gallery->title = $data['title'];
                $gallery->tour_id = $data['tour_id'];
    
                $path = 'uploads/galleries/';
                $get_name_image = $gal->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image . rand(0, 99) . '.' . $gal->getClientOriginalExtension();
    
                $gal->move($path, $new_image);
    
                $gallery->image = $new_image;
                $gallery->save();
            }
        }
    
        Flasher::addSuccess('Thêm thành công!');
        return redirect()->back();
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
        $galleries = Gallery::where('tour_id',$id)->get();
        $tour = Tour::find($id);
        return view('admin.galleries.create',compact('tour','id','galleries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Flasher::addSuccess('Xoa thành công!');
    
         Gallery::find($id)->delete();
   
      
        return redirect()->back();

    }
}
