<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasks-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $tasks = Task::all();
        return $tasks;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $newName        = $request->input('name');
        $newDescription = $request->input('description');

        if ($newName && $newDescription) {
            $newTask              = new Task;
            $newTask->name        = $newName;
            $newTask->description = $newDescription;
            $newTask->save();
            return 'New Task Created';
        } else {
            return 'No Information To Create A Task';
        }

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);

        if ($task != null) {
            $responseData = [
                'id'          => $task->id,
                'name'        => $task->name,
                'description' => $task->description,
            ];
            return $responseData;
        } else {
            return 'Task Does Not Exist';
        }

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

        $newName        = $request->input('name');
        $newDescription = $request->input('description');

        if ($newName != null && $newDescription != null) {
            $task = Task::find($id);

            if ($task != null) {
                $task->name        = $newName;
                $task->description = $newDescription;
                $task->save();
                return 'Task has been updated';
            } else {
                return 'Task Does Not Exist';
            }
        } else {
            return 'Missing Information to update';
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $taskToDestroy = Task::find($id);
       if ($taskToDestroy != null) {
           $taskToDestroy->delete();
           return 'Task removed';
       } else {
        return 'No task to destroy';
       }
    }
}
