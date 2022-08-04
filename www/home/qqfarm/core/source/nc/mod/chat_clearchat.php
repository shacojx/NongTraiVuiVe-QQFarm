<?php

# Clear message

$query = $_QFG['db']->query("DELETE FROM app_qqfarm_message where toID = " . $_QFG['uid']);

echo '{"code":1}';

?>