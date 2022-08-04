<?php

# Weed farm

$ownerId = (int)$_REQUEST['ownerId'];
$place = explode(',', $_REQUEST['place']);
$zong = $_QFG['db']->result("SELECT zong FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
$list = $_QFG['db']->fetchOne("SELECT status,tips,exp,dog FROM app_qqfarm_nc where uid=" . $ownerId);
$status = qf_decode($list['status']);
if($ownerId != $_QFG['uid']) {
	$Tips = qf_decode($list['tips']);
}

$echo_str = array();
foreach($place as $id) {
	$id = (int)$id;
	$f = $status[$id]['f'];
	$p = (array)$status[$id]['p'];
	if($f > 0) {
		$cnt_you = array_key_exists($_QFG['uid'], $status[$id]['weed']) ? $status[$id]['weed'][$_QFG['uid']] : 0;//Here you get the number of grass
		if($f <= $cnt_you) {
			die('{"code":0,"direction":"Không thể hủy chứng cứ!","farmlandIndex":' . $id . ',"poptype":1,"weed":' . $f . '}');
		} else {
			foreach($status[$id]['weed'] as $wk=>$wv) {
				if($wk != $_QFG['uid']) {
					$status[$id]['weed'][$wk] -= 1;
					if($status[$id]['weed'][$wk]<1) { 
						unset($status[$id]['weed'][$wk]);
					}
					if(count($status[$id]['weed'])==0) {
						unset($status[$id]['weed']);
					}
					break;
				}
			}
		}
		$f -= 1;
		if($zong < 1) {
			//Limit weed
			$echo_str[] = '{"code":1,"direction":"' . $Tips['weed_b'] . '","exp":0,"farmlandIndex":' . $id . ',"levelUp":false,"money":2,"poptype":1,"weed":' . $f . '}';
		} else {
			$_QFG['db']->query("UPDATE app_qqfarm_nc set exp = exp+2,zong=zong-1 where uid=" . $_QFG['uid']);
			$exp_arr = $_QFG['db']->result("SELECT exp FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
			$levelup = $_QFG['db']->result("SELECT levelup FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
			$levelup_arr = 'false';
			if($exp_arr >= $levelup && $levelup < 93001) {
				include("source/nc/plus/levelup.php"); //Upgrade Tips
			}
			$echo_str[] = '{"code":1,"direction":"' . $Tips['weed_b'] . '","exp":2,"farmlandIndex":' . $id . ',"levelUp":' . $levelup_arr . ',"money":2,"poptype":1,"weed":' . $f . '}';
		}
	} else die('{"code":0,"direction":"Không cần diệt cỏ!","farmlandIndex":' . $id . ',"poptype":1,"weed":' . $f . '}');
	foreach($p as $pk => $pv) {
		if($pv == 2) {
			unset($p[$pk]);
			break;
		}
	}
	$status[$id]['p'] = $p;
	$status[$id]['f'] = $f;
}
$_QFG['db']->query("UPDATE app_qqfarm_user set money = money + 2 where uid=" . $_QFG['uid']);

if($ownerId == $_QFG['uid']) {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "' where uid=" . $_QFG['uid']);
	qf_addFeed('farmlandstaus_clearweed1');
} else {
	$_QFG['db']->query("UPDATE app_qqfarm_nc set status='" . qf_encode(array_values($status)) . "' where uid=" . $ownerId);
	qf_addFeed('farmlandstaus_clearweed2');
	//Help weed log
	$result = $_QFG['db']->fetchOne("SELECT `id`,`counts` FROM  app_qqfarm_nclogs WHERE fromid = " . $_QFG['uid'] . " and type=2 and uid = " . $ownerId . " and time > " . ($_QFG['timestamp'] - 3600));
	if($result != null) {
		if(strpos($result['counts'], ':') !== false) {
			$counts_ = explode(':', $result['counts']);
			$counts_[0]++;
			$counts_all = join(':', $counts_);
		} else {
			$counts_all = "1:0:0";
		}
		$sql = "UPDATE app_qqfarm_nclogs set count = count+1,counts='{$counts_all}',time = " . $_QFG['timestamp'] . " where id = " . $result['id'];
	} else {
		$sql = "INSERT INTO app_qqfarm_nclogs (`uid`, `type`, `count`,`counts`, `fromid`, `time`, `cropid`, `isread` ) VALUES (" . $ownerId . ", 2, 1,'1:0:0', " . $_QFG['uid'] . ", " . $_QFG['timestamp'] . ", 0, 0);";
	}
	$_QFG['db']->query($sql);
}

echo '[' . implode(',', $echo_str) . ']';

?>