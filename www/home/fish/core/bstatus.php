<?php
# Ao cá vui bẻ - Happy fish Gold GoHooH
# More game, plugins, skin, mod for Discuz!, Ucenter Home... at http://www.gohooh.com/forum/
# Cám ơn bạn đã sử dụng dịch vụ của http://www.gohooh.com/
include_once('common.php');
header('Content-Type:text/html; charset=utf-8');
header('Cache-Control: no-cache, must-revalidate');

$auth && die($auth);
include_once("source/ui/fish.php");

# Cài đặt cá ao
if ( $_REQUEST['mod'] == "bstatus" && $_REQUEST['act'] == "raise" ){
	$a = (int)$_REQUEST['a'];
	$b = (int)$_REQUEST['b'];
	$list = $_HFG['db']->fetchOne("SELECT bstatus,package FROM app_fish_ui where uid=" . $_HFG['uid']);
	$bstatus = qf_decode($list['bstatus']);
	$package = qf_decode($list['package']);
	if($bstatus[$a]['b'] > 0){
		die( '{"b":'.$b.',"a":'.$a.',"bn":"'.$fishtype[$b]['bn'].'","code":0,"d":"gohooh204","poptype":0}');
	}
	$package[$b] = $package[$b] - 1 ;
	$bstatus[$a]['b'] = (int)$b;
	$bstatus[$a]['c'] = 1;
	$bstatus[$a]['g'] = $fishtype[$b]['output'];
	$bstatus[$a]['d'] =	 (int)($fishtype[$b]['output']*0.6);
	$bstatus[$a]['m'] = $fishtype[$b]['output'];
	$bstatus[$a]['h'] = 0;
	$bstatus[$a]['j'] = 0;
	$bstatus[$a]['k'] = 0;
	$bstatus[$a]['bn'] = $fishtype[$b]['bn'];
	$bstatus[$a]['n'] = array();
	$bstatus[$a]['p'] = array();
	$bstatus[$a]['w'] = 0;
	$bstatus[$a]['q'] = $_HFG['timestamp'];
	$bstatus[$a]['r'] = 0;
	$bstatus[$a]['s'] = 0;
	$bstatus[$a]['t'] = $_HFG['timestamp'];
	$bstatus[$a]['x'] = 100;

	$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus)) . "' ,package='" . qf_encode($package) . "'  where uid=" . $_HFG['uid']);

	die( '{"b":'.$b.',"a":'.$a.',"bn":"'.$fishtype[$b]['bn'].'","code":1,"d":""}');
}

# Bộ sưu tập
if ( $_REQUEST['mod'] == "bstatus" && $_REQUEST['act'] == "harvest" ){
	$a = (int)$_REQUEST['a'];
	$list = $_HFG['db']->fetchOne("SELECT bstatus,fruit,repertory FROM app_fish_ui where uid=" . $_HFG['uid']);
	$bstatus = qf_decode($list['bstatus']);
	$fruit = qf_decode($list['fruit']);
	$repertory = qf_decode($list['repertory']);

	$cid = $bstatus[$a]['b'];
	if($cid == 0) {
		exit();
	}
	$output = $bstatus[$a]['m'];
	$fruit[$cid] = $fruit[$cid] + $output;
	$harvest = $bstatus[$a]['m'];
	$raisetime = $bstatus[$a]['t'];
	$bstatus[$a]['b'] = 1;
	$bstatus[$a]['c'] = 5;
	$bstatus[$a]['g'] = 0;
	$bstatus[$a]['d'] = 0;
	$bstatus[$a]['m'] = 0;
	$bstatus[$a]['h'] = 0;
	$bstatus[$a]['j'] = 1;
	$bstatus[$a]['k'] = 0;
	$bstatus[$a]['n'] = array();
	$bstatus[$a]['p'] = array();
	$bstatus[$a]['w'] = 0;
	$bstatus[$a]['q'] = 0;
	$bstatus[$a]['r'] = 0;
	$bstatus[$a]['s'] = 0;
	$bstatus[$a]['t'] = 0;
	$bstatus[$a]['x'] = 100;

	$flag = false;
	foreach((array)$repertory as $key => $val) {
		if($cid == $val['cId']) {
			$flag = true;
			$repertory[$key]['h'] = $repertory[$key]['h'] + $output;
		}
	}
	if(!$flag) {
		$repertory[] = array("cId"=>$cid,"h"=>$output,"s"=>0);
	}

	$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus)) . "', exp=exp+".$fishtype[$cid]['e']." ,fruit='" . qf_encode($fruit) . "', repertory='" . qf_encode($repertory) . "'	where uid=" . $_HFG['uid']);

	die('{"a":"'.$a.'","code":1,"poptype":4,"d":"","status":{"b":1,"c":5,"oldk":0,"oldr":0,"olds":0,"output":'.$output.',"min":0,"leavings":0,"feed":0,"raisetime":'.$raisetime.',"updatetime":'.$_HFG['timestamp'].',"thief":[],"action":[],"health":100,"harvestTimes":0,"k":0,"r":0,"s":0},"harvest":'.$harvest.',"e":'.$fishtype[$cid]['e'].',"levelup":false}');
}

