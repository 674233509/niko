<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //设置操作的表名
    public $table = 'sn_abouts';

    //属于
    public function peizhi()
	{
	    return $this->belongsTo('App\Models\Peizhi','id');
    }
}
