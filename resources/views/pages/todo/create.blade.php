@extends('base.base')
@section('content')
    <label class="text-3xl text-center">Todo</label>
    <form method="post" action="/todo/create" class="flex flex-col gap-1">
        @csrf
        <span>Title:
            <input name="title">
        </span>
        <span>Tags:
            <input name="tags">
        </span>
        <textarea class="w-full" name="content"></textarea>
        
        <div class="my-4 flex gap-2">
            <button class="bg-blue-500 p-2 rounded-lg hover:bg-blue-700">
                <i class="fa-solid fa-download"></i>
                &nbsp;
                Create
            </button>
        </div>
        </form>
    <style>
        textarea {
            min-height: 300px;
            resize: vertical;
            max-height: 600px;
        }
    </style>
@endsection
