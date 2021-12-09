@props(['agents'])
<section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Best Agents</h2>
            </div>
            <div class="title-link">
              <a href="agents-grid.html">All Agents
                <span class="ion-ios-arrow-forward"></span>
              </a>
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
                          <a href="agent-single.html" class="link-two">{{ $agent->first_name }}
                            <br> {{ $agent->last_name }}</a>
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
            <p>No Agents yet. Check in later.</p>
        @endif
      </div>
    </div>
  </section>
