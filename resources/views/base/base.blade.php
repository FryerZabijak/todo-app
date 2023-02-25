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
    <title>To Do App</title>
</head>

<body>
    <main>
        <a href="/">
            <h1 class="text-5xl text-red-500">Laravel To-Do App</h1>
        </a>

        <div class="cursor-pointer">
            <a href="https://github.com/FryerZabijak/laravel_todo_app" target="_blank">
                <i class="fa-brands fa-github"></i>
                &nbsp;
                <label>Source Code</label>
            </a>
        </div>

        <div id="content" class="my-5">
            @yield('content')
        </div>
    </main>
</body>

</html>
