<?php
//农场:data_zh_CN_v_17.xml

$nc_data = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<data>

	<!-- http请求地址及其他杂项环境配置 -->
	<environment>
		<postUrl_qz url="$url/mync.php?" />
		<postUrl_xy url="$url/mync.php?" />
		<fbRequest url="mod=gb_buy" />
		<cftRequest url="mod=gb_buy" />
		<vipIntroduce url="$url/tools.php?mod=vip" />
		<defaultPhoto url="" />
		<speedReport url="" />
		<items maxid="90012" />
	</environment>

	<!-- 次要异步下载资源 -->
	<secondList type="json">
		<![CDATA[
		{"secondList" : [
		{"id":"RequestErrorBG", "src":"$url/module/ui/main/RequestError_2.swf", "className":"RequestErrorBG"},
		{"id":"redUpBanner", "src":"$url/module/ui/main/redUpBanner_v_1.swf", "className":"redUpBanner"},
		{"id":"redup", "src":"$url/module/ui/main/RedUp.swf", "className":"Red"},
		{"id":"FDog1", "src":"$url/module/ui/dogs/FDog1_v_1.swf", "className":"FDog1"},
		{"id":"FDog2", "src":"$url/module/ui/dogs/FDog3_v_1.swf", "className":"FDog2"},
		{"id":"FDog3", "src":"$url/module/ui/dogs/FDog2_v_1.swf", "className":"FDog3"},
		{"id":"FDog4", "src":"$url/module/ui/dogs/FDog4_v_1.swf", "className":"FDog4"},
		{"id":"FDog5", "src":"$url/module/ui/dogs/FDog5_v_1.swf", "className":"FDog5"},
		{"id":"FDog6", "src":"$url/module/ui/dogs/FDog6_v_1.swf", "className":"FDog6"},
		{"id":"FDog7", "src":"$url/module/ui/dogs/FDog7_v_1.swf", "className":"FDog7"},
		{"id":"FDog7", "src":"$url/module/ui/dogs/FDog90b.swf", "className":"FDog8"},
		{"id":"help", "src":"$url/module/ui/main/outswf/help.swf"},
		{"id":"fresherTask", "src":"$url/module/ui/main/task.swf?v=42", "className":"taskAwokeButton"},
		{"id":"98088", "src":"$url/module/ui/farm/diy/98088.jpg"},
		{"id":"98088b", "src":"$url/module/ui/farm/diy/98088b.jpg"}]}
		]]>
	</secondList>

	<!-- ===== PLEASE === DO === NOT === EDIT === CONTENT  ===  BELOW === MANUALLY ===== -->

	<!-- 素材列表 -->
	<assets>
        
        <asset id="946" src="$url/module/ui/farm/diy/1.jpg"/>
        <asset id="945" src="$url/module/ui/farm/diy/1.swf"/>
        <asset id="1183" src="$url/module/ui/farm/diy/100.jpg"/>
        <asset id="1182" src="$url/module/ui/farm/diy/100.swf"/>
        <asset id="1184" src="$url/module/ui/farm/diy/100b.jpg"/>
        <asset id="958" src="$url/module/ui/farm/diy/11.jpg"/>
        <asset id="957" src="$url/module/ui/farm/diy/11.swf"/>
        <asset id="959" src="$url/module/ui/farm/diy/11b.jpg"/>
        <asset id="961" src="$url/module/ui/farm/diy/12.jpg"/>
        <asset id="960" src="$url/module/ui/farm/diy/12.swf"/>
        <asset id="962" src="$url/module/ui/farm/diy/12b.jpg"/>
        <asset id="964" src="$url/module/ui/farm/diy/13.jpg"/>
        <asset id="963" src="$url/module/ui/farm/diy/13.swf"/>
        <asset id="965" src="$url/module/ui/farm/diy/13b.jpg"/>
        <asset id="967" src="$url/module/ui/farm/diy/14.jpg"/>
        <asset id="966" src="$url/module/ui/farm/diy/14.swf"/>
        <asset id="968" src="$url/module/ui/farm/diy/14b.jpg"/>
        <asset id="970" src="$url/module/ui/farm/diy/16.jpg"/>
        <asset id="969" src="$url/module/ui/farm/diy/16.swf"/>
        <asset id="971" src="$url/module/ui/farm/diy/16b.jpg"/>
        <asset id="973" src="$url/module/ui/farm/diy/17.jpg"/>
        <asset id="972" src="$url/module/ui/farm/diy/17.swf"/>
        <asset id="974" src="$url/module/ui/farm/diy/17b.jpg"/>
        <asset id="976" src="$url/module/ui/farm/diy/18.jpg"/>
        <asset id="975" src="$url/module/ui/farm/diy/18.swf"/>
        <asset id="977" src="$url/module/ui/farm/diy/18b.jpg"/>
        <asset id="979" src="$url/module/ui/farm/diy/19.jpg"/>
        <asset id="978" src="$url/module/ui/farm/diy/19.swf"/>
        <asset id="980" src="$url/module/ui/farm/diy/19b.jpg"/>
        <asset id="947" src="$url/module/ui/farm/diy/1b.jpg"/>
        <asset id="949" src="$url/module/ui/farm/diy/2.jpg"/>
        <asset id="948" src="$url/module/ui/farm/diy/2.swf"/>
        <asset id="1186" src="$url/module/ui/farm/diy/201.jpg"/>
        <asset id="1185" src="$url/module/ui/farm/diy/201.swf"/>
        <asset id="1187" src="$url/module/ui/farm/diy/201b.jpg"/>
        <asset id="1189" src="$url/module/ui/farm/diy/202.jpg"/>
        <asset id="1188" src="$url/module/ui/farm/diy/202.swf"/>
        <asset id="1190" src="$url/module/ui/farm/diy/202b.jpg"/>
        <asset id="1192" src="$url/module/ui/farm/diy/203.jpg"/>
        <asset id="1191" src="$url/module/ui/farm/diy/203.swf"/>
        <asset id="1193" src="$url/module/ui/farm/diy/203b.jpg"/>
        <asset id="1195" src="$url/module/ui/farm/diy/204.jpg"/>
        <asset id="1194" src="$url/module/ui/farm/diy/204.swf"/>
        <asset id="1196" src="$url/module/ui/farm/diy/204b.jpg"/>
        <asset id="1198" src="$url/module/ui/farm/diy/205.jpg"/>
        <asset id="1197" src="$url/module/ui/farm/diy/205.swf"/>
        <asset id="1199" src="$url/module/ui/farm/diy/205b.jpg"/>
        <asset id="1201" src="$url/module/ui/farm/diy/206.jpg"/>
        <asset id="1200" src="$url/module/ui/farm/diy/206.swf"/>
        <asset id="1202" src="$url/module/ui/farm/diy/206b.jpg"/>
        <asset id="1204" src="$url/module/ui/farm/diy/207.jpg"/>
        <asset id="1203" src="$url/module/ui/farm/diy/207.swf"/>
        <asset id="1205" src="$url/module/ui/farm/diy/207b.jpg"/>
        <asset id="1207" src="$url/module/ui/farm/diy/208.jpg"/>
        <asset id="1206" src="$url/module/ui/farm/diy/208.swf"/>
        <asset id="1208" src="$url/module/ui/farm/diy/208b.jpg"/>
        <asset id="1210" src="$url/module/ui/farm/diy/209.jpg"/>
        <asset id="1209" src="$url/module/ui/farm/diy/209.swf"/>
        <asset id="1211" src="$url/module/ui/farm/diy/209b.jpg"/>
        <asset id="981" src="$url/module/ui/farm/diy/21.jpg"/>
        <asset id="1213" src="$url/module/ui/farm/diy/210.jpg"/>
        <asset id="1212" src="$url/module/ui/farm/diy/210.swf"/>
        <asset id="1214" src="$url/module/ui/farm/diy/210b.jpg"/>
        <asset id="1216" src="$url/module/ui/farm/diy/211.jpg"/>
        <asset id="1215" src="$url/module/ui/farm/diy/211.swf"/>
        <asset id="1217" src="$url/module/ui/farm/diy/211b.jpg"/>
        <asset id="1219" src="$url/module/ui/farm/diy/212.jpg"/>
        <asset id="1218" src="$url/module/ui/farm/diy/212.swf"/>
        <asset id="1220" src="$url/module/ui/farm/diy/212b.jpg"/>
        <asset id="1222" src="$url/module/ui/farm/diy/213.jpg"/>
        <asset id="1221" src="$url/module/ui/farm/diy/213.swf"/>
        <asset id="1223" src="$url/module/ui/farm/diy/213b.jpg"/>
        <asset id="1225" src="$url/module/ui/farm/diy/214.jpg"/>
        <asset id="1224" src="$url/module/ui/farm/diy/214.swf"/>
        <asset id="1226" src="$url/module/ui/farm/diy/214b.jpg"/>
        <asset id="1228" src="$url/module/ui/farm/diy/215.jpg"/>
        <asset id="1227" src="$url/module/ui/farm/diy/215.swf"/>
        <asset id="1229" src="$url/module/ui/farm/diy/215b.jpg"/>
        <asset id="1231" src="$url/module/ui/farm/diy/216.jpg"/>
        <asset id="1230" src="$url/module/ui/farm/diy/216.swf"/>
        <asset id="1232" src="$url/module/ui/farm/diy/216b.jpg"/>
        <asset id="1234" src="$url/module/ui/farm/diy/217.jpg"/>
        <asset id="1233" src="$url/module/ui/farm/diy/217.swf"/>
        <asset id="1235" src="$url/module/ui/farm/diy/217b.jpg"/>
        <asset id="1237" src="$url/module/ui/farm/diy/218.jpg"/>
        <asset id="1236" src="$url/module/ui/farm/diy/218.swf"/>
        <asset id="1238" src="$url/module/ui/farm/diy/218b.jpg"/>
        <asset id="1240" src="$url/module/ui/farm/diy/219.jpg"/>
        <asset id="1239" src="$url/module/ui/farm/diy/219.swf"/>
        <asset id="1241" src="$url/module/ui/farm/diy/219b.jpg"/>
        <asset id="982" src="$url/module/ui/farm/diy/21b.jpg"/>
        <asset id="984" src="$url/module/ui/farm/diy/22.jpg"/>
        <asset id="983" src="$url/module/ui/farm/diy/22.swf"/>
        <asset id="1243" src="$url/module/ui/farm/diy/220.jpg"/>
        <asset id="1242" src="$url/module/ui/farm/diy/220.swf"/>
        <asset id="1244" src="$url/module/ui/farm/diy/220b.jpg"/>
        <asset id="1246" src="$url/module/ui/farm/diy/221.jpg"/>
        <asset id="1245" src="$url/module/ui/farm/diy/221.swf"/>
        <asset id="1247" src="$url/module/ui/farm/diy/221b.jpg"/>
        <asset id="1249" src="$url/module/ui/farm/diy/222.jpg"/>
        <asset id="1248" src="$url/module/ui/farm/diy/222.swf"/>
        <asset id="1250" src="$url/module/ui/farm/diy/222b.jpg"/>
        <asset id="1252" src="$url/module/ui/farm/diy/223.jpg"/>
        <asset id="1251" src="$url/module/ui/farm/diy/223.swf"/>
        <asset id="1253" src="$url/module/ui/farm/diy/223b.jpg"/>
        <asset id="1255" src="$url/module/ui/farm/diy/224.jpg"/>
        <asset id="1254" src="$url/module/ui/farm/diy/224.swf"/>
        <asset id="1256" src="$url/module/ui/farm/diy/224b.jpg"/>
        <asset id="1258" src="$url/module/ui/farm/diy/225.jpg"/>
        <asset id="1257" src="$url/module/ui/farm/diy/225.swf"/>
        <asset id="1259" src="$url/module/ui/farm/diy/225b.jpg"/>
        <asset id="1261" src="$url/module/ui/farm/diy/226.jpg"/>
        <asset id="1260" src="$url/module/ui/farm/diy/226.swf"/>
        <asset id="1262" src="$url/module/ui/farm/diy/226b.jpg"/>
        <asset id="1264" src="$url/module/ui/farm/diy/227.jpg"/>
        <asset id="1263" src="$url/module/ui/farm/diy/227.swf"/>
        <asset id="1265" src="$url/module/ui/farm/diy/227b.jpg"/>
        <asset id="1267" src="$url/module/ui/farm/diy/228.jpg"/>
        <asset id="1266" src="$url/module/ui/farm/diy/228.swf"/>
        <asset id="1268" src="$url/module/ui/farm/diy/228b.jpg"/>
        <asset id="1270" src="$url/module/ui/farm/diy/229.jpg"/>
        <asset id="1269" src="$url/module/ui/farm/diy/229.swf"/>
        <asset id="1271" src="$url/module/ui/farm/diy/229b.jpg"/>
        <asset id="985" src="$url/module/ui/farm/diy/22b.jpg"/>
        <asset id="987" src="$url/module/ui/farm/diy/23.jpg"/>
        <asset id="986" src="$url/module/ui/farm/diy/23.swf"/>
        <asset id="1273" src="$url/module/ui/farm/diy/230.jpg"/>
        <asset id="1272" src="$url/module/ui/farm/diy/230.swf"/>
        <asset id="1274" src="$url/module/ui/farm/diy/230b.jpg"/>
        <asset id="1276" src="$url/module/ui/farm/diy/231.jpg"/>
        <asset id="1275" src="$url/module/ui/farm/diy/231.swf"/>
        <asset id="1277" src="$url/module/ui/farm/diy/231b.jpg"/>
        <asset id="1279" src="$url/module/ui/farm/diy/232.jpg"/>
        <asset id="1278" src="$url/module/ui/farm/diy/232.swf"/>
        <asset id="1280" src="$url/module/ui/farm/diy/232b.jpg"/>
        <asset id="1282" src="$url/module/ui/farm/diy/233.jpg"/>
        <asset id="1281" src="$url/module/ui/farm/diy/233.swf"/>
        <asset id="1283" src="$url/module/ui/farm/diy/233b.jpg"/>
        <asset id="1285" src="$url/module/ui/farm/diy/234.jpg"/>
        <asset id="1284" src="$url/module/ui/farm/diy/234.swf"/>
        <asset id="1286" src="$url/module/ui/farm/diy/234b.jpg"/>
        <asset id="1288" src="$url/module/ui/farm/diy/235.jpg"/>
        <asset id="1287" src="$url/module/ui/farm/diy/235.swf"/>
        <asset id="1289" src="$url/module/ui/farm/diy/235b.jpg"/>
        <asset id="1291" src="$url/module/ui/farm/diy/236.jpg"/>
        <asset id="1290" src="$url/module/ui/farm/diy/236.swf"/>
        <asset id="1292" src="$url/module/ui/farm/diy/236b.jpg"/>
        <asset id="1294" src="$url/module/ui/farm/diy/237.jpg"/>
        <asset id="1293" src="$url/module/ui/farm/diy/237.swf"/>
        <asset id="1295" src="$url/module/ui/farm/diy/237b.jpg"/>
        <asset id="1297" src="$url/module/ui/farm/diy/238.jpg"/>
        <asset id="1296" src="$url/module/ui/farm/diy/238.swf"/>
        <asset id="1298" src="$url/module/ui/farm/diy/238b.jpg"/>
        <asset id="1300" src="$url/module/ui/farm/diy/239.jpg"/>
        <asset id="1299" src="$url/module/ui/farm/diy/239.swf"/>
        <asset id="1301" src="$url/module/ui/farm/diy/239b.jpg"/>
        <asset id="988" src="$url/module/ui/farm/diy/23b.jpg"/>
        <asset id="990" src="$url/module/ui/farm/diy/24.jpg"/>
        <asset id="989" src="$url/module/ui/farm/diy/24.swf"/>
        <asset id="1303" src="$url/module/ui/farm/diy/240.jpg"/>
        <asset id="1302" src="$url/module/ui/farm/diy/240.swf"/>
        <asset id="1304" src="$url/module/ui/farm/diy/240b.jpg"/>
        <asset id="1306" src="$url/module/ui/farm/diy/241.jpg"/>
        <asset id="1305" src="$url/module/ui/farm/diy/241.swf"/>
        <asset id="1307" src="$url/module/ui/farm/diy/241b.jpg"/>
        <asset id="1309" src="$url/module/ui/farm/diy/242.jpg"/>
        <asset id="1308" src="$url/module/ui/farm/diy/242.swf"/>
        <asset id="1310" src="$url/module/ui/farm/diy/242b.jpg"/>
        <asset id="1312" src="$url/module/ui/farm/diy/243.jpg"/>
        <asset id="1311" src="$url/module/ui/farm/diy/243.swf"/>
        <asset id="1313" src="$url/module/ui/farm/diy/243b.jpg"/>
        <asset id="1315" src="$url/module/ui/farm/diy/244.jpg"/>
        <asset id="1314" src="$url/module/ui/farm/diy/244.swf"/>
        <asset id="1316" src="$url/module/ui/farm/diy/244b.jpg"/>
        <asset id="1318" src="$url/module/ui/farm/diy/245.jpg"/>
        <asset id="1317" src="$url/module/ui/farm/diy/245.swf"/>
        <asset id="1319" src="$url/module/ui/farm/diy/245b.jpg"/>
        <asset id="1321" src="$url/module/ui/farm/diy/246.jpg"/>
        <asset id="1320" src="$url/module/ui/farm/diy/246.swf"/>
        <asset id="1322" src="$url/module/ui/farm/diy/246b.jpg"/>
        <asset id="1324" src="$url/module/ui/farm/diy/247.jpg"/>
        <asset id="1323" src="$url/module/ui/farm/diy/247.swf"/>
        <asset id="1325" src="$url/module/ui/farm/diy/247b.jpg"/>
        <asset id="1327" src="$url/module/ui/farm/diy/248.jpg"/>
        <asset id="1326" src="$url/module/ui/farm/diy/248.swf"/>
        <asset id="1328" src="$url/module/ui/farm/diy/248b.jpg"/>
        <asset id="1330" src="$url/module/ui/farm/diy/249.jpg"/>
        <asset id="1329" src="$url/module/ui/farm/diy/249.swf"/>
        <asset id="1331" src="$url/module/ui/farm/diy/249b.jpg"/>
        <asset id="991" src="$url/module/ui/farm/diy/24b.jpg"/>
        <asset id="1333" src="$url/module/ui/farm/diy/250.jpg"/>
        <asset id="1332" src="$url/module/ui/farm/diy/250.swf"/>
        <asset id="1334" src="$url/module/ui/farm/diy/250b.jpg"/>
        <asset id="1336" src="$url/module/ui/farm/diy/251.jpg"/>
        <asset id="1335" src="$url/module/ui/farm/diy/251.swf"/>
        <asset id="1337" src="$url/module/ui/farm/diy/251b.jpg"/>
        <asset id="1339" src="$url/module/ui/farm/diy/252.jpg"/>
        <asset id="1338" src="$url/module/ui/farm/diy/252.swf"/>
        <asset id="1340" src="$url/module/ui/farm/diy/252b.jpg"/>
        <asset id="1342" src="$url/module/ui/farm/diy/253.jpg"/>
        <asset id="1341" src="$url/module/ui/farm/diy/253.swf"/>
        <asset id="1343" src="$url/module/ui/farm/diy/253b.jpg"/>
        <asset id="1345" src="$url/module/ui/farm/diy/254.jpg"/>
        <asset id="1344" src="$url/module/ui/farm/diy/254.swf"/>
        <asset id="1346" src="$url/module/ui/farm/diy/254b.jpg"/>
        <asset id="1348" src="$url/module/ui/farm/diy/255.jpg"/>
        <asset id="1347" src="$url/module/ui/farm/diy/255.swf"/>
        <asset id="1349" src="$url/module/ui/farm/diy/255b.jpg"/>
        <asset id="1351" src="$url/module/ui/farm/diy/256.jpg"/>
        <asset id="1350" src="$url/module/ui/farm/diy/256.swf"/>
        <asset id="1352" src="$url/module/ui/farm/diy/256b.jpg"/>
        <asset id="1354" src="$url/module/ui/farm/diy/257.jpg"/>
        <asset id="1353" src="$url/module/ui/farm/diy/257.swf"/>
        <asset id="1355" src="$url/module/ui/farm/diy/257b.jpg"/>
        <asset id="1357" src="$url/module/ui/farm/diy/258.jpg"/>
        <asset id="1356" src="$url/module/ui/farm/diy/258.swf"/>
        <asset id="1358" src="$url/module/ui/farm/diy/258b.jpg"/>
        <asset id="1360" src="$url/module/ui/farm/diy/259.jpg"/>
        <asset id="1359" src="$url/module/ui/farm/diy/259.swf"/>
        <asset id="1361" src="$url/module/ui/farm/diy/259b.jpg"/>
        <asset id="992" src="$url/module/ui/farm/diy/26.jpg"/>
        <asset id="1363" src="$url/module/ui/farm/diy/260.jpg"/>
        <asset id="1362" src="$url/module/ui/farm/diy/260.swf"/>
        <asset id="1364" src="$url/module/ui/farm/diy/260b.jpg"/>
        <asset id="1366" src="$url/module/ui/farm/diy/261.jpg"/>
        <asset id="1365" src="$url/module/ui/farm/diy/261.swf"/>
        <asset id="1367" src="$url/module/ui/farm/diy/261b.jpg"/>
        <asset id="1369" src="$url/module/ui/farm/diy/262.jpg"/>
        <asset id="1368" src="$url/module/ui/farm/diy/262.swf"/>
        <asset id="1370" src="$url/module/ui/farm/diy/262b.jpg"/>
        <asset id="1372" src="$url/module/ui/farm/diy/263.jpg"/>
        <asset id="1371" src="$url/module/ui/farm/diy/263.swf"/>
        <asset id="1373" src="$url/module/ui/farm/diy/263b.jpg"/>
        <asset id="1375" src="$url/module/ui/farm/diy/264.jpg"/>
        <asset id="1374" src="$url/module/ui/farm/diy/264.swf"/>
        <asset id="1376" src="$url/module/ui/farm/diy/264b.jpg"/>
        <asset id="1378" src="$url/module/ui/farm/diy/265.jpg"/>
        <asset id="1377" src="$url/module/ui/farm/diy/265.swf"/>
        <asset id="1379" src="$url/module/ui/farm/diy/265b.jpg"/>
        <asset id="1381" src="$url/module/ui/farm/diy/266.jpg"/>
        <asset id="1380" src="$url/module/ui/farm/diy/266.swf"/>
        <asset id="1382" src="$url/module/ui/farm/diy/266b.jpg"/>
        <asset id="1384" src="$url/module/ui/farm/diy/267.jpg"/>
        <asset id="1383" src="$url/module/ui/farm/diy/267.swf"/>
        <asset id="1385" src="$url/module/ui/farm/diy/267b.jpg"/>
        <asset id="1387" src="$url/module/ui/farm/diy/268.jpg"/>
        <asset id="1386" src="$url/module/ui/farm/diy/268.swf"/>
        <asset id="1388" src="$url/module/ui/farm/diy/268b.jpg"/>
        <asset id="1390" src="$url/module/ui/farm/diy/269.jpg"/>
        <asset id="1389" src="$url/module/ui/farm/diy/269.swf"/>
        <asset id="1391" src="$url/module/ui/farm/diy/269b.jpg"/>
        <asset id="993" src="$url/module/ui/farm/diy/26b.jpg"/>
        <asset id="995" src="$url/module/ui/farm/diy/27.jpg"/>
        <asset id="994" src="$url/module/ui/farm/diy/27.swf"/>
        <asset id="1393" src="$url/module/ui/farm/diy/270.jpg"/>
        <asset id="1392" src="$url/module/ui/farm/diy/270.swf"/>
        <asset id="1394" src="$url/module/ui/farm/diy/270b.jpg"/>
        <asset id="1396" src="$url/module/ui/farm/diy/271.jpg"/>
        <asset id="1395" src="$url/module/ui/farm/diy/271.swf"/>
        <asset id="1397" src="$url/module/ui/farm/diy/271b.jpg"/>
        <asset id="1399" src="$url/module/ui/farm/diy/272.jpg"/>
        <asset id="1398" src="$url/module/ui/farm/diy/272.swf"/>
        <asset id="1400" src="$url/module/ui/farm/diy/272b.jpg"/>
        <asset id="1402" src="$url/module/ui/farm/diy/273.jpg"/>
        <asset id="1401" src="$url/module/ui/farm/diy/273.swf"/>
        <asset id="1403" src="$url/module/ui/farm/diy/273b.jpg"/>
        <asset id="1405" src="$url/module/ui/farm/diy/274.jpg"/>
        <asset id="1404" src="$url/module/ui/farm/diy/274.swf"/>
        <asset id="1406" src="$url/module/ui/farm/diy/274b.jpg"/>
        <asset id="1408" src="$url/module/ui/farm/diy/275.jpg"/>
        <asset id="1407" src="$url/module/ui/farm/diy/275.swf"/>
        <asset id="1409" src="$url/module/ui/farm/diy/275b.jpg"/>
        <asset id="1411" src="$url/module/ui/farm/diy/276.jpg"/>
        <asset id="1410" src="$url/module/ui/farm/diy/276.swf"/>
        <asset id="1412" src="$url/module/ui/farm/diy/276b.jpg"/>
        <asset id="1414" src="$url/module/ui/farm/diy/277.jpg"/>
        <asset id="1413" src="$url/module/ui/farm/diy/277.swf"/>
        <asset id="1415" src="$url/module/ui/farm/diy/277b.jpg"/>
        <asset id="1417" src="$url/module/ui/farm/diy/278.jpg"/>
        <asset id="1416" src="$url/module/ui/farm/diy/278.swf"/>
        <asset id="1418" src="$url/module/ui/farm/diy/278b.jpg"/>
        <asset id="1420" src="$url/module/ui/farm/diy/279.jpg"/>
        <asset id="1419" src="$url/module/ui/farm/diy/279.swf"/>
        <asset id="1421" src="$url/module/ui/farm/diy/279b.jpg"/>
        <asset id="996" src="$url/module/ui/farm/diy/27b.jpg"/>
        <asset id="998" src="$url/module/ui/farm/diy/28.jpg"/>
        <asset id="997" src="$url/module/ui/farm/diy/28.swf"/>
        <asset id="1423" src="$url/module/ui/farm/diy/280.jpg"/>
        <asset id="1422" src="$url/module/ui/farm/diy/280.swf"/>
        <asset id="1424" src="$url/module/ui/farm/diy/280b.jpg"/>
        <asset id="1426" src="$url/module/ui/farm/diy/281.jpg"/>
        <asset id="1425" src="$url/module/ui/farm/diy/281.swf"/>
        <asset id="1427" src="$url/module/ui/farm/diy/281b.jpg"/>
        <asset id="1429" src="$url/module/ui/farm/diy/282.jpg"/>
        <asset id="1428" src="$url/module/ui/farm/diy/282.swf"/>
        <asset id="1430" src="$url/module/ui/farm/diy/282b.jpg"/>
        <asset id="1432" src="$url/module/ui/farm/diy/283.jpg"/>
        <asset id="1431" src="$url/module/ui/farm/diy/283.swf"/>
        <asset id="1433" src="$url/module/ui/farm/diy/283b.jpg"/>
        <asset id="1435" src="$url/module/ui/farm/diy/284.jpg"/>
        <asset id="1434" src="$url/module/ui/farm/diy/284.swf"/>
        <asset id="1436" src="$url/module/ui/farm/diy/284b.jpg"/>
        <asset id="1438" src="$url/module/ui/farm/diy/285.jpg"/>
        <asset id="1437" src="$url/module/ui/farm/diy/285.swf"/>
        <asset id="1439" src="$url/module/ui/farm/diy/285b.jpg"/>
        <asset id="1441" src="$url/module/ui/farm/diy/286.jpg"/>
        <asset id="1440" src="$url/module/ui/farm/diy/286.swf"/>
        <asset id="1442" src="$url/module/ui/farm/diy/286b.jpg"/>
        <asset id="1444" src="$url/module/ui/farm/diy/287.jpg"/>
        <asset id="1443" src="$url/module/ui/farm/diy/287.swf"/>
        <asset id="1445" src="$url/module/ui/farm/diy/287b.jpg"/>
        <asset id="1447" src="$url/module/ui/farm/diy/288.jpg"/>
        <asset id="1446" src="$url/module/ui/farm/diy/288.swf"/>
        <asset id="1448" src="$url/module/ui/farm/diy/288b.jpg"/>
        <asset id="999" src="$url/module/ui/farm/diy/28b.jpg"/>
        <asset id="1001" src="$url/module/ui/farm/diy/29.jpg"/>
        <asset id="1000" src="$url/module/ui/farm/diy/29.swf"/>
        <asset id="1450" src="$url/module/ui/farm/diy/293.jpg"/>
        <asset id="1449" src="$url/module/ui/farm/diy/293.swf"/>
        <asset id="1451" src="$url/module/ui/farm/diy/293b.jpg"/>
        <asset id="1453" src="$url/module/ui/farm/diy/294.jpg"/>
        <asset id="1452" src="$url/module/ui/farm/diy/294.swf"/>
        <asset id="1454" src="$url/module/ui/farm/diy/294b.jpg"/>
        <asset id="1456" src="$url/module/ui/farm/diy/295.jpg"/>
        <asset id="1455" src="$url/module/ui/farm/diy/295.swf"/>
        <asset id="1457" src="$url/module/ui/farm/diy/295b.jpg"/>
        <asset id="1459" src="$url/module/ui/farm/diy/296.jpg"/>
        <asset id="1458" src="$url/module/ui/farm/diy/296.swf"/>
        <asset id="1460" src="$url/module/ui/farm/diy/296b.jpg"/>
        <asset id="1462" src="$url/module/ui/farm/diy/297.jpg"/>
        <asset id="1461" src="$url/module/ui/farm/diy/297.swf"/>
        <asset id="1463" src="$url/module/ui/farm/diy/297b.jpg"/>
        <asset id="1465" src="$url/module/ui/farm/diy/298.jpg"/>
        <asset id="1464" src="$url/module/ui/farm/diy/298.swf"/>
        <asset id="1466" src="$url/module/ui/farm/diy/298b.jpg"/>
        <asset id="1468" src="$url/module/ui/farm/diy/299.jpg"/>
        <asset id="1467" src="$url/module/ui/farm/diy/299.swf"/>
        <asset id="1469" src="$url/module/ui/farm/diy/299b.jpg"/>
        <asset id="1002" src="$url/module/ui/farm/diy/29b.jpg"/>
        <asset id="950" src="$url/module/ui/farm/diy/2b.jpg"/>
        <asset id="952" src="$url/module/ui/farm/diy/3.jpg"/>
        <asset id="951" src="$url/module/ui/farm/diy/3.swf"/>
        <asset id="1471" src="$url/module/ui/farm/diy/300.jpg"/>
        <asset id="1470" src="$url/module/ui/farm/diy/300.swf"/>
        <asset id="1472" src="$url/module/ui/farm/diy/300b.jpg"/>
        <asset id="1474" src="$url/module/ui/farm/diy/301.jpg"/>
        <asset id="1473" src="$url/module/ui/farm/diy/301.swf"/>
        <asset id="1475" src="$url/module/ui/farm/diy/301b.jpg"/>
        <asset id="1477" src="$url/module/ui/farm/diy/302.jpg"/>
        <asset id="1476" src="$url/module/ui/farm/diy/302.swf"/>
        <asset id="1478" src="$url/module/ui/farm/diy/302b.jpg"/>
        <asset id="1480" src="$url/module/ui/farm/diy/303.jpg"/>
        <asset id="1479" src="$url/module/ui/farm/diy/303.swf"/>
        <asset id="1481" src="$url/module/ui/farm/diy/303b.jpg"/>
        <asset id="1483" src="$url/module/ui/farm/diy/304.jpg"/>
        <asset id="1482" src="$url/module/ui/farm/diy/304.swf"/>
        <asset id="1484" src="$url/module/ui/farm/diy/304b.jpg"/>
        <asset id="1486" src="$url/module/ui/farm/diy/305.jpg"/>
        <asset id="1485" src="$url/module/ui/farm/diy/305.swf"/>
        <asset id="1487" src="$url/module/ui/farm/diy/305b.jpg"/>
        <asset id="1489" src="$url/module/ui/farm/diy/306.jpg"/>
        <asset id="1488" src="$url/module/ui/farm/diy/306.swf"/>
        <asset id="1490" src="$url/module/ui/farm/diy/306b.jpg"/>
        <asset id="1492" src="$url/module/ui/farm/diy/307.jpg"/>
        <asset id="1491" src="$url/module/ui/farm/diy/307.swf"/>
        <asset id="1493" src="$url/module/ui/farm/diy/307b.jpg"/>
        <asset id="1495" src="$url/module/ui/farm/diy/308.jpg"/>
        <asset id="1494" src="$url/module/ui/farm/diy/308.swf"/>
        <asset id="1496" src="$url/module/ui/farm/diy/308b.jpg"/>
        <asset id="1498" src="$url/module/ui/farm/diy/309.jpg"/>
        <asset id="1497" src="$url/module/ui/farm/diy/309.swf"/>
        <asset id="1499" src="$url/module/ui/farm/diy/309b.jpg"/>
        <asset id="1003" src="$url/module/ui/farm/diy/31.jpg"/>
        <asset id="1501" src="$url/module/ui/farm/diy/310.jpg"/>
        <asset id="1500" src="$url/module/ui/farm/diy/310.swf"/>
        <asset id="1502" src="$url/module/ui/farm/diy/310b.jpg"/>
        <asset id="1504" src="$url/module/ui/farm/diy/311.jpg"/>
        <asset id="1503" src="$url/module/ui/farm/diy/311.swf"/>
        <asset id="1505" src="$url/module/ui/farm/diy/311b.jpg"/>
        <asset id="1507" src="$url/module/ui/farm/diy/312.jpg"/>
        <asset id="1506" src="$url/module/ui/farm/diy/312.swf"/>
        <asset id="1508" src="$url/module/ui/farm/diy/312b.jpg"/>
        <asset id="1891" src="$url/module/ui/farm/diy/313.jpg"/>
        <asset id="1890" src="$url/module/ui/farm/diy/313.swf"/>
        <asset id="1892" src="$url/module/ui/farm/diy/313b.jpg"/>
        <asset id="1894" src="$url/module/ui/farm/diy/314.jpg"/>
        <asset id="1893" src="$url/module/ui/farm/diy/314.swf"/>
        <asset id="1895" src="$url/module/ui/farm/diy/314b.jpg"/>
        <asset id="1897" src="$url/module/ui/farm/diy/315.jpg"/>
        <asset id="1896" src="$url/module/ui/farm/diy/315.swf"/>
        <asset id="1898" src="$url/module/ui/farm/diy/315b.jpg"/>
        <asset id="1900" src="$url/module/ui/farm/diy/316.jpg"/>
        <asset id="1899" src="$url/module/ui/farm/diy/316.swf"/>
        <asset id="1901" src="$url/module/ui/farm/diy/316b.jpg"/>
        <asset id="1004" src="$url/module/ui/farm/diy/31b.jpg"/>
        <asset id="3447" src="$url/module/ui/farm/diy/321.jpg"/>
        <asset id="3446" src="$url/module/ui/farm/diy/321.swf"/>
        <asset id="3448" src="$url/module/ui/farm/diy/321b.jpg"/>
        <asset id="3450" src="$url/module/ui/farm/diy/322.jpg"/>
        <asset id="3449" src="$url/module/ui/farm/diy/322.swf"/>
        <asset id="3451" src="$url/module/ui/farm/diy/322b.jpg"/>
        <asset id="3453" src="$url/module/ui/farm/diy/323.jpg"/>
        <asset id="3452" src="$url/module/ui/farm/diy/323.swf"/>
        <asset id="3454" src="$url/module/ui/farm/diy/323b.jpg"/>
        <asset id="3456" src="$url/module/ui/farm/diy/324.jpg"/>
        <asset id="3455" src="$url/module/ui/farm/diy/324.swf"/>
        <asset id="3457" src="$url/module/ui/farm/diy/324b.jpg"/>
        <asset id="3573" src="$url/module/ui/farm/diy/325.jpg"/>
        <asset id="3572" src="$url/module/ui/farm/diy/325.swf"/>
        <asset id="3574" src="$url/module/ui/farm/diy/325b.jpg"/>
        <asset id="3576" src="$url/module/ui/farm/diy/326.jpg"/>
        <asset id="3575" src="$url/module/ui/farm/diy/326.swf"/>
        <asset id="3577" src="$url/module/ui/farm/diy/326b.jpg"/>
        <asset id="3579" src="$url/module/ui/farm/diy/327.jpg"/>
        <asset id="3578" src="$url/module/ui/farm/diy/327.swf"/>
        <asset id="3580" src="$url/module/ui/farm/diy/327b.jpg"/>
        <asset id="3582" src="$url/module/ui/farm/diy/328.jpg"/>
        <asset id="3581" src="$url/module/ui/farm/diy/328.swf"/>
        <asset id="3583" src="$url/module/ui/farm/diy/328b.jpg"/>
        <asset id="3661" src="$url/module/ui/farm/diy/329.jpg"/>
        <asset id="3660" src="$url/module/ui/farm/diy/329.swf"/>
        <asset id="3662" src="$url/module/ui/farm/diy/329b.jpg"/>
        <asset id="3664" src="$url/module/ui/farm/diy/330.jpg"/>
        <asset id="3663" src="$url/module/ui/farm/diy/330.swf"/>
        <asset id="3665" src="$url/module/ui/farm/diy/330b.jpg"/>
        <asset id="3667" src="$url/module/ui/farm/diy/331.jpg"/>
        <asset id="3666" src="$url/module/ui/farm/diy/331.swf"/>
        <asset id="3668" src="$url/module/ui/farm/diy/331b.jpg"/>
        <asset id="3670" src="$url/module/ui/farm/diy/332.jpg"/>
        <asset id="3669" src="$url/module/ui/farm/diy/332.swf"/>
        <asset id="3671" src="$url/module/ui/farm/diy/332b.jpg"/>
        <asset id="3697" src="$url/module/ui/farm/diy/333.jpg"/>
        <asset id="3696" src="$url/module/ui/farm/diy/333.swf"/>
        <asset id="3698" src="$url/module/ui/farm/diy/333b.jpg"/>
        <asset id="3700" src="$url/module/ui/farm/diy/334.jpg"/>
        <asset id="3699" src="$url/module/ui/farm/diy/334.swf"/>
        <asset id="3701" src="$url/module/ui/farm/diy/334b.jpg"/>
        <asset id="3703" src="$url/module/ui/farm/diy/335.jpg"/>
        <asset id="3702" src="$url/module/ui/farm/diy/335.swf"/>
        <asset id="3704" src="$url/module/ui/farm/diy/335b.jpg"/>
        <asset id="3706" src="$url/module/ui/farm/diy/336.jpg"/>
        <asset id="3705" src="$url/module/ui/farm/diy/336.swf"/>
        <asset id="3707" src="$url/module/ui/farm/diy/336b.jpg"/>
        <asset id="4352" src="$url/module/ui/farm/diy/337.jpg"/>
        <asset id="4351" src="$url/module/ui/farm/diy/337.swf"/>
        <asset id="4353" src="$url/module/ui/farm/diy/337b.jpg"/>
        <asset id="4355" src="$url/module/ui/farm/diy/338.jpg"/>
        <asset id="4354" src="$url/module/ui/farm/diy/338.swf"/>
        <asset id="4356" src="$url/module/ui/farm/diy/338b.jpg"/>
        <asset id="4358" src="$url/module/ui/farm/diy/339.jpg"/>
        <asset id="4357" src="$url/module/ui/farm/diy/339.swf"/>
        <asset id="4359" src="$url/module/ui/farm/diy/339b.jpg"/>
        <asset id="4361" src="$url/module/ui/farm/diy/340.jpg"/>
        <asset id="4360" src="$url/module/ui/farm/diy/340.swf"/>
        <asset id="4362" src="$url/module/ui/farm/diy/340b.jpg"/>
        <asset id="4622" src="$url/module/ui/farm/diy/341.jpg"/>
        <asset id="4621" src="$url/module/ui/farm/diy/341.swf"/>
        <asset id="4623" src="$url/module/ui/farm/diy/341b.jpg"/>
        <asset id="4625" src="$url/module/ui/farm/diy/342.jpg"/>
        <asset id="4624" src="$url/module/ui/farm/diy/342.swf"/>
        <asset id="4626" src="$url/module/ui/farm/diy/342b.jpg"/>
        <asset id="4628" src="$url/module/ui/farm/diy/343.jpg"/>
        <asset id="4627" src="$url/module/ui/farm/diy/343.swf"/>
        <asset id="4629" src="$url/module/ui/farm/diy/343b.jpg"/>
        <asset id="4631" src="$url/module/ui/farm/diy/344.jpg"/>
        <asset id="4630" src="$url/module/ui/farm/diy/344.swf"/>
        <asset id="4632" src="$url/module/ui/farm/diy/344b.jpg"/>
        <asset id="953" src="$url/module/ui/farm/diy/3b.jpg"/>
        <asset id="955" src="$url/module/ui/farm/diy/4.jpg"/>
        <asset id="954" src="$url/module/ui/farm/diy/4.swf"/>
        <asset id="1006" src="$url/module/ui/farm/diy/41.jpg"/>
        <asset id="1005" src="$url/module/ui/farm/diy/41.swf"/>
        <asset id="1007" src="$url/module/ui/farm/diy/41b.jpg"/>
        <asset id="1009" src="$url/module/ui/farm/diy/42.jpg"/>
        <asset id="1008" src="$url/module/ui/farm/diy/42.swf"/>
        <asset id="1010" src="$url/module/ui/farm/diy/42b.jpg"/>
        <asset id="1012" src="$url/module/ui/farm/diy/43.jpg"/>
        <asset id="1011" src="$url/module/ui/farm/diy/43.swf"/>
        <asset id="1013" src="$url/module/ui/farm/diy/43b.jpg"/>
        <asset id="1015" src="$url/module/ui/farm/diy/44.jpg"/>
        <asset id="1014" src="$url/module/ui/farm/diy/44.swf"/>
        <asset id="1016" src="$url/module/ui/farm/diy/44b.jpg"/>
        <asset id="1018" src="$url/module/ui/farm/diy/45.jpg"/>
        <asset id="1017" src="$url/module/ui/farm/diy/45.swf"/>
        <asset id="1019" src="$url/module/ui/farm/diy/45b.jpg"/>
        <asset id="1021" src="$url/module/ui/farm/diy/46.jpg"/>
        <asset id="1020" src="$url/module/ui/farm/diy/46.swf"/>
        <asset id="1022" src="$url/module/ui/farm/diy/46b.jpg"/>
        <asset id="1024" src="$url/module/ui/farm/diy/47.jpg"/>
        <asset id="1023" src="$url/module/ui/farm/diy/47.swf"/>
        <asset id="1025" src="$url/module/ui/farm/diy/47b.jpg"/>
        <asset id="1027" src="$url/module/ui/farm/diy/48.jpg"/>
        <asset id="1026" src="$url/module/ui/farm/diy/48.swf"/>
        <asset id="1028" src="$url/module/ui/farm/diy/48b.jpg"/>
        <asset id="1030" src="$url/module/ui/farm/diy/49.jpg"/>
        <asset id="1029" src="$url/module/ui/farm/diy/49.swf"/>
        <asset id="1031" src="$url/module/ui/farm/diy/49b.jpg"/>
        <asset id="956" src="$url/module/ui/farm/diy/4b.jpg"/>
        <asset id="1033" src="$url/module/ui/farm/diy/50.jpg"/>
        <asset id="1032" src="$url/module/ui/farm/diy/50.swf"/>
        <asset id="1510" src="$url/module/ui/farm/diy/501.jpg"/>
        <asset id="1509" src="$url/module/ui/farm/diy/501.swf"/>
        <asset id="1511" src="$url/module/ui/farm/diy/501b.jpg"/>
        <asset id="1513" src="$url/module/ui/farm/diy/502.jpg"/>
        <asset id="1512" src="$url/module/ui/farm/diy/502.swf"/>
        <asset id="1514" src="$url/module/ui/farm/diy/502b.jpg"/>
        <asset id="1516" src="$url/module/ui/farm/diy/503.jpg"/>
        <asset id="1515" src="$url/module/ui/farm/diy/503.swf"/>
        <asset id="1517" src="$url/module/ui/farm/diy/503b.jpg"/>
        <asset id="1519" src="$url/module/ui/farm/diy/504.jpg"/>
        <asset id="1518" src="$url/module/ui/farm/diy/504.swf"/>
        <asset id="1520" src="$url/module/ui/farm/diy/504b.jpg"/>
        <asset id="1522" src="$url/module/ui/farm/diy/505.jpg"/>
        <asset id="1521" src="$url/module/ui/farm/diy/505.swf"/>
        <asset id="1523" src="$url/module/ui/farm/diy/505b.jpg"/>
        <asset id="1525" src="$url/module/ui/farm/diy/506.jpg"/>
        <asset id="1524" src="$url/module/ui/farm/diy/506.swf"/>
        <asset id="1526" src="$url/module/ui/farm/diy/506b.jpg"/>
        <asset id="1528" src="$url/module/ui/farm/diy/507.jpg"/>
        <asset id="1527" src="$url/module/ui/farm/diy/507.swf"/>
        <asset id="1529" src="$url/module/ui/farm/diy/507b.jpg"/>
        <asset id="1531" src="$url/module/ui/farm/diy/508.jpg"/>
        <asset id="1530" src="$url/module/ui/farm/diy/508.swf"/>
        <asset id="1532" src="$url/module/ui/farm/diy/508b.jpg"/>
        <asset id="1534" src="$url/module/ui/farm/diy/509.jpg"/>
        <asset id="1533" src="$url/module/ui/farm/diy/509.swf"/>
        <asset id="1535" src="$url/module/ui/farm/diy/509b.jpg"/>
        <asset id="1034" src="$url/module/ui/farm/diy/50b.jpg"/>
        <asset id="1036" src="$url/module/ui/farm/diy/51.jpg"/>
        <asset id="1035" src="$url/module/ui/farm/diy/51.swf"/>
        <asset id="1537" src="$url/module/ui/farm/diy/510.jpg"/>
        <asset id="1536" src="$url/module/ui/farm/diy/510.swf"/>
        <asset id="1538" src="$url/module/ui/farm/diy/510b.jpg"/>
        <asset id="1540" src="$url/module/ui/farm/diy/511.jpg"/>
        <asset id="1539" src="$url/module/ui/farm/diy/511.swf"/>
        <asset id="1541" src="$url/module/ui/farm/diy/511b.jpg"/>
        <asset id="1543" src="$url/module/ui/farm/diy/512.jpg"/>
        <asset id="1542" src="$url/module/ui/farm/diy/512.swf"/>
        <asset id="1544" src="$url/module/ui/farm/diy/512b.jpg"/>
        <asset id="1546" src="$url/module/ui/farm/diy/513.jpg"/>
        <asset id="1545" src="$url/module/ui/farm/diy/513.swf"/>
        <asset id="1547" src="$url/module/ui/farm/diy/513b.jpg"/>
        <asset id="1549" src="$url/module/ui/farm/diy/514.jpg"/>
        <asset id="1548" src="$url/module/ui/farm/diy/514.swf"/>
        <asset id="1550" src="$url/module/ui/farm/diy/514b.jpg"/>
        <asset id="1552" src="$url/module/ui/farm/diy/515.jpg"/>
        <asset id="1551" src="$url/module/ui/farm/diy/515.swf"/>
        <asset id="1553" src="$url/module/ui/farm/diy/515b.jpg"/>
        <asset id="1555" src="$url/module/ui/farm/diy/516.jpg"/>
        <asset id="1554" src="$url/module/ui/farm/diy/516.swf"/>
        <asset id="1556" src="$url/module/ui/farm/diy/516b.jpg"/>
        <asset id="1558" src="$url/module/ui/farm/diy/517.jpg"/>
        <asset id="1557" src="$url/module/ui/farm/diy/517.swf"/>
        <asset id="1559" src="$url/module/ui/farm/diy/517b.jpg"/>
        <asset id="1561" src="$url/module/ui/farm/diy/518.jpg"/>
        <asset id="1560" src="$url/module/ui/farm/diy/518.swf"/>
        <asset id="1562" src="$url/module/ui/farm/diy/518b.jpg"/>
        <asset id="1564" src="$url/module/ui/farm/diy/519.jpg"/>
        <asset id="1563" src="$url/module/ui/farm/diy/519.swf"/>
        <asset id="1565" src="$url/module/ui/farm/diy/519b.jpg"/>
        <asset id="1037" src="$url/module/ui/farm/diy/51b.jpg"/>
        <asset id="1039" src="$url/module/ui/farm/diy/52.jpg"/>
        <asset id="1038" src="$url/module/ui/farm/diy/52.swf"/>
        <asset id="1567" src="$url/module/ui/farm/diy/520.jpg"/>
        <asset id="1566" src="$url/module/ui/farm/diy/520.swf"/>
        <asset id="1568" src="$url/module/ui/farm/diy/520b.jpg"/>
        <asset id="1570" src="$url/module/ui/farm/diy/521.jpg"/>
        <asset id="1569" src="$url/module/ui/farm/diy/521.swf"/>
        <asset id="1571" src="$url/module/ui/farm/diy/521b.jpg"/>
        <asset id="1573" src="$url/module/ui/farm/diy/522.jpg"/>
        <asset id="1572" src="$url/module/ui/farm/diy/522.swf"/>
        <asset id="1574" src="$url/module/ui/farm/diy/522b.jpg"/>
        <asset id="1576" src="$url/module/ui/farm/diy/523.jpg"/>
        <asset id="1575" src="$url/module/ui/farm/diy/523.swf"/>
        <asset id="1577" src="$url/module/ui/farm/diy/523b.jpg"/>
        <asset id="1579" src="$url/module/ui/farm/diy/524.jpg"/>
        <asset id="1578" src="$url/module/ui/farm/diy/524.swf"/>
        <asset id="1580" src="$url/module/ui/farm/diy/524b.jpg"/>
        <asset id="1582" src="$url/module/ui/farm/diy/525.jpg"/>
        <asset id="1581" src="$url/module/ui/farm/diy/525.swf"/>
        <asset id="1583" src="$url/module/ui/farm/diy/525b.jpg"/>
        <asset id="1585" src="$url/module/ui/farm/diy/526.jpg"/>
        <asset id="1584" src="$url/module/ui/farm/diy/526.swf"/>
        <asset id="1586" src="$url/module/ui/farm/diy/526b.jpg"/>
        <asset id="1588" src="$url/module/ui/farm/diy/527.jpg"/>
        <asset id="1587" src="$url/module/ui/farm/diy/527.swf"/>
        <asset id="1589" src="$url/module/ui/farm/diy/527b.jpg"/>
        <asset id="1591" src="$url/module/ui/farm/diy/528.jpg"/>
        <asset id="1590" src="$url/module/ui/farm/diy/528.swf"/>
        <asset id="1592" src="$url/module/ui/farm/diy/528b.jpg"/>
        <asset id="1594" src="$url/module/ui/farm/diy/529.jpg"/>
        <asset id="1593" src="$url/module/ui/farm/diy/529.swf"/>
        <asset id="1595" src="$url/module/ui/farm/diy/529b.jpg"/>
        <asset id="1040" src="$url/module/ui/farm/diy/52b.jpg"/>
        <asset id="1042" src="$url/module/ui/farm/diy/53.jpg"/>
        <asset id="1041" src="$url/module/ui/farm/diy/53.swf"/>
        <asset id="1597" src="$url/module/ui/farm/diy/530.jpg"/>
        <asset id="1596" src="$url/module/ui/farm/diy/530.swf"/>
        <asset id="1598" src="$url/module/ui/farm/diy/530b.jpg"/>
        <asset id="1600" src="$url/module/ui/farm/diy/531.jpg"/>
        <asset id="1599" src="$url/module/ui/farm/diy/531.swf"/>
        <asset id="1601" src="$url/module/ui/farm/diy/531b.jpg"/>
        <asset id="1603" src="$url/module/ui/farm/diy/532.jpg"/>
        <asset id="1602" src="$url/module/ui/farm/diy/532.swf"/>
        <asset id="1604" src="$url/module/ui/farm/diy/532b.jpg"/>
        <asset id="1606" src="$url/module/ui/farm/diy/533.jpg"/>
        <asset id="1605" src="$url/module/ui/farm/diy/533.swf"/>
        <asset id="1607" src="$url/module/ui/farm/diy/533b.jpg"/>
        <asset id="1609" src="$url/module/ui/farm/diy/534.jpg"/>
        <asset id="1608" src="$url/module/ui/farm/diy/534.swf"/>
        <asset id="1610" src="$url/module/ui/farm/diy/534b.jpg"/>
        <asset id="1612" src="$url/module/ui/farm/diy/535.jpg"/>
        <asset id="1611" src="$url/module/ui/farm/diy/535.swf"/>
        <asset id="1613" src="$url/module/ui/farm/diy/535b.jpg"/>
        <asset id="1615" src="$url/module/ui/farm/diy/536.jpg"/>
        <asset id="1614" src="$url/module/ui/farm/diy/536.swf"/>
        <asset id="1616" src="$url/module/ui/farm/diy/536b.jpg"/>
        <asset id="1618" src="$url/module/ui/farm/diy/537.jpg"/>
        <asset id="1617" src="$url/module/ui/farm/diy/537.swf"/>
        <asset id="1619" src="$url/module/ui/farm/diy/537b.jpg"/>
        <asset id="1621" src="$url/module/ui/farm/diy/538.jpg"/>
        <asset id="1620" src="$url/module/ui/farm/diy/538.swf"/>
        <asset id="1622" src="$url/module/ui/farm/diy/538b.jpg"/>
        <asset id="1624" src="$url/module/ui/farm/diy/539.jpg"/>
        <asset id="1623" src="$url/module/ui/farm/diy/539.swf"/>
        <asset id="1625" src="$url/module/ui/farm/diy/539b.jpg"/>
        <asset id="1043" src="$url/module/ui/farm/diy/53b.jpg"/>
        <asset id="1045" src="$url/module/ui/farm/diy/54.jpg"/>
        <asset id="1044" src="$url/module/ui/farm/diy/54.swf"/>
        <asset id="1627" src="$url/module/ui/farm/diy/540.jpg"/>
        <asset id="1626" src="$url/module/ui/farm/diy/540.swf"/>
        <asset id="1628" src="$url/module/ui/farm/diy/540b.jpg"/>
        <asset id="1630" src="$url/module/ui/farm/diy/541.jpg"/>
        <asset id="1629" src="$url/module/ui/farm/diy/541.swf"/>
        <asset id="1631" src="$url/module/ui/farm/diy/541b.jpg"/>
        <asset id="1633" src="$url/module/ui/farm/diy/542.jpg"/>
        <asset id="1632" src="$url/module/ui/farm/diy/542.swf"/>
        <asset id="1634" src="$url/module/ui/farm/diy/542b.jpg"/>
        <asset id="1636" src="$url/module/ui/farm/diy/543.jpg"/>
        <asset id="1635" src="$url/module/ui/farm/diy/543.swf"/>
        <asset id="1637" src="$url/module/ui/farm/diy/543b.jpg"/>
        <asset id="1639" src="$url/module/ui/farm/diy/544.jpg"/>
        <asset id="1638" src="$url/module/ui/farm/diy/544.swf"/>
        <asset id="1640" src="$url/module/ui/farm/diy/544b.jpg"/>
        <asset id="1642" src="$url/module/ui/farm/diy/545.jpg"/>
        <asset id="1641" src="$url/module/ui/farm/diy/545.swf"/>
        <asset id="1643" src="$url/module/ui/farm/diy/545b.jpg"/>
        <asset id="1645" src="$url/module/ui/farm/diy/546.jpg"/>
        <asset id="1644" src="$url/module/ui/farm/diy/546.swf"/>
        <asset id="1646" src="$url/module/ui/farm/diy/546b.jpg"/>
        <asset id="1648" src="$url/module/ui/farm/diy/547.jpg"/>
        <asset id="1647" src="$url/module/ui/farm/diy/547.swf"/>
        <asset id="1649" src="$url/module/ui/farm/diy/547b.jpg"/>
        <asset id="1651" src="$url/module/ui/farm/diy/548.jpg"/>
        <asset id="1650" src="$url/module/ui/farm/diy/548.swf"/>
        <asset id="1652" src="$url/module/ui/farm/diy/548b.jpg"/>
        <asset id="1654" src="$url/module/ui/farm/diy/549.jpg"/>
        <asset id="1653" src="$url/module/ui/farm/diy/549.swf"/>
        <asset id="1655" src="$url/module/ui/farm/diy/549b.jpg"/>
        <asset id="1046" src="$url/module/ui/farm/diy/54b.jpg"/>
        <asset id="1048" src="$url/module/ui/farm/diy/55.jpg"/>
        <asset id="1047" src="$url/module/ui/farm/diy/55.swf"/>
        <asset id="1657" src="$url/module/ui/farm/diy/550.jpg"/>
        <asset id="1656" src="$url/module/ui/farm/diy/550.swf"/>
        <asset id="1658" src="$url/module/ui/farm/diy/550b.jpg"/>
        <asset id="1660" src="$url/module/ui/farm/diy/551.jpg"/>
        <asset id="1659" src="$url/module/ui/farm/diy/551.swf"/>
        <asset id="1661" src="$url/module/ui/farm/diy/551b.jpg"/>
        <asset id="1663" src="$url/module/ui/farm/diy/552.jpg"/>
        <asset id="1662" src="$url/module/ui/farm/diy/552.swf"/>
        <asset id="1664" src="$url/module/ui/farm/diy/552b.jpg"/>
        <asset id="1666" src="$url/module/ui/farm/diy/553.jpg"/>
        <asset id="1665" src="$url/module/ui/farm/diy/553.swf"/>
        <asset id="1667" src="$url/module/ui/farm/diy/553b.jpg"/>
        <asset id="1669" src="$url/module/ui/farm/diy/554.jpg"/>
        <asset id="1668" src="$url/module/ui/farm/diy/554.swf"/>
        <asset id="1670" src="$url/module/ui/farm/diy/554b.jpg"/>
        <asset id="1672" src="$url/module/ui/farm/diy/555.jpg"/>
        <asset id="1671" src="$url/module/ui/farm/diy/555.swf"/>
        <asset id="1673" src="$url/module/ui/farm/diy/555b.jpg"/>
        <asset id="1675" src="$url/module/ui/farm/diy/556.jpg"/>
        <asset id="1674" src="$url/module/ui/farm/diy/556.swf"/>
        <asset id="1676" src="$url/module/ui/farm/diy/556b.jpg"/>
        <asset id="1678" src="$url/module/ui/farm/diy/557.jpg"/>
        <asset id="1677" src="$url/module/ui/farm/diy/557.swf"/>
        <asset id="1679" src="$url/module/ui/farm/diy/557b.jpg"/>
        <asset id="1681" src="$url/module/ui/farm/diy/558.jpg"/>
        <asset id="1680" src="$url/module/ui/farm/diy/558.swf"/>
        <asset id="1682" src="$url/module/ui/farm/diy/558b.jpg"/>
        <asset id="1684" src="$url/module/ui/farm/diy/559.jpg"/>
        <asset id="1683" src="$url/module/ui/farm/diy/559.swf"/>
        <asset id="1685" src="$url/module/ui/farm/diy/559b.jpg"/>
        <asset id="1049" src="$url/module/ui/farm/diy/55b.jpg"/>
        <asset id="1051" src="$url/module/ui/farm/diy/56.jpg"/>
        <asset id="1050" src="$url/module/ui/farm/diy/56.swf"/>
        <asset id="1687" src="$url/module/ui/farm/diy/560.jpg"/>
        <asset id="1686" src="$url/module/ui/farm/diy/560.swf"/>
        <asset id="1688" src="$url/module/ui/farm/diy/560b.jpg"/>
        <asset id="1929" src="$url/module/ui/farm/diy/561.jpg"/>
        <asset id="1928" src="$url/module/ui/farm/diy/561.swf"/>
        <asset id="1930" src="$url/module/ui/farm/diy/561b.jpg"/>
        <asset id="1932" src="$url/module/ui/farm/diy/562.jpg"/>
        <asset id="1931" src="$url/module/ui/farm/diy/562.swf"/>
        <asset id="1933" src="$url/module/ui/farm/diy/562b.jpg"/>
        <asset id="1935" src="$url/module/ui/farm/diy/563.jpg"/>
        <asset id="1934" src="$url/module/ui/farm/diy/563.swf"/>
        <asset id="1936" src="$url/module/ui/farm/diy/563b.jpg"/>
        <asset id="1938" src="$url/module/ui/farm/diy/564.jpg"/>
        <asset id="1937" src="$url/module/ui/farm/diy/564.swf"/>
        <asset id="1939" src="$url/module/ui/farm/diy/564b.jpg"/>
        <asset id="1905" src="$url/module/ui/farm/diy/565.jpg"/>
        <asset id="1904" src="$url/module/ui/farm/diy/565.swf"/>
        <asset id="1906" src="$url/module/ui/farm/diy/565b.jpg"/>
        <asset id="1908" src="$url/module/ui/farm/diy/566.jpg"/>
        <asset id="1907" src="$url/module/ui/farm/diy/566.swf"/>
        <asset id="1909" src="$url/module/ui/farm/diy/566b.jpg"/>
        <asset id="1911" src="$url/module/ui/farm/diy/567.jpg"/>
        <asset id="1910" src="$url/module/ui/farm/diy/567.swf"/>
        <asset id="1912" src="$url/module/ui/farm/diy/567b.jpg"/>
        <asset id="1914" src="$url/module/ui/farm/diy/568.jpg"/>
        <asset id="1913" src="$url/module/ui/farm/diy/568.swf"/>
        <asset id="1915" src="$url/module/ui/farm/diy/568b.jpg"/>
        <asset id="1917" src="$url/module/ui/farm/diy/569.jpg"/>
        <asset id="1916" src="$url/module/ui/farm/diy/569.swf"/>
        <asset id="1918" src="$url/module/ui/farm/diy/569b.jpg"/>
        <asset id="1052" src="$url/module/ui/farm/diy/56b.jpg"/>
        <asset id="1054" src="$url/module/ui/farm/diy/57.jpg"/>
        <asset id="1053" src="$url/module/ui/farm/diy/57.swf"/>
        <asset id="1920" src="$url/module/ui/farm/diy/570.jpg"/>
        <asset id="1919" src="$url/module/ui/farm/diy/570.swf"/>
        <asset id="1921" src="$url/module/ui/farm/diy/570b.jpg"/>
        <asset id="1923" src="$url/module/ui/farm/diy/571.jpg"/>
        <asset id="1922" src="$url/module/ui/farm/diy/571.swf"/>
        <asset id="1924" src="$url/module/ui/farm/diy/571b.jpg"/>
        <asset id="1926" src="$url/module/ui/farm/diy/572.jpg"/>
        <asset id="1925" src="$url/module/ui/farm/diy/572.swf"/>
        <asset id="1927" src="$url/module/ui/farm/diy/572b.jpg"/>
        <asset id="2008" src="$url/module/ui/farm/diy/573.jpg"/>
        <asset id="2007" src="$url/module/ui/farm/diy/573.swf"/>
        <asset id="2009" src="$url/module/ui/farm/diy/573b.jpg"/>
        <asset id="2011" src="$url/module/ui/farm/diy/574.jpg"/>
        <asset id="2010" src="$url/module/ui/farm/diy/574.swf"/>
        <asset id="2012" src="$url/module/ui/farm/diy/574b.jpg"/>
        <asset id="2014" src="$url/module/ui/farm/diy/575.jpg"/>
        <asset id="2013" src="$url/module/ui/farm/diy/575.swf"/>
        <asset id="2015" src="$url/module/ui/farm/diy/575b.jpg"/>
        <asset id="2017" src="$url/module/ui/farm/diy/576.jpg"/>
        <asset id="2016" src="$url/module/ui/farm/diy/576.swf"/>
        <asset id="2018" src="$url/module/ui/farm/diy/576b.jpg"/>
        <asset id="2056" src="$url/module/ui/farm/diy/577.jpg"/>
        <asset id="2055" src="$url/module/ui/farm/diy/577.swf"/>
        <asset id="2057" src="$url/module/ui/farm/diy/577b.jpg"/>
        <asset id="2059" src="$url/module/ui/farm/diy/578.jpg"/>
        <asset id="2058" src="$url/module/ui/farm/diy/578.swf"/>
        <asset id="2060" src="$url/module/ui/farm/diy/578b.jpg"/>
        <asset id="2062" src="$url/module/ui/farm/diy/579.jpg"/>
        <asset id="2061" src="$url/module/ui/farm/diy/579.swf"/>
        <asset id="2063" src="$url/module/ui/farm/diy/579b.jpg"/>
        <asset id="1055" src="$url/module/ui/farm/diy/57b.jpg"/>
        <asset id="1057" src="$url/module/ui/farm/diy/58.jpg"/>
        <asset id="1056" src="$url/module/ui/farm/diy/58.swf"/>
        <asset id="2065" src="$url/module/ui/farm/diy/580.jpg"/>
        <asset id="2064" src="$url/module/ui/farm/diy/580.swf"/>
        <asset id="2066" src="$url/module/ui/farm/diy/580b.jpg"/>
        <asset id="2071" src="$url/module/ui/farm/diy/581.jpg"/>
        <asset id="2070" src="$url/module/ui/farm/diy/581.swf"/>
        <asset id="2072" src="$url/module/ui/farm/diy/581b.jpg"/>
        <asset id="2074" src="$url/module/ui/farm/diy/582.jpg"/>
        <asset id="2073" src="$url/module/ui/farm/diy/582.swf"/>
        <asset id="2075" src="$url/module/ui/farm/diy/582b.jpg"/>
        <asset id="2077" src="$url/module/ui/farm/diy/583.jpg"/>
        <asset id="2076" src="$url/module/ui/farm/diy/583.swf"/>
        <asset id="2078" src="$url/module/ui/farm/diy/583b.jpg"/>
        <asset id="2080" src="$url/module/ui/farm/diy/584.jpg"/>
        <asset id="2079" src="$url/module/ui/farm/diy/584.swf"/>
        <asset id="2081" src="$url/module/ui/farm/diy/584b.jpg"/>
        <asset id="2083" src="$url/module/ui/farm/diy/585.jpg"/>
        <asset id="2082" src="$url/module/ui/farm/diy/585.swf"/>
        <asset id="2084" src="$url/module/ui/farm/diy/585b.jpg"/>
        <asset id="2086" src="$url/module/ui/farm/diy/586.jpg"/>
        <asset id="2085" src="$url/module/ui/farm/diy/586.swf"/>
        <asset id="2087" src="$url/module/ui/farm/diy/586b.jpg"/>
        <asset id="2089" src="$url/module/ui/farm/diy/587.jpg"/>
        <asset id="2088" src="$url/module/ui/farm/diy/587.swf"/>
        <asset id="2090" src="$url/module/ui/farm/diy/587b.jpg"/>
        <asset id="2092" src="$url/module/ui/farm/diy/588.jpg"/>
        <asset id="2091" src="$url/module/ui/farm/diy/588.swf"/>
        <asset id="2093" src="$url/module/ui/farm/diy/588b.jpg"/>
        <asset id="2147" src="$url/module/ui/farm/diy/589.jpg"/>
        <asset id="2146" src="$url/module/ui/farm/diy/589.swf"/>
        <asset id="2148" src="$url/module/ui/farm/diy/589b.jpg"/>
        <asset id="1058" src="$url/module/ui/farm/diy/58b.jpg"/>
        <asset id="1060" src="$url/module/ui/farm/diy/59.jpg"/>
        <asset id="1059" src="$url/module/ui/farm/diy/59.swf"/>
        <asset id="2150" src="$url/module/ui/farm/diy/590.jpg"/>
        <asset id="2149" src="$url/module/ui/farm/diy/590.swf"/>
        <asset id="2151" src="$url/module/ui/farm/diy/590b.jpg"/>
        <asset id="2153" src="$url/module/ui/farm/diy/591.jpg"/>
        <asset id="2152" src="$url/module/ui/farm/diy/591.swf"/>
        <asset id="2154" src="$url/module/ui/farm/diy/591b.jpg"/>
        <asset id="2156" src="$url/module/ui/farm/diy/592.jpg"/>
        <asset id="2155" src="$url/module/ui/farm/diy/592.swf"/>
        <asset id="2157" src="$url/module/ui/farm/diy/592b.jpg"/>
        <asset id="2159" src="$url/module/ui/farm/diy/593.jpg"/>
        <asset id="2158" src="$url/module/ui/farm/diy/593.swf"/>
        <asset id="2160" src="$url/module/ui/farm/diy/593b.jpg"/>
        <asset id="2162" src="$url/module/ui/farm/diy/594.jpg"/>
        <asset id="2161" src="$url/module/ui/farm/diy/594.swf"/>
        <asset id="2163" src="$url/module/ui/farm/diy/594b.jpg"/>
        <asset id="2165" src="$url/module/ui/farm/diy/595.jpg"/>
        <asset id="2164" src="$url/module/ui/farm/diy/595.swf"/>
        <asset id="2166" src="$url/module/ui/farm/diy/595b.jpg"/>
        <asset id="2168" src="$url/module/ui/farm/diy/596.jpg"/>
        <asset id="2167" src="$url/module/ui/farm/diy/596.swf"/>
        <asset id="2169" src="$url/module/ui/farm/diy/596b.jpg"/>
        <asset id="2171" src="$url/module/ui/farm/diy/597.jpg"/>
        <asset id="2170" src="$url/module/ui/farm/diy/597.swf"/>
        <asset id="2172" src="$url/module/ui/farm/diy/597b.jpg"/>
        <asset id="2174" src="$url/module/ui/farm/diy/598.jpg"/>
        <asset id="2173" src="$url/module/ui/farm/diy/598.swf"/>
        <asset id="2175" src="$url/module/ui/farm/diy/598b.jpg"/>
        <asset id="2177" src="$url/module/ui/farm/diy/599.jpg"/>
        <asset id="2176" src="$url/module/ui/farm/diy/599.swf"/>
        <asset id="2178" src="$url/module/ui/farm/diy/599b.jpg"/>
        <asset id="1061" src="$url/module/ui/farm/diy/59b.jpg"/>
        <asset id="1063" src="$url/module/ui/farm/diy/60.jpg"/>
        <asset id="1062" src="$url/module/ui/farm/diy/60.swf"/>
        <asset id="2180" src="$url/module/ui/farm/diy/600.jpg"/>
        <asset id="2179" src="$url/module/ui/farm/diy/600.swf"/>
        <asset id="2181" src="$url/module/ui/farm/diy/600b.jpg"/>
        <asset id="2589" src="$url/module/ui/farm/diy/601.jpg"/>
        <asset id="2588" src="$url/module/ui/farm/diy/601.swf"/>
        <asset id="2590" src="$url/module/ui/farm/diy/601b.jpg"/>
        <asset id="2592" src="$url/module/ui/farm/diy/602.jpg"/>
        <asset id="2591" src="$url/module/ui/farm/diy/602.swf"/>
        <asset id="2593" src="$url/module/ui/farm/diy/602b.jpg"/>
        <asset id="2595" src="$url/module/ui/farm/diy/603.jpg"/>
        <asset id="2594" src="$url/module/ui/farm/diy/603.swf"/>
        <asset id="2596" src="$url/module/ui/farm/diy/603b.jpg"/>
        <asset id="2598" src="$url/module/ui/farm/diy/604.jpg"/>
        <asset id="2597" src="$url/module/ui/farm/diy/604.swf"/>
        <asset id="2599" src="$url/module/ui/farm/diy/604b.jpg"/>
        <asset id="2601" src="$url/module/ui/farm/diy/605.jpg"/>
        <asset id="2600" src="$url/module/ui/farm/diy/605.swf"/>
        <asset id="2602" src="$url/module/ui/farm/diy/605b.jpg"/>
        <asset id="2604" src="$url/module/ui/farm/diy/606.jpg"/>
        <asset id="2603" src="$url/module/ui/farm/diy/606.swf"/>
        <asset id="2605" src="$url/module/ui/farm/diy/606b.jpg"/>
        <asset id="2607" src="$url/module/ui/farm/diy/607.jpg"/>
        <asset id="2606" src="$url/module/ui/farm/diy/607.swf"/>
        <asset id="2608" src="$url/module/ui/farm/diy/607b.jpg"/>
        <asset id="2610" src="$url/module/ui/farm/diy/608.jpg"/>
        <asset id="2609" src="$url/module/ui/farm/diy/608.swf"/>
        <asset id="2611" src="$url/module/ui/farm/diy/608b.jpg"/>
        <asset id="2742" src="$url/module/ui/farm/diy/609.jpg"/>
        <asset id="2741" src="$url/module/ui/farm/diy/609.swf"/>
        <asset id="2743" src="$url/module/ui/farm/diy/609b.jpg"/>
        <asset id="1064" src="$url/module/ui/farm/diy/60b.jpg"/>
        <asset id="1066" src="$url/module/ui/farm/diy/61.jpg"/>
        <asset id="1065" src="$url/module/ui/farm/diy/61.swf"/>
        <asset id="2745" src="$url/module/ui/farm/diy/610.jpg"/>
        <asset id="2744" src="$url/module/ui/farm/diy/610.swf"/>
        <asset id="2746" src="$url/module/ui/farm/diy/610b.jpg"/>
        <asset id="2748" src="$url/module/ui/farm/diy/611.jpg"/>
        <asset id="2747" src="$url/module/ui/farm/diy/611.swf"/>
        <asset id="2749" src="$url/module/ui/farm/diy/611b.jpg"/>
        <asset id="2751" src="$url/module/ui/farm/diy/612.jpg"/>
        <asset id="2750" src="$url/module/ui/farm/diy/612.swf"/>
        <asset id="2752" src="$url/module/ui/farm/diy/612b.jpg"/>
        <asset id="2754" src="$url/module/ui/farm/diy/613.jpg"/>
        <asset id="2753" src="$url/module/ui/farm/diy/613.swf"/>
        <asset id="2755" src="$url/module/ui/farm/diy/613b.jpg"/>
        <asset id="2757" src="$url/module/ui/farm/diy/614.jpg"/>
        <asset id="2756" src="$url/module/ui/farm/diy/614.swf"/>
        <asset id="2758" src="$url/module/ui/farm/diy/614b.jpg"/>
        <asset id="2760" src="$url/module/ui/farm/diy/615.jpg"/>
        <asset id="2759" src="$url/module/ui/farm/diy/615.swf"/>
        <asset id="2761" src="$url/module/ui/farm/diy/615b.jpg"/>
        <asset id="2763" src="$url/module/ui/farm/diy/616.jpg"/>
        <asset id="2762" src="$url/module/ui/farm/diy/616.swf"/>
        <asset id="2764" src="$url/module/ui/farm/diy/616b.jpg"/>
        <asset id="2766" src="$url/module/ui/farm/diy/617.jpg"/>
        <asset id="2765" src="$url/module/ui/farm/diy/617.swf"/>
        <asset id="2767" src="$url/module/ui/farm/diy/617b.jpg"/>
        <asset id="2769" src="$url/module/ui/farm/diy/618.jpg"/>
        <asset id="2768" src="$url/module/ui/farm/diy/618.swf"/>
        <asset id="2770" src="$url/module/ui/farm/diy/618b.jpg"/>
        <asset id="2772" src="$url/module/ui/farm/diy/619.jpg"/>
        <asset id="2771" src="$url/module/ui/farm/diy/619.swf"/>
        <asset id="2773" src="$url/module/ui/farm/diy/619b.jpg"/>
        <asset id="1067" src="$url/module/ui/farm/diy/61b.jpg"/>
        <asset id="1069" src="$url/module/ui/farm/diy/62.jpg"/>
        <asset id="1068" src="$url/module/ui/farm/diy/62.swf"/>
        <asset id="2775" src="$url/module/ui/farm/diy/620.jpg"/>
        <asset id="2774" src="$url/module/ui/farm/diy/620.swf"/>
        <asset id="2776" src="$url/module/ui/farm/diy/620b.jpg"/>
        <asset id="2822" src="$url/module/ui/farm/diy/621.jpg"/>
        <asset id="2821" src="$url/module/ui/farm/diy/621.swf"/>
        <asset id="2823" src="$url/module/ui/farm/diy/621b.jpg"/>
        <asset id="2825" src="$url/module/ui/farm/diy/622.jpg"/>
        <asset id="2824" src="$url/module/ui/farm/diy/622.swf"/>
        <asset id="2826" src="$url/module/ui/farm/diy/622b.jpg"/>
        <asset id="2828" src="$url/module/ui/farm/diy/623.jpg"/>
        <asset id="2827" src="$url/module/ui/farm/diy/623.swf"/>
        <asset id="2829" src="$url/module/ui/farm/diy/623b.jpg"/>
        <asset id="2831" src="$url/module/ui/farm/diy/624.jpg"/>
        <asset id="2830" src="$url/module/ui/farm/diy/624.swf"/>
        <asset id="2832" src="$url/module/ui/farm/diy/624b.jpg"/>
        <asset id="2790" src="$url/module/ui/farm/diy/625.jpg"/>
        <asset id="2789" src="$url/module/ui/farm/diy/625.swf"/>
        <asset id="2791" src="$url/module/ui/farm/diy/625b.jpg"/>
        <asset id="2793" src="$url/module/ui/farm/diy/626.jpg"/>
        <asset id="2792" src="$url/module/ui/farm/diy/626.swf"/>
        <asset id="2794" src="$url/module/ui/farm/diy/626b.jpg"/>
        <asset id="2796" src="$url/module/ui/farm/diy/627.jpg"/>
        <asset id="2795" src="$url/module/ui/farm/diy/627.swf"/>
        <asset id="2797" src="$url/module/ui/farm/diy/627b.jpg"/>
        <asset id="2799" src="$url/module/ui/farm/diy/628.jpg"/>
        <asset id="2798" src="$url/module/ui/farm/diy/628.swf"/>
        <asset id="2800" src="$url/module/ui/farm/diy/628b.jpg"/>
        <asset id="2810" src="$url/module/ui/farm/diy/629.jpg"/>
        <asset id="2809" src="$url/module/ui/farm/diy/629.swf"/>
        <asset id="2811" src="$url/module/ui/farm/diy/629b.jpg"/>
        <asset id="1070" src="$url/module/ui/farm/diy/62b.jpg"/>
        <asset id="1072" src="$url/module/ui/farm/diy/63.jpg"/>
        <asset id="1071" src="$url/module/ui/farm/diy/63.swf"/>
        <asset id="2813" src="$url/module/ui/farm/diy/630.jpg"/>
        <asset id="2812" src="$url/module/ui/farm/diy/630.swf"/>
        <asset id="2814" src="$url/module/ui/farm/diy/630b.jpg"/>
        <asset id="2816" src="$url/module/ui/farm/diy/631.jpg"/>
        <asset id="2815" src="$url/module/ui/farm/diy/631.swf"/>
        <asset id="2817" src="$url/module/ui/farm/diy/631b.jpg"/>
        <asset id="2819" src="$url/module/ui/farm/diy/632.jpg"/>
        <asset id="2818" src="$url/module/ui/farm/diy/632.swf"/>
        <asset id="2820" src="$url/module/ui/farm/diy/632b.jpg"/>
        <asset id="3351" src="$url/module/ui/farm/diy/633.jpg"/>
        <asset id="3350" src="$url/module/ui/farm/diy/633.swf"/>
        <asset id="3352" src="$url/module/ui/farm/diy/633b.jpg"/>
        <asset id="3354" src="$url/module/ui/farm/diy/634.jpg"/>
        <asset id="3353" src="$url/module/ui/farm/diy/634.swf"/>
        <asset id="3355" src="$url/module/ui/farm/diy/634b.jpg"/>
        <asset id="3357" src="$url/module/ui/farm/diy/635.jpg"/>
        <asset id="3356" src="$url/module/ui/farm/diy/635.swf"/>
        <asset id="3358" src="$url/module/ui/farm/diy/635b.jpg"/>
        <asset id="3360" src="$url/module/ui/farm/diy/636.jpg"/>
        <asset id="3359" src="$url/module/ui/farm/diy/636.swf"/>
        <asset id="3361" src="$url/module/ui/farm/diy/636b.jpg"/>
        <asset id="3464" src="$url/module/ui/farm/diy/637.jpg"/>
        <asset id="3463" src="$url/module/ui/farm/diy/637.swf"/>
        <asset id="3465" src="$url/module/ui/farm/diy/637b.jpg"/>
        <asset id="3467" src="$url/module/ui/farm/diy/638.jpg"/>
        <asset id="3466" src="$url/module/ui/farm/diy/638.swf"/>
        <asset id="3468" src="$url/module/ui/farm/diy/638b.jpg"/>
        <asset id="3470" src="$url/module/ui/farm/diy/639.jpg"/>
        <asset id="3469" src="$url/module/ui/farm/diy/639.swf"/>
        <asset id="3471" src="$url/module/ui/farm/diy/639b.jpg"/>
        <asset id="1073" src="$url/module/ui/farm/diy/63b.jpg"/>
        <asset id="1075" src="$url/module/ui/farm/diy/64.jpg"/>
        <asset id="1074" src="$url/module/ui/farm/diy/64.swf"/>
        <asset id="3473" src="$url/module/ui/farm/diy/640.jpg"/>
        <asset id="3472" src="$url/module/ui/farm/diy/640.swf"/>
        <asset id="3474" src="$url/module/ui/farm/diy/640b.jpg"/>
        <asset id="3498" src="$url/module/ui/farm/diy/641.jpg"/>
        <asset id="3497" src="$url/module/ui/farm/diy/641.swf"/>
        <asset id="3499" src="$url/module/ui/farm/diy/641b.jpg"/>
        <asset id="3503" src="$url/module/ui/farm/diy/642.jpg"/>
        <asset id="3502" src="$url/module/ui/farm/diy/642.swf"/>
        <asset id="3504" src="$url/module/ui/farm/diy/642b.jpg"/>
        <asset id="3507" src="$url/module/ui/farm/diy/643.jpg"/>
        <asset id="3506" src="$url/module/ui/farm/diy/643.swf"/>
        <asset id="3508" src="$url/module/ui/farm/diy/643b.jpg"/>
        <asset id="3510" src="$url/module/ui/farm/diy/644.jpg"/>
        <asset id="3509" src="$url/module/ui/farm/diy/644.swf"/>
        <asset id="3511" src="$url/module/ui/farm/diy/644b.jpg"/>
        <asset id="3528" src="$url/module/ui/farm/diy/645.jpg"/>
        <asset id="3527" src="$url/module/ui/farm/diy/645.swf"/>
        <asset id="3529" src="$url/module/ui/farm/diy/645b.jpg"/>
        <asset id="3531" src="$url/module/ui/farm/diy/646.jpg"/>
        <asset id="3530" src="$url/module/ui/farm/diy/646.swf"/>
        <asset id="3532" src="$url/module/ui/farm/diy/646b.jpg"/>
        <asset id="3534" src="$url/module/ui/farm/diy/647.jpg"/>
        <asset id="3533" src="$url/module/ui/farm/diy/647.swf"/>
        <asset id="3535" src="$url/module/ui/farm/diy/647b.jpg"/>
        <asset id="3537" src="$url/module/ui/farm/diy/648.jpg"/>
        <asset id="3536" src="$url/module/ui/farm/diy/648.swf"/>
        <asset id="3538" src="$url/module/ui/farm/diy/648b.jpg"/>
        <asset id="3585" src="$url/module/ui/farm/diy/649.jpg"/>
        <asset id="3584" src="$url/module/ui/farm/diy/649.swf"/>
        <asset id="3586" src="$url/module/ui/farm/diy/649b.jpg"/>
        <asset id="1076" src="$url/module/ui/farm/diy/64b.jpg"/>
        <asset id="1078" src="$url/module/ui/farm/diy/65.jpg"/>
        <asset id="1077" src="$url/module/ui/farm/diy/65.swf"/>
        <asset id="3588" src="$url/module/ui/farm/diy/650.jpg"/>
        <asset id="3587" src="$url/module/ui/farm/diy/650.swf"/>
        <asset id="3589" src="$url/module/ui/farm/diy/650b.jpg"/>
        <asset id="3591" src="$url/module/ui/farm/diy/651.jpg"/>
        <asset id="3590" src="$url/module/ui/farm/diy/651.swf"/>
        <asset id="3592" src="$url/module/ui/farm/diy/651b.jpg"/>
        <asset id="3594" src="$url/module/ui/farm/diy/652.jpg"/>
        <asset id="3593" src="$url/module/ui/farm/diy/652.swf"/>
        <asset id="3595" src="$url/module/ui/farm/diy/652b.jpg"/>
        <asset id="3646" src="$url/module/ui/farm/diy/653.jpg"/>
        <asset id="3645" src="$url/module/ui/farm/diy/653.swf"/>
        <asset id="3647" src="$url/module/ui/farm/diy/653b.jpg"/>
        <asset id="3651" src="$url/module/ui/farm/diy/654.jpg"/>
        <asset id="3650" src="$url/module/ui/farm/diy/654.swf"/>
        <asset id="3652" src="$url/module/ui/farm/diy/654b.jpg"/>
        <asset id="3655" src="$url/module/ui/farm/diy/655.jpg"/>
        <asset id="3654" src="$url/module/ui/farm/diy/655.swf"/>
        <asset id="3656" src="$url/module/ui/farm/diy/655b.jpg"/>
        <asset id="3658" src="$url/module/ui/farm/diy/656.jpg"/>
        <asset id="3657" src="$url/module/ui/farm/diy/656.swf"/>
        <asset id="3659" src="$url/module/ui/farm/diy/656b.jpg"/>
        <asset id="3709" src="$url/module/ui/farm/diy/657.jpg"/>
        <asset id="3708" src="$url/module/ui/farm/diy/657.swf"/>
        <asset id="3710" src="$url/module/ui/farm/diy/657b.jpg"/>
        <asset id="3712" src="$url/module/ui/farm/diy/658.jpg"/>
        <asset id="3711" src="$url/module/ui/farm/diy/658.swf"/>
        <asset id="3713" src="$url/module/ui/farm/diy/658b.jpg"/>
        <asset id="3715" src="$url/module/ui/farm/diy/659.jpg"/>
        <asset id="3714" src="$url/module/ui/farm/diy/659.swf"/>
        <asset id="3716" src="$url/module/ui/farm/diy/659b.jpg"/>
        <asset id="1079" src="$url/module/ui/farm/diy/65b.jpg"/>
        <asset id="1081" src="$url/module/ui/farm/diy/66.jpg"/>
        <asset id="1080" src="$url/module/ui/farm/diy/66.swf"/>
        <asset id="3718" src="$url/module/ui/farm/diy/660.jpg"/>
        <asset id="3717" src="$url/module/ui/farm/diy/660.swf"/>
        <asset id="3719" src="$url/module/ui/farm/diy/660b.jpg"/>
        <asset id="3733" src="$url/module/ui/farm/diy/661.jpg"/>
        <asset id="3732" src="$url/module/ui/farm/diy/661.swf"/>
        <asset id="3734" src="$url/module/ui/farm/diy/661b.jpg"/>
        <asset id="3736" src="$url/module/ui/farm/diy/662.jpg"/>
        <asset id="3735" src="$url/module/ui/farm/diy/662.swf"/>
        <asset id="3737" src="$url/module/ui/farm/diy/662b.jpg"/>
        <asset id="3739" src="$url/module/ui/farm/diy/663.jpg"/>
        <asset id="3738" src="$url/module/ui/farm/diy/663.swf"/>
        <asset id="3740" src="$url/module/ui/farm/diy/663b.jpg"/>
        <asset id="3742" src="$url/module/ui/farm/diy/664.jpg"/>
        <asset id="3741" src="$url/module/ui/farm/diy/664.swf"/>
        <asset id="3743" src="$url/module/ui/farm/diy/664b.jpg"/>
        <asset id="3745" src="$url/module/ui/farm/diy/665.jpg"/>
        <asset id="3744" src="$url/module/ui/farm/diy/665.swf"/>
        <asset id="3746" src="$url/module/ui/farm/diy/665b.jpg"/>
        <asset id="3748" src="$url/module/ui/farm/diy/666.jpg"/>
        <asset id="3747" src="$url/module/ui/farm/diy/666.swf"/>
        <asset id="3749" src="$url/module/ui/farm/diy/666b.jpg"/>
        <asset id="3751" src="$url/module/ui/farm/diy/667.jpg"/>
        <asset id="3750" src="$url/module/ui/farm/diy/667.swf"/>
        <asset id="3752" src="$url/module/ui/farm/diy/667b.jpg"/>
        <asset id="3754" src="$url/module/ui/farm/diy/668.jpg"/>
        <asset id="3753" src="$url/module/ui/farm/diy/668.swf"/>
        <asset id="3755" src="$url/module/ui/farm/diy/668b.jpg"/>
        <asset id="3861" src="$url/module/ui/farm/diy/669.jpg"/>
        <asset id="3860" src="$url/module/ui/farm/diy/669.swf"/>
        <asset id="3862" src="$url/module/ui/farm/diy/669b.jpg"/>
        <asset id="1082" src="$url/module/ui/farm/diy/66b.jpg"/>
        <asset id="1084" src="$url/module/ui/farm/diy/67.jpg"/>
        <asset id="1083" src="$url/module/ui/farm/diy/67.swf"/>
        <asset id="3864" src="$url/module/ui/farm/diy/670.jpg"/>
        <asset id="3863" src="$url/module/ui/farm/diy/670.swf"/>
        <asset id="3865" src="$url/module/ui/farm/diy/670b.jpg"/>
        <asset id="3867" src="$url/module/ui/farm/diy/671.jpg"/>
        <asset id="3866" src="$url/module/ui/farm/diy/671.swf"/>
        <asset id="3868" src="$url/module/ui/farm/diy/671b.jpg"/>
        <asset id="3870" src="$url/module/ui/farm/diy/672.jpg"/>
        <asset id="3869" src="$url/module/ui/farm/diy/672.swf"/>
        <asset id="3871" src="$url/module/ui/farm/diy/672b.jpg"/>
        <asset id="3873" src="$url/module/ui/farm/diy/673.jpg"/>
        <asset id="3872" src="$url/module/ui/farm/diy/673.swf"/>
        <asset id="3874" src="$url/module/ui/farm/diy/673b.jpg"/>
        <asset id="3876" src="$url/module/ui/farm/diy/674.jpg"/>
        <asset id="3875" src="$url/module/ui/farm/diy/674.swf"/>
        <asset id="3877" src="$url/module/ui/farm/diy/674b.jpg"/>
        <asset id="3879" src="$url/module/ui/farm/diy/675.jpg"/>
        <asset id="3878" src="$url/module/ui/farm/diy/675.swf"/>
        <asset id="3880" src="$url/module/ui/farm/diy/675b.jpg"/>
        <asset id="3882" src="$url/module/ui/farm/diy/676.jpg"/>
        <asset id="3881" src="$url/module/ui/farm/diy/676.swf"/>
        <asset id="3883" src="$url/module/ui/farm/diy/676b.jpg"/>
        <asset id="3885" src="$url/module/ui/farm/diy/677.jpg"/>
        <asset id="3884" src="$url/module/ui/farm/diy/677.swf"/>
        <asset id="3886" src="$url/module/ui/farm/diy/677b.jpg"/>
        <asset id="3888" src="$url/module/ui/farm/diy/678.jpg"/>
        <asset id="3887" src="$url/module/ui/farm/diy/678.swf"/>
        <asset id="3889" src="$url/module/ui/farm/diy/678b.jpg"/>
        <asset id="3891" src="$url/module/ui/farm/diy/679.jpg"/>
        <asset id="3890" src="$url/module/ui/farm/diy/679.swf"/>
        <asset id="3892" src="$url/module/ui/farm/diy/679b.jpg"/>
        <asset id="1085" src="$url/module/ui/farm/diy/67b.jpg"/>
        <asset id="1087" src="$url/module/ui/farm/diy/68.jpg"/>
        <asset id="1086" src="$url/module/ui/farm/diy/68.swf"/>
        <asset id="3896" src="$url/module/ui/farm/diy/680.jpg"/>
        <asset id="3895" src="$url/module/ui/farm/diy/680.swf"/>
        <asset id="3897" src="$url/module/ui/farm/diy/680b.jpg"/>
        <asset id="3996" src="$url/module/ui/farm/diy/681.jpg"/>
        <asset id="3995" src="$url/module/ui/farm/diy/681.swf"/>
        <asset id="3997" src="$url/module/ui/farm/diy/681b.jpg"/>
        <asset id="3999" src="$url/module/ui/farm/diy/682.jpg"/>
        <asset id="3998" src="$url/module/ui/farm/diy/682.swf"/>
        <asset id="4000" src="$url/module/ui/farm/diy/682b.jpg"/>
        <asset id="4002" src="$url/module/ui/farm/diy/683.jpg"/>
        <asset id="4001" src="$url/module/ui/farm/diy/683.swf"/>
        <asset id="4003" src="$url/module/ui/farm/diy/683b.jpg"/>
        <asset id="4005" src="$url/module/ui/farm/diy/684.jpg"/>
        <asset id="4004" src="$url/module/ui/farm/diy/684.swf"/>
        <asset id="4006" src="$url/module/ui/farm/diy/684b.jpg"/>
        <asset id="4008" src="$url/module/ui/farm/diy/685.jpg"/>
        <asset id="4007" src="$url/module/ui/farm/diy/685.swf"/>
        <asset id="4009" src="$url/module/ui/farm/diy/685b.jpg"/>
        <asset id="4011" src="$url/module/ui/farm/diy/686.jpg"/>
        <asset id="4010" src="$url/module/ui/farm/diy/686.swf"/>
        <asset id="4012" src="$url/module/ui/farm/diy/686b.jpg"/>
        <asset id="4014" src="$url/module/ui/farm/diy/687.jpg"/>
        <asset id="4013" src="$url/module/ui/farm/diy/687.swf"/>
        <asset id="4015" src="$url/module/ui/farm/diy/687b.jpg"/>
        <asset id="4017" src="$url/module/ui/farm/diy/688.jpg"/>
        <asset id="4016" src="$url/module/ui/farm/diy/688.swf"/>
        <asset id="4019" src="$url/module/ui/farm/diy/688b.jpg"/>
        <asset id="4049" src="$url/module/ui/farm/diy/689.jpg"/>
        <asset id="4048" src="$url/module/ui/farm/diy/689.swf"/>
        <asset id="4050" src="$url/module/ui/farm/diy/689b.jpg"/>
        <asset id="1088" src="$url/module/ui/farm/diy/68b.jpg"/>
        <asset id="1090" src="$url/module/ui/farm/diy/69.jpg"/>
        <asset id="1089" src="$url/module/ui/farm/diy/69.swf"/>
        <asset id="4052" src="$url/module/ui/farm/diy/690.jpg"/>
        <asset id="4051" src="$url/module/ui/farm/diy/690.swf"/>
        <asset id="4053" src="$url/module/ui/farm/diy/690b.jpg"/>
        <asset id="4055" src="$url/module/ui/farm/diy/691.jpg"/>
        <asset id="4054" src="$url/module/ui/farm/diy/691.swf"/>
        <asset id="4056" src="$url/module/ui/farm/diy/691b.jpg"/>
        <asset id="4058" src="$url/module/ui/farm/diy/692.jpg"/>
        <asset id="4057" src="$url/module/ui/farm/diy/692.swf"/>
        <asset id="4059" src="$url/module/ui/farm/diy/692b.jpg"/>
        <asset id="4061" src="$url/module/ui/farm/diy/693.jpg"/>
        <asset id="4060" src="$url/module/ui/farm/diy/693.swf"/>
        <asset id="4062" src="$url/module/ui/farm/diy/693b.jpg"/>
        <asset id="4064" src="$url/module/ui/farm/diy/694.jpg"/>
        <asset id="4063" src="$url/module/ui/farm/diy/694.swf"/>
        <asset id="4065" src="$url/module/ui/farm/diy/694b.jpg"/>
        <asset id="4067" src="$url/module/ui/farm/diy/695.jpg"/>
        <asset id="4066" src="$url/module/ui/farm/diy/695.swf"/>
        <asset id="4068" src="$url/module/ui/farm/diy/695b.jpg"/>
        <asset id="4070" src="$url/module/ui/farm/diy/696.jpg"/>
        <asset id="4069" src="$url/module/ui/farm/diy/696.swf"/>
        <asset id="4071" src="$url/module/ui/farm/diy/696b.jpg"/>
        <asset id="4134" src="$url/module/ui/farm/diy/697.jpg"/>
        <asset id="4133" src="$url/module/ui/farm/diy/697.swf"/>
        <asset id="4135" src="$url/module/ui/farm/diy/697b.jpg"/>
        <asset id="4137" src="$url/module/ui/farm/diy/698.jpg"/>
        <asset id="4136" src="$url/module/ui/farm/diy/698.swf"/>
        <asset id="4138" src="$url/module/ui/farm/diy/698b.jpg"/>
        <asset id="4140" src="$url/module/ui/farm/diy/699.jpg"/>
        <asset id="4139" src="$url/module/ui/farm/diy/699.swf"/>
        <asset id="4141" src="$url/module/ui/farm/diy/699b.jpg"/>
        <asset id="1091" src="$url/module/ui/farm/diy/69b.jpg"/>
        <asset id="1093" src="$url/module/ui/farm/diy/70.jpg"/>
        <asset id="1092" src="$url/module/ui/farm/diy/70.swf"/>
        <asset id="4143" src="$url/module/ui/farm/diy/700.jpg"/>
        <asset id="4142" src="$url/module/ui/farm/diy/700.swf"/>
        <asset id="4144" src="$url/module/ui/farm/diy/700b.jpg"/>
        <asset id="4164" src="$url/module/ui/farm/diy/701.jpg"/>
        <asset id="4163" src="$url/module/ui/farm/diy/701.swf"/>
        <asset id="4165" src="$url/module/ui/farm/diy/701b.jpg"/>
        <asset id="4167" src="$url/module/ui/farm/diy/702.jpg"/>
        <asset id="4166" src="$url/module/ui/farm/diy/702.swf"/>
        <asset id="4168" src="$url/module/ui/farm/diy/702b.jpg"/>
        <asset id="4170" src="$url/module/ui/farm/diy/703.jpg"/>
        <asset id="4169" src="$url/module/ui/farm/diy/703.swf"/>
        <asset id="4171" src="$url/module/ui/farm/diy/703b.jpg"/>
        <asset id="4173" src="$url/module/ui/farm/diy/704.jpg"/>
        <asset id="4172" src="$url/module/ui/farm/diy/704.swf"/>
        <asset id="4174" src="$url/module/ui/farm/diy/704b.jpg"/>
        <asset id="4176" src="$url/module/ui/farm/diy/705.jpg"/>
        <asset id="4175" src="$url/module/ui/farm/diy/705.swf"/>
        <asset id="4177" src="$url/module/ui/farm/diy/705b.jpg"/>
        <asset id="4179" src="$url/module/ui/farm/diy/706.jpg"/>
        <asset id="4178" src="$url/module/ui/farm/diy/706.swf"/>
        <asset id="4180" src="$url/module/ui/farm/diy/706b.jpg"/>
        <asset id="4182" src="$url/module/ui/farm/diy/707.jpg"/>
        <asset id="4181" src="$url/module/ui/farm/diy/707.swf"/>
        <asset id="4183" src="$url/module/ui/farm/diy/707b.jpg"/>
        <asset id="4185" src="$url/module/ui/farm/diy/708.jpg"/>
        <asset id="4184" src="$url/module/ui/farm/diy/708.swf"/>
        <asset id="4186" src="$url/module/ui/farm/diy/708b.jpg"/>
        <asset id="4213" src="$url/module/ui/farm/diy/709.jpg"/>
        <asset id="4212" src="$url/module/ui/farm/diy/709.swf"/>
        <asset id="4214" src="$url/module/ui/farm/diy/709b.jpg"/>
        <asset id="1094" src="$url/module/ui/farm/diy/70b.jpg"/>
        <asset id="1096" src="$url/module/ui/farm/diy/71.jpg"/>
        <asset id="1095" src="$url/module/ui/farm/diy/71.swf"/>
        <asset id="4216" src="$url/module/ui/farm/diy/710.jpg"/>
        <asset id="4215" src="$url/module/ui/farm/diy/710.swf"/>
        <asset id="4217" src="$url/module/ui/farm/diy/710b.jpg"/>
        <asset id="4219" src="$url/module/ui/farm/diy/711.jpg"/>
        <asset id="4218" src="$url/module/ui/farm/diy/711.swf"/>
        <asset id="4220" src="$url/module/ui/farm/diy/711b.jpg"/>
        <asset id="4222" src="$url/module/ui/farm/diy/712.jpg"/>
        <asset id="4221" src="$url/module/ui/farm/diy/712.swf"/>
        <asset id="4223" src="$url/module/ui/farm/diy/712b.jpg"/>
        <asset id="4236" src="$url/module/ui/farm/diy/713.jpg"/>
        <asset id="4235" src="$url/module/ui/farm/diy/713.swf"/>
        <asset id="4237" src="$url/module/ui/farm/diy/713b.jpg"/>
        <asset id="4239" src="$url/module/ui/farm/diy/714.jpg"/>
        <asset id="4238" src="$url/module/ui/farm/diy/714.swf"/>
        <asset id="4240" src="$url/module/ui/farm/diy/714b.jpg"/>
        <asset id="4242" src="$url/module/ui/farm/diy/715.jpg"/>
        <asset id="4241" src="$url/module/ui/farm/diy/715.swf"/>
        <asset id="4243" src="$url/module/ui/farm/diy/715b.jpg"/>
        <asset id="4245" src="$url/module/ui/farm/diy/716.jpg"/>
        <asset id="4244" src="$url/module/ui/farm/diy/716.swf"/>
        <asset id="4246" src="$url/module/ui/farm/diy/716b.jpg"/>
        <asset id="4276" src="$url/module/ui/farm/diy/717.jpg"/>
        <asset id="4275" src="$url/module/ui/farm/diy/717.swf"/>
        <asset id="4277" src="$url/module/ui/farm/diy/717b.jpg"/>
        <asset id="4279" src="$url/module/ui/farm/diy/718.jpg"/>
        <asset id="4278" src="$url/module/ui/farm/diy/718.swf"/>
        <asset id="4280" src="$url/module/ui/farm/diy/718b.jpg"/>
        <asset id="4288" src="$url/module/ui/farm/diy/719.jpg"/>
        <asset id="4287" src="$url/module/ui/farm/diy/719.swf"/>
        <asset id="4289" src="$url/module/ui/farm/diy/719b.jpg"/>
        <asset id="1097" src="$url/module/ui/farm/diy/71b.jpg"/>
        <asset id="1099" src="$url/module/ui/farm/diy/72.jpg"/>
        <asset id="1098" src="$url/module/ui/farm/diy/72.swf"/>
        <asset id="4291" src="$url/module/ui/farm/diy/720.jpg"/>
        <asset id="4290" src="$url/module/ui/farm/diy/720.swf"/>
        <asset id="4292" src="$url/module/ui/farm/diy/720b.jpg"/>
        <asset id="4364" src="$url/module/ui/farm/diy/721.jpg"/>
        <asset id="4363" src="$url/module/ui/farm/diy/721.swf"/>
        <asset id="4365" src="$url/module/ui/farm/diy/721b.jpg"/>
        <asset id="4367" src="$url/module/ui/farm/diy/722.jpg"/>
        <asset id="4366" src="$url/module/ui/farm/diy/722.swf"/>
        <asset id="4368" src="$url/module/ui/farm/diy/722b.jpg"/>
        <asset id="4370" src="$url/module/ui/farm/diy/723.jpg"/>
        <asset id="4369" src="$url/module/ui/farm/diy/723.swf"/>
        <asset id="4371" src="$url/module/ui/farm/diy/723b.jpg"/>
        <asset id="4373" src="$url/module/ui/farm/diy/724.jpg"/>
        <asset id="4372" src="$url/module/ui/farm/diy/724.swf"/>
        <asset id="4374" src="$url/module/ui/farm/diy/724b.jpg"/>
        <asset id="4376" src="$url/module/ui/farm/diy/725.jpg"/>
        <asset id="4375" src="$url/module/ui/farm/diy/725.swf"/>
        <asset id="4377" src="$url/module/ui/farm/diy/725b.jpg"/>
        <asset id="4379" src="$url/module/ui/farm/diy/726.jpg"/>
        <asset id="4378" src="$url/module/ui/farm/diy/726.swf"/>
        <asset id="4380" src="$url/module/ui/farm/diy/726b.jpg"/>
        <asset id="4382" src="$url/module/ui/farm/diy/727.jpg"/>
        <asset id="4381" src="$url/module/ui/farm/diy/727.swf"/>
        <asset id="4383" src="$url/module/ui/farm/diy/727b.jpg"/>
        <asset id="4385" src="$url/module/ui/farm/diy/728.jpg"/>
        <asset id="4384" src="$url/module/ui/farm/diy/728.swf"/>
        <asset id="4386" src="$url/module/ui/farm/diy/728b.jpg"/>
        <asset id="4455" src="$url/module/ui/farm/diy/729.jpg"/>
        <asset id="4454" src="$url/module/ui/farm/diy/729.swf"/>
        <asset id="4456" src="$url/module/ui/farm/diy/729b.jpg"/>
        <asset id="1100" src="$url/module/ui/farm/diy/72b.jpg"/>
        <asset id="1102" src="$url/module/ui/farm/diy/73.jpg"/>
        <asset id="1101" src="$url/module/ui/farm/diy/73.swf"/>
        <asset id="4458" src="$url/module/ui/farm/diy/730.jpg"/>
        <asset id="4457" src="$url/module/ui/farm/diy/730.swf"/>
        <asset id="4459" src="$url/module/ui/farm/diy/730b.jpg"/>
        <asset id="4461" src="$url/module/ui/farm/diy/731.jpg"/>
        <asset id="4460" src="$url/module/ui/farm/diy/731.swf"/>
        <asset id="4462" src="$url/module/ui/farm/diy/731b.jpg"/>
        <asset id="4466" src="$url/module/ui/farm/diy/732.jpg"/>
        <asset id="4463" src="$url/module/ui/farm/diy/732.swf"/>
        <asset id="4472" src="$url/module/ui/farm/diy/732b.jpg"/>
        <asset id="4474" src="$url/module/ui/farm/diy/733.jpg"/>
        <asset id="4473" src="$url/module/ui/farm/diy/733.swf"/>
        <asset id="4475" src="$url/module/ui/farm/diy/733b.jpg"/>
        <asset id="4477" src="$url/module/ui/farm/diy/734.jpg"/>
        <asset id="4476" src="$url/module/ui/farm/diy/734.swf"/>
        <asset id="4478" src="$url/module/ui/farm/diy/734b.jpg"/>
        <asset id="4480" src="$url/module/ui/farm/diy/735.jpg"/>
        <asset id="4479" src="$url/module/ui/farm/diy/735.swf"/>
        <asset id="4481" src="$url/module/ui/farm/diy/735b.jpg"/>
        <asset id="4483" src="$url/module/ui/farm/diy/736.jpg"/>
        <asset id="4482" src="$url/module/ui/farm/diy/736.swf"/>
        <asset id="4484" src="$url/module/ui/farm/diy/736b.jpg"/>
        <asset id="4574" src="$url/module/ui/farm/diy/737.jpg"/>
        <asset id="4573" src="$url/module/ui/farm/diy/737.swf"/>
        <asset id="4575" src="$url/module/ui/farm/diy/737b.jpg"/>
        <asset id="4577" src="$url/module/ui/farm/diy/738.jpg"/>
        <asset id="4576" src="$url/module/ui/farm/diy/738.swf"/>
        <asset id="4578" src="$url/module/ui/farm/diy/738b.jpg"/>
        <asset id="4580" src="$url/module/ui/farm/diy/739.jpg"/>
        <asset id="4579" src="$url/module/ui/farm/diy/739.swf"/>
        <asset id="4581" src="$url/module/ui/farm/diy/739b.jpg"/>
        <asset id="1103" src="$url/module/ui/farm/diy/73b.jpg"/>
        <asset id="1105" src="$url/module/ui/farm/diy/74.jpg"/>
        <asset id="1104" src="$url/module/ui/farm/diy/74.swf"/>
        <asset id="4583" src="$url/module/ui/farm/diy/740.jpg"/>
        <asset id="4582" src="$url/module/ui/farm/diy/740.swf"/>
        <asset id="4584" src="$url/module/ui/farm/diy/740b.jpg"/>
        <asset id="4586" src="$url/module/ui/farm/diy/741.jpg"/>
        <asset id="4585" src="$url/module/ui/farm/diy/741.swf"/>
        <asset id="4587" src="$url/module/ui/farm/diy/741b.jpg"/>
        <asset id="4589" src="$url/module/ui/farm/diy/742.jpg"/>
        <asset id="4588" src="$url/module/ui/farm/diy/742.swf"/>
        <asset id="4590" src="$url/module/ui/farm/diy/742b.jpg"/>
        <asset id="4592" src="$url/module/ui/farm/diy/743.jpg"/>
        <asset id="4591" src="$url/module/ui/farm/diy/743.swf"/>
        <asset id="4593" src="$url/module/ui/farm/diy/743b.jpg"/>
        <asset id="4595" src="$url/module/ui/farm/diy/744.jpg"/>
        <asset id="4594" src="$url/module/ui/farm/diy/744.swf"/>
        <asset id="4596" src="$url/module/ui/farm/diy/744b.jpg"/>
        <asset id="4634" src="$url/module/ui/farm/diy/745.jpg"/>
        <asset id="4633" src="$url/module/ui/farm/diy/745.swf"/>
        <asset id="4635" src="$url/module/ui/farm/diy/745b.jpg"/>
        <asset id="4637" src="$url/module/ui/farm/diy/746.jpg"/>
        <asset id="4636" src="$url/module/ui/farm/diy/746.swf"/>
        <asset id="4638" src="$url/module/ui/farm/diy/746b.jpg"/>
        <asset id="4640" src="$url/module/ui/farm/diy/747.jpg"/>
        <asset id="4639" src="$url/module/ui/farm/diy/747.swf"/>
        <asset id="4641" src="$url/module/ui/farm/diy/747b.jpg"/>
        <asset id="4643" src="$url/module/ui/farm/diy/748.jpg"/>
        <asset id="4642" src="$url/module/ui/farm/diy/748.swf"/>
        <asset id="4644" src="$url/module/ui/farm/diy/748b.jpg"/>
        <asset id="4646" src="$url/module/ui/farm/diy/749.jpg"/>
        <asset id="4645" src="$url/module/ui/farm/diy/749.swf"/>
        <asset id="4647" src="$url/module/ui/farm/diy/749b.jpg"/>
        <asset id="1106" src="$url/module/ui/farm/diy/74b.jpg"/>
        <asset id="1108" src="$url/module/ui/farm/diy/75.jpg"/>
        <asset id="1107" src="$url/module/ui/farm/diy/75.swf"/>
        <asset id="4649" src="$url/module/ui/farm/diy/750.jpg"/>
        <asset id="4648" src="$url/module/ui/farm/diy/750.swf"/>
        <asset id="4650" src="$url/module/ui/farm/diy/750b.jpg"/>
        <asset id="4652" src="$url/module/ui/farm/diy/751.jpg"/>
        <asset id="4651" src="$url/module/ui/farm/diy/751.swf"/>
        <asset id="4653" src="$url/module/ui/farm/diy/751b.jpg"/>
        <asset id="4655" src="$url/module/ui/farm/diy/752.jpg"/>
        <asset id="4654" src="$url/module/ui/farm/diy/752.swf"/>
        <asset id="4656" src="$url/module/ui/farm/diy/752b.jpg"/>
        <asset id="4658" src="$url/module/ui/farm/diy/753.jpg"/>
        <asset id="4657" src="$url/module/ui/farm/diy/753.swf"/>
        <asset id="4659" src="$url/module/ui/farm/diy/753b.jpg"/>
        <asset id="4661" src="$url/module/ui/farm/diy/754.jpg"/>
        <asset id="4660" src="$url/module/ui/farm/diy/754.swf"/>
        <asset id="4662" src="$url/module/ui/farm/diy/754b.jpg"/>
        <asset id="4664" src="$url/module/ui/farm/diy/755.jpg"/>
        <asset id="4663" src="$url/module/ui/farm/diy/755.swf"/>
        <asset id="4665" src="$url/module/ui/farm/diy/755b.jpg"/>
        <asset id="4667" src="$url/module/ui/farm/diy/756.jpg"/>
        <asset id="4666" src="$url/module/ui/farm/diy/756.swf"/>
        <asset id="4668" src="$url/module/ui/farm/diy/756b.jpg"/>
        <asset id="4762" src="$url/module/ui/farm/diy/757.jpg"/>
        <asset id="4761" src="$url/module/ui/farm/diy/757.swf"/>
        <asset id="4763" src="$url/module/ui/farm/diy/757b.jpg"/>
        <asset id="4765" src="$url/module/ui/farm/diy/758.jpg"/>
        <asset id="4764" src="$url/module/ui/farm/diy/758.swf"/>
        <asset id="4766" src="$url/module/ui/farm/diy/758b.jpg"/>
        <asset id="4768" src="$url/module/ui/farm/diy/759.jpg"/>
        <asset id="4767" src="$url/module/ui/farm/diy/759.swf"/>
        <asset id="4769" src="$url/module/ui/farm/diy/759b.jpg"/>
        <asset id="1109" src="$url/module/ui/farm/diy/75b.jpg"/>
        <asset id="1111" src="$url/module/ui/farm/diy/76.jpg"/>
        <asset id="1110" src="$url/module/ui/farm/diy/76.swf"/>
        <asset id="4771" src="$url/module/ui/farm/diy/760.jpg"/>
        <asset id="4770" src="$url/module/ui/farm/diy/760.swf"/>
        <asset id="4772" src="$url/module/ui/farm/diy/760b.jpg"/>
         <asset id="4830" src="$url/module/ui/farm/diy/761.jpg"/>
        <asset id="4829" src="$url/module/ui/farm/diy/761.swf"/>
        <asset id="4831" src="$url/module/ui/farm/diy/761b.jpg"/>
        <asset id="4833" src="$url/module/ui/farm/diy/762.jpg"/>
        <asset id="4832" src="$url/module/ui/farm/diy/762.swf"/>
        <asset id="4834" src="$url/module/ui/farm/diy/762b.jpg"/>
        <asset id="4836" src="$url/module/ui/farm/diy/763.jpg"/>
        <asset id="4835" src="$url/module/ui/farm/diy/763.swf"/>
        <asset id="4837" src="$url/module/ui/farm/diy/763b.jpg"/>
        <asset id="4839" src="$url/module/ui/farm/diy/764.jpg"/>
        <asset id="4838" src="$url/module/ui/farm/diy/764.swf"/>
        <asset id="4840" src="$url/module/ui/farm/diy/764b.jpg"/>
        <asset id="4848" src="$url/module/ui/farm/diy/765.jpg"/>
        <asset id="4847" src="$url/module/ui/farm/diy/765.swf"/>
        <asset id="4849" src="$url/module/ui/farm/diy/765b.jpg"/>
        <asset id="4851" src="$url/module/ui/farm/diy/766.jpg"/>
        <asset id="4850" src="$url/module/ui/farm/diy/766.swf"/>
        <asset id="4852" src="$url/module/ui/farm/diy/766b.jpg"/>
        <asset id="4854" src="$url/module/ui/farm/diy/767.jpg"/>
        <asset id="4853" src="$url/module/ui/farm/diy/767.swf"/>
        <asset id="4855" src="$url/module/ui/farm/diy/767b.jpg"/>
        <asset id="4857" src="$url/module/ui/farm/diy/768.jpg"/>
        <asset id="4856" src="$url/module/ui/farm/diy/768.swf"/>
        <asset id="4858" src="$url/module/ui/farm/diy/768b.jpg"/>
        <asset id="4860" src="$url/module/ui/farm/diy/769.jpg"/>
        <asset id="4859" src="$url/module/ui/farm/diy/769.swf"/>
        <asset id="4861" src="$url/module/ui/farm/diy/769b.jpg"/>
		<asset id="1112" src="$url/module/ui/farm/diy/76b.jpg"/>
        <asset id="1114" src="$url/module/ui/farm/diy/77.jpg"/>
        <asset id="1113" src="$url/module/ui/farm/diy/77.swf"/>
        <asset id="4863" src="$url/module/ui/farm/diy/770.jpg"/>
        <asset id="4862" src="$url/module/ui/farm/diy/770.swf"/>
        <asset id="4864" src="$url/module/ui/farm/diy/770b.jpg"/>
        <asset id="4866" src="$url/module/ui/farm/diy/771.jpg"/>
        <asset id="4865" src="$url/module/ui/farm/diy/771.swf"/>
        <asset id="4867" src="$url/module/ui/farm/diy/771b.jpg"/>
        <asset id="4869" src="$url/module/ui/farm/diy/772.jpg"/>
        <asset id="4868" src="$url/module/ui/farm/diy/772.swf"/>
        <asset id="4870" src="$url/module/ui/farm/diy/772b.jpg"/>
        <asset id="5035" src="$url/module/ui/farm/diy/773.jpg"/>
        <asset id="5034" src="$url/module/ui/farm/diy/773.swf"/>
        <asset id="5036" src="$url/module/ui/farm/diy/773b.jpg"/>
        <asset id="5038" src="$url/module/ui/farm/diy/774.jpg"/>
        <asset id="5037" src="$url/module/ui/farm/diy/774.swf"/>
        <asset id="5039" src="$url/module/ui/farm/diy/774b.jpg"/>
        <asset id="5041" src="$url/module/ui/farm/diy/775.jpg"/>
        <asset id="5040" src="$url/module/ui/farm/diy/775.swf"/>
        <asset id="5042" src="$url/module/ui/farm/diy/775b.jpg"/>
        <asset id="5044" src="$url/module/ui/farm/diy/776.jpg"/>
        <asset id="5043" src="$url/module/ui/farm/diy/776.swf"/>
        <asset id="5045" src="$url/module/ui/farm/diy/776b.jpg"/>
        <asset id="5047" src="$url/module/ui/farm/diy/777.jpg"/>
        <asset id="5046" src="$url/module/ui/farm/diy/777.swf"/>
        <asset id="5048" src="$url/module/ui/farm/diy/777b.jpg"/>
        <asset id="5050" src="$url/module/ui/farm/diy/778.jpg"/>
        <asset id="5049" src="$url/module/ui/farm/diy/778.swf"/>
        <asset id="5051" src="$url/module/ui/farm/diy/778b.jpg"/>
        <asset id="5053" src="$url/module/ui/farm/diy/779.jpg"/>
        <asset id="5052" src="$url/module/ui/farm/diy/779.swf"/>
        <asset id="5054" src="$url/module/ui/farm/diy/779b.jpg"/>
        <asset id="1115" src="$url/module/ui/farm/diy/77b.jpg"/>
        <asset id="1117" src="$url/module/ui/farm/diy/78.jpg"/>
        <asset id="1116" src="$url/module/ui/farm/diy/78.swf"/>
        <asset id="5056" src="$url/module/ui/farm/diy/780.jpg"/>
        <asset id="5055" src="$url/module/ui/farm/diy/780.swf"/>
        <asset id="5057" src="$url/module/ui/farm/diy/780b.jpg"/>
        <asset id="5189" src="$url/module/ui/farm/diy/781.jpg"/>
        <asset id="5188" src="$url/module/ui/farm/diy/781.swf"/>
        <asset id="5190" src="$url/module/ui/farm/diy/781b.jpg"/>
        <asset id="5192" src="$url/module/ui/farm/diy/782.jpg"/>
        <asset id="5191" src="$url/module/ui/farm/diy/782.swf"/>
        <asset id="5193" src="$url/module/ui/farm/diy/782b.jpg"/>
        <asset id="5195" src="$url/module/ui/farm/diy/783.jpg"/>
        <asset id="5194" src="$url/module/ui/farm/diy/783.swf"/>
        <asset id="5196" src="$url/module/ui/farm/diy/783b.jpg"/>
        <asset id="5198" src="$url/module/ui/farm/diy/784.jpg"/>
        <asset id="5197" src="$url/module/ui/farm/diy/784.swf"/>
        <asset id="5199" src="$url/module/ui/farm/diy/784b.jpg"/>
        <asset id="5201" src="$url/module/ui/farm/diy/785.jpg"/>
        <asset id="5200" src="$url/module/ui/farm/diy/785.swf"/>
        <asset id="5202" src="$url/module/ui/farm/diy/785b.jpg"/>
        <asset id="5204" src="$url/module/ui/farm/diy/786.jpg"/>
        <asset id="5203" src="$url/module/ui/farm/diy/786.swf"/>
        <asset id="5205" src="$url/module/ui/farm/diy/786b.jpg"/>
        <asset id="5207" src="$url/module/ui/farm/diy/787.jpg"/>
        <asset id="5206" src="$url/module/ui/farm/diy/787.swf"/>
        <asset id="5208" src="$url/module/ui/farm/diy/787b.jpg"/>
        <asset id="5210" src="$url/module/ui/farm/diy/788.jpg"/>
        <asset id="5209" src="$url/module/ui/farm/diy/788.swf"/>
        <asset id="5211" src="$url/module/ui/farm/diy/788b.jpg"/>
        <asset id="5213" src="$url/module/ui/farm/diy/789.jpg"/>
        <asset id="5212" src="$url/module/ui/farm/diy/789.swf"/>
        <asset id="5214" src="$url/module/ui/farm/diy/789b.jpg"/>
		<asset id="1118" src="$url/module/ui/farm/diy/78b.jpg"/>
        <asset id="1120" src="$url/module/ui/farm/diy/79.jpg"/>
        <asset id="1119" src="$url/module/ui/farm/diy/79.swf"/>
         <asset id="5216" src="$url/module/ui/farm/diy/790.jpg"/>
        <asset id="5215" src="$url/module/ui/farm/diy/790.swf"/>
        <asset id="5217" src="$url/module/ui/farm/diy/790b.jpg"/>
        <asset id="5219" src="$url/module/ui/farm/diy/791.jpg"/>
        <asset id="5218" src="$url/module/ui/farm/diy/791.swf"/>
        <asset id="5220" src="$url/module/ui/farm/diy/791b.jpg"/>
        <asset id="5222" src="$url/module/ui/farm/diy/792.jpg"/>
        <asset id="5221" src="$url/module/ui/farm/diy/792.swf"/>
        <asset id="5223" src="$url/module/ui/farm/diy/792b.jpg"/>
		<asset id="1121" src="$url/module/ui/farm/diy/79b.jpg"/>
        <asset id="1123" src="$url/module/ui/farm/diy/80.jpg"/>
        <asset id="1122" src="$url/module/ui/farm/diy/80.swf"/>
        <asset id="1124" src="$url/module/ui/farm/diy/80b.jpg"/>
        <asset id="1126" src="$url/module/ui/farm/diy/81.jpg"/>
        <asset id="1125" src="$url/module/ui/farm/diy/81.swf"/>
        <asset id="1127" src="$url/module/ui/farm/diy/81b.jpg"/>
        <asset id="1129" src="$url/module/ui/farm/diy/82.jpg"/>
        <asset id="1128" src="$url/module/ui/farm/diy/82.swf"/>
        <asset id="1130" src="$url/module/ui/farm/diy/82b.jpg"/>
        <asset id="1132" src="$url/module/ui/farm/diy/83.jpg"/>
        <asset id="1131" src="$url/module/ui/farm/diy/83.swf"/>
        <asset id="1133" src="$url/module/ui/farm/diy/83b.jpg"/>
        <asset id="1135" src="$url/module/ui/farm/diy/84.jpg"/>
        <asset id="1134" src="$url/module/ui/farm/diy/84.swf"/>
        <asset id="1136" src="$url/module/ui/farm/diy/84b.jpg"/>
        <asset id="1138" src="$url/module/ui/farm/diy/85.jpg"/>
        <asset id="1137" src="$url/module/ui/farm/diy/85.swf"/>
        <asset id="1139" src="$url/module/ui/farm/diy/85b.jpg"/>
        <asset id="1141" src="$url/module/ui/farm/diy/86.jpg"/>
        <asset id="1140" src="$url/module/ui/farm/diy/86.swf"/>
        <asset id="1142" src="$url/module/ui/farm/diy/86b.jpg"/>
        <asset id="1144" src="$url/module/ui/farm/diy/87.jpg"/>
        <asset id="1143" src="$url/module/ui/farm/diy/87.swf"/>
        <asset id="1145" src="$url/module/ui/farm/diy/87b.jpg"/>
        <asset id="1147" src="$url/module/ui/farm/diy/88.jpg"/>
        <asset id="1146" src="$url/module/ui/farm/diy/88.swf"/>
        <asset id="1148" src="$url/module/ui/farm/diy/88b.jpg"/>
        <asset id="1150" src="$url/module/ui/farm/diy/89.jpg"/>
        <asset id="1149" src="$url/module/ui/farm/diy/89.swf"/>
        <asset id="1151" src="$url/module/ui/farm/diy/89b.jpg"/>
        <asset id="1153" src="$url/module/ui/farm/diy/90.jpg"/>
        <asset id="1152" src="$url/module/ui/farm/diy/90.swf"/>
        <asset id="1154" src="$url/module/ui/farm/diy/90b.jpg"/>
        <asset id="1156" src="$url/module/ui/farm/diy/91.jpg"/>
        <asset id="1155" src="$url/module/ui/farm/diy/91.swf"/>
        <asset id="1157" src="$url/module/ui/farm/diy/91b.jpg"/>
        <asset id="1159" src="$url/module/ui/farm/diy/92.jpg"/>
        <asset id="1158" src="$url/module/ui/farm/diy/92.swf"/>
        <asset id="1160" src="$url/module/ui/farm/diy/92b.jpg"/>
        <asset id="1162" src="$url/module/ui/farm/diy/93.jpg"/>
        <asset id="1161" src="$url/module/ui/farm/diy/93.swf"/>
        <asset id="1163" src="$url/module/ui/farm/diy/93b.jpg"/>
        <asset id="1165" src="$url/module/ui/farm/diy/94.jpg"/>
        <asset id="1164" src="$url/module/ui/farm/diy/94.swf"/>
        <asset id="1166" src="$url/module/ui/farm/diy/94b.jpg"/>
        <asset id="1168" src="$url/module/ui/farm/diy/95.jpg"/>
        <asset id="1167" src="$url/module/ui/farm/diy/95.swf"/>
        <asset id="1169" src="$url/module/ui/farm/diy/95b.jpg"/>
        <asset id="1171" src="$url/module/ui/farm/diy/96.jpg"/>
        <asset id="1170" src="$url/module/ui/farm/diy/96.swf"/>
        <asset id="1172" src="$url/module/ui/farm/diy/96b.jpg"/>
        <asset id="1174" src="$url/module/ui/farm/diy/97.jpg"/>
        <asset id="1173" src="$url/module/ui/farm/diy/97.swf"/>
        <asset id="1175" src="$url/module/ui/farm/diy/97b.jpg"/>
        <asset id="1177" src="$url/module/ui/farm/diy/98.jpg"/>
        <asset id="1176" src="$url/module/ui/farm/diy/98.swf"/>
        <asset id="1178" src="$url/module/ui/farm/diy/98b.jpg"/>
        <asset id="1180" src="$url/module/ui/farm/diy/99.jpg"/>
        <asset id="1179" src="$url/module/ui/farm/diy/99.swf"/>
        <asset id="1181" src="$url/module/ui/farm/diy/99b.jpg"/>
        <asset id="1720" src="$url/module/ui/farm/diy/board/1.png"/>
        <asset id="1719" src="$url/module/ui/farm/diy/board/1.swf"/>
        <asset id="1738" src="$url/module/ui/farm/diy/board/10.png"/>
        <asset id="1737" src="$url/module/ui/farm/diy/board/10.swf"/>
        <asset id="1740" src="$url/module/ui/farm/diy/board/11.png"/>
        <asset id="1739" src="$url/module/ui/farm/diy/board/11.swf"/>
        <asset id="1742" src="$url/module/ui/farm/diy/board/12.png"/>
        <asset id="1741" src="$url/module/ui/farm/diy/board/12.swf"/>
        <asset id="1744" src="$url/module/ui/farm/diy/board/13.png"/>
        <asset id="1743" src="$url/module/ui/farm/diy/board/13.swf"/>
        <asset id="1746" src="$url/module/ui/farm/diy/board/14.png"/>
        <asset id="1745" src="$url/module/ui/farm/diy/board/14.swf"/>
        <asset id="1748" src="$url/module/ui/farm/diy/board/15.png"/>
        <asset id="1747" src="$url/module/ui/farm/diy/board/15.swf"/>
        <asset id="4224" src="$url/module/ui/farm/diy/board/16.swf"/>
        <asset id="4225" src="$url/module/ui/farm/diy/board/17.swf"/>
        <asset id="4226" src="$url/module/ui/farm/diy/board/18.swf"/>
        <asset id="1722" src="$url/module/ui/farm/diy/board/2.png"/>
        <asset id="1721" src="$url/module/ui/farm/diy/board/2.swf"/>
        <asset id="1724" src="$url/module/ui/farm/diy/board/3.png"/>
        <asset id="1723" src="$url/module/ui/farm/diy/board/3.swf"/>
        <asset id="1726" src="$url/module/ui/farm/diy/board/4.png"/>
        <asset id="1725" src="$url/module/ui/farm/diy/board/4.swf"/>
        <asset id="1728" src="$url/module/ui/farm/diy/board/5.png"/>
        <asset id="1727" src="$url/module/ui/farm/diy/board/5.swf"/>
        <asset id="1730" src="$url/module/ui/farm/diy/board/6.png"/>
        <asset id="1729" src="$url/module/ui/farm/diy/board/6.swf"/>
        <asset id="1732" src="$url/module/ui/farm/diy/board/7.png"/>
        <asset id="1731" src="$url/module/ui/farm/diy/board/7.swf"/>
        <asset id="1734" src="$url/module/ui/farm/diy/board/8.png"/>
        <asset id="1733" src="$url/module/ui/farm/diy/board/8.swf"/>
        <asset id="1736" src="$url/module/ui/farm/diy/board/9.png"/>
        <asset id="1735" src="$url/module/ui/farm/diy/board/9.swf"/>
        <asset id="4126" src="$url/module/ui/farm/diy/board/90020.png"/>
        <asset id="4125" src="$url/module/ui/farm/diy/board/90020.swf"/>
        <asset id="5162" src="$url/module/ui/farm/diy/board/90021.png"/>
        <asset id="5161" src="$url/module/ui/farm/diy/board/90021.swf"/>
        <asset id="5164" src="$url/module/ui/farm/diy/board/90022.png"/>
        <asset id="5163" src="$url/module/ui/farm/diy/board/90022.swf"/>
        <asset id="5166" src="$url/module/ui/farm/diy/board/90023.png"/>
        <asset id="5165" src="$url/module/ui/farm/diy/board/90023.swf"/>
        <asset id="4529" src="$url/module/ui/allcards/Card_2001.swf"/>
        <asset id="4530" src="$url/module/ui/allcards/Card_2002.swf"/>
        <asset id="4531" src="$url/module/ui/allcards/Card_2003.swf"/>
        <asset id="4532" src="$url/module/ui/allcards/Card_2004.swf"/>
        <asset id="4533" src="$url/module/ui/allcards/Card_2005.swf"/>
        <asset id="4534" src="$url/module/ui/allcards/Card_2006.swf"/>
        <asset id="4535" src="$url/module/ui/allcards/Card_2007.swf"/>
        <asset id="4536" src="$url/module/ui/allcards/Card_2008.swf"/>
        <asset id="2252" src="$url/module/ui/allcrops/Crop_1.swf"/>
        <asset id="2270" src="$url/module/ui/allcrops/Crop_10.swf"/>
        <asset id="2446" src="$url/module/ui/allcrops/Crop_100.swf"/>
        <asset id="2447" src="$url/module/ui/allcrops/Crop_100_Seed.swf"/>
        <asset id="2448" src="$url/module/ui/allcrops/Crop_101.swf"/>
        <asset id="2449" src="$url/module/ui/allcrops/Crop_101_Seed.swf"/>
        <asset id="2450" src="$url/module/ui/allcrops/Crop_102.swf"/>
        <asset id="2451" src="$url/module/ui/allcrops/Crop_102_Seed.swf"/>
        <asset id="2452" src="$url/module/ui/allcrops/Crop_103.swf"/>
        <asset id="2453" src="$url/module/ui/allcrops/Crop_103_Seed.swf"/>
        <asset id="2454" src="$url/module/ui/allcrops/Crop_104.swf"/>
        <asset id="2455" src="$url/module/ui/allcrops/Crop_104_Seed.swf"/>
        <asset id="2456" src="$url/module/ui/allcrops/Crop_105.swf"/>
        <asset id="2457" src="$url/module/ui/allcrops/Crop_105_Seed.swf"/>
        <asset id="2458" src="$url/module/ui/allcrops/Crop_106.swf"/>
        <asset id="2459" src="$url/module/ui/allcrops/Crop_106_Seed.swf"/>
        <asset id="2460" src="$url/module/ui/allcrops/Crop_107.swf"/>
        <asset id="2461" src="$url/module/ui/allcrops/Crop_107_Seed.swf"/>
        <asset id="2462" src="$url/module/ui/allcrops/Crop_108.swf"/>
        <asset id="2463" src="$url/module/ui/allcrops/Crop_108_Seed.swf"/>
        <asset id="2464" src="$url/module/ui/allcrops/Crop_109.swf"/>
        <asset id="2465" src="$url/module/ui/allcrops/Crop_109_Seed.swf"/>
        <asset id="2271" src="$url/module/ui/allcrops/Crop_10_Seed.swf"/>
        <asset id="2272" src="$url/module/ui/allcrops/Crop_11.swf"/>
        <asset id="2466" src="$url/module/ui/allcrops/Crop_110.swf"/>
        <asset id="2467" src="$url/module/ui/allcrops/Crop_110_Seed.swf"/>
        <asset id="2468" src="$url/module/ui/allcrops/Crop_111.swf"/>
        <asset id="2469" src="$url/module/ui/allcrops/Crop_111_Seed.swf"/>
        <asset id="2470" src="$url/module/ui/allcrops/Crop_112.swf"/>
        <asset id="2471" src="$url/module/ui/allcrops/Crop_112_Seed.swf"/>
        <asset id="2472" src="$url/module/ui/allcrops/Crop_113.swf"/>
        <asset id="2473" src="$url/module/ui/allcrops/Crop_113_Seed.swf"/>
        <asset id="2474" src="$url/module/ui/allcrops/Crop_114.swf"/>
        <asset id="2475" src="$url/module/ui/allcrops/Crop_114_Seed.swf"/>
        <asset id="2476" src="$url/module/ui/allcrops/Crop_117.swf"/>
        <asset id="2477" src="$url/module/ui/allcrops/Crop_117_Seed.swf"/>
        <asset id="2478" src="$url/module/ui/allcrops/Crop_118.swf"/>
        <asset id="2479" src="$url/module/ui/allcrops/Crop_118_Seed.swf"/>
        <asset id="2480" src="$url/module/ui/allcrops/Crop_119.swf"/>
        <asset id="2481" src="$url/module/ui/allcrops/Crop_119_Seed.swf"/>
        <asset id="2273" src="$url/module/ui/allcrops/Crop_11_Seed.swf"/>
        <asset id="2482" src="$url/module/ui/allcrops/Crop_121.swf"/>
        <asset id="2483" src="$url/module/ui/allcrops/Crop_121_Seed.swf"/>
        <asset id="2484" src="$url/module/ui/allcrops/Crop_122.swf"/>
        <asset id="2485" src="$url/module/ui/allcrops/Crop_122_Seed.swf"/>
        <asset id="2486" src="$url/module/ui/allcrops/Crop_123.swf"/>
        <asset id="2487" src="$url/module/ui/allcrops/Crop_123_Seed.swf"/>
        <asset id="2488" src="$url/module/ui/allcrops/Crop_125.swf"/>
        <asset id="2489" src="$url/module/ui/allcrops/Crop_125_Seed.swf"/>
        <asset id="2490" src="$url/module/ui/allcrops/Crop_126.swf"/>
        <asset id="2491" src="$url/module/ui/allcrops/Crop_126_Seed.swf"/>
        <asset id="2494" src="$url/module/ui/allcrops/Crop_128.swf"/>
        <asset id="2495" src="$url/module/ui/allcrops/Crop_128_Seed.swf"/>
        <asset id="3570" src="$url/module/ui/allcrops/Crop_129.swf"/>
        <asset id="3571" src="$url/module/ui/allcrops/Crop_129_Seed.swf"/>
        <asset id="2274" src="$url/module/ui/allcrops/Crop_13.swf"/>
        <asset id="2695" src="$url/module/ui/allcrops/Crop_130.swf"/>
        <asset id="2696" src="$url/module/ui/allcrops/Crop_130_Seed.swf"/>
        <asset id="4129" src="$url/module/ui/allcrops/Crop_131.swf"/>
        <asset id="4130" src="$url/module/ui/allcrops/Crop_131_Seed.swf"/>
        <asset id="3676" src="$url/module/ui/allcrops/Crop_133.swf"/>
        <asset id="3677" src="$url/module/ui/allcrops/Crop_133_Seed.swf"/>
        <asset id="2496" src="$url/module/ui/allcrops/Crop_134.swf"/>
        <asset id="2497" src="$url/module/ui/allcrops/Crop_134_Seed.swf"/>
        <asset id="2498" src="$url/module/ui/allcrops/Crop_135.swf"/>
        <asset id="2499" src="$url/module/ui/allcrops/Crop_135_Seed.swf"/>
        <asset id="2500" src="$url/module/ui/allcrops/Crop_136.swf"/>
        <asset id="2501" src="$url/module/ui/allcrops/Crop_136_Seed.swf"/>
        <asset id="2502" src="$url/module/ui/allcrops/Crop_137.swf"/>
        <asset id="2503" src="$url/module/ui/allcrops/Crop_137_Seed.swf"/>
        <asset id="2504" src="$url/module/ui/allcrops/Crop_138.swf"/>
        <asset id="2505" src="$url/module/ui/allcrops/Crop_138_Seed.swf"/>
        <asset id="2693" src="$url/module/ui/allcrops/Crop_139.swf"/>
        <asset id="2694" src="$url/module/ui/allcrops/Crop_139_Seed.swf"/>
        <asset id="2275" src="$url/module/ui/allcrops/Crop_13_Seed.swf"/>
        <asset id="2276" src="$url/module/ui/allcrops/Crop_14.swf"/>
        <asset id="3788" src="$url/module/ui/allcrops/Crop_140.swf"/>
        <asset id="3789" src="$url/module/ui/allcrops/Crop_140_Seed.swf"/>
        <asset id="3935" src="$url/module/ui/allcrops/Crop_141.swf"/>
        <asset id="3936" src="$url/module/ui/allcrops/Crop_141_Seed.swf"/>
        <asset id="4721" src="$url/module/ui/allcrops/Crop_142.swf"/>
        <asset id="4722" src="$url/module/ui/allcrops/Crop_142_Seed.swf"/>
        <asset id="2506" src="$url/module/ui/allcrops/Crop_143.swf"/>
        <asset id="2507" src="$url/module/ui/allcrops/Crop_143_Seed.swf"/>
        <asset id="2508" src="$url/module/ui/allcrops/Crop_144.swf"/>
        <asset id="2509" src="$url/module/ui/allcrops/Crop_144_Seed.swf"/>
        <asset id="2510" src="$url/module/ui/allcrops/Crop_145.swf"/>
        <asset id="2511" src="$url/module/ui/allcrops/Crop_145_Seed.swf"/>
        <asset id="2512" src="$url/module/ui/allcrops/Crop_146.swf"/>
        <asset id="2513" src="$url/module/ui/allcrops/Crop_146_Seed.swf"/>
        <asset id="2514" src="$url/module/ui/allcrops/Crop_147.swf"/>
        <asset id="2515" src="$url/module/ui/allcrops/Crop_147_Seed.swf"/>
        <asset id="2691" src="$url/module/ui/allcrops/Crop_148.swf"/>
        <asset id="2692" src="$url/module/ui/allcrops/Crop_148_Seed.swf"/>
        <asset id="2277" src="$url/module/ui/allcrops/Crop_14_Seed.swf"/>
        <asset id="2278" src="$url/module/ui/allcrops/Crop_15.swf"/>
        <asset id="3396" src="$url/module/ui/allcrops/Crop_151.swf"/>
        <asset id="3397" src="$url/module/ui/allcrops/Crop_151_Seed.swf"/>
        <asset id="2680" src="$url/module/ui/allcrops/Crop_153.swf"/>
        <asset id="2681" src="$url/module/ui/allcrops/Crop_153_Seed.swf"/>
        <asset id="2682" src="$url/module/ui/allcrops/Crop_154.swf"/>
        <asset id="2683" src="$url/module/ui/allcrops/Crop_154_Seed.swf"/>
        <asset id="3400" src="$url/module/ui/allcrops/Crop_158.swf"/>
        <asset id="3476" src="$url/module/ui/allcrops/Crop_158_movie.swf"/>
        <asset id="3401" src="$url/module/ui/allcrops/Crop_158_Seed.swf"/>
        <asset id="4083" src="$url/module/ui/allcrops/Crop_159.swf"/>
        <asset id="4084" src="$url/module/ui/allcrops/Crop_159_Seed.swf"/>
        <asset id="2279" src="$url/module/ui/allcrops/Crop_15_Seed.swf"/>
        <asset id="2280" src="$url/module/ui/allcrops/Crop_16.swf"/>
        <asset id="3398" src="$url/module/ui/allcrops/Crop_160.swf"/>
        <asset id="3399" src="$url/module/ui/allcrops/Crop_160_Seed.swf"/>
        <asset id="3672" src="$url/module/ui/allcrops/Crop_161.swf"/>
        <asset id="3673" src="$url/module/ui/allcrops/Crop_161_Seed.swf"/>
        <asset id="3764" src="$url/module/ui/allcrops/Crop_162.swf"/>
        <asset id="3765" src="$url/module/ui/allcrops/Crop_162_Seed.swf"/>
        <asset id="3756" src="$url/module/ui/allcrops/Crop_164.swf"/>
        <asset id="3757" src="$url/module/ui/allcrops/Crop_164_Seed.swf"/>
        <asset id="3674" src="$url/module/ui/allcrops/Crop_165.swf"/>
        <asset id="3675" src="$url/module/ui/allcrops/Crop_165_Seed.swf"/>
        <asset id="3758" src="$url/module/ui/allcrops/Crop_166.swf"/>
        <asset id="3759" src="$url/module/ui/allcrops/Crop_166_Seed.swf"/>
        <asset id="3760" src="$url/module/ui/allcrops/Crop_167.swf"/>
        <asset id="3761" src="$url/module/ui/allcrops/Crop_167_Seed.swf"/>
        <asset id="3940" src="$url/module/ui/allcrops/Crop_168.swf"/>
        <asset id="3942" src="$url/module/ui/allcrops/Crop_168_movie.swf"/>
        <asset id="3941" src="$url/module/ui/allcrops/Crop_168_Seed.swf"/>
        <asset id="4117" src="$url/module/ui/allcrops/Crop_169.swf"/>
        <asset id="4118" src="$url/module/ui/allcrops/Crop_169_Seed.swf"/>
        <asset id="2281" src="$url/module/ui/allcrops/Crop_16_Seed.swf"/>
        <asset id="2282" src="$url/module/ui/allcrops/Crop_17.swf"/>
        <asset id="4119" src="$url/module/ui/allcrops/Crop_170.swf"/>
        <asset id="4120" src="$url/module/ui/allcrops/Crop_170_Seed.swf"/>
        <asset id="4121" src="$url/module/ui/allcrops/Crop_171.swf"/>
        <asset id="4122" src="$url/module/ui/allcrops/Crop_171_Seed.swf"/>
        <asset id="4938" src="$url/module/ui/allcrops/Crop_172.swf"/>
        <asset id="4939" src="$url/module/ui/allcrops/Crop_172_Seed.swf"/>
		<asset id="4341" src="$url/module/ui/allcrops/Crop_173.swf"/>
        <asset id="4342" src="$url/module/ui/allcrops/Crop_173_Seed.swf"/>
        <asset id="4233" src="$url/module/ui/allcrops/Crop_174.swf"/>
        <asset id="4234" src="$url/module/ui/allcrops/Crop_174_Seed.swf"/>
        <asset id="4343" src="$url/module/ui/allcrops/Crop_175.swf"/>
        <asset id="4344" src="$url/module/ui/allcrops/Crop_175_Seed.swf"/>
        <asset id="4127" src="$url/module/ui/allcrops/Crop_176.swf"/>
        <asset id="4128" src="$url/module/ui/allcrops/Crop_176_Seed.swf"/>
        <asset id="4110" src="$url/module/ui/allcrops/Crop_177.swf"/>
        <asset id="4111" src="$url/module/ui/allcrops/Crop_177_Seed.swf"/>
        <asset id="4568" src="$url/module/ui/allcrops/Crop_178.swf"/>
        <asset id="4569" src="$url/module/ui/allcrops/Crop_178_Seed.swf"/>
        <asset id="4331" src="$url/module/ui/allcrops/Crop_179.swf"/>
        <asset id="4332" src="$url/module/ui/allcrops/Crop_179_Seed.swf"/>
        <asset id="2283" src="$url/module/ui/allcrops/Crop_17_Seed.swf"/>
        <asset id="2284" src="$url/module/ui/allcrops/Crop_18.swf"/>
        <asset id="5254" src="$url/module/ui/allcrops/Crop_186.swf"/>
        <asset id="5255" src="$url/module/ui/allcrops/Crop_186_Seed.swf"/>
        <asset id="4940" src="$url/module/ui/allcrops/Crop_187.swf"/>
        <asset id="4941" src="$url/module/ui/allcrops/Crop_187_Seed.swf"/>
		<asset id="2285" src="$url/module/ui/allcrops/Crop_18_Seed.swf"/>
        <asset id="2286" src="$url/module/ui/allcrops/Crop_19.swf"/>
        <asset id="4675" src="$url/module/ui/allcrops/Crop_190.swf"/>
        <asset id="4676" src="$url/module/ui/allcrops/Crop_190_Seed.swf"/>
        <asset id="4775" src="$url/module/ui/allcrops/Crop_191.swf"/>
        <asset id="4776" src="$url/module/ui/allcrops/Crop_191_Seed.swf"/>
        <asset id="4816" src="$url/module/ui/allcrops/Crop_194.swf"/>
        <asset id="4817" src="$url/module/ui/allcrops/Crop_194_Seed.swf"/>
        <asset id="5372" src="$url/module/ui/allcrops/Crop_195.swf"/>
        <asset id="5373" src="$url/module/ui/allcrops/Crop_195_Seed.swf"/>
        <asset id="5090" src="$url/module/ui/allcrops/Crop_197.swf"/>
        <asset id="5091" src="$url/module/ui/allcrops/Crop_197_Seed.swf"/>
        <asset id="5256" src="$url/module/ui/allcrops/Crop_198.swf"/>
        <asset id="5257" src="$url/module/ui/allcrops/Crop_198_Seed.swf"/>
		<asset id="2287" src="$url/module/ui/allcrops/Crop_19_Seed.swf"/>
        <asset id="2253" src="$url/module/ui/allcrops/Crop_1_Seed.swf"/>
        <asset id="2254" src="$url/module/ui/allcrops/Crop_2.swf"/>
        <asset id="2288" src="$url/module/ui/allcrops/Crop_20.swf"/>
        <asset id="2516" src="$url/module/ui/allcrops/Crop_201.swf"/>
        <asset id="2517" src="$url/module/ui/allcrops/Crop_201_Seed.swf"/>
        <asset id="2518" src="$url/module/ui/allcrops/Crop_202.swf"/>
        <asset id="2519" src="$url/module/ui/allcrops/Crop_202_Seed.swf"/>
        <asset id="2614" src="$url/module/ui/allcrops/Crop_204.swf"/>
        <asset id="2615" src="$url/module/ui/allcrops/Crop_204_Seed.swf"/>
        <asset id="3394" src="$url/module/ui/allcrops/Crop_208.swf"/>
        <asset id="3395" src="$url/module/ui/allcrops/Crop_208_Seed.swf"/>
        <asset id="3938" src="$url/module/ui/allcrops/Crop_209.swf"/>
        <asset id="3939" src="$url/module/ui/allcrops/Crop_209_Seed.swf"/>
        <asset id="2289" src="$url/module/ui/allcrops/Crop_20_Seed.swf"/>
        <asset id="2290" src="$url/module/ui/allcrops/Crop_21.swf"/>
        <asset id="4231" src="$url/module/ui/allcrops/Crop_210.swf"/>
        <asset id="4232" src="$url/module/ui/allcrops/Crop_210_Seed.swf"/>
        <asset id="4677" src="$url/module/ui/allcrops/Crop_211.swf"/>
        <asset id="4678" src="$url/module/ui/allcrops/Crop_211_Seed.swf"/>
        <asset id="2524" src="$url/module/ui/allcrops/Crop_218.swf"/>
        <asset id="2525" src="$url/module/ui/allcrops/Crop_218_Seed.swf"/>
        <asset id="2526" src="$url/module/ui/allcrops/Crop_219.swf"/>
        <asset id="2527" src="$url/module/ui/allcrops/Crop_219_Seed.swf"/>
        <asset id="2291" src="$url/module/ui/allcrops/Crop_21_Seed.swf"/>
        <asset id="2292" src="$url/module/ui/allcrops/Crop_22.swf"/>
        <asset id="2528" src="$url/module/ui/allcrops/Crop_220.swf"/>
        <asset id="2529" src="$url/module/ui/allcrops/Crop_220_Seed.swf"/>
        <asset id="2530" src="$url/module/ui/allcrops/Crop_221.swf"/>
        <asset id="2531" src="$url/module/ui/allcrops/Crop_221_Seed.swf"/>
        <asset id="2532" src="$url/module/ui/allcrops/Crop_222.swf"/>
        <asset id="2533" src="$url/module/ui/allcrops/Crop_222_Seed.swf"/>
        <asset id="2534" src="$url/module/ui/allcrops/Crop_223.swf"/>
        <asset id="2535" src="$url/module/ui/allcrops/Crop_223_Seed.swf"/>
        <asset id="2536" src="$url/module/ui/allcrops/Crop_224.swf"/>
        <asset id="2537" src="$url/module/ui/allcrops/Crop_224_Seed.swf"/>
        <asset id="2538" src="$url/module/ui/allcrops/Crop_225.swf"/>
        <asset id="2539" src="$url/module/ui/allcrops/Crop_225_Seed.swf"/>
        <asset id="2540" src="$url/module/ui/allcrops/Crop_226.swf"/>
        <asset id="2541" src="$url/module/ui/allcrops/Crop_226_Seed.swf"/>
        <asset id="2542" src="$url/module/ui/allcrops/Crop_227.swf"/>
        <asset id="2543" src="$url/module/ui/allcrops/Crop_227_Seed.swf"/>
        <asset id="2544" src="$url/module/ui/allcrops/Crop_228.swf"/>
        <asset id="2545" src="$url/module/ui/allcrops/Crop_228_Seed.swf"/>
        <asset id="2546" src="$url/module/ui/allcrops/Crop_229.swf"/>
        <asset id="2547" src="$url/module/ui/allcrops/Crop_229_Seed.swf"/>
        <asset id="2293" src="$url/module/ui/allcrops/Crop_22_Seed.swf"/>
        <asset id="2294" src="$url/module/ui/allcrops/Crop_23.swf"/>
        <asset id="2548" src="$url/module/ui/allcrops/Crop_230.swf"/>
        <asset id="2549" src="$url/module/ui/allcrops/Crop_230_Seed.swf"/>
        <asset id="2550" src="$url/module/ui/allcrops/Crop_231.swf"/>
        <asset id="2551" src="$url/module/ui/allcrops/Crop_231_Seed.swf"/>
        <asset id="2552" src="$url/module/ui/allcrops/Crop_232.swf"/>
        <asset id="2553" src="$url/module/ui/allcrops/Crop_232_Seed.swf"/>
        <asset id="2554" src="$url/module/ui/allcrops/Crop_233.swf"/>
        <asset id="2555" src="$url/module/ui/allcrops/Crop_233_Seed.swf"/>
        <asset id="2616" src="$url/module/ui/allcrops/Crop_234.swf"/>
        <asset id="2617" src="$url/module/ui/allcrops/Crop_234_Seed.swf"/>
        <asset id="2556" src="$url/module/ui/allcrops/Crop_235.swf"/>
        <asset id="2557" src="$url/module/ui/allcrops/Crop_235_Seed.swf"/>
        <asset id="2558" src="$url/module/ui/allcrops/Crop_236.swf"/>
        <asset id="2559" src="$url/module/ui/allcrops/Crop_236_Seed.swf"/>
        <asset id="2560" src="$url/module/ui/allcrops/Crop_237.swf"/>
        <asset id="2561" src="$url/module/ui/allcrops/Crop_237_Seed.swf"/>
        <asset id="2562" src="$url/module/ui/allcrops/Crop_238.swf"/>
        <asset id="2563" src="$url/module/ui/allcrops/Crop_238_Seed.swf"/>
        <asset id="2564" src="$url/module/ui/allcrops/Crop_239.swf"/>
        <asset id="2565" src="$url/module/ui/allcrops/Crop_239_Seed.swf"/>
        <asset id="2295" src="$url/module/ui/allcrops/Crop_23_Seed.swf"/>
        <asset id="2296" src="$url/module/ui/allcrops/Crop_24.swf"/>
        <asset id="2566" src="$url/module/ui/allcrops/Crop_240.swf"/>
        <asset id="2567" src="$url/module/ui/allcrops/Crop_240_Seed.swf"/>
        <asset id="2568" src="$url/module/ui/allcrops/Crop_241.swf"/>
        <asset id="2569" src="$url/module/ui/allcrops/Crop_241_Seed.swf"/>
        <asset id="3392" src="$url/module/ui/allcrops/Crop_242.swf"/>
        <asset id="3393" src="$url/module/ui/allcrops/Crop_242_Seed.swf"/>
        <asset id="3762" src="$url/module/ui/allcrops/Crop_243.swf"/>
        <asset id="3763" src="$url/module/ui/allcrops/Crop_243_Seed.swf"/>
        <asset id="4723" src="$url/module/ui/allcrops/Crop_244.swf"/>
        <asset id="4724" src="$url/module/ui/allcrops/Crop_244_Seed.swf"/>
        <asset id="2570" src="$url/module/ui/allcrops/Crop_245.swf"/>
        <asset id="2571" src="$url/module/ui/allcrops/Crop_245_Seed.swf"/>
        <asset id="4131" src="$url/module/ui/allcrops/Crop_246.swf"/>
        <asset id="4132" src="$url/module/ui/allcrops/Crop_246_Seed.swf"/>
        <asset id="4432" src="$url/module/ui/allcrops/Crop_247.swf"/>
        <asset id="4433" src="$url/module/ui/allcrops/Crop_247_Seed.swf"/>
        <asset id="4942" src="$url/module/ui/allcrops/Crop_249.swf"/>
        <asset id="4943" src="$url/module/ui/allcrops/Crop_249_Seed.swf"/>
		<asset id="2297" src="$url/module/ui/allcrops/Crop_24_Seed.swf"/>
        <asset id="2298" src="$url/module/ui/allcrops/Crop_25.swf"/>
        <asset id="2299" src="$url/module/ui/allcrops/Crop_25_Seed.swf"/>
        <asset id="2300" src="$url/module/ui/allcrops/Crop_26.swf"/>
        <asset id="2301" src="$url/module/ui/allcrops/Crop_26_Seed.swf"/>
        <asset id="2302" src="$url/module/ui/allcrops/Crop_27.swf"/>
        <asset id="2303" src="$url/module/ui/allcrops/Crop_27_Seed.swf"/>
        <asset id="2304" src="$url/module/ui/allcrops/Crop_28.swf"/>
        <asset id="2305" src="$url/module/ui/allcrops/Crop_28_Seed.swf"/>
        <asset id="2306" src="$url/module/ui/allcrops/Crop_29.swf"/>
        <asset id="2307" src="$url/module/ui/allcrops/Crop_29_Seed.swf"/>
        <asset id="2255" src="$url/module/ui/allcrops/Crop_2_Seed.swf"/>
        <asset id="2256" src="$url/module/ui/allcrops/Crop_3.swf"/>
        <asset id="2308" src="$url/module/ui/allcrops/Crop_30.swf"/>
        <asset id="2572" src="$url/module/ui/allcrops/Crop_301.swf"/>
        <asset id="2573" src="$url/module/ui/allcrops/Crop_301_Seed.swf"/>
        <asset id="2574" src="$url/module/ui/allcrops/Crop_302.swf"/>
        <asset id="2575" src="$url/module/ui/allcrops/Crop_302_Seed.swf"/>
        <asset id="4262" src="$url/module/ui/allcrops/Crop_303.swf"/>
        <asset id="4263" src="$url/module/ui/allcrops/Crop_303_Seed.swf"/>
        <asset id="2618" src="$url/module/ui/allcrops/Crop_304.swf"/>
        <asset id="2619" src="$url/module/ui/allcrops/Crop_304_Seed.swf"/>
        <asset id="5376" src="$url/module/ui/allcrops/Crop_305.swf"/>
        <asset id="5377" src="$url/module/ui/allcrops/Crop_305_Seed.swf"/>
        <asset id="5374" src="$url/module/ui/allcrops/Crop_306.swf"/>
        <asset id="5375" src="$url/module/ui/allcrops/Crop_306_Seed.swf"/>
        <asset id="4408" src="$url/module/ui/allcrops/Crop_309.swf"/>
        <asset id="4409" src="$url/module/ui/allcrops/Crop_309_Seed.swf"/>
        <asset id="2309" src="$url/module/ui/allcrops/Crop_30_Seed.swf"/>
        <asset id="2310" src="$url/module/ui/allcrops/Crop_31.swf"/>
        <asset id="4410" src="$url/module/ui/allcrops/Crop_310.swf"/>
        <asset id="4411" src="$url/module/ui/allcrops/Crop_310_Seed.swf"/>
        <asset id="4345" src="$url/module/ui/allcrops/Crop_311.swf"/>
        <asset id="4346" src="$url/module/ui/allcrops/Crop_311_Seed.swf"/>
        <asset id="4347" src="$url/module/ui/allcrops/Crop_312.swf"/>
        <asset id="4348" src="$url/module/ui/allcrops/Crop_312_Seed.swf"/>
        <asset id="4349" src="$url/module/ui/allcrops/Crop_313.swf"/>
        <asset id="4350" src="$url/module/ui/allcrops/Crop_313_Seed.swf"/>
        <asset id="4333" src="$url/module/ui/allcrops/Crop_314.swf"/>
        <asset id="4334" src="$url/module/ui/allcrops/Crop_314_Seed.swf"/>
        <asset id="4335" src="$url/module/ui/allcrops/Crop_315.swf"/>
        <asset id="4336" src="$url/module/ui/allcrops/Crop_315_Seed.swf"/>
        <asset id="4337" src="$url/module/ui/allcrops/Crop_316.swf"/>
        <asset id="4338" src="$url/module/ui/allcrops/Crop_316_Seed.swf"/>
        <asset id="4339" src="$url/module/ui/allcrops/Crop_317.swf"/>
        <asset id="4340" src="$url/module/ui/allcrops/Crop_317_Seed.swf"/>
        <asset id="4417" src="$url/module/ui/allcrops/Crop_318.swf"/>
        <asset id="4418" src="$url/module/ui/allcrops/Crop_318_Seed.swf"/>
        <asset id="4419" src="$url/module/ui/allcrops/Crop_319.swf"/>
        <asset id="4420" src="$url/module/ui/allcrops/Crop_319_Seed.swf"/>
        <asset id="2311" src="$url/module/ui/allcrops/Crop_31_Seed.swf"/>
        <asset id="2312" src="$url/module/ui/allcrops/Crop_32.swf"/>
        <asset id="4421" src="$url/module/ui/allcrops/Crop_320.swf"/>
        <asset id="4422" src="$url/module/ui/allcrops/Crop_320_Seed.swf"/>
        <asset id="4560" src="$url/module/ui/allcrops/Crop_321.swf"/>
        <asset id="4561" src="$url/module/ui/allcrops/Crop_321_Seed.swf"/>
        <asset id="4562" src="$url/module/ui/allcrops/Crop_322.swf"/>
        <asset id="4563" src="$url/module/ui/allcrops/Crop_322_Seed.swf"/>
        <asset id="4566" src="$url/module/ui/allcrops/Crop_323.swf"/>
        <asset id="4567" src="$url/module/ui/allcrops/Crop_323_Seed.swf"/>
        <asset id="4671" src="$url/module/ui/allcrops/Crop_324.swf"/>
        <asset id="4672" src="$url/module/ui/allcrops/Crop_324_Seed.swf"/>
        <asset id="4673" src="$url/module/ui/allcrops/Crop_325.swf"/>
        <asset id="4674" src="$url/module/ui/allcrops/Crop_325_Seed.swf"/>
        <asset id="4229" src="$url/module/ui/allcrops/Crop_326.swf"/>
        <asset id="4230" src="$url/module/ui/allcrops/Crop_326_Seed.swf"/>
        <asset id="4944" src="$url/module/ui/allcrops/Crop_327.swf"/>
        <asset id="4945" src="$url/module/ui/allcrops/Crop_327_Seed.swf"/>
        <asset id="4946" src="$url/module/ui/allcrops/Crop_328.swf"/>
        <asset id="4947" src="$url/module/ui/allcrops/Crop_328_Seed.swf"/>
        <asset id="4948" src="$url/module/ui/allcrops/Crop_329.swf"/>
        <asset id="4949" src="$url/module/ui/allcrops/Crop_329_Seed.swf"/>
		<asset id="2313" src="$url/module/ui/allcrops/Crop_32_Seed.swf"/>
        <asset id="2314" src="$url/module/ui/allcrops/Crop_33.swf"/>
        <asset id="4680" src="$url/module/ui/allcrops/Crop_330.swf"/>
        <asset id="4681" src="$url/module/ui/allcrops/Crop_330_Seed.swf"/>
        <asset id="4570" src="$url/module/ui/allcrops/Crop_332.swf"/>
        <asset id="4571" src="$url/module/ui/allcrops/Crop_332_Seed.swf"/>
        <asset id="4725" src="$url/module/ui/allcrops/Crop_333.swf"/>
        <asset id="4726" src="$url/module/ui/allcrops/Crop_333_Seed.swf"/>
        <asset id="4727" src="$url/module/ui/allcrops/Crop_334.swf"/>
        <asset id="4729" src="$url/module/ui/allcrops/Crop_334_movie.swf"/>
        <asset id="4728" src="$url/module/ui/allcrops/Crop_334_Seed.swf"/>
        <asset id="2315" src="$url/module/ui/allcrops/Crop_33_Seed.swf"/>
        <asset id="2316" src="$url/module/ui/allcrops/Crop_34.swf"/>
        <asset id="5092" src="$url/module/ui/allcrops/Crop_340.swf"/>
        <asset id="5093" src="$url/module/ui/allcrops/Crop_340_Seed.swf"/>
        <asset id="5258" src="$url/module/ui/allcrops/Crop_341.swf"/>
        <asset id="5259" src="$url/module/ui/allcrops/Crop_341_Seed.swf"/>
        <asset id="5260" src="$url/module/ui/allcrops/Crop_342.swf"/>
        <asset id="5261" src="$url/module/ui/allcrops/Crop_342_Seed.swf"/>
        <asset id="5262" src="$url/module/ui/allcrops/Crop_343.swf"/>
        <asset id="5263" src="$url/module/ui/allcrops/Crop_343_Seed.swf"/>
        <asset id="5094" src="$url/module/ui/allcrops/Crop_344.swf"/>
        <asset id="5095" src="$url/module/ui/allcrops/Crop_344_Seed.swf"/>
        <asset id="5264" src="$url/module/ui/allcrops/Crop_345.swf"/>
        <asset id="5265" src="$url/module/ui/allcrops/Crop_345_Seed.swf"/>
        <asset id="5266" src="$url/module/ui/allcrops/Crop_346.swf"/>
        <asset id="5267" src="$url/module/ui/allcrops/Crop_346_Seed.swf"/>
        <asset id="5096" src="$url/module/ui/allcrops/Crop_347.swf"/>
        <asset id="5097" src="$url/module/ui/allcrops/Crop_347_Seed.swf"/>
        <asset id="5268" src="$url/module/ui/allcrops/Crop_348.swf"/>
        <asset id="5269" src="$url/module/ui/allcrops/Crop_348_Seed.swf"/>
        <asset id="5270" src="$url/module/ui/allcrops/Crop_349.swf"/>
        <asset id="5271" src="$url/module/ui/allcrops/Crop_349_Seed.swf"/>
        <asset id="2317" src="$url/module/ui/allcrops/Crop_34_Seed.swf"/>
        <asset id="2318" src="$url/module/ui/allcrops/Crop_35.swf"/>
        <asset id="5272" src="$url/module/ui/allcrops/Crop_350.swf"/>
        <asset id="5273" src="$url/module/ui/allcrops/Crop_350_Seed.swf"/>
        <asset id="5274" src="$url/module/ui/allcrops/Crop_351.swf"/>
        <asset id="5275" src="$url/module/ui/allcrops/Crop_351_Seed.swf"/>
        <asset id="5276" src="$url/module/ui/allcrops/Crop_352.swf"/>
        <asset id="5277" src="$url/module/ui/allcrops/Crop_352_Seed.swf"/>
        <asset id="5098" src="$url/module/ui/allcrops/Crop_353.swf"/>
        <asset id="5099" src="$url/module/ui/allcrops/Crop_353_Seed.swf"/>
        <asset id="5278" src="$url/module/ui/allcrops/Crop_354.swf"/>
        <asset id="5279" src="$url/module/ui/allcrops/Crop_354_Seed.swf"/>
        <asset id="5100" src="$url/module/ui/allcrops/Crop_355.swf"/>
        <asset id="5101" src="$url/module/ui/allcrops/Crop_355_Seed.swf"/>
        <asset id="5280" src="$url/module/ui/allcrops/Crop_356.swf"/>
        <asset id="5281" src="$url/module/ui/allcrops/Crop_356_Seed.swf"/>
        <asset id="5102" src="$url/module/ui/allcrops/Crop_357.swf"/>
        <asset id="5103" src="$url/module/ui/allcrops/Crop_357_Seed.swf"/>
        <asset id="5282" src="$url/module/ui/allcrops/Crop_358.swf"/>
        <asset id="5283" src="$url/module/ui/allcrops/Crop_358_Seed.swf"/>
        <asset id="5284" src="$url/module/ui/allcrops/Crop_359.swf"/>
        <asset id="5285" src="$url/module/ui/allcrops/Crop_359_Seed.swf"/>
        <asset id="2319" src="$url/module/ui/allcrops/Crop_35_Seed.swf"/>
        <asset id="2320" src="$url/module/ui/allcrops/Crop_36.swf"/>
        <asset id="5286" src="$url/module/ui/allcrops/Crop_360.swf"/>
        <asset id="5287" src="$url/module/ui/allcrops/Crop_360_Seed.swf"/>
        <asset id="5288" src="$url/module/ui/allcrops/Crop_361.swf"/>
        <asset id="5289" src="$url/module/ui/allcrops/Crop_361_Seed.swf"/>
        <asset id="5104" src="$url/module/ui/allcrops/Crop_362.swf"/>
        <asset id="5105" src="$url/module/ui/allcrops/Crop_362_Seed.swf"/>
        <asset id="5290" src="$url/module/ui/allcrops/Crop_363.swf"/>
        <asset id="5291" src="$url/module/ui/allcrops/Crop_363_Seed.swf"/>
        <asset id="5106" src="$url/module/ui/allcrops/Crop_364.swf"/>
        <asset id="5107" src="$url/module/ui/allcrops/Crop_364_Seed.swf"/>
        <asset id="5292" src="$url/module/ui/allcrops/Crop_365.swf"/>
        <asset id="5293" src="$url/module/ui/allcrops/Crop_365_Seed.swf"/>
        <asset id="4952" src="$url/module/ui/allcrops/Crop_366.swf"/>
        <asset id="4953" src="$url/module/ui/allcrops/Crop_366_Seed.swf"/>
        <asset id="4950" src="$url/module/ui/allcrops/Crop_367.swf"/>
        <asset id="4951" src="$url/module/ui/allcrops/Crop_367_Seed.swf"/>
		<asset id="2321" src="$url/module/ui/allcrops/Crop_36_Seed.swf"/>
        <asset id="2322" src="$url/module/ui/allcrops/Crop_37.swf"/>
        <asset id="2323" src="$url/module/ui/allcrops/Crop_37_Seed.swf"/>
        <asset id="2324" src="$url/module/ui/allcrops/Crop_38.swf"/>
        <asset id="2325" src="$url/module/ui/allcrops/Crop_38_Seed.swf"/>
        <asset id="2326" src="$url/module/ui/allcrops/Crop_39.swf"/>
        <asset id="2327" src="$url/module/ui/allcrops/Crop_39_Seed.swf"/>
        <asset id="2257" src="$url/module/ui/allcrops/Crop_3_Seed.swf"/>
        <asset id="2258" src="$url/module/ui/allcrops/Crop_4.swf"/>
        <asset id="2328" src="$url/module/ui/allcrops/Crop_40.swf"/>
        <asset id="2329" src="$url/module/ui/allcrops/Crop_40_Seed.swf"/>
        <asset id="2330" src="$url/module/ui/allcrops/Crop_41.swf"/>
        <asset id="2331" src="$url/module/ui/allcrops/Crop_41_Seed.swf"/>
        <asset id="2332" src="$url/module/ui/allcrops/Crop_42.swf"/>
        <asset id="2333" src="$url/module/ui/allcrops/Crop_42_Seed.swf"/>
        <asset id="4329" src="$url/module/ui/allcrops/Crop_43.swf"/>
        <asset id="4330" src="$url/module/ui/allcrops/Crop_43_Seed.swf"/>
        <asset id="2334" src="$url/module/ui/allcrops/Crop_44.swf"/>
        <asset id="2335" src="$url/module/ui/allcrops/Crop_44_Seed.swf"/>
        <asset id="2336" src="$url/module/ui/allcrops/Crop_45.swf"/>
        <asset id="2337" src="$url/module/ui/allcrops/Crop_45_Seed.swf"/>
        <asset id="2338" src="$url/module/ui/allcrops/Crop_46.swf"/>
        <asset id="2339" src="$url/module/ui/allcrops/Crop_46_Seed.swf"/>
        <asset id="2340" src="$url/module/ui/allcrops/Crop_47.swf"/>
        <asset id="2341" src="$url/module/ui/allcrops/Crop_47_Seed.swf"/>
        <asset id="2342" src="$url/module/ui/allcrops/Crop_48.swf"/>
        <asset id="2343" src="$url/module/ui/allcrops/Crop_48_Seed.swf"/>
        <asset id="2344" src="$url/module/ui/allcrops/Crop_49.swf"/>
        <asset id="2345" src="$url/module/ui/allcrops/Crop_49_Seed.swf"/>
        <asset id="2259" src="$url/module/ui/allcrops/Crop_4_Seed.swf"/>
        <asset id="2260" src="$url/module/ui/allcrops/Crop_5.swf"/>
        <asset id="2346" src="$url/module/ui/allcrops/Crop_50.swf"/>
        <asset id="2347" src="$url/module/ui/allcrops/Crop_50_Seed.swf"/>
        <asset id="2348" src="$url/module/ui/allcrops/Crop_51.swf"/>
        <asset id="2349" src="$url/module/ui/allcrops/Crop_51_Seed.swf"/>
        <asset id="2350" src="$url/module/ui/allcrops/Crop_52.swf"/>
        <asset id="2351" src="$url/module/ui/allcrops/Crop_52_Seed.swf"/>
        <asset id="2352" src="$url/module/ui/allcrops/Crop_53.swf"/>
        <asset id="2353" src="$url/module/ui/allcrops/Crop_53_Seed.swf"/>
        <asset id="2354" src="$url/module/ui/allcrops/Crop_54.swf"/>
        <asset id="2355" src="$url/module/ui/allcrops/Crop_54_Seed.swf"/>
        <asset id="2356" src="$url/module/ui/allcrops/Crop_55.swf"/>
        <asset id="2357" src="$url/module/ui/allcrops/Crop_55_Seed.swf"/>
        <asset id="2358" src="$url/module/ui/allcrops/Crop_56.swf"/>
        <asset id="2359" src="$url/module/ui/allcrops/Crop_56_Seed.swf"/>
        <asset id="2360" src="$url/module/ui/allcrops/Crop_57.swf"/>
        <asset id="2361" src="$url/module/ui/allcrops/Crop_57_Seed.swf"/>
        <asset id="2362" src="$url/module/ui/allcrops/Crop_58.swf"/>
        <asset id="2363" src="$url/module/ui/allcrops/Crop_58_Seed.swf"/>
        <asset id="2364" src="$url/module/ui/allcrops/Crop_59.swf"/>
        <asset id="2365" src="$url/module/ui/allcrops/Crop_59_Seed.swf"/>
        <asset id="2261" src="$url/module/ui/allcrops/Crop_5_Seed.swf"/>
        <asset id="2262" src="$url/module/ui/allcrops/Crop_6.swf"/>
        <asset id="2366" src="$url/module/ui/allcrops/Crop_60.swf"/>
        <asset id="2367" src="$url/module/ui/allcrops/Crop_60_Seed.swf"/>
        <asset id="2368" src="$url/module/ui/allcrops/Crop_61.swf"/>
        <asset id="2369" src="$url/module/ui/allcrops/Crop_61_Seed.swf"/>
        <asset id="2370" src="$url/module/ui/allcrops/Crop_62.swf"/>
        <asset id="2371" src="$url/module/ui/allcrops/Crop_62_Seed.swf"/>
        <asset id="2372" src="$url/module/ui/allcrops/Crop_63.swf"/>
        <asset id="2373" src="$url/module/ui/allcrops/Crop_63_Seed.swf"/>
        <asset id="2374" src="$url/module/ui/allcrops/Crop_64.swf"/>
        <asset id="2375" src="$url/module/ui/allcrops/Crop_64_Seed.swf"/>
        <asset id="2376" src="$url/module/ui/allcrops/Crop_65.swf"/>
        <asset id="2377" src="$url/module/ui/allcrops/Crop_65_Seed.swf"/>
        <asset id="2378" src="$url/module/ui/allcrops/Crop_66.swf"/>
        <asset id="2379" src="$url/module/ui/allcrops/Crop_66_Seed.swf"/>
        <asset id="2380" src="$url/module/ui/allcrops/Crop_67.swf"/>
        <asset id="2381" src="$url/module/ui/allcrops/Crop_67_Seed.swf"/>
        <asset id="2382" src="$url/module/ui/allcrops/Crop_68.swf"/>
        <asset id="2383" src="$url/module/ui/allcrops/Crop_68_Seed.swf"/>
        <asset id="2384" src="$url/module/ui/allcrops/Crop_69.swf"/>
        <asset id="2385" src="$url/module/ui/allcrops/Crop_69_Seed.swf"/>
        <asset id="2263" src="$url/module/ui/allcrops/Crop_6_Seed.swf"/>
        <asset id="2264" src="$url/module/ui/allcrops/Crop_7.swf"/>
        <asset id="2386" src="$url/module/ui/allcrops/Crop_70.swf"/>
        <asset id="2387" src="$url/module/ui/allcrops/Crop_70_Seed.swf"/>
        <asset id="2388" src="$url/module/ui/allcrops/Crop_71.swf"/>
        <asset id="2389" src="$url/module/ui/allcrops/Crop_71_Seed.swf"/>
        <asset id="2390" src="$url/module/ui/allcrops/Crop_72.swf"/>
        <asset id="2391" src="$url/module/ui/allcrops/Crop_72_Seed.swf"/>
        <asset id="2392" src="$url/module/ui/allcrops/Crop_73.swf"/>
        <asset id="2393" src="$url/module/ui/allcrops/Crop_73_Seed.swf"/>
        <asset id="2394" src="$url/module/ui/allcrops/Crop_74.swf"/>
        <asset id="2395" src="$url/module/ui/allcrops/Crop_74_Seed.swf"/>
        <asset id="2396" src="$url/module/ui/allcrops/Crop_75.swf"/>
        <asset id="2397" src="$url/module/ui/allcrops/Crop_75_Seed.swf"/>
        <asset id="2398" src="$url/module/ui/allcrops/Crop_76.swf"/>
        <asset id="2399" src="$url/module/ui/allcrops/Crop_76_Seed.swf"/>
        <asset id="2400" src="$url/module/ui/allcrops/Crop_77.swf"/>
        <asset id="2401" src="$url/module/ui/allcrops/Crop_77_Seed.swf"/>
        <asset id="2402" src="$url/module/ui/allcrops/Crop_78.swf"/>
        <asset id="2403" src="$url/module/ui/allcrops/Crop_78_Seed.swf"/>
        <asset id="2404" src="$url/module/ui/allcrops/Crop_79.swf"/>
        <asset id="2405" src="$url/module/ui/allcrops/Crop_79_Seed.swf"/>
        <asset id="2265" src="$url/module/ui/allcrops/Crop_7_Seed.swf"/>
        <asset id="2266" src="$url/module/ui/allcrops/Crop_8.swf"/>
        <asset id="2406" src="$url/module/ui/allcrops/Crop_80.swf"/>
        <asset id="2407" src="$url/module/ui/allcrops/Crop_80_Seed.swf"/>
        <asset id="2408" src="$url/module/ui/allcrops/Crop_81.swf"/>
        <asset id="2409" src="$url/module/ui/allcrops/Crop_81_Seed.swf"/>
        <asset id="2410" src="$url/module/ui/allcrops/Crop_82.swf"/>
        <asset id="2411" src="$url/module/ui/allcrops/Crop_82_Seed.swf"/>
        <asset id="2412" src="$url/module/ui/allcrops/Crop_83.swf"/>
        <asset id="2413" src="$url/module/ui/allcrops/Crop_83_Seed.swf"/>
        <asset id="2414" src="$url/module/ui/allcrops/Crop_84.swf"/>
        <asset id="2415" src="$url/module/ui/allcrops/Crop_84_Seed.swf"/>
        <asset id="2416" src="$url/module/ui/allcrops/Crop_85.swf"/>
        <asset id="2417" src="$url/module/ui/allcrops/Crop_85_Seed.swf"/>
        <asset id="2418" src="$url/module/ui/allcrops/Crop_86.swf"/>
        <asset id="2419" src="$url/module/ui/allcrops/Crop_86_Seed.swf"/>
        <asset id="2420" src="$url/module/ui/allcrops/Crop_87.swf"/>
        <asset id="2421" src="$url/module/ui/allcrops/Crop_87_Seed.swf"/>
        <asset id="2422" src="$url/module/ui/allcrops/Crop_88.swf"/>
        <asset id="2423" src="$url/module/ui/allcrops/Crop_88_Seed.swf"/>
        <asset id="2424" src="$url/module/ui/allcrops/Crop_89.swf"/>
        <asset id="2425" src="$url/module/ui/allcrops/Crop_89_Seed.swf"/>
        <asset id="2267" src="$url/module/ui/allcrops/Crop_8_Seed.swf"/>
        <asset id="2268" src="$url/module/ui/allcrops/Crop_9.swf"/>
        <asset id="2426" src="$url/module/ui/allcrops/Crop_90.swf"/>
        <asset id="2427" src="$url/module/ui/allcrops/Crop_90_Seed.swf"/>
        <asset id="2428" src="$url/module/ui/allcrops/Crop_91.swf"/>
        <asset id="2429" src="$url/module/ui/allcrops/Crop_91_Seed.swf"/>
        <asset id="2430" src="$url/module/ui/allcrops/Crop_92.swf"/>
        <asset id="2431" src="$url/module/ui/allcrops/Crop_92_Seed.swf"/>
        <asset id="2432" src="$url/module/ui/allcrops/Crop_93.swf"/>
        <asset id="2433" src="$url/module/ui/allcrops/Crop_93_Seed.swf"/>
        <asset id="2434" src="$url/module/ui/allcrops/Crop_94.swf"/>
        <asset id="2435" src="$url/module/ui/allcrops/Crop_94_Seed.swf"/>
        <asset id="2436" src="$url/module/ui/allcrops/Crop_95.swf"/>
        <asset id="2437" src="$url/module/ui/allcrops/Crop_95_Seed.swf"/>
        <asset id="2438" src="$url/module/ui/allcrops/Crop_96.swf"/>
        <asset id="2439" src="$url/module/ui/allcrops/Crop_96_Seed.swf"/>
        <asset id="2440" src="$url/module/ui/allcrops/Crop_97.swf"/>
        <asset id="2441" src="$url/module/ui/allcrops/Crop_97_Seed.swf"/>
        <asset id="2442" src="$url/module/ui/allcrops/Crop_98.swf"/>
        <asset id="2443" src="$url/module/ui/allcrops/Crop_98_Seed.swf"/>
        <asset id="2444" src="$url/module/ui/allcrops/Crop_99.swf"/>
        <asset id="2445" src="$url/module/ui/allcrops/Crop_99_Seed.swf"/>
        <asset id="2269" src="$url/module/ui/allcrops/Crop_9_Seed.swf"/>
        <asset id="6205" src="$url/module/ui/allcrops/Crop_205.swf"/>
        <asset id="6206" src="$url/module/ui/allcrops/Crop_205_Seed.swf"/>
        <asset id="6207" src="$url/module/ui/allcrops/Crop_206.swf"/>
        <asset id="6208" src="$url/module/ui/allcrops/Crop_206_Seed.swf"/>
	</assets>

	<!-- 农场牌子 -->
	<boards type="json">
		<![CDATA[
		{"boards": [
			{"asset_id": "1719", "id": 90001, "name": "牌子"},
			{"asset_id": "1721", "id": 90002, "name": "牌子"},
			{"asset_id": "1723", "id": 90003, "name": "牌子"},
			{"asset_id": "1725", "id": 90004, "name": "牌子"},
			{"asset_id": "1727", "id": 90005, "name": "牌子"},
			{"asset_id": "1729", "id": 90006, "name": "牌子"},
			{"asset_id": "1731", "id": 90007, "name": "牌子"},
			{"asset_id": "1733", "id": 90008, "name": "牌子"},
			{"asset_id": "1735", "id": 90009, "name": "牌子"},
			{"asset_id": "1737", "id": 90010, "name": "牌子"},
			{"asset_id": "1739", "id": 90011, "name": "牌子"},
			{"asset_id": "1741", "id": 90012, "name": "牌子"},
			{"asset_id": "1743", "id": 90013, "name": "牌子"},
			{"asset_id": "1745", "id": 90014, "name": "牌子"},
			{"asset_id": "1747", "id": 90015, "name": "牌子"},
			{"asset_id": "4224", "id": 90016, "name": "神秘星球牌子1"},
			{"asset_id": "4225", "id": 90017, "name": "神秘星球牌子2"},
			{"asset_id": "4226", "id": 90018, "name": "神秘星球牌子3"},
			{"asset_id": "4125", "id": 90020, "name": "QQ一路同行"},
			{"asset_id": "5161", "id": 90021, "name": "兔年1"},
			{"asset_id": "5163", "id": 90022, "name": "兔年2"},
			{"asset_id": "5165", "id": 90023, "name": "兔年3"}
		]}
		]]>
	</boards>

	<!-- 农场作物 -->
	<crops type="json">
		<![CDATA[
		{"crops": [
			{"asset_id": {"m": "2252", "s": "2253"}, "cropGrow": "14400,28800,46800,64800,86400,2000000000", "gossip": "", "harvestNum": 2, "id": 1, "insect": "0,0,0,0,0,0|50,10,65,-30,110,-2|50,10,65,-30,110,-2|0,0,0,0,0,0", "name": "Dâu tây", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Dâu tây (Strawberry): vị ngọt chua, dùng là nước ép, sinh tố", "type": 1},
			{"asset_id": {"m": "2254", "s": "2255"}, "cropGrow": "7200,14400,25200,36000,36000,2000000000", "gossip": "", "harvestNum": 1, "id": 2, "insect": "0,0,0,0,0,0|74,8,92,2,109,33|74,8,92,2,109,33|0,0,0,0,0,0", "isRestaurant": "1", "name": "Củ cải", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá lớn, Phát triển, Trưởng thành, Chín", "offsetX": 35, "offsetY": -63, "tip": "Củ cải trắng (Radish): là loại củ phổ biến, có vị hơi cay.", "type": 1},
			{"asset_id": {"m": "2256", "s": "2257"}, "cropGrow": "7200,18000,32400,46800,46800,2000000000", "gossip": "", "harvestNum": 1, "id": 3, "insect": "0,0,0,0,0,0|74,8,92,2,109,33|74,8,92,2,109,33|0,0,0,0,0,0", "isFood": "1", "isLock": "1", "name": "Cà rốt", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá lớn, Phát triển, Trưởng thành, Chín", "offsetX": 35, "offsetY": -63, "tip": "Cà rốt (Carrot): loại củ màu đỏ, rất tốt cho sức khỏe. Có thể làm nước ép hoặc sinh tố. Tốt cho mắt và tim, gan.", "type": 1},
			{"asset_id": {"m": "2258", "s": "2259"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 4, "insect": "0,0,0,0,0,0|56,-17,92,-61,115,-11|56,-17,92,-61,115,-11|0,0,0,0,0,0", "isRestaurant": "1", "name": "Bắp", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bắp (Corn): là loại lương thực phổ biến. Có thể nấu chín (luộc) hoặc xào thì ngon tuyệt.", "type": 1},
			{"asset_id": {"m": "2260", "s": "2261"}, "cropGrow": "7200,14400,25200,39600,54000,2000000000", "gossip": "", "harvestNum": 1, "id": 5, "insect": "0,0,0,0,0,0|45,0,99,-10,129,-24|45,-5,99,-15,129,-29|0,0,0,0,0,0", "isRestaurant": "1", "name": "Khoai tây", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Khoa tây (potato) là loại củ có thể thay thế gạo, ngô, giàu tinh bột và chất đạm, vitamin nhóm B, vitamin C.", "type": 1},
			{"asset_id": {"m": "2262", "s": "2263"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 6, "insect": "0,0,0,0,0,0|64,-4,45,-19,103,-17|64,-3,48,-17.5,128,-6|0,0,0,0,0,0", "isRestaurant": "1", "name": "Cà tím", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Cà tím (Aubergine): chứa nhiều vitamin P, bảo vệ tim mạch và giảm bệnh ung thư.", "type": 1},
			{"asset_id": {"m": "2264", "s": "2265"}, "cropGrow": "7200,18000,32400,46800,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 7, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "isRestaurant": "1", "name": "Cà chua", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Cà chua (Tomato): là loại rau củ có vitamin C nhiêu nhất. Ngoài ra còn có vitamin B, giảm cân hữu hiệu.", "type": 1},
			{"asset_id": {"m": "2266", "s": "2267"}, "cropGrow": "10800,21600,32400,46800,64800,2000000000", "gossip": "", "harvestNum": 1, "id": 8, "insect": "0,0,0,0,0,0|50,-13,85,-51,107,1|50,-13,85,-51,107,1|0,0,0,0,0,0", "isRestaurant": "1", "name": "Đậu Hà Lan", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Đậu Hà Lan (Pea): chứa nhiều chất dinh dưỡng, tăng sức đề kháng và phục hồi các chức năng của cơ thể.", "type": 1},
			{"asset_id": {"m": "2268", "s": "2269"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 9, "insect": "0,0,0,0,0,0|65,13,92,-11,120,-15|65,13,92,-11,120,-15|0,0,0,0,0,0", "isRestaurant": "1", "name": "Ớt", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Ớt (Chili): có vị cay, kích thích ăn ngon, giúp tiêu hóa tốt và dốt cháy chất béo giúp giảm cân tốt.", "type": 1},
			{"asset_id": {"m": "2270", "s": "2271"}, "cropGrow": "10800,25200,43200,61200,79200,2000000000", "gossip": "", "harvestNum": 1, "id": 10, "insect": "0,0,0,0,0,0|65,13,92,-11,120,-15|65,13,92,-11,120,-15|0,0,0,0,0,0", "isRestaurant": "1", "name": "Bí ngô", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bí ngô (Pumpkin): là thực phẩm giàu chất dinh dưỡng có vị ngọt, tốt cho mắt.", "type": 1},
			{"asset_id": {"m": "2272", "s": "2273"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 11, "insect": "0,0,0,0,0,0|65,13,92,-11,120,-15|65,13,92,-11,120,-15|0,0,0,0,0,0", "name": "Táo", "nextText": "Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Táo (Apple): giàu nhiều vitamin, khoáng chất và thành phần chất dinh dưỡng khác cần thiết cho não bộ có thể làm tăng trí nhớ,còn giúp đẹp da.", "type": 1},
			{"asset_id": {"m": "2274", "s": "2275"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 13, "insect": "0,0,0,0,0,0|65,-13,92,-26,120,-30|65,-13,92,-26,120,-30|0,0,0,0,0,0", "name": "Nho", "nextText": "Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Nho (Grape): dùng làm nước ép có vị chua ngọt, uống sẽ giúp cơ thể hấp thu nhanh khi hạ đường huyết.", "type": 1},
			{"asset_id": {"m": "2276", "s": "2277"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 14, "insect": "0,0,0,0,0,0|105,44,70,13,119,13|105,44,70,13,119,13|0,0,0,0,0,0", "name": "Dưa hấu", "nextText": "Hạt giống,Nảy mầm,Lá bé,Lá lớn,Ra hoa,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Dưa hấu (Watermelon): trái ngọt và thơm, ăn rất mát, có thể ép lấy nước. Thường được chưng trong ngày tết.", "type": 1},
			{"asset_id": {"m": "2278", "s": "2279"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 15, "insect": "0,0,0,0,0,0|63,-6,80,-30,111,-13|63,-6,80,-30,111,-13|0,0,0,0,0,0", "name": "Chuối", "nextText": "Mọc mầm,Nảy mầm,Lá bé,Lá lớn,Ra hoa,Trưởng thành,Chín", "offsetX": 0, "offsetY": 0, "tip": "Chuối (Banana): người châu Âu gọi đây là \"Trái cây vui vẻ\" vì nó giúp bỏ tính trầm cảm. Chuối rất tốt cho sức khỏe.", "type": 1},
			{"asset_id": {"m": "2280", "s": "2281"}, "cropGrow": "28800,46800,64800,86400,100800,2000000000", "gossip": "", "harvestNum": 7, "id": 16, "insect": "0,0,0,0,0,0|55,-2,87,-35,119,-4|55,-2,87,-35,119,-4|0,0,0,0,0,0", "name": "Mít", "nextText": "Măng,Nảy mầm,Lá bé,Lá lớn,Trái con,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Mít (Jackfruit) là một loại trái cây nhiệt đới rất nổi tiếng, ngọt và ngon, giàu hương vị, nó được gọi là nữ hoàng của các loại trái cây nhiệt đới.", "type": 1},
			{"asset_id": {"m": "2282", "s": "2283"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 7, "id": 17, "insect": "0,0,0,0,0,0|41,-18,85,-47,113,6|41,-18,85,-47,113,6|0,0,0,0,0,0", "name": "Mận đen", "nextText": " Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Mận đen (Black Plum) có trái màu tím sẫm, vị ngọt dày, chứa một lượng lớn protein, chất xơ và do đó trên.", "type": 1},
			{"asset_id": {"m": "2284", "s": "2285"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 2, "id": 18, "insect": "0,0,0,0,0,0|71,-24,69,-63,116,-53|71,-24,69,-63,116,-53|0,0,0,0,0,0", "isFood": "1", "isLock": "1", "name": "Đào tiên", "nextText": " Hạt giống, Nảy mầm, Ra hoa, Lá nhỏ, Lá lớn, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Đào tiên (Peach): rất giàu dinh dưỡng, tốt cho máu.", "type": 1},
			{"asset_id": {"m": "2286", "s": "2287"}, "cropGrow": "25200,50400,75600,104400,133200,2000000000", "gossip": "", "harvestNum": 3, "id": 19, "insect": "0,0,0,0,0,0|60,-7,80,-26,105,-10|60,-7,80,-26,105,-10|0,0,0,0,0,0", "name": "Cam", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Cam (Orange): có vị chua ngọt, có thể dùng làm nước giải khát, tốt cho da.", "type": 1},
			{"asset_id": {"m": "2288", "s": "2289"}, "cropGrow": "21600,39600,61200,82800,104400,2000000000", "gossip": "", "harvestNum": 7, "id": 20, "insect": "0,0,0,0,0,0|67,-10,79,-61,91,-24|60,-19,100,-22,83,-48|0,0,0,0,0,0", "name": "Vaccinium", "nextText": " Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Vaccinium child (English: Vaccinium fragile franch) exquisitely beautiful flowers, numerous cones, leaves cascading delivered, graceful, with edible and medicinal effects. Vaccinium child usually grafted plant, the first phase of growth for the Măng.", "type": 1},
			{"asset_id": {"m": "2290", "s": "2291"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "", "harvestNum": 7, "id": 21, "insect": "0,0,0,0,0,0|49,-14,90,-57,124,-31|49,-14,90,-57,124,-31|0,0,0,0,0,0", "name": "Cacao", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Ca cao (Cacao) là loại cây trồng nhiệt đới lâu năm, có giá trị kinh tế cao. Hạt và quả ca cao chứa hàm lượng protein cao, giàu dinh dưỡng, là nguyên liệu chính cho sô cô la.", "type": 1},
			{"asset_id": {"m": "2292", "s": "2293"}, "cropGrow": "25200,54000,75600,97200,115200,2000000000", "gossip": "", "harvestNum": 7, "id": 22, "insect": "0,0,0,0,0,0|44,-22,84,-53,124,-18|44,-22,84,-53,124,-18|0,0,0,0,0,0", "name": "Bơ", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Bơ (Avocado) là loại trái cây có giá trị dinh dưỡng cao, giàu vitamin và protein. Thịt mềm như pho mát tạo ra một hương vị độc đáo.", "type": 1},
			{"asset_id": {"m": "2294", "s": "2295"}, "cropGrow": "36000,72000,108000,147600,187200,2000000000", "gossip": "", "harvestNum": 3, "id": 23, "insect": "0,0,0,0,0,0|55,-30,92,-11,120,-15|55,-30,92,-11,120,-15|0,0,0,0,0,0", "name": "Lựu", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Lựu (Pomegranate): xuất xứ từ Ba Tư, chứa nhiều nước, giàu vitamin.", "type": 1},
			{"asset_id": {"m": "2296", "s": "2297"}, "cropGrow": "18000,39600,64800,93600,126000,2000000000", "gossip": "", "harvestNum": 7, "id": 24, "insect": "0,0,0,0,0,0|45,-12,69,-51,110,-13|45,-12,69,-51,110,-13|0,0,0,0,0,0", "name": "Táo sáp", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Táo sáp (Wax Apple) còn được gọi là đào, vị ngọt, tươi mát, bởi vì nó chứa nhiều hơi ẩm. Ngoài ra táo sáp còn giúp hạ sốt.", "type": 1},
			{"asset_id": {"m": "2298", "s": "2299"}, "cropGrow": "18000,43200,72000,97200,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 25, "insect": "0,0,0,0,0,0|67,-16,86,-53,100,-25|67,-16,86,-53,100,-25|0,0,0,0,0,0", "name": "Cây bạch quả", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra nhánh, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Cây bạch quả (maidenhair tree): là một trong những loại cây lâu đời nhất thế giới,cây phát triển cao và thẳng, lá hình quạt, tăng trưởng chậm.", "type": 1},
			{"asset_id": {"m": "2300", "s": "2301"}, "cropGrow": "39600,82800,126000,172800,219600,2000000000", "gossip": "", "harvestNum": 3, "id": 26, "insect": "0,0,0,0,0,0|54,-5,87,-27,130,-21|54,-5,87,-27,130,-21|0,0,0,0,0,0", "name": "Bưởi", "nextText": "Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bưởi (Grapefruit): có vị ngọt, chua và hơi đắng. Giàu vitamin C và có chứa nhiều chất dinh dưỡng.", "type": 1},
			{"asset_id": {"m": "2302", "s": "2303"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 27, "insect": "0,0,0,0,0,0|68,23,95,25,126,8|68,23,95,25,126,8|0,0,0,0,0,0", "isRestaurant": 1, "name": "Dứa", "nextText": " Cây giống, Chồi non, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Dứa (Pineapple): ngọt và thơm, chứa nhiều chất dinh dưỡng. Ngoài ra còn co enzym làm kích thích sự thèm ăn.", "type": 1},
			{"asset_id": {"m": "2304", "s": "2305"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 28, "insect": "0,0,0,0,0,0|46,-2,95,-52,125,-18|46,-2,95,-52,125,-18|0,0,0,0,0,0", "isAnimation": 1, "isLock": 1, "name": "Wahaha nutritional fruit", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Tips:", "type": 1},
			{"asset_id": {"m": "2306", "s": "2307"}, "cropGrow": "36000,75600,115200,154800,198000,2000000000", "gossip": "", "harvestNum": 4, "id": 29, "insect": "0,0,0,0,0,0|61,-52,96,-30,120,-12|61,-52,96,-30,120,-12|0,0,0,0,0,0", "name": "Dừa", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Dừa (Coconut) có thể tận dụng mọi thứ: nước, cái, vỏ, lá, cây. Nước dừa rất tốt.", "type": 1},
			{"asset_id": {"m": "2308", "s": "2309"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 30, "insect": "0,0,0,0,0,0|52,-11,79,-54,100,6|52,-11,79,-54,100,6|0,0,0,0,0,0", "name": "Cây ước mơ", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Hãy ươm mầm cho những ước mơ chóng trở thành hiện thực!", "type": 1},
			{"asset_id": {"m": "2310", "s": "2311"}, "cropGrow": "39600,82800,126000,172800,219600,2000000000", "gossip": "", "harvestNum": 4, "id": 31, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "Bầu", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bầu (Gourd): dùng để nấu canh, bầu già khoét bỏ ruột phơi khô, có thể dùng làm bình đựng chất lỏng, bầu khô còn dùng làm đàn bầu.", "type": 1},
			{"asset_id": {"m": "2312", "s": "2313"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 2, "id": 32, "insect": "0,0,0,0,0,0|42,-9,73,-39,97,-11|42,-9,73,-39,97,-11|0,0,0,0,0,0", "name": "Kim cương", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Quả kim cương may lai cho bạn thật nhiều may mắn, tiền tài, phú quý, sung túc..", "type": 1},
			{"asset_id": {"m": "2314", "s": "2315"}, "cropGrow": "46800,97200,147600,198000,252000,2000000000", "gossip": "", "harvestNum": 4, "id": 33, "insect": "0,0,0,0,0,0|65,-15,80,-45,120,-34|65,-15,80,-45,120,-34|0,0,0,0,0,0", "name": "Thanh long", "nextText": "Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Thanh long (Pitaya): giàu chất dinh dưỡng, cung cấp chất xơ, ít calo, có vị chua ngọt.", "type": 1},
			{"asset_id": {"m": "2316", "s": "2317"}, "cropGrow": "50400,100800,151200,205200,259200,2000000000", "gossip": "", "harvestNum": 4, "id": 34, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "Anh đào", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Anh đào (Cherry): khi chín có màu đỏ, vị chua ngọt, dùng làm rượu vang, có tác dụng trị bệnh thiếu máu.", "type": 1},
			{"asset_id": {"m": "2318", "s": "2319"}, "cropGrow": "54000,108000,165600,219600,277200,2000000000", "gossip": "", "harvestNum": 4, "id": 35, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "Vải", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Vải (Litchi): có nhiều vitamin, giúp da mịn và chống lão hóa, ngoài ra còn tốt cho não", "type": 1},
			{"asset_id": {"m": "2320", "s": "2321"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 3, "id": 36, "insect": "0,0,0,0,0,0|70,9,85,-38,104,-4|70,9,85,-38,104,-4|0,0,0,0,0,0", "name": "Indocalamus", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Indocalamus (Indocalamus): là một cây tre nhỏ, sống trong các thung lũng thấp và tăng trưởng ven sông. Lá rộng và có thể được sử dụng để gói bánh bao.", "type": 1},
			{"asset_id": {"m": "2322", "s": "2323"}, "cropGrow": "21600,46800,75600,100800,122400,2000000000", "gossip": "", "harvestNum": 1, "id": 37, "insect": "0,0,0,0,0,0|55,16,92,1,113,24|41,17,75,0,119,27|0,0,0,0,0,0", "isRestaurant": "1", "name": "Ngó sen", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Ngó sen (Lotus) là một loại dược liệu có giá trị cao, có thể được ăn sống hoặc nấu ăn, có vị ngọt và tinh tế. Mọi bộ phận của nó đều có thể tinh chế thành các bài thuốc bổ dưỡng.", "type": 1},
			{"asset_id": {"m": "2324", "s": "2325"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 38, "insect": "0,0,0,0,0,0|63,-40,85,-74,106,-40|63,-40,85,-74,106,-40|0,0,0,0,0,0", "name": "Đu đủ", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Đu đủ (Papaya): giúp giảm đau họng, táo bón, viêm phế quản mãn tính.", "type": 1},
			{"asset_id": {"m": "2326", "s": "2327"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 5, "id": 39, "insect": "0,0,0,0,0,0|56,-20,80,-58,104,-27|56,-20,80,-58,104,-27|0,0,0,0,0,0", "name": "Khế", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Khế (Starfruit): vị chua ngọt, cắt ngang có hình ngôi sao 5 cánh.", "type": 1},
			{"asset_id": {"m": "2328", "s": "2329"}, "cropGrow": "7200,14400,21600,28800,28800,2000000000", "gossip": "", "harvestNum": 1, "id": 40, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "isFood": "1", "isLock": "1", "name": "Cỏ", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá lớn, Phát triển, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Cỏ (Pasture): là một loại thực vật phổ biển, thường được dùng làm thức ăn cho gia súc.", "type": 1},
			{"asset_id": {"m": "2330", "s": "2331"}, "cropGrow": "10800,21600,32400,46800,64800,2000000000", "gossip": "", "harvestNum": 1, "id": 41, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "isFlower": "1", "name": "Hoa hồng đỏ", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa hồng đỏ (Red Rose): tượng trưng cho tình yêu nồng nàn, có gai. Hoa hồng đỏ được dùng làm trà hay kem hoa hồng, đôi khi làm gia vị.", "type": 1},
			{"asset_id": {"m": "2332", "s": "2333"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 42, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "Chanh", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Chanh (Lemon): giàu vitamin C, Acid Citric, Acid Malic, rất tốt cho sức khỏe.", "type": 1},
			{"asset_id": {"m": "4329", "s": "4330"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 3, "id": 43, "insect": "0,0,0,0,0,0|67,-20,100,-49,105,-20|63,-36,89,-70,109,-24|0,0,0,0,0,0", "name": "Sung", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Sung (Fig): còn được gọi là quả thị lực, trái cây, lá màu xanh đậm, hoa nở nhỏ, có vị chát, thường được dùng trong các dịp lễ Tết.", "type": 1},
			{"asset_id": {"m": "2334", "s": "2335"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 44, "insect": "0,0,0,0,0,0|81,7,90,-43,109,-3|81,7,90,-43,109,-3|0,0,0,0,0,0", "name": "Mướp", "nextText": "You Zhu,Cành dài,Ra hoa,Lá bé,Lá lớn,Kết quả, Chín", "offsetX": 0, "offsetY": 0, "tip": "Mướp (Towel Gourd): ngăn ngừa lão hóa da, chứa nhiều vitamin B, C.", "type": 1},
			{"asset_id": {"m": "2336", "s": "2337"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 4, "id": 45, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "name": "Kiwi", "nextText": "Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Kiwi (Kiwifruit): có vị chua, giúp hạ sốt, đau dạ dày, chứa nhiều vitamin C.", "type": 1},
			{"asset_id": {"m": "2338", "s": "2339"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 46, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "Tình yêu", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "the legendary love fruit (in English: benevolence fruit), for Tencent, \"Tithe\" friends and bloom! Love is priceless, love fruit such as golden shining, happy life all because of you!", "type": 1},
			{"asset_id": {"m": "2340", "s": "2341"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 47, "insect": "0,0,0,0,0,0|63,-7,85,-36,106,-15|63,-7,85,-36,106,-15|0,0,0,0,0,0", "name": "Mía", "nextText": " Cây giống, Nảy mầm, Đâm chồi, Trổ lá, Ra nhánh, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Mía (Sugar-cane): chứa nhiều đường, giúp chuyển hóa các vitamin.", "type": 1},
			{"asset_id": {"m": "2342", "s": "2343"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 48, "insect": "0,0,0,0,0,0|65,-5,80,-35,120,-24|65,-5,80,-35,120,-24|0,0,0,0,0,0", "name": "Bayberry", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Thanh mai (Waxberry): giá trị dinh dưỡng cao, là thực phẩm tốt cho sức khỏe, trái chín nhỏ, dễ thương, được xem là loại trái cây tuyệt vời.", "type": 1},
			{"asset_id": {"m": "2344", "s": "2345"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 49, "insect": "0,0,0,0,0,0|54,7,78,-28,98,-3|54,7,78,-28,98,-3|0,0,0,0,0,0", "isRestaurant": "1", "name": "Đậu phộng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Đậu phộng (peanut): bổ sung chất dinh dưỡng và làm tăng tuổi thọ.", "type": 1},
			{"asset_id": {"m": "2346", "s": "2347"}, "cropGrow": "25200,50400,79200,108000,108000,2000000000", "gossip": "", "harvestNum": 3, "id": 50, "insect": "0,0,0,0,0,0|64,11,87,-19,104,3|64,11,87,-19,104,3|0,0,0,0,0,0", "isRestaurant": "1", "name": "Nấm", "nextText": " Hạt giống, Nảy mần, Cây con, Lứa đầu, Phát triển, Thu hoạch Chín", "offsetX": 0, "offsetY": 0, "tip": "Nấm (Mushroom): là loại thức ăn lý tưởng, thực phẩm chức năng giúp giảm huyết áp, tăng cường miễn dịch.", "type": 1},
			{"asset_id": {"m": "2348", "s": "2349"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 51, "insect": "0,0,0,0,0,0|54,-5,79,-44,105,-23|54,-5,79,-44,105,-23|0,0,0,0,0,0", "name": "Táo ta", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Táo ta (Red Jujube) :có chứa chất đạm, chất béo, carbohydrate, acid hữu cơ, vitamin A, vitamin C và chất dinh dưỡng khác. Giúp bồi bổ cho người thể chất yếu sau khi bệnh.", "type": 1},
			{"asset_id": {"m": "2350", "s": "2351"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 52, "insect": "0,0,0,0,0,0|70,4,84,-15,102,5|70,2,86,-27,110,-1|0,0,0,0,0,0", "name": "Flammulina", "nextText": "Vi trùng,Nấm tóc,Đậu quả,Nấm nhỏ,Trái con,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Nấm Enoki (Enoki Mushrooms) thường có phần đầu như cái nón nên người ta gọi là nấm. Một số loài nấm là thực phẩm bổ dưỡng, dược liệu có tác dụng điều trị cao; Một số khác khá độc.", "type": 1},
			{"asset_id": {"m": "2352", "s": "2353"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 53, "insect": "0,0,0,0,0,0|58,5,87,-35,104,-4|58,5,87,-35,104,-4|0,0,0,0,0,0", "name": "Nhãn", "nextText": "Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Nhãn (Longan): ngọt, thơm, chưa nhiều chất dinh dưỡng tốt cho máu, não và tim.", "type": 1},
			{"asset_id": {"m": "2354", "s": "2355"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 54, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "name": "Lê", "nextText": "Măng,Cành dài,Ra hoa,Lá bé,Lá lớn,Kết quả, Chín", "offsetX": 0, "offsetY": 0, "tip": "Lê (Pear): quả ngọt, nhiều nước, cung cấp nhiều vitamin.", "type": 1},
			{"asset_id": {"m": "2356", "s": "2357"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 55, "insect": "0,0,0,0,0,0|54,-5,79,-44,105,-23|54,-5,79,-44,105,-23|0,0,0,0,0,0", "name": "Sơn trà", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Sơn trà (Loquat): vị ngọt chua, thơm ngon được gọi là trái cây hoàng đế.", "type": 1},
			{"asset_id": {"m": "2358", "s": "2359"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 56, "insect": "0,0,0,0,0,0|66,-11,80,-37,118,-16|66,-11,80,-37,118,-16|0,0,0,0,0,0", "name": "Dưa đỏ", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Dưa đỏ (Cantaloupe) có thứ nước tươi mát, giải khát. Nó còn có tác dụng tạo máu cho cơ thể chúng ta, thích hợp cho những người thiếu máu.", "type": 1},
			{"asset_id": {"m": "2360", "s": "2361"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 57, "insect": "0,0,0,0,0,0|57,-9,64,-54,108,-14|57,-9,64,-54,108,-14|0,0,0,0,0,0", "name": "Xoài", "nextText": "Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Xoài (Mango): chứa nhiều chất đường, đạm, xơ và các chất dinh dưỡng khác. Đặc biệt giàu vitamin A.", "type": 1},
			{"asset_id": {"m": "2362", "s": "2363"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 58, "insect": "0,0,0,0,0,0|57,-14,80,-48,104,-16|57,-14,80,-48,104,-16|0,0,0,0,0,0", "name": "Sầu riêng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Sầu riêng (Durian): hương rất thơm, giàu protein và chất béo cung chất dinh dưỡng cho cơ thể.", "type": 1},
			{"asset_id": {"m": "2364", "s": "2365"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 59, "insect": "0,0,0,0,0,0|66,23,86,-10,111,15|66,0,87,-28,105,-2|0,0,0,0,0,0", "isRestaurant": "1", "name": "Bắp cải", "nextText": "Gieo hạt,Nảy mầm,Cây giống,Cây lớn,Heart volume,Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bắp cải (Cabbage): nhiều chất xơ, tốt cho tiêu hóa, ngăn ngừa các bệnh ung thư.", "type": 1},
			{"asset_id": {"m": "2366", "s": "2367"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 60, "insect": "0,0,0,0,0,0|60,-5,87,-27,112,-2|60,-5,87,-27,112,-2|0,0,0,0,0,0", "isRestaurant": "1", "name": "Lúa nước", "nextText": "Gieo hạt,Cây giống,Cây con,Ra nụ,Ra hoa,Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Lúa nước (Paddy): là loại lượng thực chính của Đông Nam Á, cung cấp nhiều tinh bột và vitamin nhóm B.", "type": 1},
			{"asset_id": {"m": "2368", "s": "2369"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 61, "insect": "0,0,0,0,0,0|60,-5,87,-27,112,-2|60,-5,87,-27,112,-2|0,0,0,0,0,0", "name": "Lúa mì", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Lúa mì (Wheat): rất giàu tinh bột, đạm, chất béo, khoáng chất, canxi, sắt, Thiamin, riboflavin, niacin và vitamin A", "type": 1},
			{"asset_id": {"m": "2370", "s": "2371"}, "cropGrow": "14400,28800,46800,64800,82800,2000000000", "gossip": "", "harvestNum": 2, "id": 62, "insect": "0,0,0,0,0,0|64,13,89,-3,114,12|47,4,87,-27,117,2|0,0,0,0,0,0", "name": "Cỏ ba lá", "nextText": "Hạt giống, Nảy mầm, Trổ lá, Hai lá, Ba lá, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Cỏ ba lá (Clover): đại diện cho tình yêu, sức khỏe, danh dự, hạnh phúc, đặc biệt cỏ ba lá mà được 4 lá là rất may mắn", "type": 1},
			{"asset_id": {"m": "2372", "s": "2373"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 63, "insect": "0,0,0,0,0,0|42,11,87,-12,124,-11|42,11,87,-12,124,-11|0,0,0,0,0,0", "name": "Bầu đắng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bầu đắng (Balsam pear): còn được gọi là Khổ Qua, rất bổ dưỡng, tốt cho thận và lá lách, nâng cao hiệu quả thị lực.", "type": 1},
			{"asset_id": {"m": "2374", "s": "2375"}, "cropGrow": "7200,14400,25200,39600,39600,2000000000", "gossip": "", "harvestNum": 1, "id": 64, "insect": "0,0,0,0,0,0|71,13,81,-13,102,19|71,13,81,-13,102,19|0,0,0,0,0,0", "name": "Hành", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá lớn, Phát triển, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hành lá (Scallion) là một gia vị rất phổ biến, loại hành bình thường màu xanh lá cây, củ hành khô, màu trắng dùng trong chế biến món ăn.", "type": 1},
			{"asset_id": {"m": "2376", "s": "2377"}, "cropGrow": "7200,18000,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 65, "insect": "0,0,0,0,0,0|73,-10,95,-46,101,-18|65,-10,84,-49,107,-22|0,0,0,0,0,0", "isRestaurant": "1", "name": "Tỏi", "nextText": "You Zhu,Nảy mầm,Cây giống,Cây lớn,Trái con,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Tỏi (Garlic) được kích thích mùi cay nồng, ăn được hoặc hương liệu, cũng có thể được sử dụng làm thuốc. Tổng sử dụng của tỏi trồng tỏi, sự phát triển của giai đoạn đầu tiên Bạn Zhu.", "type": 1},
			{"asset_id": {"m": "2378", "s": "2379"}, "cropGrow": "7200,14400,25200,39600,39600,2000000000", "gossip": "", "harvestNum": 1, "id": 66, "insect": "0,0,0,0,0,0|68,-12,85,-35,102,-12|68,-12,85,-35,102,-12|0,0,0,0,0,0", "name": "Gừng", "nextText": " Cành giâm, Đâm chồi, Lá nhỏ, Lá lớn, Phát triển, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Gừng (Ginger): là một gia vị rất quan trọng, nhưng cũng là một dược liệu quan trọng. Gừng có vị cay cay thơm thơm rất đặc biệt, đồng thời có thể làm mứt gừng.", "type": 1},
			{"asset_id": {"m": "2380", "s": "2381"}, "cropGrow": "21600,43200,68400,97200,126000,2000000000", "gossip": "", "harvestNum": 4, "id": 67, "insect": "0,0,0,0,0,0|49,7,78,-20,118,2|49,7,78,-20,118,2|0,0,0,0,0,0", "name": "Dưa gan", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Dưa gan (Muskmelon): còn gọi là dưa hấu, được đặt tên theo mùi thơm của nó. Đây là một trái cây mùa hè làm mát cơ thể khi ăn, giá trị dinh dưỡng của nó rất cao.", "type": 1},
			{"asset_id": {"m": "2382", "s": "2383"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 68, "insect": "0,0,0,0,0,0|48,-7,94,-47,134,-14|48,-7,94,-47,134,-14|0,0,0,0,0,0", "isRestaurant": "1", "name": "Bí đao", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Dưa (Wax gourd): có chứa một số lượng lớn các vitamin, khoáng chất và protein, cho bạn một làn da mịn màng trắng bóng.", "type": 1},
			{"asset_id": {"m": "2384", "s": "2385"}, "cropGrow": "36000,75600,115200,154800,198000,2000000000", "gossip": "", "harvestNum": 4, "id": 69, "insect": "0,0,0,0,0,0|74,12,86,-2,98,20|59,10,86,-21,100,16|0,0,0,0,0,0", "name": "Rau diếp", "nextText": " Hạt giống, Nảy mầm, Đâm chồi, Lá nhỏ, Lá lớn, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Rau diếp (Lettuce): là loại rau chứa nhiều vitamin và khoáng chất, ăn có thể tăng cường sự tiết nước ép dạ dày và dịch tiêu hóa.", "type": 1},
			{"asset_id": {"m": "2386", "s": "2387"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 70, "insect": "0,0,0,0,0,0|71,3,81,-28,113,-3|71,3,81,-28,113,-3|0,0,0,0,0,0", "name": "Đậu nành", "nextText": " Hạt giống, Nảy mầm, Cây con, Ra nhánh, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Đậu nành (Soybean) là vua của các loại đậu, đậu nành rất giàu giá trị dinh dưỡng.", "type": 1},
			{"asset_id": {"m": "2388", "s": "2389"}, "cropGrow": "7200,14400,25200,39600,39600,2000000000", "gossip": "", "harvestNum": 1, "id": 71, "insect": "0,0,0,0,0,0|80,-2,90,-19,105,16|80,-2,90,-19,105,16|0,0,0,0,0,0", "name": "Cải bắp", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá lớn, Phát triển, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Cải bắp (pakchoi): rất giàu canxi, phốt pho, sắt, mùi vị tươi, như các loại rau phổ biến quanh năm cung cấp.", "type": 1},
			{"asset_id": {"m": "2390", "s": "2391"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 72, "insect": "0,0,0,0,0,0|61,-9,84,-35,109,-10|61,-9,84,-35,109,-10|0,0,0,0,0,0", "isFood": 1, "isLock": 1, "name": "Phỉ", "nextText": "Cây giống,Nảy mầm,Ra hoa,Lá bé,Lá lớn,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Phỉ (Filber)  có các loại hạt rất giàu protein, caroten, vitamin, v..v, là thức ăn ưa thích của loài sóc.", "type": 1},
			{"asset_id": {"m": "2392", "s": "2393"}, "cropGrow": "10800,25200,43200,43200,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 73, "insect": "0,0,0,0,0,0|67,11,89,-5,98,26|67,11,89,-5,98,26|0,0,0,0,0,0", "name": "Rau Bina", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá lớn, Phát triển, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Rau bina (Spinach) còn được gọi là cỏ Ba Tư, loại rau này có chứa canxi, sắt và vitamin A,C và các chất dinh dưỡng khác.", "type": 1},
			{"asset_id": {"m": "2394", "s": "2395"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 74, "insect": "0,0,0,0,0,0|62,-12,83,-48,109,-19|62,-12,83,-48,109,-19|0,0,0,0,0,0", "name": "Quất vàng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Quất (Kumquat) là một cây cảnh trái cây nổi tiếng, trái cây màu vàng cam, với mùi thơm chậu quất đặc biệt thì nó là loại cây cảnh có giá trị cao.", "type": 1},
			{"asset_id": {"m": "2396", "s": "2397"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 75, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "name": "Dâu tằm", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Dâu tằm (Mulberry): giúp bổ thận, tốt cho thị lực.", "type": 1},
			{"asset_id": {"m": "2398", "s": "2399"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 76, "insect": "0,0,0,0,0,0|54,-12,80,-56,119,-20|54,-12,80,-56,119,-20|0,0,0,0,0,0", "name": "Măng cụt", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Măng cụt (Mangosteen): da màu tím dày, thịt trắng, mùi thơm.", "type": 1},
			{"asset_id": {"m": "2400", "s": "2401"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 77, "insect": "0,0,0,0,0,0|62,-5,89,-28,109,-6|62,-5,89,-28,109,-6|0,0,0,0,0,0", "name": "Việt quất", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Việt quất (Blueberry): quả nhỏ, trái cây xanh màu đẹp mắt, dùng làm nhiều món ăn nhẹ và ẩm thực khác.", "type": 1},
			{"asset_id": {"m": "2402", "s": "2403"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 78, "insect": "0,0,0,0,0,0|54,-5,73,-45,109,-19|54,-5,73,-45,109,-19|0,0,0,0,0,0", "name": "Mơ", "nextText": "Măng,Nảy mầm,Ra hoa,Lá bé,Lá lớn,Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Mơ (Apricot) vị chua ngọt, giàu giá trị dinh dưỡng.", "type": 1},
			{"asset_id": {"m": "2404", "s": "2405"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 79, "insect": "0,0,0,0,0,0|57,-13,71,-42,104,-21|57,-13,71,-42,104,-21|0,0,0,0,0,0", "name": "Ổi", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Ổi (Guava): giàu chất dinh dưỡng, vitamin C. Quả có thể điều trị bệnh tiểu đường và giảm đường trong máu hiệu quả, lá cũng có thể được tiêu chảy.", "type": 1},
			{"asset_id": {"m": "2406", "s": "2407"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 80, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "name": "Hồng dẻo", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hồng dẻo (Persimmon): quả tròn dẻo, ngọt rất ngon", "type": 1},
			{"asset_id": {"m": "2408", "s": "2409"}, "cropGrow": "7200,14400,25200,36000,46800,2000000000", "gossip": "", "harvestNum": 1, "id": 81, "insect": "0,0,0,0,0,0|71,-13,85,-56,103,-28|71,-13,85,-56,103,-28|0,0,0,0,0,0", "name": "Cây giáng sinh", "nextText": " Cành giâm, Lá nhỏ, Lá to, == , Tạo cây, Trang trí, Chín", "offsetX": 0, "offsetY": 0, "tip": "Cây giáng sinh (Christmas Tree): dùng làm vật trang trí vào dịp lễ giáng sinh.", "type": 1},
			{"asset_id": {"m": "2410", "s": "2411"}, "cropGrow": "18000,39600,75600,104400,133200,2000000000", "gossip": "", "harvestNum": 3, "id": 82, "insect": "0,0,0,0,0,0|54,-5,89,-44,116,-17|54,-5,89,-44,116,-17|0,0,0,0,0,0", "name": "Cây thần tài", "nextText": "Gieo hạt,Nảy mầm,Đâm cành,Ra lá,Trái con,Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Cây thần tài (Money Tree) là cây mang lại may mắn tài lộc vào đầu năm. Trong thực tế thì đây là cây mai hoặc cây đào rồi treo vật trang trí lên.", "type": 1},
			{"asset_id": {"m": "2412", "s": "2413"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 83, "insect": "0,0,0,0,0,0|54,-5,98,-38,122,-10|54,-5,98,-38,122,-10|0,0,0,0,0,0", "name": "Chôm chôm", "nextText": "Măng,Nảy mầm,Lá bé,Lá lớn,Ra hoa,Kết quả, Chín", "offsetX": 0, "offsetY": 0, "tip": "Chôm chôm (Rambutan): là một loại cây nhiệt đới rất ngon có nhiều ở Việt Nam", "type": 1},
			{"asset_id": {"m": "2414", "s": "2415"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 5, "id": 84, "insect": "0,0,0,0,0,0|60,-14,82,-38,116,-16|60,-14,82,-38,116,-16|0,0,0,0,0,0", "name": "Chuối", "nextText": "You Zhu,Nảy mầm,Lá bé,Lá lớn,Ra hoa,Kết quả, Chín", "offsetX": 0, "offsetY": 0, "tip": "Chuối (Banana): là loại thảo mộc sống lâu năm, quả hình thon dài, khi chín màu vàng tươi ăn rất ngon", "type": 1},
			{"asset_id": {"m": "2416", "s": "2417"}, "cropGrow": "18000,43200,64800,93600,111600,2000000000", "gossip": "", "harvestNum": 6, "id": 85, "insect": "0,0,0,0,0,0|54,-14,90,-52,113,-19|54,-14,90,-52,113,-19|0,0,0,0,0,0", "name": "Na", "nextText": "Măng,Nảy mầm,Lá bé,Lá lớn,Ra hoa,Kết quả, Chín", "offsetX": 0, "offsetY": 0, "tip": "Na (Sweetsop): là một loại cây nhiệt đới, với vị ngọt thơm ngon", "type": 1},
			{"asset_id": {"m": "2418", "s": "2419"}, "cropGrow": "21600,43200,61200,82800,108000,2000000000", "gossip": "", "harvestNum": 6, "id": 86, "insect": "0,0,0,0,0,0|54,-14,81,-44,109,-26|54,-14,81,-44,109,-26|0,0,0,0,0,0", "name": "Ô Liu", "nextText": "Cây giống,Nảy mầm,Lá bé,Lá lớn,Ra hoa,Kết quả, Chín", "offsetX": 0, "offsetY": 0, "tip": "Oliu (Olive) là loại trái cây giàu dinh dưỡng, còn được gọi là trái cây của thiên đường.", "type": 1},
			{"asset_id": {"m": "2420", "s": "2421"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 6, "id": 87, "insect": "0,0,0,0,0,0|53,-17,89,-55,120,-8|53,-17,89,-55,120,-8|0,0,0,0,0,0", "name": "Chanh dây", "nextText": "Cây giống,Nảy mầm,Lá bé,Lá lớn,Ra hoa,Kết quả, Chín", "offsetX": 0, "offsetY": 0, "tip": "Chanh dây (Passion Fruit) là một loại trái cây giàu dinh dưỡng, dùng làm nước ép, đặc biệt có mùi thơm đặc trưng", "type": 1},
			{"asset_id": {"m": "2422", "s": "2423"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 88, "insect": "0,0,0,0,0,0|51,-7,78,-49,106,-12|51,-7,78,-49,106,-12|0,0,0,0,0,0", "name": "Đèn lồng", "nextText": "Măng,Nảy mầm,Lá bé,Lá lớn,Ra hoa,Kết quả, Chín", "offsetX": 0, "offsetY": 0, "tip": "Đèn lồng (Physalis peruviana) là một loại trái cây tròn nhỏ như một chiếc đèn lồng, sau khi chín thì quả to màu tím, rất ngọt và thơm.", "type": 1},
			{"asset_id": {"m": "2424", "s": "2425"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 89, "insect": "0,0,0,0,0,0|60,14,87,-1,97,12|61,18,75,-52,106,-1|0,0,0,0,0,0", "name": "Lô hội", "nextText": "Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Lô hội (Aloe) là một tập hợp của vẻ đẹp tinh tế, là một thực vật nguyên chất màu xanh lá cây.", "type": 1},
			{"asset_id": {"m": "2426", "s": "2427"}, "cropGrow": "21600,39600,57600,82800,108000,2000000000", "gossip": "", "harvestNum": 6, "id": 90, "insect": "0,0,0,0,0,0|52,9,71,-23,101,15|52,9,71,-23,101,15|0,0,0,0,0,0", "name": "Bạc hà", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bạc hà (Peppermint) là một vị thuốc thường được sử dụng trong y học cổ truyền Trung Hoa, thường dùng chế trà bạc hà, tươi ngon, tinh khiết tốt cho tim và thị lực.", "type": 1},
			{"asset_id": {"m": "2428", "s": "2429"}, "cropGrow": "10800,25200,43200,57600,79200,2000000000", "gossip": "", "harvestNum": 1, "id": 91, "insect": "0,0,0,0,0,0|54,-11,101,-15,75,-34|46,-19,107,-9,86,-37|0,0,0,0,0,0", "name": "Táo gai", "nextText": "Chồi non, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Táo gai (Hawthorn)  là loại trái cây ngọt và chua, để giải khát, với một giá trị dinh dưỡng và dược liệu cao.", "type": 1},
			{"asset_id": {"m": "2430", "s": "2431"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 4, "id": 92, "insect": "0,0,0,0,0,0|54,-5,87,-35,113,-13|54,-5,87,-35,113,-13|0,0,0,0,0,0", "name": "Rare glass fruit", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Là loại trái cây rất quí hiếm, 3 năm mới ra 1 hoa, 3000 năm mới ra 1 quả và hat của nó quí vô cùng.", "type": 1},
			{"asset_id": {"m": "2432", "s": "2433"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 93, "insect": "0,0,0,0,0,0|64,-5,92,-22,120,-5|64,-5,92,-22,120,-5|0,0,0,0,0,0", "name": "Star Dance-hyun", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "2434", "s": "2435"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 94, "insect": "0,0,0,0,0,0|65,-17,95,-18,118,-39|58,-17,83,-41,118,-27|0,0,0,0,0,0", "name": "Haiyangzhixin", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "2436", "s": "2437"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 3, "id": 95, "insect": "0,0,0,0,0,0|58,7,72,-25,112,-5|52,-3,73,-47,104,-11|0,0,0,0,0,0", "isRestaurant": "1", "name": "Dẻ", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Hạt dẻ (Chestnut): là một hạt ăn được, vị ngọt ngào. Vỏ hạt dẻ khá cứng màu nâu.", "type": 1},
			{"asset_id": {"m": "2438", "s": "2439"}, "cropGrow": "10800,21600,36000,50400,68400,2000000000", "gossip": "", "harvestNum": 1, "id": 96, "insect": "0,0,0,0,0,0|76,22,78,4,103,24|64,23,86,-6,112,25|0,0,0,0,0,0", "isRestaurant": "1", "name": "Rau diếp", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Rau diếp : thường được gọi là lá rau diếp, giàu độ ẩm và rất mướt, khi ăn có mùi thơm dễ chịu.", "type": 1},
			{"asset_id": {"m": "2440", "s": "2441"}, "cropGrow": "14400,32400,54000,79200,100800,2000000000", "gossip": "", "harvestNum": 1, "id": 97, "insect": "0,0,0,0,0,0|57,0,74,-55,90,-34|57,0,74,-55,90,-34|0,0,0,0,0,0", "isRestaurant": "1", "name": "Dưa chuột", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Dưa chuột (Cucumber): còn gọi là dưa leo, giàu dinh dưỡng và vitamin E, giúp chống lão hóa và tăng tuổi thọ.", "type": 1},
			{"asset_id": {"m": "2442", "s": "2443"}, "cropGrow": "21600,43200,64800,82800,100800,2000000000", "gossip": "", "harvestNum": 1, "id": 98, "insect": "0,0,0,0,0,0|67,32,84,10,108,30|59,33,92,1,118,30|0,0,0,0,0,0", "isRestaurant": "1", "name": "Súp lơ", "nextText": "Gieo hạt,Nảy mầm,Cây giống,Cây lớn,Trái con,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Súp lơ (Cauliflower): còn được gọi là bông cải xanh, giàu dinh dưỡng, rất tốt cho sức khỏe.", "type": 1},
			{"asset_id": {"m": "2444", "s": "2445"}, "cropGrow": "14400,28800,46800,61200,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 99, "insect": "0,0,0,0,0,0|59,5,76,-27,112,13|59,5,76,-27,112,13|0,0,0,0,0,0", "isRestaurant": "1", "name": "Cải dầu", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá lớn, Phát triển, Trưởng thành, Chín", "offsetX": 0, "offsetY": 0, "tip": "Cải dầu (Rape): tươi ngon, bổ dưỡng, là một trong những loại rau phổ biến nhất.", "type": 1},
			{"asset_id": {"m": "2446", "s": "2447"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 100, "insect": "0,0,0,0,0,0|72,17,80,-24,101,8|62,14,82,-30,112,3|0,0,0,0,0,0", "isRestaurant": "1", "name": "Măng tre", "nextText": "You Zhu,Nảy mầm,Cây giống,Cây lớn,Trái con,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Măng tre (Bamboo shoots): hình búp, vỏ màu xanh đen, ruột trắng, Trung Quốc từ thời cổ đại xem nó như là một thực phẩm quí.", "type": 1},
			{"asset_id": {"m": "2448", "s": "2449"}, "cropGrow": "39600,82800,126000,172800,219600,2000000000", "gossip": "", "harvestNum": 3, "id": 101, "insect": "0,0,0,0,0,0|68,5,94,-27,113,-9|68,5,94,-27,113,-9|0,0,0,0,0,0", "isFlower": 1, "isMill": "1", "name": "Oải hương", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Oải hương (Lavender): màu xanh, có mùi thơm kì lạ. Hoa mang ý nghĩa lãng mạn như lời nói đẹp đang chờ đợi phép lạ của tình yêu.", "type": 1},
			{"asset_id": {"m": "2450", "s": "2451"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 102, "insect": "0,0,0,0,0,0|54,-2,75,-32,116,-3|54,-2,75,-32,116,-3|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Thủy vu", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Thủy vu (Calla) thanh lịch và đẹp, tượng trưng cho sự ngây thơ của tình yêu, cao quý, vĩnh cửu.", "type": 1},
			{"asset_id": {"m": "2452", "s": "2453"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 103, "insect": "0,0,0,0,0,0|54,-2,75,-32,116,-3|54,-2,75,-32,116,-3|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Lyly", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Lyli (Goldband lily): tượng trung cho một cuộc sống tốt đẹp đạo đức của hạnh phúc vợ chồng, biểu hiện sự thanh lịch, duyên dáng.", "type": 1},
			{"asset_id": {"m": "2454", "s": "2455"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 104, "insect": "0,0,0,0,0,0|52,22,84,-3,113,21|52,22,84,-3,113,21|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa đồng tiền", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa đồng tiền (African Daisy): mang ý nghĩa thanh lịch, đạo đức, ẩn dật, vui vẻ, niềm đam mê và bí ẩn.", "type": 1},
			{"asset_id": {"m": "2456", "s": "2457"}, "cropGrow": "7200,18000,32400,46800,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 105, "insect": "0,0,0,0,0,0|68,5,94,-27,113,-9|68,5,94,-27,113,-9|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa cúc", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa cúc (Daisy) hoa có nhiều cánh nhỏ xếp sát nhau, nhiều màu sắc tươi thắm, đại diện cho sự vô tội.", "type": 1},
			{"asset_id": {"m": "2458", "s": "2459"}, "cropGrow": "36000,72000,108000,147600,187200,2000000000", "gossip": "", "harvestNum": 3, "id": 106, "insect": "0,0,0,0,0,0|53,1,81,-15,115,5|53,1,81,-15,115,5|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa Tulip", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Tulip (Tulip) là một loài hoa nổi tiếng từ Hà Lan, có nhiều màu sắc, tuyệt đẹp. Hoa tulip mang ý nghĩa: tình yêu, chu đáo, thanh lịch, phong phú, có thẩm quyền, thông minh.", "type": 1},
			{"asset_id": {"m": "2460", "s": "2461"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 107, "insect": "0,0,0,0,0,0|53,-7,86,-48,112,-9|53,-7,86,-48,112,-9|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Xương rồng", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Xương rồng (Cactus): chịu hạn tốt, hoa xương rồng rất đẹp", "type": 1},
			{"asset_id": {"m": "2462", "s": "2463"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 108, "insect": "0,0,0,0,0,0|49,3,64,-27,108,-2|43,-3,64,-35,112,-9|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa lan chuông", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa lan chuông (Lily of the Valley): hình chuông nhỏ, mùi thơm, tương trưng cho sự tinh khiết, vui vẻ, may mắn.", "type": 1},
			{"asset_id": {"m": "2464", "s": "2465"}, "cropGrow": "43200,90000,136800,183600,230400,2000000000", "gossip": "", "harvestNum": 3, "id": 109, "insect": "0,0,0,0,0,0|60,16,87,-5,122,14|60,16,87,-5,122,14|0,0,0,0,0,0", "isFlower": 1, "isMill": "1", "name": "Phong Lan", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Phong lan (Moth Orchid): hoa duyên dáng, thanh lịch màu sắc đa dạng.", "type": 1},
			{"asset_id": {"m": "2466", "s": "2467"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 3, "id": 110, "insect": "0,0,0,0,0,0|75,19,85,-21,101,15|71,13,85,-54,113,-12|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "isMill": "1", "name": "Gypsophila", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Trong lễ hội Tanabata, thu thập các ngôi sao, và buổi sáng vinh quang với, bạn có thể trao đổi cho đùa ở các gói Tanabata.", "type": 1},
			{"asset_id": {"m": "2468", "s": "2469"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "gossip": "", "harvestNum": 2, "id": 111, "insect": "0,0,0,0,0,0|48,-8,77,-31,114,-18|48,-8,77,-31,114,-18|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa hồng", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa hồng (Pink Rose): hoa hồng đúng nghĩa hồng, tượng trưng cho tình yêu và niềm vui trong cuộc sống", "type": 1},
			{"asset_id": {"m": "2470", "s": "2471"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 112, "insect": "0,0,0,0,0,0|67,3,84,-12,113,-3|59,-9,85,-31,114,-13|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Huệ dạ hương", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Huệ dạ hương (Hyacinth): là một loại huệ rất đẹp tượng trưng cho ngọn lửa nhiệt huyết hướng về cuộc sống", "type": 1},
			{"asset_id": {"m": "2472", "s": "2473"}, "cropGrow": "25200,50400,75600,104400,133200,2000000000", "gossip": "", "harvestNum": 3, "id": 113, "insect": "0,0,0,0,0,0|59,12,85,-18,108,6|59,12,85,-18,108,6|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa dành dành", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa dành dành (Gardenia): một loại hoa màu trắng, rất thơm, trồng phổ biến ở những vùng quê để làm hàng rào chung với hoa lài.", "type": 1},
			{"asset_id": {"m": "2474", "s": "2475"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 114, "insect": "0,0,0,0,0,0|53,3,76,-36,109,-10|53,3,76,-36,109,-10|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa hồng xanh", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa hồng xanh (Blue Rose) là loài hoa trong truyền thuyết, ngày nay người ta đang cố gắng biến nó thành hiện thực", "type": 1},
			{"asset_id": {}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 115, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "isFlower": "1", "name": "Lan", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 116, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "isFlower": "1", "name": "Mandala Trung Quốc", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "2476", "s": "2477"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 117, "insect": "0,0,0,0,0,0|59,-3,88,-39,107,-6|59,-3,88,-39,107,-6|0,0,0,0,0,0", "isFlower": "1", "name": "Hoa cẩm chướng", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa cẩm chướng (Carnation): màu sắc tươi tắn, nở thơm, hoa cẩm chướng màu hồng là một biểu tượng của Ngày của Mẹ, dành riêng cho hoa của người mẹ. ", "type": 1},
			{"asset_id": {"m": "2478", "s": "2479"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 118, "insect": "0,0,0,0,0,0|67,-2,85,-38,97,-14|67,-2,85,-38,97,-14|0,0,0,0,0,0", "isFlower": 1, "name": "Hoa thủy tiên", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa thủy tiên (Narcissus): một chàng trai đã từ chối nữ thần Echo, bị phạt là phải ngắm mãi hình bóng của mình trên mặt hồ và biến thành một loài hoa. Chàng trai đó tên Narcissus", "type": 1},
			{"asset_id": {"m": "2480", "s": "2481"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 119, "insect": "0,0,0,0,0,0|65,15,80,-13,115,11|60,11,85,-43,111,6|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa tím", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa tím (Violet): có màu sắc tươi sáng, hương thơm, thích hợp trồng làm cây cảnh, Violet biểu tượng cho vẻ đẹp, sự đơn giản, nhân đức.", "type": 1},
			{"asset_id": {}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 120, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "isFlower": "1", "name": "Bồ công anh", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "2482", "s": "2483"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 121, "insect": "0,0,0,0,0,0|62,3,87,-54,126,-6|62,3,87,-54,126,-6|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa tường vi", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "2484", "s": "2485"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 122, "insect": "0,0,0,0,0,0|63,17,89,-16,110,16|63,17,89,-16,110,16|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Tử đinh hương", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Tử đinh hương (Lilac): biểu trưng cho sự vinh quang, có lẽ vì nó có hương thơm quý phái.", "type": 1},
			{"asset_id": {"m": "2486", "s": "2487"}, "cropGrow": "54000,108000,165600,219600,277200,2000000000", "gossip": "", "harvestNum": 4, "id": 123, "insect": "0,0,0,0,0,0|41,-11,62,-31,115,-6|65,-27,97,-38,115,-5|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa hải đường", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa hải đường (Malus spectabilis) là loại hoa rất đẹp, cánh hoa tươi sáng, hoa có từ thời cổ đại.", "type": 1},
			{"asset_id": {}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 124, "insect": "0,0,0,0,0,0|100,-50,78,-19,125,-30|100,-50,80,-24,125,-30|0,0,0,0,0,0", "isFlower": "1", "name": "Hoa hồng TQ", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "2488", "s": "2489"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 125, "insect": "0,0,0,0,0,0|59,6,86,-26,116,-2|59,6,86,-26,116,-2|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa bất tử", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa bất tử (Heronsbill): là loại hoa mộc vào những ngày nắng, với rất nhiều màu sắc", "type": 1},
			{"asset_id": {"m": "2490", "s": "2491"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "I have safflower radiata, Bana than a dozen names.", "harvestNum": 8, "id": 126, "insect": "0,0,0,0,0,0|71,-1,100,-32,107,-1|64,-4,92,-48,107,-10|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "Hoa loa kèn", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa loa kèn (lily): còn được gọi là Lycoris rum, hoa loa kèn thường dùng cho lễ kỷ niệm, thường được trồng như một loại hoa trang trí.", "type": 1},
			{"asset_id": {"m": "2494", "s": "2495"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 128, "insect": "0,0,0,0,0,0|68,4,80,-15,109,-1|54,3,79,-37,103,1|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa nhài", "nextText": "Cây giống,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa nhài (Jasmine): màu trắng, hương vị mạnh mẽ, là một cảnh hoa thường có mùi rất thơm.", "type": 1},
			{"asset_id": {"m": "3570", "s": "3571"}, "cropGrow": "21600,43200,64800,93600,122400,2000000000", "gossip": "", "harvestNum": 3, "id": 129, "insect": "0,0,0,0,0,0|71,15,92,-7,113,11|64,-20,94,-47,102,-19|0,0,0,0,0,0", "isFlower": 1, "isMill": "1", "name": "Đừng quên tôi", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Đừng quên tôi (Forget-me-không): là loài hoa có  màu sắc bắt mắt với sự hòa hợp, trẻ trung và sâu sắc.", "type": 1},
			{"asset_id": {"m": "2695", "s": "2696"}, "cropGrow": "25200,50400,72000,93600,111600,2000000000", "gossip": "", "harvestNum": 3, "id": 130, "insect": "0,0,0,0,0,0|57,-1,65,-39,115,-11|58,-14,65,-68,100,-5|0,0,0,0,0,0", "isFlower": 1, "isMill": "1", "name": "Hoa kim ngân", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Kim ngân hoa (Wild Chinese Viburnum) còn được gọi là hydrangea, hoa có kích thước lớn, màu trắng, có nét duyên dáng độc đáo.", "type": 1},
			{"asset_id": {"m": "4129", "s": "4130"}, "cropGrow": "18000,32400,50400,82800,97200,2000000000", "gossip": "", "harvestNum": 3, "id": 131, "insect": "0,0,0,0,0,0|52,-15,79,-36,106,4|57,-14,80,-49,101,2|0,0,0,0,0,0", "isFlower": 1, "isMill": "1", "name": "Hoa Tuyết", "nextText": "Cây giống,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {}, "cropGrow": "25200,39600,64800,97200,115200,2000000000", "gossip": "", "harvestNum": 3, "id": 132, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isFlower": "1", "name": "Hoa chuông", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "3676", "s": "3677"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "", "harvestNum": 3, "id": 133, "insect": "0,0,0,0,0,0|60,4,83,-39,104,5|48,-10,83,-48,110,-1|0,0,0,0,0,0", "isFlower": 1, "isMill": "1", "name": "Bóng nước", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Bóng nước (Impatiens: còn được gọi là cây lá móng, nhuộm móng, cây mang ý nghĩa Đừng chạm vào tôi.", "type": 1},
			{"asset_id": {"m": "2496", "s": "2497"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 134, "insect": "0,0,0,0,0,0|48,-14,83,-48,110,-1|48,-14,83,-48,110,-1|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa mẫu đơn", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa mẫu đơn: còn được gọi là đậu xanh, hoa mẫu đơn màu xanh lá cây, là một trong bốn loài hoa nổi tiếng.", "type": 1},
			{"asset_id": {"m": "2498", "s": "2499"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 135, "insect": "0,0,0,0,0,0|46,7,82,-35,124,8|46,7,82,-35,124,8|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Edelweiss", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "2500", "s": "2501"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 136, "insect": "0,0,0,0,0,0|65,-2,85,-35,107,3|64,5,80,-30,107,7|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa càng cua", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa càng cua : là một loài thực vật rừng mưa nhiệt đới, màu sắc hoa đẹp, là quốc hoa của Brazil.", "type": 1},
			{"asset_id": {"m": "2502", "s": "2503"}, "cropGrow": "54000,108000,162000,216000,270000,2000000000", "gossip": "", "harvestNum": 1, "id": 137, "insect": "0,0,0,0,0,0|64,8,89,-38,130,-21|64,8,89,-38,130,-21|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "Blossoming flowers", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Blossoming flowers is the most amazing sparkling summer flowers, harvest for the Qinghai Satellite TV Flower Fairy finals, the players flowers and increase player popularity, Sports News your favorite to win her title.", "type": 1},
			{"asset_id": {"m": "2504", "s": "2505"}, "cropGrow": "14400,28800,46800,64800,82800,2000000000", "gossip": "", "harvestNum": 2, "id": 138, "insect": "0,0,0,0,0,0|69,4,92,-35,113,3|65,1,91,-55,107,-1|0,0,0,0,0,0", "isFlower": "1", "name": "Hoa Xe", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa xe Thiên chúa là loại hoa cao quí, rất hiếm. Nó là biểu tượng của danh dự tối cao.", "type": 1},
			{"asset_id": {"m": "2693", "s": "2694"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 139, "insect": "0,0,0,0,0,0|61,-5,88,-40,100,-8|62,-15,82,-62,119,-6|0,0,0,0,0,0", "isFlower": 1, "name": "Hoa phong đường", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "3788", "s": "3789"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 140, "insect": "0,0,0,0,0,0|52,1,87,-43,108,-14|49,-7,104,-49,117,-16|0,0,0,0,0,0", "isFlower": 1, "isMill": "1", "name": "Hoa hồng ngà", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "3935", "s": "3936"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 141, "insect": "0,0,0,0,0,0|74,23,70,-9,102,13|56,1,78,-20,107,13|0,0,0,0,0,0", "isFlower": 1, "name": "Hoa Iris", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4721", "s": "4722"}, "cropGrow": "14400,28800,43200,57600,72000,2000000000", "gossip": "", "harvestNum": 2, "id": 142, "insect": "0,0,0,0,0,0|73,2,91,-24,103,3|54,-2,80,-35,121,-32|0,0,0,0,0,0", "isFlower": 1, "name": "Hoa anh túc", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "2506", "s": "2507"}, "cropGrow": "10800,21600,32400,46800,64800,2000000000", "gossip": "", "harvestNum": 1, "id": 143, "insect": "0,0,0,0,0,0|84,-29,108,2,60,13|112,9,91,-41,57,11|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Trinh nữ", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Trinh nữ (Bashfulgrass): còn được gọi là cỏ nhút nhát, cỏ Pachou, lá nó dễ dàng được đóng lại, tạo ra ấn tượng của con người yếu đuối, đẹp trai, thú vị.", "type": 1},
			{"asset_id": {"m": "2508", "s": "2509"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 144, "insect": "0,0,0,0,0,0|89,-37,112,-6,55,-2|112,-4,98,-52,54,-9|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "name": "Hoa ớt tây", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa ớt tây (Seatung): là loài thực vật hay sống ở những nơi khí hậu ấm và ẩm, thích hợp trồng ở các vùng ven biển.", "type": 1},
			{"asset_id": {"m": "2510", "s": "2511"}, "cropGrow": "14400,28800,43200,57600,75600,2000000000", "gossip": "", "harvestNum": 2, "id": 145, "insect": "0,0,0,0,0,0|78,-46,112,7,66,0|115,8,79,-49,65,-6|0,0,0,0,0,0", "isMill": "1", "name": "Hoa hướng dương", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Hoa hướng dương (Sunflower): là loại hoa có hình dạng như mặt trời, màu đỏ hoặc vàng, hoa có đặc điểm là hay nở hướng về phía mặt trời và hoa hướng dương ăn được.", "type": 1},
			{"asset_id": {"m": "2512", "s": "2513"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 146, "insect": "0,0,0,0,0,0|85,-22,107,-1,74,14|109,12,72,-26,55,0|0,0,0,0,0,0", "isMill": "1", "name": "Ngôi sao băng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Sao băng (Ice Star): là một loại cây trồng đặc biệt như những ngôi sao nhấp nháy. Trồng Icy Star, cho trang trại để tạo ra một cảm giác mát lạnh.", "type": 1},
			{"asset_id": {"m": "2514", "s": "2515"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 3, "id": 147, "insect": "0,0,0,0,0,0|68,10,83,-43,101,15|63,9,79,-47,110,10|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "isMill": "1", "name": "Khiên ngưu hoa", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Tanabata festival event, collecting morning glory, and the stars with, you can exchange for joking at the Tanabata packs.", "type": 1},
			{"asset_id": {"m": "2691", "s": "2692"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 148, "insect": "0,0,0,0,0,0|57,1,79,-37,99,-1|48,-14,83,-48,110,-1|0,0,0,0,0,0", "isLock": 1, "name": "Hyun dazzling dance", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "QQ-hyun hyun is dazzling dance dance dance game bright star in the garden embodiment, harvesting the fruit to 10 QQ Dancer can wake up a wealth of game props.", "type": 1},
			{"asset_id": {"m": "3396", "s": "3397"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 151, "insect": "0,0,0,0,0,0|76,26,76,-26,99,20|76,27,72,-37,100,19|0,0,0,0,0,0", "isLock": 1, "name": "Hoa Rainbow", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Là loại cây có dạng như cầu vồng cầu vồng, các trái cây có thể làm cho bạn tưởng tượng trở thành sự thật. Nghe nói nếu tặng ai món quà 100 trái cây Rainbow có thể đánh thức một trò chơi!.", "type": 1},
			{"asset_id": {"m": "2680", "s": "2681"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 1, "id": 153, "insect": "0,0,0,0,0,0|64,-11,97,-35,102,10|56,-23,101,-46,102,8|0,0,0,0,0,0", "isLock": 1, "isMill": "1", "name": "Mặt trăng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Mid-Autumn National Day event, collecting the moon fruit, and with sweet-scented osmanthus month, you can return at the Mid-Autumn Day Package Chang.", "type": 1},
			{"asset_id": {"m": "2682", "s": "2683"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 1, "id": 154, "insect": "0,0,0,0,0,0|64,-11,97,-35,104,1|58,-13,90,-56,102,-1|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "isMill": "1", "name": "Osmanthus month", "nextText": "Cây giống,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Mid-Autumn National Day event, collecting monthly osmanthus, and the moon with the results, you can return at the Mid-Autumn Day Package Chang.", "type": 1},
			{"asset_id": {"h": "3476", "m": "3400", "s": "3401"}, "cropGrow": "14400,28800,46800,64800,82800,2000000000", "gossip": "", "harvestNum": 2, "id": 158, "insect": "0,0,0,0,0,0|57,4,77,-19,100,4|54,-4,77,-34,118,-11|0,0,0,0,0,0", "isAnimation": 1, "isLock": 1, "name": "Lạc Yinlu", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4083", "s": "4084"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 159, "insect": "0,0,0,0,0,0|49,-4,83,-39,111,-11|42,-10,71,-55,120,-17|0,0,0,0,0,0", "isLock": 1, "name": "Cây phép thuật", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Loves filled with beautiful QQ fantasy world Gieo hạt, the user can by fruit to the fruits of Magic World day margin call props wake-up event page props packs, QQ members enjoy all the props! Ceremony includes exclusive horse Oh!", "type": 1},
			{"asset_id": {"m": "3398", "s": "3399"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 5, "id": 160, "insect": "0,0,0,0,0,0|60,5,66,-19,100,3|48,-5,81,-54,108,-12|0,0,0,0,0,0", "name": "Cây đèn lồng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Nhìn như những chiếc đèn lồng carnivals, rất phổ biến về nghệ thuật dân gian truyền thống và hàng thủ công, một biểu tượng của hạnh phúc và niềm vui trong lễ hội lồng đèn trang trại.", "type": 1},
			{"asset_id": {"m": "3672", "s": "3673"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 3, "id": 161, "insect": "0,0,0,0,0,0|59,1,80,-40,104,-1|55,-2,85,-41,101,7|0,0,0,0,0,0", "isFlower": 1, "isMill": "1", "name": "Hoa cúc vàng", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa cúc là một trong bốn hoa cao quý, chúng là những bông hoa trang trí quý giá, có các màu khác nhau.", "type": 1},
			{"asset_id": {"m": "3764", "s": "3765"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 3, "id": 162, "insect": "0,0,0,0,0,0|63,-8,84,-32,98,1|64,-11,87,-43,107,-5|0,0,0,0,0,0", "isFlower": 1, "isMill": "1", "name": "Hoa cúc đỏ", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "3756", "s": "3757"}, "cropGrow": "18000,39600,61200,90000,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 164, "insect": "0,0,0,0,0,0|57,-3,82,-15,110,-1|64,10,80,-30,110,-1|0,0,0,0,0,0", "name": "Bí Halloween", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "3674", "s": "3675"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 165, "insect": "0,0,0,0,0,0|41,-17,98,-42,112,-9|54,-21,95,-56,121,-13|0,0,0,0,0,0", "isMill": "1", "name": "Cây dương đào", "nextText": "Gieo hạt,Măng,Cành dài,Ra hoa,Lá lớn,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Cây dương đào (Cornel): biệt danh là linh hồn ác quỉ, trồng phổ biến ở thời nhà Đường.", "type": 1},
			{"asset_id": {"m": "3758", "s": "3759"}, "cropGrow": "36000,68400,104400,140400,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 166, "insect": "0,0,0,0,0,0|61,-26,99,-52,122,-21|58,-29,81,-43,123,-20|0,0,0,0,0,0", "name": "Cây đa sắc", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "3760", "s": "3761"}, "cropGrow": "14400,32400,50400,68400,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 167, "insect": "0,0,0,0,0,0|68,-25,85,-43,114,-8|57,-10,85,-44,114,-11|0,0,0,0,0,0", "isLock": 1, "name": "Cây kẹo", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"h": "3942", "m": "3940", "s": "3941"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 168, "insect": "0,0,0,0,0,0|68,-3,79,-24,97,1|58,-11,53,-53,112,-28|0,0,0,0,0,0", "isAnimation": 1, "isLock": 1, "name": "Cây ma thuật", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4117", "s": "4118"}, "cropGrow": "7200,18000,28800,39600,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 169, "insect": "0,0,0,0,0,0|73,12,84,-8,103,13|56,4,87,-20,113,8|0,0,0,0,0,0", "name": "Kiểng đỏ", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn, Phát triển, Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4119", "s": "4120"}, "cropGrow": "7200,18000,28800,39600,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 170, "insect": "0,0,0,0,0,0|73,12,84,-8,102,9|56,4,83,-13,117,0|0,0,0,0,0,0", "name": "Kiểng vàng", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn, Phát triển, Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4121", "s": "4122"}, "cropGrow": "7200,18000,28800,39600,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 171, "insect": "0,0,0,0,0,0|73,12,84,-8,97,7|56,4,83,-18,103,0|0,0,0,0,0,0", "name": "Kiểng xanh", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn, Phát triển, Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4938", "s": "4939"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 172, "insect": "0,0,0,0,0,0|72,9,87,-14,98,6|61,-6,95,-37,102,7|0,0,0,0,0,0", "isFlower": 1, "name": "Song Mei", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4341", "s": "4342"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 173, "insect": "0,0,0,0,0,0|68,6,86,-15,97,8|58,5,87,-29,99,10|0,0,0,0,0,0", "isFlower": 1, "name": "Nguyệt hạ dương", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4233", "s": "4234"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 174, "insect": "0,0,0,0,0,0|72,26,106,15,76,12|70,23,104,12,80,-3|0,0,0,0,0,0", "isFlower": 1, "name": "Tuberose", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4343", "s": "4344"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 175, "insect": "0,0,0,0,0,0|55,8,77,-25,107,13|54,-8,95,-43,105,3|0,0,0,0,0,0", "isFlower": 1, "name": "Hoàng điếm", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4127", "s": "4128"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 176, "insect": "0,0,0,0,0,0|63,-16,79,-36,96,0|59,-15,94,-40,100,-6|0,0,0,0,0,0", "isFlower": 1, "isMill": "1", "name": "Kim ngân hoa", "nextText": " Gieo hạt, Nảy mầm, Lá bé, Lá lớn, Ra nụ, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4110", "s": "4111"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 177, "insect": "0,0,0,0,0,0|67,5,92,-20,103,4|59,-28,92,-48,106,-10|0,0,0,0,0,0", "name": "Truy tuệ", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4568", "s": "4569"}, "cropGrow": "28800,57600,93600,136800,165600,2000000000", "ext": "", "gossip": "", "harvestNum": 3, "id": 178, "insect": "0,0,0,0,0,0|74,20,91,-40,103,19|67,21,91,-48,107,18|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "Thiên thần", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4331", "s": "4332"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 179, "insect": "0,0,0,0,0,0|61,25,83,-6,106,23|56,29,85,1,108,27|0,0,0,0,0,0", "isFlower": 1, "name": "Hoa gia tình", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5254", "s": "5255"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 186, "insect": "0,0,0,0,0,0|62,17,86,-21,102,5|48,-14,83,-48,110,-1|0,0,0,0,0,0", "isFlower": 1, "name": "Milan", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4940", "s": "4941"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "", "harvestNum": 4, "id": 187, "insect": "0,0,0,0,0,0|72,9,87,-14,98,6|60,9,88,-37,110,13|0,0,0,0,0,0", "isFlower": 1, "name": "Clivia", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4675", "s": "4676"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 190, "insect": "0,0,0,0,0,0|82,13,91,-23,98,-1|72,1,83,-48,100,-4|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "Hoa Arad", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Devil bloodthirsty flowers, with fruit to wake up dummy page, convertible stunning DNF props spree challenge books, pocket tank, waiting for you to super-utility consumables.", "type": 1},
			{"asset_id": {"m": "4775", "s": "4776"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 191, "insect": "0,0,0,0,0,0|61,-22,93,-43,101,-15|62,-22,92,-58,111,-23|0,0,0,0,0,0", "isLock": 1, "name": "Hoa Bristol Tây", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Là loại cây rất quí, ngàn năm mới ra hoa và kết quả.", "type": 1},
			{"asset_id": {"m": "4816", "s": "4817"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 194, "insect": "0,0,0,0,0,0|64,26,86,-38,103,29|65,24,89,-61,104,28|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "Năng lượng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Là một biểu tượng của tình yêu, hạnh phúc, trái cây dùng để tham gia các sự kiện.", "type": 1},
			{"asset_id": {"m": "5372", "s": "5373"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 195, "insect": "0,0,0,0,0,0|79,24,90,-20,103,21|74,26,90,-39,100,20|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "飞车花匙", "nextText": "种子,发芽,小叶子,大叶子,花蕾,盛开", "offsetX": 0, "offsetY": 0, "tip": "小贴士：QQ飞车的神秘宝藏钥匙的化身，凭果实到,更有极品非卖战车等你来拿！", "type": 1},
			{"asset_id": {"m": "5090", "s": "5091"}, "cropGrow": "14400,32400,54000,75600,100800,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 197, "insect": "0,0,0,0,0,0|74,-30,93,-54,107,-28|61,-27,85,-67,103,-37|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "Hoa dây lửa", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin.", "type": 1},
			{"asset_id": {"m": "5256", "s": "5257"}, "cropGrow": "21600,36000,54000,72000,90000,2000000000", "ext": "", "gossip": "", "harvestNum": 2, "id": 198, "insect": "0,0,0,0,0,0|70,29,91,-37,99,20|71,23,93,-59,103,20|0,0,0,0,0,0", "isFlower": 1, "isLock": 1, "name": "Hoa Rồng", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Soul of the Great Dragon of the Ming Dynasty, with fruit to the point of exchange 550Q Great Ming-Long Right game spree! Tianshou Feathered, experience Sarah When you come get it!", "type": 1},
			{"asset_id": {"m": "2516", "s": "2517"}, "cropGrow": "32400,64800,90000,115200,133200,2000000000", "gossip": "I am the state protection of valuable natural medicine.", "harvestNum": 9, "id": 201, "insect": "0,0,0,0,0,0|64,1,87,-4,104,10|64,1,88,-14,103,3|0,0,0,0,0,0", "isRed": "1", "name": "Tuyết sen", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,You Zhu,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Tuyết Sen (Saussurea Involucrata) là giống hoa sen có lá màu xanh ngọc bích, thông thường mọc ở vùng núi đất cao, lạnh; có tác dụng chữa bệnh rất tốt.", "type": 1},
			{"asset_id": {"m": "2518", "s": "2519"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "Theo truyền thiết, tôi có thể làm hối sinh sự sống.", "harvestNum": 9, "id": 202, "insect": "0,0,0,0,0,0|95,-1,73,-14,117,-15|93,-4,77,-28,118,-20|0,0,0,0,0,0", "isRed": "1", "name": "Linh Chi", "nextText": "Gieo hạt,Nảy mầm,芝蕾,幼芝,Trái con,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Linh Chi (Ganoderma) được gọi là cỏ tiên, trong lịch sử dài hàng nghìn năm, những truyền thuyết thần kỳ về cỏ linh chi kéo dài không dứt, dược mệnh danh là 'vua của bách thảo.", "type": 1},
			{"asset_id": {"m": "2614", "s": "2615"}, "cropGrow": "28800,61200,90000,122400,151200,2000000000", "gossip": "Sống trên núi Trường Bạch.", "harvestNum": 9, "id": 204, "insect": "0,0,0,0,0,0|75,-9,87,-26,101,-3|57,-28,80,-39,102,-14|0,0,0,0,0,0", "isFlower": "0", "isFood": "0", "isLock": "0", "isRed": "1", "isRestaurant": "0", "name": "Nhân sâm", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Nhân sâm (Ginseng): là loại cây có giá trị y học rất cao, và đang trên bờ vực của sự tuyệt chủng, chúng đã được phân loài thực vật cấp quốc gia để bảo vệ.", "type": 1},
			{"asset_id": {"m": "3394", "s": "3395"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 7, "id": 208, "insect": "0,0,0,0,0,0|64,5,89,-48,107,2|65,-10,86,-56,123,2|0,0,0,0,0,0", "name": "Ba đậu", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Ba đậu (Cassia): là một loại cây của Trung Quốc, ngọt lợ, hơi lạnh.", "type": 1},
			{"asset_id": {"m": "3938", "s": "3939"}, "cropGrow": "32400,64800,100800,133200,165600,2000000000", "gossip": "", "harvestNum": 7, "id": 209, "insect": "0,0,0,0,0,0|67,12,79,-24,97,1|70,15,73,-25,100,3|0,0,0,0,0,0", "name": "Thảo dược", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Thảo dược (Artactylodes): là một cây trồng quan trọng của y học Trung Quốc, chữa bệnh chán ăn, cảm lạnh và các bệnh khác khi khí hậu thay đổi thất thường.", "type": 1},
			{"asset_id": {"m": "4231", "s": "4232"}, "cropGrow": "36000,68400,100800,133200,165600,2000000000", "gossip": "", "harvestNum": 7, "id": 210, "insect": "0,0,0,0,0,0|63,22,73,-13,94,13|67,24,69,-32,97,17|0,0,0,0,0,0", "name": "Hoa bằng lăng", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa bằng lăng (Rabdosia rubescens): nhìn như cánh bướm, nó có tác dụng thanh nhiệt giải độc, giảm đau chống viêm.", "type": 1},
			{"asset_id": {"m": "4677", "s": "4678"}, "cropGrow": "32400,64800,97200,129600,165600,2000000000", "gossip": "", "harvestNum": 7, "id": 211, "insect": "0,0,0,0,0,0|72,19,92,-24,92,4|71,15,96,-43,97,-9|0,0,0,0,0,0", "name": "Hoa xuất gia", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Hoa xuất gia (Korean Monkshood Root): hay mọc ở các ngọn đồi, là một loại cây trồng thuốc quan trọng.", "type": 1},
			{"asset_id": {"m": "2524", "s": "2525"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "I was the biggest tree water skills.", "harvestNum": 8, "id": 218, "insect": "0,0,0,0,0,0|59,-34,98,-71,116,-41|59,-34,98,-71,116,-41|0,0,0,0,0,0", "isRed": "1", "name": "Cây bình", "nextText": "Cây giống,Cành dài,Lá bé,Lá lớn,Trái con,Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Cây cũng được gọi là Phật bụng, có thể cao đến 30 mét, dày, mà hầu hết lên đến 5 m, thân cây chứa nhiều nước và hay mọc ở sa mạc.", "type": 1},
			{"asset_id": {"m": "2526", "s": "2527"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "Tên tên là biểu tượng của nhân quyền", "harvestNum": 9, "id": 219, "insect": "0,0,0,0,0,0|54,-5,87,-32,113,4|54,-5,87,-32,113,4|0,0,0,0,0,0", "isFlower": "1", "isMill": "1", "isRed": "1", "name": "Hoa Luis", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Nguồn gốc của hoa từ vua Louis XIV của Pháp, là những bông hoa hồng màu tím và rất quí hiếm, hoa được đặt theo tên một biểu tượng của danh dự và quyền hạn.", "type": 1},
			{"asset_id": {"m": "2528", "s": "2529"}, "cropGrow": "21600,43200,64800,86400,108000,2000000000", "gossip": "I'm not a vegetarian, I love to eat insects.", "harvestNum": 8, "id": 220, "insect": "0,0,0,0,0,0|53,-18,87,-36,115,-8|54,-33,87,-52,118,-20|0,0,0,0,0,0", "isRed": "1", "name": "Nepenthes", "nextText": "Cây giống,Nảy mầm,Lá bé,Lá lớn,Trái con,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Nepenthes là đại diện của cây ăn thịt nhiệt đới, trông rất thanh lịch và sang trọng.", "type": 1},
			{"asset_id": {"m": "2530", "s": "2531"}, "cropGrow": "18000,32400,54000,79200,108000,2000000000", "gossip": "Tôi biểu tượng cho may mắn, hạnh phúc", "harvestNum": 8, "id": 221, "insect": "0,0,0,0,0,0|66,-1,78,-27,102,5|61,-1,84,-37,103,5|0,0,0,0,0,0", "isRed": "1", "name": "Hoa Thiên điểu", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá lớn, Đâm chồi, Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Còn được gọi là chim thiên đường Strelitzia reginae, vì hoa giống như một chiếc vương miện, và mỏ được đặt theo tên của một con chim điểu.", "type": 1},
			{"asset_id": {"m": "2532", "s": "2533"}, "cropGrow": "25200,50400,75600,104400,133200,2000000000", "gossip": "My leopard fur color and very similar.", "harvestNum": 8, "id": 222, "insect": "0,0,0,0,0,0|65,-2,87,-36,107,10|65,-2,87,-36,107,10|0,0,0,0,0,0", "isRed": "1", "name": "Hoa da báo", "nextText": "Cây giống,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa da báo (Leopard Skin): là loại hoa năm cánh hình ngôi sao, độc đáo, thường được trồng trong chậu hoa cảnh.", "type": 1},
			{"asset_id": {"m": "2534", "s": "2535"}, "cropGrow": "28800,57600,86400,118800,151200,2000000000", "gossip": "I will reveal to early summer fragrance.", "harvestNum": 8, "id": 223, "insect": "0,0,0,0,0,0|58,-7,71,-54,111,-22|58,-7,71,-54,111,-22|0,0,0,0,0,0", "isRed": "1", "name": "Chinensis", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Chinensis (Calycanthus chinensis): hoa lớn và đẹp, bắt đầu nở hoa vào đầu mùa hè, với giá trị cảnh tuyệt vời, nhưng cũng là hai loài thực vật quí cần bảo vệ.", "type": 1},
			{"asset_id": {"m": "2536", "s": "2537"}, "cropGrow": "54000,108000,165600,219600,277200,2000000000", "gossip": "Vẻ đẹp dưới trăng", "harvestNum": 1, "id": 224, "insect": "0,0,0,0,0,0|55,-6,88,-39,123,-10|55,-6,88,-39,123,-10|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "Epiphyllum", "nextText": "Cây giống,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Còn được gọi là Skanda luôn nở hoa lúc bình minh trong thời gian rất ngắn.", "type": 1},
			{"asset_id": {"m": "2538", "s": "2539"}, "cropGrow": "32400,68400,104400,140400,176400,2000000000", "gossip": "Loài hoa quý hiếm", "harvestNum": 8, "id": 225, "insect": "0,0,0,0,0,0|59,3,111,-13,75,-34|54,-6,108,-15,102,-35|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "Hoa mộc lan", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa mộc lan dáng thẳng đứng, hoa lớn đẹp, thơm, rất quý, cây cảnh sớm rụng. Hiếm do số lượng ít, đã được chỉ định là thực vật cấp quốc gia cần bảo vệ.", "type": 1},
			{"asset_id": {"m": "2540", "s": "2541"}, "cropGrow": "21600,43200,64800,93600,118800,2000000000", "gossip": "Cánh hoa 4 màu sắc", "harvestNum": 8, "id": 226, "insect": "0,0,0,0,0,0|64,-21,92,-43,114,-9|64,-21,92,-43,114,-9|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "Hoa Gạo", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "hoa gạo là sự kỳ diệu của sa mạc Gobi ở châu Phi, những bông hoa có bốn cánh hoa, nó là thực sự dịu dàng và xinh đẹp.", "type": 1},
			{"asset_id": {"m": "2542", "s": "2543"}, "cropGrow": "18000,39600,72000,104400,136800,2000000000", "gossip": "Tôi là hoa lớn nhất thế giới", "harvestNum": 8, "id": 227, "insect": "0,0,0,0,0,0|77,31,82,6,99,25|71,20,88,-1,104,32|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "Rafflesia", "nextText": "Gieo hạt,Nảy mầm,Lên cây,Chồi non,Ra lá,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Rafflesia  là loài phát triển trong khu rừng nhiệt đới, hoa có thể phát triển đến 3 feet, đường kính lớn nhất lên đến 1,4 mét, được gọi là hoa lớn nhất thế giới.", "type": 1},
			{"asset_id": {"m": "2544", "s": "2545"}, "cropGrow": "28800,61200,100800,129600,158400,2000000000", "gossip": "Nhiều tiểu thuyết tuyệt vời cho tôi tình yêu màu sắc.", "harvestNum": 8, "id": 228, "insect": "0,0,0,0,0,0|61,-6,72,-64,114,5|61,-6,72,-64,114,5|0,0,0,0,0,0", "isRed": "1", "name": "Nhân sâm", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Sâm, còn gọi là quả cà chua dưa, giàu chất dinh dưỡng, có lợi cho sức khỏe.", "type": 1},
			{"asset_id": {"m": "2546", "s": "2547"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "Tên của một huyền thoại.", "harvestNum": 9, "id": 229, "insect": "0,0,0,0,0,0|74,6,87,-17,113,-3|73,-4,88,-28,110,-10|0,0,0,0,0,0", "isRed": "1", "name": "Polygonum", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Polygonum (Polygonum multiflorum): rễ, cành và lá cây có thể dùng làm thuốc, làm đen tóc, chắc cơ bắp.", "type": 1},
			{"asset_id": {"m": "2548", "s": "2549"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "", "harvestNum": 3, "id": 230, "insect": "0,0,0,0,0,0|48,1,89,-50,128,-21|51,0,85,-54,136,-13|0,0,0,0,0,0", "name": "Cây bầu sắc", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Bầu đầy màu sắc là biểu tượng của may mắn. Đây là loại bầu dùng trong trang trí ẩm thực.", "type": 1},
			{"asset_id": {"m": "2550", "s": "2551"}, "cropGrow": "28800,54000,82800,115200,144000,2000000000", "gossip": "", "harvestNum": 3, "id": 231, "insect": "0,0,0,0,0,0|35,-16,67,-66,134,-24|35,-16,67,-66,134,-24|0,0,0,0,0,0", "isMill": "1", "name": "Tiểu nhân sâm", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "2552", "s": "2553"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 3, "id": 232, "insect": "0,0,0,0,0,0|63,11,85,-26,113,12|63,11,85,-26,113,12|0,0,0,0,0,0", "isMill": "1", "name": "Hoa Cầu Vồng", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "2554", "s": "2555"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 3, "id": 233, "insect": "0,0,0,0,0,0|76,-24,86,-40,94,-27|73,-35,100,-39,81,-41|0,0,0,0,0,0", "isMill": "1", "name": "Sen đèn lồng", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Sen đèn lồng (Lotus Lantern): là loại cây có xuất sứ thần thoại, nghe đồn nếu ăn nó, bạn có thể có một năm mới may mắn và kỳ diệu.", "type": 1},
			{"asset_id": {"m": "2616", "s": "2617"}, "cropGrow": "25200,46800,79200,97200,129600,2000000000", "gossip": "", "harvestNum": 3, "id": 234, "insect": "0,0,0,0,0,0|57,5,74,-22,98,13|55,10,84,-32,94,13|0,0,0,0,0,0", "isFlower": "1", "isFood": "0", "isLock": "0", "isMill": "1", "isRed": "0", "isRestaurant": "0", "name": "Piranha", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Piranha thường xuất hiện trong tiểu thuyết khoa học. Có một tấm khuôn mặt xinh đẹp, phát ra một mùi mạnh mẽ, nhưng nọc độc của nó là rất mạnh.", "type": 1},
			{"asset_id": {"m": "2556", "s": "2557"}, "cropGrow": "21600,54000,82800,111600,136800,2000000000", "gossip": "", "harvestNum": 8, "id": 235, "insect": "0,0,0,0,0,0|54,-8,78,-40,103,-6|53,-9,72,-44,108,-15|0,0,0,0,0,0", "isFlower": "1", "isRed": "1", "name": "Hoa sơn trà", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa sơn trà (Camellia nitidissima) là một loài thực vật cổ xưa, rất hiếm và quý, gọi là sự kỳ diệu của phép thuật phương Đông, có thể dùng để pha trà rất thơm ngon.", "type": 1},
			{"asset_id": {"m": "2558", "s": "2559"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 236, "insect": "0,0,0,0,0,0|52,-6,87,-42,99,-14|55,-9,100,-39,101,-7|0,0,0,0,0,0", "name": "Bầu cam", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bầu cam (Orange Gourd) có xuất sứ từ truyền thuyết, quả được dùng trong trang trí ẩm thực.", "type": 1},
			{"asset_id": {"m": "2560", "s": "2561"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 2, "id": 237, "insect": "0,0,0,0,0,0|58,-5,69,-47,106,-23|59,-5,69,-43,108,-24|0,0,0,0,0,0", "name": "Bầu vàng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bầu vàng có màu vàng lục bình, được dùng trong trang trí ẩm thực.", "type": 1},
			{"asset_id": {"m": "2562", "s": "2563"}, "cropGrow": "36000,72000,108000,147600,187200,2000000000", "gossip": "", "harvestNum": 3, "id": 238, "insect": "0,0,0,0,0,0|65,7,72,-23,105,-14|63,5,73,-26,109,-13|0,0,0,0,0,0", "name": "Bầu xanh", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bầu xanh cũng được dùng trong trang trí ẩm thực.", "type": 1},
			{"asset_id": {"m": "2564", "s": "2565"}, "cropGrow": "21600,43200,64800,90000,115200,2000000000", "gossip": "", "harvestNum": 4, "id": 239, "insect": "0,0,0,0,0,0|70,-4,109,-62,91,-22|69,-4,88,-62,90,-22|0,0,0,0,0,0", "name": "Bầu lơ", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Bầu lơ ăn rất ngon, dùng trong trang trí ẩm thực.", "type": 1},
			{"asset_id": {"m": "2566", "s": "2567"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 240, "insect": "0,0,0,0,0,0|75,1,100,-55,67,-22|72,4,77,-65,70,-22|0,0,0,0,0,0", "name": "Bầu lục bình", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Bầu lục bình ăn rất tốt, thanh và mát giúp thanh nhiệt giải độc.", "type": 1},
			{"asset_id": {"m": "2568", "s": "2569"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 241, "insect": "0,0,0,0,0,0|107,-36,98,-57,80,-11|90,-20,97,-63,88,2|0,0,0,0,0,0", "name": "Bầu Tím lục bình", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Là loại bầu xuất xứ ở phương Tây, ăn thanh và mát, dùng trong chế biến món ăn.", "type": 1},
			{"asset_id": {"m": "3392", "s": "3393"}, "cropGrow": "36000,72000,108000,144000,180000,2000000000", "gossip": "Tôi có màu sắc bắt mắt", "harvestNum": 9, "id": 242, "insect": "0,0,0,0,0,0|52,5,82,-44,114,-2|47,-3,75,-52,128,-9|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "Hoa huyết tử", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Giống như máu chim cúc cu (Rhododendron haematodes) màu sắc sặc sỡ, rất đẹp khi nở rộ, với giá trị trang trí cao.", "type": 1},
			{"asset_id": {"m": "3762", "s": "3763"}, "cropGrow": "36000,72000,108000,144000,180000,2000000000", "gossip": "Tôi là Gelsemium elegans.", "harvestNum": 9, "id": 243, "insect": "0,0,0,0,0,0|63,-8,86,-29,106,-6|57,-10,83,-36,114,-11|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "Hoa Tần lao", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa Tần lao (Aethusifolia): bí danh Gelsemium elegans, hoa kỳ lạ, màu vàng nhạt, không có cánh hoa và rất hiếm.", "type": 1},
			{"asset_id": {"m": "4723", "s": "4724"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "Tôi là Kangaroo", "harvestNum": 9, "id": 244, "insect": "0,0,0,0,0,0|69,-7,100,-28,91,9|54,-10,55,-41,109,-26|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "Hoa Kangaroo", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa Kangaroo (Anigozanthos): là một loại thảo dược lâu năm với tối màu xanh lá cây, sắp xếp gọn gàng. Hoa kỳ lạ, sưng trung tâm, cả hai đầu nhỏ, cũ có một lỗ nhỏ.", "type": 1},
			{"asset_id": {"m": "2570", "s": "2571"}, "cropGrow": "7200,14400,25200,39600,54000,2000000000", "gossip": "", "harvestNum": 1, "id": 245, "insect": "0,0,0,0,0,0|59,-18,76,-56,91,8|58,-38,83,-59,90,5|0,0,0,0,0,0", "name": "Bầu đỏ", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch, Chín", "offsetX": 0, "offsetY": 0, "tip": "Bầu đỏ (Red Gourd) từ nhiều truyền thuyết tuyệt vời trong quá trình sử dụng trong chế biến. Sau khi các quả bầu Major to có thể được sử dụng như hộp đựng bằng cách tỉa nào đó, chẳng hạn như bình hông, gàu tát nước.", "type": 1},
			{"asset_id": {"m": "4131", "s": "4132"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "Tôi trông giống như nho?", "harvestNum": 9, "id": 246, "insect": "0,0,0,0,0,0|72,-13,93,-37,100,-2|72,-9,94,-45,110,-1|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "Nho lục bình", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Nho lục bình (Muscari botryoides): cũng gọi là hoa nồi xanh, hoa lily nho, hoa giống như một cây nho xanh tím, đẹp và thanh lịch.", "type": 1},
			{"asset_id": {"m": "4432", "s": "4433"}, "cropGrow": "28800,57600,86400,115200,144000,2000000000", "gossip": "Tôi thích ngắm nhìn những chú bướm!", "harvestNum": 9, "id": 247, "insect": "0,0,0,0,0,0|65,-28,95,-32,98,6|57,-37,107,-46,110,-1|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "Hoa bướm say", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Hoa bướm say rượu (Cleome spinosa): hoa nhiều màu, khá đẹp, thích hợp cho cắm hoa hoặc trồng trên các đường thành phim.", "type": 1},
			{"asset_id": {"m": "4942", "s": "4943"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "tôi là Cacalia Peony", "harvestNum": 9, "id": 249, "insect": "0,0,0,0,0,0|58,-8,100,-26,109,16|49,-18,104,-42,121,13|0,0,0,0,0,0", "isFlower": 1, "isRed": 1, "name": "Bicuculline", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Bicuculline (Dicentra spectabilis): tán lá đẹp, hoa tinh tế, đầy màu sắc, trồng cây trong chậu tạo cảnh quan đẹp rất hiệu quả.", "type": 1},
			{"asset_id": {"m": "2572", "s": "2573"}, "cropGrow": "32400,64800,97200,129600,162000,2000000000", "gossip": "", "harvestNum": 7, "id": 301, "insect": "0,0,0,0,0,0|64,-11,60,-51,103,-34|64,-11,60,-51,103,-34|0,0,0,0,0,0", "name": "Trứng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Trứng còn gọi là quả trứng, bên trong quả có đầy đủ nước, giống như một lòng đỏ trứng nấu chín, vì thế nó được gọi là trứng trái cây.", "type": 1},
			{"asset_id": {"m": "2574", "s": "2575"}, "cropGrow": "32400,68400,104400,136800,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 302, "insect": "0,0,0,0,0,0|53,-15,84,-40,108,-8|59,-13,78,-45,112,-11|0,0,0,0,0,0", "name": "Hạc mai biển", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Hạc mai biển thường phát triển ở các sông, núi, đồng cỏ và những nơi khác, trị ho đờm, tiêu hóa trì trệ.", "type": 1},
			{"asset_id": {"m": "4262", "s": "4263"}, "cropGrow": "36000,72000,108000,144000,180000,2000000000", "gossip": "", "harvestNum": 7, "id": 303, "insect": "0,0,0,0,0,0|50,-20,83,-48,112,-12|49,-23,83,-48,109,-9|0,0,0,0,0,0", "isFlower": "0", "isFood": "0", "isLock": "0", "isRed": "0", "isRestaurant": "0", "name": "Mộc qua", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Là loại hoa quả hương thơm phong phú, chứa nhiều chất dinh dưỡng, bổ mạch máu, tăng sức khỏe con người.", "type": 1},
			{"asset_id": {"m": "2618", "s": "2619"}, "cropGrow": "32400,64800,97200,133200,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 304, "insect": "0,0,0,0,0,0|47,-19,99,-56,119,-7|38,-23,83,-59,117,-9|0,0,0,0,0,0", "name": "Cây vàng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Cây vàng (Gold Berry): còn gọi là ngón tay cà chua, cà tím sữa. Trái cây có hình dạng kỳ lạ, trái cây màu vàng vàng, sáng bắt mắt.", "type": 1},
			{"asset_id": {"m": "5376", "s": "5377"}, "cropGrow": "7200,18000,32400,46800,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 305, "insect": "0,0,0,0,0,0|87,9,86,-13,93,23|83,3,90,-39,97,20|0,0,0,0,0,0", "name": "Tỏi Tây", "nextText": "Hạt, nảy mầm, lá nhỏ, lá to, củ nhỏ, trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Tỏi Tây (Leek) là món gia vị dùng trong ẩm thực, tăng sức đề kháng rất tốt cho sức khỏe.", "type": 1},
			{"asset_id": {"m": "5374", "s": "5375"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 306, "insect": "0,0,0,0,0,0|87,9,86,-13,93,23|83,3,90,-39,97,20|0,0,0,0,0,0", "name": "Cần tây", "nextText": "Hạt, nảy mầm, lá nhỏ, lá to, củ nhỏ, trưởng thành", "offsetX": 0, "offsetY": 0, "tip": " Cần tây (Celery) là một loại rau phổ biến, giàu chất dinh dưỡng, nhưng cũng có một số giá trị dược lý, điều trị huyết áp thấp và các hiệu ứng khác.", "type": 1},
			{"asset_id": {"m": "4408", "s": "4409"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 8, "id": 309, "insect": "0,0,0,0,0,0|52,-6,61,-48,105,5|55,-13,69,-48,111,2|0,0,0,0,0,0", "isFlower": 1, "name": "Xuemei", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4410", "s": "4411"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 310, "insect": "0,0,0,0,0,0|72,13,84,-18,108,9|72,14,100,-47,109,10|0,0,0,0,0,0", "name": "Người tuyết", "nextText": "Sương,Hạt tuyết,Bóng tuyết,Thành hình,Nguyên hình,Người tuyết", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4345", "s": "4346"}, "cropGrow": "14400,32400,50400,68400,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 311, "insect": "0,0,0,0,0,0|58,-6,84,-47,106,-11|63,-13,83,-43,109,-5|0,0,0,0,0,0", "isActivity": 1, "name": "Sao Giáng sinh", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Khi tham gia các sự kiện Giáng sinh, bạn có thể nhận được thẻ hoạt động, thẻ cho các hoạt động trao đổi.", "type": 1},
			{"asset_id": {"m": "4347", "s": "4348"}, "cropGrow": "14400,32400,50400,68400,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 312, "insect": "0,0,0,0,0,0|68,-6,92,-54,106,-20|63,-13,92,-47,114,-11|0,0,0,0,0,0", "isActivity": 1, "name": "Gừng Giáng sinh", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Khi tham gia các sự kiện Giáng sinh, bạn có thể nhận được thẻ hoạt động, thẻ cho các hoạt động trao đổi.", "type": 1},
			{"asset_id": {"m": "4349", "s": "4350"}, "cropGrow": "14400,32400,50400,68400,86400,2000000000", "gossip": "", "harvestNum": 1, "id": 313, "insect": "0,0,0,0,0,0|68,-6,85,-53,106,-20|66,-1,86,-42,105,-22|0,0,0,0,0,0", "isActivity": 1, "name": "Mía Giáng sinh", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Khi tham gia các sự kiện Giáng sinh, bạn có thể nhận được thẻ hoạt động, thẻ cho các hoạt động trao đổi.", "type": 1},
			{"asset_id": {"m": "4333", "s": "4334"}, "cropGrow": "32400,68400,104400,136800,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 314, "insect": "0,0,0,0,0,0|70,-3,93,-43,105,-1|61,-5,90,-62,116,-8|0,0,0,0,0,0", "name": "Vàng Giáng sinh", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4335", "s": "4336"}, "cropGrow": "25200,50400,75600,100800,126000,2000000000", "gossip": "", "harvestNum": 8, "id": 315, "insect": "0,0,0,0,0,0|53,10,78,-28,95,-3|38,-22,78,-49,116,-25|0,0,0,0,0,0", "isMill": "1", "name": "Cây hòa bình", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4337", "s": "4338"}, "cropGrow": "7200,18000,32400,39600,46800,2000000000", "gossip": "", "harvestNum": 1, "id": 316, "insect": "0,0,0,0,0,0|76,22,83,-3,93,18|74,11,87,-29,102,0|0,0,0,0,0,0", "name": "Số 0", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4339", "s": "4340"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 317, "insect": "0,0,0,0,0,0|83,23,90,-1,98,18|79,19,87,-29,93,0|0,0,0,0,0,0", "name": "Số 1", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4417", "s": "4418"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 318, "insect": "0,0,0,0,0,0|82,10,91,-3,92,26|81,0,84,-40,100,26|0,0,0,0,0,0", "name": "Số 2", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4419", "s": "4420"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 319, "insect": "0,0,0,0,0,0|84,-1,86,-24,87,24|81,0,85,-32,93,25|0,0,0,0,0,0", "name": "Số 3", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4421", "s": "4422"}, "cropGrow": "7200,14400,25200,36000,50400,2000000000", "gossip": "", "harvestNum": 1, "id": 320, "insect": "0,0,0,0,0,0|92,12,94,-9,87,24|80,2,92,-27,93,25|0,0,0,0,0,0", "name": "Số 4", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4560", "s": "4561"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "gossip": "", "harvestNum": 1, "id": 321, "insect": "0,0,0,0,0,0|79,22,85,-12,94,8|76,16,86,-32,96,-1|0,0,0,0,0,0", "name": "Số 5", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4562", "s": "4563"}, "cropGrow": "7200,18000,32400,46800,61200,2000000000", "gossip": "", "harvestNum": 1, "id": 322, "insect": "0,0,0,0,0,0|81,26,82,3,95,18|76,16,78,-23,96,-1|0,0,0,0,0,0", "name": "Số 6", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4566", "s": "4567"}, "cropGrow": "10800,21600,32400,46800,64800,2000000000", "gossip": "", "harvestNum": 1, "id": 323, "insect": "0,0,0,0,0,0|84,19,92,-7,93,6|76,16,94,-24,96,-1|0,0,0,0,0,0", "name": "Số 7", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4671", "s": "4672"}, "cropGrow": "10800,25200,39600,54000,72000,2000000000", "gossip": "", "harvestNum": 1, "id": 324, "insect": "0,0,0,0,0,0|71,23,76,4,91,20|72,19,78,-23,99,12|0,0,0,0,0,0", "name": "Số 8", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4673", "s": "4674"}, "cropGrow": "10800,25200,43200,61200,79200,2000000000", "gossip": "", "harvestNum": 1, "id": 325, "insect": "0,0,0,0,0,0|71,23,76,4,91,20|72,19,78,-23,99,12|0,0,0,0,0,0", "name": "Số 9", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4229", "s": "4230"}, "cropGrow": "32400,68400,104400,136800,169200,2000000000", "gossip": "", "harvestNum": 7, "id": 326, "insect": "0,0,0,0,0,0|71,11,90,-22,106,7|63,9,85,-32,109,4|0,0,0,0,0,0", "name": "Kim cương sao", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4944", "s": "4945"}, "cropGrow": "21600,39600,57600,79200,104400,2000000000", "gossip": "", "harvestNum": 6, "id": 327, "insect": "0,0,0,0,0,0|57,2,97,-35,107,13|57,-37,89,-49,108,7|0,0,0,0,0,0", "name": "Pháo", "nextText": "Gieo hạt,Nảy mầm,Đâm cành,Ra lá,Trái con,Trưởng thành", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4946", "s": "4947"}, "cropGrow": "21600,39600,61200,82800,104400,2000000000", "gossip": "", "harvestNum": 7, "id": 328, "insect": "0,0,0,0,0,0|68,14,94,-16,99,4|55,-21,90,-43,114,-1|0,0,0,0,0,0", "isFlower": 1, "name": "Carnival", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4680", "s": "4681"}, "cropGrow": "18000,39600,61200,82800,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 330, "insect": "0,0,0,0,0,0|62,-4,92,-24,92,10|60,4,82,-43,111,4|0,0,0,0,0,0", "name": "Mây", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4570", "s": "4571"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 3, "id": 332, "insect": "0,0,0,0,0,0|45,-15,77,-45,128,2|54,-26,74,-59,120,0|0,0,0,0,0,0", "name": "Lồng đèn năm mới", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4948", "s": "4949"}, "cropGrow": "21600,43200,61200,82800,108000,2000000000", "gossip": "", "harvestNum": 6, "id": 329, "insect": "0,0,0,0,0,0|60,-6,95,-27,118,-3|45,-18,98,-48,131,-19|0,0,0,0,0,0", "name": "Bao lì xì", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4725", "s": "4726"}, "cropGrow": "28800,61200,93600,129600,165600,2000000000", "gossip": "", "harvestNum": 4, "id": 333, "insect": "0,0,0,0,0,0|68,20,87,-4,108,21|63,11,92,-34,106,15|0,0,0,0,0,0", "name": "Đậu may mắn", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"h": "4729", "m": "4727", "s": "4728"}, "cropGrow": "7200,18000,28800,43200,57600,2000000000", "ext": "", "gossip": "", "harvestNum": 1, "id": 334, "insect": "0,0,0,0,0,0|73,1,93,-38,103,-2|62,-16,94,-65,101,-4|0,0,0,0,0,0", "isAnimation": 1, "isLock": 1, "name": "Hoa búp bê", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Hoa búp bê (Lohas baby) là linh vật của năm mới vào năm 2011, trồng cây con và thu hoạch có thể mang lại sức khỏe mạnh và hạnh phúc trong năm nay.", "type": 1},
			{"asset_id": {"m": "5092", "s": "5093"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 340, "insect": "0,0,0,0,0,0|74,21,82,5,93,21|72,17,81,-20,93,7|0,0,0,0,0,0", "name": "Chữ A", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5258", "s": "5259"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 341, "insect": "0,0,0,0,0,0|75,24,79,9,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "Chữ B", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5260", "s": "5261"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 342, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "Chữ C", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5262", "s": "5263"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 343, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "Chữ D", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5094", "s": "5095"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 344, "insect": "0,0,0,0,0,0|77,25,82,-5,83,13|77,21,80,-19,90,3|0,0,0,0,0,0", "name": "Chữ E", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5264", "s": "5265"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 345, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "Chữ F", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5266", "s": "5267"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 346, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "Chữ G", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5096", "s": "5097"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 347, "insect": "0,0,0,0,0,0|74,21,77,-4,98,24|77,21,78,-29,95,1|0,0,0,0,0,0", "name": "Chữ H", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5268", "s": "5269"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 348, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "Chữ I", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5270", "s": "5271"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 349, "insect": "0,0,0,0,0,0|80,25,85,3,95,20|78,18,84,-24,94,11|0,0,0,0,0,0", "name": "Chữ J", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5272", "s": "5273"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 350, "insect": "0,0,0,0,0,0|80,25,82,-1,93,17|75,24,84,-24,90,0|0,0,0,0,0,0", "name": "Chữ K", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5274", "s": "5275"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 351, "insect": "0,0,0,0,0,0|80,25,82,9,93,21|75,24,84,-6,90,12|0,0,0,0,0,0", "name": "Chữ L", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5276", "s": "5277"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 352, "insect": "0,0,0,0,0,0|75,27,75,1,94,14|75,24,81,-13,93,8|0,0,0,0,0,0", "name": "Chữ M", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5098", "s": "5099"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 353, "insect": "0,0,0,0,0,0|74,21,77,-4,98,24|77,21,78,-29,95,1|0,0,0,0,0,0", "name": "Chữ N", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5278", "s": "5279"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 354, "insect": "0,0,0,0,0,0|75,27,75,1,94,14|75,24,81,-13,93,8|0,0,0,0,0,0", "name": "Chữ O", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5100", "s": "5101"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 355, "insect": "0,0,0,0,0,0|74,21,77,-4,87,13|77,21,78,-29,95,1|0,0,0,0,0,0", "name": "Chữ P", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5280", "s": "5281"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 356, "insect": "0,0,0,0,0,0|75,27,75,1,94,14|75,24,81,-13,93,8|0,0,0,0,0,0", "name": "Chữ Q", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5102", "s": "5103"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 357, "insect": "0,0,0,0,0,0|74,21,77,-4,87,13|77,21,78,-29,95,1|0,0,0,0,0,0", "name": "Chữ R", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5282", "s": "5283"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 358, "insect": "0,0,0,0,0,0|79,24,82,1,94,14|75,24,81,-13,93,8|0,0,0,0,0,0", "name": "Chữ S", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5284", "s": "5285"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 359, "insect": "0,0,0,0,0,0|79,24,82,1,94,14|75,24,81,-13,93,8|0,0,0,0,0,0", "name": "Chữ T", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5286", "s": "5287"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 360, "insect": "0,0,0,0,0,0|79,24,83,2,94,14|75,24,81,-10,93,8|0,0,0,0,0,0", "name": "Chữ U", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5288", "s": "5289"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 361, "insect": "0,0,0,0,0,0|79,24,83,2,94,14|75,24,81,-10,93,8|0,0,0,0,0,0", "name": "Chữ V", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5104", "s": "5105"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 362, "insect": "0,0,0,0,0,0|74,21,77,-4,87,13|77,21,78,-29,95,1|0,0,0,0,0,0", "name": "Chữ W", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5290", "s": "5291"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 363, "insect": "0,0,0,0,0,0|79,24,83,2,94,14|75,24,81,-10,93,8|0,0,0,0,0,0", "name": "Chữ X", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5106", "s": "5107"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 364, "insect": "0,0,0,0,0,0|77,25,82,3,87,18|77,21,80,-19,94,13|0,0,0,0,0,0", "name": "Chữ Y", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "5292", "s": "5293"}, "cropGrow": "18000,39600,61200,86400,111600,2000000000", "gossip": "", "harvestNum": 5, "id": 365, "insect": "0,0,0,0,0,0|79,24,87,4,94,20|75,24,81,-10,93,8|0,0,0,0,0,0", "name": "Chữ Z", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4952", "s": "4953"}, "cropGrow": "21600,46800,64800,90000,118800,2000000000", "gossip": "", "harvestNum": 5, "id": 366, "insect": "0,0,0,0,0,0|68,7,81,-32,106,-4|47,-6,77,-36,112,8|0,0,0,0,0,0", "isFlower": 1, "name": "Hoa hồng Rainbow", "nextText": "Gieo hạt,Nảy mầm,Lá bé,Lá lớn,Ra nụ,Ra hoa", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4950", "s": "4951"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 2, "id": 367, "insect": "0,0,0,0,0,0|55,-7,87,-32,106,-4|54,-10,92,-39,113,-11|0,0,0,0,0,0", "isActivity": 1, "isLock": 1, "name": "Cây vàng", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "4529"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2001, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "Thẻ ông già Noel", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "product": "Thẻ Ông già Noel", "sale": 20, "show": 0, "tip": "Không có thông tin", "type": 11},
			{"asset_id": {"m": "4530"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2002, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "Thẻ Giáng sinh", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "product": "Thẻ Giáng sinh", "sale": 10, "show": 0, "tip": "Không có thông tin", "type": 11},
			{"asset_id": {"m": "4531"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2003, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "Thẻ năm mới", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "product": "Thẻ năm mới", "sale": 25, "show": 0, "tip": "Không có thông tin", "type": 11},
			{"asset_id": {"m": "4532"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2004, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "Thẻ người tuyết", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "product": "Thẻ người tuyết", "sale": 15, "show": 0, "tip": "Không có thông tin", "type": 11},
			{"asset_id": {"m": "4533"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2005, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "Thẻ tuần lộc", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "product": "Thẻ tuần lộc", "sale": 10, "show": 0, "tip": "Không có thông tin", "type": 11},
			{"asset_id": {"m": "4534"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2006, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "Thẻ pháo hoa", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "product": "Thẻ pháo hoa", "sale": 10, "show": 0, "tip": "Không có thông tin", "type": 11},
			{"asset_id": {"m": "4535"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2007, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "Thẻ Tết", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "product": "Thẻ Tết", "sale": 20, "show": 0, "tip": "Không có thông tin", "type": 11},
			{"asset_id": {"m": "4536"}, "cropGrow": "18000,36000,54000,72000,90000,2000000000", "gossip": "", "harvestNum": 0, "id": 2008, "insect": "0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0|0,0,0,0,0,0", "isLock": 1, "name": "Thẻ con thỏ", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra quả, Thu hoạch", "offsetX": 0, "offsetY": 0, "product": "Thẻ con thỏ", "sale": 10, "show": 0, "tip": "Không có thông tin", "type": 11},
			{"asset_id": {"m": "6205", "s": "6206"}, "cropGrow": "14400,28800,46800,64800,82800,2000000000", "gossip": "", "harvestNum": 3, "id": 205, "insect": "0,0,0,0,0,0|45,0,99,-10,129,-24|45,-5,99,-15,129,-29|0,0,0,0,0,0", "name": "Purple Flower Spirit", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1},
			{"asset_id": {"m": "6207", "s": "6208"}, "cropGrow": "28800,54000,82800,115200,144000,2000000000", "gossip": "", "harvestNum": 7, "id": 206, "insect": "0,0,0,0,0,0|45,0,99,-10,129,-24|45,-5,99,-15,129,-29|0,0,0,0,0,0", "name": "Bergamot", "nextText": " Hạt giống, Nảy mầm, Lá nhỏ, Lá to, Ra hoa, Thu hoạch", "offsetX": 0, "offsetY": 0, "tip": "Không có thông tin", "type": 1}
		]}
		]]>
	</crops>

	<!-- 农场背景装饰 -->
	<item_info type="json">
		<![CDATA[
		{"item_info": [
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "947", "m": "945", "s": "946"}, "desc": "Mặc định", "exp": 0, "id": 1, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "950", "m": "948", "s": "949"}, "desc": "Mặc định", "exp": 0, "id": 2, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "953", "m": "951", "s": "952"}, "desc": "Gửi", "exp": 0, "id": 3, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "956", "m": "954", "s": "955"}, "desc": "Gửi", "exp": 0, "id": 4, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 0},
			{"FBPrice": 50, "YFBPrice": 40, "asset_id": {"b": "959", "m": "957", "s": "958"}, "desc": "Hà lan", "exp": 288, "id": 11, "level": 0, "name": "Nền", "price": 14499, "type": 1, "valid": 2592000},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "962", "m": "960", "s": "961"}, "desc": "Hà lan", "exp": 200, "id": 12, "level": 0, "name": "Nhà", "price": 9999, "type": 2, "valid": 2592000},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "965", "m": "963", "s": "964"}, "desc": "Hà lan", "exp": 120, "id": 13, "level": 0, "name": "Hàng rào", "price": 5999, "type": 3, "valid": 2592000},
			{"FBPrice": 20, "YFBPrice": 16, "asset_id": {"b": "968", "m": "966", "s": "967"}, "desc": "Hà lan", "exp": 96, "id": 14, "level": 0, "name": "Nhà chó", "price": 4999, "type": 4, "valid": 2592000},
			{"FBPrice": 21, "YFBPrice": 0, "asset_id": {"b": "971", "m": "969", "s": "970"}, "desc": "Giáng sinh", "exp": 432, "id": 16, "level": 0, "name": "Nền", "price": 21999, "type": 1, "valid": 2592000},
			{"FBPrice": 14, "YFBPrice": 0, "asset_id": {"b": "974", "m": "972", "s": "973"}, "desc": "Nhà noel", "exp": 300, "id": 17, "level": 0, "name": "Nhà", "price": 14999, "type": 2, "valid": 2592000},
			{"FBPrice": 8, "YFBPrice": 0, "asset_id": {"b": "977", "m": "975", "s": "976"}, "desc": "Kiểu Giáng dinh", "exp": 180, "id": 18, "level": 0, "name": "Hàng rào ", "price": 8999, "type": 3, "valid": 2592000},
			{"FBPrice": 7, "YFBPrice": 0, "asset_id": {"b": "980", "m": "978", "s": "979"}, "desc": "Kiểu Giáng dinh", "exp": 144, "id": 19, "level": 0, "name": "Nhà chó ", "price": 7199, "type": 4, "valid": 2592000},
			{"FBPrice": 25, "YFBPrice": 0, "asset_id": {"b": "982", "s": "981"}, "desc": "Mùa xuân", "exp": 518, "id": 21, "level": 0, "name": "Nền", "price": 25999, "type": 1, "valid": 2592000},
			{"FBPrice": 17, "YFBPrice": 0, "asset_id": {"b": "985", "m": "983", "s": "984"}, "desc": "Mùa xuân", "exp": 360, "id": 22, "level": 0, "name": "Nhà", "price": 17999, "type": 2, "valid": 2592000},
			{"FBPrice": 10, "YFBPrice": 0, "asset_id": {"b": "988", "m": "986", "s": "987"}, "desc": "Mùa xuân", "exp": 216, "id": 23, "level": 0, "name": "Hàng rào", "price": 10999, "type": 3, "valid": 2592000},
			{"FBPrice": 8, "YFBPrice": 0, "asset_id": {"b": "991", "m": "989", "s": "990"}, "desc": "Mùa xuân", "exp": 173, "id": 24, "level": 0, "name": "Nhà chó", "price": 8888, "type": 4, "valid": 2592000},
			{"FBPrice": 16, "YFBPrice": 0, "asset_id": {"b": "993", "s": "992"}, "desc": "Năm mới", "exp": 346, "id": 26, "level": 0, "name": "Nền", "price": 16888, "type": 1, "valid": 2592000},
			{"FBPrice": 11, "YFBPrice": 0, "asset_id": {"b": "996", "m": "994", "s": "995"}, "desc": "Năm mới", "exp": 240, "id": 27, "level": 0, "name": "Nhà", "price": 11888, "type": 2, "valid": 2592000},
			{"FBPrice": 7, "YFBPrice": 0, "asset_id": {"b": "999", "m": "997", "s": "998"}, "desc": "Năm mới", "exp": 144, "id": 28, "level": 0, "name": "Hàng rào", "price": 7188, "type": 3, "valid": 2592000},
			{"FBPrice": 5, "YFBPrice": 0, "asset_id": {"b": "1002", "m": "1000", "s": "1001"}, "desc": "Năm mới", "exp": 115, "id": 29, "level": 0, "name": "Nhà chó", "price": 5888, "type": 4, "valid": 2592000},
			{"FBPrice": 25, "YFBPrice": 0, "asset_id": {"b": "1004", "s": "1003"}, "desc": "Mùa hè", "exp": 518, "id": 31, "level": 0, "name": "Nền", "price": 25999, "type": 1, "valid": 2592000},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "1007", "m": "1005", "s": "1006"}, "desc": "Đồng cỏ", "exp": 346, "id": 41, "level": 0, "name": "Nền", "price": 17280, "type": 1, "valid": 2592000},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "1010", "m": "1008", "s": "1009"}, "desc": "Đồng cỏ", "exp": 240, "id": 42, "level": 0, "name": "Nhà", "price": 12000, "type": 2, "valid": 2592000},
			{"FBPrice": 28, "YFBPrice": 22, "asset_id": {"b": "1013", "m": "1011", "s": "1012"}, "desc": "Đồng cỏ", "exp": 144, "id": 43, "level": 0, "name": "Hàng rào", "price": 7200, "type": 3, "valid": 2592000},
			{"FBPrice": 22, "YFBPrice": 17, "asset_id": {"b": "1016", "m": "1014", "s": "1015"}, "desc": "Đồng cỏ", "exp": 115, "id": 44, "level": 0, "name": "Nhà chó", "price": 5760, "type": 4, "valid": 2592000},
			{"FBPrice": 144, "YFBPrice": 115, "asset_id": {"b": "1019", "m": "1017", "s": "1018"}, "desc": "Thiên đường phép ", "exp": 720, "id": 45, "level": 0, "name": "Nền", "price": 42199, "type": 1, "valid": 2592000},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "1022", "m": "1020", "s": "1021"}, "desc": "Thiên đường phép ", "exp": 500, "id": 46, "level": 0, "name": "Nhà", "price": 29888, "type": 2, "valid": 2592000},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "1025", "m": "1023", "s": "1024"}, "desc": "Thiên đường phép ", "exp": 300, "id": 47, "level": 0, "name": "Hàng rào", "price": 18088, "type": 3, "valid": 2592000},
			{"FBPrice": 48, "YFBPrice": 38, "asset_id": {"b": "1028", "m": "1026", "s": "1027"}, "desc": "Thiên đường phép ", "exp": 240, "id": 48, "level": 0, "name": "Nhà chó", "price": 14399, "type": 4, "valid": 2592000},
			{"FBPrice": 77, "YFBPrice": 61, "asset_id": {"b": "1031", "m": "1029", "s": "1030"}, "desc": "Hoàng hôn", "exp": 384, "id": 49, "level": 0, "name": "Nền", "price": 27799, "type": 1, "valid": 2592000},
			{"FBPrice": 53, "YFBPrice": 42, "asset_id": {"b": "1034", "m": "1032", "s": "1033"}, "desc": "Hoàng hôn", "exp": 267, "id": 50, "level": 0, "name": "Nhà", "price": 19988, "type": 2, "valid": 2592000},
			{"FBPrice": 32, "YFBPrice": 25, "asset_id": {"b": "1037", "m": "1035", "s": "1036"}, "desc": "Hoàng hôn", "exp": 160, "id": 51, "level": 0, "name": "Hàng rào", "price": 11888, "type": 3, "valid": 2592000},
			{"FBPrice": 26, "YFBPrice": 20, "asset_id": {"b": "1040", "m": "1038", "s": "1039"}, "desc": "Hoàng hôn", "exp": 160, "id": 52, "level": 0, "name": "Nhà chó", "price": 9588, "type": 4, "valid": 2592000},
			{"FBPrice": 104, "YFBPrice": 83, "asset_id": {"b": "1043", "m": "1041", "s": "1042"}, "desc": "Núi", "exp": 518, "id": 53, "level": 0, "name": "Nền", "price": 38099, "type": 1, "valid": 2592000},
			{"FBPrice": 72, "YFBPrice": 57, "asset_id": {"b": "1046", "m": "1044", "s": "1045"}, "desc": "Núi", "exp": 360, "id": 54, "level": 0, "name": "Nhà", "price": 26888, "type": 2, "valid": 2592000},
			{"FBPrice": 43, "YFBPrice": 34, "asset_id": {"b": "1049", "m": "1047", "s": "1048"}, "desc": "Núi", "exp": 216, "id": 55, "level": 0, "name": "Hàng rào", "price": 16299, "type": 3, "valid": 2592000},
			{"FBPrice": 35, "YFBPrice": 28, "asset_id": {"b": "1052", "m": "1050", "s": "1051"}, "desc": "Núi", "exp": 173, "id": 56, "level": 0, "name": "Nhà chó", "price": 12599, "type": 4, "valid": 2592000},
			{"FBPrice": 88, "YFBPrice": 70, "asset_id": {"b": "1055", "m": "1053", "s": "1054"}, "desc": "Địa Trung Hải", "exp": 442, "id": 57, "level": 0, "name": "Nền", "price": 33088, "type": 1, "valid": 2592000},
			{"FBPrice": 61, "YFBPrice": 48, "asset_id": {"b": "1058", "m": "1056", "s": "1057"}, "desc": "Địa Trung Hải", "exp": 307, "id": 58, "level": 0, "name": "Nhà", "price": 22299, "type": 2, "valid": 2592000},
			{"FBPrice": 37, "YFBPrice": 29, "asset_id": {"b": "1061", "m": "1059", "s": "1060"}, "desc": "Địa Trung Hải", "exp": 184, "id": 59, "level": 0, "name": "Hàng rào", "price": 13788, "type": 3, "valid": 2592000},
			{"FBPrice": 29, "YFBPrice": 23, "asset_id": {"b": "1064", "m": "1062", "s": "1063"}, "desc": "Địa Trung Hải", "exp": 147, "id": 60, "level": 0, "name": "Nhà chó", "price": 11088, "type": 4, "valid": 2592000},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "1067", "m": "1065", "s": "1066"}, "desc": "Genting Forest", "exp": 340, "id": 61, "level": 0, "name": "Nền", "price": 35999, "type": 1, "valid": 2592000},
			{"FBPrice": 67, "YFBPrice": 54, "asset_id": {"b": "1070", "m": "1068", "s": "1069"}, "desc": "Genting Forest", "exp": 268, "id": 62, "level": 0, "name": "Nhà", "price": 24999, "type": 2, "valid": 2592000},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1073", "m": "1071", "s": "1072"}, "desc": "Genting Forest", "exp": 160, "id": 63, "level": 0, "name": "Hàng rào", "price": 14999, "type": 3, "valid": 2592000},
			{"FBPrice": 32, "YFBPrice": 26, "asset_id": {"b": "1076", "m": "1074", "s": "1075"}, "desc": "Genting Forest", "exp": 128, "id": 64, "level": 0, "name": "Nhà chó", "price": 11999, "type": 4, "valid": 2592000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1079", "m": "1077", "s": "1078"}, "desc": "Công chúa đậu", "exp": 0, "id": 65, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2592000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1082", "m": "1080", "s": "1081"}, "desc": "Công chúa đậu", "exp": 0, "id": 66, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2592000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1085", "m": "1083", "s": "1084"}, "desc": "Công chúa đậu", "exp": 0, "id": 67, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2592000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1088", "m": "1086", "s": "1087"}, "desc": "Công chúa đậu", "exp": 0, "id": 68, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2592000},
			{"FBPrice": 92, "YFBPrice": 73, "asset_id": {"b": "1091", "m": "1089", "s": "1090"}, "desc": "Mực Nam", "exp": 367, "id": 69, "level": 0, "name": "Nền", "price": 40288, "type": 1, "valid": 2592000},
			{"FBPrice": 64, "YFBPrice": 51, "asset_id": {"b": "1094", "m": "1092", "s": "1093"}, "desc": "Mực Nam", "exp": 255, "id": 70, "level": 0, "name": "Nhà", "price": 27999, "type": 2, "valid": 2592000},
			{"FBPrice": 38, "YFBPrice": 31, "asset_id": {"b": "1097", "m": "1095", "s": "1096"}, "desc": "Mực Nam", "exp": 153, "id": 71, "level": 0, "name": "Hàng rào", "price": 16788, "type": 3, "valid": 2592000},
			{"FBPrice": 31, "YFBPrice": 24, "asset_id": {"b": "1100", "m": "1098", "s": "1099"}, "desc": "Mực Nam", "exp": 122, "id": 72, "level": 0, "name": "Nhà chó", "price": 13488, "type": 4, "valid": 2592000},
			{"FBPrice": 57, "YFBPrice": 46, "asset_id": {"b": "1103", "m": "1101", "s": "1102"}, "desc": "Nền ánh trăng", "exp": 199, "id": 73, "level": 0, "name": "Nền", "price": 25888, "type": 1, "valid": 15552000},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1106", "m": "1104", "s": "1105"}, "desc": "Nhà phù thủy", "exp": 138, "id": 74, "level": 0, "name": "Nhà", "price": 17999, "type": 2, "valid": 15552000},
			{"FBPrice": 24, "YFBPrice": 19, "asset_id": {"b": "1109", "m": "1107", "s": "1108"}, "desc": "Hàng rào", "exp": 83, "id": 75, "level": 0, "name": "Hàng rào", "price": 10888, "type": 3, "valid": 15552000},
			{"FBPrice": 19, "YFBPrice": 15, "asset_id": {"b": "1112", "m": "1110", "s": "1111"}, "desc": "Củi ánh sáng", "exp": 66, "id": 76, "level": 0, "name": "Nhà chó", "price": 8599, "type": 4, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1115", "m": "1113", "s": "1114"}, "desc": "Hè xanh", "exp": 0, "id": 77, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1118", "m": "1116", "s": "1117"}, "desc": "Hè xanh", "exp": 0, "id": 78, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1121", "m": "1119", "s": "1120"}, "desc": "Hè xanh", "exp": 0, "id": 79, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1124", "m": "1122", "s": "1123"}, "desc": "Hè xanh", "exp": 0, "id": 80, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1127", "m": "1125", "s": "1126"}, "desc": "Rừng xanh", "exp": 0, "id": 81, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1130", "m": "1128", "s": "1129"}, "desc": "Rừng xanh", "exp": 0, "id": 82, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1133", "m": "1131", "s": "1132"}, "desc": "Rừng xanh", "exp": 0, "id": 83, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1136", "m": "1134", "s": "1135"}, "desc": "Rừng xanh", "exp": 0, "id": 84, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 15552000},
			{"FBPrice": 55, "YFBPrice": 44, "asset_id": {"b": "1139", "m": "1137", "s": "1138"}, "desc": "Trại Ong", "exp": 165, "id": 85, "level": 0, "name": "Nền", "price": 23088, "type": 1, "valid": 15552000},
			{"FBPrice": 38, "YFBPrice": 30, "asset_id": {"b": "1142", "m": "1140", "s": "1141"}, "desc": "Trại Ong", "exp": 114, "id": 86, "level": 0, "name": "Nhà", "price": 15999, "type": 2, "valid": 15552000},
			{"FBPrice": 23, "YFBPrice": 18, "asset_id": {"b": "1145", "m": "1143", "s": "1144"}, "desc": "Trại Ong", "exp": 69, "id": 87, "level": 0, "name": "Hàng rào", "price": 9588, "type": 3, "valid": 15552000},
			{"FBPrice": 18, "YFBPrice": 15, "asset_id": {"b": "1148", "m": "1146", "s": "1147"}, "desc": "Trại Ong", "exp": 55, "id": 88, "level": 0, "name": "Nhà chó", "price": 7688, "type": 4, "valid": 15552000},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1151", "m": "1149", "s": "1150"}, "desc": "Cuộc sống", "exp": 0, "id": 89, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1154", "m": "1152", "s": "1153"}, "desc": "Cuộc sống", "exp": 0, "id": 90, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1157", "m": "1155", "s": "1156"}, "desc": "Cuộc sống", "exp": 0, "id": 91, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1160", "m": "1158", "s": "1159"}, "desc": "Cuộc sống", "exp": 0, "id": 92, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1163", "m": "1161", "s": "1162"}, "desc": "Vẫn yêu", "exp": 0, "id": 93, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1166", "m": "1164", "s": "1165"}, "desc": "Vẫn yêu", "exp": 0, "id": 94, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1169", "m": "1167", "s": "1168"}, "desc": "Vẫn yêu", "exp": 0, "id": 95, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1172", "m": "1170", "s": "1171"}, "desc": "Vẫn yêu", "exp": 0, "id": 96, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 8035200},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1175", "m": "1173", "s": "1174"}, "desc": "Leo", "exp": 0, "id": 97, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1178", "m": "1176", "s": "1177"}, "desc": "Leo", "exp": 0, "id": 98, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1181", "m": "1179", "s": "1180"}, "desc": "Leo", "exp": 0, "id": 99, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1184", "m": "1182", "s": "1183"}, "desc": "Leo", "exp": 0, "id": 100, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1187", "m": "1185", "s": "1186"}, "desc": "Sa mạc", "exp": 0, "id": 201, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1190", "m": "1188", "s": "1189"}, "desc": "Sa mạc", "exp": 0, "id": 202, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1193", "m": "1191", "s": "1192"}, "desc": "Sa mạc", "exp": 0, "id": 203, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1196", "m": "1194", "s": "1195"}, "desc": "Sa mạc", "exp": 0, "id": 204, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1199", "m": "1197", "s": "1198"}, "desc": "Thành phố Neon", "exp": 0, "id": 205, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1202", "m": "1200", "s": "1201"}, "desc": "Thành phố Neon", "exp": 0, "id": 206, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1205", "m": "1203", "s": "1204"}, "desc": "Thành phố Neon", "exp": 0, "id": 207, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1208", "m": "1206", "s": "1207"}, "desc": "Thành phố Neon", "exp": 0, "id": 208, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1211", "m": "1209", "s": "1210"}, "desc": "Lâu đài xanh", "exp": 0, "id": 209, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1214", "m": "1212", "s": "1213"}, "desc": "Lâu đài xanh", "exp": 0, "id": 210, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1217", "m": "1215", "s": "1216"}, "desc": "Lâu đài xanh", "exp": 0, "id": 211, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1220", "m": "1218", "s": "1219"}, "desc": "Lâu đài xanh", "exp": 0, "id": 212, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1223", "m": "1221", "s": "1222"}, "desc": "Đồng xanh", "exp": 0, "id": 213, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1226", "m": "1224", "s": "1225"}, "desc": "Đồng xanh", "exp": 0, "id": 214, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1229", "m": "1227", "s": "1228"}, "desc": "Đồng xanh", "exp": 0, "id": 215, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1232", "m": "1230", "s": "1231"}, "desc": "Đồng xanh", "exp": 0, "id": 216, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 0},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1235", "m": "1233", "s": "1234"}, "desc": "Bá chủ ", "exp": 0, "id": 217, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1238", "m": "1236", "s": "1237"}, "desc": "Bá chủ", "exp": 0, "id": 218, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1241", "m": "1239", "s": "1240"}, "desc": "Bá chủ", "exp": 0, "id": 219, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1244", "m": "1242", "s": "1243"}, "desc": "Bá chủ", "exp": 0, "id": 220, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1247", "m": "1245", "s": "1246"}, "desc": "Cà phê", "exp": 0, "id": 221, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1250", "m": "1248", "s": "1249"}, "desc": "Cà phê", "exp": 0, "id": 222, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1253", "m": "1251", "s": "1252"}, "desc": "Cà phê", "exp": 0, "id": 223, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1256", "m": "1254", "s": "1255"}, "desc": "Cà phê", "exp": 0, "id": 224, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 50, "YFBPrice": 40, "asset_id": {"b": "1259", "m": "1257", "s": "1258"}, "desc": "Mặt trời California", "exp": 288, "id": 225, "level": 0, "name": "Nền", "price": 14499, "type": 1, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1262", "m": "1260", "s": "1261"}, "desc": "Mặt trời California", "exp": 200, "id": 226, "level": 0, "name": "Nhà", "price": 9999, "type": 2, "valid": 16070400},
			{"FBPrice": 25, "YFBPrice": 20, "asset_id": {"b": "1265", "m": "1263", "s": "1264"}, "desc": "Mặt trời California", "exp": 120, "id": 227, "level": 0, "name": "Hàng rào", "price": 5999, "type": 3, "valid": 16070400},
			{"FBPrice": 20, "YFBPrice": 16, "asset_id": {"b": "1268", "m": "1266", "s": "1267"}, "desc": "Mặt trời California", "exp": 96, "id": 228, "level": 0, "name": "Nhà chó", "price": 4999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1271", "m": "1269", "s": "1270"}, "desc": "Biển xanh", "exp": 0, "id": 229, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1274", "m": "1272", "s": "1273"}, "desc": "Biển xanh", "exp": 0, "id": 230, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1277", "m": "1275", "s": "1276"}, "desc": "Biển xanh", "exp": 0, "id": 231, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1280", "m": "1278", "s": "1279"}, "desc": "Biển xanh", "exp": 0, "id": 232, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1283", "m": "1281", "s": "1282"}, "desc": "Màu xanh ", "exp": 0, "id": 233, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1286", "m": "1284", "s": "1285"}, "desc": "Màu xanh ", "exp": 0, "id": 234, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1289", "m": "1287", "s": "1288"}, "desc": "Màu xanh ", "exp": 0, "id": 235, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1292", "m": "1290", "s": "1291"}, "desc": "Màu xanh ", "exp": 0, "id": 236, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1295", "m": "1293", "s": "1294"}, "desc": "Tuyết yêu thương", "exp": 0, "id": 237, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1298", "m": "1296", "s": "1297"}, "desc": "Tuyết yêu thương", "exp": 0, "id": 238, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1301", "m": "1299", "s": "1300"}, "desc": "Tuyết yêu thương", "exp": 0, "id": 239, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1304", "m": "1302", "s": "1303"}, "desc": "Tuyết yêu thương", "exp": 0, "id": 240, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1307", "m": "1305", "s": "1306"}, "desc": "Tuyết xuân", "exp": 0, "id": 241, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1310", "m": "1308", "s": "1309"}, "desc": "Tuyết xuân", "exp": 0, "id": 242, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1313", "m": "1311", "s": "1312"}, "desc": "Tuyết xuân", "exp": 0, "id": 243, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1316", "m": "1314", "s": "1315"}, "desc": "Tuyết xuân", "exp": 0, "id": 244, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1319", "m": "1317", "s": "1318"}, "desc": "Hội chợ", "exp": 0, "id": 245, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1322", "m": "1320", "s": "1321"}, "desc": "Hội chợ", "exp": 0, "id": 246, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1325", "m": "1323", "s": "1324"}, "desc": "Hội chợ", "exp": 0, "id": 247, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1328", "m": "1326", "s": "1327"}, "desc": "Hội chợ", "exp": 0, "id": 248, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1331", "m": "1329", "s": "1330"}, "desc": "Thường niên", "exp": 0, "id": 249, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1334", "m": "1332", "s": "1333"}, "desc": "Thường niên", "exp": 0, "id": 250, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1337", "m": "1335", "s": "1336"}, "desc": "Thường niên", "exp": 0, "id": 251, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1340", "m": "1338", "s": "1339"}, "desc": "Thường niên", "exp": 0, "id": 252, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "1343", "m": "1341", "s": "1342"}, "desc": "Tình yêu Lavender", "exp": 420, "id": 253, "level": 0, "name": "Nền", "price": 82899, "type": 1, "valid": 16070400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "1346", "m": "1344", "s": "1345"}, "desc": "Tình yêu Lavender", "exp": 320, "id": 254, "level": 0, "name": "Nhà", "price": 57599, "type": 2, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "1349", "m": "1347", "s": "1348"}, "desc": "Tình yêu Lavender", "exp": 220, "id": 255, "level": 0, "name": "Hàng rào", "price": 34599, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "1352", "m": "1350", "s": "1351"}, "desc": "Tình yêu Lavender", "exp": 150, "id": 256, "level": 0, "name": "Nhà chó", "price": 27688, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1355", "m": "1353", "s": "1354"}, "desc": "Hyun Park  Dance", "exp": 0, "id": 257, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1358", "m": "1356", "s": "1357"}, "desc": "Hyun Park  Dance", "exp": 0, "id": 258, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1361", "m": "1359", "s": "1360"}, "desc": "Hyun Park  Dance", "exp": 0, "id": 259, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1364", "m": "1362", "s": "1363"}, "desc": "Hyun Park  Dance", "exp": 0, "id": 260, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1367", "m": "1365", "s": "1366"}, "desc": "Giấc mơ", "exp": 0, "id": 261, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1370", "m": "1368", "s": "1369"}, "desc": "Giấc mơ", "exp": 0, "id": 262, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1373", "m": "1371", "s": "1372"}, "desc": "Giấc mơ", "exp": 0, "id": 263, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1376", "m": "1374", "s": "1375"}, "desc": "Giấc mơ", "exp": 0, "id": 264, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "1379", "m": "1377", "s": "1378"}, "desc": "Bờ biển xanh", "exp": 518, "id": 265, "level": 0, "name": "Nền", "price": 25999, "type": 1, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "1382", "m": "1380", "s": "1381"}, "desc": "Bờ biển xanh", "exp": 360, "id": 266, "level": 0, "name": "Nhà", "price": 17999, "type": 2, "valid": 16070400},
			{"FBPrice": 50, "YFBPrice": 40, "asset_id": {"b": "1385", "m": "1383", "s": "1384"}, "desc": "Bờ biển xanh", "exp": 216, "id": 267, "level": 0, "name": "Hàng rào", "price": 10999, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "1388", "m": "1386", "s": "1387"}, "desc": "Bờ biển xanh", "exp": 173, "id": 268, "level": 0, "name": "Nhà chó", "price": 8888, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1391", "m": "1389", "s": "1390"}, "desc": "Cây thông", "exp": 0, "id": 269, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1394", "m": "1392", "s": "1393"}, "desc": "Cây thông", "exp": 0, "id": 270, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1397", "m": "1395", "s": "1396"}, "desc": "Cây thông", "exp": 0, "id": 271, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1400", "m": "1398", "s": "1399"}, "desc": "Cây thông", "exp": 0, "id": 272, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1403", "m": "1401", "s": "1402"}, "desc": "Affiliated suite", "exp": 80, "id": 273, "level": 0, "name": "Nền", "price": 18999, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1406", "m": "1404", "s": "1405"}, "desc": "Affiliated suite", "exp": 48, "id": 274, "level": 0, "name": "Nhà", "price": 12999, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1409", "m": "1407", "s": "1408"}, "desc": "Affiliated suite", "exp": 24, "id": 275, "level": 0, "name": "Hàng rào", "price": 5888, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1412", "m": "1410", "s": "1411"}, "desc": "Affiliated suite", "exp": 16, "id": 276, "level": 0, "name": "Nhà chó", "price": 3888, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1415", "m": "1413", "s": "1414"}, "desc": "Khu mua sắm", "exp": 0, "id": 277, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1418", "m": "1416", "s": "1417"}, "desc": "Khu mua sắm", "exp": 0, "id": 278, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1421", "m": "1419", "s": "1420"}, "desc": "Khu mua sắm", "exp": 0, "id": 279, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1424", "m": "1422", "s": "1423"}, "desc": "Khu mua sắm", "exp": 0, "id": 280, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1427", "m": "1425", "s": "1426"}, "desc": "Grand Mori", "exp": 0, "id": 281, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1430", "m": "1428", "s": "1429"}, "desc": "Grand Mori", "exp": 0, "id": 282, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1433", "m": "1431", "s": "1432"}, "desc": "Grand Mori", "exp": 0, "id": 283, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1436", "m": "1434", "s": "1435"}, "desc": "Grand Mori", "exp": 0, "id": 284, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1439", "m": "1437", "s": "1438"}, "desc": "Ánh sáng kim cương", "exp": 0, "id": 285, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1442", "m": "1440", "s": "1441"}, "desc": "Ánh sáng kim cương", "exp": 0, "id": 286, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1445", "m": "1443", "s": "1444"}, "desc": "Ánh sáng kim cương", "exp": 0, "id": 287, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1448", "m": "1446", "s": "1447"}, "desc": "Ánh sáng kim cương", "exp": 0, "id": 288, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1451", "m": "1449", "s": "1450"}, "desc": "Bài ca lao động", "exp": 0, "id": 293, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1454", "m": "1452", "s": "1453"}, "desc": "Bài ca lao động", "exp": 0, "id": 294, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1457", "m": "1455", "s": "1456"}, "desc": "Bài ca lao động", "exp": 0, "id": 295, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1460", "m": "1458", "s": "1459"}, "desc": "Bài ca lao động", "exp": 0, "id": 296, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1463", "m": "1461", "s": "1462"}, "desc": "DreamWorks Bear", "exp": 0, "id": 297, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1466", "m": "1464", "s": "1465"}, "desc": "DreamWorks Bear", "exp": 0, "id": 298, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1469", "m": "1467", "s": "1468"}, "desc": "DreamWorks Bear", "exp": 0, "id": 299, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1472", "m": "1470", "s": "1471"}, "desc": "DreamWorks Bear", "exp": 0, "id": 300, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1475", "m": "1473", "s": "1474"}, "desc": "Qzone", "exp": 0, "id": 301, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1478", "m": "1476", "s": "1477"}, "desc": "Qzone", "exp": 0, "id": 302, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1481", "m": "1479", "s": "1480"}, "desc": "Qzone", "exp": 0, "id": 303, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1484", "m": "1482", "s": "1483"}, "desc": "Qzone", "exp": 0, "id": 304, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1487", "m": "1485", "s": "1486"}, "desc": "Thiên đường", "exp": 0, "id": 305, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1490", "m": "1488", "s": "1489"}, "desc": "Thiên đường", "exp": 0, "id": 306, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1493", "m": "1491", "s": "1492"}, "desc": "Thiên đường", "exp": 0, "id": 307, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1496", "m": "1494", "s": "1495"}, "desc": "Thiên đường", "exp": 0, "id": 308, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1499", "m": "1497", "s": "1498"}, "desc": "Gói 3366", "exp": 0, "id": 309, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1502", "m": "1500", "s": "1501"}, "desc": "Gói 3366", "exp": 0, "id": 310, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1505", "m": "1503", "s": "1504"}, "desc": "Gói 3366", "exp": 0, "id": 311, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1508", "m": "1506", "s": "1507"}, "desc": "Gói 3366", "exp": 0, "id": 312, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1892", "m": "1890", "s": "1891"}, "desc": "Cam", "exp": 0, "id": 313, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1895", "m": "1893", "s": "1894"}, "desc": "Cam", "exp": 0, "id": 314, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1898", "m": "1896", "s": "1897"}, "desc": "Cam", "exp": 0, "id": 315, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1901", "m": "1899", "s": "1900"}, "desc": "Cam", "exp": 0, "id": 316, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3448", "m": "3446", "s": "3447"}, "desc": "Super QQ", "exp": 0, "id": 321, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3451", "m": "3449", "s": "3450"}, "desc": "Super QQ", "exp": 0, "id": 322, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3454", "m": "3452", "s": "3453"}, "desc": "Super QQ", "exp": 0, "id": 323, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3457", "m": "3455", "s": "3456"}, "desc": "Super QQ", "exp": 0, "id": 324, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3574", "m": "3572", "s": "3573"}, "desc": "Tuổi thơ", "exp": 0, "id": 325, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3577", "m": "3575", "s": "3576"}, "desc": "Tuổi thơ", "exp": 0, "id": 326, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3580", "m": "3578", "s": "3579"}, "desc": "Tuổi thơ", "exp": 0, "id": 327, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3583", "m": "3581", "s": "3582"}, "desc": "Tuổi thơ", "exp": 0, "id": 328, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3662", "m": "3660", "s": "3661"}, "desc": "Sao băng", "exp": 0, "id": 329, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3665", "m": "3663", "s": "3664"}, "desc": "Sao băng", "exp": 0, "id": 330, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3668", "m": "3666", "s": "3667"}, "desc": "Sao băng", "exp": 0, "id": 331, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3671", "m": "3669", "s": "3670"}, "desc": "Sao băng", "exp": 0, "id": 332, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3698", "m": "3696", "s": "3697"}, "desc": "Nhà thú", "exp": 0, "id": 333, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3701", "m": "3699", "s": "3700"}, "desc": "Nhà thú", "exp": 0, "id": 334, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3704", "m": "3702", "s": "3703"}, "desc": "Nhà thú", "exp": 0, "id": 335, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3707", "m": "3705", "s": "3706"}, "desc": "Nhà thú", "exp": 0, "id": 336, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4353", "m": "4351", "s": "4352"}, "desc": "soso", "exp": 0, "id": 337, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4356", "m": "4354", "s": "4355"}, "desc": "soso", "exp": 0, "id": 338, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4359", "m": "4357", "s": "4358"}, "desc": "soso", "exp": 0, "id": 339, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4362", "m": "4360", "s": "4361"}, "desc": "soso", "exp": 0, "id": 340, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4623", "m": "4621", "s": "4622"}, "desc": "Khu nghỉ mát", "exp": 0, "id": 341, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4626", "m": "4624", "s": "4625"}, "desc": "Khu nghỉ mát", "exp": 0, "id": 342, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4629", "m": "4627", "s": "4628"}, "desc": "Khu nghỉ mát", "exp": 0, "id": 343, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4632", "m": "4630", "s": "4631"}, "desc": "Khu nghỉ mát", "exp": 0, "id": 344, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1511", "m": "1509", "s": "1510"}, "desc": "Cỏ mùa xuân", "exp": 0, "id": 501, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1514", "m": "1512", "s": "1513"}, "desc": "Cỏ mùa xuân", "exp": 0, "id": 502, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1517", "m": "1515", "s": "1516"}, "desc": "Cỏ mùa xuân", "exp": 0, "id": 503, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1520", "m": "1518", "s": "1519"}, "desc": "Cỏ mùa xuân", "exp": 0, "id": 504, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1523", "m": "1521", "s": "1522"}, "desc": "Hoa mỹ sắc", "exp": 0, "id": 505, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1526", "m": "1524", "s": "1525"}, "desc": "Hoa mỹ sắc", "exp": 0, "id": 506, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1529", "m": "1527", "s": "1528"}, "desc": "Hoa mỹ sắc", "exp": 0, "id": 507, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1532", "m": "1530", "s": "1531"}, "desc": "Hoa mỹ sắc", "exp": 0, "id": 508, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "1535", "m": "1533", "s": "1534"}, "desc": "Tàu ngầm", "exp": 600, "id": 509, "level": 0, "name": "Nền", "price": 30000, "type": 1, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "1538", "m": "1536", "s": "1537"}, "desc": "Tàu ngầm", "exp": 500, "id": 510, "level": 0, "name": "Nhà", "price": 25000, "type": 2, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1541", "m": "1539", "s": "1540"}, "desc": "Tàu ngầm", "exp": 300, "id": 511, "level": 0, "name": "Hàng rào", "price": 15000, "type": 3, "valid": 16070400},
			{"FBPrice": 35, "YFBPrice": 28, "asset_id": {"b": "1544", "m": "1542", "s": "1543"}, "desc": "Tàu ngầm", "exp": 260, "id": 512, "level": 0, "name": "Nhà chó", "price": 13000, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1547", "m": "1545", "s": "1546"}, "desc": "Cây phép thuật", "exp": 0, "id": 513, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1550", "m": "1548", "s": "1549"}, "desc": "Cây phép thuật", "exp": 0, "id": 514, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1553", "m": "1551", "s": "1552"}, "desc": "Cây phép thuật", "exp": 0, "id": 515, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1556", "m": "1554", "s": "1555"}, "desc": "Cây phép thuật", "exp": 0, "id": 516, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1559", "m": "1557", "s": "1558"}, "desc": "Khu vườn vui nhộn", "exp": 96, "id": 517, "level": 0, "name": "Nền", "price": 24000, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1562", "m": "1560", "s": "1561"}, "desc": "Khu vườn vui nhộn", "exp": 68, "id": 518, "level": 0, "name": "Nhà", "price": 17000, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1565", "m": "1563", "s": "1564"}, "desc": "Khu vườn vui nhộn", "exp": 40, "id": 519, "level": 0, "name": "Hàng rào", "price": 10000, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1568", "m": "1566", "s": "1567"}, "desc": "Khu vườn vui nhộn", "exp": 35, "id": 520, "level": 0, "name": "Nhà chó", "price": 8800, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1571", "m": "1569", "s": "1570"}, "desc": "Công viên cổ tích", "exp": 0, "id": 521, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1574", "m": "1572", "s": "1573"}, "desc": "Công viên cổ tích", "exp": 0, "id": 522, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1577", "m": "1575", "s": "1576"}, "desc": "Công viên cổ tích", "exp": 0, "id": 523, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1580", "m": "1578", "s": "1579"}, "desc": "Công viên cổ tích", "exp": 0, "id": 524, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1583", "m": "1581", "s": "1582"}, "desc": "Âm lịch", "exp": 0, "id": 525, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1586", "m": "1584", "s": "1585"}, "desc": "Âm lịch", "exp": 0, "id": 526, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1589", "m": "1587", "s": "1588"}, "desc": "Âm lịch", "exp": 0, "id": 527, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1592", "m": "1590", "s": "1591"}, "desc": "Âm lịch", "exp": 0, "id": 528, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1595", "m": "1593", "s": "1594"}, "desc": "Đam mê bóng đá", "exp": 0, "id": 529, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1598", "m": "1596", "s": "1597"}, "desc": "Đam mê bóng đá", "exp": 0, "id": 530, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1601", "m": "1599", "s": "1600"}, "desc": "Đam mê bóng đá", "exp": 0, "id": 531, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1604", "m": "1602", "s": "1603"}, "desc": "Đam mê bóng đá", "exp": 0, "id": 532, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1607", "m": "1605", "s": "1606"}, "desc": "Thuyền rồng", "exp": 120, "id": 533, "level": 0, "name": "Nền", "price": 30000, "type": 1, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1610", "m": "1608", "s": "1609"}, "desc": "Thuyền rồng", "exp": 72, "id": 534, "level": 0, "name": "Nhà", "price": 18000, "type": 2, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1613", "m": "1611", "s": "1612"}, "desc": "Thuyền rồng", "exp": 36, "id": 535, "level": 0, "name": "Hàng rào", "price": 9000, "type": 3, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1616", "m": "1614", "s": "1615"}, "desc": "Thuyền rồng", "exp": 24, "id": 536, "level": 0, "name": "Nhà chó", "price": 6000, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1619", "m": "1617", "s": "1618"}, "desc": "Brazil", "exp": 0, "id": 537, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1622", "m": "1620", "s": "1621"}, "desc": "Brazil", "exp": 0, "id": 538, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1625", "m": "1623", "s": "1624"}, "desc": "Brazil", "exp": 0, "id": 539, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1628", "m": "1626", "s": "1627"}, "desc": "Brazil", "exp": 0, "id": 540, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1631", "m": "1629", "s": "1630"}, "desc": "Trang phục", "exp": 0, "id": 541, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1634", "m": "1632", "s": "1633"}, "desc": "Trang phục", "exp": 0, "id": 542, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1637", "m": "1635", "s": "1636"}, "desc": "Trang phục", "exp": 0, "id": 543, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1640", "m": "1638", "s": "1639"}, "desc": "Trang phục", "exp": 0, "id": 544, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "1643", "m": "1641", "s": "1642"}, "desc": "Thung lũng", "exp": 346, "id": 545, "level": 0, "name": "Nền", "price": 16888, "type": 1, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "1646", "m": "1644", "s": "1645"}, "desc": "Thung lũng", "exp": 240, "id": 546, "level": 0, "name": "Nhà", "price": 11888, "type": 2, "valid": 16070400},
			{"FBPrice": 28, "YFBPrice": 22, "asset_id": {"b": "1649", "m": "1647", "s": "1648"}, "desc": "Thung lũng", "exp": 144, "id": 547, "level": 0, "name": "Hàng rào", "price": 7188, "type": 3, "valid": 16070400},
			{"FBPrice": 22, "YFBPrice": 18, "asset_id": {"b": "1652", "m": "1650", "s": "1651"}, "desc": "Thung lũng", "exp": 115, "id": 548, "level": 0, "name": "Nhà chó", "price": 5888, "type": 4, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "1655", "m": "1653", "s": "1654"}, "desc": "Bóng đá", "exp": 400, "id": 549, "level": 0, "name": "Nền", "price": 60000, "type": 1, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "1658", "m": "1656", "s": "1657"}, "desc": "Bóng đá", "exp": 300, "id": 550, "level": 0, "name": "Nhà", "price": 46000, "type": 2, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1661", "m": "1659", "s": "1660"}, "desc": "Bóng đá", "exp": 200, "id": 551, "level": 0, "name": "Hàng rào", "price": 30000, "type": 3, "valid": 16070400},
			{"FBPrice": 26, "YFBPrice": 20, "asset_id": {"b": "1664", "m": "1662", "s": "1663"}, "desc": "Bóng đá", "exp": 130, "id": 552, "level": 0, "name": "Nhà chó", "price": 20000, "type": 4, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "1667", "m": "1665", "s": "1666"}, "desc": " Shacheng", "exp": 300, "id": 553, "level": 0, "name": "Nền", "price": 49999, "type": 1, "valid": 16070400},
			{"FBPrice": 44, "YFBPrice": 35, "asset_id": {"b": "1670", "m": "1668", "s": "1669"}, "desc": " Shacheng", "exp": 220, "id": 554, "level": 0, "name": "Nhà", "price": 35999, "type": 2, "valid": 16070400},
			{"FBPrice": 24, "YFBPrice": 20, "asset_id": {"b": "1673", "m": "1671", "s": "1672"}, "desc": " Shacheng", "exp": 120, "id": 555, "level": 0, "name": "Hàng rào", "price": 19999, "type": 3, "valid": 16070400},
			{"FBPrice": 20, "YFBPrice": 16, "asset_id": {"b": "1676", "m": "1674", "s": "1675"}, "desc": " Shacheng", "exp": 100, "id": 556, "level": 0, "name": "Nhà chó", "price": 15999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1679", "m": "1677", "s": "1678"}, "desc": "Ao sen", "exp": 0, "id": 557, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1682", "m": "1680", "s": "1681"}, "desc": "Ao sen", "exp": 0, "id": 558, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1685", "m": "1683", "s": "1684"}, "desc": "Ao sen", "exp": 0, "id": 559, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1688", "m": "1686", "s": "1687"}, "desc": "Ao sen", "exp": 0, "id": 560, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 120, "YFBPrice": 96, "asset_id": {"b": "1930", "m": "1928", "s": "1929"}, "desc": "Tre", "exp": 600, "id": 561, "level": 0, "name": "Nền", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 88, "YFBPrice": 70, "asset_id": {"b": "1933", "m": "1931", "s": "1932"}, "desc": "Tre", "exp": 440, "id": 562, "level": 0, "name": "Nhà", "price": 71999, "type": 2, "valid": 16070400},
			{"FBPrice": 48, "YFBPrice": 40, "asset_id": {"b": "1936", "m": "1934", "s": "1935"}, "desc": "Tre", "exp": 240, "id": 563, "level": 0, "name": "Hàng rào", "price": 39999, "type": 3, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "1939", "m": "1937", "s": "1938"}, "desc": "Tre", "exp": 200, "id": 564, "level": 0, "name": "Nhà chó", "price": 31999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1906", "m": "1904", "s": "1905"}, "desc": "Trí tuệ", "exp": 0, "id": 565, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1909", "m": "1907", "s": "1908"}, "desc": "Trí tuệ", "exp": 0, "id": 566, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1912", "m": "1910", "s": "1911"}, "desc": "Trí tuệ", "exp": 0, "id": 567, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1915", "m": "1913", "s": "1914"}, "desc": "Trí tuệ", "exp": 0, "id": 568, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1918", "m": "1916", "s": "1917"}, "desc": "Cà phê", "exp": 0, "id": 569, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1921", "m": "1919", "s": "1920"}, "desc": "Cà phê", "exp": 0, "id": 570, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1924", "m": "1922", "s": "1923"}, "desc": "Cà phê", "exp": 0, "id": 571, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "1927", "m": "1925", "s": "1926"}, "desc": "Cà phê", "exp": 0, "id": 572, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 72, "YFBPrice": 58, "asset_id": {"b": "2009", "m": "2007", "s": "2008"}, "desc": "Hành tinh bí ẩn", "exp": 360, "id": 573, "level": 0, "name": "Nền", "price": 59999, "type": 1, "valid": 16070400},
			{"FBPrice": 53, "YFBPrice": 42, "asset_id": {"b": "2012", "m": "2010", "s": "2011"}, "desc": "Hành tinh bí ẩn", "exp": 264, "id": 574, "level": 0, "name": "Nhà", "price": 43199, "type": 2, "valid": 16070400},
			{"FBPrice": 29, "YFBPrice": 23, "asset_id": {"b": "2015", "m": "2013", "s": "2014"}, "desc": "Hành tinh bí ẩn", "exp": 144, "id": 575, "level": 0, "name": "Hàng rào", "price": 23999, "type": 3, "valid": 16070400},
			{"FBPrice": 24, "YFBPrice": 20, "asset_id": {"b": "2018", "m": "2016", "s": "2017"}, "desc": "Hành tinh bí ẩn", "exp": 120, "id": 576, "level": 0, "name": "Nhà chó", "price": 19199, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2057", "m": "2055", "s": "2056"}, "desc": "Sao số phận", "exp": 0, "id": 577, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2060", "m": "2058", "s": "2059"}, "desc": "Sao số phận", "exp": 0, "id": 578, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2063", "m": "2061", "s": "2062"}, "desc": "Sao số phận", "exp": 0, "id": 579, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2066", "m": "2064", "s": "2065"}, "desc": "Sao số phận", "exp": 0, "id": 580, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "2072", "m": "2070", "s": "2071"}, "desc": "Tình yêu", "exp": 500, "id": 581, "level": 0, "name": "Nền", "price": 79999, "type": 1, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "2075", "m": "2073", "s": "2074"}, "desc": "Tình yêu", "exp": 400, "id": 582, "level": 0, "name": "Nhà", "price": 63999, "type": 2, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "2078", "m": "2076", "s": "2077"}, "desc": "Tình yêu", "exp": 350, "id": 583, "level": 0, "name": "Hàng rào", "price": 55999, "type": 3, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "2081", "m": "2079", "s": "2080"}, "desc": "Tình yêu", "exp": 300, "id": 584, "level": 0, "name": "Nhà chó", "price": 47999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2084", "m": "2082", "s": "2083"}, "desc": "Cuộc sống", "exp": 0, "id": 585, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2087", "m": "2085", "s": "2086"}, "desc": "Cuộc sống", "exp": 0, "id": 586, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2090", "m": "2088", "s": "2089"}, "desc": "Cuộc sống", "exp": 0, "id": 587, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2093", "m": "2091", "s": "2092"}, "desc": "Cuộc sống", "exp": 0, "id": 588, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2148", "m": "2146", "s": "2147"}, "desc": "Châu Phi", "exp": 0, "id": 589, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2151", "m": "2149", "s": "2150"}, "desc": "Châu Phi", "exp": 0, "id": 590, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2154", "m": "2152", "s": "2153"}, "desc": "Châu Phi", "exp": 0, "id": 591, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2157", "m": "2155", "s": "2156"}, "desc": "Châu Phi", "exp": 0, "id": 592, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2160", "m": "2158", "s": "2159"}, "desc": "Ấn Độ", "exp": 0, "id": 593, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2163", "m": "2161", "s": "2162"}, "desc": "Ấn Độ", "exp": 0, "id": 594, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2166", "m": "2164", "s": "2165"}, "desc": "Ấn Độ", "exp": 0, "id": 595, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2169", "m": "2167", "s": "2168"}, "desc": "Ấn Độ", "exp": 0, "id": 596, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 124, "YFBPrice": 99, "asset_id": {"b": "2172", "m": "2170", "s": "2171"}, "desc": "Công viên", "exp": 625, "id": 597, "level": 0, "name": "Nền", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 110, "YFBPrice": 88, "asset_id": {"b": "2175", "m": "2173", "s": "2174"}, "desc": "Công viên", "exp": 550, "id": 598, "level": 0, "name": "Nhà", "price": 87999, "type": 2, "valid": 16070400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "2178", "m": "2176", "s": "2177"}, "desc": "Công viên", "exp": 450, "id": 599, "level": 0, "name": "Hàng rào", "price": 71999, "type": 3, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "2181", "m": "2179", "s": "2180"}, "desc": "Công viên", "exp": 350, "id": 600, "level": 0, "name": "Nhà chó", "price": 55999, "type": 4, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "2590", "m": "2588", "s": "2589"}, "desc": "Cheo leo", "exp": 400, "id": 601, "level": 0, "name": "Nền", "price": 63999, "type": 1, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "2593", "m": "2591", "s": "2592"}, "desc": "Cheo leo", "exp": 350, "id": 602, "level": 0, "name": "Nhà", "price": 55999, "type": 2, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "2596", "m": "2594", "s": "2595"}, "desc": "Cheo leo", "exp": 300, "id": 603, "level": 0, "name": "Hàng rào", "price": 47999, "type": 3, "valid": 16070400},
			{"FBPrice": 50, "YFBPrice": 40, "asset_id": {"b": "2599", "m": "2597", "s": "2598"}, "desc": "Cheo leo", "exp": 250, "id": 604, "level": 0, "name": "Nhà chó", "price": 39999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2602", "m": "2600", "s": "2601"}, "desc": "Bắc bộ", "exp": 0, "id": 605, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2605", "m": "2603", "s": "2604"}, "desc": "Bắc bộ", "exp": 0, "id": 606, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2608", "m": "2606", "s": "2607"}, "desc": "Bắc bộ", "exp": 0, "id": 607, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2611", "m": "2609", "s": "2610"}, "desc": "Bắc bộ", "exp": 0, "id": 608, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2743", "m": "2741", "s": "2742"}, "desc": "Thành phố hiện đại", "exp": 0, "id": 609, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2746", "m": "2744", "s": "2745"}, "desc": "Thành phố hiện đại", "exp": 0, "id": 610, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2749", "m": "2747", "s": "2748"}, "desc": "Thành phố hiện đại", "exp": 0, "id": 611, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2752", "m": "2750", "s": "2751"}, "desc": "Thành phố hiện đại", "exp": 0, "id": 612, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2755", "m": "2753", "s": "2754"}, "desc": "Bình yên", "exp": 0, "id": 613, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2758", "m": "2756", "s": "2757"}, "desc": "Bình yên", "exp": 0, "id": 614, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2761", "m": "2759", "s": "2760"}, "desc": "Bình yên", "exp": 0, "id": 615, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2764", "m": "2762", "s": "2763"}, "desc": "Bình yên", "exp": 0, "id": 616, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2767", "m": "2765", "s": "2766"}, "desc": "Trăng Trung thu", "exp": 0, "id": 617, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2770", "m": "2768", "s": "2769"}, "desc": "Trăng Trung thu", "exp": 0, "id": 618, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2773", "m": "2771", "s": "2772"}, "desc": "Trăng Trung thu", "exp": 0, "id": 619, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2776", "m": "2774", "s": "2775"}, "desc": "Trăng Trung thu", "exp": 0, "id": 620, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2823", "m": "2821", "s": "2822"}, "desc": "Quốc Khánh", "exp": 0, "id": 621, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2826", "m": "2824", "s": "2825"}, "desc": "Quốc Khánh", "exp": 0, "id": 622, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2829", "m": "2827", "s": "2828"}, "desc": "Quốc Khánh", "exp": 0, "id": 623, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2832", "m": "2830", "s": "2831"}, "desc": "Quốc Khánh", "exp": 0, "id": 624, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2791", "m": "2789", "s": "2790"}, "desc": "Ba chân", "exp": 0, "id": 625, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2794", "m": "2792", "s": "2793"}, "desc": "Ba chân", "exp": 0, "id": 626, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2797", "m": "2795", "s": "2796"}, "desc": "Ba chân", "exp": 0, "id": 627, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "2800", "m": "2798", "s": "2799"}, "desc": "Ba chân", "exp": 0, "id": 628, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "2811", "m": "2809", "s": "2810"}, "desc": "Ao hồ", "exp": 420, "id": 629, "level": 0, "name": "Nền", "price": 82899, "type": 1, "valid": 16070400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "2814", "m": "2812", "s": "2813"}, "desc": "Ao hồ", "exp": 320, "id": 630, "level": 0, "name": "Nhà", "price": 57599, "type": 2, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "2817", "m": "2815", "s": "2816"}, "desc": "Ao hồ", "exp": 220, "id": 631, "level": 0, "name": "Hàng rào", "price": 34599, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "2820", "m": "2818", "s": "2819"}, "desc": "Ao hồ", "exp": 150, "id": 632, "level": 0, "name": "Nhà chó", "price": 27688, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3352", "m": "3350", "s": "3351"}, "desc": "Mông Cổ", "exp": 0, "id": 633, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3355", "m": "3353", "s": "3354"}, "desc": "Mông Cổ", "exp": 0, "id": 634, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3358", "m": "3356", "s": "3357"}, "desc": "Mông Cổ", "exp": 0, "id": 635, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3361", "m": "3359", "s": "3360"}, "desc": "Mông Cổ", "exp": 0, "id": 636, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3465", "m": "3463", "s": "3464"}, "desc": "Trung tâm", "exp": 0, "id": 637, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3468", "m": "3466", "s": "3467"}, "desc": "Trung tâm", "exp": 0, "id": 638, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3471", "m": "3469", "s": "3470"}, "desc": "Trung tâm", "exp": 0, "id": 639, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3474", "m": "3472", "s": "3473"}, "desc": "Trung tâm", "exp": 0, "id": 640, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3499", "m": "3497", "s": "3498"}, "desc": "Đảo", "exp": 0, "id": 641, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3504", "m": "3502", "s": "3503"}, "desc": "Đảo", "exp": 0, "id": 642, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3508", "m": "3506", "s": "3507"}, "desc": "Đảo", "exp": 0, "id": 643, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3511", "m": "3509", "s": "3510"}, "desc": "Đảo", "exp": 0, "id": 644, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3529", "m": "3527", "s": "3528"}, "desc": "Tian Xuefeng", "exp": 0, "id": 645, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3532", "m": "3530", "s": "3531"}, "desc": "Tian Xuefeng", "exp": 0, "id": 646, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3535", "m": "3533", "s": "3534"}, "desc": "Tian Xuefeng", "exp": 0, "id": 647, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3538", "m": "3536", "s": "3537"}, "desc": "Tian Xuefeng", "exp": 0, "id": 648, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3586", "m": "3584", "s": "3585"}, "desc": "Double", "exp": 0, "id": 649, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3589", "m": "3587", "s": "3588"}, "desc": "Double", "exp": 0, "id": 650, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3592", "m": "3590", "s": "3591"}, "desc": "Double", "exp": 0, "id": 651, "level": 0, "name": "Hàng rào ", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3595", "m": "3593", "s": "3594"}, "desc": "Double", "exp": 0, "id": 652, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3647", "m": "3645", "s": "3646"}, "desc": "Rừng mây", "exp": 0, "id": 653, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3652", "m": "3650", "s": "3651"}, "desc": "Rừng mây", "exp": 0, "id": 654, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3656", "m": "3654", "s": "3655"}, "desc": "Rừng mây", "exp": 0, "id": 655, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3659", "m": "3657", "s": "3658"}, "desc": "Rừng mây", "exp": 0, "id": 656, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "3710", "m": "3708", "s": "3709"}, "desc": "Đêm ma quỷ", "exp": 420, "id": 657, "level": 0, "name": "Nền", "price": 82899, "type": 1, "valid": 16070400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "3713", "m": "3711", "s": "3712"}, "desc": "Đêm ma quỷ", "exp": 320, "id": 658, "level": 0, "name": "Nhà", "price": 57599, "type": 2, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "3716", "m": "3714", "s": "3715"}, "desc": "Đêm ma quỷ", "exp": 220, "id": 659, "level": 0, "name": "Hàng rào", "price": 34599, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "3719", "m": "3717", "s": "3718"}, "desc": "Đêm ma quỷ", "exp": 150, "id": 660, "level": 0, "name": "Nhà chó", "price": 27688, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3734", "m": "3732", "s": "3733"}, "desc": "Halloween", "exp": 0, "id": 661, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3737", "m": "3735", "s": "3736"}, "desc": "Halloween", "exp": 0, "id": 662, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3740", "m": "3738", "s": "3739"}, "desc": "Halloween", "exp": 0, "id": 663, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3743", "m": "3741", "s": "3742"}, "desc": "Halloween", "exp": 150, "id": 664, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3746", "m": "3744", "s": "3745"}, "desc": "Đêm Halloween", "exp": 0, "id": 665, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3749", "m": "3747", "s": "3748"}, "desc": "Đêm Halloween", "exp": 0, "id": 666, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3752", "m": "3750", "s": "3751"}, "desc": "Đêm Halloween", "exp": 0, "id": 667, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3755", "m": "3753", "s": "3754"}, "desc": "Đêm Halloween", "exp": 0, "id": 668, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3862", "m": "3860", "s": "3861"}, "desc": "Đa sắc màu", "exp": 0, "id": 669, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3865", "m": "3863", "s": "3864"}, "desc": "Đa sắc màu", "exp": 0, "id": 670, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3868", "m": "3866", "s": "3867"}, "desc": "Đa sắc màu", "exp": 0, "id": 671, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3871", "m": "3869", "s": "3870"}, "desc": "Đa sắc màu", "exp": 0, "id": 672, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3874", "m": "3872", "s": "3873"}, "desc": "Vườn  hoa hồng", "exp": 0, "id": 673, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3877", "m": "3875", "s": "3876"}, "desc": "Vườn  hoa hồng", "exp": 0, "id": 674, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3880", "m": "3878", "s": "3879"}, "desc": "Vườn  hoa hồng", "exp": 0, "id": 675, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3883", "m": "3881", "s": "3882"}, "desc": "Vườn  hoa hồng", "exp": 0, "id": 676, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 124, "YFBPrice": 99, "asset_id": {"b": "3886", "m": "3884", "s": "3885"}, "desc": "Cảm giác", "exp": 625, "id": 677, "level": 0, "name": "Nền", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 110, "YFBPrice": 88, "asset_id": {"b": "3889", "m": "3887", "s": "3888"}, "desc": "Cảm giác", "exp": 550, "id": 678, "level": 0, "name": "Nhà", "price": 87999, "type": 2, "valid": 16070400},
			{"FBPrice": 90, "YFBPrice": 72, "asset_id": {"b": "3892", "m": "3890", "s": "3891"}, "desc": "Cảm giác", "exp": 450, "id": 679, "level": 0, "name": "Hàng rào", "price": 71999, "type": 3, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "3897", "m": "3895", "s": "3896"}, "desc": "Cảm giác", "exp": 350, "id": 680, "level": 0, "name": "Nhà chó", "price": 55999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "3997", "m": "3995", "s": "3996"}, "desc": "Thành phố Cầu vồng", "exp": 0, "id": 681, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4000", "m": "3998", "s": "3999"}, "desc": "Thành phố Cầu vồng", "exp": 0, "id": 682, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4003", "m": "4001", "s": "4002"}, "desc": "Thành phố Cầu vồng", "exp": 0, "id": 683, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4006", "m": "4004", "s": "4005"}, "desc": "Thành phố Cầu vồng", "exp": 0, "id": 684, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 100, "YFBPrice": 80, "asset_id": {"b": "4009", "m": "4007", "s": "4008"}, "desc": "Bí ẩn Maya", "exp": 500, "id": 685, "level": 0, "name": "Nền", "price": 79999, "type": 1, "valid": 16070400},
			{"FBPrice": 80, "YFBPrice": 64, "asset_id": {"b": "4012", "m": "4010", "s": "4011"}, "desc": "Bí ẩn Maya", "exp": 400, "id": 686, "level": 0, "name": "Nhà", "price": 63999, "type": 2, "valid": 16070400},
			{"FBPrice": 70, "YFBPrice": 56, "asset_id": {"b": "4015", "m": "4013", "s": "4014"}, "desc": "Bí ẩn Maya", "exp": 350, "id": 687, "level": 0, "name": "Hàng rào", "price": 55999, "type": 3, "valid": 16070400},
			{"FBPrice": 60, "YFBPrice": 48, "asset_id": {"b": "4019", "m": "4016", "s": "4017"}, "desc": "Bí ẩn Maya", "exp": 300, "id": 688, "level": 0, "name": "Nhà chó", "price": 47999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4050", "m": "4048", "s": "4049"}, "desc": "Thành phố Khóa", "exp": 0, "id": 689, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4053", "m": "4051", "s": "4052"}, "desc": "Thành phố Khóa", "exp": 0, "id": 690, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4056", "m": "4054", "s": "4055"}, "desc": "Thành phố Khóa", "exp": 0, "id": 691, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4059", "m": "4057", "s": "4058"}, "desc": "Thành phố Khóa", "exp": 0, "id": 692, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4062", "m": "4060", "s": "4061"}, "desc": "Thành phố TV", "exp": 0, "id": 693, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4065", "m": "4063", "s": "4064"}, "desc": "Thành phố TV", "exp": 0, "id": 694, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4068", "m": "4066", "s": "4067"}, "desc": "Thành phố TV", "exp": 0, "id": 695, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4071", "m": "4069", "s": "4070"}, "desc": "Thành phố TV", "exp": 0, "id": 696, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4135", "m": "4133", "s": "4134"}, "desc": "Phong cách mới", "exp": 0, "id": 697, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4138", "m": "4136", "s": "4137"}, "desc": "Phong cách mới", "exp": 0, "id": 698, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4141", "m": "4139", "s": "4140"}, "desc": "Phong cách mới", "exp": 0, "id": 699, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4144", "m": "4142", "s": "4143"}, "desc": "Phong cách mới", "exp": 0, "id": 700, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 85, "YFBPrice": 68, "asset_id": {"b": "4165", "m": "4163", "s": "4164"}, "desc": "Nhà vải", "exp": 420, "id": 701, "level": 0, "name": "Nền", "price": 82899, "type": 1, "valid": 16070400},
			{"FBPrice": 65, "YFBPrice": 52, "asset_id": {"b": "4168", "m": "4166", "s": "4167"}, "desc": "Nhà vải", "exp": 320, "id": 702, "level": 0, "name": "Nhà", "price": 57599, "type": 2, "valid": 16070400},
			{"FBPrice": 45, "YFBPrice": 36, "asset_id": {"b": "4171", "m": "4169", "s": "4170"}, "desc": "Nhà vải", "exp": 220, "id": 703, "level": 0, "name": "Hàng rào", "price": 34599, "type": 3, "valid": 16070400},
			{"FBPrice": 30, "YFBPrice": 24, "asset_id": {"b": "4174", "m": "4172", "s": "4173"}, "desc": "Nhà vải", "exp": 150, "id": 704, "level": 0, "name": "Nhà chó", "price": 27688, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4177", "m": "4175", "s": "4176"}, "desc": "Xứ sở thần tiên", "exp": 0, "id": 705, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4180", "m": "4178", "s": "4179"}, "desc": "Xứ sở thần tiên", "exp": 0, "id": 706, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4183", "m": "4181", "s": "4182"}, "desc": "Xứ sở thần tiên", "exp": 0, "id": 707, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4186", "m": "4184", "s": "4185"}, "desc": "Xứ sở thần tiên", "exp": 0, "id": 708, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4214", "m": "4212", "s": "4213"}, "desc": "Tảo lộ", "exp": 0, "id": 709, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4217", "m": "4215", "s": "4216"}, "desc": "Tảo lộ", "exp": 0, "id": 710, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4220", "m": "4218", "s": "4219"}, "desc": "Tảo lộ", "exp": 0, "id": 711, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4223", "m": "4221", "s": "4222"}, "desc": "Tảo lộ", "exp": 0, "id": 712, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4237", "m": "4235", "s": "4236"}, "desc": "Ngôi nhà phép thuật", "exp": 0, "id": 713, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4240", "m": "4238", "s": "4239"}, "desc": "Ngôi nhà phép thuật", "exp": 0, "id": 714, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4243", "m": "4241", "s": "4242"}, "desc": "Ngôi nhà phép thuật", "exp": 0, "id": 715, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4246", "m": "4244", "s": "4245"}, "desc": "Ngôi nhà phép thuật", "exp": 0, "id": 716, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4277", "m": "4275", "s": "4276"}, "desc": "Lễ tạ ơn", "exp": 0, "id": 717, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4280", "m": "4278", "s": "4279"}, "desc": "Lễ tạ ơn", "exp": 0, "id": 718, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4289", "m": "4287", "s": "4288"}, "desc": "Lễ tạ ơn", "exp": 0, "id": 719, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4292", "m": "4290", "s": "4291"}, "desc": "Lễ tạ ơn", "exp": 0, "id": 720, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4365", "m": "4363", "s": "4364"}, "desc": "Thời gian", "exp": 0, "id": 721, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4368", "m": "4366", "s": "4367"}, "desc": "Thời gian", "exp": 0, "id": 722, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4371", "m": "4369", "s": "4370"}, "desc": "Thời gian", "exp": 0, "id": 723, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4374", "m": "4372", "s": "4373"}, "desc": "Thời gian", "exp": 0, "id": 724, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4377", "m": "4375", "s": "4376"}, "desc": "Cầu", "exp": 0, "id": 725, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4380", "m": "4378", "s": "4379"}, "desc": "Cầu", "exp": 0, "id": 726, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4383", "m": "4381", "s": "4382"}, "desc": "Cầu", "exp": 0, "id": 727, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4386", "m": "4384", "s": "4385"}, "desc": "Cầu", "exp": 0, "id": 728, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4456", "m": "4454", "s": "4455"}, "desc": "Giáng sinh cuối", "exp": 0, "id": 729, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4459", "m": "4457", "s": "4458"}, "desc": "Giáng sinh cuối", "exp": 0, "id": 730, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4462", "m": "4460", "s": "4461"}, "desc": "Giáng sinh cuối", "exp": 0, "id": 731, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4472", "m": "4463", "s": "4466"}, "desc": "Giáng sinh cuối", "exp": 0, "id": 732, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4475", "m": "4473", "s": "4474"}, "desc": "Đêm Giáng sinh", "exp": 0, "id": 733, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4478", "m": "4476", "s": "4477"}, "desc": "Đêm Giáng sinh", "exp": 0, "id": 734, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4481", "m": "4479", "s": "4480"}, "desc": "Đêm Giáng sinh", "exp": 0, "id": 735, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4484", "m": "4482", "s": "4483"}, "desc": "Đêm Giáng sinh", "exp": 0, "id": 736, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4575", "m": "4573", "s": "4574"}, "desc": "Noel", "exp": 0, "id": 737, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4578", "m": "4576", "s": "4577"}, "desc": "Noel", "exp": 0, "id": 738, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4581", "m": "4579", "s": "4580"}, "desc": "Noel", "exp": 0, "id": 739, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4584", "m": "4582", "s": "4583"}, "desc": "Noel", "exp": 0, "id": 740, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4587", "m": "4585", "s": "4586"}, "desc": "Thị trấn thỏ", "exp": 0, "id": 741, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4590", "m": "4588", "s": "4589"}, "desc": "Thị trấn thỏ", "exp": 0, "id": 742, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4593", "m": "4591", "s": "4592"}, "desc": "Thị trấn thỏ", "exp": 0, "id": 743, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4596", "m": "4594", "s": "4595"}, "desc": "Thị trấn thỏ", "exp": 0, "id": 744, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4635", "m": "4633", "s": "4634"}, "desc": "Mừng năm mới", "exp": 0, "id": 745, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4638", "m": "4636", "s": "4637"}, "desc": "Mừng năm mới", "exp": 0, "id": 746, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4641", "m": "4639", "s": "4640"}, "desc": "Mừng năm mới", "exp": 0, "id": 747, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4644", "m": "4642", "s": "4643"}, "desc": "Mừng năm mới", "exp": 0, "id": 748, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4647", "m": "4645", "s": "4646"}, "desc": "Giao thừa", "exp": 0, "id": 749, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4650", "m": "4648", "s": "4649"}, "desc": "Giao thừa", "exp": 0, "id": 750, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4653", "m": "4651", "s": "4652"}, "desc": "Giao thừa", "exp": 0, "id": 751, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4656", "m": "4654", "s": "4655"}, "desc": "Giao thừa", "exp": 0, "id": 752, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4659", "m": "4657", "s": "4658"}, "desc": "Năm mới", "exp": 0, "id": 753, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4662", "m": "4660", "s": "4661"}, "desc": "Năm mới", "exp": 0, "id": 754, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4665", "m": "4663", "s": "4664"}, "desc": "Năm mới", "exp": 0, "id": 755, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4668", "m": "4666", "s": "4667"}, "desc": "Năm mới", "exp": 0, "id": 756, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4763", "m": "4761", "s": "4762"}, "desc": "Kỷ niệm", "exp": 0, "id": 757, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4766", "m": "4764", "s": "4765"}, "desc": "Kỷ niệm", "exp": 0, "id": 758, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4769", "m": "4767", "s": "4768"}, "desc": "Kỷ niệm", "exp": 0, "id": 759, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4772", "m": "4770", "s": "4771"}, "desc": "Kỷ niệm", "exp": 0, "id": 760, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4831", "m": "4829", "s": "4830"}, "desc": "Đêm mùa đông", "exp": 0, "id": 761, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4834", "m": "4832", "s": "4833"}, "desc": "Đêm mùa đông", "exp": 0, "id": 762, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4837", "m": "4835", "s": "4836"}, "desc": "Đêm mùa đông", "exp": 0, "id": 763, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4840", "m": "4838", "s": "4839"}, "desc": "Đêm mùa đông", "exp": 0, "id": 764, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4849", "m": "4847", "s": "4848"}, "desc": "Bàn đặt", "exp": 0, "id": 765, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4852", "m": "4850", "s": "4851"}, "desc": "Bàn đặt", "exp": 0, "id": 766, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4855", "m": "4853", "s": "4854"}, "desc": "Bàn đặt", "exp": 0, "id": 767, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "4858", "m": "4856", "s": "4857"}, "desc": "Bàn đặt", "exp": 0, "id": 768, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 120, "YFBPrice": 96, "asset_id": {"b": "4861", "m": "4859", "s": "4860"}, "desc": "Tuyết phủ", "exp": 600, "id": 769, "level": 0, "name": "Nền", "price": 99999, "type": 1, "valid": 16070400},
			{"FBPrice": 88, "YFBPrice": 70, "asset_id": {"b": "4864", "m": "4862", "s": "4863"}, "desc": "Tuyết phủ", "exp": 440, "id": 770, "level": 0, "name": "Nhà", "price": 71999, "type": 2, "valid": 16070400},
			{"FBPrice": 48, "YFBPrice": 40, "asset_id": {"b": "4867", "m": "4865", "s": "4866"}, "desc": "Tuyết phủ", "exp": 240, "id": 771, "level": 0, "name": "Hàng rào", "price": 39999, "type": 3, "valid": 16070400},
			{"FBPrice": 40, "YFBPrice": 32, "asset_id": {"b": "4870", "m": "4868", "s": "4869"}, "desc": "Tuyết phủ", "exp": 200, "id": 772, "level": 0, "name": "Nhà chó", "price": 31999, "type": 4, "valid": 16070400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5036", "m": "5034", "s": "5035"}, "desc": "Tình yêu của biển", "exp": 0, "id": 773, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5039", "m": "5037", "s": "5038"}, "desc": "Tình yêu của biển", "exp": 0, "id": 774, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5042", "m": "5040", "s": "5041"}, "desc": "Tình yêu của biển", "exp": 0, "id": 775, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5045", "m": "5043", "s": "5044"}, "desc": "Tình yêu của biển", "exp": 0, "id": 776, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5048", "m": "5046", "s": "5047"}, "desc": "Chúc xuân", "exp": 0, "id": 777, "level": 0, "name": "Nền", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5051", "m": "5049", "s": "5050"}, "desc": "Chúc xuân", "exp": 0, "id": 778, "level": 0, "name": "Nhà", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5054", "m": "5052", "s": "5053"}, "desc": "Chúc xuân", "exp": 0, "id": 779, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5057", "m": "5055", "s": "5056"}, "desc": "Chúc xuân", "exp": 0, "id": 780, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5190", "m": "5188", "s": "5189"}, "desc": "Ngọt ngào", "exp": 0, "id": 781, "level": 0, "name": "Nền", "price": 0, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5193", "m": "5191", "s": "5192"}, "desc": "Ngọt ngào", "exp": 0, "id": 782, "level": 0, "name": "Nhà", "price": 0, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5196", "m": "5194", "s": "5195"}, "desc": "Ngọt ngào", "exp": 0, "id": 783, "level": 0, "name": "Hàng rào", "price": 0, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5199", "m": "5197", "s": "5198"}, "desc": "Ngọt ngào", "exp": 0, "id": 784, "level": 0, "name": "Nhà chó", "price": 0, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5202", "m": "5200", "s": "5201"}, "desc": "The blessing of the wedding package", "exp": 0, "id": 785, "level": 0, "name": "Wedding blessing", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5205", "m": "5203", "s": "5204"}, "desc": "The blessing of the wedding package", "exp": 0, "id": 786, "level": 0, "name": "Wedding blessing", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5208", "m": "5206", "s": "5207"}, "desc": "The blessing of the wedding package", "exp": 0, "id": 787, "level": 0, "name": "Wedding chapel", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5211", "m": "5209", "s": "5210"}, "desc": "The blessing of the wedding package", "exp": 0, "id": 788, "level": 0, "name": "Wedding kennel", "price": 1, "type": 4, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5214", "m": "5212", "s": "5213"}, "desc": "Happy Lantern Festival Set", "exp": 0, "id": 789, "level": 0, "name": "Wedding kennel", "price": 1, "type": 1, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5217", "m": "5215", "s": "5216"}, "desc": "Happy Lantern Festival Set", "exp": 0, "id": 790, "level": 0, "name": "Lồng đèn", "price": 1, "type": 2, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5220", "m": "5218", "s": "5219"}, "desc": "Happy Lantern Festival Set", "exp": 0, "id": 791, "level": 0, "name": "Hàng rào", "price": 1, "type": 3, "valid": 2678400},
			{"FBPrice": 0, "YFBPrice": 0, "asset_id": {"b": "5223", "m": "5221", "s": "5222"}, "desc": "Happy Lantern Festival Set", "exp": 0, "id": 792, "level": 0, "name": "Nhà chó", "price": 1, "type": 4, "valid": 2678400}
			]}
		]]>
	</item_info>

</data>

XML;
?>