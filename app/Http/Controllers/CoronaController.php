<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corona;

class CoronaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Modelsmake = Corona::all();

        return view('index', compact('Modelsmake'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        $validatedData = $request->validate([
            'make' => 'required|max:255',
            'model' => 'required|max:255',
            'colour' => 'required',
            'top_speed' => 'required|numeric',
        ]);
        $show = Corona::create($validatedData);
   
        return redirect('/coronas')->with('success', 'Model Data is successfully saved');
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
        $Modelsmake = Corona::findOrFail($id);

        return view('show', compact('Modelsmake'));
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
        $Modelsmake = Corona::findOrFail($id);

        return view('edit', compact('Modelsmake'));
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
        $validatedData = $request->validate([
            'make' => 'required|max:255',
            'model' => 'required|max:255',
            'colour' => 'required',
            'top_speed' => 'required|numeric',
        ]);
        Corona::whereId($id)->update($validatedData);

        return redirect('/coronas')->with('success', 'Model Data is successfully updated');
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
        $Modelsmake = Corona::findOrFail($id);
        $Modelsmake->delete();

        return redirect('/coronas')->with('success', 'Model Data is successfully deleted');
    }
}
