<?php

# Guest Book

$uId =  (int)$_REQUEST['toId'];
$uIdx =  (int)$_REQUEST['uIdx'];

$_QFG['db']->query("INSERT INTO app_qqfarm_message (`toid`, `toname`, `fromid`, `fromname`, `msg`, `time`, `isreply`) VALUES (" . $uId . ", '". qf_getUserName($uId)."', " . $uIdx . ", '" . $_REQUEST['fName'] . "', '".$_REQUEST['msg']."'," . $_QFG['timestamp'] .", ".(int)$_REQUEST['isReply'].")");

$values = $_QFG['db']->fetchAll("SELECT * FROM app_qqfarm_message WHERE toID = " .$uId . " ORDER BY time DESC limit 0,50");
foreach($values as $value) {
	if($value['fromid'] == $value['toid']){
		$value["fromName"] = $value["toName"] = "Bạn";
	}
	if($chat) {
		$chat .= ',{"fromId":'.(int)$value["fromid"].',"fromName":"'.$value["fromname"].'","toId":'.$uId.',"toName":"'.qf_getUserName($uId).'","time":'.$value["time"].',"msg":"'.$value["msg"].'","isReply":'.(int)$value["isreply"].'}';
	} else {
		$chat = '{"fromId":'.(int)$value["fromid"].',"fromName":"'.$value["fromname"].'","toId":'.$uId.',"toName":"'.qf_getUserName($uId).'","time":'.$value["time"].',"msg":"'.$value["msg"].'","isReply":'.(int)$value["isreply"].'}';
	} 
}

echo '{"code":1,"chat":['.$chat.']}';

?>