<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/sass/app.scss')
    </head>
    <body >
        <div class="container py-4 px-3 mx-auto">
            <header class="d-flex justify-content-between align-items-md-center pb-3 mb-5 border-bottom">
                <h1 class="h4">
                    <span>Laravel 100 knocks</span>
                </h1>
                <a href="https://github.com/rintyanx/laravel_practice" target="_blank" rel="noopener">View on GitHub</a>
            </header>

            <h1>Example Title</h1>

            <button type="button" class="btn btn-primary me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">Example button</button>
            <a id="popoverButton" class="text-success" href="#" role="button" data-bs-toggle="popover" title="Custom popover" data-bs-content="This is a Bootstrap popover.">Example link</a>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div>
                        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                    </div>
                    <div class="dropdown mt-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                        Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="col-1 my-5 mx-0">

            <h2>Guides</h2>
            <p>このページは Laravel 100ノックの Welcome ページです．</p>
            <ul class="icon-list">
                <li>Hello World !!</li>
            </ul>
            <hr class="mt-5 mb-4">

            <fotter class="d-flex justify-content-between align-items-md-center pb-3 mb-5">
                <p class="text-muted">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
            </fotter>
        </div>
    </body>
</html>
