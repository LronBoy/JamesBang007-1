<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx477a6132a43b3bf0", "bbb84e1e770104fb19679603d02d7955");
$signPackage = $jssdk->GetSignPackage();

print_r($signPackage);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
<title>微信JS-SDK 分享接口</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>

引入JS文件
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>

<script>

//注入权限验证配置
wx.config({
  debug: true,
  appId: '<?php echo $signPackage["appId"];?>',
  timestamp: <?php echo $signPackage["timestamp"];?>,
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
  //console.log('config信息成功');
  
  //分享给朋友  
  wx.onMenuShareAppMessage({
    title: '分享标题', // 分享标题
    desc: '分享描述', // 分享描述
    link: 'http://www.beibaolv.com.cn', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
    imgUrl: 'http://www.beibaolv.com.cn/data/attachment/block/f1/f1ee8b0d8d3a4ebf8ebdba4a580c4574.jpg', // 分享图标
    type: 'link', // 分享类型,music、video或link，不填默认为link
    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
    success: function () {
      // 用户点击了分享后执行的回调函数
      console.log('点击了分享');
    },
    fail: function (res) {  
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



</body>
</html>