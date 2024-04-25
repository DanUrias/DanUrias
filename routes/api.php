<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerfilController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


#Ruta POST
Route::post('/perfil/store', array(

    PerfilController::class,
    'store'
))->name('perfil.store');

# http://localhost:8000/api/perfil/store



# Ruta Get

# Listar todos los clientes
Route::get('/perfil/index', array(
    PerfilController::class,
    'index'
))->name('perfil.index');

# http://localhost:8000/api/perfil/index


# Ruta Get

# Listar un cliente en especifico

Route::get('perfil/show/{id}', array( 
    PerfilController::class,
    'show'
))->name('perfil.show');

#http://localhost:8000/api/perfil/show/2

#Ruta PUT

Route::put('/perfil/update/{id}', array(
    PerfilController::class,
    'update'
))->name('perfil.update');

#http://localhost:8000/api/perfil/update/2





