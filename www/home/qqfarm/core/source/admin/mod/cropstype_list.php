<?php

# System Configuration
	qf_getCache('cropstype', '/nc/');
	$farm_list = $cropstype;
	qf_getView("admin/cropstype_list");
?>