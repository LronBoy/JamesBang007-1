<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx477a6132a43b3bf0", "bbb84e1e770104fb19679603d02d7955");
$signPackage = $jssdk->GetSignPackage();
print_r($signPackage);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>微信JS-SDK</title>
</head>
<body>
  
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
var urlStr = window.location.href;

  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: '<?php echo $signPackage["timestamp"];?>',
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
    'onMenuShareTimeline',
    'onMenuShareAppMessage'
    ]
  });
  
  //处理config信息成功验证
  wx.ready(function () {
    // 在这里调用 API
    console.log('config信息成功');
    //分享给朋友  
    wx.onMenuShareAppMessage({
      title: '分享标题',
      desc: '分享描述',
      link: urlStr,
      imgUrl: 'http://www.beibaolv.com.cn/data/attachment/block/f1/f1ee8b0d8d3a4ebf8ebdba4a580c4574.jpg',
      type: 'link', // 分享类型,music、video或link，不填默认为link
      dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
      success: function (){
        // 用户点击了分享后执行的回调函数
        console.log('点击了分享');
      },
      fail: function (res){
        alert(JSON.stringify(res));  
      }
    });
  });
     
  //处理config信息失败验证
  wx.error(function () {
    // 在这里调用 API
    console.log('config信息失败');
  });
  
  
  
</script>
</html>
