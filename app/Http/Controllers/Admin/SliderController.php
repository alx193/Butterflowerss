<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\SliderFormRequest;

class SliderController extends Controller
{
    public function index() 
    {
        //dd('slider index function 😃');
        
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));

    }

    public function create() 
    {
        //dd('slider create function 🫡');

        return view('admin.slider.create');
    }

    public function store(SliderFormRequest $request)
    {
        //dd('slider store function 🫡');

        $validatedData = $request->validated();
        
        if($request->hasFile('image')) {
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/slider/',$filename);
        $validatedData['image'] = "uploads/slider/$filename";
        }

        $validatedData['status'] = $request->status == true ? '1':'0';

        Slider::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'],
            'status' => $validatedData['status'],  
        ]);
    
        //dd('slider store function 🫡');
        
        return redirect('admin/slider')->with('message','Slider Created Successfully');

        //return redirect('/admin/slider')->with('message', 'Product Added Succesfully');
    }


    public function edit(Slider $slider) 
        {
            //dd('slider edit function🫡', $slider);

            return view('admin.slider.edit', compact('slider'));
    
        
        }

    public function update(SliderFormRequest $request, Slider $slider)
    {
        //dd('slider updated🫡', $slider);

        $validatedData = $request->validated();
        
        if($request->hasFile('image')) {

        $destination = $slider->image;
        if(File::exists($destination)) {
           File::delete($destination);
        }

        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/slider/',$filename);
        $validatedData['image'] = "uploads/slider/$filename";
        }

        $validatedData['status'] = $request->status == true ? '1':'0';

        Slider::where('id',$slider->id)->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'] ?? $slider->image,
            'status' => $validatedData['status'],  
        ]);

        return redirect('admin/slider')->with('message', 'Slider updated Sucessfully');
    }


    public function destroy(Slider $slider)
    {
        //dd('slider deleted🫡', $slider);

        if($slider->count() > 0) {
            $destination = $slider->image;
            if(File::exists($destination)) {
            File::delete($destination);
            }
            $slider->delete();
            return redirect('admin/slider')->with('message', 'Slider Deleted Sucessfully');
        }
        return redirect('admin/slider')->with('message', 'Something Went Wrong');
    }
}
