# POS System (Laravel)

A Laravel rebuild of the TFA1 POS application. It has four pages: Home, About, Customer Accounts, and User Accounts. The account pages use static PHP arrays as a temporary data source.

## Requirements
- PHP (version required by Laravel 13)
- Composer

## Setup
1. Clone the repository:
   git clone <your-repo-url>
   cd pos-laravel
2. Install dependencies:
   composer install
3. Create the environment file and app key:
   cp .env.example .env
   php artisan migrate --seed
4. Run the development server:
   php artisan serve
5. Open http://127.0.0.1:8000

## Routes
| URL | Controller | Description |
| --- | --- | --- |
| / | PageController@index | Landing page |
| /about | PageController@about | About page |
| /customers | CustomerController@index | Customer accounts (static array) |
| /users | UserController@index | User accounts (static array) |
