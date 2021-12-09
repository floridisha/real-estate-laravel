@props(['properties'])
<section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest Properties</h2>
            </div>
            <div class="title-link">
              <a href="property-grid.html">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="owl-carousel owl-theme">
        @if ($properties->count())
            @foreach ($properties as $property)
            <div class="carousel-item-b">
                <div class="card-box-a card-shadow">
                  <div class="img-box-a">
                    <img src="{{ asset('storage/' . $property->slide_4) }}" alt="" class="img-a img-fluid">
                  </div>
                  <div class="card-overlay">
                    <div class="card-overlay-a-content">
                      <div class="card-header-a">
                        <h2 class="card-title-a">
                          <a href="property-single.html">{{ $property->location }}</a>
                        </h2>
                      </div>
                      <div class="card-body-a">
                        <div class="price-box d-flex">
                          <span class="price-a">{{ $property->status }} | $ {{ $property->price }}</span>
                        </div>
                        <a href="#" class="link-a">Click here to view
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
            <p>No properties yet. Check in later.</p>
        @endif
      </div>
    </div>
  </section>
