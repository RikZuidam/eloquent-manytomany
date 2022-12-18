<?php

use Illuminate\Support\Facades\Route;


use App\Models\User;
use App\Models\Friend;

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


Route::get('/', function () {
    $datas = Friend::where([
        ['sender_id', 1],
        ['state', 1]
    ])->orWhere([
        ['reciever_id', 1],
        ['state', 1]
    ])->get();

    $friendsinfo = [];

    foreach ($datas as $data) {
        if ($data->sender_id != 1) {
            $friendsinfo[] = User::where('id', $data->sender_id)->get();
        } elseif ($data->reciever_id != 1) {
            $friendsinfo[] = User::where('id', $data->reciever_id)->get();
        }
    }

    return view('friendlist')->with([
        'friends' => $friendsinfo
    ]);
});