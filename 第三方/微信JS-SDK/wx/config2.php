<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx477a6132a43b3bf0", "bbb84e1e770104fb19679603d02d7955");

if(!empty($_GET['url'])){
  $signPackage = $jssdk->getSignPackage("http://www.beibaolv.com.cn");
  //print_r($signPackage);
  echo json_encode($signPackage);  
}else{
  echo 'no url';
}

?>