<?php

namespace App\Http\Controllers;

use App\Models\note;
use Illuminate\Http\Request;

class AddNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = note::orderBy('id', 'desc')->get();
        return view('note.shownote',compact('notes'));
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
        $validatedData = $request->validate([
            'titlenote' => 'required|max:255',
            'descriptionnote' => 'required',
        ]);

        note::create([
            'titlenote' => $request->titlenote,
            'descriptionnote' => $request->descriptionnote
        ]);



        return redirect()->route('note.index')->with('msgcreate' ,'Create mission accomplished !');
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

        $note = note::where('id',$id)->first();
        return view('note.editnote',compact('note'));
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
            'titlenote' => 'required|max:255',
            'descriptionnote' => 'required',
        ]);
        note::where('id',$id)->update([
           'titlenote' => $request->titlenote,
           'descriptionnote' => $request->descriptionnote
        ]);

        return redirect()->route('note.index')->with('msgupdate' ,'Update mission accomplished !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        note::where('id',$id)->delete();
        return redirect()->route('note.index')->with('msgdelet' ,'Delete mission accomplished !');
    }
}
