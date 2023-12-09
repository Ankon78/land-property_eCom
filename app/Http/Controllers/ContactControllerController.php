<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ContactController;

class ContactControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact_list= ContactController::all();
        return view('contact.index',compact('contact_list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        return redirect('frontend.contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactController $contactController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactController $contactController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactController $contactController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ContactController::where('id', $id)->delete();
        return to_route('contact.index');
    }
}
