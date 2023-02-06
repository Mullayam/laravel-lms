<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic Page Needs   -->
    @stack('title')
    <title>Courseplus Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    @include('layouts.__includes.styles')

    @yield('extra_styles')

</head>

<body onload="@stack('notify')">
    <!-- Wrapper -->
    <div id="wrapper" class="is-verticle">
        <!-- Header Container -->
        <x-student.header> </x-student.header>
        <!-- Main Contents -->
        <div class="main_content">
            @yield('student')
            <!-- footer -->
            <x-footer></x-footer>

        </div>
        <!-- sidebar -->
        <x-student.sidebar></x-student.sidebar>

    </div>
    <!-- Javascript--->
    @include('layouts.__includes.scripts')
    @yield('extra_scripts')
    <div id="backtotop"><a href="#">T</a></div>
</body>

</html>
