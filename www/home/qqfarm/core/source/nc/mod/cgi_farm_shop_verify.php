<?php

# Buy ingot
	
$itemNum = (int)$_REQUEST['itemNum'];
$itemType = (int)$_REQUEST['itemType'];
$itemId = (int)$_REQUEST['itemId'];
$shopType = (int)$_REQUEST['shopType'];

echo '{"code":1,"direction":"","ecode":0,"itemId":' . $itemId . ',"itemNum":' . $itemNum . ',"itemType":'.$itemType.'}';

?>