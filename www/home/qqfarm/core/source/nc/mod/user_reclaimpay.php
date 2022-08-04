<?php

# Open to tips

$tudiarr = array(
	"6" => array("level" => 5, "money" => 10000),
	"7" => array("level" => 7, "money" => 20000),
	"8" => array("level" => 9, "money" => 30000),
	"9" => array("level" => 11, "money" => 50000),
	"10" => array("level" => 13, "money" => 70000),
	"11" => array("level" => 15, "money" => 90000),
	"12" => array("level" => 17, "money" => 120000),
	"13" => array("level" => 19, "money" => 150000),
	"14" => array("level" => 21, "money" => 180000),
	"15" => array("level" => 23, "money" => 230000),
	"16" => array("level" => 25, "money" => 300000),
	"17" => array("level" => 27, "money" => 500000)
);

$reclaim = $_QFG['db']->result("SELECT reclaim FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
echo '{"money":' . $tudiarr[$reclaim]['money'] . ',"level":' . $tudiarr[$reclaim]['level'] . '}';

?>
