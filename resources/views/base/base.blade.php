<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>To Do App</title>
</head>

<body class="p-1">
    <main>
        <a href="/">
            <h1 class="text-center text-5xl text-red-500">Laravel To-Do App</h1>
        </a>

        <div class="cursor-pointer flex justify-center gap-6">
            <a href="https://github.com/FryerZabijak/laravel_todo_app" target="_blank">
                <i class="fa-brands fa-github"></i>
                &nbsp;
                <label>Source Code</label>
            </a>
            @auth
                <div>
                    <i class="fa-solid fa-hand"></i>
                    &nbsp;
                    <label>Hello, {{ auth()->user()->name }}</label>
                </div>
                <a href="/logout">
                    <i class="fa-solid fa-door-open"></i>
                    &nbsp;
                    <label>Logout</label>
                </a>
            @else
                <a href="/login">
                    <i class="fa-solid fa-user"></i>
                    &nbsp;
                    <label>Login</label>
                </a>
                <a href="/register">
                    <i class="fa-solid fa-pencil"></i>
                    &nbsp;
                    <label>register</label>
                </a>
            @endauth
        </div>

        <div id="content" class="my-5">
            @yield('content')
        </div>
    </main>

    @if (session()->has('message'))
        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
            class="fixed bottom-0 w-full bg-red-500 text-center">
            {{ session('message') }}
        </div>
    @endif
</body>

</html>
