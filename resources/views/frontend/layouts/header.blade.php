
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <a href="/" class="logo m-0 float-start">Property</a>

          <ul
            class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
          >
            <li class="active"><a href="index.html">Home</a></li>
            <li class="has-children">
              <a href="properties.html">Properties</a>
              <ul class="dropdown">
                <li><a href="#">Buy Property</a></li>
                <li><a href="#">Sell Property</a></li>
                <li class="has-children">
                  <a href="#">Dropdown</a>
                  <ul class="dropdown">
                    <li><a href="#">Sub Menu One</a></li>
                    <li><a href="#">Sub Menu Two</a></li>
                    <li><a href="#">Sub Menu Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#">Services</a></li>
            <li><a href="{{ route('about') }}">About</a></li>

            <li><a href="{{ route('support') }}">Contact Us</a></li>
          </ul>

          <a
            href="#"
            class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
            data-toggle="collapse"
            data-target="#main-navbar"
          >
            <span></span>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="hero">
    <div class="hero-slide">
    @php
      $carousel_list= \App\Models\Carousel::all();
    @endphp
        @foreach ($carousel_list as $item)


      <div
        class="img overlay"
        style="background-image: url('{{ asset($item->image) }}')"
      ></div>
      @endforeach

    </div>

    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center">
          <h1 class="heading" data-aos="fade-up">
            Easiest way to find your dream home
          </h1>
          <form
            action="{{route('searchDetails')}}"
            method="POST"
            class="narrow-w form-search d-flex align-items-stretch mb-3">
          @csrf
            <input
              type="search"
              class="form-control px-4"
              id="search"
              name="property_location"
              placeholder="Your ZIP code or City. e.g. New York"
            />
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  </div>

