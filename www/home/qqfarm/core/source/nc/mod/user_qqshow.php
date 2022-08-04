<?php

# Buy gold decoration
$sex = 'M';
if(mt_rand(1,2)>1) $sex = 'F';

echo '{"code":"0","uin":"1000'.$_QFG['uid'].'","showtype":"0","red":"0","style":"1","sex":"'.$sex.'"}';

?>