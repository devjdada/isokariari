<?php

use App\Livewire\About\AboutPage;
use App\Livewire\About\ManageAbout;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Blog\BlogPage;
use App\Livewire\Blog\EditBlog;
use App\Livewire\Blog\ManageBlog;
use App\Livewire\Blog\NewBlog;
use App\Livewire\Client\ManageClient;
use App\Livewire\Contact\ContactPage;
use App\Livewire\Home\HomePage;
use App\Livewire\Project\EditProject;
use App\Livewire\Project\ManageProject;
use App\Livewire\Project\NewProject;
use App\Livewire\Project\ProjectDetail;

use App\Livewire\Project\ProjectPage;
use App\Livewire\Service\EditService;
use App\Livewire\Service\ManageService;
use App\Livewire\Service\NewService;
use App\Livewire\Service\ServiceDetail;
use App\Livewire\Service\ServicePage;
use App\Livewire\Setting\HeroSlider;
use App\Livewire\Testimony\ManageTestimony;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');
Route::get('about', AboutPage::class)->name('about');
Route::get('contact', ContactPage::class)->name('contact');
Route::get('services', ServicePage::class)->name('services');
Route::get('service/{slug}', ServiceDetail::class)->name('service');
Route::get('blogs', BlogPage::class)->name('blogs');
Route::get('blog/{slug}', ServiceDetail::class)->name('blog');
Route::get('projects', ProjectPage::class)->name('projects');
Route::get('project/{slug}', ProjectDetail::class)->name('project');




Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/edit-project/{slug}', EditProject::class)->name('edit-project');
    Route::get('/new-project', NewProject::class)->name('new-project');
    Route::get('/manage-projects', ManageProject::class)->name('manage-projects');
    Route::get('/edit-service/{slug}', EditService::class)->name('edit-service');
    Route::get('/new-service', NewService::class)->name('new-service');
    Route::get('/manage-services', ManageService::class)->name('manage-services');
    Route::get('/new-blog', NewBlog::class)->name('new-blog');
    Route::get('/manage-blogs', ManageBlog::class)->name('manage-blogs');
    Route::get('/edit-blog/{slug}', EditBlog::class)->name('edit-blog');
    Route::get('/manage-about', ManageAbout::class)->name('manage-about');
    Route::get('/manage-hero', HeroSlider::class)->name('manage-hero');
    Route::get('/manage-testimony', ManageTestimony::class)->name('manage-testimony');
    Route::get('/manage-client', ManageClient::class)->name('manage-client');
});

require __DIR__ . '/auth.php';


Route::middleware('guest')->group(function () {
    Route::get('register', Register::class)->name('register');
    Route::get('login', Login::class)->name('login');
});
