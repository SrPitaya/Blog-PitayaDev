<?php

use App\Http\Controllers\PostController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;




Route::view('/','welcome')->name('welcome'); #Ruta de la página de inicio
Route::view('contact','contact')->name('contact');#Ruta de la página de contacto
Route::view('about','about')->name('about'); #Ruta de la página de acerca de


// Route::get('blog',[PostController::class, 'index'])->name('posts.index'); #Ruta de la página de blog que llama al método index del controlador PostController
// Route::get('blog/create',[PostController::class, 'create'])->name('posts.create'); #Ruta de la página de blog que llama al método create del controlador PostController
// Route::get('blog/{post}',[PostController::class, 'show']) ->name('posts.show'); #Ruta de la página de blog que llama al método show del controlador PostController
// Route::post('blog',[PostController::class, 'store'])->name('posts.store'); #Ruta de la página de blog que llama al método store del controlador PostController
// Route::get('blog/{post}/edit',[PostController::class, 'edit'])->name('posts.edit'); #Ruta de la página de blog que llama al método edit del controlador PostController
// Route::patch('blog/{post}',[PostController::class, 'update'])->name('posts.update'); #Ruta de la página de blog que llama al método update del controlador PostController
// Route::delete('blog/{post}',[PostController::class, 'destroy'])->name('posts.destroy'); #Ruta de la página de blog que llama al método destroy del controlador PostController

Route::resource('blog', PostController::class,[
    'names'=>'posts',
    'parameters' => ['blog' => 'post']
]); #Ruta de la página de blog que llama a todos los métodos del controlador PostController

Route::view('dashboard', 'dashboard')
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware(['auth', 'password.confirm'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