# Nguồn cấp dữ liệu
if ( $_REQUEST['mod'] == "bstatus" && $_REQUEST['act'] == "feed" ){
	$a = (int)$_REQUEST['a'];
	$t = (int)$_REQUEST['t'];
	$list = $_HFG['db']->fetchOne("SELECT bstatus,tools FROM app_fish_ui where uid=" . $_HFG['uid']);
	$bstatus = qf_decode($list['bstatus']);
	$fertarr = qf_decode($list['tools']);
	if($fertarr[$t] == 0) {
		exit();
	}

	$zuowutime = $_HFG['timestamp'] - $bstatus[$a]['q'];
	if($zuowutime > $fishtime[$bstatus[$a]['b']][2]){
		exit();
	}
	$ii = 0;
	foreach($fishtime[$bstatus[$a]['b']] as $key => $value) { //没有相对应的fishtime 110...
		if($value <= $zuowutime) {
			$ii = $key + 1;
		}
	}
	if($bstatus[$a]['w'] == $ii + 1) {
		exit();
	}
	$zuowutime += $toolstype[$t]['effect'];

	if($fishtime[$bstatus[$a]['b']][$ii] < $zuowutime) {
		$zuowutime = $fishtime[$bstatus[$a]['b']][$ii];
	}
	$bstatus[$a]['q'] = $bstatus[$a]['q'] - $toolstype[$t]['effect'];
	$bstatus[$a]['w'] = $ii + 1;
	$fertarr[$t] = $fertarr[$t] - 1;
	$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus)) . "',tools='" . qf_encode($fertarr) . "'	where uid=" . $_HFG['uid']);

	die( '{"a":'.$a.',"code":1,"t":'.$t.',"status":{"b":'.$bstatus[$a]['b'].',"bn":"'.$bstatus[$a]['bn'].'","c":1,"oldk":0,"oldr":0,"olds":0,"output":'.$bstatus[$a]['g'].',"min":0,"leavings":'.$bstatus[$a]['m'].',"feed":'.$bstatus[$a]['w'].',"raisetime":'.$bstatus[$a]['q'].',"updatetime":'.$bstatus[$a]['t'].',"thief":' . qf_jsonCode($n) . ',"action":' . qf_jsonCode($p) . ',"health":100,"harvestTimes":0,"k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].'}}');
	

}

