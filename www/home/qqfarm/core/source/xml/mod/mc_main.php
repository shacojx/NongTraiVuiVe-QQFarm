<?php
//牧场:mcini_main_v_8.xml

$mc_main = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<main>
<postUrl url = "$url/mymc.php?mod=" fbRequest = "gb_buy" cftRequest="gb_buy" verifyRequest = "shop_verify"/>
	<loading url="$url/module/loading_v_15.swf" />
	<folder url = "$url/module/mc/" />
	<version value = "" loginurl = "http://i.qzone.qq.com/" />	
	<openControl><!-- 功能开放控制 -->
		<item name = "tool" open = "true" /><!-- 道具 -->
		<item name = "pack" open = "true" /><!-- 好友背包 -->
		<item name = "quickshoot" open="true" openlv="1"/><!--快照-->
		<item name = "harvestall" open="true" openlv="7" time="5|6|7|8|9|10|12|13|19|20|21|22"/><!--一键收获-->
		<item name = "sprice" open="true" openlv="0" time="5/1/2010 15:00|5/13/2010 15:00"/>
		<item name = "wild" open="true" openlv="1" openexp="0" />
	</openControl>
	<security host="192.168.1.121" port="3333" />	
	<moduleList><!-- 模块列表 -->
		<module name="main" url="$url/module/Master2_v_18.swf" statusText="Đang tải dữ liệu.." size="193668">
            <material url="$url/module/mc/main/farmui1_v_27.swf" statusText="Đang tải dữ liệu.." size="174361" />
            <material url="$url/module/mc/main/farmui2_v_21.swf" statusText="Đang tải dữ liệu.." size="139085" />
            <material url="$url/module/mc/main/commonui_v_5.swf" statusText="Đang tải dữ liệu.." size="36531" />
			<material url="$url/module/mc/farm/wild/wild_ui_v_4.swf" statusText="Đang tải dữ liệu.." size="5698" />
		</module>
	</moduleList>
	<moduleList2><!-- 模块列表2 -->		
		<module name="task" url="$url/module/mc/main/task_v_1.swf" statusText="Đang tải dữ liệu.." />
		<module name="upgrade" url="$url/module/mc/main/upgrade_v_1.swf?v=1" statusText="Đang tải dữ liệu.."  />
		<module name="hunter" url="$url/module/mc/farm/hunter/" statusText="Đang tải dữ liệu.." />
		<module name="drop9" url="$url/module/mc/farm/wild/drop9.swf" statusText="Đang tải dữ liệu.." />
		<module name="wildanimal" url="$url/module/mc/farm/wild/" statusText="Đang tải dữ liệu.." />
		<module name="wildaction" url="$url/module/mc/farm/wild/action.swf" statusText="Đang tải dữ liệu.." />
		<module name="wildaweapon" url="$url/module/mc/farm/wild/" statusText="Đang tải dữ liệu.." />
	</moduleList2>
	<submodule>
	  <module name="love" url="$url/module/mc/submodule/love_v_1.swf" start="8/11/2010 00:00:00" end="8/23/2010 00:05:00" tip="七夕情人节快乐！" speaking="迢迢牵牛星，皎皎河汉女;七夕浪漫天作合，月下人间牵姻缘" >
			<material url="$url/module/ui/main/NPC5.swf"/>
		</module>
		<module name="autumn" url="$url/module/mc/submodule/autumn_v_1.swf" start="9/1/2010 00:00:00" end="10/9/2010 00:10:00" tip="国庆中秋，双喜临门，快来找我领好礼！" speaking="花好月圆人团圆，迎风赏月合家欢！;国庆佳节，普天同庆！" >
			<material url="$url/module/ui/main/NPC6.swf"/>
		</module>
		<module name="hallowmas" url="$url/module/mc/submodule/hallowmas_v_2.swf" start="10/20/2010 00:00:00" end="11/15/2010 15:00:00">
			<material name="title" url="$url/module/mc/main/tmptitle_v_2.swf"/>	
			<material name="pumpkin" url="$url/module/ui/npc/NPCpumpkin.swf" tip="点我查看万圣节活动规则哦~"/>
			<material name="candy" url="$url/module/ui/npc/NPCcandybox.swf" tip1="点我可兑换万圣节礼包哦~" tip2="点我可送给好友万圣节饼干哦~" speaking="这里有好友送的糖果和饼干，可兑换礼包哦~;去好友牧场送饼干，可获更多饼干精灵幼仔！" />
		</module>
		<module name="thanksgiving" url="$url/module/mc/submodule/thanksgiving.swf" start="11/15/2010 15:00:00" end="12/06/2010 17:00:00" tip="我来告诉您牧场双倍提价的动物副产吧！" speaking="涨价涨价，动物副产双倍好价！;好事成双，农牧场双倍提价大行动！" >
			<material name="title" url="$url/module/mc/main/tmptitle_v_3.swf"/>
			<material name="turkey" url="$url/module/ui/npc/NPCturkey.swf" />
		</module>
		<module name="christmas" url="$url/module/mc/submodule/newyear.swf" start="12/30/2010 14:00:00" end="01/17/2011 15:00:00" tip="收集元旦卡、雪人卡，快来这里兑换元旦礼包！" speaking="财神到财神到，快来参加农牧场新年活动吧！" >
			<material name="title" url="$url/module/mc/main/tmptitle_v_5.swf"/>
			<material name="santaclaus" url="$url/module/ui/npc/NPCnewyear.swf" />
			<source name="bg" src="$url/module/ui/npc/background/newyear/panel.jpg"/>
			<source name="headURL" src="$url/module/ui/npc/panel/"/>
			<source name="imgNames" src="farmGift_v_newyear.jpg;pastureGift_v_newyear.jpg;uniteGift_v_newyear.jpg"/>
			<textLink name="textLink1" htmlText="&lt;font size = &apos;13&apos; color = &apos;#AA0000&apos; &gt;种圣诞树，养驯鹿！收获，摘取都有一定概率获得活动卡片！&lt;a href=&quot;event:http://blog.qq.com/qzone/1006666002/1293674528.htm&quot;&gt;&lt;u&gt;活动详情&gt;&gt;&lt;/u&gt;&lt;/a&gt;&lt;br&gt;兑换时间：2010.12.30-2011.1.17（下午15：00）" x="214" y="35"/>
			<textLink name="textLink2" htmlText="&lt;font color=&quot;#CC0000&quot;&gt;&lt;a href=&quot;event:http://rc.qzone.qq.com/mall?target=mall&quot;&gt;小锦囊：&lt;br&gt;去商城也可&lt;br&gt;拿两种卡&gt;&gt;&lt;/a&gt;&lt;/font&gt;"/>
			<textLink name="warehouseEmpty" htmlText="材料仓库空空的，赶紧去点击圣诞老人参与圣诞活动获得卡片吧！"/>
			<textLinkExtra><![CDATA[<br><font size='12'>更多获得卡片的方式：<font color='#0000FF'><a href="event:http://rc.qzone.qq.com/mall?target=mall">去装饰商城签到</a></font><br>（注：空间简洁版用户和I地带用户无法直接参加商城任务）</font>]]></textLinkExtra>
			<mallLinkTip>小贴士：空间简洁版用户和I地带用户无法直接参加商城任务哟</mallLinkTip>
