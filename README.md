<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Lerionix

<h4> run update composer dependency</h4>

```bash
    composer update
```


<h4> create .env file</h4>
<h6> for UNIX OS ( Linux, MacOS )</h6>

```bash
    cp .env.example
```

<h6> for Windows</h6>

```bash
    copy .env.example
```


<h4> database default use PostgreSQL</h4>

```bash
    php artisan migrate
```

<h4> add fake data for development mode</h4>

```bash
    php artisan db:seed
```



<h4> if you want use docker to run with sail package</h4>

```bash
    ./vendor/bin/sail up
```
