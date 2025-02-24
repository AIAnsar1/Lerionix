@extends('layouts.layout')


@section('main')
    <!-- ============== Start Hero section ========== -->
  <section class="hero" id="hero">
    <div class="container">
      <div class="d-flex flex-column text-center  gap-32  justify-content-center  align-items-center position-relative">
        <img class="shape blury" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
        <div class="d-flex flex-column text-center gap-16 justify-content-center  align-items-center position-relative">
          <h1 class="heading-1 position-relative ">🚀 <span class="primary-text">Lerionix</span> – Engineering the <span class="primary-text">Future</span> of IT
            Innovation Today</h1>
          <p class="body-1 grey-text position-relative ">At Lerionix, we don’t just build technology—we shape the future.
            As a cutting-edge IT outsourcing company, we transform businesses with innovative, scalable, and secure technology solutions.</p>
          <a class="btn" href="#contact">Get Started</a>
        </div>
        <div class="col-lg-10 col-12 row justify-content-between align-items-center ">
          <div class="col-lg-4 col-md-4 col-12 bordered-box">
            <h1 class="heading-1 counter">47</h1>
            <p class="body-1 grey-text">Completed Projects</p>
          </div>
          <div class="col-lg-4 col-md-4 col-12 bordered-box">
            <h1 class="heading-1 counter">05</h1>
            <p class="body-1 grey-text">Years Of Experience</p>
          </div>
          <div class="col-lg-4 col-md-4 col-12 bordered-box">
            <h1 class="heading-1 counter">22</h1>
            <p class="body-1 grey-text">Hard Workers</p>
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
                Cyber Security 🛡️
              </h2>
              <p class="body-2">
                Protect your digital assets with cutting-edge cybersecurity solutions.
                We safeguard your business with advanced threat detection, data encryption,
                and proactive security strategies—ensuring your operations remain resilient against cyber threats.
              </p>
            </div>
          </div>
          <div class="col-lg-8 ps-lg-5 ps-md-5 ps-0  ">
            <h1 class="heading-1">Lerionix  <span class="primary-text">Driving Innovation,</span> Powering Success</h1>
            <p class="body-1">Unlock the full potential of your business with Lerionix – your trusted IT partner.
              From cutting-edge cloud solutions to next-gen cybersecurity, we craft powerful, scalable, and secure technologies that drive growth.</p>
          </div>
        </div>
        <div class="row g-lg-0 g-md-4  g-4">
          <div class="col-lg-4 mobile-none"></div>
          <div class="bordered-box col-lg-4 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-laptop-code primary-text icon-lg"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-2">
                Web Development 💻
              </h2>
              <p class="body-2">
                Empower your online presence with stunning, high-performance websites. Our expert developers craft scalable,
                responsive, and user-friendly web solutions that drive engagement, enhance user experience, and accelerate business growth.
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
                Graphic Design 🎨
              </h2>
              <p class="body-2">
                Bring your brand to life with visually captivating designs. From logos and branding to digital and print media,
                our creative experts craft designs that make a lasting impression and elevate your business identity.
              </p>
            </div>
          </div>
          <div class="col-lg-4 mobile-none"></div>
          <div class="bordered-box col-lg-4 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-magnifying-glass primary-text icon-lg"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-2">
                SEO Services 🚀
              </h2>
              <p class="body-2">
                Boost your online visibility and dominate search results. Our strategic SEO solutions optimize
                your website for higher rankings, increased traffic, and better conversions—connecting you with your ideal audience effortlessly.
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
            <h1 class="heading-1">Unlocking Innovation Through <span class="primary-text">Technology</span> Expertise 🚀
            </h1>
            <p class="body-1">Innovation meets expertise—empowering your business with cutting-edge technology solutions.
              From seamless cloud integration to next-level cybersecurity, we craft tailored strategies that drive growth,
              efficiency, and success. Stay ahead of the curve with a team that turns vision into reality.

              Let’s shape the future—together. 💡✨</p>
          </div>
          <div class="bordered-box col-lg-3 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-globe primary-text icon-md"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-3">
                Worldwide Services 🌍
              </h2>
              <p class="body-2">
                Expand your reach with our global IT solutions. No matter where your business operates,
                 we deliver innovative and scalable technology services that help you thrive in a competitive digital world.
              </p>
            </div>
          </div>
        </div>
        <div class="row g-lg-0 g-md-0  g-4">
          <div class="col-lg-3 mobile-none">
            <a href="#" class="btn w-fit">Get Started</a>
          </div>
          <div class="col-lg-3 mobile-none"></div>
          <div class="bordered-box col-lg-3 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-headset primary-text icon-md"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-3">
                24/7 Support 📞
              </h2>
              <p class="body-2">
                We're here when you need us—anytime, anywhere. Our dedicated support team ensures seamless
                operations with round-the-clock assistance, quick troubleshooting, and expert guidance for uninterrupted business performance.
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
                Unique Solutions 🔥
              </h2>
              <p class="body-2">
                Stand out with tailor-made technology solutions.
                 We create customized strategies and software designed specifically for your business needs, driving efficiency, innovation, and success.
              </p>
            </div>
          </div>
          <div class="col-lg-3 mobile-none"></div>
          <div class="bordered-box mt-lg-0 mt-4  col-lg-3 padding-32 d-flex  flex-column  gap-32">
            <div><i class="fa-solid fa-gamepad primary-text icon-md"></i></div>
            <div class="d-flex flex-column gap-8">
              <h2 class="heading-3">
                Easy to Reach 📩
              </h2>
              <p class="body-2">
                Connecting with us is effortless. Whether you need expert advice,
                 IT support, or a custom solution, we are just a call or message away—ready to help you achieve your goals.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End about section ========== -->


  <!-- ============== start testimonials section ========== -->
  <section class="testimonials position-relative pt-4 mt-4" id="team">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <img class="shape organise" src="{{ asset('assets/main/images/shapes/ooorganize.svg') }}" alt="shape">
    <img class="shape blury blury-2" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="d-flex flex-column gap-16 section">
      <div class="container">
        <div class="col-lg-10 d-flex flex-column gap-16">
          <h1 class="heading-1 col-12 "><span class="primary-text">Еestimonials</span> Аrom Satisfied Partners 🌟</h1>
          <p class="body-1">Real success, real stories. Our partners trust us to deliver innovative IT solutions—seamless cloud integration,
            rock-solid cybersecurity, and beyond. See how we’ve helped businesses like yours thrive in the digital era.</p>
        </div>
      </div>
      <div class="scroller" data-speed="slow">
        <div class="scroller__inner">
            @foreach ($review as $member)
                <div class="bordered-box flex-lg-row flex-column  d-flex gap-16">
                    <div class="img padding-8">
                        <img src="{{ asset('storage/' . $member->photo) }}" alt="person">
                    </div>
                    <div class="d-flex flex-column gap-8">
                        <p class="body-1">
                            {{ $member->description }}
                        </p>
                        <hr>
                        <div class="d-flex flex-lg-row flex-column justify-content-between align-items-start">
                            <div class="d-flex flex-column">
                                <h3 class="heading-3">{{ $member->title }}</h3>
                                <p class="body-1">{{ $member->company_title }}</p>
                            </div>
                            <div class="d-flex gap-2">
                                @php
                                    // Проверяем, есть ли у отзыва поле 'ratings' и преобразуем в число
                                    $rating = is_numeric($member->ratings) ? (int) $member->ratings : 0;
                                    $rating = min(max($rating, 0), 5); // Убедимся, что рейтинг от 0 до 5
                                @endphp
                                {!! str_repeat('<i class="fa-solid fa-star primary-text icon-sm"></i>', $rating) !!}
                                {!! str_repeat('<i class="fa-regular fa-star icon-sm"></i>', 5 - $rating) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
      <div class="scroller" data-speed="slow" data-direction="right">
        <div class="scroller__inner ">
            @foreach ($review as $member)
                <div class="bordered-box flex-lg-row flex-column  d-flex gap-16">
                    <div class="img padding-8">
                        <img src="{{ asset('storage/' . $member->photo) }}" alt="person">
                    </div>
                    <div class="d-flex flex-column gap-8">
                        <p class="body-1">
                            {{ $member->description }}
                        </p>
                        <hr>
                        <div class="d-flex flex-lg-row flex-column justify-content-between align-items-start">
                            <div class="d-flex flex-column">
                                <h3 class="heading-3">{{ $member->title }}</h3>
                                <p class="body-1">{{ $member->company_title }}</p>
                            </div>
                            <div class="d-flex gap-2">
                                @php
                                    // Проверяем, есть ли у отзыва поле 'ratings' и преобразуем в число
                                    $rating = is_numeric($member->ratings) ? (int) $member->ratings : 0;
                                    $rating = min(max($rating, 0), 5); // Убедимся, что рейтинг от 0 до 5
                                @endphp
                                {!! str_repeat('<i class="fa-solid fa-star primary-text icon-sm"></i>', $rating) !!}
                                {!! str_repeat('<i class="fa-regular fa-star icon-sm"></i>', 5 - $rating) !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
        <h1 class="heading-1 col-12 ">Choose Your <span class="primary-text">Pricing Plan 💸</span>
        </h1>
        <p class="body-1">Enhance your business with our cutting-edge IT solutions.
            From seamless cloud integration to advanced cybersecurity, we provide tailored services to drive efficiency and security.</p>
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
                <p class="body-1 fw-bold m-0 p-0">Email & communication services</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Basic data backup and storage</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Standard security measures</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Limited software support</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Ideal for small businesses</p>
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
                <p class="body-1 fw-bold m-0 p-0">Email & communication services</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Advanced data backup and storage</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Enhanced security measures</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Extended software support</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Perfect for growing businesses</p>
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
                <p class="body-1 fw-bold m-0 p-0">Email & communication services</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Comprehensive data backup and storage</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Premium security measures</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Full software support</p>
              </div>
              <div class="d-flex align-items-center gap-16">
                <i class="fa-solid fa-circle-check primary-text icon-sm"></i>
                <p class="body-1 fw-bold m-0 p-0">Designed for large enterprises</p>
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
            <h1 class="heading-1 "><span class="primary-text">Get in Touch </span>for a Free Consultation! 💬✨
            </h1>
          </div>
          <div class="d-flex flex-column gap-8 col-lg-5 col-12 ">
            <div class="input d-flex justify-content-end align-items-center bordered-box p-0">
              <input type="text" placeholder="example@example.com" class="h-100 w-75 ps-3 ">
              <button class="btn w-25">subscribe</button>
            </div>
            <p class="body-1">📢 Join Our Newsletter & Stay Updated! 🚀</p>
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
        <div class="row justify-content-between">
          <h1 class="heading-1 col-lg-8 col-12">Meet Our Visionary <span class="primary-text">Team</span> of Tech Innovators 🚀</h1>
          @foreach ($team as $member)
          <div class="col-lg-3 col-12 m-0 p-0 position-relative mt-lg-0 mt-4">
            <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}">
            <div class="content-overlay gap-8">
              <div>
                <h2 class="heading-2 m-0 p-0">{{ $member->name }}</h2>
                <p class="body-1 m-0 p-0">{{ $member->profession }}</p>
              </div>
                @if (!empty($member->socials_networks) && (is_array($member->socials_networks) || is_object($member->socials_networks)))
                    <div class="icons d-flex gap-2">
                        @foreach ($member->socials_networks as $platform => $link)
                            @php
                                $platform = strtolower($platform);
                                if (!str_starts_with($link, 'http')) {
                                    $link = 'https://' . $link;
                                }
                            @endphp
                            @if (!empty($link))
                                <div class="icon bordered-box d-flex justify-content-center align-items-center">
                                    <a href="{{ $link }}" target="_blank" rel="noopener noreferrer">
                                        @if ($platform === 'instagram')
                                            <i class="fa-brands fa-instagram primary-text icon-sm"></i>
                                        @elseif ($platform === 'telegram')
                                            <i class="fa-brands fa-telegram primary-text icon-sm"></i>
                                        @elseif ($platform === 'x' || $platform === 'twitter')
                                            <i class="fa-brands fa-x-twitter primary-text icon-sm"></i>
                                        @endif
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
          </div>
          @endforeach
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
      <h1 class="heading-1 col-lg-8 pb-4 mb-4 ">Got Questions? We've Got the Answers <span class="primary-text">Straightforward & Clear!</span></h1>
      <div class="d-flex flex-column  gap-16">
          @php
              $questions = collect($about)
                  ->pluck('questions')
                  ->map(fn($q) => is_string($q) ? json_decode($q, true) : $q) // Декодируем JSON
                  ->flatten(1) // Разворачиваем вложенные массивы
                  ->toArray();
          @endphp

          @foreach ($questions as $qa)
              @if (is_array($qa) && isset($qa['question'], $qa['answer']))
                  <div class="bordered-box">
                      <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ Str::slug($qa['question']) }}"
                              onclick="rotateIcon('{{ Str::slug($qa['question']) }}-icon')" aria-expanded="false">
                          <div class="d-flex justify-content-between w-100">
                              <h4 class="heading-3 m-0 p-0">
                                  {{ $qa['question'] }}
                              </h4>
                              <i id="{{ Str::slug($qa['question']) }}-icon" class="fa-solid fa-chevron-down mx-4 icon-sm primary-text rotate-icon"></i>
                          </div>
                      </button>
                      <div class="collapse" id="collapse-{{ Str::slug($qa['question']) }}">
                          <p class="body-1 mt-4">
                              {{ $qa['answer'] }}
                          </p>
                      </div>
                  </div>
              @endif
          @endforeach

      </div>
    </div>
  </section>

  <!-- ============== end faq section ========== -->


  <!-- ============== Start contact section ========== -->
  <section class="contact position-relative pt-4 mt-4" id="contact">
    <img class="shape blury blury-1" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <img class="shape blury blury-2" src="{{ asset('assets/main/images/shapes/bbblurry.svg') }}" alt="shape">
    <div class="container section">
      <h1 class="heading-1 col-lg-8 pb-4 mb-4 ">🌍 Lerionix – Transforming Ideas <span class="primary-text">into Digital Reality</span></h1>
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
                <h3 class="heading-2 m-0 p-0 ">+998 91 140 31 15</h3>
              </div>
              <hr class="m-0 p-0 ">
            </div>
            <div class="d-flex flex-column gap-16 w-100 ">
              <div class="d-flex gap-16">
                <i class="fa-solid fa-envelope primary-text  icon-md"></i>
                <h3 class="heading-2 m-0 p-0 text-lowercase">AyyubhonNematov@gmail.com</h3>
              </div>
              <hr class="m-0 p-0 ">
            </div>
            <iframe class="contact-map w-100 "
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57679.77226713043!2d70.90314314567188!3d40.531592551531546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38baeeeb2e1c3e7f%3A0x816d723cc5842908!2z0JrQvtC60LDQvdC0LCDQpNC10YDQs9Cw0L3RgdC60LDRjyDQntCx0LvQsNGB0YLRjCwg0KPQt9Cx0LXQutC40YHRgtCw0L0!5e1!3m2!1sru!2s!4v1740302460360!5m2!1sru!2s"  referrerpolicy="no-referrer-when-downgrade""
              allowfullscreen="">
            </iframe>
          </div>
        </div>
        <div class="col-lg-6 col-12 ">
            <form action="{{ route('order') }}" method="POST" class="main-form d-flex flex-column gap-32">
                @csrf
                <div class="row g-4">
                    <div class="col-lg-6 col-12">
                        <div class="d-flex flex-column w-100 gap-8">
                            <h3 class="heading-3">Name <span class="primary-text">*</span></h3>
                            <input type="text" id="title" name="title" placeholder="John Doe" required class="bordered-box" value="{{ old('title') }}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="d-flex flex-column w-100 gap-8">
                            <h3 class="heading-3">Subject <span class="primary-text">*</span></h3>
                            <input type="text" id="subject" name="subject" placeholder="Subject" required class="bordered-box" value="{{ old('subject') }}">
                            @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column w-100 gap-8">
                    <h3 class="heading-3">Email <span class="primary-text">*</span></h3>
                    <input type="email" id="email" name="email" placeholder="example@example.com" required class="bordered-box" value="{{ old('email') }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex flex-column w-100 gap-8">
                    <h3 class="heading-3">Message <span class="primary-text">*</span></h3>
                    <textarea id="message" name="message" placeholder="Your message" required cols="30" rows="10" class="bordered-box">{{ old('message') }}</textarea>
                    @error('message')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" value="Submit" class="btn w-fit">Send Now</button>
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
            <a href="https://t.me/Lerionix" class="social-link"><i class="fa-brands fa-telegram icon-sm"></i></a>
            <a href="https://www.instagram.com/lerionix" class="social-link"><i class="fa-brands fa-instagram icon-sm "></i></a>
            <a href="https://x.com/Lerionix" class="social-link"><i class="fa-brands fa-x-twitter icon-sm"></i></a>
            <a href="https://www.linkedin.com/in/Lerionix/?locale=en_US" class="social-link"><i class="fa-brands fa-linkedin-in icon-sm"></i></a>
        </div>
        <div class="col-lg-3 col-md-6 col-12 d-flex  justify-content-md-end justify-content-center  mt-lg-0 mt-2">
          <p class="copy">copyright © 2024 imal</p>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== end footer section ========== -->
@endsection
