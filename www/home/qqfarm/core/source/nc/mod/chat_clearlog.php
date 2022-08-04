<?php

# Clear Log

$query = $_QFG['db']->query("DELETE FROM app_qqfarm_nclogs where uid = " . $_QFG['uid']);

echo '{"code":1}';

?>