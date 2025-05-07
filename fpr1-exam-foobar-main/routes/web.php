<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BarController;
use App\Models\Article;

Route::get('/', function () {
    $latestArticles = Article::orderBy('published_at', 'desc')->take(3)->get();
    return view('welcome', compact('latestArticles'));
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('articles', ArticleController::class);
Route::resource('bars', BarController::class);

require __DIR__.'/auth.php';