# Bạn bè câu trộm cá
if ( $_REQUEST['mod'] == "bstatus" && $_REQUEST['act'] == "scrounge" ){
	$a = (int)$_REQUEST['a'];
	$fid = (int)$_REQUEST['u'];
	$bstatus = $_HFG['db']->result("select bstatus from app_fish_ui WHERE uid = ". $fid);
	$dog = $_HFG['db']->result("select dog from app_fish_ui WHERE uid = ". $fid);
	$list = $_HFG['db']->fetchOne("SELECT fruit,repertory,fr FROM app_fish_ui where uid=" . $_HFG['uid']);
	$bstatus = qf_decode($bstatus);
	$fruit = qf_decode($list['fruit']);
	$fr_arr = qf_decode($list['fr']);
	$dog_arr =qf_decode($dog);
	$repertory = qf_decode($list['repertory']);

	$b = $bstatus[$a]['b'] ;
	$g = $bstatus[$a]['g'] ;
	$d = $bstatus[$a]['d'] ;
	$m = $bstatus[$a]['m'] ;
	$n = $bstatus[$a]['n'] ;
	$n_temp = array_flip($n);

	if(in_array($_HFG['uid'], $n_temp)) {
		//die('{"code":0,"d":"gohooh205"}');
		exit();
	} else {
		//被狗咬
		if( $dog_arr['dt']>=$_HFG['timestamp'] )  {
			$dogrand = rand(1,100);
			if( $dogrand<=30 ) {
				$dm = rand(50,100);
				$dog_arr['dc'] += 1;
				$dog_arr['dm'] += $dm;
				$n[$_HFG['uid']] = 0;
				$bstatus[$a]['n'] = $n;
				$_HFG['db']->query("UPDATE app_fish_ui set money=money+".$dm.", dog='".qf_encode($dog_arr)."', bstatus='" . qf_encode(array_values($bstatus)) . "' where uid=" . $fid);
				$_HFG['db']->query("UPDATE app_fish_ui set money=money-".$dm." where uid=" . $_HFG['uid']);
				//狗咬日志
				$result = $_HFG['db']->fetchOne("SELECT `id`, `uid`, `fromid`, `count`, `type` FROM app_fish_logs WHERE fromid = " . $_HFG['uid'] . " and type = 4 and uid = " . $fid);
				if($result != null) {
					$sql = "UPDATE app_fish_logs set count = count+" . $dm . ", time = " . $_HFG['timestamp'] . " where fromid = " . $_HFG['uid'] . " and type = 4 and uid = " . $fid;
				} else {
					$sql = "INSERT INTO app_fish_logs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $fid . ", 4," . $dm . ", " . $_HFG['uid'] . ", " . $_HFG['timestamp'] . ", 0, 0);";
				}
				$_HFG['db']->query($sql);
				//狗咬日志

				die( '{"a":'.$a.',"code":1,"harvest":'.$n[$_HFG['uid']].',"poptype":1,"u":"'.$fid.'","e":0,"m":-'.$dm.',"levelup":false,"d":"gohooh1010'.$dm.'gohooh1011","price":0,"status":{"b":'.$bstatus[$a]['b'].',"c":4,"bn":"'.$_REQUEST['bn'].'","oldk":0,"oldr":0,"olds":'.$n[$_HFG['uid']].',"output":'.$bstatus[$a]['g'].',"min":0,"leavings":'.$bstatus[$a]['m'].',"feed":'.$bstatus[$a]['w'].',"raisetime":'.$bstatus[$a]['q'].',"updatetime":'.$bstatus[$a]['t'].',"thief":' . qf_jsonCode($n) . ',"action":' . qf_jsonCode($p) . ',"health":100,"harvestTimes":0,"k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].'}}');
			}
		}
	

	if($fr_arr['fr']==2) {
		$n[$_HFG['uid']] = 2;
	} elseif ($fr_arr['fr']==3) {
		$n[$_HFG['uid']] = 3;
	} else {
		$n[$_HFG['uid']] = 1;
	}

	$n[$_HFG['uid']] = min(($m - $d), $n[$_HFG['uid']]); //计算最大可偷数
	$fruit[$b] += $n[$_HFG['uid']];
	$m -= $n[$_HFG['uid']];
	//作物剩下产量小于最低产量或未偷取，跳过~
	if($m < $d || $n[$_HFG['uid']] == 0) {
		die('{"code":0,"d":"gohooh206"}');
	}

	$flag = false;
	foreach($repertory as $key_1=>$value_1) {
		if($b == $value_1['cId']) {
			$flag = true;
			$repertory[$key_1]['s'] = $repertory[$key_1]['s'] +$n[$_HFG['uid']] ;
		}
	}

	if(!$flag) {
		$repertory[] = array("cId"=>$b,"h"=>0,"s"=>$n[$_HFG['uid']]);
	}

	$bstatus[$a]['g'] = $g;
	$bstatus[$a]['d'] = $d;
	$bstatus[$a]['m'] = $m;
	$bstatus[$a]['n'] = $n;

	//偷取日志
	$result = $_HFG['db']->fetchOne("SELECT `id`, `uid`, `cropid`, `fromid`, `count`,`counts`,`time`, `type` FROM  app_fish_logs WHERE fromid = " . $_HFG['uid'] . " and type=1 and uid = " . $fid . " and time > " . ($_HFG['timestamp'] - 3600));
	$counts=$result['counts'];
	$countid=$result['id'];
	if ($result) {
		$countss = array();
		$chk = 0;
		$count_arr = explode(";",$counts);
		foreach($count_arr as $cv) {
			$count_t = explode(":", $cv);
			if($count_t[0]==$b) {
				$chk = 1;
				$count_t[1] += $n[$_HFG['uid']];
			}
			$countss[] = implode(":", $count_t);
		}
		if( $chk == 1 ) {
			$counts_all = implode(";", $countss);
		} else {
			$counts_all = $counts . ";".$b.":".$n[$_HFG['uid']];
		}
		$sql = "UPDATE app_fish_logs set count = count+1,counts='".$counts_all."',time = " . $_HFG['timestamp'] . " where id = " . $countid;
	} else {
		$sql = "INSERT INTO app_fish_logs (`uid`, `type`, `count`,`counts`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $fid . ", 1, 1,'{$b}:".$n[$_HFG['uid']]."', " . $_HFG['uid'] . ", " . $_HFG['timestamp'] . ", " . $b . ", 0);";
	}
	$_HFG['db']->query($sql);

	$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus)) . "' where uid=" . $fid);
	$_HFG['db']->query("UPDATE app_fish_ui set fruit='" . qf_encode($fruit) . "',repertory='" . qf_encode($repertory) . "'	where uid=" . $_HFG['uid']);

	die( '{"a":'.$a.',"code":1,"harvest":'.$n[$_HFG['uid']].',"poptype":2,"u":"'.$fid.'","e":0,"levelup":false,"d":"","price":0,"status":{"b":'.$bstatus[$a]['b'].',"c":4,"bn":"'.$_REQUEST['bn'].'","oldk":0,"oldr":0,"olds":'.$n[$_HFG['uid']].',"output":'.$bstatus[$a]['g'].',"min":0,"leavings":'.$bstatus[$a]['m'].',"feed":'.$bstatus[$a]['w'].',"raisetime":'.$bstatus[$a]['q'].',"updatetime":'.$bstatus[$a]['t'].',"thief":' . qf_jsonCode($n) . ',"action":' . qf_jsonCode($p) . ',"health":100,"harvestTimes":0,"k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].'}}');
	}
} 
# 给鱼治病
if ( $_REQUEST['mod'] == "bstatus" && $_REQUEST['act'] == "doctor" ){
	$a = (int)$_REQUEST['a'];
	$uid = (int)$_REQUEST['u'];
	$list = $_HFG['db']->fetchOne("SELECT bstatus,tips FROM app_fish_ui where uid=" . $uid);
	$bstatus = qf_decode($list['bstatus']);
	$tips_arr = qf_decode($list['tips']);
	if($bstatus[$a]['s'] < 1){
		exit();
	}
	$bstatus[$a]['s'] = $bstatus[$a]['s'] - 1;

	$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus)) . "' where uid=" . $uid);
	$_HFG['db']->query("UPDATE app_fish_ui set exp=exp + 2 where uid=" . $_HFG['uid']);

	if($uid==$_HFG['uid']) {
		qf_addFeed('fishlandstaus_clearweed1');
	} else {
		qf_addFeed('fishlandstaus_clearweed2');
		//帮忙治病日志
		$result = $_HFG['db']->fetchOne("SELECT `id`, `uid`, `cropid`, `fromid`, `count`,`counts`,`time`, `type` FROM  app_fish_logs WHERE fromid = " . $_HFG['uid'] . " and type=2 and uid = " . $uid . " and time > " . ($_HFG['timestamp'] - 3600));
		if($result != null) {
			if(strpos($result[counts], ':') !== false) {
				$counts_ = explode(':', $result['counts']);
				$counts_[0]++;
				$counts_all = join(':', $counts_);
			} else {
				$counts_all = "1:0:0";
			}
			$sql = "UPDATE app_fish_logs set count = count+1,counts='{$counts_all}',time = " . $_HFG['timestamp'] . " where id = " . $result['id'];
		} else {
			$sql = "INSERT INTO app_fish_logs (`uid`, `type`, `count`,`counts`, `fromid`, `time`, `cropid`, `isread` ) VALUES (" . $uid . ", 2, 1,'1:0:0', " . $_HFG['uid'] . ", " . $_HFG['timestamp'] . ", 0, 0);";
		}
		$_HFG['db']->query($sql);
		die('{"a":'.$a.',"code":1,"poptype":1,"d":"'.$tips_arr['s_h'].'","k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].',"u":"'.$uid.'","e":2}');
	}

	die('{"a":'.$a.',"code":1,"poptype":0,"d":"","k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].',"u":"'.$uid.'","e":2}');
}

