<?php

namespace App\Http\Controllers;

use App\Models\progect;
use Illuminate\Http\Request;

class AddProgectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progects = progect::orderBy('id', 'desc')->get();
        return view('welcome',compact('progects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('group.addgroup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $validatedData = $request->validate([
            'titilegroup' => 'required|max:255',
            'descriptiongroup' => 'required',
        ]);
        progect::create([
            'nameprogect' => $request->titilegroup,
            'descriptionprogect' => $request->descriptiongroup
        ]);

        return redirect()->route('progect.index')->with('msgcreategroup' ,'Create mission accomplished !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $progect = progect::where('id' , $id)->first();
        return view('showgroup',compact('progect'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $progect = progect::where('id' , $id)->first();
        return view('group.editgroup',compact('progect'));
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
        $validatedData = $request->validate([
            'titilegroup' => 'required|max:255',
            'descriptiongroup' => 'required',
        ]);
        progect::where('id',$id)->update([
            'nameprogect' => $request->titilegroup,
            'descriptionprogect' => $request->descriptiongroup
        ]);

        return redirect()->route('progect.index')->with('msgupdategroup' ,'Update mission accomplished !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        progect::where('id',$id)->delete();
        return redirect()->route('progect.index')->with('msgdeletgroup' ,'Delete mission accomplished !');
    }
}
