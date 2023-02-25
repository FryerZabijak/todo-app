<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Queue\Jobs\RedisJob;

class TodoController extends Controller
{
        /*
        index - show all
        show - show single
        create - show form to create
        store - store new
        edit - show form to edit
        update - update
        destroy - delete
    */

    public function index(){
        $todos = Todo::latest("updated_at")->get();
        return view("pages.todo.index", [
            "todos" => $todos
        ]);
    }

    public function show(int $id){
        $todo = Todo::find($id);
        return view("pages.todo.show", [
            "todo" => $todo
        ]);
    }

    public function update(int $id){

        $formFields = request()->validate([
            "title" => "required",
            "tags" => "nullable|string",
            "content" => "nullable|string",
            "complete" => ""
        ]);

        if(isset($formFields["complete"]) && $formFields["complete"] =="on") $formFields["complete"]=1;
        else $formFields["complete"]=0;

        $todo = Todo::find($id);

        $todo->update($formFields);

        return redirect("/");
    }

    public function destroy(int $id){
        Todo::destroy($id);
        return redirect("/");
    }

    public function create(){
        return view("pages.todo.create");
    }

    public function store(){
        $formFields = request()->validate([
            "title" => "required",
            "tags" => "nullable|string",
            "content" => "nullable|string",
        ]);

        Todo::create($formFields);

        return redirect("/");
    }
}