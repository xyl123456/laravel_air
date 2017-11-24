<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\DevModel;
use App\Http\Model\SceneModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AirinfoController extends CommonController
{
    public function get_info($scene_address){

    $scene_data = SceneModel::orderBy('scene_id','asc')->get();
    foreach ($scene_data as $v)
    {
        if($v->scene_address == $scene_address)
        $scene_name = $v->scene_name;
    }
    //对应场景的设备信息
    $air_datas = DevModel::where('dev_scene',$scene_address)->get();
    return view('admin.air',compact('air_datas','scene_data','scene_name'));
    }
}
