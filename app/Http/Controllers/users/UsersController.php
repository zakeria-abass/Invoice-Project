<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

         if ($request->search){
             $users=User::where('name',$request->search)->paginate(20);

         }else{
             $users=User::paginate(20);
         }


        return view('admin_dashboard.users.user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_dashboard.users.add_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name'=>['required'],
             'email'=>['required','email',''],
            'password'=>['required','min:8'],
        ]);


        $img = rand().time().$request->file('img')->getClientOriginalName();
        $request->file('img')->move(public_path('users'),$img);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'img'=>$img,
            'password'=>Hash::make($request->password),

        ]);
        return back();
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
        $user=User::find($id);
        return view('admin_dashboard.users.edit_user',compact('user'));

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
        $request->validate([
            'name'=>['required'],
            'email'=>['required','email'],
        ]);

        User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back();
    }


    public function edit_check($id){

        User::where('id',$id)->update([
           'check'=>0,
        ]);
        return back();
    }
    public function blocked($id){

        User::where('id',$id)->update([
           'check'=>1,
        ]);
           return back();
    }
}
