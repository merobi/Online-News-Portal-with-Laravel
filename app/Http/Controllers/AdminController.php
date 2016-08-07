<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Redirect;
use Session;
session_start();
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct() {

        $admin_id=Session::get('admin_id');
        if($admin_id != NULL)
        {
            return Redirect::to('/dashboard')->send();
        }
        
    }
    
    
    public function index()
    {
        return view('admin.admin_login');
        
    }
    public function admin_login_check(Request $request)
    {
       $admin_email=$request->admin_email;
       $password=($request->password);
        
       $admin_info = DB::table('admin')
                        ->select('*')
                        ->where('admin_email',$admin_email)
                        ->where('password',$password)
                        ->first();
//        echo '<pre>';
//        print_r($admin_info);
//       // echo $admin_info->id;
//        exit();
       if($admin_info)
       {
           Session::put('admin_id',$admin_info->id);
           Session::put('admin_name',$admin_info->admin_name);
           return Redirect::to('/dashboard');
       }
       else{
           Session::put('exception','User Id or Password Invalide !');
           return Redirect::to('/adda'); 
       }
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
    public function store(Request $request)
    {
        //
    }

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
        //
    }
}
