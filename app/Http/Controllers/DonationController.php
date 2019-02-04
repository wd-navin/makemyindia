<?php

namespace App\Http\Controllers;

use DB;

use App\Models\Donations;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    
    public function home()
    {
        return view('donations.main-page');
    }
    
    public function show_data()
    {
        $a = Donations::select()->get();
        //print_r($a);exit;
        return view('donations.show-users', ['donation' => $a]);
    }
    
    public function insert()
    {
        return view('donations.add-users');
   }
   
    public function store(Request $request)
    {
        $user = new Donations();
        $user->user_id =  $request['user_id'];
        $user->donation_type_id =  $request['donation_type_id'];
        $user->city = $request['city'];
        $user->state = $request['state'];
        $user->pick_up_location = $request['pick_up_location'];
        $user->message = $request['message'];
        $user->save();
        return redirect('/add-record');
    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    } 

    public function index()
    {
       // return view('users.view-users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
      

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donations::where('id', $id)->delete();
        return view('donations.show-users');
    }
}
