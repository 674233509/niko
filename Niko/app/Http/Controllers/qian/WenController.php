<?php

namespace App\Http\Controllers\qian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Wen;
use App\Models\Biao;
use App\Models\Guanwenbiao;

class WenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        // echo 'qian wen ';
        $data = Wen::paginate(15);
        return view('qian.wen.index',['data'=>$data]);
    }

    public function getXiang($id)
    {
        // echo '详情'.$id;
        $data = Wen::find($id);
        $data->dianji ++;
        $data ->save();
        // dump($data->dianji);
        return view('qian.wen.xiang',['data'=>$data]);

    }


}
