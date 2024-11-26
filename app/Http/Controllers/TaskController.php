<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;






class TaskController extends Controller
{
    public function index()
    {
        
        $tasks = Task::all();
    
       
        return view('tasks.index', compact('tasks'));
    }
     
   public function  update(Request $request, Task $task)
   {
  
       
     $task->update([
        'name' => $request->name,
        'description' => $request->description,
        'status' => $request->status,
    ]);
    


    return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
   }
   

   
   public function create()
   {
       return view('tasks.create');
   }

   
   public function store(Request $request)
   {
    $request->validate([
        'name' => 'required|string|max:255',  
        'description' => 'nullable|string',  
        'status' => 'required|in:Pending,Completed', 
    ]);

    
    $task = new Task();
    $task->name = $request->name;
    $task->description = $request->description; 
    $task->status = $request->status;

   
    $task->save();

   
    return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
}
   

   
   public function edit(Task $task)
   {
      
    return view('tasks.edit', compact('task'));
   }
   
  
   
   public function destroy(Task $task)
   {
       $task->delete();

       return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.'); 
    }


}