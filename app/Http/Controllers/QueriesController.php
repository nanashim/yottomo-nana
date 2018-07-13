<?php


namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\UserFriend;
use App\User;


class QueriesController extends Controller
{
    public function getIndex()
    {
        // user_id=141を取得して、その中のfriend_id一覧を持ってきている
        $data = UserFriend::where('user_id', 141)->value('friend_id');
        // $user_id = $data->user_id;
        // $data['friend_id']=DB::table('user_friend')->get();
        
        //friend_idの人がuser_idである一覧を取得、そのuser_idを持ってきている
        $data2 = UserFriend::where('user_id', $data)->value('user_id');
        //data2の人のfriend_id一覧を持ってきていて、そのfriend_idを取得している
        $data3 = UserFriend::where('user_id', $data2)->value('friend_id');
        
        $update = ['future_id' => $data ];
        
        if ($data3 = 141){
            UserFriend::update($update);
            return true;
        } else{
            return false;
        }
       
        return View::make('users.futures', $data);
    }
}
