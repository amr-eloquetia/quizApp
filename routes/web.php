<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoriesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PrizesController;
use App\Http\Controllers\PrizesWonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use Database\Seeders\ProductSeeder;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('quiz/{id}', [QuizController::class, 'endQuiz'])->name('endQuiz');
Route::get('/shop', [PagesController::class, 'shop'])->name('shop');



//Authentification routes
Route::group(['prefix' => '/login', 'middleware' => 'guest'], function () {
    // Route::get('/', [PagesController::class, 'login'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('login');
});
Route::group(['prefix' => '/register', 'middleware' => 'guest'], function () {
    // Route::get('/', [PagesController::class, 'register'])->name('register');
    Route::post('/', [RegisterController::class, 'register'])->name('register');
});
Auth::routes();
Route::get('/login',[PagesController::class, 'loginPage'])->name('loginPage');
Route::post('/login',[LoginController::class, 'login'])->name('login');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::get('/register',[PagesController::class, 'registerPage'])->name('registerPage');
Route::post('/register',[RegisterController::class, 'register'])->name('register');

Route::get('admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard')->middleware('is_admin');

// Admin routes
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return redirect('/admin/dashboard');
    });
    //main admin pages
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('admin.users');
    Route::get('/dashboard/prizes', [DashboardController::class, 'prizes'])->name('admin.prizes');
    Route::get('/dashboard/categories', [DashboardController::class, 'categories'])->name('admin.categories');
    Route::get('/dashboard/prizesWon', [DashboardController::class, 'prizesWon'])->name('admin.prizesWon');
    Route::get('/dashboard/quizQuestions', [DashboardController::class, 'quizQuestions'])->name('admin.quizQuestions');

    // get edit and creat pages
    Route::get('/dashboard/editusers/{id}', [DashboardController::class, 'edituser'])->name('edit.user');
    Route::get('/dashboard/editprize/{id}', [DashboardController::class, 'editPrize'])->name('edit.prize');
    Route::get('/dashboard/quizQuestions/{id}', [DashboardController::class, 'editQuizQuestion'])->name('admin.editQuizQuestion');
    Route::get('/dashboard/createQuestion', [DashboardController::class, 'createQuestion'])->name('admin.createQuestion');
    Route::get('/dashboard/categorie/{id}', [DashboardController::class, 'editCategory'])->name('admin.editCategory');
    Route::get('/dashboard/createCategory', [DashboardController::class, 'createCategory'])->name('admin.createCategory');

    // post routes

    Route::post('/dashboard/deleteUser/{id}', [UserController::class, 'destroy'])->name('delete.user');
    Route::put('/dashboard/editusers/{id}', [UserController::class, 'edit'])->name('admin.editUser');
    Route::put('/dashboard/editPrize/{id}', [PrizesController::class, 'edit'])->name('admin.editPrize');
    Route::post('/dashboard/deletePrize/{id}', [PrizesController::class, 'destroy'])->name('delete.prize');
    Route::put('/dashboard/quizQuestions/{id}', [QuestionsController::class, 'edit'])->name('editQuizQuestion');
    Route::post('/dashboard/deleteQuizQuestion/{id}', [QuestionsController::class, 'destroy'])->name('delete.quizQuestion');
    Route::post('/dashboard/createQuestion', [QuestionsController::class, 'create'])->name('createQuestion.post');
    Route::post('/dashboard/categories', [CategoriesController::class, 'create'])->name('createCategory.post');
    Route::put('/dashboard/category/{id}', [CategoriesController::class, 'edit'])->name('admin.editCategory');
    Route::post('/dashboard/category/{id}', [CategoriesController::class, 'destroy'])->name('delete.category');

});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/quiz/{id}', [PagesController::class, 'quiz'])->name('quiz');
    Route::get('/myAccount', [PagesController::class, 'myAccount'])->name('myAccount');
    Route::put('/myAccount', [UserController::class, 'editUser'])->name('editUser');
    Route::post('/myAccount', [PrizesWonController::class, 'create'])->name('createPrize');
    Route::get('/bronze-wheel', [PagesController::class, 'bronzeWheel'])->name('bronzeWheel');
    Route::get('/silver-wheel', [PagesController::class, 'silverWheel'])->name('silverWheel');
    Route::get('/golden-wheel', [PagesController::class, 'goldenWheel'])->name('goldenWheel');
    Route::get('/spin-wheel',[PagesController::class, 'spinWheel'])->name('spinWheel');
    Route::get('/buy-tokens', [PagesController::class, 'buyTokens'])->name('buyTokens.get');
    Route::post('/buy-tokens', [UserController::class, 'buyTokens'])->name('buyTokens.post');
    Route::post('/buy-product/{id}', [InventoriesController::class, 'create'])->name('buy.product');
    Route::get('/myInventory', [PagesController::class, 'myInventory'])->name('myInventory');
 });