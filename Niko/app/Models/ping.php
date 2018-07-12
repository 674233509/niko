<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ping extends Model
{
    //
    //设置操作的表名
    public $table = 'sn_pings';
   
    
	
	//属于
	public function qweqwe()
	{
	    return $this->belongsTo('App\Models\User','uid');
    }
}
