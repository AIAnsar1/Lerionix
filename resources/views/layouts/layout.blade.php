<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="imal | creative digital agency & Business Services HTML landing page template ">
  <!-- fav icon -->
  <link rel="icon" href="{{ asset('assets/main/images/favicon.ico') }}">

  <!-- bootstarp css file -->
  <link rel="stylesheet" href="{{ asset('assets/main/css/bootstrap.min.css') }}">

  <!-- fontawesome icons -->
  <link rel="stylesheet" href="{{ asset('assets/main/css/all.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


  <!--  toasts file     -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <!-- main css file -->
  <link rel="stylesheet" href="{{ asset('assets/main/css/style.css') }}">
  <title> Lerionix | creative digital agency & Business Services HTML template </title>
</head>

<body class="body">
  <!-- start scroll to top button -->
  <div id="progress">
    <span id="progress-value"><i class="fa fa-arrow-up" aria-hidden="true"></i></span>
  </div>
  <!-- end scroll to top button -->

  <!-- start preLoader -->
  <div id="preloader">
    <div class="spinner"></div>
  </div>
  <!-- end preLoader -->
  <style>
      :root {
          --icon-color-light: black;   /* Черные иконки при светлой теме */
          --icon-color-dark: white;    /* Белые иконки при темной теме */
          --hover-glow: #02f291;       /* Зеленый цвет при наведении */
      }

      /* Светлая тема: черные иконки */
      body.light-theme .social-link i {
          color: var(--icon-color-light);
          transition: color 0.3s ease-in-out, text-shadow 0.3s ease-in-out;
      }

      /* Темная тема: белые иконки */
      body.dark-theme .social-link i {
          color: var(--icon-color-dark);
      }

      /* ✅ Фикс: Наведение (всегда зелёный, в любой теме) */
      body.light-theme .social-link:hover i,
      body.dark-theme .social-link:hover i {
          color: var(--hover-glow);
          text-shadow: 0 0 8px var(--hover-glow);
      }

      .logo {
        width: 53px;  /* Уменьшенный размер, можно изменить */
        height: 60px;  /* Сохранение пропорций */
        object-fit: contain;  /* Чтобы не обрезало */
      }



  </style>
  <!-- ======= start Header ======= -->
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container d-flex align-items-center gap-3">
        <img src="{{ asset('assets/main/images/logo.png') }}" alt="Lerionix Logo" class="logo">
        <a href="{{ route('home') }}">
          <h3 class="heading-2 primary-text">Lerionix</h3>
        </a>
          
        <!-- if you prefer to use an image as logo -->
        <!-- <a class="navbar-brand " href="#"><img src="images/logo/logo.png" class="logo" alt="LOGO"></a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <ul class="navbar-nav ms-auto" id="navbar">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('portfolio') }}">portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">contact us</a>
            </li>
          </ul>
          <div class="d-flex gap-2 ms-auto">
            <a class="btn" href="#contact">Get Started</a>
              <button id="mode-toggle" class="btn-light-mode switch-button">
                  <i id="mode-icon" class="fa-solid fa-moon icon-md primary-text"></i>
              </button>

          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- ======= end Header ======= -->


  @yield('main')


  <!--  JQuery file     -->
  <script src="{{ asset('assets/main/js/jquery-3.6.1.min.js') }}"></script>

  <!--  bootstrap bundle js file     -->
  <script src="{{ asset('assets/main/js/bootstrap.bundle.min.js') }}"></script>

  <!--  toasts file     -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <!--  counter     -->
  <script src="{{ asset('assets/main/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('assets/main/js/jquery.waypoints.js') }}"></script>

  <!--  main js file  -->
  <script src="{{ asset('assets/main/js/main.js') }}"></script>
  <script>
      document.addEventListener("DOMContentLoaded", function () {
          const modeToggle = document.getElementById("mode-toggle");
          const body = document.body;

          // Проверяем, какая тема была сохранена
          if (localStorage.getItem("theme") === "dark") {
              body.classList.add("dark-theme");
              body.classList.remove("light-theme");
          } else {
              body.classList.add("light-theme");
              body.classList.remove("dark-theme");
          }

          // Переключение темы при клике
          modeToggle.addEventListener("click", function () {
              if (body.classList.contains("dark-theme")) {
                  body.classList.remove("dark-theme");
                  body.classList.add("light-theme");
                  localStorage.setItem("theme", "light");
              } else {
                  body.classList.remove("light-theme");
                  body.classList.add("dark-theme");
                  localStorage.setItem("theme", "dark");
              }
          });
      });

  </script>

</body>

</html>
