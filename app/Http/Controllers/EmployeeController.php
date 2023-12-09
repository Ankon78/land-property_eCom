<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee_list= Employee::all();
        return view('employee.index',compact('employee_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
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
            $imagefile->move(public_path('images/employee'), $image_name);

            // define image path name
            $path = 'images/employee/' . $image_name;

            // store image in database variable
            $requestData['image'] = $path;
        }
        // Create product
        Employee::create($requestData);
        return to_route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee= Employee::findOrFail($id);
        return view('employee.edit',compact('employee'));
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
            $imagefile->move(public_path('images/employee'), $image_name);

            // define image path name
            $path = 'images/employee/' . $image_name;

            // store image in database variable
            $requestData['image'] = $path;
        }
        Employee::where('id',$id)->update($requestData);
        return to_route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::where('id', $id)->delete();
        return to_route('employee.index');
    }
}
