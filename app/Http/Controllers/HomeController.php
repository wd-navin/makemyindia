<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Images;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function front()
    {
        return view('index');
    }
    
    
    public function images()
    {
        $user = Users::select('*')->get();
        return view('users.images', ['users' => $user]);
    }
    
    public function ajax_images(Request $request)
    {
     if(request()->ajax()){
          //print_r($request->all());exit;
         if ($files = $request->file('image')) {
            
            $path = public_path() . "/images/user_image";
            $priv = 0777;
            if (!file_exists($path)) {
                mkdir($path, $priv) ? true : false; //
            }
            foreach($files as $file){
                
            $name = $file->getClientOriginalName();
            $file->move('images/img', $name);
            $images = new Images();
            $images->user_id = $request['user_id'];
            $images->image = '/images/img/' . $name;
            $images->save();
            }
        }
       return response()->json( [ 'msg' => 'Post done successfully' ] );
        
    }
 }
 //////////////////////////////   
 }
