<?php

namespace App\Http\Controllers;

use App\Services\UploadService;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /*文件上传*/
    public function upload($key, $original = 0)
    {
        $upload = new UploadService($this->request, $key, $original);
        return $this->response($upload->check()->upload());
    }
}
