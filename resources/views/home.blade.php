{{-- daisy ui via cdn --}}
<!DOCTYPE html>
<html data-theme="pastel" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Ephesis&display=swap" rel="stylesheet">
    <title>My Business Cards</title>
    <style>
        html {
            background-image: url({{ asset('img/background2.jpg') }});
            background-size: cover;
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
