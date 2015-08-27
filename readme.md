## toDOJO

Simple Laravel TODO used in DOJO Maringa

## Quick start

1 - Clone the repo:

```bash
git clone https://github.com/phpmga/to-dojo.git
```

2 - Change to the directory created

```bash
cd to-dojo/
```

3 - Download Composer

Run this in your terminal to get the latest Composer version:

```bash
php -r "readfile('https://getcomposer.org/installer');" | php
```

4 - Composer Install

```bash
php composer.phar install
```

5 - Create file .env 

```bash
cp .env.example .env
```

6 - Set the application key

```bash
php artisan key:generate
```

7 - Edit .env and add database config

```bash
DB_CONNECTION=sqlite
```

8 - Create database

```bash
touch storage/database.sqlite
```

9 - Run migration

```bash
php artisan migrate
```

10 - Start PHP Artisan Built-in web server:

```bash
php artisan serve
```

or composer path:

```bash
composer install
```

##Copyright and license

Code and documentation copyright (c) 2015, PHP Community Maringa.