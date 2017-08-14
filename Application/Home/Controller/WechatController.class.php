<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/14
 * Time: 15:03
 */

namespace Home\Controller;
use EasyWeChat\Foundation\Application;
use EasyWeChat\Message\News;
use EasyWeChat\Message\Text;

include  './vendor/autoload.php'; // 引入 composer 入口文件
class WechatController
{
    public function index(){

        $app = new Application(C('wechat_config'));
        $server = $app->server;
        //消息的处理
        $server->setMessageHandler(function ($message) {
            //消息的基本属性
            /**
             *  $message->ToUserName    接收方帐号（该公众号 ID）
            $message->FromUserName  发送方帐号（OpenID, 代表用户的唯一标识）
            $message->CreateTime    消息创建时间（时间戳）
            $message->MsgId         消息 ID（64位整型）
             */
            //文本消息
//            if($message->MsgType == "text"){
//                return $message->Content;
//            }
            //完整消息的处理方式，应为有多种类型的消息
            switch ($message->MsgType) {
                case 'event':
                    //处理事件 关注和取消关注事件
                    switch ($message->Event){
                        case 'subscribe'://关注事件
                            return "欢迎关注哦！";
                            break;
                        case 'unsubscribe':
                            return "欢迎再次关注哦！";
                            //不处理
                            break;
                        case "CLICK":
                            //自定义菜单的点击事件
                            return $message->EventKey;
                            break;
                    }
//                    return '收到事件消息';
                    break;
                case 'text':
                    //使用对象的方式处理文本消息
                    $content = $message->Content;
                    if($content){
                        //发送多图文消息
                        $news1 = new News([
                            'title'       => "第一个图文消息",
                            'description' => '第一个图文消息第一个图文消息',
                            'url'         => 'http://www.itsource.cn/',
                            'image'       => 'http://imgsrc.baidu.com/image/c0%3Dshijue1%2C0%2C0%2C294%2C40/sign=32c015eaf6039245b5b8e94ceffdceb7/d788d43f8794a4c28c10040c04f41bd5ad6e39e2.jpg',
                        ]);
                        $news2 = new News([
                            'title'       => "第2个图文消息",
                            'description' => '第2个图文消息第一个图文消息',
                            'url'         => 'http://www.itsource.cn/',
                            'image'       => 'http://imgsrc.baidu.com/image/c0%3Dshijue1%2C0%2C0%2C294%2C40/sign=32c015eaf6039245b5b8e94ceffdceb7/d788d43f8794a4c28c10040c04f41bd5ad6e39e2.jpg',
                        ]);
                        $news3 = new News([
                            'title'       => "第3个图文消息",
                            'description' => '第3个图文消息第一个图文消息',
                            'url'         => 'http://www.itsource.cn/',
                            'image'       => 'http://imgsrc.baidu.com/image/c0%3Dshijue1%2C0%2C0%2C294%2C40/sign=32c015eaf6039245b5b8e94ceffdceb7/d788d43f8794a4c28c10040c04f41bd5ad6e39e2.jpg',
                        ]);
                        //返回图文消息
                        return [$news1,$news2,$news3];
                    }else{
                        $text = new Text(['content'=>'这是我自己发送的文本消息']);
                        return $text;
                    }
                    break;
                case 'image':
                    return '收到图片消息';
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                // ... 其它消息
                default:
                    return '收到其它消息';
                    break;
            }
            // ...
        });
// 将响应输出
        $server->serve()->send(); // Laravel 里请使用：return $response;
    }
    /**
     * 添加微信菜单
     */
    public function addMenu(){
        $app = new Application(C('wechat_config'));
        $menu = $app->menu;
        $buttons = [
            [
                "type" => "click",
                "name" => "最新新闻",
                "key"  => "news_list"
            ],
            [
                "name"       => "菜单",
                "sub_button" => [
                    [
                        "type" => "view",
                        "name" => "便民服务",
                        "url"  => "http://www.baidu.com/"
                    ],
                    [
                        "type" => "view",
                        "name" => "小区通知",
                        "url"  => "http://www.qq.com/"
                    ],
                ],
            ],
            [
                'name'=>'个人中心',
                'type'=>'view',
                'url'=>"http://www.jd.com/"
            ]
        ];
        $menu->add($buttons);
        //获取已经有的菜单
        $menus = $menu->all();
        dump($menus);
    }
    public function callback(){

    }


}