</module>
<module name="SpringFestival" url="$url/module/mc/submodule/springfestival_v_3.swf" start="01/19/2011 00:00:00" end="02/22/2011 16:00:00" tip="快来领取金条树和金兔子，参与新春百万豪礼送活动！" speaking="新春大喜迎兔年，农牧百万豪礼送！" tip1="百万贺礼活动已正式开始，快用金条和金元宝来参与抽奖吧！" speaking1="开始抽奖了，快快来赢神马浮云吧！">
			<material name="title" url="$url/module/mc/main/tmptitle_v_0.swf"/>
			<material name="santaclaus" url="$url/module/ui/npc/NPCSpringFestival_v_2.swf" />
			<source name="bg" src="$url/module/ui/npc/background/springfestival/panel_v_1.jpg"/>
			<source name="headURL" src="$url/module/ui/npc/panel/"/>
			<source name="imgNames" src="SpringFestivalSeed.png;SpringFestivalSeedVip.png;"/>
			  <textLink1><![CDATA[]]></textLink1>
	  <textLink3><![CDATA[<font size = "12" color = "#FFFFFF" >当前金条：  {goldBullionNum}  个  元宝：  {goldYuanbaoNum}  个</font>]]></textLink3>
			<textLink4><![CDATA[<font size = "13" color = "#0000CC" ><u>点击查看金条金元宝</u>]]></textLink4>
			<textLink5><![CDATA[<font size = "13" color = "#000000" >您今天领取了3个金条树种子和3个金兔子幼仔，已放入您的农场背包和牧场背包。]]></textLink5>
			<textLink6><![CDATA[<font size = "13" color = "#000000" >您是尊贵的黄钻用户，每天可额外获赠1个金条树种子和1个金兔子幼仔。</font>]]></textLink6>
			<textLink7><![CDATA[<font size = "13" color = "#000000" >黄钻用户每天可额外各领取一个哦！</font>]]></textLink7>
			<textLink8><![CDATA[<font size = "12" color = "#FFFFFF" >您是尊贵的黄钻用户，每天可额外领取1个种子和1个幼仔。</font>]]></textLink8>
	        <textLink9><![CDATA[<font size = "12" color = "#FFFFFF" >黄钻用户每天可额外领取一个种子和幼仔哦，赶紧开通黄钻吧！</font>]]></textLink9>
			<textLink10><![CDATA[]]></textLink10>
			<SpringFestivalOpenVip><![CDATA[tools.php?mod=vip]]></SpringFestivalOpenVip>
			<SpringFestivalRenewalVip><![CDATA[tools.php?mod=vip]]></SpringFestivalRenewalVip>
			<showGoldNum>1</showGoldNum>
			<mallLinkTip>简洁版和I地带用户请切换成普通版再参加</mallLinkTip>
                        <SpringFestivalLottery><![CDATA[http://www.phpye.com]]></SpringFestivalLottery>
			<fstTimeLottery>2011-02-16 14:00:00</fstTimeLottery>
			<sndTimeLottery>2011-02-16 16:10:00</sndTimeLottery>
			<trdTimeLottery>2011-02-16 16:30:00</trdTimeLottery>
			<fourthTimeLottery>2011-02-16 16:50:00</fourthTimeLottery>
			<fifthTimeLottery>2011-02-16 17:00:00</fifthTimeLottery>
			<getSeedEndTime>2011-02-17 16:00:00</getSeedEndTime>
		</module>          
           </submodule>
	<logic>
		<restaurantEnterCfg open="true">{$xml}nc_farm_$verson.xml</restaurantEnterCfg>
		<urlFriend url = "$url/mync.php?mod=friend" />
	</logic>
	<missonList>
		<mission className='PrepareTime' str='2010-12-08 00:00:00'/>
		<mission className='BeginTime' str='2010-12-30 00:00:00'/>
		<mission className='EndTime' str='2011-01-17 15:00:00'/>
		
		<mission className='fstTime' str='2010-12-30 14:00:00'/>
	  <mission className='sndTime' str='2010-12-30 14:00:00'/>
	  <mission className='trdTime' str='2010-12-30 14:00:00'/>
	  <mission className='fourthTime' str='2010-12-30 14:00:00'/>
	  <mission className='fifthTime' str='2010-12-30 14:00:00'/>
   </missonList><vipRenewal>
		<tips><![CDATA[您的黄钻还有<font color = '#FF0000'><b>&nbsp;{expireDays}&nbsp;</b></font>天到期。我们温馨提醒您及时<br>黄钻贵族每月可领取最高<font color = '#FF0000'><b>&nbsp;420&nbsp;</b></font>Q币农牧场礼包。]]></tips>
		<link><![CDATA[tools.php?mod=vip]]></link>
	</vipRenewal>
	<hunter>
		<food>{"buyexp":0,"description":"Khi mua 5 phần lương (vừa) sẽ được tặng 2 phần cùng loại","effect":604800,"id":102,"left":9972551,"name":"[Set 1] Tiền lương x5","order":8,"price":0,"qdprice":20,"status":1,"type":5,"validtime":0,"yqdprice":16}</food>
	</hunter>
	<wild>
<folder url = "$url/module/mc/" /><wildmodule loader="$url/module/mc/farm/wild/WildShell_v_5.swf">
			<module name="scene" url="$url/module/mc/farm/wild/WildScene_v_5.swf" start="1/1/2010 00:00:00" end="1/1/2099 00:00:00" >
				<material url="$url/module/mc/farm/wild/wild_ui_scene_v_2.swf"/>
			</module>
			<module name="tool" url="$url/module/mc/farm/wild/ToolScene_v_2.swf" start="1/1/2010 00:00:00" end="1/1/2099 00:00:00">
				<material url="$url/module/mc/farm/wild/wild_ui_title_v_1.swf"/>
				<material url="$url/module/mc/farm/wild/wild_ui_tools_v_2.swf"/>
			</module>
		</wildmodule>
		<beast maxRaiseNum="3" maxslotid="2" oneBloodPerSec="360"  stealInterval="3600" comaInterval="3600" restInterval="3600" oneExpPerSec="7200" needYlv="7" needFlv="10000"  dy="[430,510,590]">
	        <info id="1" name="Bò" blood="50" buyNeedExp="0" raiseTimes="12" handleSuccRate="71" handleBlood="5" price="10000" saleMoney="17959" raiseExp="3" stayExp="2" attackExp="1" finalAttackExp="3">
	        	<tips><![CDATA[]]></tips>
	        	<p bx="0" by="-120" ss="120" sb="30" dx="100" dy="-20" >
	        		<weapon>[-30,-70,30,40]</weapon>
	        	</p>
	        	<droprate type="9" id="1" raise="60" back="80" attackSucc="32" attackFail="10" coma="64"/>
	            <droprate type="9" id="2" raise="20" back="40" attackSucc="16" attackFail="5" coma="32"/>
	        </info>
	        <info id="2" name="Chồn hôi" blood="60" buyNeedExp="150" raiseTimes="12" handleSuccRate="71" handleBlood="5" price="11000" saleMoney="19700" raiseExp="4" stayExp="2" attackExp="1" finalAttackExp="3">
				<tips><![CDATA[]]></tips>
				<p bx="0" by="-120" ss="120" sb="40" dx="100" dy="-20" >
	       		 	<weapon>[15,-50,30,30]</weapon>
	      	 	</p>
			</info>
			<info id="3" name="Cáo" blood="70" buyNeedExp="300" raiseTimes="12" handleSuccRate="71" handleBlood="5" price="12000" saleMoney="21550" raiseExp="5" stayExp="2" attackExp="1" finalAttackExp="3">
				<tips><![CDATA[]]></tips>
				<p bx="0" by="-120" ss="150" sb="50" dx="100" dy="-20" >
	        		<weapon>[18,-50,10,10]</weapon>
	        	</p>
			</info>
			<info id="4" name="Heo rừng" blood="80" buyNeedExp="450" raiseTimes="12" handleSuccRate="71" handleBlood="5" price="13500" saleMoney="24200" raiseExp="6" stayExp="2" attackExp="1" finalAttackExp="3">
				<tips><![CDATA[]]></tips>
				<p bx="0" by="-120" ss="110" sb="30" dx="100" dy="-20" >
	        		<weapon>[-40,-80,50,40]</weapon>
	       	    </p>
			</info>
   		</beast>
        <weapon>
		     <info id="1" name="Mũi tên đồng" qd="10" yqd="8" blood="12" status="1" attacksucc="100" tips="Mỗi con chỉ có thể bắn 1 lần mà thôi" desc="Làm tiêu hao 12 máu của thú hoang." />
        	 <info id="2" name="Mũi tên bạc" qd="15" yqd="12" blood="19" status="1" attacksucc="100" tips="Mỗi con chỉ có thể bắn 1 lần mà thôi" desc="Làm tiêu hao 19 máu của thú hoang." />
         	 <info id="3" name="Mũi tên vàng" qd="20" yqd="16" blood="26" status="1" attacksucc="100" tips="Mỗi con chỉ có thể bắn 1 lần mà thôi" desc="Làm tiêu hao 26 máu của thú hoang." />
         	 <info id="4" name="Cây hút cầu" price="500" qd="0" yqd="0" blood="6" status="1" attacksucc="100" tips="Mỗi con chỉ có thể bắn 1 lần mà thôi" desc="Làm tiêu hao 6 máu của thú hoang."/>
    	</weapon>
	    <crystal>
	        <info id="1" name="Lam ngọc" sale="10"/>
	        <info id="2" name="Lục ngọc" sale="10"/>
	        <info id="3" name="Thạch anh" sale="10"/>
	        <info id="4" name="Kim ngọc" sale="10"/>
	        <info id="5" name="Hồng ngọc" sale="10"/>
	        <info id="6" name="Thanh ngọc" sale="10"/>
	        <info id="7" name="Tinh bột" sale="10"/>
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
</main>
XML;
?>