<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Xinshang;
class XinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Request $request)
    {
        //
        // echo '欣赏nd';
        // $data = Xinshang::paginate(8);
        $search = $request -> input('search','');
         $data = Xinshang::where('title','like','%'.$search.'%')->paginate(8);
        // dump($data);
        // dump($data['0']['bid']);
        // $a = $data['0']['bid'];
        // $s = explode(',',$a);
        // $biao = Biao::find($s);
        // dump($biao);
        return view('hou.xinshang.show',['data'=>$data,'search'=>$search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        // echo 'xinha';
        return view('hou.xinshang.create');

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
         $data = $request->except(['_token']);
        // dump($data);
         // dd($data);
        // $biao = implode(',',$data['biao']);
        // dump(implode(' ',$data['biao']));
        // dump($data['biao']);
        // echo $data['biao'];
        $xinshang = new Xinshang;
        $xinshang -> title = $data['title'];
        $xinshang -> content = $data['content'];
        
        // dd($biao);
        // $wen -> bid = $biao;
        // dump($wen);
        if($request -> hasFile('pic')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            $res = $profile -> move('./uploads/xinshang/'.$dirname,$name);
            // dump($res);
            $wename = '/uploads/xinshang/'.$dirname.'/'.$name;
            $xinshang -> pic = $wename;
       }
       // $iddd = DB::table('sn_wens')->insertGetId(['title'=>$data['title'],
       //      'content'=>$data['content'],
       //      'pic'=>$wename

       //  ]);
       // dump($iddd);
        $res = $xinshang ->save();
        // $iddd = $wen -> id;
        /*foreach ($data['biao'] as $k => $v) {
            // dump($v);
            $guan = new Guanwenbiao;
            $guan -> wid = $iddd;
            $guan -> bid = $v;
            $guan -> save();
        }*/

        // dd($iddd);
        if ($res) {
            return redirect('/admin/sn/xin/index')->with('success','添加成功');
        } else {
            return back()->with('success','添加失败');
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
        //
        // echo $id;
        $data = Xinshang::find($id);
        return view('hou.xinshang.edit',['data'=>$data]);


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
        // $biao = implode(',',$data['biao']);
        // dump(implode(' ',$data['biao']));
        // dump($data['biao']);
        // echo $data['biao'];
        $xinshang = Xinshang::find($id);
        $xinshang -> title = $data['title'];
        $xinshang -> content = $data['content'];
        if($request -> hasFile('pic')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            $res = $profile -> move('./uploads/xinshang/'.$dirname,$name);
            // dump($res);
            $wename = '/uploads/xinshang/'.$dirname.'/'.$name;
            $xinshang -> pic = $wename;
       }
        $res = $xinshang ->save();
        // $guan = Guanwenbiao::find($id)->all();
       
        // dump($guanxi);
        // 删除文章和标签关系表的数据
        if ($res) {
            return redirect('/admin/sn/xin/index')->with('success','修改成功');
        } else {
            return back()->with('success','修改失败');
        }
    }


    /*
    删除
    */
    public function getDelete($id)
    {
        $res = Xinshang::destroy($id);
        if ($res) {
            return redirect('/admin/sn/xin/index')->with('success','删除成功');
        } else {
            return back()->with('success','删除失败');
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
}
