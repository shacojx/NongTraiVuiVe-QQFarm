<?php
//农场:addon_v_25.xml

$nc_addon = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<data>
	<!-- Flash Vars 杂项配置放这里 -->
	<vars>
	  <app_key>happyfarm</app_key>
	  <diyLimitYDLevel>$_QSC[diyLimitYDLevel]</diyLimitYDLevel>
	  <domian_qz>farm.qzone</domian_qz>
	  <domian_xy>farm.xiaoyou</domian_xy>
	  <friend_list_mod_qz>1000</friend_list_mod_qz>
	  <friend_list_mod_xy>1000</friend_list_mod_xy>
	  <friend_list_tips>系统繁忙，请稍后再试！</friend_list_tips>
	  <steal_mod>1000</steal_mod>
	  <filterUrl>http://qbar.qq.com/application/r/?839782</filterUrl>
	  <friendUrl>http://id.qq.com/friends/index.html#myfriends-2-1</friendUrl>
	  <steal_tips>为保证更加稳定的服务，系统正在对部分号码进行数据维护。在此时间段系统将暂停您的 “摘取”操作以保护您的数据安全。期间好友也不能摘取您的作物，其他操作正常！谢谢您的支持！</steal_tips>
	  <enter_into_mod>1000</enter_into_mod>
	  <redirect_url_qz>http://imgcache.qq.com/qzone/v5/app/errorback/error_canvas.html#appid=353</redirect_url_qz>
	  <steal_tips_other>为保证更加稳定的服务，系统正在对部分号码进行数据维护。在此号段的农场在维护期间将停止摘取以保护数据安全。期间好友也不能摘取您的作物，其他操作正常！谢谢您的支持！</steal_tips_other>
	  <useflag>11111111</useflag>
	  <trdTimeGq>2010-9-26 14:00:00</trdTimeGq>
	  <redirect_url_xy>http://app.xiaoyou.qq.com/appframe_error.html?key=happyfarm</redirect_url_xy>
	  <ShopHeadLink>Home|http://galatinhyeu.com</ShopHeadLink>
	  <usercheck>7ae3d8bfd84b1cf2226c28671b093ad9</usercheck>
	  <config_url_qz>http://farm.qzone.qq.com/cgi-bin/cgi_farm_ini_run_v2?v=8</config_url_qz>
	  <config_url_xy>http://farm.xiaoyou.qq.com/cgi-bin/cgi_farm_ini_run_v2?v=8</config_url_xy>
	  <healthModeTime>00:00 - 06:00</healthModeTime>
	  <snowslide>3</snowslide>
	  <uinMode>1</uinMode>
	  <reqYellowlevel>2</reqYellowlevel>
	  <flowerDayTips>内测期间开放给黄钻以及农场15级以上（含15级）用户，每天每人可赠送一束鲜花哦！</flowerDayTips>
	  <hmv2level>0</hmv2level>
	  <flowerYDLevel>1</flowerYDLevel>
	  <hmv2CloseTime>1261929600</hmv2CloseTime>
	  <cacheSeed>65</cacheSeed>
	  <batchStealHour>5-10</batchStealHour>
	  <qShowLevel>0</qShowLevel>
	  <restaurantConfig>{$xml}nc_farm_$verson.xml</restaurantConfig>
	  <buyToolTips>最近化肥使用量激增导致供应紧张，目前暂不能购买。</buyToolTips>
	  <mill>appid=376</mill>
	  <buyToolHour>0-24</buyToolHour>
	  <millLimitYDLevel>1</millLimitYDLevel>
	  <noFoodTips>最近狗粮原材料供应紧张，目前暂不能购买。</noFoodTips>
	  <buyTin>1</buyTin>

	  	  <NPCTip>快来领取金条树和金兔子，参与新春百万豪礼送活动！</NPCTip>
	  <NPCSpeaking>新春大喜迎兔年，农牧百万豪礼送！</NPCSpeaking>
           <NPCTip1>百万贺礼活动已正式开始，快用金条和金元宝来参与抽奖吧！</NPCTip1>
	  <NPCSpeaking1>开始抽奖了，快快来赢神马浮云吧！</NPCSpeaking1>
	  <missionThanksGivingEndTime>2010-12-08 17:00:00</missionThanksGivingEndTime>
	  <WarehouseEmpty>材料仓库空空的，赶紧去好友的农场寻找、驱赶野生动物获得水晶吧！</WarehouseEmpty>
	  <missionTitle>新春大喜迎兔年，农牧百万豪礼送！</missionTitle>
	  <missionPrepareTime>2010-10-25 02:00:00</missionPrepareTime>
	   <missionBeginTime>2011-01-19 00:00:00</missionBeginTime>
	  <missionEndTime>2011-02-22 16:00:00</missionEndTime>
