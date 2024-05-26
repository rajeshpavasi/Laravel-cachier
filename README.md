<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Steps for configure this app for Laravel cashier 

    1.Clone the repo
    2.install composer
    3.Change the env data from tested_env_details.txt(Stripe key mentioned)
    4.Create the DB as per the ENV file
    5.Run the migration 'php artisan migrate'
    6.Run the seeder 'php artisan db:seed --class=ProductSeeder'
    7.Finally run the application with different terminals
          1. php artisan serve
          2. npm run dev (for UI)

    Above details for config the application then we will continue for the usage of the application.

    1.Login with the url (http://127.0.0.1:8000/)
        username : rajeshpavasi@gmail.com
        password  : Test@123
        (you can create new user on click of register)
    2.Once logged in you can see the dashboard with some sample products for purchase.
    
    3.On click of buy then u will be redirected to cashier card details page(stripe) then enter the below  sample card details
       4242 4242 4242 4242 
       01/25 (any future years) 
       123 (any three digits for CVV)
       
    4. Once submitted it will be charged the amount then page will redirect to the home page.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
