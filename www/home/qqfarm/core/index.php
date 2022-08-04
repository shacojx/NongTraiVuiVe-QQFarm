<?php
/**
 * User entry
 * QFarm User Interface
 */


include('common.php');
$auth = qf_checkauth(); //Check the login status

// Scheduled Task
if($_GET['mod'] == 'cron') {
	include("source/cron/run.php");
}

?>