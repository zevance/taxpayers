<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Tax Payers</title>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            @auth
                 <li>
                <a href="{{ route('dashboard') }}" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('taxpayers') }}" class="p-3">Tax Payers</a>
            </li>
            @endauth
           
        </ul>

        <ul class="flex items-center">

            @auth
            <li>
                <a href="" class="p-3">{{ auth()->user()->name }}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>

            @endauth
            @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>

            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>

            @endguest



        </ul>
    </nav>
    @yield('content')
</body>

</html>