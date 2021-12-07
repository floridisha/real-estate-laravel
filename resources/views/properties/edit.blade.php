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
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Update Property
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
            <h1 class="text-center mb-5">Update Property</h1>

            <div class="container w-75">
                @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
                <form action="/dashboard/properties/{{ $property->id }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" name="title" id="title"  placeholder="Title" value="{{ $property->title }}">
                            @error('title')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Location" name="location" id="location"  value="{{ $property->location }}">
                            @error('location')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <textarea style="resize: none;" class="form-control" name="description" id="description" rows="3" placeholder="Description...">{{ $property->description }}</textarea>
                            @error('description')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" name="amenitie_1" id="amenitie_1" placeholder="Amenitie" value="{{ $property->amenitie_1 }}">
                            @error('amenitie_1')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="amenitie_2" id="amenitie_2" placeholder="Amenitie" value="{{ $property->amenitie_2 }}">
                            @error('amenitie_2')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Amenitie" name="amenitie_3" id="amenitie_3"  value="{{ $property->amenitie_3 }}">
                            @error('amenitie_3')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" name="amenitie_4" id="amenitie_4" placeholder="Amenitie" value="{{ $property->amenitie_4 }}">
                            @error('amenitie_4')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="amenitie_5" id="amenitie_5" placeholder="Amenitie" value="{{ $property->amenitie_5 }}">
                            @error('amenitie_5')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Amenitie" name="amenitie_6" id="amenitie_6"  value="{{ $property->amenitie_6 }}">
                            @error('amenitie_6')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" name="amenitie_7" id="amenitie_7"  placeholder="Amenitie" value="{{ $property->amenitie_7 }}">
                            @error('amenitie_7')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="amenitie_8" id="amenitie_8"  placeholder="Amenitie" value="{{ $property->amenitie_8 }}">
                            @error('amenitie_8')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Amenitie" name="amenitie_9" id="amenitie_9"  value="{{ $property->amenitie_9 }}">
                            @error('amenitie_9')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3 d-flex align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('storage/'. $property->slide_1) }}" alt="" width="80" height="80" style="border-radius: 50%; object-fit:cover;">
                        </div>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="slide_1" name="slide_1">
                                  <label class="custom-file-label" for="slide_1">Image 1</label>
                                </div>
                            </div>
                            @error('slide_1')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3 d-flex align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('storage/'. $property->slide_2) }}" alt="" width="80" height="80" style="border-radius: 50%; object-fit:cover;">
                        </div>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="slide_1" name="slide_2">
                                  <label class="custom-file-label" for="slide_2">Image 2</label>
                                </div>
                            </div>
                            @error('slide_2')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3 d-flex align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('storage/'. $property->slide_3) }}" alt="" width="80" height="80" style="border-radius: 50%; object-fit:cover;">
                        </div>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="slide_3" name="slide_3">
                                  <label class="custom-file-label" for="slide_3">Image 3</label>
                                </div>
                            </div>
                            @error('slide_3')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3 d-flex align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('storage/'. $property->slide_4) }}" alt="" width="80" height="80" style="border-radius: 50%; object-fit:cover;">
                        </div>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="slide_4" name="slide_4">
                                  <label class="custom-file-label" for="slide_4">Image 4</label>
                                </div>
                            </div>
                            @error('slide_4')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3 d-flex align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('storage/'. $property->slide_5) }}" alt="" width="80" height="80" style="border-radius: 50%; object-fit:cover;">
                        </div>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="slide_5" name="slide_5">
                                  <label class="custom-file-label" for="slide_5">Image 5</label>
                                </div>
                            </div>
                            @error('slide_5')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3 d-flex align-items-center">
                        <div class="col-2">
                            <img src="{{ asset('storage/'. $property->floor_plan) }}" alt="" width="80" height="80" style="border-radius: 50%; object-fit:cover;">
                        </div>
                        <div class="col-10">
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="floor_plan" name="floor_plan">
                                  <label class="custom-file-label" for="floor_plan">Floor Plan</label>
                                </div>
                            </div>
                            @error('floor_plan')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="type">Type</label>
                                </div>
                                <select name="type" class="custom-select form-control" id="type">
                                  <option selected disabled></option>
                                  <option value="House">House</option>
                                  <option value="Appartament">Appartament</option>
                                  <option value="Commercial Space">Commercial Space</option>
                                  <option value="Land">Land</option>
                                </select>
                            </div>
                            @error('type')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="status">Status</label>
                                </div>
                                <select name="status" class="custom-select form-control" id="status">
                                  <option selected disabled></option>
                                  <option value="Sale">Sale</option>
                                  <option value="Rent">Rent</option>
                                  <option value="Rented">Rented</option>
                                  <option value="Sold">Sold</option>
                                </select>
                            </div>
                            @error('status')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    @if (auth()->user()->role === 'admin')
                    <div class="form-row mb-3">
                        <div class="col">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="status">Status</label>
                                </div>
                                <select name="is_featured" class="custom-select form-control" id="is_featured">
                                  <option value="Yes">Yes</option>
                                  <option value="No" selected>No</option>
                                </select>
                            </div>
                            @error('status')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    @endif

                    <div class="form-row mb-3">
                        <div class="col">
                            <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="floor_plan" name="floor_plan">
                                  <label class="custom-file-label" for="floor_plan">Floor Plan</label>
                                </div>
                            </div>
                            @error('floor_plan')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="number" class="form-control" name="area" id="area"  placeholder="Area" value="{{ $property->area }}">
                            @error('area')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" name="bedrooms" id="bedrooms" required placeholder="Bedrooms" value="{{ $property->bedrooms }}">
                            @error('bedrooms')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" name="bathrooms" id="bathrooms" required placeholder="Bathrooms" value="{{ $property->bathrooms }}">
                            @error('bathrooms')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col">
                            <input type="number" class="form-control" name="garage" id="garage" required placeholder="Garage" value="{{ $property->garage }}">
                            @error('garage')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" name="price" id="price" required placeholder="Price" value="{{ $property->price }}">
                            @error('price')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success px-4 py-2 bg-b text-white">Update Property</button>
                </form>
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
