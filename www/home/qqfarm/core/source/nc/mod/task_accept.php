<?php

# Novice Task Tips

$taskid = $_QFG['db']->result("SELECT taskid FROM app_qqfarm_nc where uid=" . $_QFG['uid']);
echo '{"taskId":' . $taskid . '}';

?>
