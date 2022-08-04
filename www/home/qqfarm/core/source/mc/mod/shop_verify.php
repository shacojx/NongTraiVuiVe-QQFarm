<?php

# Buy ingot
$activeitem = $_REQUEST['payitem'];
list($ai, $number) = explode("-", $activeitem);
$itemId = $ai - 60000;
echo '{"code":1,"direction":"","ecode":0,"itemId":' . $itemId . ',"itemNum":1,"itemType":101}';

?>