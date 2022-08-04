<?php

# Accessories shop

//Hidden configuration
qf_getCache('_HIDE');

foreach($itemtype as $key => $value) {
	if(in_array($value['itemId'], $_HIDE['item'])){
		unset($itemtype[$key]);
	}
}

echo qf_jsonCode(array_values($itemtype));

?>