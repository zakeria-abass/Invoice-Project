<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\InvDetails;
use App\Models\Invoice\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //main
    public function main(){
        return view('main.index');
    }



}
