<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //指定查询的表
    public $table = 'sn_users';
    //不验证事件字段
    //public $timestamps = false;
    // 配置一对多关系
    //和文章模型的关系
    public function wen()
    {
        return $this->hasOne('App\Models\Wen','uid');
    } 
    //和用户详情表的关系
    public function userxiang()
    {
        return $this->hasOne('App\Models\Userxiang','uid');
    }
    // 评论表的关系
    public function ping()
    {
        return $this->hasOne('App\Models\ping','uid');
    }
}
