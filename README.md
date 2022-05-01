## Project Description
This project is a take-home interview for a fullstack laravel developer role at [BingHR.io](https:://binghr.io/). The project is an implementation of a given design which was expected to be replicated. 

## Story
- Every bit of the design must be replicated
- The entry point must be the user's list, where users menu is highlighted by default
- A user should be able to add users with their permissions
- A user should be able to delete users records
- A user should be able to update users records
- It should show the lists of users in the database in a tabulated form with a search bar at the top right of the table

## Features Implemented
- Replica of the given sample design bumper to bumper
- A collapsible Menu
- Modals for Create, Update and Delete operations
- Complete CRUD on user resource
- A tabulated users records with a search bar

## Stacks

- [Laravel 8](https://laravel.com/)
- [Tailwindcss](https://tailwindcss.com/)
- [JavaScript/JQuery](https://jquery.com/)

## Installation

1. Clone this repository
2. run `composer install`
3. run `cp .env.example .env` and change database credentials accordingly
4. run `php artisan migrate --seed`
5. run `npm install`
6. run `npm run dev`
8. run `php artisan serve` to start your web app

## Plugins

Below are the plugins used.

| Plugin |
| ------ |
| Laravel Sanctum |
| Spatie Permissions |
| Eloquent Filter |