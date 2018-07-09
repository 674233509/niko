<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //指定查询的表
    public $table = 'sn_users';
    //不验证事件字段
    //public $timestamps = false;
}
