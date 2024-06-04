<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{
    // public function showFriends()
    // {
    //     return view('users.friendList');
    // }

    // public function authorization()
    // {
    //     if(!auth()->check()){
    //         return redirect('login');
    //     }

    //     $user = auth()->user();
    //     // jika status itu accepted dan data yang diambil berdasarkan user id
    //     // (ambil semua friend_id yang connected ke user_id dari session yang mana statusnya adalah accepted)
    //     $friends = $user->Friends()->wherePivot(['status', 'accepted'])->get();

    //     return view('users.friendList', compact('friends'));

    // }

    public function ShowFriendList()
    {
        if(!auth()->check()){
            return redirect('login');
        }

        $user = auth()->user();
        $FriendsFromUserId = $user->UserColumn()->wherePivot('status', 'accepted')->get();
        $FriendsFromFriendId = $user->FriendColumn()->wherePivot('status', 'accepted')->get();
        $AllFriends = $FriendsFromUserId->merge($FriendsFromFriendId);
        // dd($AllFriends);
        return view('users.friendList', compact('AllFriends'));
    }

    public function showFriendRequests()
    {
        if(!auth()->check()){
            return redirect('login');
        }

        $user = auth()->user();
        $SentRequests = $user->UserColumn()->wherePivot('status', 'pending')->get();

        $ReceivedRequests = $user->FriendColumn()->wherePivot('status', 'pending')->get();

        $PendingRequests = $SentRequests->merge($ReceivedRequests);

        return view('users.friendRequest', compact('PendingRequests'));

    }

    public function acceptFriend($friendId)
    {
        $user = auth()->user();
        $user->FriendColumn()->updateExistingPivot($friendId,['status' => 'accepted']);
        return redirect()->route('friendrequests');
    }

    public function rejectFriend($friendId)
    {
        $user = auth()->user();
        \Log::info("Rejecting request: User {$user->id} -> Friend {$friendId}");
        $user->FriendColumn()->updateExistingPivot($friendId,['status' =>'rejected']);
        return redirect()->route('friendrequests');
    }

    public function cancelRequest($friendId)
    {
        $user = auth()->user();
        \Log::info("Cancelling request: User {$user->id} -> Friend {$friendId}");
        $user->UserColumn()->detach($friendId);
        return redirect()->route('friendrequests');

        // debugger

        // $user = auth()->user();
        // echo "Cancelling request from user_id: {$user->id} to friend_id: {$friendId}<br>";
        // $result = $user->UserColumn()->detach($friendId);
        // echo "Detach result: ";
        // var_dump($result);
        // exit; // Stop execution to see the output
        // return redirect()->route('friendrequests');

        // $user = auth()->user();
        // $pivotRow = DB::table('user_friend_lists')->where('id', $pivotId)->first();

        // if ($pivotRow && $pivotRow->user_id == $user->id) {
        //     user::table('user_friend_lists')->where('id', $pivotId)->delete();
        // }

        // return redirect()->route('friendrequests');
    }
}
