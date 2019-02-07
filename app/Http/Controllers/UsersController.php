<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Users;
use App\Models\UsersImages;
use App\Http\Requests;
use Illuminate\Http\Request;

class UsersController extends Controller {
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function profile(){
//        return view('users.my-profile');
//    }

    public function index() {
        // $users = Users::where('status', 1)->get();
        $users = Users::select('*')
                ->with('userimage')
                ->paginate(10);
       // print_r($users);exit;
        return view('users.view-users', ['users' => $users]);
    }

    public function insertform() {

        return view('users.add-users');
    }

    public function insert(Request $request) {

        //$input= $req->all();
        //Users::create($input);
        $user = new Users();
        $user->name = $request['name'];
        $user->username = $request['username'];
        $user->phone = $request['phone'];
        $user->fax = $request['fax'];
        $user->email = $request['email'];
        $user->password = $request['password'];
       $user->save();

        if ($files = $request->file('user_image')) {
//print_R($files);exit;
            $m_id = Users::findOrFail($user->id);
            $path = public_path() . "/images/user_image";
            $priv = 0777;
            if (!file_exists($path)) {
                mkdir($path, $priv) ? true : false; //
            }

            $name = $files->getClientOriginalName();
            $files->move('images/user_image', $name);
            $images = new UsersImages();
            $images->user_id = $m_id->id;
            $images->image = '/images/user_image/' . $name;
            $images->save();
        }
        return redirect('/view-users');
    }

    public function destroy($id) {
        //DB::delete('delete from users where id = ?', [$id]);
        $user = Users::find($id);
        $user->delete();
        return redirect('/view-users');
    }

    public function show($id, Request $request) {
        //print_r($id);exit;
        $data = Users::where('id', $id)->with('userimage')->first();
        //print_r($data);exit;
        return view('users.edit-users', ['data' => $data]);
    }

    public function update(Request $request) {

      if ($request->isMethod('post')) {
        $posts = $request->post();
        $user = Users::find($posts['id']);
        $user->id = $posts['id'];
        $user->name = $posts['name'];
        $user->username = $posts['username'];
        $user->phone = $posts['phone'];
        $user->fax = $posts['fax'];
        $user->email = $posts['email'];
       $user->save();
        
        if ($files = $request->file('image')) {

            $m_id = Users::findOrFail($user->id);
            $path = public_path() . "/images/user_image";
            $priv = 0777;
            if (!file_exists($path)) {
                mkdir($path, $priv) ? true : false; //
            }

            $name = $files->getClientOriginalName();
            $files->move('images/user_image', $name);
            
            
            if(isset($posts['image_id']) && $posts['image_id']!= ''){
            $images = UsersImages::find($posts['image_id']);
            $images->id = $posts['image_id'];
            //print_r($posts->image_id);exit;
            }else{
                $images = new UsersImages();
            }
            $images->user_id = $m_id->id;
            $images->image = '/images/user_image/' . $name;
            
            $images->save();
            
        }
        
        return redirect('view-users');
      }
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
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
