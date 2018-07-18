<?php

namespace App\Http\Controllers\qian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ping;
class PingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $data = Ping::all();
        //dump($data);
        return view('qian.ping.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        return view('qian.ping.create');
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        //
        //echo 'sdada';
        //接收提交的数据
        $data = $request -> except('_token');
        //接受ip
        $ip = $request -> ip();
        //dump($data);
        $ping = new Ping;
        //dump($ping);
        // exit;
        $ping -> content = $data['content'];
        $ping -> ptime = date('Y-m-d H:i:s',time());
        $ping -> pip = $ip;
        // dd($ping);
        // dump($data);
        $ping -> save();
        if($ping){
            return redirect('/qian/sn/ping/index')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
