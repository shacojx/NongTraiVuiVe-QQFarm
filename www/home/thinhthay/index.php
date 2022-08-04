<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Thầy bói Online | Thỉnh thầy | Thinh Thay | Thay Boi | Facebook |</title>
<link type="text/css" href="thinhthay/style.css" rel="stylesheet">
</head>
<body>


<?php
			
			$name= isset($_POST['hoi'])? $_POST['hoi']:""; 
			if($name == "")
				{
    		$loi = " Không chơi đá xoáy nhau à nha, không thì bố thầy cũng ko trả lời được.  ";
				}
	/**
			elseif ( ereg ("\điên", $name) )
			{
				
				$loi = "Con có bị điên không mà đi hỏi thầy ??? sao hỏi kì dzậy ?";
				
				/**
				$loi = array(10)
				(
				 $loi[0] = "Con có bị điên không ??? sao hỏi kì dzậy ?"
				
				2 => "Lại nữa rồi . Con bị điên à ???",
				3 => "Thầy dzận con đó nha ",
				4 => "Lần cuối đó , thấy nữa là thầy cho con out luôn à nha",
				
				)
				for ($i = 0; $i < 10 ; $i ++)
				{
				 $loi[$i]=$i;
				}
				
			}
			**/
			
			elseif
			( ereg ("\đụ", $name) || ereg ("\địt", $name) || ereg ("\fuck", $name) || ereg ("\lồn", $name) || ereg ("\buồi", $name) || ereg ("\lozl", $name) || ereg ("\lol", $name) || ereg ("\loz`", $name) || ereg ("\dkm", $name) || ereg ("\đkm", $name) || ereg ("\đm", $name) || ereg ("\dm", $name) || ereg ("\vl", $name) || ereg ("\vkl", $name) || ereg ("\cặc", $name) || ereg ("\bướm", $name) || ereg ("\chim", $name) || ereg ("\chym", $name) || ereg ("\trym", $name) || ereg ("\trjm", $name) || ereg ("\phò", $name) || ereg ("\phạch" || ereg ("\cave", $name), $name) || ereg ("\điếm", $name) || ereg ("\lôn`", $name) || ereg ("\loz", $name) || ereg("\dái",$name) || ereg("\chó",$name)  || ereg("\diz",$name) || ereg("\dis",$name) || ereg("\đis",$name) || ereg("\đít",$name) || ereg("\điz",$name) || ereg("\dâm",$name) || ereg("\khu",$name) || ereg("\đýt",$name) || ereg("\Ngu",$name)  || ereg("\ẻ",$name) || ereg("\đỵt",$name)) 
			{
				$loi= "Mấy thứ này nhạy cảm không hỏi bừa bãi được đâu nghe con ><";
			}
			elseif ( ereg ("\sex", $name) ) 
			 {
				$loi= "Cái đó đến con cũng thích còn hỏi thầy . Mà con hỏi thầy làm chi dzậy ?";
				
			}
			
			elseif ( ereg ("\đẹp", $name) || ereg ("\kute", $name) ||  ereg ("\cute", $name) || ereg ("\xinh", $name ) || ereg ("\giỏi", $name ))
			 {
				$loi= " Đừng mơ mộng quá con ơi . Mấy vấn đề ni thầy xin phép không trả lời .";
				
			}
			elseif ( ereg ("\cứt", $name) || ereg ("\kứt", $name) || ereg ("\kít", $name) || ereg ("\cut", $name) || ereg ("\shit", $name)|| ereg ("\shjt", $name) || ereg ("\sh!t", $name) )
			 {
				$loi= " Con có ăn không mà đi hỏi thầy ???? . Sao Hỏi kì quá dzậy >.<";
				
			}

			else
			{
			$tra_loi1 = array
			(
			1  => "Cái này cũng còn tùy. !",
			2  => "Uhm uhm, điều đó chắc chắn sẽ xảy ra.",
			3  => "Việc này tưởng dễ nhưng mà khó đấy.",
			4  => "Hỏi thế thì bố thầy cũng hem dám trả lời.",
			5  => "Cũng được đấy nhưng phải cẩn thận",
			6  => "Hỏi khó quá coi chừng ra đường chó cắn à nha.",
			7  => "Con chưa đủ tuổi để hỏi câu hỏi này đâu , đừng liều.",
			8  => "Bây giờ thì chưa, nhưng cũng sắp sửa.",
			9  => "Cẩn thận. Không được đâu.",
			10 => "Khó đó à nha.",
			11 => "Mày hỏi thầy khó quá ",
			12 => "Thầy còn mê nữa nói chi ai.",
			13 => "Chuẩn không cần chỉnh, chỉnh nữa mất chuẩn đó à nha.",
			14 => "Mọi việc chỉ có 50% như mong muốn thôi.",
			15 => "Cũng được.Nhưng đợi đến tết Công-gô thì mong ước sẽ thành.",
			16 => "Bây giờ thì có, nhưng sau này thì chưa chắc.",
			17 => "Không.",
			18 => "Theo thầy thì chắc chắn là không.",
			19 => "Theo thầy cũng không chắc chắn lắm.",
			20 => "Cái này khó à nha. Nhưng 80% là có.",
			21 => "Ôi giời! Tất nhiên là có.",
			22 => "Đẹp trai mà sao hỏi khó quá dzậy?.",
			23 => "Xinh gái thế mà sao hỏi khó quá dzậy?.",
			24 => "Nghĩ sao mà hỏi vậy? Định thử thầy à.",
			25 => "Sao giống thầy dzậy?",
			26 => "Nhiều khách, thầy đang bận quá. Lát thầy trả lời.",
			27 => "Thầy đang đông khách quá, để lúc khác.",
			28 => "Có.Nhưng sau này phải cẩn thận. Thầy nhìn thấy có sự thay đổi.",
			29 => "Yên tâm đi, chắc chắn là có.",
			30 => "Sao hỏi nhiều dzậy , thầy zận đó à nha .",
			31 => "Nhìn thông minh thế mà sao con lại hỏi cùi mía quá dzậy.",
			32 => "Gió lào đợt này nhiều lắm, con cứ yên tâm .",
			33 => "Cứ rứa mà mần con à.",
			34 => "Răng phải xoắn , mần chi mà căng hả con ???.",
			35 => "Mần đi, mần mạnh đi con à . đừng hại.",
			36 => "Chi mà phảy xoắn rứa con hầy ???.",
			37 => "Răng mà hổ báo rứa con ???.",
			38 => "Đồ quỷ sứ .",
			39 => "Cấy ni thì con hỏi chúa để biết thêm chi tiết nha.",
			
			
			
			);
			srand ((double) microtime() * 100000);
  			$randnum = rand(1,39); 
			  				$hoi = $_GET["hoi"];
							$cau_hoi  = " <b>Câu hỏi </b>: ". $name;
							$tra_loi = " <b>Thầy phán </b>: " . $tra_loi1[$randnum];
		
			}
	





