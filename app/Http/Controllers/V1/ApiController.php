<?php

namespace App\Http\Controllers\V1;

use Dingo\Api\Http\Request;

class ApiController extends BaseController
{
    const HOST_URI = "https://www.v2ex.com";

    public function allNode(Request $request){
        return file_get_contents(self::HOST_URI.$request->getPathInfo());
    }

    public function nodeInfo(Request $request){
      return file_get_contents(self::HOST_URI.$request->getPathInfo());
    }

    public function latestTopic(Request $request){
      return file_get_contents(self::HOST_URI.$request->getPathInfo());
    }

    public function hotTopic(Request $request){
      return file_get_contents(self::HOST_URI.$request->getPathInfo());
    }

    public function getTopics(Request $request){
      return file_get_contents(self::HOST_URI.$request->getPathInfo());
    }

    public function getReplies(Request $request){
      return file_get_contents(self::HOST_URI.$request->getPathInfo());
    }

    public function getUserInfo(Request $request){
      return file_get_contents(self::HOST_URI.$request->getPathInfo());
    }
}
