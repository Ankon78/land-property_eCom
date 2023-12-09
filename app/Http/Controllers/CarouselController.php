<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $carousel_list= Carousel::all();
        return view('carousel.index',compact('carousel_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->except('image');

        //check if has file
        if ($request->hasFile('image')) {

            // hold image in a variable
            $imagefile = $request->image;

            // give new name of image
            $image_name = mt_rand() . '.' . $imagefile->extension();

            // upload image in a file
            $imagefile->move(public_path('images/carousel'), $image_name);

            // define image path name
            $path = 'images/carousel/' . $image_name;

            // store image in database variable
            $requestData['image'] = $path;
        }

        // Create product
        Carousel::create($requestData);
        return to_route('carousel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carousel $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carousel= Carousel::findOrFail($id);
        return view('carousel.edit',compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData=$request->except('_token','_method','image');
         //check if has file
         if ($request->hasFile('image')) {

            // hold image in a variable
            $imagefile = $request->image;

            // give new name of image
            $image_name = mt_rand() . '.' . $imagefile->extension();

            // upload image in a file
            $imagefile->move(public_path('images/carousel'), $image_name);

            // define image path name
            $path = 'images/carousel/' . $image_name;

            // store image in database variable
            $requestData['image'] = $path;
        }
        Carousel::where('id',$id)->update($requestData);
        return to_route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Carousel::where('id', $id)->delete();
        return to_route('carousel.index');
    }
}
