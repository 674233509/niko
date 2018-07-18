<?php

namespace App\Http\Controllers\qian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Yin;
use App\Models\Dianjiliang;

class YinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        // $data = Yin::all();
        // // dd($data);
        $sn = Dianjiliang::where('name','=','yinyue')->first();
        // // dd($sn);
        $sn->xihuan ++;
        $sn->save();
        echo  $sn->xihuan;
        // return 'sd';
        // return view('qian.yin.index',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
         $data = Yin::all();
        // dd($data);
         $res = Dianjiliang::where('name','=','yinyue')->first();
         // dd($res->dianjiliang);
         $res->dianjiliang ++;
         // $res->xihuan ++;
         // dd($res->xihuan);
         $res -> save();

        return view('qian.yin.create',['data'=>$data,'res'=>$res]);
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
