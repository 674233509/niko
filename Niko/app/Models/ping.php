<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ping extends Model
{
    //设置操作的表名
    public $table = 'sn_pings';
     //一对一
	public function qweqwe()
	{
	    return $this->hasOne('App\Models\User','id');
	}

}
