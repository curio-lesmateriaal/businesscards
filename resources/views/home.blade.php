{{-- daisy ui via cdn --}}
<!DOCTYPE html>
<html data-theme="pastel" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Ephesis&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>My Business Cards</title>
    <style>
        html {
            background-image: url('{{ asset('img/background2.jpg') }}');
            background-repeat: cover;
        }

        header h1 {
            font-family: 'Bebas Neue', cursive;
        }

        header h2 {
            font-family: 'Ephesis', cursive;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar bg-base-100">
            <div class="flex-1">
              <a class="btn btn-ghost text-xl">Business Cards</a>
            </div>
            <div class="flex-none">
              <ul class="menu menu-horizontal px-1">
                @auth
                    <li><a>Logout</a></li>
                @else
                    <li><a href="{{route('login')}}">Login</a></li>
                @endauth
                    <li>
                @auth
                    <a href="{{route('dashboard')}}">Dashboard</a>
                @else
                    <a href="{{route('register')}}">Register</a>
                @endauth
                </li>
              </ul>
            </div>
          </div>
        <div class="container mx-auto">
            <h1 class="text-6xl font-bold text-center mt-10">My <span style="color: darkorange"> Business </span> Cards <span style="color: darkorange">.</span></h1>
            <h2 class="text-6xl text-center">where all the customers meet!</h2>
        </div>
    </header>
    <main>
        @livewire('company-finder')
    </main>
</body>
</html>
