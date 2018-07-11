<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Ping;
use App\Models\User;
use App\Models\Wen;
use DB;
class PingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        //
         // 获取搜索关键字
        $search = $request -> input('search','');
       // // 接收数据
        // $data = DB::table('sn_pings as p')
        //    ->where('content','like','%'.$search.'%')
       //  ->select('p.id','p.wid','p.content','p.uid','p.ptime','p.pip')
       //  ->paginate(3);
         $data = Ping::where('content','like','%'.$search.'%')->paginate(10);
         // foreach($data as $k => $v){
         // dump($v->zxczxc['id']);
         //    // dump($data);
         // }

         //dump($data);
        return view('hou.ping.index',['title'=>'评论管理','data'=>$data,'search'=>$search]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        
        return view('hou.ping.create',['title'=>'添加评论']);
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
          //开启事物
        DB::beginTransaction();
        //接收提交的数据
        $data = $request -> except('_token');
        //dd($data);
        //接受ip
        $ip = $request -> ip();
       
       $res = DB::table('sn_pings')->insertGetId(['content'=>$data['content'],'ptime'=>date('Y-m-d H:i:s',time()),'pip'=>$ip]);
       //$res2 = DB::table('sn_wens')->insert(['wid'=>$wid]);
      
       // dump();
        if($res){
            DB::commit();
           return redirect('/admin/sn/ping/index')->with('success','添加成功');
       }else{
            DB::rollBack();
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
    public function getEdit($id)
    {
        //获取修改模板
        //echo '23232';
        //接受修改的数据
        $ping = Ping::find($id);
        
        return view('hou.ping.edit',['title'=>'修改评论','ping'=>$ping]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $id)
    {
        //获取提交的数据
        $data = $request -> except('_token');
        //dump($data);
        //从数据库中查询要修改的数据
        $ping = Ping::find($id);
        //dump($ping);
        //数据库的值        被修改的值
        $ping -> content = $data['content'];
         // dump($ping);
        $ping -> save();
        if($ping){
            return redirect('/admin/sn/ping/index')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getDestroy($id)
    {
        //
           //开启事物
    //    DB::beginTransaction();
    //    $res = DB::table('sn_pings')->where('id','=',$id)->delete();
    //    if($res){
    //         DB::commit();
    //        return redirect('/admin/sn/ping/index')->with('success','删除成功');
    //    }else{
    //         DB::rollBack();
    //         return back()->with('error','删除失败');
    //    }
        $ping = Ping::find($id); 
        if( $ping -> delete()){
            return redirect('/admin/sn/ping/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
       
    }
}
