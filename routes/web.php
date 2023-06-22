<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

//route::get('/tes{algo?}', function($algo = null){
  //  return "<h1>MACACO</h1> - {$algo}";
//});
//route::get('/teste-view{param?}', function($param = null){
   // return view('teste-view', [

      //  'valor_da_controler' => $param,
   // ]);
//});



Route::get('/produtos', [ProductsController::class, 'index'])->name('produtos');

Route::get('/produtos/add', [ProductsController::class, 'add'])->name('produtos.add');

Route::post('/produtos/add',[ProductsController::class, 'addSave'])->name('produtos.addSave');

Route::get('/produtos/{produto}', [ProductsController::class, 'view'])->name('produtos.view');

Route::get('/produtos/edit/{produto}',[ProductsController::class, 'edit'])->name('produtos.edit');

Route::post('/produtos', [ProductsController::class, 'index']);

Route::post('/produtos/edit/{produto}',[ProductsController::class, 'editSave'])->name('produtos.editSave');

Route::get('/produtos/delete/{produto}', [ProductsController::class, 'delete'])->name('produtos.delete');

Route::delete('/produtos/delete/{produto}', [ProductsController::class, 'deleteForReal'])->name('produtos.deleteForReal');
