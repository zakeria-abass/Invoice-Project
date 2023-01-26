<?php

namespace App\Traits;

use App\Mail\users\emailusermail;
use App\Models\Invoice\Invoice;
use Illuminate\Support\Facades\Mail;

trait MailTrait
{

    public  function mail($email,$new_mail){
        Mail::to($email)->send($new_mail);

        }


}
