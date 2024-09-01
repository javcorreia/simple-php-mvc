# simple-php-mvc

## needed tools

### Either install the following:
1. [composer](https://getcomposer.org/download/)
2. [PHP 8.2](https://www.php.net/downloads)

---

### or use docker
- using composer:
```shell
docker run --rm --interactive --tty \
  --env COMPOSER_HOME \
  --env COMPOSER_CACHE_DIR \
  --volume ./:/app \
  docker.io/library/composer:2.7 composer <comand>
```
- using php:
```shell
docker run -it --rm --name php-exec -v ./:/app -w /app/public -p 9999:9999 php:8.2-fpm php -S 127.0.0.1:9999
```

---

## project setup
- go to project_root (where composer.json resides) and run the following commands:
  - `composer install`
  - `php -S 127.0.0.1:9999`
- In the browser go to `http://127.0.0.1:9999`
