<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Xiangce extends Model
{
    //
    public $table = 'sn_xiangces';
    // 一对多
    public function cepian()
    {
        return $this->hasMany('App\Models\Photo','xid');
    }

}
