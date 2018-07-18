<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Wen extends Model
{
    //
    public $table = 'sn_wens';
    use SoftDeletes;
    // 多对多
    public function wenbiao()
	    {
	        return $this->belongsToMany('App\Models\Biao','sn_wens-biaoqian','wid','bid');
	    }
	// 一对多
    public function biao()
    {
    	return $this->hasMany('App\Models\Guanwenbiao','wid');
    }

    // 文章的评论
    public function ping()
    {
        return $this->hasMany('App\Models\Ping','wid');
    }    

}
