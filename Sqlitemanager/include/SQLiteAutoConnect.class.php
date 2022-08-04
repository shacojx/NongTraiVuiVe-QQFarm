<?php
include_once INCLUDE_LIB . 'sqlite.class.php';

class SQLiteAutoConnect {

    function sqliteGetInstance($dbPath, $forceVersion = null) {
    	if(!$forceVersion) {
    		if($dbPath == ':memory:') $dbVersion = min($GLOBALS['sqliteVersionAvailable']);
    		else $dbVersion = sqlite::getDbVersion($dbPath);
    	} else {
    		$dbVersion = $forceVersion;
    	}
		if($dbVersion && (($dbVersion == 2) || ($dbVersion == 3)) ) {
			include_once INCLUDE_LIB . 'sqlite'.$dbVersion.'.class.php';
	    	$classObj = 'sqlite' . $dbVersion;
			return new $classObj($dbPath);
    	} else return false;
    }
}
?>