# simple-php-mvc

## needed tools

### Either install the following:
1. [composer](https://getcomposer.org/download/)
2. [PHP 8.2](https://www.php.net/downloads)

---

### or use podman
- install [podman](https://podman.io/docs/installation)

---

## project setup

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
- In the browser go to `http://127.0.0.1:9999`

---

## Routing

---

## Controllers

---

## Models

---

## Views

