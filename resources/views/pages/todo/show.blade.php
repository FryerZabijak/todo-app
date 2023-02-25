@extends('base.base')
@section('content')
    <a href="/"><i class="fa-solid fa-arrow-left"></i>&nbsp;Back</a><br>
    <label class="text-3xl text-center">Todo</label>
    <form method="post" action="/todo/{{$todo->id}}" class="flex flex-col gap-1">
        @csrf
        @method("PUT")
        <span>Title:
            <input name="title" value="{{ $todo->title }}">
        </span>
        <span>Tags:
            <input name="tags" value="{{ $todo->tags }}">
        </span>
        <textarea name="content" class="w-full">{{ $todo->content }}</textarea>
        <span>Complete:
            <input type="checkbox" name="complete" @if ($todo->complete == 1) checked @endif>
        </span>
        
        <div class="my-4 flex gap-2">
            <button class="bg-green-500 p-2 rounded-lg hover:bg-green-700"><i class="fa-solid fa-save"></i>&nbsp;Save</button>
        </form>
        <form method="POST">
            @csrf
            @method("DELETE")
        <button class="bg-red-500 p-2 rounded-lg hover:bg-red-700"><i class="fa-solid fa-trash"></i>&nbsp;Delete</button>
        </form>
    </div>
    <style>
        textarea {
            min-height: 300px;
            resize: vertical;
            max-height: 600px;
        }
    </style>
@endsection
