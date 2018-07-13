<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Memo;
use DB;

class UsersController extends Controller
{
    public function index()
    {
        $table = DB::table('user_friend');
        $users = User::paginate(20);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        $user = User::find($id);
        $memos = $user->memos()->orderBy('created_at', 'desc')->paginate(10);
        $futurings = $user->futurings()->paginate(20);
        
        $data = [
            'user' => $user,
            'memos' => $memos,
            'users' => $futurings,
        ];
        
        $data += $this->counts($user);
        
        return view('users.show', $data);
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        // $memos = $user->memos()->orderBy('created_at', 'desc')->paginate(10);
        
        $data = [
            'user' => $user,
        //     'memos' => $memos,
        ];
        
        $data += $this->counts($user);
        
        return view('users.edit', $data);
        
        
    }
    
    public function friends($id)
    {
        $user = User::find($id);
        $friends = $user->friends()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $friends,
        ];

        $data += $this->counts($user);

        return view('users.friends', $data);
    }
    
    
    // zuttomo
    public function zuttomoings($id)
    {
        $user = User::find($id);
        $zuttomoings = $user->zuttomoings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $zuttomoings,
        ];

        $data += $this->counts($user);

        return view('users.zuttomoings', $data);
    }
    
    

    public function futurings(Request $request, $id)
        {
            $user = User::find($id);
            //futurefuturingかわからない
            $futurings = $user->futurings()->paginate(20);
    
            $data = [
                'user' => $user,
                'users' => $futurings,
            ];
    
            $data += $this->counts($user);
        
            return view('users.futures', $data);
        }
        
    
    
}