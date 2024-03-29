<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content=""
    />
    <meta
      name="description"
      content=""
    />
    <title>EstateAgency | Dashboard</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{ asset('assets/images/favicon.png') }}"
    />
    <!-- Custom CSS -->
    <link
      href="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('assets/extra-libs/calendar/calendar.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet" />
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="{{ route('home') }}">
              <!-- Logo icon -->
              <b class="logo-icon ps-2">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <img
                  src="{{ asset('assets/images/logo-icon.png') }}"
                  alt="homepage"
                  class="light-logo"
                  width="25"
                />
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span class="logo-text ms-2">
                <!-- dark Logo text -->
                EstateAgency Admin
              </span>
            </a>
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="{{ asset('assets/images/users/1.jpg') }}"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="{{ route('home') }}"
                    ><i class="mdi mdi-home me-1 ms-1"></i> Home</a
                  >
                  <div class="dropdown-divider"></div>
                  <div class="ps-4 p-10">
                     <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-sm btn-success btn-rounded text-white">
                        Log Out
                    </button>
                </form>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      @include('dashboard.aside')

      <div class="page-wrapper">

        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Admin Dashboard</h4>
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      All Properties
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="zero_config"
                    class="table table-striped table-bordered"
                  >
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Area</th>
                        <th>Bedrooms</th>
                        <th>Bathrooms</th>
                        <th>Garage</th>
                        <th>Is Featured?</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @if ($properties->count())
                        @foreach ($properties as $property)
                        <tr>
                            <td>{{ $property->title }}</td>
                            <td>{{ $property->location }}</td>
                            <td>{{ $property->price }}$</td>
                            <td>{{ $property->area }}</td>
                            <td>{{ $property->bedrooms }}</td>
                            <td>{{ $property->bathrooms }}</td>
                            <td>{{ $property->garage }}</td>
                            <td>{{ $property->is_featured }}</td>
                            <td>
                              <a href="/dashboard/properties/{{ $property->id }}/edit"
                              type="button"
                              class="btn btn-cyan btn-sm text-white"
                            >
                              Edit
                            </a>
                          </td>
                          <td>
                            <button type="button" class="btn btn-danger btn-sm text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Delete
                            </button>
                          </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <form action="/dashboard/properties/{{  $property->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                      @else
                        <p>No properties yet. Start adding by clicking <a href="/dashboard/properties/create">here</a></p>
                      @endif

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


        <footer class="footer text-center">
          Designed and Developed by Flori Disha
        </footer>
      </div>
    </div>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.ui.touch-punch-improved.js') }}"></script>
    <script src="{{ asset('dist/js/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!-- this page js -->
    <script src="{{ asset('assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
  </body>
</html>
