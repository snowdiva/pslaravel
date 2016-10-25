<?php
/**
 * @Filename    LoginController.php
 * @Descript    后台管理的的登陆控制器
 * @Author      snowdiva
 * @CreateBy    2016/10/17 - 08:32
 * @Copyright   @PinShu
 */

namespace App\Http\Controllers\Admin;

use \Illuminate\Http\Request;
use Mews\Captcha;
use Illuminate\Support\Facades\Session;


class LoginController
{
//    private $_captchaBuilder;

    public function __construct()
    {

    }

    public function login(Request $request)
    {
        if ($request->session()->has('admin')) {
            return redirect('admin/');
        }
        return view('admin.login', [
            'forward'       => $request->get('forward')
        ]);
    }

    public function loginPost(Request $request)
    {

    }

    public function code()
    {
        header('Content-Type:image/jpeg');
        return Captcha::create_src();
    }

    public function out()
    {

    }
}