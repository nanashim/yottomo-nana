<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class UserFriends extends Model
{
    protected $fillable =  ['name', 'hometeam','codingteam', 'password', 'friend_id', 'future_id'
    ];
}