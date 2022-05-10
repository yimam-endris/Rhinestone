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
                  <p class="text-muted">System Performance Evaluation Sheet</p>
                  <div class="row mb-3">
                    <div class="col-md-7">
                      <div class="d-flex justify-content-between traffic-status">
                        <div class="item">
                          <p class="mb-">No Of Investor's</p>
                          <h5 class="font-weight-bold mb-0">50</h5>
                          <div class="color-border"></div>
                        </div>
                        <div class="item">
                          <p class="mb-">No Of Licensee(s)</p>
                          <h5 class="font-weight-bold mb-0">45</h5>
                          <div class="color-border"></div>
                        </div>
                        <div class="item">
                          <p class="mb-">Consultant(s)</p>
                          <h5 class="font-weight-bold mb-0">9</h5>
                          <div class="color-border"></div>
                        </div>
                        <div class="item">
                          <p class="mb-">Invoices</p>
                          <h5 class="font-weight-bold mb-0">10</h5>
                          <div class="color-border"></div>
                        </div>
                        <div class="item">
                          <p class="mb-">Performance</p>
                          <h5 class="font-weight-bold mb-0">90%</h5>
                          <div class="color-border"></div>
                        </div>
                        <div class="item">
                          <p class="mb-">Earning</p>
                          <h5 class="font-weight-bold mb-0">88%</h5>
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
