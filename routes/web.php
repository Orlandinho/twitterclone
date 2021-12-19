<?php

use App\Http\Controllers\ExplorerController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;
use function Sodium\crypto_box_keypair_from_secretkey_and_publickey;

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

Route::middleware('auth')->group(function(){

    Route::get('/', [TweetController::class, 'index'])->name('home');

    Route::post('/tweets', [TweetController::class, 'store']);

    Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profile');

    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store'])->name('follow');

    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}', [ProfilesController::class, 'update'])->middleware('can:edit,user');

    Route::get('/explore', [ExplorerController::class, 'index']);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
