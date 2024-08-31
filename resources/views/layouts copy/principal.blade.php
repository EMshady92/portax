<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <title>Desprosoft inventory management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://use.fontawesome.com/4e957e572c.js"></script>
    <script src="https://kit.fontawesome.com/48aa4aa0c4.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- Fontawesome --}}


  {{-- dropzone css --}}

   {{-- dropzone --}}

  {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script> --}}


  <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
    <!-- Scripts -->
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=ABeeZee&family=Comfortaa&family=Dongle&family=Montserrat:wght@500;600&family=Rubik:wght@300&display=swap');

.font-roboto{
    font-family: 'ABeeZee', sans-serif;
}
</style>
<main>

    <div class="flex h-screen bg-[#102E52]" :class="{ 'overflow-hidden': isSideMenuOpen }">
       {{--  @include('layouts.menu') --}}
        {{-- @include('layouts.mobile-menu') --}}

        <div class="flex flex-col flex-1 w-full">
            {{-- @include('layouts.navigation-dropdown') --}}
            <main class="h-full overflow-y-auto bg-white shadow-2xl z-30">

                <div id="contenido">


                    @yield('content')


                    <!-- Start Content-->



                </div> <!-- end content -->

            </main>
        </div>


      {{--   @stack('modals')
 --}}

    </div>
</main>

</html>
