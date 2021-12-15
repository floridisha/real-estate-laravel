<!DOCTYPE html>
<html lang="en">
<x-head />

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <x-form-search-bar />
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  @include('layouts.navigation')
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Search Results</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Search Results
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      @if ($properties->count())
      <div class="row">
        <div class="col-sm-12">
          <div class="grid-option">
            <form>
              <select class="custom-select">
                <option selected>All</option>
                <option value="1">New to Old</option>
                <option value="2">For Rent</option>
                <option value="3">For Sale</option>
              </select>
            </form>
          </div>
        </div>
        @foreach ($properties as $property)
        <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="{{ asset('storage/' . $property->slide_5) }}" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#">{{$property->location}}</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">{{$property->status}} | $ {{$property->price}}</span>
                    </div>
                    <a href="property-single.html" class="link-a">Click here to view
                      <span class="ion-ios-arrow-forward"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>{{$property->area}}m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>{{$property->bedrooms}}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>{{$property->bathrooms}}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>{{$property->garage}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-sm-12">
          {{ $properties->links() }}
        </div>
      </div>
      @else
          <p>No Properties Yet. Check in later.</p>
      @endif
    </div>
  </section>
  <!--/ Property Grid End /-->

  <!--/ footer Star /-->
  @include('layouts.footer')
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <x-js />

</body>
</html>
