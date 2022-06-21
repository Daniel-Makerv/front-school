<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex bg-white">
        <div class="md:flex w-2/5 md:w-1/4 h-screen bg-white border-r hidden">
            <div class="mx-auto py-10">
                <h1 class="text-2xl font-bold mb-10 cursor-pointer text-[#EC5252] duration-150">Admin School</h1>
                <ul id="menuRoles">
                    <!-- insertando tabs dependiendo del rol -->
                </ul>
                <button class="w-full mt-10 bg-[#EC5252] rounded-full py-1.5 text-white">Cerrar Sesión</button>
            </div>
        </div>
        <main class="min-h-screen w-full bg-white border-l">
            <nav class="flex items-center justify-between px-10 bg-white py-6 border-b">
                <div class="flex items-center bg-gray-100 px-4 py-2 rounded-md space-x-3 w-96">
                    <input type="text" placeholder="Buscar" class="bg-gray-100 outline-none w-full" />
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 cursor-pointer text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="flex items-center space-x-4">
                    <img class="w-8 rounded-full" src="https://imagez.tmz.com/image/f7/1by1/2021/12/14/f7703994b69d48ca802df55729a2325c_xl.jpg" alt="Elon Musk" />
                    <li class="nav-item dropdown hidden md:block">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->nombre }}
                        </a>
                        <!-- //guardando el id del usuario para traer los roles -->
                        <input type="text" class="hidden idUsuario" id="idUsuario" name="idUsuario" value="{{ Auth::user()->id}}">
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>
    </div>
    <main class="py-4">
        @yield('footer')
    </main>
    </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        getRolesUsuario();

        function getRolesUsuario() {
            $.ajax({
                type: "GET",
                url: "/roles-usuario",
                dataType: "json",
                success: function(response) {
                    $.each(response.rolesUsuario, function(key, item) {
                        $('ul').append(`
                    <li class="flex space-x-2 mt-10 cursor-pointer hover:text-[#EC5252] duration-150">
                    ` + item.svg_icono + `
                        <a class="font-semibold" href="{{ url('` + item.route + `') }}">
                        ` + item.nombre + `
                    </a>
                    </li>
                        `);
                    });
                }
            });
        }

    });
</script>
</html>