<textLink1><![CDATA[]]></textLink1>
	  <textLink3><![CDATA[<font size = "12" color = "#FFFFFF" >当前金条：  {goldBullionNum}  个  元宝：  {goldYuanbaoNum}  个</font>]]></textLink3>	  
<textLink4><![CDATA[<font size = "13" color = "#0000CC" ><u>点击查看金条金元宝</u>]]></textLink4>
	  <textLink5><![CDATA[<font size = "13" color = "#000000" >您今天领取了3个金条树种子和3个金兔子幼仔，已放入您的农场背包和牧场背包。]]></textLink5>
	  <textLink6><![CDATA[<font size = "13" color = "#000000" >您是尊贵的黄钻用户，每天可额外获赠1个金条树种子和1个金兔子幼仔！</font>]]></textLink6>
	  <textLink7><![CDATA[<font size = "13" color = "#000000" >黄钻用户每天可额外各领取一个哦！</font>]]></textLink7>
	  <textLink8><![CDATA[<font size = "12" color = "#FFFFFF" >您是尊贵的黄钻用户，每天可额外领取1个种子和1个幼仔。</font>]]></textLink8>
	  <textLink9><![CDATA[<font size = "12" color = "#FFFFFF" >黄钻用户每天可额外领取一个种子和幼仔哦，赶紧开通黄钻吧！</font>]]></textLink9>	 
	  <textLink10><![CDATA[]]></textLink10>
      <showGoldNum>1</showGoldNum>	  
	  <SpringFestivalOpenVip><![CDATA[tools.php?mod=vip]]></SpringFestivalOpenVip>
	  <SpringFestivalRenewalVip><![CDATA[tools.php?mod=vip]]></SpringFestivalRenewalVip>
	  <missionMallLinkTip>简洁版和I地带用户请切换成普通版再参加</missionMallLinkTip>  
          <fstTime>2010-12-30 14:00:00</fstTime>
	  <sndTime>2010-12-30 14:00:00</sndTime>
	  <trdTime>2010-12-30 14:00:00</trdTime>
	  <fourthTime>2010-12-30 14:00:00</fourthTime>
	  <fifthTime>2010-12-30 14:00:00</fifthTime>

          <getSeedEndTime>2011-02-17 16:00:00</getSeedEndTime>
	  <SpringFestivalLottery><![CDATA[http://www.phpye.com]]></SpringFestivalLottery>
	  <fstTimeLottery>2011-02-16 14:00:00</fstTimeLottery>
	  <sndTimeLottery>2011-02-16 16:10:00</sndTimeLottery>
	  <trdTimeLottery>2011-02-16 16:30:00</trdTimeLottery>
	  <fourthTimeLottery>2011-02-16 16:50:00</fourthTimeLottery>
	  <fifthTimeLottery>2011-02-16 17:00:00</fifthTimeLottery>

	  <snsAdAllowLvl>0</snsAdAllowLvl>
      <showShopMillTab>0</showShopMillTab>
	  <everyDayGiftTip><![CDATA[您的黄钻还有<font color = '#FF0000'><b>&nbsp;{expireDays}&nbsp;</b></font>天到期。我们温馨提醒您及时<br>黄钻贵族每月可领取最高<font color = '#FF0000'><b>&nbsp;420&nbsp;</b></font>Q币农牧场礼包。]]></everyDayGiftTip>
	  <vipRenewal><![CDATA[http://pay.qq.com/qzone/index.shtml?ch=self&aid= farm.gifts]]></vipRenewal>
	  <pickupGiftFunny><![CDATA[恭喜您，翻地时挖到<font color="#339933"><b>&nbsp;@num&nbsp;</b></font>颗@name种子，可以在农场里组合各种图案。后续还将推出数字、字母等趣味景观树，敬请期待！<a href="event:http://blog.qq.com/qzone/1006666001/1292920220.htm"><u><font color="#26BBE9">查看样例</font></u></a>]]></pickupGiftFunny>
      <useNewFeeds>1</useNewFeeds>
	  
	  <beastLoaderUrl><![CDATA[$url/module/mc/farm/wild/WildShell_v_5.swf]]></beastLoaderUrl>
	  
	  <NcDrop9><![CDATA[$url/module/ui/wild/NcDrop9.swf]]></NcDrop9>
	  <drop9><![CDATA[$url/module/mc/farm/wild/drop9.swf]]></drop9>
	  <wildanimal><![CDATA[$url/module/mc/farm/wild/]]></wildanimal>
	  <wildaction><![CDATA[$url/module/mc/farm/wild/action.swf]]></wildaction>
	  <wildaweapon><![CDATA[$url/module/mc/farm/wild/]]></wildaweapon>
	  
          <wildOpenlv>0</wildOpenlv>
	  <wildOpenexp>0</wildOpenexp>
	  <wildOpenCtrl>true</wildOpenCtrl>

</vars>

	<redAdwards>
	  <redAdward id = "98088" name="Vàng"/>
	  <redAdward id = "113" name="Hạt Sơn chi"/>
	  <redAdward id = "118" name="Hạt Thủy tiên vàng"/>
	  <redAdward id = "3" name="Phân bón tốc độ"/>
	  <redAdward id = "2" name="Phân bón cao cấp"/>
	  <redAdward id = "1" name="Phân bón thường"/>
	  <redAdward id = "9001" name="Túi thức ăn cho chó"/>
	</redAdwards>


	<!-- http request address and other miscellaneous environment configuration -->
	<environment>
	</environment>
	
	<wild>
		<folder url = "$url/module/mc/" />
		
		<wildmodule>
			<module name="scene" url="$url/module/mc/farm/wild/WildScene_v_5.swf" start="1/1/2010 00:00:00" end="1/1/2099 00:00:00" >
				<material url="$url/module/mc/farm/wild/wild_ui_scene_v_2.swf"/>
			</module>
			<module name="tool" url="$url/module/mc/farm/wild/ToolScene_v_2.swf" start="1/1/2010 00:00:00" end="1/1/2099 00:00:00">
				<material url="$url/module/mc/farm/wild/wild_ui_tools_v_2.swf"/>
			</module>
		</wildmodule>		
		<beast maxRaiseNum="3" maxslotid="2" oneBloodPerSec="360"  stealInterval="3600" comaInterval="3600" restInterval="3600" oneExpPerSec="7200" needYlv="7" needFlv="10000" dy="[400,460,520]">
	        <info id="1" name="Bò" blood="50" buyNeedExp="0" raiseTimes="12" handleSuccRate="71" handleBlood="5" price="10000" saleMoney="17959" raiseExp="3" stayExp="2" attackExp="1" finalAttackExp="3">
	        	<tips><![CDATA[]]></tips>
	        	<p bx="0" by="-120" ss="20" sb="30" dx="100" dy="-20" >
	        		<weapon>[-30,-70,30,40]</weapon>
	        	</p>
	        	<droprate type="9" id="1" raise="60" back="80" attackSucc="32" attackFail="10" coma="64"/>
	            <droprate type="9" id="2" raise="20" back="40" attackSucc="16" attackFail="5" coma="32"/>
	        </info>
	        <info id="2" name="Chồn hôi" blood="60" buyNeedExp="150" raiseTimes="12" handleSuccRate="71" handleBlood="5" price="11000" saleMoney="19700" raiseExp="4" stayExp="2" attackExp="1" finalAttackExp="3">
				<tips><![CDATA[]]></tips>
				<p bx="0" by="-120" ss="5" sb="40" dx="100" dy="-20" >
	       		 	<weapon>[15,-50,30,30]</weapon>
	      	 	</p>
			</info>
			<info id="3" name="Cáo" blood="70" buyNeedExp="300" raiseTimes="12" handleSuccRate="71" handleBlood="5" price="12000" saleMoney="21550" raiseExp="5" stayExp="2" attackExp="1" finalAttackExp="3">
				<tips><![CDATA[]]></tips>
				<p bx="0" by="-120" ss="50" sb="50" dx="100" dy="-20" >
	        		<weapon>[18,-50,10,10]</weapon>
	        	</p>
			</info>
			<info id="4" name="Heo rừng" blood="80" buyNeedExp="450" raiseTimes="12" handleSuccRate="71" handleBlood="5" price="13500" saleMoney="24200" raiseExp="6" stayExp="2" attackExp="1" finalAttackExp="3">
				<tips><![CDATA[]]></tips>
				<p bx="0" by="-120" ss="0" sb="30" dx="100" dy="-20" >
	        		<weapon>[-40,-80,50,40]</weapon>
	       	    </p>
			</info>
   		</beast>
        <weapon>
		     <info id="1" name="Mũi tên đồng" qd="10" yqd="8" blood="12" status="1" attacksucc="100" tips="Wild animals on the same day, can only use a pay-per-weapon." desc="Làm giảm 12 máu." />
        	 <info id="2" name="Mũi tên bạc" qd="15" yqd="12" blood="19" status="1" attacksucc="100" tips="Wild animals on the same day, can only use a pay-per-weapon." desc="Làm giảm 19 máu." />
         	 <info id="3" name="Mũi tên vàng" qd="20" yqd="16" blood="26" status="1" attacksucc="100" tips="Wild animals on the same day, can only use a pay-per-weapon." desc="Làm giảm 26 máu." />
         	 <info id="4" name="Son of water pull" price="500" qd="0" yqd="0" blood="6" status="1" attacksucc="100" tips="The same wild animals, can only use 1 weapon." desc="Làm giảm 6 máu."/>
    	</weapon>
	    <crystal>
	        <info id="1" name="Lam ngọc" sale="10"/>
	        <info id="2" name="Lục ngọc" sale="10"/>
	        <info id="3" name="Thạch anh" sale="10"/>
	        <info id="4" name="Hoàng ngọc" sale="10"/>
	        <info id="5" name="Hồng ngọc" sale="10"/>
	        <info id="6" name="Lục ngọc" sale="10"/>
	        <info id="7" name="Crystal powder" sale="10"/>
	        <info id="8" name="Hoàng ngọc" sale="10"/>
	        <info id="9" name="Bạch ngọc" sale="10"/>
	        <info id="10" name="Hắc ngọc" sale="10"/>
   		</crystal>
	    <slot num="3">
        	<info id="0" price="150000"/>
        	<info id="1" price="300000"/>
        	<info id="2" price="600000"/>
    	</slot>
	</wild>

	<!-- Secondary asynchronous Downloads -->
	<secondList type="json">
		<![CDATA[
		{
		"secondList" : [{"id":"NPC", "src":"$url/module/ui/npc/NPCSpringFestival_v_2.swf"},
		{"id":"NpcExchangePanelBg", "src":"$url/module/ui/npc/background/springfestival/panel_v_1.jpg"},
		{"id":"FarmGift", "src":"$url/module/ui/npc/panel/SpringFestivalSeed.png"},
		{"id":"AnimalGift", "src":"$url/module/ui/npc/panel/SpringFestivalSeedVip.png"},		{"id":"UniteGift", "src":"$url/module/ui/npc/panel/uniteGift_v_newyear.jpg"},
 {"id":"Fertilizer", "src":"$url/module/ui/tools/Fertilizer_v_0.swf", "className":"Fertilizer"}]
		}
		]]>	
         </secondList>

	<!-- Each plugin may have multiple different types of mount points amount, for type = 0, the mount background, the need for depth sorting, layer control is the background or foreground, zIndex control in the same layer in the order of-->
	<plugins type="json">
		<![CDATA[
		{"plugins":[
		{"id":1, "proxy":"plugins.QShowPluginProxy", "url":"$url/module/ui/qqshow/qsplugin_20101119.swf","amount":[{"type":0,"zIndex":0,"layer":0,"x":680,"y":415},{"type":3,"tab":"Người mẫu"}]}
		]}
		]]>
	</plugins>

        <!-- ===== PLEASE === DO === NOT === EDIT === CONTENT  ===  BELOW === MANUALLY ===== -->

	<!-- Material list -->
	<assets>
        
	</assets>

	<!-- Farm brand -->
	<boards type="json">
		<![CDATA[
		{"boards": [
			
		]}
		]]>
	</boards>

	<!-- Farm crops -->
	<crops type="json">
		<![CDATA[
		{"crops": [
			
		]}
		]]>
	</crops>

	<!-- Farm background decoration -->
	<item_info type="json">
		<![CDATA[
		{"item_info": [
			
		]}
		]]>
	</item_info>

</data>
XML;

?>