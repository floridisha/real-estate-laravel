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
            <h1 class="title-single">We Do Great Design For Creative Folks</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                About
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ About Star /-->
  <section class="section-about">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-img-box">
            <img src="img/slide-about-1.jpg" alt="" class="img-fluid">
          </div>
          <div class="sinse-box">
            <h3 class="sinse-title">EstateAgency
              <span></span>
              <br> Sinse 2017</h3>
            <p>Art & Creative</p>
          </div>
        </div>
        <div class="col-md-12 section-t8">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <img src="img/about-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-2  d-none d-lg-block">
              <div class="title-vertical d-flex justify-content-start">
                <span>EstateAgency Exclusive Property</span>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 section-md-t3">
              <div class="title-box-d">
                <h3 class="title-d">Sed
                  <span class="color-d">porttitor</span> lectus
                  <br> nibh.</h3>
              </div>
              <p class="color-text-a">
                Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget
                consectetur sed, convallis
                at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
              </p>
              <p class="color-text-a">
                Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                Mauris blandit aliquet
                elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed,
                convallis at tellus.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ About End /-->

  <!--/ Team Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Meet Our Team</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @if ($agents->count())
            @foreach ($agents as $agent)
            <div class="col-md-4">
                <div class="card-box-d">
                    <div class="card-img-d">
                    <img src="{{ asset('storage/' . $agent->profile) }}" alt="" class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                    <div class="card-header-d">
                        <div class="card-title-d align-self-center">
                        <h3 class="title-d">
                            <a href="#" class="link-two">{{ $agent->first_name }} {{ $agent->last_name }}</a>
                        </h3>
                        </div>
                    </div>
                    <div class="card-body-d">
                        <p class="content-d color-text-a">
                        {{ $agent->description }}
                        </p>
                        <div class="info-agents color-a">
                        <p>
                            <strong>Phone: </strong> {{ $agent->mobile }}</p>
                        <p>
                            <strong>Email: </strong> {{ $agent->email }}</p>
                        </div>
                    </div>
                    <div class="card-footer-d">
                        <div class="socials-footer d-flex justify-content-center">
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
            @endforeach
            @else
            <p class="h4">Check in later not added our staff yet.</p>
        @endif
      </div>
    </div>
  </section>
  <!--/ Team End /-->

  <!--/ footer Star /-->
    @include('layouts.footer')
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <x-js />

</body>
</html>
