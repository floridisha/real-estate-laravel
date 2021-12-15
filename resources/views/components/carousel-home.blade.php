@props(['featured'])
<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      @if ($featured->count())
        @foreach ($featured as $feature)
        <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('storage/' . $feature->slide_1) }})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
              <div class="table-cell">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8">
                      <div class="intro-body">
                        <p class="intro-title-top">{{ $feature->location }}</p>
                        <h1 class="intro-title mb-4">
                          <span class="color-b">{{ $feature->title }}</h1>
                        <p class="intro-subtitle intro-price">
                          <a href="{{ route('property-detail', $feature->id) }}"><span class="price-a">{{ $feature->status }} | $ {{ $feature->price }}</span></a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <p>No featured items</p>
      @endif
    </div>
  </div>
