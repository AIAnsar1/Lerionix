@extends('layouts.layout')


@section('main')
    <!-- ============== Start Hero section ========== -->
  <section class="hero" id="hero">
    <div class="container">
      <div class="d-flex flex-column text-center  gap-32  justify-content-center  align-items-center position-relative">
        <img class="shape blury" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
        <div class="d-flex flex-column text-center gap-16 justify-content-center  align-items-center position-relative">
          <h1 class="heading-1 position-relative ">Experience the <span class="primary-text">Future</span> of IT
            Innovation Today</h1>
          <p class="body-1 grey-text position-relative ">Transform your business with our innovative IT solutions. From
            streamlined cloud integration to robust cybersecurity, we deliver tailored technology solutions for your
            success. Stay ahead in the digital age with our expertise and passion for excellence.</p>
          <a class="btn" href="#">get started</a>
        </div>
        <div class="col-lg-10 col-12 row justify-content-between align-items-center ">
          <div class="col-lg-4 col-md-4 col-12 bordered-box">
            <h1 class="heading-1 counter">59</h1>
            <p class="body-1 grey-text">completed projects</p>
          </div>
          <div class="col-lg-4 col-md-4 col-12 bordered-box">
            <h1 class="heading-1 counter">08</h1>
            <p class="body-1 grey-text">years of experience</p>
          </div>
          <div class="col-lg-4 col-md-4 col-12 bordered-box">
            <h1 class="heading-1 counter">24</h1>
            <p class="body-1 grey-text">hard workers</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End Hero section ========== -->

  <!-- ============== Start services section ========== -->

  <section class="services position-relative pt-4  mt-4 " id="services">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <img class="shape organise" src="{{ asset('assets/main/images/shapes/ooorganize.svg') }}" alt="shape">
    <img class="shape blury blury-2" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="container section">
      <div class="d-flex flex-column gap-lg-0  gap-4">
        <div class="row reverse g-lg-0  g-4">
          <div class="bordered-box col-lg-4 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-bug primary-text icon-lg"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-2">
                cyber security
              </h2>
              <p class="body-2">
                Transform your business with our innovative IT solutions. From streamlined cloud integration to robust
                cybersecurity, we deliver tailored technology
              </p>
            </div>
          </div>
          <div class="col-lg-8 ps-lg-5 ps-md-5 ps-0  ">
            <h1 class="heading-1">Powerful IT <span class="primary-text">Solutions</span> for Business Success</h1>
            <p class="body-1">Transform your business with our innovative IT solutions. From streamlined cloud
              integration to robust cybersecurity, we deliver tailored technology solutions for your success. Stay
              ahead
              in the digital age with our expertise and passion for excellence.</p>
          </div>
        </div>
        <div class="row g-lg-0 g-md-4  g-4">
          <div class="col-lg-4 mobile-none"></div>
          <div class="bordered-box col-lg-4 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-laptop-code primary-text icon-lg"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-2">
                web developement
              </h2>
              <p class="body-2">
                Transform your business with our innovative IT solutions. From streamlined cloud integration to robust
                cybersecurity, we deliver tailored technology
              </p>
            </div>
          </div>
          <div class="col-lg-4 mobile-none"></div>
        </div>
        <div class="row g-lg-0  g-4">
          <div class="bordered-box col-lg-4 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-brands fa-sketch primary-text icon-lg"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-2">
                graphic design
              </h2>
              <p class="body-2">
                Transform your business with our innovative IT solutions. From streamlined cloud integration to robust
                cybersecurity, we deliver tailored technology
              </p>
            </div>
          </div>
          <div class="col-lg-4 mobile-none"></div>
          <div class="bordered-box col-lg-4 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-magnifying-glass primary-text icon-lg"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-2">
                SEO services
              </h2>
              <p class="body-2">
                Transform your business with our innovative IT solutions. From streamlined cloud integration to robust
                cybersecurity, we deliver tailored technology
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End services section ========== -->

  <!-- ============== about section ============== -->
  <section class="about position-relative pt-4  mt-4 " id="about">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <img class="shape organise" src="{{ asset('assets/main/images/shapes/ooorganize.svg') }}" alt="shape">
    <img class="shape blury blury-2" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="container section">
      <div class="d-flex flex-column gap-lg-0 gap-4">
        <div class="row justify-content-between  g-lg-0 g-md-0  g-4">
          <div class="col-lg-8 d-flex flex-column gap-16">
            <h1 class="heading-1">Unlocking Innovation Through <span class="primary-text">Technology</span> Expertise
            </h1>
            <p class="body-1">Transform your business with our innovative IT solutions. From streamlined cloud
              integration to robust cybersecurity, we deliver tailored technology solutions for your success. Stay
              ahead
              in the digital age with our expertise and passion for excellence.</p>
          </div>
          <div class="bordered-box col-lg-3 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-globe primary-text icon-md"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-3">
                worldwide services
              </h2>
              <p class="body-2">
                Transform your business with our innovative IT solutions. From streamlined cloud integration to robust
                cybersecurity
              </p>
            </div>
          </div>
        </div>
        <div class="row g-lg-0 g-md-0  g-4">
          <div class="col-lg-3 mobile-none">
            <a href="#" class="btn w-fit">get started</a>
          </div>
          <div class="col-lg-3 mobile-none"></div>
          <div class="bordered-box col-lg-3 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-headset primary-text icon-md"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-3">
                support 24/7
              </h2>
              <p class="body-2">
                Transform your business with our innovative IT solutions. From streamlined cloud integration to robust
                cybersecurity
              </p>
            </div>
          </div>
          <div class="col-lg-3 mobile-none"></div>
        </div>
        <div class="row g-lg-0 g-md-0  g-4">
          <div class="col-lg-3 mobile-none"></div>
          <div class="bordered-box col-lg-3 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-regular fa-gem primary-text icon-md"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-3">
                Unique Solutions
              </h2>
              <p class="body-2">
                Transform your business with our innovative IT solutions. From streamlined cloud integration to robust
                cybersecurity
              </p>
            </div>
          </div>
          <div class="col-lg-3 mobile-none"></div>
          <div class="bordered-box mt-lg-0 mt-4  col-lg-3 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-gamepad primary-text icon-md"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-3">
                easy to reach
              </h2>
              <p class="body-2">
                Transform your business with our innovative IT solutions. From streamlined cloud integration to robust
                cybersecurity
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End about section ========== -->

  <!-- ============== start section ========== -->
  <section class="portfolio position-relative pt-4  mt-4 " id="portfolio">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <img class="shape organise" src="{{ asset('assets/main/images/shapes/ooorganize.svg') }}" alt="shape">
    <img class="shape blury blury-2" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="container section">
      <div class="d-flex flex-column gap-32">
        <div class="row justify-content-between  align-items-center ">
          <div class="col-lg-10 d-flex flex-column gap-16">
            <h1 class="heading-1"><span class="primary-text">Case Studies</span> of Our Impact</h1>
            <p class="body-1">Transform your business with our innovative IT solutions. From streamlined cloud
              integration to robust cybersecurity.</p>
          </div>
          <div class="col-lg-2 d-flex justify-content-end "><a href="#" class="btn w-fit">view more</a></div>
        </div>
        <div class="row justify-content-center  align-items-center g-4 ">
          <div class="col-lg-4 col-md-6  col-12 d-flex flex-column">
            <div class="bordered-box p-0">
              <img src="{{ asset('assets/main/images/portfolio/portfolio1.jpeg') }}" alt="portfolio">
              <div class="d-flex flex-column gap-8 padding-16">
                <div class="d-flex flex-wrap  gap-2">
                  <p class="body-1 p-0 m-0">#React</p>
                  <p class="body-1 p-0 m-0">#HTML</p>
                  <p class="body-1 p-0 m-0">#Nodejs</p>
                  <p class="body-1 p-0 m-0">#Nextjs</p>
                </div>
                <div class="d-flex flex-column ">
                  <h3 class="heading-2">NFT Landing page</h3>
                  <p class="body-1">Website Developement</p>
                </div>
                <a href="#" class="learn-more">view project <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6  col-12 d-flex flex-column">
            <div class="bordered-box p-0">
              <img src="{{ asset('assets/main/images/portfolio/portfolio2.png') }}" alt="portfolio">
              <div class="d-flex flex-column gap-8 padding-16">
                <div class="d-flex flex-wrap  gap-2">
                  <p class="body-1 p-0 m-0">#React</p>
                  <p class="body-1 p-0 m-0">#figma</p>
                  <p class="body-1 p-0 m-0">#Nodejs</p>
                  <p class="body-1 p-0 m-0">#Nextjs</p>
                </div>
                <div class="d-flex flex-column ">
                  <h3 class="heading-2">NFT landing page uI/UX</h3>
                  <p class="body-1">UI/UX design</p>
                </div>
                <a href="#" class="learn-more">view project <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6  col-12 d-flex flex-column">
            <div class="bordered-box p-0">
              <img src="{{ asset('assets/main/images/portfolio/portfolio3.jpeg') }}" alt="portfolio">
              <div class="d-flex flex-column gap-8 padding-16">
                <div class="d-flex flex-wrap  gap-2">
                  <p class="body-1 p-0 m-0">#React</p>
                  <p class="body-1 p-0 m-0">#HTML</p>
                  <p class="body-1 p-0 m-0">#Nextjs</p>
                </div>
                <div class="d-flex flex-column ">
                  <h3 class="heading-2">NFT marketplace website</h3>
                  <p class="body-1">Website Developement</p>
                </div>
                <a href="#" class="learn-more">view project <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6  col-12 d-flex flex-column">
            <div class="bordered-box p-0">
              <img src="{{ asset('assets/main/images/portfolio/portfolio4.png') }}" alt="portfolio">
              <div class="d-flex flex-column gap-8 padding-16">
                <div class="d-flex flex-wrap  gap-2">
                  <p class="body-1 p-0 m-0">#React</p>
                  <p class="body-1 p-0 m-0">#HTML</p>
                  <p class="body-1 p-0 m-0">#CSS</p>
                </div>
                <div class="d-flex flex-column ">
                  <h3 class="heading-2">personal portfolio website</h3>
                  <p class="body-1">Website Developement</p>
                </div>
                <a href="#" class="learn-more">view project <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6  col-12 d-flex flex-column">
            <div class="bordered-box p-0">
              <img src="{{ asset('assets/main/images/portfolio/portfolio1.jpeg') }}" alt="portfolio">
              <div class="d-flex flex-column gap-8 padding-16">
                <div class="d-flex flex-wrap  gap-2">
                  <p class="body-1 p-0 m-0">#React</p>
                  <p class="body-1 p-0 m-0">#HTML</p>
                  <p class="body-1 p-0 m-0">#Nextjs</p>
                </div>
                <div class="d-flex flex-column ">
                  <h3 class="heading-2">personal portfolio website</h3>
                  <p class="body-1">Website Developement</p>
                </div>
                <a href="#" class="learn-more">view project <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6  col-12 d-flex flex-column">
            <div class="bordered-box p-0">
              <img src="{{ asset('assets/main/images/portfolio/portfolio2.png') }}" alt="portfolio">
              <div class="d-flex flex-column gap-8 padding-16">
                <div class="d-flex flex-wrap  gap-2">
                  <p class="body-1 p-0 m-0">#React</p>
                  <p class="body-1 p-0 m-0">#HTML</p>
                  <p class="body-1 p-0 m-0">#Nextjs</p>
                </div>
                <div class="d-flex flex-column ">
                  <h3 class="heading-2">Blog website</h3>
                  <p class="body-1">Website Developement</p>
                </div>
                <a href="#" class="learn-more">view project <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End portfolio section ========== -->

  <!-- ============== start testimonials section ========== -->
  <section class="testimonials position-relative pt-4 mt-4" id="team">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <img class="shape organise" src="{{ asset('assets/main/images/shapes/ooorganize.svg') }}" alt="shape">
    <img class="shape blury blury-2" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="d-flex flex-column gap-16 section">
      <div class="container">
        <div class="col-lg-10 d-flex flex-column gap-16">
          <h1 class="heading-1 col-12 "><span class="primary-text">testimonials</span> from Satisfied Partners</h1>
          <p class="body-1">Transform your business with our innovative IT solutions. From streamlined cloud
            integration to robust cybersecurity.</p>
        </div>
      </div>
      <div class="scroller" data-speed="fast">
        <div class="scroller__inner ">
          <div class="bordered-box d-flex flex-lg-row flex-column  gap-16">
            <div class="img padding-8">
              <img src="{{ asset('assets/main/images/testimonials/testimonials-1.jpg') }}" alt="person">
            </div>
            <div class="d-flex flex-column gap-8">
              <p class="body-1">
                They’re probably one of the easiest vendors I’ve ever worked with in the digital space. They have our
                best interests in mind. The team went the extra mile in negotiating costs and delivering within a
                flexible scope. They’re customer focused and strong in terms of development quality.
              </p>
              <hr>
              <div class="d-flex flex-lg-row flex-column  justify-content-between align-items-start ">
                <div class="d-flex flex-column">
                  <h3 class="heading-3">john smith</h3>
                  <p class="body-1">web developer</p>
                </div>
                <div class="d-flex gap-2 ">
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="bordered-box d-flex flex-lg-row flex-column   gap-16">
            <div class="img padding-8">
              <img src="{{ asset('assets/main/images/testimonials/testimonials-2.jpg') }}" alt="person">
            </div>
            <div class="d-flex flex-column gap-8">
              <p class="body-1">
                They’re probably one of the easiest vendors I’ve ever worked with in the digital space. They have our
                best interests in mind. The team went the extra mile in negotiating costs and delivering within a
                flexible scope. They’re customer focused and strong in terms of development quality.
              </p>
              <hr>
              <div class="d-flex flex-lg-row flex-column justify-content-between align-items-start ">
                <div class="d-flex flex-column">
                  <h3 class="heading-3">ahmad errami</h3>
                  <p class="body-1">front-end developer</p>
                </div>
                <div class="d-flex gap-2 ">
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="bordered-box flex-lg-row flex-column  d-flex gap-16">
            <div class="img padding-8">
              <img src="{{ asset('assets/main/images/testimonials/testimonials-3.jpg') }}" alt="person">
            </div>
            <div class="d-flex flex-column gap-8">
              <p class="body-1">
                They’re probably one of the easiest vendors I’ve ever worked with in the digital space. They have our
                best interests in mind. The team went the extra mile in negotiating costs and delivering within a
                flexible scope. They’re customer focused and strong in terms of development quality.
              </p>
              <hr>
              <div class="d-flex flex-lg-row flex-column  justify-content-between align-items-start ">
                <div class="d-flex flex-column">
                  <h3 class="heading-3">walter white</h3>
                  <p class="body-1">front-end developer</p>
                </div>
                <div class="d-flex gap-2 ">
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="scroller" data-speed="fast" data-direction="right">
        <div class="scroller__inner ">
          <div class="bordered-box flex-lg-row flex-column  d-flex gap-16">
            <div class="img padding-8">
              <img src="{{ asset('assets/main/images/testimonials/testimonials-5.jpg') }}" alt="person">
            </div>
            <div class="d-flex flex-column gap-8">
              <p class="body-1">
                They’re probably one of the easiest vendors I’ve ever worked with in the digital space. They have our
                best interests in mind. The team went the extra mile in negotiating costs and delivering within a
                flexible scope. They’re customer focused and strong in terms of development quality.
              </p>
              <hr>
              <div class="d-flex flex-lg-row flex-column  justify-content-between align-items-start ">
                <div class="d-flex flex-column">
                  <h3 class="heading-3">robert fring</h3>
                  <p class="body-1">web developer</p>
                </div>
                <div class="d-flex gap-2 ">
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="bordered-box d-flex flex-lg-row flex-column  gap-16">
            <div class="img padding-8">
              <img src="{{ asset('assets/main/images/testimonials/testimonials-4.jpg') }}" alt="person">
            </div>
            <div class="d-flex flex-column gap-8">
              <p class="body-1">
                They’re probably one of the easiest vendors I’ve ever worked with in the digital space. They have our
                best interests in mind. The team went the extra mile in negotiating costs and delivering within a
                flexible scope. They’re customer focused and strong in terms of development quality.
              </p>
              <hr>
              <div class="d-flex flex-lg-row flex-column  justify-content-between align-items-start ">
                <div class="d-flex flex-column">
                  <h3 class="heading-3">ahmad errami</h3>
                  <p class="body-1">front-end developer</p>
                </div>
                <div class="d-flex gap-2 ">
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="bordered-box d-flex flex-lg-row flex-column  gap-16">
            <div class="img padding-8">
              <img src="{{ asset('assets/main/images/testimonials/testimonials-1.jpg') }}" alt="person">
            </div>
            <div class="d-flex flex-column gap-8 text">
              <p class="body-1">
                They’re probably one of the easiest vendors I’ve ever worked with in the digital space. They have our
                best interests in mind. The team went the extra mile in negotiating costs and delivering within a
                flexible scope. They’re customer focused and strong in terms of development quality.
              </p>
              <hr>
              <div class="d-flex flex-lg-row flex-column  justify-content-between align-items-start ">
                <div class="d-flex flex-column">
                  <h3 class="heading-3">john doe</h3>
                  <p class="body-1">front-end developer</p>
                </div>
                <div class="d-flex gap-2 ">
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                  <i class="fa-solid fa-star primary-text icon-sm"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End testimonials section ========== -->

  <!-- ============== Start pricing section ========== -->
  <section class="pricing position-relative pt-4 mt-4">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <img class="shape blury blury-2" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="container section">
      <div class="col-lg-10 py-4 my-4 d-flex flex-column gap-16">
        <h1 class="heading-1 col-12 ">Choose Your <span class="primary-text">Pricing Plan</span>
        </h1>
        <p class="body-1">Transform your business with our innovative IT solutions. From streamlined cloud
          integration to robust cybersecurity.</p>
      </div>
      <div class="row justify-content-center align-items-center g-4 ">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="bordered-box d-flex flex-column padding-32 gap-32">
            <div class="d-flex flex-column gap-4 position-relative">
              <i class="fa-solid fa-gear shape-icon"></i>
              <h4 class="primary-text heading-2">
                basic plan
              </h4>
              <div class="d-flex align-items-start ">
                <h2 class="heading-1 line-0 d-flex justify-content-end align-items-end "><span class="dollar">$</span>29
                </h2>
                <span class="primary-text month">/month</span>
              </div>
            </div>
            <hr>
            <div class="d-flex flex-column gap-16">
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">email & comunication services</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">basic data backup and storage</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">standard security measuring</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">limited software support</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">suitable for small business</p>
              </div>
            </div>
            <a href="#" class="btn">get started</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="bordered-box d-flex flex-column padding-32 gap-32">
            <div class="d-flex flex-column gap-4 position-relative">
              <div class="shape-text d-flex flex-column justify-content-center align-items-center text-center ">
                <h3>30%</h3>
                <h4>off</h4>
              </div>
              <h4 class="primary-text heading-2">
                proffesional plan
              </h4>
              <div class="d-flex align-items-start ">
                <h2 class="heading-1 line-0 d-flex justify-content-end align-items-end"><span class="dollar">$</span>59
                </h2>
                <span class="primary-text month">/month</span>
              </div>
            </div>
            <hr>
            <div class="d-flex flex-column gap-16">
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">email & comunication services</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">basic data backup and storage</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">standard security measuring</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">limited software support</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">suitable for small business</p>
              </div>
            </div>
            <a href="#" class="btn">get started</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <div class="bordered-box d-flex flex-column padding-32 gap-32">
            <div class="d-flex flex-column gap-4 position-relative">
              <i class="fa-solid fa-gem shape-icon"></i>
              <h4 class="primary-text heading-2">
                entreprise plan
              </h4>
              <div class="d-flex align-items-start ">
                <h2 class="heading-1 line-0 d-flex justify-content-end align-items-end "><span class="dollar">$</span>99
                </h2>
                <span class="primary-text month">/month</span>
              </div>
            </div>
            <hr>
            <div class="d-flex flex-column gap-16">
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">email & comunication services</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">basic data backup and storage</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">standard security measuring</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">limited software support</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">suitable for small business</p>
              </div>
            </div>
            <a href="#" class="btn">get started</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End pricing section ========== -->

  <!-- ============== start call to action section ========== -->
  <section class="cta position-relative pt-4 mt-4">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="container">
      <div class="d-flex flex-column gap-16">
        <hr>
        <div class="row justify-content-between   align-items-center   g-4 ">
          <div class="col-lg-7 col-12">
            <h1 class="heading-1 "><span class="primary-text">contact us </span>for Free Consultation!
            </h1>
          </div>
          <div class="d-flex flex-column gap-8 col-lg-5 col-12 ">
            <div class="input d-flex justify-content-end align-items-center bordered-box p-0">
              <input type="text" placeholder="example@example.com" class="h-100 w-75 ps-3 ">
              <button class="btn w-25">subscribe</button>
            </div>
            <p class="body-1">join our newsletter</p>
          </div>
        </div>
        <hr>
      </div>
    </div>
  </section>
  <!-- ============== end call to action section ========== -->


  <!-- ============== start team section ========== -->
  <section class="team position-relative pt-4 mt-4" id="testimonials">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="container section">
      <div class="d-flex flex-column">
        <div class="row justify-content-between ">
          <h1 class="heading-1 col-lg-8 col-12">Meet Our Expert <span class="primary-text">Team</span> of Tech Pioneers
          </h1>
          <div class="col-lg-3 col-12 m-0 p-0 position-relative mt-lg-0 mt-4 ">
            <img src="{{ asset('assets/main/images/testimonials/testimonials-1.jpg') }}" alt="team">
            <div class="content-overlay gap-8 ">
              <div>
                <h2 class="heading-2 m-0 p-0 ">eliot alderson</h2>
                <p class="body-1 m-0 p-0 ">blockchain developer</p>
              </div>
              <div class="icons d-flex gap-2">
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-facebook-f primary-text icon-sm"></i></a>
                </div>
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-instagram primary-text  icon-sm"></i></a>
                </div>
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-x-twitter primary-text  icon-sm"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-12 m-0 p-0 position-relative mt-lg-0 mt-4 ">
            <img src="{{ asset('assets/main/images/testimonials/testimonials-2.jpg') }}" alt="team">
            <div class="content-overlay gap-8 ">
              <div>
                <h2 class="heading-2 m-0 p-0 ">john smith</h2>
                <p class="body-1 m-0 p-0 ">UI designer</p>
              </div>
              <div class="icons d-flex gap-2">
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-facebook-f primary-text  icon-sm"></i></a>
                </div>
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-instagram primary-text  icon-sm"></i></a>
                </div>
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-x-twitter primary-text  icon-sm"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12 mobile-none m-0 p-0 "></div>
          <div class="col-lg-3 col-12 m-0 p-0 position-relative mt-lg-0 mt-4 ">
            <img src="{{ asset('assets/main/images/testimonials/testimonials-3.jpg') }}" alt="team">
            <div class="content-overlay gap-8 ">
              <div>
                <h2 class="heading-2 m-0 p-0 ">john doe</h2>
                <p class="body-1 m-0 p-0 ">back-end developer</p>
              </div>
              <div class="icons d-flex gap-2">
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-facebook-f primary-text  icon-sm"></i></a>
                </div>
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-instagram primary-text  icon-sm"></i></a>
                </div>
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-x-twitter primary-text  icon-sm"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12 mobile-none m-0 p-0 "></div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-12 mobile-none m-0 p-0 "></div>
          <div class="col-lg-3 col-12 m-0 p-0 position-relative mt-lg-0 mt-4 ">
            <img src="{{ asset('assets/main/images/testimonials/testimonials-5.jpg') }}" alt="team">
            <div class="content-overlay gap-8 ">
              <div>
                <h2 class="heading-2 m-0 p-0 ">ahmad errami</h2>
                <p class="body-1 m-0 p-0 ">front-end developer</p>
              </div>
              <div class="icons d-flex gap-2">
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-facebook-f primary-text  icon-sm"></i></a>
                </div>
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-instagram primary-text  icon-sm"></i></a>
                </div>
                <div class="icon bordered-box d-flex justify-content-center align-items-center ">
                  <a href="#"><i class="fa-brands fa-x-twitter primary-text  icon-sm"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-12 mobile-none m-0 p-0 "></div>
          <div class="col-lg-3 col-12 mobile-none m-0 p-0 "></div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== end team section ========== -->


  <!-- ============== start faq section ========== -->
  <section class="faq position-relative pt-4 mt-4" id="faq">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <img class="shape blury blury-2" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="container section">
      <h1 class="heading-1 col-lg-8 pb-4 mb-4 ">Common Questions, Clear <span class="primary-text">Answers</span></h1>
      <div class="d-flex flex-column  gap-16">
        <div class="bordered-box">
          <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            onclick="rotateIcon('icon1')" aria-expanded="false">
            <div class="d-flex justify-content-between w-100 ">
              <h4 class="heading-3 m-0 p-0">
                Do you offer both on-site and remote IT
                support?
              </h4>
              <i id="icon1" class="fa-solid fa-chevron-down mx-4 icon-sm primary-text rotate-icon"></i>
            </div>
          </button>
          <div class="collapse" id="collapseOne">
            <p class="body-1 mt-4">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum ullam earum itaque, quas labore illo
              eligendi iure asperiores, modi veniam molestiae vero quasi. Ex, alias modi voluptates aspernatur
              consequuntur facere?
            </p>
          </div>
        </div>

        <div class="bordered-box">
          <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
            onclick="rotateIcon('icon2')" aria-expanded="false">
            <div class="d-flex justify-content-between w-100 ">
              <h4 class="heading-3 m-0 p-0">
                What is your approach to handling IT emergencies and downtime?
              </h4>
              <i id="icon2" class="fa-solid fa-chevron-down mx-4 icon-sm primary-text rotate-icon"></i>
            </div>
          </button>
          <div class="collapse" id="collapseTwo">
            <p class="body-1 mt-4">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum ullam earum itaque, quas labore illo
              eligendi iure asperiores, modi veniam molestiae vero quasi. Ex, alias modi voluptates aspernatur
              consequuntur facere?
            </p>
          </div>
        </div>

        <div class="bordered-box">
          <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
            onclick="rotateIcon('icon3')" aria-expanded="false">
            <div class="d-flex justify-content-between w-100 ">
              <h4 class="heading-3 m-0 p-0">
                What types of IT services does your company provide?
              </h4>
              <i id="icon3" class="fa-solid fa-chevron-down mx-4 icon-sm primary-text rotate-icon"></i>
            </div>
          </button>
          <div class="collapse" id="collapseThree">
            <p class="body-1 mt-4">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum ullam earum itaque, quas labore illo
              eligendi iure asperiores, modi veniam molestiae vero quasi. Ex, alias modi voluptates aspernatur
              consequuntur facere?
            </p>
          </div>
        </div>

        <div class="bordered-box">
          <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour"
            onclick="rotateIcon('icon4')" aria-expanded="false">
            <div class="d-flex justify-content-between w-100 ">
              <h4 class="heading-3 m-0 p-0">
                How experienced is your team in handling complex IT projects?
              </h4>
              <i id="icon4" class="fa-solid fa-chevron-down mx-4 icon-sm primary-text rotate-icon"></i>
            </div>
          </button>
          <div class="collapse" id="collapsefour">
            <p class="body-1 mt-4">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum ullam earum itaque, quas labore illo
              eligendi iure asperiores, modi veniam molestiae vero quasi. Ex, alias modi voluptates aspernatur
              consequuntur facere?
            </p>
          </div>
        </div>

        <div class="bordered-box">
          <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
            onclick="rotateIcon('icon5')" aria-expanded="false">
            <div class="d-flex justify-content-between w-100 ">
              <h4 class="heading-3 m-0 p-0">
                How do you ensure smooth communication and collaboration during IT projects?
              </h4>
              <i id="icon5" class="fa-solid fa-chevron-down mx-4 icon-sm primary-text rotate-icon"></i>
            </div>
          </button>
          <div class="collapse" id="collapseFive">
            <p class="body-1 mt-4">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum ullam earum itaque, quas labore illo
              eligendi iure asperiores, modi veniam molestiae vero quasi. Ex, alias modi voluptates aspernatur
              consequuntur facere?
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============== end faq section ========== -->


  <!-- ============== Start contact section ========== -->
  <section class="contact position-relative pt-4 mt-4" id="contact">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <img class="shape blury blury-2" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="container section">
      <h1 class="heading-1 col-lg-8 pb-4 mb-4 ">Let's Discuss Your <span class="primary-text">IT Needs</span></h1>
      <div class="row g-4">
        <div class="col-lg-6 col-12 ">
          <div class="d-flex flex-column  gap-32">
            <div class="d-flex flex-column gap-16 w-100 ">
              <div class="d-flex gap-16">
                <i class="fa-brands fa-instagram primary-text  icon-md"></i>
                <h3 class="heading-2 m-0 p-0 text-lowercase">imal.company</h3>
              </div>
              <hr class="m-0 p-0 ">
            </div>
            <div class="d-flex flex-column gap-16 w-100 ">
              <div class="d-flex gap-16">
                <i class="fa-solid fa-phone primary-text  icon-md"></i>
                <h3 class="heading-2 m-0 p-0 ">+123 456 7894</h3>
              </div>
              <hr class="m-0 p-0 ">
            </div>
            <div class="d-flex flex-column gap-16 w-100 ">
              <div class="d-flex gap-16">
                <i class="fa-solid fa-envelope primary-text  icon-md"></i>
                <h3 class="heading-2 m-0 p-0 text-lowercase">example@example.com</h3>
              </div>
              <hr class="m-0 p-0 ">
            </div>
            <iframe class="contact-map w-100 "
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9050207912896!2d-0.14675028449633118!3d51.514958479636384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ad554c335c1%3A0xda2164b934c67c1a!2sOxford+St%2C+London%2C+UK!5e0!3m2!1sen!2sro!4v1485889312335"
              allowfullscreen="">
            </iframe>
          </div>
        </div>
        <div class="col-lg-6 col-12 ">
          <form action="contact.php" method="post" class="main-form d-flex flex-column gap-32">
            <div class="row g-4">
              <div class="col-lg-6 col-12">
                <div class="d-flex flex-column w-100 gap-8">
                  <h3 class="heading-3">name <span class="primary-text">*</span></h3>
                  <input type="text" id="name" name="name" placeholder="john doe" required class="bordered-box">
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="d-flex flex-column w-100 gap-8">
                  <h3 class="heading-3">subject <span class="primary-text">*</span></h3>
                  <input type="text" id="subject" name="subject" placeholder="subject" required class="bordered-box">
                </div>
              </div>
            </div>
            <div class="d-flex flex-column w-100  gap-8">
              <h3 class="heading-3">email <span class="primary-text">*</span></h3>
              <input type="email" id="email" name="email" placeholder="example@example.com" required
                class="bordered-box">
            </div>
            <div class="d-flex flex-column w-100  gap-8">
              <h3 class="heading-3">message <span class="primary-text">*</span></h3>
              <textarea id="message" name="message" placeholder="your message" required cols="30" rows="10"
                class="bordered-box"></textarea>
            </div>
            <button type="submit" value="Submit" class="btn w-fit">send now</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== end contact section ========== -->


  <!-- ============== start footer section ========== -->
  <section class="footer position-relative pt-4 mt-4">
    <div class="container">
      <hr class="p-0 m-0">
      <div class="row justify-content-center align-items-center  my-4 ">
        <a href="#"
          class="d-flex justify-content-center justify-content-lg-start  col-lg-3 col-md-6 col-12 mt-lg-0 mt-2 ">
          <h3 class="heading-2 primary-text">IMAL</h3>
        </a>
        <div class="d-flex justify-content-center gap-16 col-lg-3 col-md-6 col-12 mt-lg-0 mt-2 ">
          <a href="#" class="footer-link">home</a>
          <a href="#" class="footer-link">services</a>
          <a href="#" class="footer-link">work</a>
          <a href="#" class="footer-link">contact</a>
        </div>
        <div class="d-flex justify-content-center  gap-16 col-lg-3 col-md-6 col-12 mt-lg-0 mt-2 ">
          <a href="#"><i class="fa-brands fa-facebook-f   icon-sm"></i></a>
          <a href="#"><i class="fa-brands fa-instagram   icon-sm"></i></a>
          <a href="#"><i class="fa-brands fa-x-twitter  icon-sm"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin-in  icon-sm"></i></a>
        </div>
        <div class="col-lg-3 col-md-6 col-12 d-flex  justify-content-md-end justify-content-center  mt-lg-0 mt-2">
          <p class="copy">copyright © 2024 imal</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== end footer section ========== -->
@endsection