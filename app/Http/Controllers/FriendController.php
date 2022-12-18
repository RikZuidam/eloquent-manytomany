<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Friend;

class FriendController extends Controller
{
    public function index()
    {
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
    }
}
