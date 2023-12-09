<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Employee;
use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ContactController;

class FrontendController extends Controller
{
    public function welcome(){

        $data['properties']=Property::where('status','1')->Get();
        $data['carousels']=Carousel::where('status','1')->Get();
        $data['employees']=Employee::where('status','1')->Get();
        return view('frontend.index',$data);

    }
    public function details( $id){
        $properties= Property::where('id', $id)->Get();

        return view('frontend.details',compact('properties'));

    }



    public function search(){
        $properties= Property::select('location')->where('status','1')->Get();
        $data=[];
        foreach($properties as $item){
            $data[] =$item['location'];
        }
        return $data;
    }


    public function searchDetails(Request $request){
        $searchProperty = $request->property_location;

        if ($searchProperty != '') {
            $property = Property::where("location", "LIKE", "%$searchProperty%")->first();

            if ($property) {
                return view('frontend.properties', compact('property'));
            } else {
                return redirect()->back()->with("status", "No data matched your search");
            }
        } else {
            return redirect()->back();
        }
    }

    public function about(){
        return view('frontend.about');
    }

    public function support(){
        return view('frontend.contact');
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $item = new ContactController();
        $item->name = $request->input('name');
        $item->email = $request->input('email');
        $item->subject = $request->input('subject');
        $item->message = $request->input('message');
        $item->random_id = Str::random(10); // Change 10 to the length you desire
        $item->save();

        return redirect('contact');
    }



}