# 宰杀鲨鱼
if ( $_REQUEST['mod'] == "bstatus" && $_REQUEST['act'] == "cleank" ){
	$a = (int)$_REQUEST['a'];
	$uid = (int)$_REQUEST['u'];
	$list = $_HFG['db']->fetchOne("SELECT bstatus,putk,tips FROM app_fish_ui where uid=" . $uid);
	$putk_arr = qf_decode($list['putk']);
	$bstatus = qf_decode($list['bstatus']);
	$tips_arr = qf_decode($list['tips']);
	if($bstatus[$a]['k'] == 0){
		exit();
	}
	if($putk_arr[$a] == $_HFG['uid']) {
		die('{"a":"'.$a.'","code":0,"poptype":0,"m":0,"d":"gohooh207","e":0,"levelUp":false,"k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].',"u":"'.$uid.'"}');
	}
	$bstatus[$a]['k'] = 0;
	unset($putk_arr[$a]);

	$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus)) . "', putk='".qf_encode($putk_arr)."' where uid=" . $uid);
	$_HFG['db']->query("UPDATE app_fish_ui set exp=exp + 2 where uid=" . $_HFG['uid']);

	if($uid==$_HFG['uid']) {
		qf_addFeed('fishlandstatus_water1');
	} else {
		qf_addFeed('fishlandstatus_water2');
		//帮忙宰杀鲨鱼日志
		$result = $_HFG['db']->fetchOne("SELECT `id`, `uid`, `cropid`, `fromid`, `count`,`counts`,`time`, `type` FROM  app_fish_logs WHERE fromid = " . $_HFG['uid'] . " and type=2 and uid = " . $uid . " and time > " . ($_HFG['timestamp'] - 3600));
		if($result != null) {
			if(strpos($result[counts], ':') !== false) {
				$counts_ = explode(':', $result[counts]);
				$counts_[2]++;
				$counts_all = join(':', $counts_);
			} else {
				$counts_all = "0:0:1";
			}
			$sql = "UPDATE app_fish_logs set count = count+1,counts='{$counts_all}',time = " . $_HFG['timestamp'] . " where id = " . $result[id];
		} else {
			$sql = "INSERT INTO app_fish_logs (`uid`, `type`, `count`,`counts`, `fromid`, `time`, `cropid`, `isread` ) VALUES (" . $uid . ", 2, 1,'0:0:1', " . $_HFG['uid'] . ", " . $_HFG['timestamp'] . ", 0, 0);";
		}
		$_HFG['db']->query($sql);
		die('{"a":"'.$a.'","code":1,"poptype":1,"m":0,"d":"'.$tips_arr['k_h'].'","e":2,"levelUp":false,"k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].',"u":"'.$uid.'"}');
	}

	die( '{"a":"'.$a.'","code":1,"poptype":0,"m":0,"d":"","e":2,"levelUp":false,"k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].',"u":"'.$uid.'"}');

}

