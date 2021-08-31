<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

Run the following commands:

- copy .env.example to .env.
- php artisan key:generate
- composer install
- php artisan migrate --seed
- php artisan serve

Doc to use REST API:
    To get all websites:
        - http://mytest.test/api/websites

    To Publish a post:
        - http://mytest.test/api/post/{website_id}?title=ANother Test&description=My Another Description
    To Subscribe to a website:
        - http://mytest.test/api/subscribe/{website_id}?email=anything@test.com
    To get all posts:
        - http://mytest.test/api/posts
    To get all subscribers:
        - http://mytest.test/api/subscribers

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
