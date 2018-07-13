<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserFriendController extends Controller
{
    // like store
    public function friend(Request $request, $id)
    {
        \Auth::user()->friend($id);
        return redirect()->back();
    }
    
    // like destroy
    public function unfriend($id)
    {
        \Auth::user()->unfriend($id);
        return redirect()->back();
    }
    
    // zuttomo store
    public function zuttomo(Request $request, $id)
    {
        \Auth::user()->zuttomo($id);
        return redirect()->back();
    }
    
    // zuttomo destroy
    public function unzuttomo($id)
    {
        \Auth::user()->unzuttomo($id);
        return redirect()->back();
    }
    
    public function future(Request $request, $id)
    {
        \Auth::user()->future($id);
        
        // データ更新
        // $user = User::find(8);
        // $user->future_id= 267;
        // $user->save;
        
        // $this->future = User::find(8);
        // $info_attributes = User::only(['future_id' => '267']);// ['title' => 'foo', 'content' => 'bar']
        // $this->future->update($info_attributes); // 真偽値が返ってくる

        // $user = User::firstOrNew(['id' => '8']);
        // $user['future_id'] = 267;
        // $user->save();
        
       
        // $user = User::find($id);
        // return view('users.futures', [
        //     'icos' => $tag->icos,
        // ]);
        
        // $user = User::find(8);
        // // $id = User::get('id'); 
        // $future_id = User::get('future_id');
        // User::where('id','=',8)->update(['future_id'=>267])->save();
        
        
        return redirect()->back();
    }
    
    // future destroy
    public function unfuture($id)
    {
        \Auth::user()->unfuture($id);
        return redirect()->back();
    }
    
    
    
}
