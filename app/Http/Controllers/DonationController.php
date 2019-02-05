<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Category;
use App\Models\Donations;
use App\Models\DonationImages;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    
    public function home()
    {
        return view('donations.main-page');
    }
    
    public function show_data()
    {
          $a = Donations::select('*')
                ->with('donationimage')
                 ->with('category')
                ->paginate(5);
             // print_r($a);exit;
         
        return view('donations.show-users', ['donation' => $a]);
    }
    
    public function insert()
    {
         $cat = Category::select('*')->get();
        return view('donations.add-users',['cat'=>$cat]);
   }
   
    public function store(Request $request)
    {
        $user = new Donations();
        $user->user_id =  $request['user_id'];
        $user->category_id =  $request['category_id'];
        $user->donation_type_id =  $request['donation_type_id'];
        $user->city = $request['city'];
        $user->state = $request['state'];
        $user->pick_up_location = $request['pick_up_location'];
        $user->message = $request['message'];
        $user->save();
        
        if ($files = $request->file('donation_image')) {
           
              $m_id = Donations::findOrFail($user->id);
                $path = public_path() . "/images/donation_image";
                $priv = 0777;
                if (!file_exists($path)) {
                    mkdir($path, $priv) ? true : false; //
                }
                foreach ($files as $file) {
                    $name = $file->getClientOriginalName();
                    $file->move('images/donation_image', $name);
                    $images = new DonationImages();
                    $images->donation_id = $m_id->id;
                    $images->image = '/images/donation_image/' . $name;
                 
                    $images->save();
                }
            }
        
        return redirect('/add-users');
    
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
