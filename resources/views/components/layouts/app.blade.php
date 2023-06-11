<!DOCTYPE html>
<html dir="{{ str_replace('_', '-', app()->getLocale()) }}"
     lang="{{ App::getLocale() == 'ar' ? 'rtl':'ltr' }}">

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
     <!-- Tell the browser to be responsive to screen width -->
     <meta name="viewport"
          content="width=device-width, initial-scale=1">
     <meta name="description"
          content="">
     <meta name="author"
          content="">
     <!-- Favicon icon -->
     <link rel="icon"
          type="image/png"
          sizes="16x16"
          href="{{ asset('assets/images/favicon.jpg') }}">
     <link rel="icon"
          type="image/x-icon"
          href="{{ asset('assets/images/favicon.jpg') }}" />
     <title>{{ config('app.name') }}</title>
     @vite('resources/css/style.css')

     <link rel="stylesheet"
          href="{{ asset('dist/css/orders.css') }}">
</head>

<body>

     <!-- ============================================================== -->
     <!-- Main wrapper - style you can find in pages.scss -->
     <!-- ============================================================== -->
     <div id="main-wrapper"
          data-theme="light"
          data-layout="vertical"
          data-navbarbg="skin6"
          data-sidebartype="full"
          data-sidebar-position="fixed"
          data-header-position="fixed"
          data-boxed-layout="full">

          <x-nav-bar />
          @role('designer')
          <x-side-bar-designer/>
          @endrole
          @role('content writer')
          <x-side-bar-content-writer/>
          @endrole
          @role('manager')
          <x-side-bar-manager/>
          @endrole
          @role('admin')
          <x-side-bar />
          @endrole

          <!-- Page wrapper  -->
          <!-- ============================================================== -->
          <div class="page-wrapper">
               <x-hero />
               {{ $slot }}
          </div>
          <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}">
          </script>
          <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
          </script>
          <!-- apps -->
          <!-- apps -->
          <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
          <script src="{{ asset('dist/js/feather.min.js') }}"></script>
          <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}">
          </script>
          <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
          <!--Custom JavaScript -->
          <script src="{{ asset('dist/js/custom.min.js') }}"></script>
          <!--This page JavaScript -->
          <script src="{{ asset('assets/extra-libs/c3/d3.min.js') }}"></script>

          <script src="{{ asset('assets/extra-libs/c3/c3.min.js') }}"></script>
          <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}">
          </script>
          <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
          </script>
          <script src="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}">
          </script>
          <script src="{{ asset('assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}">
          </script>
          <script src="{{ asset('dist/js/pages/dashboards/dashboard1.min.js') }}">
          </script>
          <!-- Vendors JS -->
          <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}">
          </script>
          <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
          <!-- Main JS -->
          <script src="{{ asset('assets/js/main.js') }}"></script>

          <!-- Page JS -->
          <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
          <script>
          var options = {
               series: [{
                    color: "#E4E0F2",

                    name: 'Inflation',
                    data: [{

                              x: 'Karem',
                              y: 10
                         }, {
                              x: 'Hannaa',
                              y: 18
                         }, {
                              x: 'Boushra',
                              y: 13

                         },
                         {
                              x: 'Owais',
                              y: 13
                         },
                         {
                              x: 'Nada',
                              y: 13
                         }
                    ]
               }],
               chart: {
                    height: 350,
                    type: 'bar',
               },
               plotOptions: {
                    bar: {
                         horizontal: true,
                         borderRadius: 10,

                         dataLabels: {
                              position: 'bottom', // top, center, bottom

                         },
                    }
               },
               dataLabels: {
                    enabled: false,
                    formatter: function(val) {
                         return val + "%";
                    },




                    offsetY: -20,
                    style: {
                         fontSize: '12px',
                         color: ["#FFF0BB"]
                    }
               },



               title: {

                    floating: true,
                    offsetY: 330,
                    align: 'center',
                    style: {
                         color: '#444'
                    }
               }
          };

          var chart = new ApexCharts(document.querySelector("#chart"), options);
          chart.render();
          </script>
</body>

</html>
