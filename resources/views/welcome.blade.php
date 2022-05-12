@extends('layouts.home-app')
@section('content')
<div class="container px-4 py-5" id="custom-cards">
  <h2 class="pb-2 border-bottom">Welcome to Inventious Disclosure Tools</h2>

  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../../../../assets/images/unsplash-photo-1.png');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Product-1</h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
              <img src="../../../../assets/images/logo.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
            </li>
            <li class="d-flex align-items-center me-3">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
              <small>Earth</small>
            </li>
            <li class="d-flex align-items-center">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
              <small>3d</small>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../../../../assets/images/unsplash-photo-2.png');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Product-2</h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
              <img src="../../../../assets/images/logo.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
            </li>
            <li class="d-flex align-items-center me-3">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
              <small>Pakistan</small>
            </li>
            <li class="d-flex align-items-center">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
              <small>4d</small>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('../../../../assets/images/unsplash-photo-3.png');">
        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
          <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Product-3</h2>
          <ul class="d-flex list-unstyled mt-auto">
            <li class="me-auto">
              <img src="../../../../assets/images/logo.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
            </li>
            <li class="d-flex align-items-center me-3">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
              <small>California</small>
            </li>
            <li class="d-flex align-items-center">
              <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
              <small>5d</small>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div> 
<div class="container px-4 py-5" id="featured-3">
  <h2 class="pb-2 border-bottom">Some Services</h2>
  <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="feature col">
      <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"/></svg>
      </div>
      <h2>Service one</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      <a href="#" class="icon-link">
        Call to action
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a>
    </div>
    <div class="feature col">
      <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"/></svg>
      </div>
      <h2>Service two</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      <a href="#" class="icon-link">
        Call to action
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a>
    </div>
    <div class="feature col">
      <div class="feature-icon bg-primary bg-gradient">
        <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
      </div>
      <h2>Service three</h2>
      <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
      <a href="#" class="icon-link">
        Call to action
        <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"/></svg>
      </a>
    </div>
  </div>
</div>
<div class="container px-4 py-5" id="icon-grid">
  <h2 class="pb-2 border-bottom">Other's</h2>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
    <div class="col d-flex align-items-start">
      <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"/></svg>
      <div>
        <h4 class="fw-bold mb-0">Other One</h4>
        <p>Paragraph of text beneath the heading to explain the heading.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#cpu-fill"/></svg>
      <div>
        <h4 class="fw-bold mb-0">Other Two</h4>
        <p>Paragraph of text beneath the heading to explain the heading.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#calendar3"/></svg>
      <div>
        <h4 class="fw-bold mb-0">Other Three</h4>
        <p>Paragraph of text beneath the heading to explain the heading.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#home"/></svg>
      <div>
        <h4 class="fw-bold mb-0">Other Four</h4>
        <p>Paragraph of text beneath the heading to explain the heading.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#speedometer2"/></svg>
      <div>
        <h4 class="fw-bold mb-0">Other Five</h4>
        <p>Paragraph of text beneath the heading to explain the heading.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#toggles2"/></svg>
      <div>
        <h4 class="fw-bold mb-0">Other Six</h4>
        <p>Paragraph of text beneath the heading to explain the heading.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#geo-fill"/></svg>
      <div>
        <h4 class="fw-bold mb-0">Other Seven</h4>
        <p>Paragraph of text beneath the heading to explain the heading.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#tools"/></svg>
      <div>
        <h4 class="fw-bold mb-0">Other Eight</h4>
        <p>Paragraph of text beneath the heading to explain the heading.</p>
      </div>
    </div>
  </div>
</div>
@endsection