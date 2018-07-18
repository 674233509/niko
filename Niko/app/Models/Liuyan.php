<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Liuyan extends Model
{
    //
    public $table = 'sn_liuyans';


    // 留言的人
 	public function liuren()
    {
        return $this->belongsTo('App\Models\User','uid');
    }




}
