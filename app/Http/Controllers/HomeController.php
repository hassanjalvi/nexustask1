<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Frontend.index');
    }
    public function showLogin()
    {
        return view('Frontend.login');
    }
    public function showRegister()
    {
        return view('Frontend.signup');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login.form')
                ->with('error', 'You need to be logged in to make a reservation.');
        }


        // Validate the request
        $request->validate(
            [
                'reservation_date' => 'required',
                'reservation_time' => 'required',
                'guest' => 'required',
                'name' => 'required',
                'email' => 'email|required'
            ]
        );

        // Create a new reservation record
        $tablebook = new HomeModel();
        $tablebook->user_id = Auth::id();
        $tablebook->reservation_date = $request->reservation_date;
        $tablebook->reservation_time = $request->reservation_time;
        $tablebook->guest = $request->guest;
        $tablebook->name = $request->name;
        $tablebook->email = $request->email;
        $tablebook->save();

        return back()->withSuccess('Thanks for Booking us. We\'ll get back to you ASAP!');
    }


    /**
     * Display the specified resource.
     */
    public function show(HomeModel $homeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeModel $homeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeModel $homeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeModel $homeModel)
    {
        //
    }
}