# 放鲨鱼
if ( $_REQUEST['mod'] == "bstatus" && $_REQUEST['act'] == "putk" ){
	$a = (int)$_REQUEST['a'];
	$uid = (int)$_REQUEST['u'];
	$list = $_HFG['db']->fetchOne("SELECT bstatus,putk,tips FROM app_fish_ui where uid=" . $uid);
	$putk_arr = qf_decode($list['putk']);
	$bstatus = qf_decode($list['bstatus']);
	$tips_arr = qf_decode($list['tips']);

	if($bstatus[$a]['k'] > 0 && $bstatus[$a]['b'] < 0){
		die( '{"a":"'.$a.'","code":0,"poptype":0,"m":0,"d":"gohooh208"}');
	}

	if($_HFG['timestamp'] - $bstatus[$a]['q'] > $fishtime[$bstatus[$a]['b']][2]){
		die( '{"a":"'.$a.'","code":0,"poptype":0,"m":0,"d":"gohooh209"}');
	}

	$bstatus[$a]['k'] = $_HFG['timestamp'];
	$putk_arr[$a] = $_HFG['uid'];

	$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus)) . "', putk='".qf_encode($putk_arr)."' where uid=" . $uid);

	//鲨鱼日志
	$result = $_HFG['db']->fetchOne("SELECT `id`, `uid`, `fromid`, `count`, `type` FROM	 app_fish_logs WHERE fromid = " . $_HFG['uid'] . " and type = 5 and uid = " . $uid);
	if($result != null) {
		$sql = "UPDATE app_fish_logs set time = " . $_HFG['timestamp'] . " where fromid = " . $_HFG['uid'] . " and type = 5 and uid = " . $uid;
	} else {
		$sql = "INSERT INTO app_fish_logs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $uid . ", 5,0, " . $_HFG['uid'] . ", " . $_HFG['timestamp'] . ", 0, 0);";
	}
	$_HFG['db']->query($sql);

	die('{"a":"'.$a.'","code":1,"poptype":1,"d":"'.$tips_arr['k_a'].'","k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].',"u":"'.$uid.'"}');

}

