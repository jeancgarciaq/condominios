<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Administrador de Condominios</title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Popper -->
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <!-- Styles & Scripts -->
        @vite([
                'resources/css/app.css',
                'resources/css/argon-dashboard-tailwind.css', 
                'resources/css/nucleo-icons.css', 
                'resources/css/nucleo-svg.css', 
                'resources/css/perfect-scrollbar.css',
                'resources/css/tooltips.css',
                'resources/js/app.js',
                'resources/js/argon-dashboard-tailwind.js',
                'resources/js/dropdown.js',
                'resources/js/fixed-plugin.js',
                'resources/js/nav-pills.js',
                'resources/js/navbar-collapse.js',
                'resources/js/navbar-sticky.js',
                'resources/js/perfect-scrollbar.js',
                'resources/js/sidenav-burger.js', 
                'resources/js/tooltips.js',
                'resources/js/42d5adcbca.js',
                ])
        <!--<style> -->
    </head>
    <body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
        <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
        <!-- Barra de Navegación Superior -->
        <!-- Barra de Navegación Lateral -->
        <aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
            <div class="h-19">
                <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
                <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="" target="_blank">
                  <img src="{{Vite::asset('resources/images/logo-ct-dark.png')}}" class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8" alt="main_logo" />
                  <img src="{{Vite::asset('resources/images/logo-ct.png')}}" class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8" alt="main_logo" />
                  <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Argon Dashboard 2</span>
                </a>
              </div>
        </aside>
        <!-- Fin Barra Lateral -->
    </body>
<html>