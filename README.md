# Simple PHP MVC

Example of a simple PHP MVC framework. 100% vanilla PHP.  
**_For educational purposes._**

## Prerequisites

### Either install the following:
1. [Composer](https://getcomposer.org/download/)
2. [PHP >=8.2](https://www.php.net/downloads)

---

### or use podman
- install [podman](https://podman.io/docs/installation)

---

## Project setup

- copy `.env.example` to `.env`
```shell
cp .env.example .env
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