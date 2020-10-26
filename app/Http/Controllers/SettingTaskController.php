<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\progect;
use App\Models\task;

class SettingTaskController extends Controller
{
    public function setting($id)
    {
      $task = task::get()->where('id', $id)->first();
      $progect = progect::get()->where('id', $task->progect_id)->first();

      return view('task.settingtask',compact('task','progect'));
    }

    public function addsetting(Request $request , $id)
    {
      // dd($request->status);

      task::where('id',$id)->update([
          'datestarttask' => $request->datestarttask,
          'dateendtask' => $request->dateendtask,
          'timerequired' => $request->timerequired,
          'status' => $request->status
      ]);
      $array = array('foo' => 'bar');
      $task = task::get()->where('id', $id)->first();
      return redirect()->route('show',$task->progect_id);
    }
}
