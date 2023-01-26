<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Invoice\Invoice;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Array_;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //===========index
    public function index(){

        if (auth()->user()->type == 'admin' && auth()->user()->check == 1){
                return view('admin_dashboard.index');
        }else{
            return redirect('/');
        }
    }


    //===========profile
    public function profile(){
            $user=User::find(auth()->id());
        return view('admin_dashboard.profile',compact('user'));


    }
    //===========search_invoice
    public function search_invoice(){
        return view('main.search_invoice');


    }

    //===========update_profile
    public function update_profile(Request $request){
//
//        $img = rand().time().$request->file('file_img')->getClientriginalName();
//        $request->file('file_img')->move(public_path('Imge/user/'),$img);
//
//        User::where('id',auth()->id())->update([
//            'name'=>$request->Username,
//            'email'=>$request->email,
//            'img'=>$img ,
//
//        ]);



       return back();
    }



}
