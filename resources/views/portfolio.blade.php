@extends('layouts.layout')



@section('main')
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
          <div class="row">
            @foreach ($portfolio as $portfolios)
                <div class="col-lg-4 col-md-6 col-12 d-flex flex-column">
                    <div class="bordered-box p-0">
                        <img src="{{ asset('storage/' . $portfolios->photo)}}" alt="portfolio">
                        <div class="d-flex flex-column gap-8 padding-16">
                            <!-- 🔹 Динамически выводим теги -->
                            <div class="d-flex flex-wrap gap-2">
                                @foreach ($portfolios->tags as $tag)
                                    <p class="body-1 p-0 m-0">#{{ $tag->title }}</p>
                                @endforeach
                            </div>
        
                            <div class="d-flex flex-column">
                                <h3 class="heading-2">{{ $portfolios->title }}</h3>
                                <p class="body-1">{{ $portfolios->description }}</p>
                            </div>
        
                            <a href="{{ $portfolios->project_link }}" class="learn-more">Open Project {{ $portfolios->title }} <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ============== End portfolio section ========== -->
@endsection