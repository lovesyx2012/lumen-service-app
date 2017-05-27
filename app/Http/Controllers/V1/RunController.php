<?php

namespace App\Http\Controllers\V1;

use Dingo\Api\Http\Request;

class RunController extends BaseController
{
    public function allMessages(Request $request){
        $data = [
            [
                'title'=>"小跑邀请",
                'url'=>"/res/images/logo.png",
                'message'=>"Moon小布丁：邀请你一起小跑",
                'time'=>"21:15",
                'count'=>0
            ],
            [
                'title'=>"不知火舞丶灭",
                'url'=>"http://img1.3lian.com/gif/more/11/201212/0d1252b54be4f2d240b6b7fe4ed35054.jpg",
                'message'=>"[图片]",
                'time'=>"15:15",
                'count'=>5
            ],
            [
                'title'=>"执泥小手手sky",
                'url'=>"http://img1.3lian.com/gif/more/11/201212/cd1d745ed855bef27f47c8aff0786067.jpg",
                'message'=>"[表情]",
                'time'=>"15:15",
                'count'=>22
            ],
            [
                'title'=>"李彦宏",
                'url'=>"http://img1.3lian.com/gif/more/11/201212/c011f2b2ab1a10d79fe931a786503d03.jpg",
                'message'=>"抄袭我的吧，我早都做过了",
                'time'=>"12:13",
                'count'=>1
             ],
            [
                'title'=>"雷军",
                'url'=>"http://img1.3lian.com/gif/more/11/201212/cf9d56d05c0cbc1edbf21cf64ad9c341.jpg",
                'message'=>"微信给你下线，看你还嘚瑟",
                'time'=>"12:11",
                'count'=>0
            ],
            [
                'title'=>"前端开发者",
                'url'=>"http://img1.3lian.com/gif/more/11/201212/04b335ead07530a6188a27549fad1a68.jpg",
                'message'=>"我们的春天来啦，哈哈哈",
                'time'=>"11:35",
                'count'=>0
            ]
        ];

        return [
            'status_code' => 0,
            'message'     => "",
            'data'=>$data
        ];
    }
}
