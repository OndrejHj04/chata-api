<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Controllers\CsrfCookieController;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/roles', function () {
    return Role::all();
});

Route::post('/users', [App\Http\Controllers\Api\UserController::class, 'store']);

// Move auth routes to web middleware for session handling
Route::group(['middleware' => ['web']], function () {
    Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('login');
    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::get('/auth/user', [App\Http\Controllers\Api\AuthController::class, 'user'])->middleware('auth:sanctum');


    Route::get('/sanctum/csrf-cookie', [CsrfCookieController::class, 'show'])->name('csrf');

    Route::get('/auth/redirect', function () {
        return response()->json([
            'url' => Socialite::driver('google')
                         ->stateless()
                         ->redirect()
                         ->getTargetUrl(),
        ]);
    });

    Route::get('/auth/google/callback', function () {
        $socialiteUser = Socialite::driver('google')->stateless()->user();
        
        $user = User::where('email', $socialiteUser->getEmail())->first();
        
        if ($user) {
            Auth::login($user);
            
            return response()->json([
                'user' => $user,
            ]);
        }
        
        return response()->json([
            'error' => 'User not found',
            'message' => 'No user with this email exists in our database'
        ], 401);
    });
});