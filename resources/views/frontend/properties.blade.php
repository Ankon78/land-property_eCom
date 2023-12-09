@extends('frontend.layouts.app')
@section('content')
<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 text-center mx-auto">
              <h2 class="font-weight-bold text-primary heading">
                Featured Properties
              </h2>
            </div>
          </div>
        <div class="row justify-content-between">
            @isset($property)


            <div class="col-lg-7">
              <div class="image">
                <img src="{{ asset($property->image) }}" alt="Image"  style="height: auto" width="auto"/>

              </div>
            </div>
            <div class="col-lg-4 agent-box mt-0">
                <h2 class="heading text-primary" ><span style="color: green;font-weight:bold;font:800">{{isset($property->name) ? $property->name : '' }}</span></h2>
              <h6 class="text-black-50">{{isset($property->location) ? $property->location : '' }}</h6>
              <h4 class="text" style="font-weight: bold; text-decoration: underline;"><span>{{ isset($property->price) ? $property->price : ''}}Tk</span></h4>
              <div class="specs d-flex mb-4">
                <span class="d-block d-flex align-items-center me-3">
                  <span class="icon-bed me-2"></span>
                  <div class="property-cat ">
                      <span class="d-block  ">{{ isset($property->bed) ? $property->bed : '' }}</span>
                  </div>
                </span>
                <span class="d-block d-flex align-items-center">
                  <span class="icon-bath me-2"></span>
                  <div class="property-cat ">
                      <span class="d-block  ">{{ isset($property->bath) ? $property->bath : '' }}</span>
                  </div>
                </span>
              </div>
              <p class="text-black-50">{!! isset($property->description) ? $property->description : '' !!}</p>

              @else
              <p>No property found</p>
          @endisset

              <div class="d-block agent-box">

                <div class="text">
                  <h3 class="mb-0">Contact</h3>
                  <div class="meta mb-3">Real Estate</div>

                  <ul class="list-unstyled social dark-hover d-flex">
                    <li class="me-1">
                      <a href="#"><span class="icon-instagram"></span></a>
                    </li>
                    <li class="me-1">
                      <a href="#"><span class="icon-twitter"></span></a>
                    </li>
                    <li class="me-1">
                      <a href="#"><span class="icon-facebook"></span></a>
                    </li>
                    <li class="me-1">
                      <a href="#"><span class="icon-linkedin"></span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
    </div>
    {{-- <div>
        <!-- Display property details here -->
        @isset($property)
            <h2>Property Details</h2>
            <p>Location: {{ $property->location }}</p>
            <!-- Include other property details as needed -->
        @else
            <p>No property found</p>
        @endisset
    </div> --}}
  </div>

@endsection
