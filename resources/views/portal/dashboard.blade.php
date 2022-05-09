@extends('portal.layouts.app')

@section('content')
    {{-- @include('components.card') --}}
    <div class="row">
        <div class="col-12 col-xl-12 grid-margin stretch-card">
          <div class="row w-100 flex-grow">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">System Metrics</p>
                  <p class="text-muted">25% improvement from previous week</p>
                  <div class="row mb-3">
                    <div class="col-md-7">
                      <div class="d-flex justify-content-between traffic-status">
                        <div class="item">
                          <p class="mb-">Disclosures</p>
                          <h5 class="font-weight-bold mb-0">93</h5>
                          <div class="color-border"></div>
                        </div>
                        <div class="item">
                          <p class="mb-">Contact</p>
                          <h5 class="font-weight-bold mb-0">58</h5>
                          <div class="color-border"></div>
                        </div>
                        <div class="item">
                          <p class="mb-">Performance</p>
                          <h5 class="font-weight-bold mb-0">78%</h5>
                          <div class="color-border"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <ul class="nav nav-pills nav-pills-custom justify-content-md-end" id="pills-tab-custom" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="pills-home-tab-custom" data-bs-toggle="pill" href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">
                            Day
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-profile-tab-custom" data-bs-toggle="pill" href="#pills-career" role="tab" aria-controls="pills-profile" aria-selected="false">
                            Week
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="pills-contact-tab-custom" data-bs-toggle="pill" href="#pills-music" role="tab" aria-controls="pills-contact" aria-selected="false">
                            Month
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  {{-- <canvas id="audience-chart"></canvas> --}}
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
