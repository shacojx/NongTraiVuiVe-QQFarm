<?php
//Crop growth cycle
$cropstime = array(
	"2001" => array(18000,36000,54000,72000,90000,2000000000),
	"2002" => array(18000,36000,54000,72000,90000,2000000000),
	"2003" => array(18000,36000,54000,72000,90000,2000000000),
	"2004" => array(18000,36000,54000,72000,90000,2000000000),
	"2005" => array(18000,36000,54000,72000,90000,2000000000),
	"2006" => array(18000,36000,54000,72000,90000,2000000000),
	"2007" => array(18000,36000,54000,72000,90000,2000000000),
	"2008" => array(18000,36000,54000,72000,90000,2000000000),
	"1" => array(14400,28800,46800,64800,86400,2000000000),
	"2" => array(7200,14400,25200,36000,36000,2000000000),
	"3" => array(7200,18000,32400,46800,46800,2000000000),
	"4" => array(7200,14400,25200,36000,50400,2000000000),
	"5" => array(7200,14400,25200,39600,54000,2000000000),
	"6" => array(7200,18000,28800,43200,57600,2000000000),
	"7" => array(7200,18000,32400,46800,61200,2000000000),
	"8" => array(10800,21600,32400,46800,64800,2000000000),
	"9" => array(10800,25200,39600,54000,72000,2000000000),
	"10" => array(10800,25200,43200,61200,79200,2000000000),
	"11" => array(14400,28800,43200,57600,75600,2000000000),
	"13" => array(28800,61200,93600,129600,165600,2000000000),
	"14" => array(14400,32400,54000,75600,100800,2000000000),
	"15" => array(18000,39600,61200,86400,111600,2000000000),
	"16" => array(28800,46800,64800,86400,100800,2000000000),
	"17" => array(18000,36000,54000,72000,90000,2000000000),
	"18" => array(28800,57600,86400,118800,151200,2000000000),
	"19" => array(25200,50400,75600,104400,133200,2000000000),
	"20" => array(21600,39600,61200,82800,104400,2000000000),
	"21" => array(28800,57600,86400,115200,144000,2000000000),
	"22" => array(25200,54000,75600,97200,115200,2000000000),
	"23" => array(36000,72000,108000,147600,187200,2000000000),
	"24" => array(18000,39600,64800,93600,126000,2000000000),
	"25" => array(18000,43200,72000,97200,126000,2000000000),
	"26" => array(39600,82800,126000,172800,219600,2000000000),
	"27" => array(43200,90000,136800,183600,230400,2000000000),
	"28" => array(21600,36000,54000,72000,90000,2000000000),
	"29" => array(36000,75600,115200,154800,198000,2000000000),
	"30" => array(18000,36000,54000,72000,90000,2000000000),
	"31" => array(39600,82800,126000,172800,219600,2000000000),
	"32" => array(21600,43200,64800,86400,108000,2000000000),
	"33" => array(46800,97200,147600,198000,252000,2000000000),
	"34" => array(50400,100800,151200,205200,259200,2000000000),
	"35" => array(54000,108000,165600,219600,277200,2000000000),
	"36" => array(21600,43200,64800,86400,108000,2000000000),
	"37" => array(21600,46800,75600,100800,122400,2000000000),
	"38" => array(28800,61200,93600,129600,165600,2000000000),
	"39" => array(28800,61200,93600,129600,165600,2000000000),
	"40" => array(7200,14400,21600,28800,28800,2000000000),
	"41" => array(10800,21600,32400,46800,64800,2000000000),
	"42" => array(18000,39600,61200,86400,111600,2000000000),
	"43" => array(28800,57600,86400,118800,151200,2000000000),
	"44" => array(18000,39600,61200,86400,111600,2000000000),
	"45" => array(28800,61200,93600,129600,165600,2000000000),
	"46" => array(18000,39600,61200,86400,111600,2000000000),
	"47" => array(18000,39600,61200,86400,111600,2000000000),
	"48" => array(18000,39600,61200,86400,111600,2000000000),
	"49" => array(28800,57600,86400,118800,151200,2000000000),
	"50" => array(25200,50400,79200,108000,108000,2000000000),
	"51" => array(7200,18000,28800,43200,57600,2000000000),
	"52" => array(28800,57600,86400,118800,151200,2000000000),
	"53" => array(18000,39600,61200,86400,111600,2000000000),
	"54" => array(21600,43200,64800,90000,115200,2000000000),
	"55" => array(28800,57600,86400,118800,151200,2000000000),
	"56" => array(18000,39600,61200,86400,111600,2000000000),
	"57" => array(18000,39600,61200,86400,111600,2000000000),
	"58" => array(18000,39600,61200,86400,111600,2000000000),
	"59" => array(7200,14400,25200,36000,50400,2000000000),
	"60" => array(7200,14400,25200,36000,50400,2000000000),
	"61" => array(7200,14400,25200,36000,50400,2000000000),
	"62" => array(14400,28800,46800,64800,82800,2000000000),
	"63" => array(18000,39600,61200,86400,111600,2000000000),
	"64" => array(7200,14400,25200,25200,39600,2000000000),
	"65" => array(7200,18000,25200,36000,50400,2000000000),
	"66" => array(7200,14400,25200,25200,39600,2000000000),
	"67" => array(21600,43200,68400,97200,126000,2000000000),
	"68" => array(18000,39600,61200,86400,111600,2000000000),
	"69" => array(36000,75600,115200,154800,198000,2000000000),
	"70" => array(14400,32400,54000,75600,100800,2000000000),
	"71" => array(7200,14400,25200,25200,39600,2000000000),
	"72" => array(28800,61200,93600,129600,165600,2000000000),
	"73" => array(10800,25200,43200,43200,61200,2000000000),
	"74" => array(18000,39600,61200,86400,111600,2000000000),
	"75" => array(18000,39600,61200,86400,111600,2000000000),
	"76" => array(18000,39600,61200,86400,111600,2000000000),
	"77" => array(18000,39600,61200,86400,111600,2000000000),
	"78" => array(18000,39600,61200,86400,111600,2000000000),
	"79" => array(18000,39600,61200,86400,111600,2000000000),
	"80" => array(18000,39600,61200,86400,111600,2000000000),
	"81" => array(7200,14400,25200,36000,46800,2000000000),
	"82" => array(18000,39600,75600,104400,133200,2000000000),
	"83" => array(21600,46800,64800,90000,118800,2000000000),
	"84" => array(21600,39600,57600,79200,104400,2000000000),
	"85" => array(18000,43200,64800,93600,111600,2000000000),
	"86" => array(21600,43200,61200,82800,108000,2000000000),
	"87" => array(21600,43200,64800,86400,108000,2000000000),
	"88" => array(21600,39600,57600,79200,104400,2000000000),
	"89" => array(21600,39600,57600,79200,104400,2000000000),
	"90" => array(21600,39600,57600,82800,108000,2000000000),
	"91" => array(10800,25200,43200,57600,79200,2000000000),
	"92" => array(28800,61200,93600,129600,165600,2000000000),
	"93" => array(18000,36000,54000,72000,90000,2000000000),
	"94" => array(18000,36000,54000,72000,90000,2000000000),
	"95" => array(21600,43200,64800,86400,108000,2000000000),
	"96" => array(10800,21600,36000,50400,68400,2000000000),
	"97" => array(14400,32400,54000,79200,100800,2000000000),
	"98" => array(21600,43200,64800,82800,100800,2000000000),
	"99" => array(14400,28800,46800,61200,61200,2000000000),
	"100" => array(18000,36000,54000,72000,90000,2000000000),
	"101" => array(39600,82800,126000,172800,219600,2000000000),
	"102" => array(43200,90000,136800,183600,230400,2000000000),
	"103" => array(10800,25200,39600,54000,72000,2000000000),
	"104" => array(14400,28800,43200,57600,75600,2000000000),
	"105" => array(7200,18000,32400,46800,61200,2000000000),
	"106" => array(36000,72000,108000,147600,187200,2000000000),
	"107" => array(21600,43200,64800,90000,115200,2000000000),
	"108" => array(21600,43200,64800,90000,115200,2000000000),
	"109" => array(43200,90000,136800,183600,230400,2000000000),
	"110" => array(18000,36000,54000,72000,90000,2000000000),
	"111" => array(14400,32400,54000,75600,100800,2000000000),
	"112" => array(18000,39600,61200,86400,111600,2000000000),
	"113" => array(25200,50400,75600,104400,133200,2000000000),
	"114" => array(28800,57600,86400,118800,151200,2000000000),
	"117" => array(18000,39600,61200,86400,111600,2000000000),
	"118" => array(18000,39600,61200,86400,111600,2000000000),
	"119" => array(18000,39600,61200,86400,111600,2000000000),
	"121" => array(28800,61200,93600,129600,165600,2000000000),
	"122" => array(18000,39600,61200,86400,111600,2000000000),
	"123" => array(54000,108000,165600,219600,277200,2000000000),
	"125" => array(18000,39600,61200,86400,111600,2000000000),
	"126" => array(25200,50400,75600,100800,126000,2000000000),
	"127" => array(25200,50400,75600,100800,126000,2000000000),
	"128" => array(25200,50400,75600,100800,126000,2000000000),
	"129" => array(21600,43200,64800,93600,122400,2000000000),
	"130" => array(25200,50400,72000,93600,111600,2000000000),
	"131" => array(18000,32400,50400,82800,97200,2000000000),
	"133" => array(21600,43200,64800,86400,108000,2000000000),
	"134" => array(14400,28800,43200,57600,72000,2000000000),
	"135" => array(14400,28800,43200,57600,72000,2000000000),
	"136" => array(14400,28800,43200,57600,72000,2000000000),
	"137" => array(54000,108000,162000,216000,270000,2000000000),
	"138" => array(14400,28800,46800,64800,82800,2000000000),
	"139" => array(14400,28800,43200,57600,72000,2000000000),
	"140" => array(14400,28800,43200,57600,72000,2000000000),
	"141" => array(14400,28800,43200,57600,72000,2000000000),
	"142" => array(14400,28800,43200,57600,72000,2000000000),
	"143" => array(10800,21600,32400,46800,64800,2000000000),
	"144" => array(18000,39600,61200,86400,111600,2000000000),
	"145" => array(14400,28800,43200,57600,75600,2000000000),
	"146" => array(7200,18000,28800,43200,57600,2000000000),
	"147" => array(18000,36000,54000,72000,90000,2000000000),
	"148" => array(21600,36000,54000,72000,90000,2000000000),
	"151" => array(14400,32400,54000,75600,100800,2000000000),
	"153" => array(18000,36000,54000,72000,90000,2000000000),
	"154" => array(18000,36000,54000,72000,90000,2000000000),
	"158" => array(14400,28800,46800,64800,82800,2000000000),
	"159" => array(18000,39600,61200,86400,111600,2000000000),
	"160" => array(21600,39600,57600,79200,104400,2000000000),
	"161" => array(18000,36000,54000,72000,90000,2000000000),
	"162" => array(18000,36000,54000,72000,90000,2000000000),
	"164" => array(18000,39600,61200,90000,111600,2000000000),
	"165" => array(21600,43200,64800,90000,115200,2000000000),	
	"166" => array(36000,68400,104400,140400,169200,2000000000),	
	"167" => array(14400,32400,50400,68400,86400,2000000000),	
	"168" => array(21600,36000,54000,72000,90000,2000000000),
	"169" => array(7200,18000,28800,39600,57600,2000000000),
	"170" => array(7200,18000,28800,39600,57600,2000000000),
	"171" => array(7200,18000,28800,39600,57600,2000000000),
	"172" => array(18000,39600,61200,86400,111600,2000000000),
	"173" => array(18000,39600,61200,86400,111600,2000000000),
	"174" => array(18000,39600,61200,86400,111600,2000000000),
	"175" => array(18000,39600,61200,86400,111600,2000000000),
	"176" => array(18000,39600,61200,86400,111600,2000000000),
	"177" => array(18000,36000,54000,72000,90000,2000000000),
	"178" => array(28800,57600,93600,136800,165600,2000000000),
	"179" => array(18000,36000,54000,72000,90000,2000000000),
	"186" => array(21600,43200,64800,90000,115200,2000000000),
	"187" => array(28800,57600,86400,118800,151200,2000000000),
	"190" => array(18000,39600,61200,86400,111600,2000000000),
	"191" => array(18000,39600,61200,86400,111600,2000000000),
	"194" => array(21600,36000,54000,72000,90000,2000000000),
	"195" => array(18000,39600,61200,86400,111600,2000000000),
	"197" => array(14400,32400,54000,75600,100800,2000000000),
	"198" => array(21600,36000,54000,72000,90000,2000000000),
	"201" => array(32400,64800,90000,115200,133200,2000000000),
	"202" => array(21600,43200,64800,86400,108000,2000000000),
	"204" => array(28800,61200,90000,122400,151200,2000000000),
	"205" => array(14400,28800,46800,64800,82800,2000000000),
	"206" => array(28800,54000,82800,115200,144000,2000000000),
	"208" => array(32400,64800,97200,129600,162000,2000000000),
	"209" => array(32400,64800,100800,133200,165600,2000000000),
	"210" => array(36000,68400,100800,133200,165600,2000000000),
	"211" => array(32400,64800,97200,129600,165600,2000000000),
	"218" => array(18000,36000,54000,72000,90000,2000000000),
	"219" => array(28800,57600,86400,115200,144000,2000000000),
	"220" => array(21600,43200,64800,86400,108000,2000000000),
	"221" => array(18000,32400,54000,79200,108000,2000000000),
	"222" => array(25200,50400,75600,104400,133200,2000000000),
	"223" => array(28800,57600,86400,118800,151200,2000000000),
	"224" => array(54000,108000,165600,219600,277200,2000000000),
	"225" => array(32400,68400,104400,140400,176400,2000000000),
	"226" => array(21600,43200,64800,93600,118800,2000000000),
	"227" => array(18000,39600,72000,104400,136800,2000000000),
	"228" => array(28800,61200,100800,129600,158400,2000000000),
	"229" => array(28800,57600,86400,115200,144000,2000000000),
	"230" => array(28800,57600,86400,115200,144000,2000000000),
	"231" => array(28800,54000,82800,115200,144000,2000000000),
	"232" => array(25200,50400,75600,100800,126000,2000000000),
	"233" => array(32400,64800,97200,129600,162000,2000000000),
	"234" => array(25200,46800,79200,97200,129600,2000000000),
	"235" => array(21600,54000,82800,111600,136800,2000000000),
	"236" => array(10800,25200,39600,54000,72000,2000000000),
	"237" => array(18000,39600,61200,86400,111600,2000000000),
	"238" => array(36000,72000,108000,147600,187200,2000000000),
	"239" => array(21600,43200,64800,90000,115200,2000000000),
	"240" => array(18000,39600,61200,86400,111600,2000000000),
	"241" => array(18000,39600,61200,86400,111600,2000000000),
	"242" => array(36000,72000,108000,144000,180000,2000000000),
	"243" => array(36000,72000,108000,144000,180000,2000000000),
	"244" => array(32400,64800,97200,129600,162000,2000000000),
	"245" => array(7200,14400,25200,39600,54000,2000000000),
	"246" => array(28800,57600,86400,115200,144000,2000000000),
	"247" => array(28800,57600,86400,115200,144000,2000000000),
	"249" => array(32400,64800,97200,129600,162000,2000000000),
	"301" => array(32400,64800,97200,129600,162000,2000000000),
	"302" => array(32400,68400,104400,136800,169200,2000000000),
	"303" => array(36000,72000,108000,144000,180000,2000000000),
	"304" => array(32400,64800,97200,133200,169200,2000000000),
	"305" => array(7200,18000,32400,46800,61200,2000000000),
	"306" => array(10800,25200,39600,54000,72000,2000000000),
	"309" => array(25200,50400,75600,100800,126000,2000000000),
	"310" => array(18000,39600,61200,86400,111600,2000000000),
	"311" => array(14400,32400,50400,68400,86400,2000000000),
	"312" => array(14400,32400,50400,68400,86400,2000000000),
	"313" => array(14400,32400,50400,68400,86400,2000000000),
	"314" => array(32400,68400,104400,136800,169200,2000000000),
	"315" => array(25200,50400,75600,100800,126000,2000000000),
	"316" => array(7200,18000,32400,39600,46800,2000000000),
	"317" => array(7200,14400,25200,36000,50400,2000000000),
	"318" => array(7200,14400,25200,36000,50400,2000000000),
	"319" => array(7200,14400,25200,36000,50400,2000000000),
	"320" => array(7200,14400,25200,36000,50400,2000000000),
	"321" => array(7200,18000,28800,43200,57600,2000000000),
	"322" => array(7200,18000,32400,46800,61200,2000000000),
	"323" => array(10800,21600,32400,46800,64800,2000000000),
	"324" => array(10800,25200,39600,54000,72000,2000000000),
	"325" => array(10800,25200,43200,61200,79200,2000000000),
	"326" => array(32400,68400,104400,136800,169200,2000000000),
	"327" => array(21600,39600,57600,79200,104400,2000000000),
	"328" => array(21600,39600,61200,82800,104400,2000000000),
	"329" => array(21600,43200,61200,82800,108000,2000000000),
	"330" => array(18000,39600,61200,82800,111600,2000000000),
	"332" => array(28800,61200,93600,129600,165600,2000000000),
	"333" => array(28800,61200,93600,129600,165600,2000000000),
	"334" => array(7200,18000,28800,43200,57600,2000000000),
	"340" => array(18000,39600,61200,86400,111600,2000000000),
	"341" => array(18000,39600,61200,86400,111600,2000000000),
	"342" => array(18000,39600,61200,86400,111600,2000000000),
	"343" => array(18000,39600,61200,86400,111600,2000000000),
	"344" => array(18000,39600,61200,86400,111600,2000000000),
	"345" => array(18000,39600,61200,86400,111600,2000000000),
	"346" => array(18000,39600,61200,86400,111600,2000000000),
	"347" => array(18000,39600,61200,86400,111600,2000000000),
	"348" => array(18000,39600,61200,86400,111600,2000000000),
	"349" => array(18000,39600,61200,86400,111600,2000000000),
	"350" => array(18000,39600,61200,86400,111600,2000000000),
	"351" => array(18000,39600,61200,86400,111600,2000000000),
	"352" => array(18000,39600,61200,86400,111600,2000000000),
	"353" => array(18000,39600,61200,86400,111600,2000000000),
	"354" => array(18000,39600,61200,86400,111600,2000000000),
	"355" => array(18000,39600,61200,86400,111600,2000000000),
	"356" => array(18000,39600,61200,86400,111600,2000000000),
	"357" => array(18000,39600,61200,86400,111600,2000000000),
	"358" => array(18000,39600,61200,86400,111600,2000000000),
	"359" => array(18000,39600,61200,86400,111600,2000000000),
	"360" => array(18000,39600,61200,86400,111600,2000000000),
	"361" => array(18000,39600,61200,86400,111600,2000000000),
	"362" => array(18000,39600,61200,86400,111600,2000000000),
	"363" => array(18000,39600,61200,86400,111600,2000000000),
	"364" => array(18000,39600,61200,86400,111600,2000000000),
	"365" => array(18000,39600,61200,86400,111600,2000000000),
	"366" => array(21600,46800,64800,90000,118800,2000000000),
	"367" => array(18000,36000,54000,72000,90000,2000000000)

);
?>