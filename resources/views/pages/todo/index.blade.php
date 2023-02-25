@extends('base.base')
@section('content')


    <div id="all-todos" class="mt-5">
        @foreach ($todos as $todo)
            <x-todo-component :todo="$todo" />
        @endforeach
        <a href="/todo/create">
            <div class="border-spacing-10 border-2 p-4 gap-2 rounded-lg h-full flex justify-center items-center"><div class="fa-solid fa-plus bg-white text-black rounded-full p-3"></div></div>
        </a>
    </div>
@endsection
