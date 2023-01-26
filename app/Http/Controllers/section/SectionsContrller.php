<?php

namespace App\Http\Controllers\section;

use App\Http\Controllers\Controller;
use App\Models\section\Sections;
use Illuminate\Http\Request;

class SectionsContrller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return  view('admin_dashboard.sections.sections');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


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
           'section_name'=>['required','unique:sections'],

        ]);
        Sections::create([
            'section_name'=>$request->section_name,
            'descripion'=>$request->descripion,
            'created_by'=>auth()->user()->name,
        ]);

        return redirect()->route('sections.store')->with('sections','تم الاضافة بنجاح');
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

        $request->validate([
            'section_name'=>['required','unique:sections,section_name,'.$id],

        ]);
        Sections::where('id',$id)->update([
            'section_name'=>$request->section_name,
            'descripion'=>$request->descripion,

        ]);

        return back()->with('edit','تم تعديل القسم بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sections::destroy($id);
        return back()->with('delete','تم حدف القسم بنجاح');

    }
}
