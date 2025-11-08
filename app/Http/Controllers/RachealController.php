<?php

namespace App\Http\Controllers;

use App\Models\Racheal;
use Illuminate\Http\Request;

class RachealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function display()
    {
        $racheal=Racheal::all();
        return view('display',compact('racheal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $racheal=new Racheal();
        $racheal->full_name=$request->full_name;
        $racheal->date=$request->date;
        $racheal->location=$request->location;
        $racheal->phone_number=$request->phone_number;
        $racheal->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Racheal  $racheal
     * @return \Illuminate\Http\Response
     */
    public function show(Racheal $racheal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Racheal  $racheal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Racheal::find($id);
        return view('edit',compact('item'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Racheal  $racheal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $racheal=Racheal::find($id);
        $racheal->full_name=$request->full_name;
        $racheal->date=$request->date;
        $racheal->location=$request->location;
        $racheal->phone_number=$request->phone_number;
        $racheal->save();
        return redirect()->route('racheal.display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Racheal  $racheal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $racheal=Racheal::find($id);
        $racheal->delete();
        return redirect()->route('racheal.display');
    }
}
