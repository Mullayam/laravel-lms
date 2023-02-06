<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic Page Needs   -->
    @stack('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Learn - Professional Learning Management by ENJOYS">
    @include('layouts.__includes.styles')
    @yield('extra_styles')
</head>

<body class="bg-white">
    <!-- Wrapper -->
    <div id="wrapper" class="bg-white">
        <!-- Header Container -->

        <div class="page-content">
            <!-- Content -->
            @yield('guest')
        </div>
        <!-- footer -->


    </div>
    @include('layouts.__includes.scripts')
    @yield('extra-scripts')
</body>

</html>
