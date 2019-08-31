<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\productRequest;

use App\Product;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function add_pro(productRequest $request){
     $pro=new Product();
     $pro->p_title=$request->input("p_title");
     $pro->p_type=$request->input("p_type");
     $pro->p_cost=$request->input("p_cost");
     $pro->p_role=$request->input("p_role");
     $pro->p_details=$request->input("p_details");
     $pro->p_address=$request->input("p_address");
     $pro->p_datetime=date("Y-m-d h:i:s");

        $img = $request->file("p_image");
        $folder = "images/pro";
        $FileName =time() . rand(0, 100000).$img->getClientOriginalName();
        $img->move($folder, $FileName);
        $pro->p_image=$FileName;

     $pro->user_mobile=$request->input("user_mobile");
     $pro->user_email=$request->input("user_email");
     $pro->user_address=$request->input("user_address");
     $pro->user_id=1;
     $pro->save();
     session()->push('alert','success');
     session()->push('alert','Adv Uploaded Successfully');
     return redirect('/'); 
    }
}
