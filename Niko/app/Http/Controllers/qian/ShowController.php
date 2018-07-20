<?php

namespace App\Http\Controllers\qian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Yulu;
use App\Models\Xinshang;

class ShowController extends Controller
{

    /*
    语录
    */
    public function getYulu ()
    {
        // echo '语录';
        $data = Yulu::all();
        // dump($data);
        return view('qian.show.yulu',['data'=>$data]);
    }

    /*
    欣赏
    */
    public function getXin()
    {
        // echo '欣赏';
        $data = Xinshang::paginate(15);
        // dump($data);
        return view('qian.show.xinshang',['data'=>$data]);
    }

    /*
    欣赏详情
    */
    public function getXinxiang($id)
    {
        // echo $id ;
        $data = Xinshang::find($id);
        return view('qian.show.xinxiang',['data'=>$data]);
    }
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
