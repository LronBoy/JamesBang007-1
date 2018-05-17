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
$app['scly'] 	= array('appid'=>'wxf27397bc89f88c4e', 'secret'=>'696d9c86f11a967ea0b8f76526580c74');
$app['cdcyts']  = array('appid'=>'wx67a6dd77d010a4f0', 'secret'=>'64f6257a27b060a401443a9b925cdf91');
$app['ctsscs']  = array('appid'=>'wx35e87e8c5f75fc94', 'secret'=>'fdb3e6785cf1f0279aba7bc27e0eb358');


if(!empty($_GET['appname'])){
	// echo '1\n ';
	$appid = $app[$_GET['appname']]['appid'];
	$secret = $app[$_GET['appname']]['secret'];
	$code = $_GET['code'];


  // 通过code换取网页授权access_token
  // https://api.weixin.qq.com/sns/oauth2/access_token?appid=APPID&secret=SECRET&code=CODE&grant_type=authorization_code
  $url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code';  		
  	
  $data = file_get_contents($url);
  //$data = json_decode($data,true);
  
  echo $data;

}else{
  echo '{"errcode":40163,"errmsg":"没有传参"}';
  
}
