@extends('base.base')
@section('content')
    <form method="post" action="/authenticate" class="flex flex-col">
        @csrf
        <div>
            <span>E-mail:</span>

            <input name="email">
            <div class="error text-red-500">
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div>
            <span>Password:</span>

            <input type="password" name="password">
            <div class="error text-red-500">
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>
        </div>

        <button class="bg-blue-500">Login</button>
        <label class="text-center">Don't have an account?&nbsp;<a href="/register"
                class="text-blue-500">Register</a>.</label>
    </form>

    <style>
        form {
            gap: 8px;
            max-width: 500px;
            margin: auto;
        }

        form div {
            display: grid;
            grid-template-columns: 2fr 3fr;
        }

        form .error{
            grid-column-start: 1;
            grid-column-end: 3;
            display:block;
            text-align: center;
            font-size: 10px;
        }

        form button {
            grid-column-start: 1;
            grid-column-end: 3;
        }
    </style>
@endsection
