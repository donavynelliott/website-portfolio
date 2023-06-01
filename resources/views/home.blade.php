<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
            box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
            max-width: 42em;
            margin-top: 3rem;
        }
    </style>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="text-center text-white bg-dark">
    @include('layouts.navbar')

    <main>
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <div class="px-3 py-5">
                <h1>I am a Web/Software Developer</h1>
                <p class="lead">
                    Software developer with expertise in API Development, Laravel framework, and C# mod development.
                    A proven track record of building scalable solutions and crafting intuitive user experiences,
                    I bring a passion for creative technologies and a dedication to delivering high-quality code.
                </p>
                <p class="lead">
                    <a href="{{ route('projects') }}" class="btn btn-lg btn-secondary fw-bold">My Latest Projects</a>
                </p>
            </div>

            <footer class="mt-auto text-white-50">
                <p>Donavyn Elliott - Github: <a href="https://github.com/donavynelliott" class="text-white">@donavynelliott</a>.</p>
            </footer>
        </div>
    </main>

</body>

</html>