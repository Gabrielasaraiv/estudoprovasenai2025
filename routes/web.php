<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Produtos\Produto\Create as ProdutoCreate;
use App\Livewire\Produtos\Produto\Index;
use App\Livewire\Usuario\Dashboard;
use App\Livewire\Usuario\Usuario\Create;
use Illuminate\Support\Facades\Route;

Route::get('/user/create', Create::class)->name('user.create');

Route::get('/login', Login::class)->name('login');
Route::get('/logout', Logout::class)->name('logout');
Route::get('/dashboard', Dashboard::class)->middleware('auth')->name('dashboard');

Route::get('/produto/create', ProdutoCreate::class)->middleware('auth')->name('produto.create');
Route::get('/produtos/list', Index::class)->middleware('auth')->name('produtos.list');