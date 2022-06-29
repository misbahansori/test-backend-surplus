<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Test Backend Surplus

A test project for the Backend Surplus.

## Authors

- [@misbahansori](https://www.github.com/misbahansori)


## Features

- CRUD Categories
- CRUD Product
- CRUD Images

## Installation

1. Clone the repository.
```bash
  git clone https://github.com/misbahansori/test-backend-surplus.git
```

2. Change directory to the repository.
```
cd test-backend-surplus
```

3. Create database : `test_backend_surplus`
```
CREATE DATABASE test_backend_surplus
```

4. Copy the environtment variables.
```
cp .env.example .env
```

5. Install composer.
```
composer install
```

6. Generate application key.
```
php artisan key:generate
```

7. Run the migrations and seeder.
```
php artisan migrate --seed
```

## Testing

available endpoints :
| Method     | URI                 | Description      |
| ---------- | ------------------- | ---------------- |
| Generate   | api/categories      | Category index   |
| POST       | api/categories      | Category store   |
| DELETE     | api/categories/{id} | Category destroy |
| PUT\|PATCH | api/categories/{id} | Category update  |
| Generate   | api/categories/{id} | Category show    |
| POST       | api/images          | Image store      |
| Generate   | api/images          | Image index      |
| DELETE     | api/images/{id}     | Image destroy    |
| PUT\|PATCH | api/images/{id}     | Image update     |
| Generate   | api/images/{id}     | Image show       |
| Generate   | api/products        | Product index    |
| POST       | api/products        | Product store    |
| PUT\|PATCH | api/products/{id}   | Product update   |
| DELETE     | api/products/{id}   | Product destroy  |
| Generate   | api/products/{id}   | Product show     |



## Feedback

If you have any feedback, please reach out to us at misbah.ansori24@gmail.com

