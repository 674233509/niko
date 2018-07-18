<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Biao;
use App\Models\Wen;
use App\Models\Guanwenbiao;
use DB;
class WenController extends Controller
{
    /**
     * Display a listing of the resource.
     *后台文章管理器
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        //
        // echo 'index';
        $search = $request -> input('search','');
         $data = Wen::where('title','like','%'.$search.'%')->paginate(8);

        // $data = Wen::paginate(8);
        // dump($data);
        // dump($data['0']['bid']);
        // $a = $data['0']['bid'];
        // $s = explode(',',$a);
        // $biao = Biao::find($s);
        // dump($biao);
        return view('hou.wen.show',['data'=>$data,'search'=>$search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        // echo 'crea...wen';
        $biao = Biao::all();
        return view('hou.wen.create',['biao'=>$biao]);
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
        // echo 'asd';
        
        $data = $request->except(['_token']);
        // dump($data);
        $biao = implode(',',$data['biao']);
        // dump(implode(' ',$data['biao']));
         
        // echo $data['biao'];
        $wen = new Wen;
        $wen -> title = $data['title'];
        $wen -> content = $data['content'];
        
        // dd($biao);
        $wen -> bid = $biao;
        // dump($wen);
        if($request -> hasFile('pic')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            $res = $profile -> move('./uploads/wen/'.$dirname,$name);
            // dump($res);
            $wename = '/uploads/wen/'.$dirname.'/'.$name;
            $wen -> pic = $wename;
       }
       // $iddd = DB::table('sn_wens')->insertGetId(['title'=>$data['title'],
       //      'content'=>$data['content'],
       //      'pic'=>$wename

       //  ]);
       // dump($iddd);
        $res = $wen ->save();
        $iddd = $wen -> id;
        foreach ($data['biao'] as $k => $v) {
            // dump($v);
            $guan = new Guanwenbiao;
            $guan -> wid = $iddd;
            $guan -> bid = $v;
            $guan -> save();
        }

        // dd($iddd);
        if ($res) {
            return redirect('/admin/sn/wen/index')->with('success','修改成功');
        } else {
            return back()->with('success','修改失败');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        //
        echo $id;
        $data = Wen::find($id);
        // dump($data);
        $biao = Biao::all();

        return view('hou.wen.edit',['data'=>$data,'biao'=>$biao]);
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
        //
         $data = $request->except(['_token']);
        // dump($data);
        $biao = implode(',',$data['biao']);
        // dump(implode(' ',$data['biao']));
        // dump($data['biao']);
        // echo $data['biao'];
        $wen = Wen::find($id);
        $wen -> title = $data['title'];
        $wen -> content = $data['content'];
        $wen -> bid = $biao;
        if($request -> hasFile('pic')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            $res = $profile -> move('./uploads/wen/'.$dirname,$name);
            // dump($res);
            $wename = '/uploads/wen/'.$dirname.'/'.$name;
            $wen -> pic = $wename;
       }
        $res = $wen ->save();
        $iddd = $wen -> id;
        // $guan = Guanwenbiao::find($id)->all();
        $guan = Wen::find($id);
        $guanxi = ($guan->biao);
        // dump($guanxi);
        // 删除文章和标签关系表的数据
        foreach ($guanxi as $k => $v) {
            // $v -> 
            // dump($v->id);
            Guanwenbiao::destroy($v->id);
        }
        foreach ($data['biao'] as $k => $v) {
            // dump($id);
            $guan = new Guanwenbiao;
            $guan -> wid = $id;
            $guan -> bid = $v;
            $guan -> save();
        }
        if ($res) {
            return redirect('/admin/sn/wen/index')->with('success','修改成功');
        } else {
            return back()->with('success','修改失败');
        }

    }
    // 删除
    public function getDelete($id,$str)
    {
        // echo $id;
        // $data = Wen::find($id);

        // $res = Wen::destroy($id);
        // if ($res) {
        //     return redirect('/admin/sn/wen/index')->with('success','删除成功');
        // } else {
        //     return back()->with('success','删除失败');
        // }
        // dump($data);

         if($str == 'delone'){
            $wen = Wen::find($id); 
            // dd($wen);
            if($wen -> delete()){
                return redirect('/admin/sn/wen/index')->with('success','删除至回收站');
            }
        }else{
            $res = Wen::find($id)->forceDelete();

                return redirect('/admin/sn/wen/index')->with('success','永久删除成功');
            
            // dump($res);

        }
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

    /*
    多个删除
    */
    public function postAlldelete(Request $request)
    {
        // echo 'asd';
         $data = $request->except(['_token']);
         // dump($data);
        $res = Wen::destroy($data['del']);

        if ($res) {
            return redirect('/admin/sn/wen/index')->with('success','删除成功');
        } else {
            return back()->with('success','删除失败');
        }

    }
}
