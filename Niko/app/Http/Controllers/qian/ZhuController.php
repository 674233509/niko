<?php

namespace App\Http\Controllers\qian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Userxiang;

class ZhuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreate(Request $request)
    {
        //
        // echo 'asd';
        $data = $request -> except('_token');
        // dump($data);
        $user = new User;
        $user -> username = $data['uaername'];
        $user -> password = $data['pass'];
        $res = $user -> save();
        $idd = $user -> id;
        // dump($idd);
        $xiang = new Userxiang;
        $xiang -> uid = $idd;
        $xiang -> tel = $data['tel'];
        $rea =  $xiang -> save() ;
        if ($res && $rea) {
            return redirect('/sn/login')->with('zhu','注册成功');
        } else {
            return back()->with('zhu','注册失败');
        }




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
