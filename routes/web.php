<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesCon;

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

Route:: get('/', [PagesCon::class, 'index'])->name('home');
Route:: get('/show', [PagesCon::class, 'show'])->name('show');
Route:: get('/add', [PagesCon::class, 'add'])->name('add');
Route:: post('/add', [PagesCon::class, 'addsub'])->name('addsub');
Route:: get('/edit/{id}', [PagesCon::class, 'edit'])->name('edit');
Route:: post('/edit/{id?}', [PagesCon::class, 'editsub'])->name('editsub');
Route:: get('/del/{id}', [PagesCon::class, 'del'])->name('del');
Route:: get('/search', [PagesCon::class, 'search'])->name('search');
Route:: post('/search', [PagesCon::class, 'searchsub'])->name('searchsub');
Route:: get('/editdel/{id}', [PagesCon::class, 'editdel'])->name('editdel');
Route:: post('/editdel/{id?}', [PagesCon::class, 'editdelsub'])->name('editdelsub');
