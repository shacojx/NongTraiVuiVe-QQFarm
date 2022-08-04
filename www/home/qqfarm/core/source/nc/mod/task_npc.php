<?php

# NPC Tasks

if($_QSC['missionName']) {
	@include("source/nc/mission/{$_QSC['missionName']}_npc.php");
}

?>