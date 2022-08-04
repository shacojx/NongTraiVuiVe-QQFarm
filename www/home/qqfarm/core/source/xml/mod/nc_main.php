<?php
//农场:load_main_v_9.xml
$nc_main = <<<XML
<?xml version="1.0" encoding="utf-8" ?>
<data>
    <version value="" loginurl="http://qzone.qq.com" />
    <loading url="$url/module/loading2_v_1.swf" />
    <!-- Module list -->
    <moduleList>
        <module name="main" url="$url/module/main3_v_15.swf" statusText="Đang tải dữ liệu..">
            <material url="$url/module/ui/main/farmui_full_v_14.swf" statusText="Đang tải dữ liệu.." />
			<material url="$url/module/mc/farm/wild/wild_ui_v_4.swf" statusText="Đang tải dữ liệu.."/>
        </module>
    </moduleList>
</data>
XML;
?>