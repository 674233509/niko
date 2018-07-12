<?php

namespace App\Http\Controllers\hou;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Xiangce;
use App\Models\Photo;
class XiangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        $data = Xiangce::paginate(10);
        return view('hou.xiang.show',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *添加相册
     * @return \Illuminate\Http\Response
     */
    public function getCreate()
    {
        //
        // echo '添加相册';
        return view('hou.xiang.create');
    }

    /**
     * Store a newly created resource in storage.
     *保存相册
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request)
    {
        //
        // echo '保存';
        $data = $request->except(['_token']);
        // dd($data);
        $xiang = new Xiangce;
        // dd($data);
        $xiang -> name = $data['name'];
        $xiang -> content = $data['content'];        
        // dump($wen);
        if($request -> hasFile('pic')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            $res = $profile -> move('./uploads/xiangce/'.$dirname,$name);
            // dump($res);
            $wename = '/uploads/xiangce/'.$dirname.'/'.$name;
            $xiang -> pic = $wename;
       }       
        $res = $xiang ->save();
        if ($res) {
            return redirect('/admin/sn/xiang/index')->with('success','修改成功');
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
    public function show($id)
    {
        //
    }


    /*
    搜索相片
    */
    public function postSou(Request $request)
    {
        // echo '搜索相片';
         $jie = $request->except(['_token']);
         // dump($jie['sousuo']);
         // 'field_name','like','%'.$keywords.'%'
         $data = Photo::where('name','like','%'.$jie['sousuo'].'%')->get();
        // $data = Photo::;
         // dump($data);
        return view('hou.xiangpian.sou',['data'=>$data,'jie'=>$jie['sousuo']]);

    }

    /**
     * Show the form for editing the specified resource.
     *修改相册信息
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEdit($id)
    {
        //
        $data = Xiangce::find($id);
        return view('hou.xiang.edit',['data'=>$data]);

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
        // echo $id;
        // dd($data);
        $xiang = Xiangce::find($id);
        // dd($xiang);
        $xiang -> name = $data['name'];
        $xiang -> content = $data['content'];        
       //  // dump($wen);
        if($request -> hasFile('pic')){
            // 使用request 创建文件上传对象
            $profile = $request -> file('pic');
            $ext = $profile->getClientOriginalExtension();
            // 处理文件名称
            $temp_name = str_random(20);
            $name =  $temp_name.'.'.$ext;
            $dirname = date('Ymd',time());
            $res = $profile -> move('./uploads/xiangce/'.$dirname,$name);
            // dump($res);
            $wename = '/uploads/xiangce/'.$dirname.'/'.$name;
            $xiang -> pic = $wename;
       }    
       // dd($xiang);   
        $res = $xiang ->save();
        if ($res) {
            return redirect('/admin/sn/xiang/index')->with('success','修改成功');
        } else {
            return back()->with('success','修改失败');
        }

    }

    /*
    删除相册
    */
    public function getShance($id)
    {
        // echo 'shance'.$id;
        $xiang = Xiangce::find($id);
        $zhao = $xiang->cepian;
        foreach ( $zhao as $k => $v){
            Photo::destroy($v->id);
        }
        $res = Xiangce::destroy($id);
        if ($res) {
            return redirect('/admin/sn/xiang/index')->with('success','修改成功');
        } else {
            return back()->with('success','修改失败');
        }

        // dd($xiang->id);
    }

    /*
    *添加照片
    */
    public function getJiazhao(Request $request)
    {
        // echo 'asd';
        // echo '传all';
        $data = Xiangce::all();
        // dd($ce);
        return view('hou.xiangpian.create',['data'=>$data]);
    }

    /*
    保存相片
    */
    public function postCunpian(Request $request)
    {
        echo '保存相片';
        $data = $request->except(['_token']);
        // dd($data);
        if($request -> hasFile('pic')){
        $profile = $request -> file('pic');
        // dump($data);
        // $a = Photo::all();
        // dd($a);
        // dd($profile);
            foreach ($profile as $key => $value) {
                $photo = new Photo;
                $hz = $value -> getClientOriginalExtension();
                // 处理文件名称
                $temp_name = str_random(20);
                $name =  $temp_name.'.'.$hz;
                $dirname = date('Ymd',time());
                $res = $value -> move('./uploads/xiangce/'.$dirname,$name);
                $wename = '/uploads/xiangce/'.$dirname.'/'.$name;
                $photo -> pic = $wename;
                $photo -> xid = $data['xid'];
                $photo -> name = $data['name'].$key;
                $photo -> content = $data['content'];
                $res = $photo -> save();
            }
            if ($res) {
                return redirect('/admin/sn/xiang/index')->with('success','修改成功');
            } else {
                return back()->with('success','修改失败');
            }
        }else{
            return back()->with('success','没有上传的相片');

        }

    }

    /*
    相片·
    */
    public function getXiangqing ($id)
    {
        // echo '详情'.$id;
        $data = Xiangce::find($id);
        // $data = Photo::;
        return view('hou.xiangpian.show',['data'=>$data]);

    }
    /*
    相片修改显示
    */
    public function getPhotoedit($id)
    {
        // echo '改' .$id;
        $photo = Photo::find($id);
        // dd($data);
        $data = Xiangce::all();

        return view('hou.xiangpian.edit',['data'=>$data,'photo'=>$photo]);
    }

    /*
    相片修改保存
    */
    public function postGaipian(Request $request, $id)
    {
        $photo = $request->except(['_token']);
        // dd($photo);
        $data = Photo::find($id);
        $data->name = $photo['name'];
        $data->content = $photo['content'];
        // dd($photo['xid']);
        $data->xid = $photo['xid'];
        $res = $data->save();
        if ($res) {
            return redirect('/admin/sn/xiang/xiangqing/'.$photo['xid'])->with('success','修改成功');
        } else {
            return back()->with('success','修改失败');
        }
        // dump($data);
    }
    /*
    删除相片
    */
    public function getPhotodelete($id)
    {
        // echo $id;
        $res = Photo::destroy($id);
        if ($res) {
            return back()->with('success','删除成功');
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
