<?php

namespace App\Http\Controllers\email;

use App\Http\Controllers\Controller;
use App\Mail\users\emailusermail;
use App\Models\User;
use App\Traits\MailTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    use MailTrait;

    /*You can add the email function via Traits
     */

    //Email User One
    public function email_user(Request $request ,$id){

          $user=User::where('id',$id)->first();
          $this->mail($user->email,new emailusermail($user->name,$request->title,$request->body));
           return back();
    }
}
