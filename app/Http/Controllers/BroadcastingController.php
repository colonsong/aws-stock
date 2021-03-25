<?php
namespace App\Http\Controllers;

use App\Events\PushMsgEvent;
use Illuminate\Http\Request;
use SerializesModels;

class BroadcastingController extends Controller
{
  /**
   * 展示弹幕显示页面
   */
  public function index()
  {
    return view("broadcasting.index");
  }

 /**
  * 接受前端弹幕请求，并触发广播事件
  */
  public function put( Request $request )
  {

        event(  new PushMsgEvent( $request->msg )  );

  }
}

