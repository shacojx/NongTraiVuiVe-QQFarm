<?php
/**
 * Game Help
 * Modify by seaif@zealv.com
 */


$type = in_array($_GET['type'], array('nc', 'mc')) ? $_GET['type'] : 'nc';

qf_getView("tools/help");

?>