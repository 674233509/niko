<?php

namespace App\Http\Controllers\qian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Wen;
use App\Models\Biao;
use App\Models\Guanwenbiao;
use App\Models\Ping;


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
        // dd('$data');
        return view('qian.wen.index',['data'=>$data]);
    }

    public function getXiang($id)
    {
        // echo '详情'.$id;
        $data = Wen::find($id);
        $data->dianji ++;
        $data ->save();
        // dump($data->dianji);
        // $ping = $data->ping;
        // $ping = Ping::where('wid','=',$id)->get();
        
        // $a = array('1','2','3','7','5');
        // $asd = array_multisort($ping,'id',SORT_DESC,SORT_STRING);
        // krsort($ping);
        // print_r($fruits);
        
        /*foreach ($ping as $key => $value) {
            # code...
            dump($key);
        }
        dd($ping);*/
        return view('qian.wen.xiang',['data'=>$data]);

    }
    /*
    前台搜索
    */

    public function postSou (Request $request)
    {
        // echo '搜索';
        $sou = $request->except(['_token']);
        // dump($data['Search']);
        $data = Wen::where('title','like','%'.$sou['Search'].'%')->paginate(15);
        return view('qian.wen.index',['data'=>$data]);

    }

    /*
    根据标签搜索
    */

    public function getSou (Request $request , $id)
    {
        // echo $id ;
        // $data = Biao::find($id)->paginate(15);
        $biao = Biao::find($id);
        $data = $biao -> biaowen  ;
        // dump($data);
        return view('qian.wen.biaowen',['data'=>$data]);

    }



}
