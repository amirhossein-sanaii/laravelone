<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\progect;
use App\Models\task;

class AddController extends Controller
{
    public function show($id){
      $progect = progect::find($id);
      $tasks = task::get()->where('progect_id', $id);
      return view('showgroup',compact('progect','tasks'));
    }



    public function add($id){
      $progect = progect::find($id);
      return view('task.addtask',compact('progect'));
    }



    public function create(Request $request,$id)
    {
      $validatedData = $request->validate([
          'ttask' => 'required|max:255',
          'dtask' => 'required',
      ]);

      Task::create([
          'titletask' => $request->ttask,
          'descriptiontask' => $request->dtask,
          'progect_id' => $id
      ]);

      return redirect()->route('show',$id);
    }


    public function delete($id)
    {
        task::where('id',$id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {

        $task = task::where('id',$id)->first();
        return view('task.edittask',compact('task'));
    }

    public function update(Request $request, $id)
    {
      $validatedData = $request->validate([
          'ttask' => 'required|max:255',
          'dtask' => 'required',
      ]);
      $task = task::get()->where('id', $id)->first();
      task::where('id',$id)->update([
         'titletask' => $request->ttask,
         'descriptiontask' => $request->dtask
      ]);
      return redirect()->route('show',$task->progect_id);
    }


}
// where('id' , $id)->first->name
