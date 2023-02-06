<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @stack('title')
    <!-- Basic Page Needs     -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- Favicon -->
    <link href="{{ asset('cdn/sys/assets/images/favicon.png') }}" rel="icon" type="image/png">

    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('cdn/sys/assets/css/icons.css') }}">

    <!-- CSS -->
    <link rel="stylesheet" href=" {{ asset('cdn/sys/assets/css/uikit.css') }}">
    <link rel="stylesheet" href=" {{ asset('cdn/sys/assets/css/style.css') }}">
     <link href="{{ asset('cdn/static/assets/js/unpkg/tailwindcss/dist/tailwind.min.css') }}" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    @yield('extra_style')

</head>


</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper" class="is-verticle admin-panel">

        <!--  Header  -->
        <x-admin.header> </x-admin.header>

        <!-- Main Contents -->
        <div class="main_content">

            <!-- Dashboard -->
            @yield('admin_content')


            <!-- footer -->
              <div class="lg:mt-28 mt-10 mb-7 px-12 border-t pt-7">
                <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                    <p class="capitalize font-medium"> © copyright 2021  Courseplus</p>
                    <div class="lg:flex space-x-4 text-gray-700 capitalize hidden">
                        <a href="#"> About</a>
                        <a href="#"> Help</a>
                        <a href="#"> Terms</a>
                        <a href="#"> Privacy</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- sidebar -->
        <x-admin.sidebar> </x-admin.sidebar>

    </div>
    <!-- Javascript--->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('cdn/static/assets') }}/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('cdn/static/assets') }}/js/uikit.min.js"></script>
    <script src=" {{ asset('cdn/sys/assets') }}/js/uikit.js"></script>
    <script src=" {{ asset('cdn/sys/assets') }}/js/tippy.all.min.js"></script>
    <script src=" {{ asset('cdn/sys/assets') }}/js/simplebar.js"></script>
    <script src=" {{ asset('cdn/sys/assets') }}/js/custom.js"></script>
    <script src=" {{ asset('cdn/sys/assets') }}/js/bootstrap-select.min.js"></script>
    <script src=" {{ asset('cdn/sys/assets') }}/js/chart.min.js"></script>

    <script>
        Chart.defaults.global.defaultFontFamily = "Inter";
        Chart.defaults.global.defaultFontColor = '#888';
        Chart.defaults.global.defaultFontSize = '14';

        var ctx = document.getElementById('chart').getContext('2d');

        var chart = new Chart(ctx, {
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June"],
                // Information about the dataset
                datasets: [{
                    label: "Sales",
                    backgroundColor: 'rgba(42,65,232,0.08)',
                    borderColor: '#2a41e8',
                    borderWidth: "3",
                    data: [196, 132, 215, 362, 210, 252],
                    pointRadius: 5,
                    pointHoverRadius: 5,
                    pointHitRadius: 10,
                    pointBackgroundColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointBorderWidth: "2",
                }]
            },

            // Configuration options
            options: {

                layout: {
                    padding: 10,
                },

                legend: {
                    display: false
                },
                title: {
                    display: false
                },

                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                            borderDash: [6, 10],
                            color: "#d8d8d8",
                            lineWidth: 1,
                        },
                    }],
                    xAxes: [{
                        scaleLabel: {
                            display: false
                        },
                        gridLines: {
                            display: false
                        },
                    }],
                },

                tooltips: {
                    backgroundColor: '#333',
                    titleFontSize: 13,
                    titleFontColor: '#fff',
                    bodyFontColor: '#fff',
                    bodyFontSize: 13,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    intersect: false
                }
            },


        });
    </script>
    @yield('extra_scripts')
    <div id="backtotop"><a href="#">T</a></div>
</body>

</html>
