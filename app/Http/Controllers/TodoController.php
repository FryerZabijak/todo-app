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

    public function index()
    {
        $user = auth()->user();
        if (!$user) return redirect("/login");
        $todos = $user->todos->sortByDesc("updated_at");

        return view("pages.todo.index", [
            "todos" => $todos
        ]);
    }

    public function show(int $id)
    {
        $todo = Todo::find($id);
        if ($todo->user_id != auth()->id()) return redirect("/");
        return view("pages.todo.show", [
            "todo" => $todo
        ]);
    }

    public function update(int $id)
    {

        $formFields = request()->validate([
            "title" => "required",
            "tags" => "nullable|string",
            "content" => "nullable|string",
            "complete" => ""
        ]);

        if (isset($formFields["complete"]) && $formFields["complete"] == "on") $formFields["complete"] = 1;
        else $formFields["complete"] = 0;

        $todo = Todo::find($id);

        if ($todo->user_id != auth()->id()) return redirect("/");

        $todo->update($formFields);

        return redirect("/")->with("message", "You have successfully updated todo");;
    }

    public function destroy(int $id)
    {
        if (Todo::find($id)->user_id != auth()->id()) return redirect("/");

        Todo::destroy($id);
        return redirect("/")->with("message", "You have successfully deleted todo");;
    }

    public function create()
    {
        return view("pages.todo.create");
    }

    public function store()
    {
        $formFields = request()->validate([
            "title" => "required",
            "tags" => "nullable|string",
            "content" => "nullable|string",
        ]);

        $formFields["user_id"] = auth()->id();

        Todo::create($formFields);

        return redirect("/")->with("message", "You have successfully created todo");
    }
}