# 放垃圾
if ( $_REQUEST['mod'] == "bstatus" && $_REQUEST['act'] == "putr" ){
	$a = (int)$_REQUEST['a'];
	$uid = (int)$_REQUEST['u'];
	$list = $_HFG['db']->fetchOne("SELECT bstatus,putr,tips FROM app_fish_ui where uid=" . $uid);
	$bstatus = qf_decode($list['bstatus']);
	$putr_arr = qf_decode($list['putr']);
	$tips_arr = qf_decode($list['tips']);
	if($bstatus[$a]['r'] >= 3){
		die( '{"a":"'.$a.'","code":0,"poptype":0,"m":0,"d":"gohooh210"}');
	}

	if($_HFG['timestamp'] - $bstatus[$a]['q'] > $fishtime[$bstatus[$a]['b']][2]){
		die( '{"a":"'.$a.'","code":0,"poptype":0,"m":0,"d":"gohooh211"}');
	}

	$bstatus[$a]['r'] += 1;
	$putr_arr[$a][] = $_HFG['uid'];

	$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus)) . "', putr='".qf_encode($putr_arr)."' where uid=" . $uid);

	//放垃圾日志
	$result = $_HFG['db']->fetchOne("SELECT `id`, `uid`, `fromid`, `count`, `type` FROM	 app_fish_logs WHERE fromid = " . $_HFG['uid'] . " and type = 3 and uid = " . $uid);
	if($result != null) {
		$sql = "UPDATE app_fish_logs set time = " . $_HFG['timestamp'] . " where fromid = " . $_HFG['uid'] . " and type = 3 and uid = " . $uid;
	} else {
		$sql = "INSERT INTO app_fish_logs (`uid`, `type`, `count`, `fromid`, `time`, `cropid`, `isread`) VALUES (" . $uid . ", 3,0, " . $_HFG['uid'] . ", " . $_HFG['timestamp'] . ", 0, 0);";
	}
	$_HFG['db']->query($sql);

	die('{"a":'.$a.',"code":1,"poptype":1,"d":"'.$tips_arr['r_a'].'","k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].',"u":"'.$uid.'"}');

}