/**
	if(isset($_POST['hoi']) != "")
	{
		$tra_loi1 = array
		(
			1  => "Cái này cũng còn tùy. !",
			2  => "Uhm uhm, điều đó chắc chắn sẽ xảy ra.",
			3  => "Việc này tưởng dễ nhưng mà khó đấy.",
			4  => "Hỏi thế thì bố thầy cũng hem dám trả lời.",
			5  => "Cũng được đấy nhưng phải cẩn thận",
			6  => "Hỏi khó quá coi chừng ra đường chó cắn à nha.",
			7  => "Con chưa đủ tuổi để hỏi câu hỏi này đâu , đừng liều.",
			8  => "Bây giờ thì chưa, nhưng cũng sắp sửa.",
			9  => "Cẩn thận. Không được đâu.",
			10 => "Khó đó à nha.",
			11 => "Mày hỏi thầy khó quá ",
			12 => "Thầy còn mê nữa nói chi ai.",
			13 => "Chuẩn không cần chỉnh, chỉnh nữa mất chuẩn đó à nha.",
			14 => "Mọi việc chỉ có 50% như mong muốn thôi.",
			15 => "Cũng được.Nhưng đợi đến tết Công-gô thì mong ước sẽ thành.",
			16 => "Bây giờ thì có, nhưng sau này thì chưa chắc.",
			17 => "Không.",
			18 => "Theo thầy thì chắc chắn là không.",
			19 => "Theo cũng không chắc chắn lắm.",
			20 => "Cái này khó à nha. Nhưng 80% là có.",
			21 => "Ôi giời! Tất nhiên là có.",
			22 => "Đẹp trai mà sao hỏi khó qua dzậy?.",
			23 => "Xinh gái thế mà sao hỏi khó quá dzậy?.",
			24 => "Nghĩ sao mà hỏi vậy? Định thử thầy à.",
			25 => "Sao giống thầy dzậy?",
			26 => "Nhiều khách, thầy đang bận quá. Lát thầy trả lời.",
			27 => "Thầy đang đông khách quá, để lúc khác.",
			28 => "Có.Nhưng sau này phải cẩn thận. Thầy nhìn thấy có sự thay đổi.",
			29 => "Yên tâm đi, chắc chắn là có.",
			30 => "Sao hỏi nhiều dzậy , thầy zận đó à nha .",
			31 => "Sao con hỏi cùi mía quá dzậy.",
			32 => "Cứ rứa mà mần con à.",
			33 => "Răng phải xoắn , mần chi mà căng hả con ???.",
			
			
		);
			srand ((double) microtime() * 100000);
  			$randnum = rand(1,33); 
			
		//$tra_loi1 = "<iframe style='width:400px; height:30px;' src='http://hrs.apps.zing.vn/app/index/question'  frameborder='0'>";
		$hoi = $_POST["hoi"];
		$cau_hoi  = " <b>Câu hỏi </b>: ". $hoi;
		$tra_loi = " <b>Thầy phán </b>: " . $tra_loi1[$randnum];
		
	}

   else if ((isset($_POST['hoi'])) =="")
			{
    		$loi = " Nhớ là không được chơi đá xoáy nhau à nha, không hỏi bố thầy cũng ko trả lời được. Cho nên ,có hỏi thì nhớ ghi rọ ràng thì thầy mới phán được. Nên 1 ngày chỉ hỏi thầy 1 lần thì thầy phán mới chuẩn .  ";
			}
	
	**/
		
	/**
	else
	(isset($_POST["hoi"]))
	{
		$tra_loi1 = "<iframe src='http://hrs.apps.zing.vn/app/index/question' style='width:4px; height:4px;' frameborder='0'>";
		$hoi = $_POST["hoi"];
		$cau_hoi  = " <b>Câu hỏi </b>: ". $hoi;
		$tra_loi = " <b>Thầy phán </b>: " . $tra_loi1;
		

	
	}**/

