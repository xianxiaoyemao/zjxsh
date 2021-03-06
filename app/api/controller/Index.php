<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Index extends Frontend
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function index()
    {
        return $this -> fetch();
    }

    public function news()
    {
        $newslist = [];

        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'https://www.iuok.cn?ref=news']);
    }
}
