<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\form1;

class form1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $number_registered = form1::all();
        return view('form1.index')->with('number_registered', $number_registered);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form1.create');
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
        $this->validate($request, [
            'name'=>'required',
            'university'=>'required',
            'college'=>'required',
            'crn'=>'required',
            'faculty'=>'required',
            'description'=>'required',
            
        ]);
            $form = new form1;
            $form->name = $request->input('name');
            $form->university = $request->input('university');
            $form->college = $request->input('college');
            $form->faculty = $request->input('faculty');
            $form->crn = $request->input('crn');
            $form->description = $request->input('description');
            
            $form->save();
            return Registered;
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
        $form = form1::find($id);
        return view('form1.show')->with('form', $form);
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
