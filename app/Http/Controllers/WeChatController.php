<?php

namespace App\Http\Controllers;

class WeChatController extends Controller
{

    /**
     * 服务
     *
     * @return mixed
     */
    public function serve()
    {
        $app = app('wechat.official_account');
        $app->server->push(function ($message)
        {
            return "欢迎关注微素生活 " . $message;
        });

        return $app->server->serve();
    }
}
