<?php
/*
 *  180517  微信网页授权 
 * 
 */

// 设置允许其他域名访问
header('Access-Control-Allow-Origin:*');  
// 设置允许的响应类型 
header('Access-Control-Allow-Methods:POST, GET');  
// 设置允许的响应头 
header('Access-Control-Allow-Headers:x-requested-with,content-type');


// 数组保存appid
$app['test'] 	= array('appid'=>'wx477a6132a43b3bf0', 'secret'=>'bbb84e1e770104fb19679603d02d7955');


if(!empty($_GET['appname'])){
	// echo '1\n ';
	$appid = $app[$_GET['appname']]['appid'];
	$secret = $app[$_GET['appname']]['secret'];
	$code = $_GET['code'];


  // 第二步：通过code换取网页授权access_token
  // https://api.weixin.qq.com/sns/oauth2/access_token?appid=APPID&secret=SECRET&code=CODE&grant_type=authorization_code
  $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code';  		
  	
  $data = file_get_contents($url);
  //echo $data;
  $token = json_decode($data,true);
  
  
  
  /*
   * 第四步：拉取用户信息(需scope为 snsapi_userinfo)
   * 请求方法
   * http：GET（请使用https协议） https://api.weixin.qq.com/sns/userinfo?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN
   * 
   */
  if( !empty($token['access_token']) ){
    $url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$token['access_token'].'&openid='.$token['openid'].'&lang=zh_CN';  
    $userinfo = file_get_contents($url);
    
    echo $userinfo;
    
  }else{
    echo $data;
  }
  

}else{
  echo '{"errcode":0,"errmsg":"没有传参"}';
  
}
