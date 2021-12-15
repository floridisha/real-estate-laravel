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
            <h1 class="title-single">Margaret Stone</h1>
            <span class="color-text-a">Agent Immobiliari</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Agents</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Margaret Stone
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Agent Single Star /-->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="{{ asset('storage/' . $agent->profile) }}" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-title">
                  <div class="title-box-d">
                    <h3 class="title-d">{{ $agent->first_name }}
                      <br> {{ $agent->last_name }}</h3>
                  </div>
                </div>
                <div class="agent-content mb-3">
                  <p class="content-d color-text-a">
                    {{ $agent->description }}
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Mobile: </strong>
                      <span class="color-text-a"> {{ $agent->mobile }}</span>
                    </p>
                    <p>
                      <strong>Email: </strong>
                      <span class="color-text-a"> {{ $agent->mobile }}</span>
                    </p>
                  </div>
                </div>
                <div class="socials-footer">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="{{ $agent->fb_link }}" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="{{ $agent->insta_link }}" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="title-box-d">
            <h3 class="title-d">My Properties ({{ $agent->properties->count() }})</h3>
          </div>
        </div>
        <div class="row property-grid grid">
          @if ($agent->properties->count())
            @foreach ($agent->properties as $property)
            <div class="col-md-4">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img src="{{ asset('storage/' . $property->slide_5) }}" alt="" class="img-a img-fluid">
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="{{ route('property-detail', $property->id) }}">{{ $property->title }}</a>
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">{{ $property->status }} | $ {{ $property->price }}</span>
                        </div>
                        <a href="{{ route('property-detail', $property->id) }}" class="link-a">Click here to view
                          <span class="ion-ios-arrow-forward"></span>
                        </a>
                      </div>
                      <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                          <li>
                            <h4 class="card-info-title">Area</h4>
                            <span>{{ $property->area }}m
                              <sup>2</sup>
                            </span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Beds</h4>
                            <span>{{ $property->bedrooms }}</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Baths</h4>
                            <span>{{ $property->bathrooms }}</span>
                          </li>
                          <li>
                            <h4 class="card-info-title">Garages</h4>
                            <span>{{ $property->garage }}</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @else
            <p>No properties listed yet. Check in later.</p>
          @endif
        </div>
      </div>
    </div>
  </section>
  <!--/ Agent Single End /-->

  <!--/ footer Star /-->
    @include('layouts.footer')
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <x-js />

</body>
</html>
