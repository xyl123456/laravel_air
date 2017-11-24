<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\SceneModel;
use App\Http\Model\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

require_once 'resources\org\code\Code.class.php';

class LoginController extends CommonController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function login()
    {
        //重新导入时候生成密码
    /*
        $st= Crypt::encrypt('123456');
                dd($st);
    */
        if($input_data = Input::all()){
            $code_data = new \Code();
            $_code = $code_data->get();
            if(strtoupper($input_data['code'])!=$_code){
                return back()->with('msg','验证码错误');
            }
            $user_data = UserModel::first();
           $user_pass_data = Crypt::decrypt($user_data['user_pass']);

            if(($input_data['user_name'] != $user_data['user_name']) || ($input_data['user_pass'] != $user_pass_data))
            {
                return back()->with('msg','用户名或者密码错误');
            }else{
                session(['user'=> $user_data]);
                $scene_data = SceneModel::orderBy('scene_id','asc')->get();
                return view('admin.index',compact('scene_data'));
            }
        }else{
            return view('admin.login');
        }
    }
    public function makecode()
    {
        $code = new \Code();
        $code->make();
    }
    /*
    public function getcode()
    {
        $code = new \Code();
        $code_date=$code->get();
        return $code_date;
    }
    */
}
