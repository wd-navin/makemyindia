<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Category;
use App\Models\Donations;
use App\Models\DonationImages;
use App\Http\Requests;
use Illuminate\Http\Request;

class DonationController extends Controller {

    public function home() {
        return view('donations.main-page');
    }

    public function show_data() {
        $a = Donations::select('*')
                ->with('donationimage')
                ->with('category')
                ->paginate(5);
        //print_r($a);exit;
        return view('donations.show-users', ['donation' => $a]);
    }

    public function insert() {
        $cat = Category::select('*')->get();
        return view('donations.add-users', ['cat' => $cat]);
    }

    public function store(Request $request) {
       if(request()->ajax()){
         $user = new Donations();
        $user->user_id = $request['user_id'];
        $user->category_id = $request['category_id'];
        $user->donation_type_id =  '12';
        $user->city = $request['city'];
        $user->state = $request['state'];
        $user->pick_up_location = $request['pick_up_location'];
        $user->lat = '123';
        $user->lng = '123';
        $user->message = $request['message'];
        //print_r($request->all());exit;
        $user->save();

        if ($files = $request->file('user_image')) {


            $m_id = Donations::findOrFail($user->id);
            $path = public_path() . "/images/user_image";
            $priv = 0777;
            if (!file_exists($path)) {
                mkdir($path, $priv) ? true : false; //
            }
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('images/user_image', $name);
                $images = new DonationImages();
                $images->donation_id = $m_id->id;
                $images->image = '/images/user_image/' . $name;
                $images->save();
            }
        }
        return response()->json( [ 'msg' => 'Post done successfully' ] );
        
    }

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

    public function index() {
        // return view('users.view-users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
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
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request) {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
      public function destroy(Request $request) {
        if (request()->ajax()) {
            
            $res = Donations::where('id', $request->ids)->delete();
            if ($res) {
                return response()->json(array('message' => 'success'));
            } else {
                return response()->json(array('message' => 'fail'));
            }
           
        }
    }

}
