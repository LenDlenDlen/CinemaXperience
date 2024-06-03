<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function showFriends()
    {
        return view('users.friendList');
    }
}