?>

<!---Game Thầy Bói Online được phát triển bởi Kết Nối trẻ group -->
<!---Vui lòng giữ bản quyền Việt hóa của Kết Nối trẻ group -->
<!---Cám ơn bạn đã sử dụng sản phẩm của Kết Nối trẻ group -->

<!-- header-->
<div class="content" style="width: 800px; height: 386px">
    <div class="main_content">
        <h4>Thỉnh Thầy - Càng hỏi Càng Vui</h4>
        	<p class="thayboi"><img src="thinhthay/thayboi.jpg" 
border="0" width="250px"></p>
        <table border="0" height="254">
        <tbody><tr>
            <td colspan="2" style="margin-bottom: 10px;" height="32">
            <h5><font size="5">Thầy cho con hỏi?</font></h5></td>
        </tr>
        <tr>
          <td valign="top"><img src="thinhthay/pic.png" border="0"></td>
          <td align="center">
                <form method="POST" action="index.php" >
               
                <textarea class="textarea" name="hoi" rows="4" cols="56" ><?php echo $hoi;?></textarea><br>
                <input class="button" value="Thỉnh thầy" type="submit">
                </form>
          </td>
          </tr>
                <tr>
                <td colspan="2" style="padding-top: 100%px;">
                <p><?php echo $cau_hoi;?></p>
                <p><?php echo $tra_loi;?></p>
                <p><?php echo $loi;?></p>
                
               
                 <p></p>
                </td>
            </tr>
            </tbody></table>
          <div class="clear">&nbsp;</div>
        </div>
    </div>
</p>
</body></html>