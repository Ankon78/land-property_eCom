@extends('frontend.layouts.app')

@section('content')


<div class="section">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold text-primary heading">
            Popular Properties
          </h2>
        </div>
        <div class="col-lg-6 text-lg-end">
          <p>
            <a
              href="#"
              target="_blank"
              class="btn btn-primary text-white py-3 px-4"
              >View all properties</a
            >
          </p>
        </div>
      </div>
      <div class="row mb-4">
        @foreach ($properties as $item)

        <div class="col-3 col-lg-3 col-md-4 col-sm-1">

              <div class="property-item">
                <a href="#" class="img">
                  <img src="{{ asset($item->image) }}" alt="Image" class="img-fluid" style="height: 300px" width="600px"/>
                </a>

                <div class="property-content">
                  <div class="price mb-2"><span>{{ number_format((float)$item->price, 2, '.', '') }} Tk</span></div>
                  <div class="property-cat ">
                    <span class="d-block mb-3 text-black-50" style="font-size:18px">Name: {{ isset($item->name) ? $item->name : '' }}</span>
                </div>
                <div class="property-cat ">
                    <span class="city d-block mb-3 ">{{ isset($item->location) ? $item->location : '' }}</span>
                </div>

                  <div>

                    <div class="specs d-flex mb-4">
                      <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <div class="property-cat ">
                            <span class="d-block  ">{{ isset($item->bed) ? $item->bed : '' }}</span>
                        </div>
                      </span>
                      <span class="d-block d-flex align-items-center">
                        <span class="icon-bath me-2"></span>
                        <div class="property-cat ">
                            <span class="d-block  ">{{ isset($item->bath) ? $item->bath : '' }}</span>
                        </div>
                      </span>
                    </div>


                    <a
                      href="{{ route('details',$item->id) }}"
                      class="btn btn-primary py-2 px-3"
                      >See details</a
                    >
                  </div>
                </div>
              </div>
              <!-- .item -->


        </div>


      @endforeach
    </div>
  </div>

  <section class="features-1">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="box-feature">
            <span class="flaticon-house"></span>
            <h3 class="mb-3">Our Properties</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptates, accusamus.
            </p>
            <p><a href="#" class="learn-more">Learn More</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="box-feature">
            <span class="flaticon-building"></span>
            <h3 class="mb-3">Property for Sale</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptates, accusamus.
            </p>
            <p><a href="#" class="learn-more">Learn More</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="box-feature">
            <span class="flaticon-house-3"></span>
            <h3 class="mb-3">Real Estate Agent</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptates, accusamus.
            </p>
            <p><a href="#" class="learn-more">Learn More</a></p>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="box-feature">
            <span class="flaticon-house-1"></span>
            <h3 class="mb-3">House for Sale</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Voluptates, accusamus.
            </p>
            <p><a href="#" class="learn-more">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section sec-testimonials">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md-6">
          <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
            Customer Says
          </h2>
        </div>
        <div class="col-md-6 text-md-end">
          <div id="testimonial-nav">
            <span class="prev" data-controls="prev">Prev</span>

            <span class="next" data-controls="next">Next</span>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4"></div>
      </div>
      <div class="testimonial-slider-wrap">
        <div class="testimonial-slider">
          <div class="item">
            <div class="testimonial">
              <img
                src="{{ asset('assets/images/person_1-min.jpg') }}"
                alt="Image"
                class="img-fluid rounded-circle w-25 mb-4"
              />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">James Smith</h3>
              <blockquote>
                <p>
                  &ldquo;Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind
                  texts. Separated they live in Bookmarksgrove right at the
                  coast of the Semantics, a large language ocean.&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Designer, Co-founder</p>
            </div>
          </div>

          <div class="item">
            <div class="testimonial">
              <img
                src="{{ asset('assets/images/person_2-min.jpg') }}"
                alt="Image"
                class="img-fluid rounded-circle w-25 mb-4"
              />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">Mike Houston</h3>
              <blockquote>
                <p>
                  &ldquo;Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind
                  texts. Separated they live in Bookmarksgrove right at the
                  coast of the Semantics, a large language ocean.&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Designer, Co-founder</p>
            </div>
          </div>

          <div class="item">
            <div class="testimonial">
              <img
                src="{{ asset('assets/images/person_3-min.jpg') }}"
                alt="Image"
                class="img-fluid rounded-circle w-25 mb-4"
              />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
              <blockquote>
                <p>
                  &ldquo;Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind
                  texts. Separated they live in Bookmarksgrove right at the
                  coast of the Semantics, a large language ocean.&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Designer, Co-founder</p>
            </div>
          </div>

          <div class="item">
            <div class="testimonial">
              <img
                src="{{ asset('assets/images/person_4-min.jpg') }}"
                alt="Image"
                class="img-fluid rounded-circle w-25 mb-4"
              />
              <div class="rate">
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
                <span class="icon-star text-warning"></span>
              </div>
              <h3 class="h5 text-primary mb-4">Dave Smith</h3>
              <blockquote>
                <p>
                  &ldquo;Far far away, behind the word mountains, far from the
                  countries Vokalia and Consonantia, there live the blind
                  texts. Separated they live in Bookmarksgrove right at the
                  coast of the Semantics, a large language ocean.&rdquo;
                </p>
              </blockquote>
              <p class="text-black-50">Designer, Co-founder</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-4 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Let's find home that's perfect for you
          </h2>
          <p class="text-black-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
            enim pariatur similique debitis vel nisi qui reprehenderit.
          </p>
        </div>
      </div>
      <div class="row justify-content-between mb-5">
        <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
          <div class="img-about dots">
            <img src="{{ asset('assets/images/hero_bg_3.jpg') }}" alt="Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-lg-4">
          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-home2"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">2M Properties</h3>
              <p class="text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum iste.
              </p>
            </div>
          </div>

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-person"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Top Rated Agents</h3>
              <p class="text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum iste.
              </p>
            </div>
          </div>

          <div class="d-flex feature-h">
            <span class="wrap-icon me-3">
              <span class="icon-security"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">Legit Properties</h3>
              <p class="text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum iste.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row section-counter mt-5">
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">3298</span></span
            >
            <span class="caption text-black-50"># of Buy Properties</span>
          </div>
        </div>
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">2181</span></span
            >
            <span class="caption text-black-50"># of Sell Properties</span>
          </div>
        </div>
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="500"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">9316</span></span
            >
            <span class="caption text-black-50"># of All Properties</span>
          </div>
        </div>
        <div
          class="col-6 col-sm-6 col-md-6 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="600"
        >
          <div class="counter-wrap mb-5 mb-lg-0">
            <span class="number"
              ><span class="countup text-primary">7191</span></span
            >
            <span class="caption text-black-50"># of Agents</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="row justify-content-center footer-cta" data-aos="fade-up">
      <div class="col-lg-7 mx-auto text-center">
        <h2 class="mb-4">Be a part of our growing real state agents</h2>
        <p>
          <a
            href="#"
            target="_blank"
            class="btn btn-primary text-white py-3 px-4"
            >Apply for Real Estate agent</a
          >
        </p>
      </div>
      <!-- /.col-lg-7 -->
    </div>
    <!-- /.row -->
  </div>

  <div class="section section-5 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-6 mb-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            Our Agents
          </h2>
          <p class="text-black-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
            enim pariatur similique debitis vel nisi qui reprehenderit totam?
            Quod maiores.
          </p>
        </div>
      </div>
      <div class="row">
        @foreach ($employees as $item)


        <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
          <div class="h-100 person">
            <img
              src="{{ asset($item->image) }}"
              alt="Image"
              class="img-fluid"
            />

            <div class="person-contents">
              <h2 class="mb-0"><a href="#">{{ isset($item) ? $item->name : '' }}</a></h2>
              <span class="meta d-block mb-3">{{ isset($item) ? $item->job_role : '' }}</span>
              <p>
                {!! isset($item) ? $item->description : ''  !!}
              </p>

              <ul class="social list-unstyled list-inline dark-hover">
                <li class="list-inline-item">
                  <a href="{{ isset($item) ? $item->twitter : '' }} " target="_blank"><span class="icon-twitter"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="{{ isset($item) ? $item->facebook : '' }}" target="_blank"><span class="icon-facebook"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="{{ isset($item) ? $item->linkedin : '' }}" target="_blank"><span class="icon-linkedin"></span></a>
                </li>
                <li class="list-inline-item">
                  <a href="{{ isset($item) ? $item->instagram : '' }}" target="_blank"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>


  <!-- Preloader -->
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

@endsection
