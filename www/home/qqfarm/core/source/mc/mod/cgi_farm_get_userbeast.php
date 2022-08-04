<?php

# User information put Yang
qf_getCache('cropstype', '/nc/');
qf_getCache('animaltype', '/mc/');
$ownerId = (int)$_REQUEST['ownerId'];

$list = $_QFG['db']->fetchOne("select beasts from app_qqfarm_user where uid=".$_QFG['uid']);
$beasts = qf_decode($list['beasts']);
$beastsall =  array();
foreach($beasts['beasts'] as $key => $value) {
	if($value['leftraise'] <= 0 && !$value['fid'] && $value['status'] ) {
		$beasts['beasts'][$key]['status'] = 5;
		$beastsall[$key] = array("curblood"=>$beasts['beasts'][$key]['curblood'],"income"=>$value['income'],"isfarm"=>$value['isfarm'],"isqz"=>0,"leftraise"=>$value['leftraise'],"restleft"=>($value['totalblood']-$beasts['beasts'][$key]['curblood'])*6,"price"=>$value['price'],"status"=>$beasts['beasts'][$key]['status'],"totalblood"=>$value['totalblood'],"type"=>$value['type']);	
	} elseif($value['status'] == 1 && $value['curblood'] = $value['totalblood']){

		$beastsall[$key] = array("curblood"=>$value['curblood'],"income"=>$value['income'],"leftraise"=>$value['leftraise'],"price"=>$value['price'],"status"=>$value['status'],"totalblood"=>$value['totalblood'],"type"=>$value['type']);

	} elseif($value['status'] == 2 && $_QFG['timestamp'] < $value['returntime']){
		$up = 1;
		$beasts['beasts'][$key]['curblood'] = round(($value['returntime'] -$_QFG['timestamp'])/360);
		$beastsall[$key] = array("curblood"=>$beasts['beasts'][$key]['curblood'],"fid"=>$value['fid'],"income"=>$value['income'],"isfarm"=>$value['isfarm'],"isqz"=>0,"leftraise"=>$value['leftraise'],"price"=>$value['price'],"status"=>2,"totalblood"=>$value['totalblood'],"type"=>$value['type']);

	} elseif($_QFG['timestamp'] > $value['returntime'] && $value['returntime']){

		if($_QFG['timestamp'] < $value['returntime']+5*3600){
			if($value['fid']){
				$beastsinfo = $_QFG['db']->result("SELECT beasts FROM app_qqfarm_user where uid=" . $value['fid']);
				$beastsinfo = qf_decode($beastsinfo);
				foreach($beastsinfo['info'] as $fkey => $fvalue) {
					if($fvalue['fid']==$_QFG['uid']) unset($beastsinfo['info'][$fkey]);
				}
				$num = ($value['returntime'] - $value['raisetime'])/3600;

				if((int)$value['isfarm']==1){
					$nc_status = $_QFG['db']->result("SELECT status FROM app_qqfarm_nc where uid=" . $value['fid']);
					$nc_status = qf_decode($nc_status);
					foreach($nc_status as $nkey => $nvalue) {
						if($nc_status[$nkey]['m']>0 && $nc_status[$nkey]['m'] > $nc_status[$nkey]['l']){
							$status[$nkey]['m'] -=(int)$num;
							$income = $cropstype[$nvalue['a']]['sale'] * (int)$num;;
							break;
						}
					}
					$_QFG['db']->query("update app_qqfarm_nc set status='".qf_encode(array_values($nc_status))."' where uid=" . $value['fid']);

				} else {
					$status = $_QFG['db']->result("SELECT status FROM app_qqfarm_mc where uid=" . $value['fid']);
					$status = qf_decode($status);
					foreach($status as $skey => $svalue) {
						if($status[$skey]['totalCome']>0 && $status[$skey]['totalCome'] > ceil($animaltype[$svalue['cId']]['output']*0.6)){
							$status[$skey]['totalCome'] -=(int)$num;
							$income = $animaltype[$svalue['cId']]['byproductprice'] * (int)$num;	
							break;
						}
					}
					$_QFG['db']->query("update app_qqfarm_mc set status='".qf_encode(array_values($status))."' where uid=" . $value['fid']);

				}

				$beasts['beasts'][$key]['status'] = 3;
				$beasts['beasts'][$key]['income'] += $income;
				$beasts['beasts'][$key]['fincome'] += $income;
				$_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beastsinfo)."' where uid=" . $value['fid']);

			} else $beasts['beasts'][$key]['status'] = 4;
			$beasts['beasts'][$key]['curblood'] = round(($_QFG['timestamp']-$value['returntime'])/(5*3600/$value['totalblood']));
			$beasts['beasts'][$key]['return'] = 1;
			unset($beasts['beasts'][$key]['fid']);
		} else {
			if($value['fid']){
				$beastsinfo = $_QFG['db']->result("SELECT beasts FROM app_qqfarm_user where uid=" . $value['fid']);
				$beastsinfo = qf_decode($beastsinfo);
				foreach($beastsinfo['info'] as $fkey => $fvalue) {
					if($fvalue['fid']==$_QFG['uid']) unset($beastsinfo['info'][$fkey]);
				}
				$num = ($value['returntime'] - $value['raisetime'])/3600;

				if((int)$value['isfarm']==1){
					$nc_status = $_QFG['db']->result("SELECT status FROM app_qqfarm_nc where uid=" . $value['fid']);
					$nc_status = qf_decode($nc_status);
					foreach($nc_status as $nkey => $nvalue) {
						if($nc_status[$nkey]['m']>0 && $nc_status[$nkey]['m'] > $nc_status[$nkey]['l']){
							$status[$nkey]['m'] -=(int)$num;
							$income = $cropstype[$nvalue['a']]['sale'] * (int)$num;;
							break;
						}
					}
					$_QFG['db']->query("update app_qqfarm_nc set status='".qf_encode(array_values($nc_status))."' where uid=" . $value['fid']);

				} else {
					$status = $_QFG['db']->result("SELECT status FROM app_qqfarm_mc where uid=" . $value['fid']);
					$status = qf_decode($status);
					foreach($status as $skey => $svalue) {
						if($status[$skey]['totalCome']>0 && $status[$skey]['totalCome'] > ceil($animaltype[$svalue['cId']]['output']*0.6)){
							$status[$skey]['totalCome'] -=(int)$num;
							$income = $animaltype[$svalue['cId']]['byproductprice'] * (int)$num;	
							break;
						}
					}
					$_QFG['db']->query("update app_qqfarm_mc set status='".qf_encode(array_values($status))."' where uid=" . $value['fid']);

				}

				$beasts['beasts'][$key]['status'] = 3;
				$beasts['beasts'][$key]['income'] += $income;
				$beasts['beasts'][$key]['fincome'] += $income;
			} else $beasts['beasts'][$key]['status'] = 1;
			$beasts['beasts'][$key]['curblood'] = $value['totalblood'];
			$beasts['beasts'][$key]['return'] = 1;
			unset($beasts['beasts'][$key]['fid']);	
		}
		
		$up = 1;

		$beastsall[$key] = array("curblood"=>$beasts['beasts'][$key]['curblood'],"income"=>($value['income']+$income),"isfarm"=>$value['isfarm'],"isqz"=>0,"leftraise"=>$value['leftraise'],"restleft"=>($value['totalblood']-$beasts['beasts'][$key]['curblood'])*6,"price"=>$value['price'],"status"=>$beasts['beasts'][$key]['status'],"totalblood"=>$value['totalblood'],"type"=>$value['type']);
	} else {
		$beastsall[$key] = '';
	}

}

$up == 1 && $_QFG['db']->query("update app_qqfarm_user set beasts='".qf_encode($beasts)."' where uid=" . $_QFG['uid']);

echo '{"beasts":'.qf_jsonCode($beastsall).',"ecode":0,"maxslotid":'.(int)$beasts['maxslotid'].'}';

?>