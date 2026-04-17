# Simple PHP MVC
> Forked from [Mahesh Samudra's simple-php-mvc-starter](https://github.com/maheshsamudra/simple-php-mvc-starter)

Example of a simple PHP MVC framework.

## Objective
**_For educational purposes._**
- Used in the past as a base for some PHP interview questions.
- Now I just use it as a starter-kit playground for learning and ideas

---

## Features
- Routing
- Controllers
- Models
- Views
- Twig templates
- SQLite database
- Twig extensions

---

## Prerequisites

### For local installation of PHP and composer:
Official links for PHP and composer:
1. [Composer](https://getcomposer.org/download/)
2. [PHP >=8.2](https://www.php.net/downloads)

Alternatively: 
- go with XAMPP (windows/linux/mac)
  - [XAMPP](https://www.apachefriends.org/download.html)
- go with Laravel herd lite that installs composer and php (windows/linux/mac)
  - [PHPNew](https://php.new/)

---

### Podman/Docker
Podman can be used to run the php and composer without installing them and keep your system clean.
- install [podman](https://podman.io/docs/installation) if you don't have it already
- use the scripts in `bin` folder to run the php and composer

> If docker is preferred (already installed), adapt the scripts in `bin` folder to use docker.

---

## Project setup

- copy `.env.example` to `.env`
```shell
cp .env.example .env
```
- initialise sqlite database
```shell
bin/php ../database/db-init.php
```

### using podman
- go to project_root (where composer.json resides) and run the following commands:
```shell
bin/composer install
```
- using php:
```shell
bin/php -S 0.0.0.0:9999
```

### using local install
- go to project_root (where composer.json resides) and run the following commands:
  - `composer install`
  - `php -S 127.0.0.1:9999`

### Accessing the page
In the browser go to `http://127.0.0.1:9999`

---

## Routing

Routing is done in the file `routes/main.php`.  
Supported methods:
- GET
- POST

- add a new GET route:
```php
$router->get('/get-route', GetController::class, 'get');
```
- add a new POST route:
```php
$router->post('/post-route', PostController::class, 'post');
```
---

## Controllers

Controller classes are located in `src/Controllers`.
To create a new controller: 
- create a new class in the `Controllers` folder
- extend the main `Controller` class in `src/Controller.php`

To output data from a GET route to a template, call the `render` method:
```php
// render template
$this->render('template_name_without_extension');

// render template with data
$this->render('template_name_without_extension', ['data' => $data]);
```

---

## Models

Models are located in `src/Models`.  
Laravel Eloquent is used.  
See [Eloquent documentation](https://laravel.com/docs/master/eloquent) for more info.

---

## Views

View templates are located in the `templates` folder.  
Templates are rendered with Twig.  
See [Twig documentation](https://twig.symfony.com/doc/3.x/) for more info.

### Twig Extensions

Custom Twig extensions are located in `src/Views/Extensions/`.  
They are autoloaded by the Render.  
See [Twig documentation](https://twig.symfony.com/doc/3.x/advanced.html#creating-an-extension) for more info on creating Twig extensions.  

- an example extension is located in `src/Views/Extensions/TwigEnvExtension.php` which adds `env` function to Twig, to access the environment variables in the templates.
