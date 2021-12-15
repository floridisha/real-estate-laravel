<!DOCTYPE html>
<html lang="en">
<head>
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
            <h1 class="title-single">{{ $property->title }}</h1>
            <span class="color-text-a">{{ $property->location }}</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{ route('properties-list') }}">Properties</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                {{ $property->title }}
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            @if ($property->slide_1)
            <div class="carousel-item-b">
                <img src="{{ asset('storage/' . $property->slide_1) }}" alt="" style="max-height: 400px; object-fit: cover;">
              </div>
            @endif
            @if ($property->slide_2)
            <div class="carousel-item-b">
                <img src="{{ asset('storage/' . $property->slide_2) }}" alt="" style="max-height: 400px; object-fit: cover;">
              </div>
            @endif
            @if ($property->slide_3)
            <div class="carousel-item-b">
                <img src="{{ asset('storage/' . $property->slide_3) }}" alt="" style="max-height: 400px; object-fit: cover;">
              </div>
            @endif
            @if ($property->slide_4)
            <div class="carousel-item-b">
                <img src="{{ asset('storage/' . $property->slide_4) }}" alt="" style="max-height: 400px; object-fit: cover;">
              </div>
            @endif
            @if ($property->slide_5)
            <div class="carousel-item-b">
                <img src="{{ asset('storage/' . $property->slide_5) }}" alt="" style="max-height: 400px; object-fit: cover;">
              </div>
            @endif
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">$</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">{{ $property->price }}</h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Property ID:</strong>
                      <span>{{ $property->id }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span>{{ $property->location }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span>{{ $property->type }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span>{{ $property->status }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Area:</strong>
                      <span>{{ $property->area }}m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Beds:</strong>
                      <span>{{ $property->bedrooms }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Baths:</strong>
                      <span>{{ $property->bathrooms }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Garage:</strong>
                      <span>{{ $property->garage }}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                    {{ $property->description }}
                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Amenities</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  @if ($property->amenitie_1)
                    <li>{{ $property->amenitie_1 }}</li>
                  @endif
                  @if ($property->amenitie_2)
                    <li>{{ $property->amenitie_2 }}</li>
                  @endif
                  @if ($property->amenitie_3)
                    <li>{{ $property->amenitie_3 }}</li>
                  @endif
                  @if ($property->amenitie_4)
                    <li>{{ $property->amenitie_4 }}</li>
                  @endif
                  @if ($property->amenitie_5)
                    <li>{{ $property->amenitie_5 }}</li>
                  @endif
                  @if ($property->amenitie_6)
                    <li>{{ $property->amenitie_6 }}</li>
                  @endif
                  @if ($property->amenitie_7)
                    <li>{{ $property->amenitie_7 }}</li>
                  @endif
                  @if ($property->amenitie_8)
                    <li>{{ $property->amenitie_8 }}</li>
                  @endif
                  @if ($property->amenitie_9)
                    <li>{{ $property->amenitie_9 }}</li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
        @if ($property->floor_plan)
        <div class="col-md-10 offset-md-1">
            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans"
                  aria-selected="false">Floor Plans</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                <img src="{{ asset('storage/' . $property->floor_plan) }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        @endif
        <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Contact Agent</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <img src="{{ asset('storage/' . $property->agent->profile) }}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent">{{ $property->agent->first_name }} {{ $property->agent->last_name }}</h4>
                <p class="color-text-a">
                    {{ $property->agent->description }}
                </p>
                <ul class="list-unstyled">
                  <li class="d-flex justify-content-between">
                    <strong>Mobile:</strong>
                    <span class="color-text-a">{{ $property->agent->mobile }}</span>
                  </li>
                  <li class="d-flex justify-content-between">
                    <strong>Email:</strong>
                    <span class="color-text-a">{{ $property->agent->email }}</span>
                  </li>
                </ul>
                <div class="socials-a">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="{{ $property->agent->fb_link }}">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="{{ $property->agent->insta_link }}">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <div class="property-contact">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->

  <!--/ footer Star /-->
  @include('layouts.footer')
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <x-js />

</body>
</html>
