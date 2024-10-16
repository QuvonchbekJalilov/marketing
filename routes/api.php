<?php

use App\Http\Controllers\admin\ProviderController as AdminProviderController;
use App\Http\Controllers\admin\MarketerController as AdminMarketerController;
use App\Http\Controllers\admin\ClientController as AdminClientController;
use App\Http\Controllers\admin\LanguageController as AdminLanguageController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\admin\ServiceController as AdminServiceController;
use App\Http\Controllers\admin\SkillController as AdminSkillController;
use App\Http\Controllers\admin\SectorController as AdminSectorController;

use App\Http\Controllers\provider\PortfoliosController as PortfoliosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/provider/filter', [AdminProviderController::class, 'filter']);
Route::get('/marketer/filter', [AdminMarketerController::class, 'filter']);
Route::get('/client/filter',     [AdminClientController::class, 'filter']);
Route::get('/language/filter', [AdminLanguageController::class, 'filter']);
Route::get('/service-category/filter', [AdminCategoryController::class, 'filter']);
Route::get('/service/filter', [AdminServiceController::class, 'filter']);
Route::get('/skill/filter', [AdminSkillController::class, 'filter']);
Route::get('/sector/filter', [AdminSectorController::class, 'filter']);

Route::get('/services/{id}/skills', [PortfoliosController::class, 'getSkillsByService'])->name('services.skills');

