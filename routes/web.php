<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RepliesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






//protected routes

Route::middleware('auth')->group(function () {
    // profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

 // users routes 
    Route::get('/data', [ProfileController::class, 'displayUsers'])->name('data');
    Route::get("/users", [UserController::class,"index"])->name("users");
    Route::post("/users", [UserController::class,"create"])->name("create-user");
    Route::put("/users/{id}", [UserController::class,"update"])->name("update-user");
    Route::delete("/users/{id}", [UserController::class,"destroy"])->name("destroy-user");

    //comments
    Route::get('post', [PostController::class,'create'])->name('post.create');
    Route::post('post', [PostController::class,'store'])->name('post.store');
    Route::get('/posts', [PostController::class,'index'])->name('posts');
    Route::get('/article/{post:slug}', [PostController::class,'show'])->name('post.show');
    Route::post('/comment/store', [RepliesController::class, 'store'])->name('comment.add');
    Route::post('/reply/store', [RepliesController::class,'replyStore'])->name('reply.add');

    //admin views
    Route::get('/base', function () {return view('admin.base'); });
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/calendar', function () { return view('admin.calendar'); })->name('calendar');
    Route::get('/user-profile', function () { return view('admin.user_profile'); })->name('user-profile');

    //video routes
    Route::get('/add_video', function () { return view('admin.video'); })->name('add_video');
    Route::post('/videos/upload', 'App\Http\Controllers\VideoController@upload')->name('videos.upload');
    Route::get('/video/video', 'App\Http\Controllers\VideoController@index')->name('video');

    
    
});

//non protected routes
Route::middleware("guest")->get("/", function () {
    Route::get('/login', function () { return view('login'); })->name('login');
    Route::get('/register1', function () { return view('register'); })->name('register');
    return view('welcome');
});



require __DIR__.'/auth.php';