# 清理垃圾
if ( $_REQUEST['mod'] == "bstatus" && $_REQUEST['act'] == "cleanr" ){
	$a = (int)$_REQUEST['a'];
	$uid = (int)$_REQUEST['u'];
	$list = $_HFG['db']->fetchOne("SELECT bstatus,putr,tips FROM app_fish_ui where uid=" . $uid);
	$bstatus = qf_decode($list['bstatus']);
	$putr_arr = qf_decode($list['putr']);
	$tips_arr = qf_decode($list['tips']);
	if($bstatus[$a]['r'] < 1){
		exit();
	}
	$r_cnt = array_count_values($putr_arr[$a]);
	if( $bstatus[$a]['r'] <= $r_cnt[$_HFG['uid']] ) {
		die('{"a":"'.$a.'","code":0,"poptype":0,"m":0,"d":"gohooh212","e":0,"levelUp":false,"k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].',"u":"'.$uid.'"}');
	}

	$bstatus[$a]['r'] = $bstatus[$a]['r'] - 1;
	foreach($putr_arr[$a] as $key=>$value) {
		if( $value != $_HFG['uid']) {
			unset($putr_arr[$a][$key]);
			if(empty($putr_arr[$a])) {
				unset($putr_arr[$a]);
			}
			break;
		}
	}

	$_HFG['db']->query("UPDATE app_fish_ui set bstatus='" . qf_encode(array_values($bstatus)) . "',putr='".qf_encode($putr_arr)."' where uid=" . $uid);
	$_HFG['db']->query("UPDATE app_fish_ui set exp=exp + 2 where uid=" . $_HFG['uid']);

	if($uid==$_HFG['uid']) {
		qf_addFeed('fishlandstatus_spraying1');
	} else {
		qf_addFeed('fishlandstatus_spraying2');
		//帮忙清理垃圾日志
		$result = $_HFG['db']->fetchOne("SELECT `id`, `uid`, `cropid`, `fromid`, `count`,`counts`,`time`, `type` FROM  app_fish_logs WHERE fromid = " . $_HFG['uid'] . " and type=2 and uid = " . $uid . " and time > " . ($_HFG['timestamp'] - 3600));
		if($result != null) {
			if(strpos($result[counts], ':') !== false) {
				$counts_ = explode(':', $result[counts]);
				$counts_[1]++;
				$counts_all = join(':', $counts_);
			} else {
				$counts_all = "0:1:0";
			}
			$sql = "UPDATE app_fish_logs set count = count+1,counts='{$counts_all}',time = " . $_HFG['timestamp'] . " where id = " . $result[id];
		} else {
			$sql = "INSERT INTO app_fish_logs (`uid`, `type`, `count`,`counts`, `fromid`, `time`, `cropid`, `isread` ) VALUES (" . $uid . ", 2, 1,'0:1:0', " . $_HFG['uid'] . ", " . $_HFG['timestamp'] . ", 0, 0);";
		}
		$_HFG['db']->query($sql);
		die('{"a":'.$a.',"code":1,"poptype":1,"d":"'.$tips_arr['r_h'].'","k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].',"u":"'.$uid.'","e":2}');
	}

	die('{"a":'.$a.',"code":1,"poptype":0,"d":"","k":'.$bstatus[$a]['k'].',"r":'.$bstatus[$a]['r'].',"s":'.$bstatus[$a]['s'].',"u":"'.$uid.'","e":2}');
}

?>