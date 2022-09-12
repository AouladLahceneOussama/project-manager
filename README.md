<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Project Manager
This application is made using Laravel 9 and brezze startkit and livewire, the main idea of that project is to maintain users and affect them to a specific project, then they deal with adding categories (1 to n) and the billings (1 to n), also upload the archives and the media files for such project.

# Requirements
- php >= 8
- Laravel = 9
 
# Instruction to install the application
```
git clone ...
cd project-manager
composer install
npm install
php artisan migrate
```
> Don't forget to copy the env file and enter a valid database name before migration.  
> After creating .env file please run this command to generate an application key 
```
php artisan key:generate
```

# usage
```
php artisan serve
npm run dev
```  
> Register to the application with 2 account, one with the partner role and the other with the user role, to test all the functionalities.

# Functionalities
- Crud the users.
- Crud the projects.
- Affect the user that is considered as a manager to a project.
- The manager or the admin CRUD the subcategories and the billigns foreach project.
- The manager Add/Remove the files and the archives for each project.
- The admin Add/Remove remarks on the billigs added by the managers.
