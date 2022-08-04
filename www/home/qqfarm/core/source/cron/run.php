<?php
//Job entry
//Modify by seaif@zealv.com

error_reporting(0); //Job entry
ignore_user_abort(true); //Ignoring the client browser is closed
set_time_limit(0); //Program execution time is set to the end of that process

define('CRON_WAIT', 600);//Listening time (unit: seconds)
define('CRON_ROOT', 'source/cron'); //CRON program path
define('CRON_DATA', 'data/cron'); //CRON log path
define('CRON_LOCK', 'data/cron/run.lock'); //Monitor lock
is_dir(CRON_DATA) || mkdir(CRON_DATA, 0777, true);


//Monitoring to ensure that the script only once
if(time() - @filemtime(CRON_LOCK) < CRON_WAIT) {
	die('running...');
} else touch(CRON_LOCK);

//All scheduled tasks
$crons = array(
	strtotime(date("Y-m-d") . ' 00:00:01') => 'daily',
	strtotime(date("Y-m-d") . ' 06:00:01') => 'weather'
);


//Failed to perform two tasks is due
if($timeArr = array_filter(array_keys(array_unique($crons)), 'oldTime')) {
	for($i=0; $i<count($timeArr); $i++) {
		if($i>1) { break; }
		$timeOld = $timeArr[$i];
		$cron_file = CRON_ROOT . '/' . $crons[$timeOld] . '.php';
		$cron_over = CRON_DATA . '/' . $timeOld . '.' . $crons[$timeOld];
		if(time() - @filemtime($cron_over) > 86400) {
			touch(CRON_LOCK);//Delay time of the next monitoring
			if(@include($cron_file)) {
				//echo $crons[$timeOld] . " runned.</br>\r\n";
				touch($cron_over);//Records have been implemented
				unset($crons[$timeOld]);
			}
		}
	}
}

//Wait a monitoring tasks to be performed during the
if($timeArr = array_filter(array_keys($crons), 'newTime')) {
	$timeNew = min($timeArr);
	if($timeNew - time() < CRON_WAIT) {
		//echo 'to run ' . $crons[$timeNew];
		sleep($timeNew - time());//Wait for the next task
		touch(CRON_LOCK);//Delay time of the next monitoring
		$cron_file = CRON_ROOT . '/' . $crons[$timeNew] . '.php';
		$cron_over = CRON_DATA . '/' . $timeNew . '.' . $crons[$timeNew];
		if(@include($cron_file)) {
			touch($cron_over);//Records have been implemented
		}
	}
}

//Filter
function oldTime($now) {
	return $now <= time();
}
function newTime($now) {
	return $now > time();
}

?>