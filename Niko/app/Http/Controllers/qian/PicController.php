<?php

namespace App\Http\Controllers\qian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Xiangce;
class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     *展示相册
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        $data = Xiangce::all();
        // dd($data);
        return view('qian.xiangce.index',['data'=>$data]);
    }


    /*
    显示相册里的相片
    */
    public function getXiang($id)
    {
        // echo $id;
        $data = Xiangce::find($id);
        // dd($xiangce->cepian());
        // $data = $xinagce->cepian();
        return view('qian.xiangce.photo',['data'=>$data]);


    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
