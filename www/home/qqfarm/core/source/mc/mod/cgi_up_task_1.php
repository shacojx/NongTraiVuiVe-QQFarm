<?php

# Task 1 novice

$taskid = $_QFG['db']->result('SELECT taskid FROM app_qqfarm_mc where uid=' . $_QFG['uid']);
echo '{"taskFlag":1,"taskId":' . $taskid . '}';

?>
