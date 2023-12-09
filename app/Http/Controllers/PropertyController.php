<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

        $property_list= Property::all();
        return view('property.index',compact('property_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('property.create');
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
            $imagefile->move(public_path('images/property'), $image_name);

            // define image path name
            $path = 'images/property/' . $image_name;

            // store image in database variable
            $requestData['image'] = $path;
        }

        // Create product
        property::create($requestData);
        return to_route('property.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $property= Property::findOrFail($id);
        return view('property.edit',compact('property'));
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
            $imagefile->move(public_path('images/property'), $image_name);

            // define image path name
            $path = 'images/property/' . $image_name;

            // store image in database variable
            $requestData['image'] = $path;
        }
        property::where('id',$id)->update($requestData);
        return to_route('property.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        property::where('id', $id)->delete();
        return to_route('property.index');
    }
}
