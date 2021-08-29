<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function prefectures(Request $request)
    {
        $url = "https://www.land.mlit.go.jp/webland/api/CitySearch?area=".$request->prefecture_id;
        $options['ssl']['verify_peer']=false;
        $options['ssl']['verify_peer_name']=false;
        $json = file_get_contents($url, false, stream_context_create($options));
        $json = mb_convert_encoding($json,'UTF8','ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $arr = json_decode($json,true);
        return $arr;
    }
}
