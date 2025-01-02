<?php

use App\Models\Phone;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    /*User::create([
        'name' => 'Alian Torne',
        'email' => 'atfree1988@gmail.com',
        'password' => bcrypt('12345678')
    ]);
    return 'Usuario creado';
    Phone::create([
        'number' => '987654321',
        'user_id' => 1
    ]);
    //$user = User::find('1');
    $user = User::where('id',1)
                ->with('phone')
                ->first();*/
    $phone = Phone::find('1');
    return $phone->user;
});
