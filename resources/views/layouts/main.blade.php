 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
     <!-- Basic Page Needs   -->
     @stack('title')
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Learn - Professional Learning Management by ENJOYS">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     @include('layouts.__includes.styles')
     @yield('extra_style')
 </head>

 <body onload="@stack('notify')">
     <div id="wrapper" class="is-verticle">
         <!--  Header  -->
         <x-header> </x-header>
         <!-- Main Contents -->
         <div class="main_content">

          @yield('main')
             <!-- footer -->
             <x-footer></x-footer>
         </div>
         <!-- sidebar -->
         <x-sidebar> </x-sidebar>

     </div>
     @include('layouts.__includes.scripts')
     @yield('extra_scripts')
     <div id="backtotop"><a href="#">T</a></div>
 </body>
 </html>
