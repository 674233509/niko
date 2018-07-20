<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biao extends Model
{
    //
    public $table = 'sn_biaos';
    
    // 根据关系表找到标签里所有的文章
    public function biaowen()
    {
        return $this->belongsToMany('App\Models\Wen','sn_wens-biaoqian','bid','wid');
    }

}
