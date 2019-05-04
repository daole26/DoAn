# TravelService
 ## I. Running Migrations
```
php artisan migrate
```
## II. Running Seeders
```
php artisan db:seed
```
## III.Eloquent-Sluggable
   1. Install the package via Composer:
```
$ composer require cviebrock/eloquent-sluggable:^4.8
```
The package will automatically register its service provider.

  2. Optionally, publish the configuration file if you want to change any defaults:
  ```
  php artisan vendor:publish --provider="Cviebrock\EloquentSluggable\ServiceProvider" 
  ```
  3. Confif SSL for Xampp: https://gist.github.com/nguyenanhtu/33aa7ffb6c36fdc110ea8624eeb51e69 
  (http://robsnotebook.com/xampp-ssl-encrypt-passwords)

    ================================

  **source slugger:** 
  -- https://github.com/cviebrock/eloquent-sluggable#installation
  -- https://github.com/UniSharp/laravel-ckeditor/blob/master/README.md

  **Queue start**
  - Start queue in background.
  ```
  php artisan queue:work --tries=2 &
  ```

  **Email function**
  - Copy .env.exmaple to .env.
  - Start queue.
  - Use http://www.yopmail.com/en/ to testing email function.
