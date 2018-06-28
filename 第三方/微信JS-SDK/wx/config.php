<?php

require_once "wechat.php";

$jssdk = new wechat("wx477a6132a43b3bf0", "bbb84e1e770104fb19679603d02d7955");
$signPackage = $jssdk->getSignPackage("wx477a6132a43b3bf0", "bbb84e1e770104fb19679603d02d7955", "http://www.beibaolv.com.cn/ruli-app/wx/wechat.html");

//print_r($signPackage);
echo json_encode($signPackage);

?>