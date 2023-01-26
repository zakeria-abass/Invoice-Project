<?php

namespace App\Http\Controllers\Reviews;

use App\Http\Controllers\Controller;
use App\Models\Reviews\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function review($id){

        return view('main.reviews.review',compact('id'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $request->validate([
            'body'=>['required','max:100'],
        ]);

        Reviews::create([
            'name'=>$request->name,
            'star'=>$request->star,
            'body'=>$request->body,
        ]);
        return redirect()->route('main.index');
    }





}
