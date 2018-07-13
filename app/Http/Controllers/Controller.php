<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function counts($user) {
        $count_memos = $user->memos()->count();
        $count_friends = $user->friends()->count();
        $count_zuttomoings = $user->zuttomoings()->count();
        $count_futurings = $user->futurings()->count();

        return [
            'count_memos' => $count_memos,
            'count_friends' => $count_friends,
            'count_zuttomoings' => $count_zuttomoings,
            'count_futurings' => $count_futurings,
        ];
    }
}
