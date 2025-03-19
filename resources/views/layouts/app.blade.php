<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('build/assets/app-C6G_3qQV.css') }}">
        <script src="{{ asset('build/assets/app-DspuE8pW.js') }}"></script>

        <link rel="stylesheet" href="{{ asset('build/assets/app-7dFzyK7f.css') }}">

        <!-- Fonts and icons -->
        <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
        <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
            families: [
                "Font Awesome 5 Solid",
                "Font Awesome 5 Regular",
                "Font Awesome 5 Brands",
                "simple-line-icons",
            ],
            urls: ["{{ asset('assets/css/fonts.min.css') }}"],
            },
            active: function () {
            sessionStorage.fonts = true;
            },
        });
        </script>


        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css ') }}"  />
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css ') }}"  />
        <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css ') }}"  />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="{{ asset('assets/css/demo.css ') }}"  />
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- <livewire:layout.navigation /> --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->

            <div class="wrapper">
                <!-- Sidebar -->
                <div class="sidebar" data-background-color="dark">
                  <div class="sidebar-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                      <a href="index.html" class="logo">
                        <img
                          src="assets/img/kaiadmin/logo_light.svg"
                          alt="navbar brand"
                          class="navbar-brand"
                          height="20"
                        />
                      </a>
                      <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                          <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                          <i class="gg-menu-left"></i>
                        </button>
                      </div>
                      <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                      </button>
                    </div>
                    <!-- End Logo Header -->
                  </div>
                  <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                      <ul class="nav nav-secondary">
                        <li class="nav-item active">
                          <a
                            data-bs-toggle="collapse"
                            href="#dashboard"
                            class="collapsed"
                            aria-expanded="false"
                          >
                            <i class="fas fa-home"></i>
                            <p>Tableau de bord</p>
                            <span class="caret"></span>
                          </a>
                          <div class="collapse" id="dashboard">
                            <ul class="nav nav-collapse">
                              <li>
                                <a href="{{ route('dashboard') }}">
                                  <span class="sub-item">Tableau de bord</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="nav-section">
                          <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                          </span>
                          <h4 class="text-section">Components</h4>
                        </li>
                        <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#base">
                            <i class="fas fa-layer-group"></i>
                            <p>Base</p>
                            <span class="caret"></span>
                          </a>
                          <div class="collapse" id="base">
                            <ul class="nav nav-collapse">
                              <li>
                                <a href="components/avatars.html">
                                  <span class="sub-item">Avatars</span>
                                </a>
                              </li>
                              <li>
                                <a href="components/buttons.html">
                                  <span class="sub-item">Buttons</span>
                                </a>
                              </li>
                              <li>
                                <a href="components/gridsystem.html">
                                  <span class="sub-item">Grid System</span>
                                </a>
                              </li>
                              <li>
                                <a href="components/panels.html">
                                  <span class="sub-item">Panels</span>
                                </a>
                              </li>
                              <li>
                                <a href="components/notifications.html">
                                  <span class="sub-item">Notifications</span>
                                </a>
                              </li>
                              <li>
                                <a href="components/sweetalert.html">
                                  <span class="sub-item">Sweet Alert</span>
                                </a>
                              </li>
                              <li>
                                <a href="components/font-awesome-icons.html">
                                  <span class="sub-item">Font Awesome Icons</span>
                                </a>
                              </li>
                              <li>
                                <a href="components/simple-line-icons.html">
                                  <span class="sub-item">Simple Line Icons</span>
                                </a>
                              </li>
                              <li>
                                <a href="components/typography.html">
                                  <span class="sub-item">Typography</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#sidebarLayouts">
                            <i class="fas fa-th-list"></i>
                            <p>Sidebar Layouts</p>
                            <span class="caret"></span>
                          </a>
                          <div class="collapse" id="sidebarLayouts">
                            <ul class="nav nav-collapse">
                              <li>
                                <a href="sidebar-style-2.html">
                                  <span class="sub-item">Sidebar Style 2</span>
                                </a>
                              </li>
                              <li>
                                <a href="icon-menu.html">
                                  <span class="sub-item">Icon Menu</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#forms">
                            <i class="fas fa-pen-square"></i>
                            <p>Forms</p>
                            <span class="caret"></span>
                          </a>
                          <div class="collapse" id="forms">
                            <ul class="nav nav-collapse">
                              <li>
                                <a href="forms/forms.html">
                                  <span class="sub-item">Basic Form</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#tables">
                            <i class="fas fa-table"></i>
                            <p>Tables</p>
                            <span class="caret"></span>
                          </a>
                          <div class="collapse" id="tables">
                            <ul class="nav nav-collapse">
                              <li>
                                <a href="tables/tables.html">
                                  <span class="sub-item">Basic Table</span>
                                </a>
                              </li>
                              <li>
                                <a href="tables/datatables.html">
                                  <span class="sub-item">Datatables</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#maps">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Maps</p>
                            <span class="caret"></span>
                          </a>
                          <div class="collapse" id="maps">
                            <ul class="nav nav-collapse">
                              <li>
                                <a href="maps/googlemaps.html">
                                  <span class="sub-item">Google Maps</span>
                                </a>
                              </li>
                              <li>
                                <a href="maps/jsvectormap.html">
                                  <span class="sub-item">Jsvectormap</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#charts">
                            <i class="far fa-chart-bar"></i>
                            <p>Charts</p>
                            <span class="caret"></span>
                          </a>
                          <div class="collapse" id="charts">
                            <ul class="nav nav-collapse">
                              <li>
                                <a href="charts/charts.html">
                                  <span class="sub-item">Chart Js</span>
                                </a>
                              </li>
                              <li>
                                <a href="charts/sparkline.html">
                                  <span class="sub-item">Sparkline</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a href="widgets.html">
                            <i class="fas fa-desktop"></i>
                            <p>Widgets</p>
                            <span class="badge badge-success">4</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="../../documentation/index.html">
                            <i class="fas fa-file"></i>
                            <p>Documentation</p>
                            <span class="badge badge-secondary">1</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a data-bs-toggle="collapse" href="#submenu">
                            <i class="fas fa-bars"></i>
                            <p>Menu Levels</p>
                            <span class="caret"></span>
                          </a>
                          <div class="collapse" id="submenu">
                            <ul class="nav nav-collapse">
                              <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                  <span class="sub-item">Level 1</span>
                                  <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                  <ul class="nav nav-collapse subnav">
                                    <li>
                                      <a href="#">
                                        <span class="sub-item">Level 2</span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <span class="sub-item">Level 2</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </li>
                              <li>
                                <a data-bs-toggle="collapse" href="#subnav2">
                                  <span class="sub-item">Level 1</span>
                                  <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav2">
                                  <ul class="nav nav-collapse subnav">
                                    <li>
                                      <a href="#">
                                        <span class="sub-item">Level 2</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </li>
                              <li>
                                <a href="#">
                                  <span class="sub-item">Level 1</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- End Sidebar -->

                <div class="main-panel">
                    <livewire:layout.navigation />

                    {{ $slot }}

                  <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                      <nav class="pull-left">
                        <ul class="nav">
                          <li class="nav-item">
                            <a class="nav-link" href="https://www.pdevtuto.com">
                              Pdevtuto
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="https://pdevtuto.com"> Aide </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="https://pdevtuto.com"> Licence </a>
                          </li>
                        </ul>
                      </nav>
                      <div class="copyright">
                        {{ date('Y') }}, devéloppé <i class="fa fa-heart heart text-danger"></i> par
                        <a href="https://www.pdevtuto.com">Pdevtuto</a>
                      </div>
                    </div>
                  </footer>

                </div>

              </div>
        </div>
    </body>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery-3.7.1.min.js ') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js ') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js ') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js ') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('assets/js/plugin/chart.js/chart.min.js ') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js ') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js ') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('assets/js/plugin/datatables/datatables.min.js ') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js ') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('assets/js/plugin/jsvectormap/jsvectormap.min.js ') }}"></script>
    <script src="{{ asset('assets/js/plugin/jsvectormap/world.js ') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js ') }}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('assets/js/kaiadmin.min.js ') }}"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{ asset('assets/js/setting-demo.js ') }}"></script>
    <script src="{{ asset('assets/js/demo.js ') }}"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
</html>
