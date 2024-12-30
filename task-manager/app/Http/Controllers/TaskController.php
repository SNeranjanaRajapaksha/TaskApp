<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    //
    use AuthorizesRequests;

    
 
    public function index(Request $request)
    {
        $user = $request->user();
        
        if ($user) {

    $tasks = $user->tasks()->orderBy('deadline')->get();
    return view('tasks.index', compact('tasks'));
        } else {
    // Handle the case where the user is not authenticated
    }  

       
        }
       

    public function create(Request $request)
    {
        return view('tasks.create');
       
       
        if ($user) {

    $tasks = $user->tasks()->orderBy('deadline')->get();
    return view('tasks.create', compact('tasks'));
        } else {
    // Handle the case where the user is not authenticated
    }  

    }

    
    public function store(Request $request)
    {
        $request->validate([
    
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:low,medium,high',
            'deadline' => 'nullable|date',
        ]);

        
        
        

        $request->user()->tasks()->create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    public function edit(Task $task)
    {
        $this->authorize('update', $task);
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $this->authorize('update', $task);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:low,medium,high',
            'deadline' => 'nullable|date',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        $this->authorize('delete', $task);
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
