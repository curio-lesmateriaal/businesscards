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
        <div class="flex gap-4 p-24">
            <div class="sidebar w-1/5">
                <div class="search">
                    <label class="input input-bordered flex items-center gap-2">
                        <input type="text" class="grow" placeholder="Search" />
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16"
                        fill="currentColor"
                        class="h-4 w-4 opacity-70">
                        <path
                            fill-rule="evenodd"
                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                            clip-rule="evenodd" />
                        </svg>
                    </label>
                </div>
                <ul class="menu bg-base-200 rounded-box w-full mt-4">
                    <li>
                      <h2 class="menu-title">A</h2>
                      <ul>
                        <li><a>Accent Software</a></li>
                        <li><a>Adac Carwash</a></li>
                        <li><a>Akkermans Bouwbedrijf</a></li>
                      </ul>
                    </li>
                    <li>
                        <h2 class="menu-title">B</h2>
                        <ul>
                            <li><a>Blokker BV</a></li>
                            <li><a>Braun Technics</a></li>
                        </ul>

                    </li>
                  </ul>
            </div>
            <div class="card w-3/5 mx-auto">
                <div class="card card-side p-4 bg-base-100 shadow-xl">
                    <figure class="w-1/5">
                      <img
                        src="data:image/png;base64,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"
                        alt="Movie" />
                    </figure>
                    <div class="card-body">
                      <h2 class="card-title">Accent Software</h2>
                      <p><i>Best software for your needs!</i></p>
                      <div class="address">
                        <p>Terheijdenseweg 350</p>
                        <p>4822AA, Breda</p>
                        <p>06-36504456</p>
                      </div>
                      <div class="card-actions justify-end">
                        <button class="btn btn-primary">Naar website</button>
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>
</html>
