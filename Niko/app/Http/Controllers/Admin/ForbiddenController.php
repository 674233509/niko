<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Models\User;
class ForbiddenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        // 获取搜索关键字
        $search = $request -> input('search','');
        //接收数据
        $data = DB::table('sn_users as u')
        ->where('username','like','%'.$search.'%')
        ->join('sn_userxiangs as ux','u.id','=','ux.uid')
        ->select('u.id','u.username','u.qx','ux.mail','ux.zip','ux.rtime','ux.tel','ux.sex')
        ->paginate(3);
 
        //用户管理页面显示
        return view('admin.houtai.forbidden.forbidden',['title'=>'用户禁用管理','data'=>$data,'search'=>$search]);
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
    public function getStore(Request $request,$id)
    {
       
       DB::table('sn_users')->where('id','=',$id)->update(['forbidden'=>'y']);
         return redirect('/admin/houtai/forbidden/index')->with('success','禁用成功');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShow($id)
    {
       
        DB::table('sn_users')->where('id','=',$id)->update(['forbidden'=>'n']);
         return redirect('/admin/houtai/forbidden/index')->with('victory','用户已恢复');
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
