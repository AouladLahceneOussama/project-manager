<?php

use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    // Projects
    Route::post('/projects/delete/{id}', [ProjectController::class, 'destroy'])->name('projects.delete');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects/create', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/update/{id}', [ProjectController::class, 'edit'])->name('projects.update');
    Route::post('/projects/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/projects/pdf', [ProjectController::class, 'generatePdf'])->name('projects.pdf');
    
    // Archives
    Route::get('/projects/{id}/category/archives' ,[ArchivesController::class, 'index'])->name('archives');
    Route::post('/projects/{id}/category/archives/create', [ArchivesController::class, 'store'])->name('archives.create');
    Route::post('/projects/{id}/category/archives/delete/{archive_id}', [ArchivesController::class, 'destroy'])->name('archives.delete');

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile');

    // Category
    Route::get('/projects/{id}/category', [CategoryController::class, 'show'])->name('categories');
    Route::post('/projects/{id}/category/delete/{category_id}', [CategoryController::class, 'destroy'])->name('category.delete');
    Route::get('/projects/{id}/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/projects/{id}/category/{category_id}', [CategoryController::class, 'categoryDetail'])->name('categories.detail');
    Route::post('/projects/{id}/category/create', [CategoryController::class, 'store'])->name('category.create');
    Route::get('/projects/{id}/category/{category_id}/update', [CategoryController::class, 'update'])->name('category.update');
    // Route::post('/projects/{id}/category/{category_id}/update', [CategoryController::class, 'save'])->name('category.update');

    // Users
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/create', [UserController::class, 'store'])->name('users.create');
    Route::get('/users/update/{id}', [UserController::class, 'edit'])->name('users.update');
    Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::post('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.delete');
});


require __DIR__ . '/auth.php';
