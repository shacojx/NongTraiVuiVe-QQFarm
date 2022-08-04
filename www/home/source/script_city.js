/*
####
#### (c) Vic.0 www.netdepviet.org or wwww.ndvmedia.com
#### Copyright (c) Discuz! 6.1.0 UC Home
*/

function setcity(provinceid, cityid) {
	var province = document.getElementById(provinceid).value;
    switch (province) {
		case "Hà Nội":
			var cityOptions = new Array(
			"Ba Đình","Ba Đình",
			"Cầu Giấy","Cầu Giấy",
			"Đống Đa","Đống Đa",
			"Hoàn Kiếm","Hoàn Kiếm",
			"Hai Bà Trưng","Hai Bà Trưng",
			"Hoàng Mai","Hoàng Mai",
			"Long Biên","Long Biên",
			"Tây Hồ","Tây Hồ",
			"Thanh Xuân","Thanh Xuân",
			"Ba Vì","Ba Vì",
			"Đông Anh","Đông Anh",
			"Gia Lâm","Gia Lâm",
			"Từ Liêm","Từ Liêm",
			"Thanh Trì","Thanh Trì",
			"Sóc Sơn","Sóc Sơn",
			"Phúc Thọ","Phúc Thọ",
			"Thạch Thất","Thạch Thất",
			"Đan Phượng","Đan Phượng",
			"Quốc Oai","Quốc Oai",
			"Hoài Đức","Hoài Đức",
			"Thường Tín","Thường Tín",
			"Phú Xuyên","Phú Xuyên",
			"Thanh Oai","Thanh Oai",
			"Chương Mỹ","Chương Mỹ",
			"Mỹ Đức","Mỹ Đức",
			"Ứng Hòa","Ứng Hòa",
			"Tp.Hà Đông","Tp.Hà Đông",
			"Tp.Sơn Tây","Tp.Sơn Tây");
			break;
		case "Tp Hồ Chí Minh":
			var cityOptions = new Array(
			"Quận 1","Quận 1",
			"Quận 2","Quận 2",
			"Quận 3","Quận 3",
			"Quận 4","Quận 4",
			"Quận 5","Quận 5",
			"Quận 6","Quận 6",
			"Quận 7","Quận 7",
			"Quận 8","Quận 8",
			"Quận 9","Quận 9",
			"Quận 10","Quận 10",
			"Quận 11","Quận 11",
			"Quận 12","Quận 12",
			"Bình Tân","Bình Tân",
			"Bình Thạnh","Bình Thạnh",
			"Gò Vấp","Gò Vấp",
			"Phú Nhuận","Phú Nhuận",
			"Tân Bình","Tân Bình",
			"Tân Phú","Tân Phú",
			"Thủ Đức","Thủ Đức",
			"Huyện Nhà Bè","Huyện Nhà Bè",
			"Huyện Hóc Môn","Huyện Hóc Môn",
			"Huyện Củ Chi","Huyện Củ Chi",
			"Huyện Cần Giờ","Huyện Cần Giờ",
			"Huyện Bình Chánh","Huyện Bình Chánh");
			break;
        case "An Giang" :
            var cityOptions = new Array(
            "Long Xuyên","Long Xuyên",
			"Châu Đốc","Châu Đốc",
			"Chợ Mới","Chợ Mới",
			"Phú Tân","Phú Tân",
			"Tân Châu","Tân Châu",
			"An Phú","An Phú",
			"Tri Tôn","Tri Tôn",
			"Tịnh Biên","Tịnh Biên",
			"Châu Thành","Châu Thành",
			"Châu Phú","Châu Phú",
			"Thoại Sơn","Thoại Sơn");
             break;
	    case "Bà Rịa - Vũng Tàu" :
            var cityOptions = new Array(
			 "Tp.Vũng Tàu","Tp.Vũng Tàu",
			 "Thị xã Bà Rịa","Thị xã Bà Rịa",
			 "Huyện Châu Đức","Huyện Châu Đức",
			 "Huyện Côn Đảo","Huyện Côn Đảo",
			 "Huyện Long Điền","Huyện Long Điền",
			 "Huyện Đất Đỏ","Huyện Đất Đỏ",
			 "Huyện Tân Thành","Huyện Tân Thành",
			 "Huyện Xuyên Mộc","Huyện Xuyên Mộc");
            break;			
		case "Bình Dương":
			var cityOptions = new Array(
			"Bến Cát","Bến Cát",
			"Dầu Tiếng","Dầu Tiếng",
			"Dĩ An","Dĩ An",
			"Phú Giáo","Phú Giáo",
			"Tân Uyên","Tân Uyên",
			"Thuận An","Thuận An",
			"Thủ Dầu Một","Thủ Dầu Một");
			break;		
		case "Bình Phước":
			var cityOptions = new Array(
			"Đồng Xoài","Đồng Xoài",
			"Đồng Phù","Đồng Phù",
			"Phước Long","Phước Long",
			"Lộc Ninh","Lộc Ninh",
			"Bù Đăng","Bù Đăng",
			"Bình Long","Bình Long",
			"Bù Đốp","Bù Đốp",
			"Chơn Thành","Chơn Thành");
			break;
		case "Bình Thuận":
			var cityOptions = new Array(
			"Hàm Thuận Bắc","Hàm Thuận Bắc",
			"Tánh Linh","Tánh Linh",
			"Tuy phong","Tuy phong",
			"Hàm Thuận Nam","Hàm Thuận Nam");
			break;
		case "Bình Định":
			var cityOptions = new Array(
			"TP Quy Nhơn","TP Quy Nhơn",
			"An Lão","An Lão",
			"Vĩnh Thạnh","Vĩnh Thạnh",
			"Vân Canh","Vân Canh",
			"Hoài Ân","Hoài Ân",
			"Hoài Nhơn","Hoài Nhơn",
			"Phù Mỹ","Phù Mỹ",
			"Phù Cát","Phù Cát",
			"Tây Sơn","Tây Sơn",
			"An Nhơn","An Nhơn",
			"Tuy Phước","Tuy Phước");
			break;
		case "Bạc Liêu":
			var cityOptions = new Array(
			"Bạc Liêu","Bạc Liêu",
			"Hoà Bình","Hoà Bình",
			"Đông Hải","Đông Hải",
			"Giá Rai","Giá Rai",
			"Hông Dân","Hông Dân",
			"Phước Long","Phước Long",
			"Vĩnh Lợi","Vĩnh Lợi");
			break;
		case "Bắc Giang":
			var cityOptions = new Array(
			"TP Bắc Giang","TP Bắc Giang",
			"Lạng Giang","Lạng Giang",
			"Hiệp Hoà","Hiệp Hoà",
			"Việt Yên","Việt Yên",
			"Yên Dũng","Yên Dũng",
			"Tân Yên","Tân Yên",
			"Lục Nam","Lục Nam",
			"Lục Ngạn","Lục Ngạn",
			"Sơn Động","Sơn Động",
			"Yên Thế","Yên Thế");
			break;
		case "Bắc Kạn":
			var cityOptions = new Array(
			"Thị xã Bắc Kạn","Thị xã Bắc Kạn",
			"Pác Nặm ","Pác Nặm ",
			"Chợ Đồn","Chợ Đồn",
			"Chợ Mới","Chợ Mới",
			"Bạch Thông","Bạch Thông",
			"Na Rì","Na Rì",
			"Ngân Sơn","Ngân Sơn",
			"Ba Bể","Ba Bể");
			break;
		case "Bắc Ninh":
			var cityOptions = new Array(
			"Thị xã Bắc Ninh","Thị xã Bắc Ninh",
			"Gia Bình","Gia Bình",
			"Lương Tài","Lương Tài",
			"Quế Võ","Quế Võ",
			"Yên Phong","Yên Phong",
			"Thuận Thành","Thuận Thành",
			"Tiên Du","Tiên Du",
			"Từ Sơn","Từ Sơn");
			break;
		case "Bến Tre":
			var cityOptions = new Array(
			"Thị xã Bến Tre ","Thị xã Bến Tre ",
			"Châu Thành","Châu Thành",
			"Chợ Lách","Chợ Lách",
			"Bình Đại","Bình Đại",
			"Giồng Trôm","Giồng Trôm",
			"Mỏ Cày","Mỏ Cày",
			"Ba Tri","Ba Tri",
			"Thạnh Phú","Thạnh Phú");
			break;
		case "Cao Bằng":
			var cityOptions = new Array(
			"Thị Xã Cao Bằng","Thị Xã Cao Bằng",
			"Hoà An ","Hoà An ",
			"Quảng Uyên","Quảng Uyên",
			"Phục Hoà","Phục Hoà",
			"Trà Linh","Trà Linh",
			"Thạch An","Thạch An",
			"Nguyên Bình","Nguyên Bình",
			"Bảo Lạc","Bảo Lạc",
			"Bảo Lâm","Bảo Lâm",
			"Trùng Khánh","Trùng Khánh");
			break;
		case "Cà Mau":
			var cityOptions = new Array(
			"Tp Cà Mau","Tp Cà Mau",
			"Đầm Dơi","Đầm Dơi",
			"Thới Bình","Thới Bình",
			"Trần Văn Thời","Trần Văn Thời",
			"Năm Căn","Năm Căn",
			"Ngọc Hiến","Ngọc Hiến",
			"Phú Tân","Phú Tân",
			"Cái Nước","Cái Nước",
			"U Minh","U Minh");
			break;
		case "Cần Thơ":
			var cityOptions = new Array(
			"Ninh Kiều ","Ninh Kiều",
			"Bình Thủy","Bình Thủy",
			"Cái Răng","Cái Răng",
			"Ô Môn","Ô Môn",
			"Phong Điền","Phong Điền",
			"Cờ Đỏ","Cờ Đỏ",
			"Vĩnh Thạnh","Vĩnh Thạnh",
			"Thốt Nốt","Thốt Nốt");
			break;
		case "Gia Lai":
			var cityOptions = new Array(
			"Tp Pleiku","Tp Pleiku",
			"An Khê","An Khê",
			"Ayun Pa","Ayun Pa",
			"Đăk Pơ","Đăk Pơ",
			"Đăk Đoa","Đăk Đoa",
			"A Yun Pa","A Yun Pa",
			"Chư Păh","Chư Păh",
			"Chư Prông","Chư Prông",
			"Chư Sê","Chư Sê",
			"Đức Cơ","Đức Cơ",
			"Ia Grai","Ia Grai",
			"Kbang","Kbang",
			"Krông Pa","Krông Pa",
			"Kông Chro","Kông Chro",
			"Mang Yang","Mang Yang",
			"Ia Pa","Ia Pa",
			"Phú Thiện","Phú Thiện");
			break;
		case "Hà Giang":
			var cityOptions = new Array(
			"Thị xã Hà Giang","Thị xã Hà Giang",
			"Bắc Mê","Bắc Mê",
			"Đồng Văn","Đồng Văn",
			"Hoàng Su Phì","Hoàng Su Phì",
			"Mèo Vạc","Mèo Vạc",
			"Quang Bình","Quang Bình",
			"Quản Bạ","Quản Bạ",
			"Vị Xuyên","Vị Xuyên",
			"Xín Mần","Xín Mần",
			"Yên Minh","Yên Minh",
			"Bắc Quang","Bắc Quang");
			break;
		case "Đồng Tháp":
			var cityOptions = new Array(
			"Thành phố Cao Lãnh","Thành phố Cao Lãnh",
			"Thị xã Sa Đéc","Thị xã Sa Đéc",
			"Tháp Mười","Tháp Mười",
			"Thanh Bình","Thanh Bình",
			"Tân Hồng","Tân Hồng",
			"Tam Nông","Tam Nông",
			"Lấp Vò","Lấp Vò",
			"Lai Vung","Lai Vung",
			"Hồng Ngự","Hồng Ngự",
			"Châu Thành","Châu Thành",
			"Huyện Cao Lãnh","Huyện Cao Lãnh");
			break;
		case "Đồng Nai":
			var cityOptions = new Array(
			"Tp Biên Hòa","Tp Biên Hòa",
			"Long Khánh","Long Khánh",
			"Long Thành","Long Thành",
			"Nhơn Trạch","Nhơn Trạch",
			"Trảng Bom","Trảng Bom",
			"Thống Nhất","Thống Nhất",
			"Cẩm Mỹ","Cẩm Mỹ",
			"Vĩnh Cửu","Vĩnh Cửu",
			"Xuân Lộc","Xuân Lộc",
			"Định Quán","Định Quán",
			"Tân Phú","Tân Phú");
			break;
		case "Điện Biên":
			var cityOptions = new Array(
			"Tp Điện Biên Phủ","Tp Điện Biên Phủ",
			"Điện Biên","Điện Biên",
			"Điện Biên Đông","Điện Biên Đông",
			"Mường Ảng","Mường Ảng",
			"Mường Chà","Mường Chà",
			"Mường Nhé","Mường Nhé",
			"Tủa Chùa","Tủa Chùa",
			"Tuần Giáo","Tuần Giáo");
			break;
		case "Đắk Nông":
			var cityOptions = new Array(
			"Thị xã Gia Nghĩa","Thị xã Gia Nghĩa",
			"Cư Jút","Cư Jút",
			"Đăk Glong","Đăk Glong",
			"Đăk Mil","Đăk Mil",
			"Đăk R'Lấp","Đăk R'Lấp",
			"Đăk Song","Đăk Song",
			"Krông Nô","Krông Nô",
			"Tuy Đức","Tuy Đức");
			break;
		case "Đà Nẵng":
			var cityOptions = new Array(
			"Hải Châu","Hải Châu",
			"hanh Khê","hanh Khê",
			"Liên Chiểu","Liên Chiểu",
			"Sơn Trà","Sơn Trà",
			"Cẩm Lệ","Cẩm Lệ",
			"Ngũ Hành Sơn","Ngũ Hành Sơn",
			"Hòa Vang","Hòa Vang",
			"Hoàng Sa","Hoàng Sa");
			break;
		case "Đaklak":
			var cityOptions = new Array(
			"Tp Buôn Ma Thuột","Tp Buôn Ma Thuột",
			"Krông Buk","Krông Buk",
			"Krông Pak","Krông Pak",
			"Lắk","Lắk",
			"Ea Súp","Ea Súp",
			"M'Drăk","M'Drăk",
			"Krông Ana","Krông Ana",
			"Krông Bông","Krông Bông",
			"Ea H'leo","Ea H'leo",
			"Cư M'gar","Cư M'gar",
			"Krông Năng","Krông Năng",
			"Buôn Đôn","Buôn Đôn",
			"Ea Kar","Ea Kar",
			"Cư Kuin","Cư Kuin");
			break;
		case "Hà Nam":
			var cityOptions = new Array(
			"Tp Phủ Lý","Tp Phủ Lý",
			"Bình Lục","Bình Lục",
			"Duy Tiên","Duy Tiên",
			"Kim Bảng","Kim Bảng",
			"ý Nhân","",
			"Thanh Liêm","Thanh Liêm");
			break;
		case "Hà Tĩnh":
			var cityOptions = new Array(
			"Tp Hà Tĩnh","Tp Hà Tĩnh",
			"Thị xã Hồng Lĩnh","Thị xã Hồng Lĩnh",
			"Kỳ Anh","Kỳ Anh",
			"Lộc Hà","Lộc Hà",
			"Thạch Hà","Thạch Hà",
			"Can Lộc","Can Lộc",
			"Nghi Xuân","Nghi Xuân",
			"Đức Thọ","Đức Thọ",
			"Hương Sơn","Hương Sơn",			
			"Vũ Quang","Vũ Quang",
			"Cẩm Xuyên","Cẩm Xuyên");
			break;
		case "Hải Dương":
			var cityOptions = new Array(
			"Tp Hải Dương","Tp Hải Dương",
			"Chí Linh","Chí Linh",
			"Nam Sách","Nam Sách",
			"Kinh Môn","Kinh Môn",
			"Kim Thành","Kim Thành",
			"Thanh Hà","Thanh Hà",
			"Ninh Giang","Ninh Giang",
			"Gia Lộc","Gia Lộc",
			"Tứ Kỳ","Tứ Kỳ",
			"Thanh Miện","Thanh Miện",
			"Cẩm Giàng","Cẩm Giàng",
			"Bình Giang","Bình Giang");
			break;
		case "Tp.Hải Phòng":
			var cityOptions = new Array(
			"Dương Kinh","Dương Kinh",
			"Đồ Sơn","Đồ Sơn",
			"Hải An","Hải An",
			"Hồng Bàng","Hồng Bàng",
			"Kiến An","Kiến An",
			"Lê Chân","Lê Chân",
			"Ngô Quyền","Ngô Quyền",
			"An Dương","An Dương",
			"An Lão","An Lão",
			"Bạch Long Vĩ","Bạch Long Vĩ",
			"Cát Hải","Cát Hải",
			"Kiến Thụy","Kiến Thụy",
			"Thủy Nguyên","Thủy Nguyên",
			"Tiên Lãng","Tiên Lãng",
			"Vĩnh Bảo","Vĩnh Bảo");
			break;
		case "Hậu Giang":
			var cityOptions = new Array(
			"Thị xã Vị Thanh","Thị xã Vị Thanh",
			"Thị xã Ngã Bảy","Thị xã Ngã Bảy",
			"Long Mỹ","Long Mỹ",
			"Phụng Hiệp","Phụng Hiệp",
			"Châu Thành","Châu Thành",
			"Châu Thành A","Châu Thành A");
			break;
		case "Hoà Bình":
			var cityOptions = new Array(
			"Thị xã Hoà Bình","Thị xã Hoà Bình",
			"Cao Phong","Cao Phong",
			"Lương Sơn","Lương Sơn",
			"Kỳ Sơn","Kỳ Sơn",
			"Kim Bôi","Kim Bôi",
			"Lạc Thuỷ","Lạc Thuỷ",
			"Yên Thủy","Yên Thủy",
			"Đà Bắc","Đà Bắc",
			"Mai Châu","Mai Châu");
			break;
		case "Hưng Yên":
			var cityOptions = new Array(
			"Thị xã Hưng Yên","Thị xã Hưng Yên",
			"Ân Thi","Ân Thi",
			"Khoái Châu","Khoái Châu",
			"Kim Động","Kim Động",
			"Mỹ Hào","Mỹ Hào",
			"Phù Cừ","Phù Cừ",
			"Tiên Lữ","Tiên Lữ",
			"Văn Giang","Văn Giang",
			"Văn Lâm","Văn Lâm",
			"Yên Mỹ","Yên Mỹ");
			break;
		case "Khánh Hoà":
			var cityOptions = new Array(
			"Tp Nha Trang","Tp Nha Trang",
			"Thị xã Cam Ranh","Thị xã Cam Ranh",
			"Ninh Hòa","Ninh Hòa",
			"Diên Khánh","Diên Khánh",
			"Vạn Ninh","Vạn Ninh",
			"Cam Lâm","Cam Lâm",
			"Khánh Sơn","Khánh Sơn",
			"Khánh Vĩnh","Khánh Vĩnh",
			"Trường Sa","Trường Sa");
			break;
		case "Kiên Giang":
			var cityOptions = new Array(
			"Tp. Rạch Giá ","Tp. Rạch Giá ",
			"Thị xã Hà Tiên","Thị xã Hà Tiên",
			"An Biên","An Biên",
			"An Minh","An Minh",
			"Kiên Lương","Kiên Lương",
			"Hòn Đất","Hòn Đất",
			"Tân Hiệp","Tân Hiệp",
			"Châu Thành","Châu Thành",
			"Giồng Riềng","Giồng Riềng",
			"Gò Quao","Gò Quao",
			"Vĩnh Thuận","Vĩnh Thuận",
			"Phú Quốc","Phú Quốc",
			"Kiên Hải","Kiên Hải",
			"U Minh Thượng","U Minh Thượng");
			break;
		case "Kon Tum":
			var cityOptions = new Array(
			"Thị xã Kontum","Thị xã Kontum",
			"Đak Hà","Đak Hà",
			"Đăk Tô","Đăk Tô",
			"Ngọc Hồi","Ngọc Hồi",
			"Đăk Glei","Đăk Glei",
			"Sa Thầy","Sa Thầy",
			"Kon Rẩy","Kon Rẩy",
			"Kon Plong","Kon Plong",
			"TuMơRông","TuMơRông");
			break;
		case "Lai Châu":
			var cityOptions = new Array(
			"Thị xã Lai Châu","Thị xã Lai Châu",
			"Mường Tè","Mường Tè",
			"Phong Thổ","Phong Thổ",
			"Sìn Hồ","Sìn Hồ",
			"Tam Đường","Tam Đường",
			"Than Uyên","Than Uyên");
			break;
		case "Lào Cai":
			var cityOptions = new Array(
			"TP Lào Cai","TP Lào Cai",
			"Bát Xát","Bát Xát",
			"Bắc Hà","Bắc Hà",
			"Bảo Yên","Bảo Yên",
			"Mường Khương","Mường Khương",
			"Si Ma Cai","Si Ma Cai",
			"Sa Pa","Sa Pa",
			"Văn Bàn","Văn Bàn");
			break;
		case "Lâm Đồng":
			var cityOptions = new Array(
			"Tp Đà Lạt","Tp Đà Lạt",
			"Thị xã Bảo Lộc","Thị xã Bảo Lộc",
			"Lạc Dương","Lạc Dương",
			"Đơn Dương","Đơn Dương",
			"Đức Trọng","Đức Trọng",
			"Lâm Hà","Lâm Hà",
			"Di Linh","Di Linh",
			"Bảo Lâm","Bảo Lâm",
			"Đạ Huoai","Đạ Huoai",
			"Đạ Tẻh","Đạ Tẻh",
			"Cát Tiên","Cát Tiên",
			"Đam Rôn","Đam Rông");
			break;
		case "Long An":
			var cityOptions = new Array(
			"Thị xã Tân An","Thị xã Tân An",
			"Bến Lức","Bến Lức",
			"Cần Đước","Cần Đước",
			"Cần Giuộc","Cần Giuộc",
			"Châu Thành","Châu Thành",
			"Đức Hòa","Đức Hòa",
			"Đức Huệ","Đức Huệ",
			"Mộc Hóa","Mộc Hóa",
			"Tân Hưng","Tân Hưng",
			"Tân Thạnh","Tân Thạnh",
			"Tân Trụ","Tân Trụ",
			"Thạnh Hóa","Thạnh Hóa",
			"Thủ Thừa","Thủ Thừa",
			"Vĩnh Hưng","Vĩnh Hưng");
			break;
		case "Nam Định":
			var cityOptions = new Array(
			"Tp. Nam Định","Tp. Nam Định",
			"Hải Hậu","Hải Hậu",
			"Mỹ Lộc","Mỹ Lộc",
			"Vụ Bản","Vụ Bản",
			"Giao Thuỷ","Giao Thuỷ",
			"Ý Yên","Ý Yên",
			"Nam Trực","Nam Trực",
			"Trực Ninh","Trực Ninh",
			"Nghĩa Hưng","Nghĩa Hưng",
			"Xuân Trường","Xuân Trường");
			break;
		case "Nghệ An":
			var cityOptions = new Array(
			"Thị xã Thái Hòa","Thị xã Thái Hòa",										
			"Tp. Vinh","Tp. Vinh",
			"Thị xã Cửa Lò","Thị xã Cửa Lò",
			"Anh Sơn","Anh Sơn",
			"Diễn Châu","Diễn Châu",
			"Con Cuông","Con Cuông",
			"Quỳnh Lưu","Quỳnh Lưu",
			"Nam Đàn","Nam Đàn",
			"Đô Lương","Đô Lương",
			"Hưng Nguyên","Hưng Nguyên",
			"Nghi Lộc","Nghi Lộc",
			"Quế Phong","Quế Phong",
			"Quỳ Hợp","Quỳ Hợp",
			"Thanh Chương","Thanh Chương",
			"Tương Dương","Tương Dương",
			"Kỳ Sơn","Kỳ Sơn",
			"Nghĩa Đàn","Nghĩa Đàn",
			"Quỳ Châu","Quỳ Châu",
			"Tân Kỳ","Tân Kỳ",
			"Yên Thành","Yên Thành");
			break;
		case "Ninh Bình":
			var cityOptions = new Array(
			"Tp Ninh Bình","Tp Ninh Bình",
			"Thị xã Tam Điệp","Thị xã Tam Điệp",
			"Gia Viễn","Gia Viễn",
			"Hoa Lư","Hoa Lư",
			"Kim Sơn","Kim Sơn",
			"Nho Quan","Nho Quan",
			"Yên Khánh","Yên Khánh",
			"Yên Mô","Yên Mô");
			break;
		case "Ninh Thuận":
			var cityOptions = new Array(
			"Tp Phan Rang-Tháp Chàm","",
			"Bác Ái","Bác Ái",
			"Ninh Hải","Ninh Hải",
			"Ninh Phước","Ninh Phước",
			"Ninh Sơn","Ninh Sơn",
			"Thuận Bắc","Thuận Bắc");
			break;
		case "Phú Thọ":
			var cityOptions = new Array(
			"Tp Việt Trì","Tp Việt Trì",
			"Thị xã Phú Thọ","Thị xã Phú Thọ",
			"Cẩm Khê","Cẩm Khê",
			"Đoan Hùng","Đoan Hùng",
			"Hạ Hòa","Hạ Hòa",
			"Lâm Thao","Lâm Thao",
			"Phù Ninh","Phù Ninh",
			"Tam Nông","Tam Nông",
			"Tân Sơn","Tân Sơn",
			"Thanh Ba","Thanh Ba",
			"Thanh Sơn","Thanh Sơn",
			"Thanh Thủy","Thanh Thủy",
			"Yên Lập","Yên Lập");
			break;
		case "Phú Yên":
			var cityOptions = new Array(
			"Tp Tuy Hòa","Tp Tuy Hòa",
			"Đông Hòa","Đông Hòa",
			"Đồng Xuân","Đồng Xuân",
			"Phú Hòa","Phú Hòa",
			"Sơn Hòa","Sơn Hòa",
			"Sông Cầu","Sông Cầu",
			"Sông Hinh","Sông Hinh",
			"Tây Hòa","Tây Hòa",
			"Tuy An","Tuy An");
			break;
		case "Quảng Bình":
			var cityOptions = new Array(
			"Tp Đồng Hới","Tp Đồng Hới",
			"Bố Trạch","Bố Trạch",
			"Lệ Thủy","Lệ Thủy",
			"Minh Hóa","Minh Hóa",
			"Quảng Trạch","Quảng Trạch",
			"Quảng Ninh","Quảng Ninh",
			"Tuyên Hóa","Tuyên Hóa");
			break;
		case "Quảng Nam":
			var cityOptions = new Array(
			"Tp Tam Kỳ","Tp Tam Kỳ",
			"Tp Hội An","Tp Hội An",
			"Duy Xuyên","Duy Xuyên",
			"Đại Lộc","Đại Lộc",
			"Điện Bàn","Điện Bàn",
			"Đông Giang","Đông Giang",
			"Nam Giang","Nam Giang",
			"Tây Giang","Tây Giang",
			"Quế Sơn","Quế Sơn",
			"Hiệp Đức","Hiệp Đức",
			"Núi Thành","Núi Thành",
			"Nam Trà My","Nam Trà My",
			"Bắc Trà My","Bắc Trà My",
			"Phú Ninh","Phú Ninh",
			"Phước Sơn","Phước Sơn",
			"Thăng Bình","Thăng Bình",
			"Tiên Phước","Tiên Phước",
			"Nông Sơn","Nông Sơn");
			break;
		case "Quảng Ngãi":
			var cityOptions = new Array(
			"Tp Quảng Ngãi","Tp Quảng Ngãi",
			"Ba Tơ","Ba Tơ",
			"Bình Sơn","Bình Sơn",
			"Đức Phổ","Đức Phổ",
			"Minh Long","Minh Long",
			"Mộ Đức","Mộ Đức",
			"Sơn Hà","Sơn Hà",
			"Sơn Tây","Sơn Tây",
			"Sơn Tịnh","Sơn Tịnh",
			"Tây Trà","Tây Trà",
			"Trà Bồng","Trà Bồng",
			"Tư Nghĩa","Tư Nghĩa",
			"Lý Sơn","Lý Sơn");
			break;
		case "Quảng Ninh":
			var cityOptions = new Array(
			"Tp Hạ Long","Tp Hạ Long",
			"Thị xã Cẩm Phả","Thị xã Cẩm Phả",
			"Thị xã Móng Cái","Thị xã Móng Cái",
			"Thị xã Uông Bí","Thị xã Uông Bí",
			"Ba Chẽ","Ba Chẽ",
			"Bình Liêu","Bình Liêu",
			"Đầm Hà","Đầm Hà",
			"Đông Triều","Đông Triều",
			"Hải Hà","Hải Hà",
			"Hoành Bồ","Hoành Bồ",
			"Tiên Yên","Tiên Yên",
			"Vân Đồn","Vân Đồn",
			"Yên Hưng","Yên Hưng");
			break;
		case "Quảng Trị":
			var cityOptions = new Array(
			"Thị xã Đông Hà","Thị xã Đông Hà",
			"Thị xã Quảng Trị","Thị xã Quảng Trị",
			"Cam Lộ","Cam Lộ",
			"Cồn Cỏ","Cồn Cỏ",
			"Đa Krông","Đa Krông",
			"Gio Linh","Gio Linh",
			"Hải Lăng","Hải Lăng",
			"Hướng Hóa","Hướng Hóa",
			"Triệu Phong","Triệu Phong",
			"Vĩnh Linh","Vĩnh Linh");
			break;
		case "Sóc Trăng":
			var cityOptions = new Array(
			"Tp Sóc Trăng","Tp Sóc Trăng",
			"Long Phú","Long Phú",
			"Cù Lao Dung","Cù Lao Dung",
			" Mỹ Tú"," Mỹ Tú",
			"Thạnh Trị","Thạnh Trị",
			"Vĩnh Châu","Vĩnh Châu",
			"Ngã Năm","Ngã Năm",
			"Kế Sách","Kế Sách",
			"Mỹ Xuyên","Mỹ Xuyên");
			break;
		case "Sơn La":
			var cityOptions = new Array(
			"Tp Sơn La","Tp Sơn La",
			"Quỳnh Nhai","Quỳnh Nhai",
			"Mường La","Mường La",
			"Thuận Châu","Thuận Châu",
			"Phù Yên","Phù Yên",
			"Bắc Yên","Bắc Yên",
			"Mai Sơn","Mai Sơn",
			"Sông Mã","Sông Mã",
			"Yên Châu","Yên Châu",
			"Mộc Châu","Mộc Châu",
			"Sốp Cộp","Sốp Cộp");
			break;
		case "Tây Ninh":
			var cityOptions = new Array(
			"Thị xã Tây Ninh","Thị xã Tây Ninh",
			"Tân Biên","Tân Biên",
			"Tân Châu","Tân Châu",
			"Dương Minh Châu","Dương Minh Châu",
			"Châu Thành","Châu Thành",
			"Hòa Thành","Hòa Thành",
			"Bến Cầu","Bến Cầu",
			"Gò Dầu","Gò Dầu",
			"Trảng Bàng","Trảng Bàng");
			break;
		case "Thanh Hoá":
			var cityOptions = new Array(
			"Tp Thanh Hóa","Tp Thanh Hóa",
			"Thị xã Bỉm Sơn","Thị xã Bỉm Sơn",
			"Thị xã Sầm Sơn","Thị xã Sầm Sơn",
			"Bá Thước","Bá Thước",
			"Cẩm Thủy","Cẩm Thủy",
			"Đông Sơn","Đông Sơn",
			"Hà Trung","Hà Trung",
			"Hậu Lộc","Hậu Lộc",
			"Hoằng Hóa","Hoằng Hóa",
			"Lang Chánh","Lang Chánh",
			"Mường Lát","Mường Lát",
			"Nga Sơn","Nga Sơn",
			"Ngọc Lặc","Ngọc Lặc",
			"Như Thanh","Như Thanh",
			"Như Xuân","Như Xuân",
			"Nông Cống","Nông Cống",
			"Quan Hóa","Quan Hóa",
			"Quan Sơn","Quan Sơn",
			"Quảng Xương","Quảng Xương",
			"Thạch Thành","Thạch Thành",
			"Thiệu Hóa","Thiệu Hóa",
			"Thọ Xuân","Thọ Xuân",
			"Thường Xuân","Thường Xuân",
			"Tĩnh Gia","Tĩnh Gia",
			"Triệu Sơn","Triệu Sơn",
			"Vĩnh Lộc","Vĩnh Lộc",
			"Yên Định","Yên Định");
			break;
		case "Thái Bình":
			var cityOptions = new Array(
			"Tp Thái Bình","Tp Thái Bình",
			"Thái Thuỵ","Thái Thuỵ",
			"Tiền Hải","Tiền Hải",
			"Đông Hưng","Đông Hưng",
			"Vũ Thư","Vũ Thư",
			"Kiến Xương","Kiến Xương",
			"Quỳnh Phụ","Quỳnh Phụ",
			"Hưng Hà","Hưng Hà");
			break;
		case "Thái Nguyên":
			var cityOptions = new Array(
			"Tp Thái Nguyên","Tp Thái Nguyên",
			"Thị xã Sông Công","Thị xã Sông Công",
			"Phổ Yên","Phổ Yên",
			"Phú Bình","Phú Bình",
			" Đồng Hỷ"," Đồng Hỷ",
			"Võ Nhai","Võ Nhai",
			"Định Hóa","Định Hóa",
			"Đại Từ","Đại Từ",
			"Phú Lương","Phú Lương");
			break;
		case "Thừa Thiên Huế":
			var cityOptions = new Array(
			"Thành phố Huế","Thành phố Huế",
			"A Lưới","A Lưới",
			"Phú Lộc","Phú Lộc",
			"Hương Thủy","Hương Thủy",
			"Phú Vang","Phú Vang",
			"Hương Trà","Hương Trà",
			"Quảng Điền","Quảng Điền",
			"Nam Đông","Nam Đông");
			break;
		case "Tiền Giang":
			var cityOptions = new Array(
			"Tp Mỹ Tho","Tp Mỹ Tho",
			"Thị xã Gò Công","Thị xã Gò Công",
			"Cái Bè","Cái Bè",
			"Cai Lậy","Cai Lậy",
			"Châu Thành","Châu Thành",
			"Tân Phước","Tân Phước",
			"Chợ Gạo","Chợ Gạo",
			"Gò Công Tây","Gò Công Tây",
			"Gò Công Đông","Gò Công Đông",
			"Tân Phú Đông","Tân Phú Đông");
			break;
		case "Trà Vinh":
			var cityOptions = new Array(
			"Thị xã Trà Vinh","Thị xã Trà Vinh",
			"Trà Cú","Trà Cú",
			"Duyên Hải","Duyên Hải",
			"Cầu Ngang","Cầu Ngang",
			"Châu Thành","Châu Thành",
			"Cầu Kè","Cầu Kè",
			"Tiểu Cần","Tiểu Cần",
			"Càng Long ","Càng Long ");
			break;
		case "Tuyên Quang":
			var cityOptions = new Array(
			"Thị xã Tuyên Quang ","Thị xã Tuyên Quang ",
			"Na Hang ","Na Hang ",
			"Chiêm Hoá","Chiêm Hoá",
			"Hàm Yên ","Hàm Yên ",
			"Yên Sơn ","Yên Sơn ",
			"Sơn Dương ","Sơn Dương ");
			break;
		case "Vĩnh Long":
			var cityOptions = new Array(
			"Thị xã Vĩnh Long","Thị xã Vĩnh Long",
			"Long Hồ","Long Hồ",
			"Mang Thít","Mang Thít",
			"Tam Bình","Tam Bình",
			"Bình Minh","Bình Minh",
			"Vũng Liêm","Vũng Liêm",
			"Trà Ôn","Trà Ôn");
			break;
		case "Vĩnh Phúc":
			var cityOptions = new Array(
			"Tp Vĩnh Yên","Tp Vĩnh Yên",
			"Thị xã Phúc Yên","Thị xã Phúc Yên",
			"Vĩnh Tường","Vĩnh Tường",
			"Bình Xuyên","Bình Xuyên",
			"Yên Lạc","Yên Lạc",
			"Tam Dương","Tam Dương",
			"Tam Đảo ","Tam Đảo ",
			"Lập Thạch","Lập Thạch");
			break;
		case "Yên Bái":
			var cityOptions = new Array(
			"Tp Yên Bái","Tp Yên Bái",
			"Thị xã Nghĩa Lộ","Thị xã Nghĩa Lộ",
			"Lục Yên","Lục Yên",
			"Mù Cang Chải","Mù Cang Chải",
			"Trấn Yên","Trấn Yên",
			"Trạm Tấu","Trạm Tấu",
			"Văn Chấn","Văn Chấn",
			"Văn Yên","Văn Yên",
			"Yên Bình","Yên Bình");
			break;
        case "Nước ngoài" :
            var cityOptions = new Array(
						  "Canada","Canada", 
						  "Afghanistan ","Afghanistan",
                          "Albania","Albania ",
                          "Algeria ","Algeria ",
                          "American Samoa ","American Samoa ",
                          "Andorra","Andorra ",
                          "Angola ","Angola ",
                          "Anguilla ","Anguilla ",
                          "Antarctica ","Antarctica ",
                          "Antigua and Barbuda ","Antigua and Barbuda ",
                          "Argentina","Argentina ",
                          "Armenia ","Armenia ",
                          "Aruba ","Aruba ",
                          "Australia","Australia ",
                          "Austria","Austria ",
                          "Azerbaijan","Azerbaijan ",
                          "Bahamas","Bahamas ",
                          "Bahrain","Bahrain ",
                          "Bangladesh","Bangladesh ",
                          "Barbados","Barbados ",
                          "Belarus","Belarus ",
                          "Belgium","Belgium ",
                          "Belize","Belize ",
                          "Benin","Benin ",
                          "Bermuda","Bermuda ",
                          "Bhutan","Bhutan ",
                          "Bolivia","Bolivia ",
                          "Bosnia and Herzegovina","Bosnia and Herzegovina ",
                          "Botswana","Botswana ",
                          "Bouvet Island","Bouvet Island ",
                          "Brazil","Brazil ",
                          "British Indian Ocean Territory","British Indian Ocean Territory ",
                          "British Virgin Islands","British Virgin Islands ",
                          "Brunei","Brunei ",
                          "Bulgaria","Bulgaria ",
                          "Burkina Faso","Burkina Faso ",
                          "Burundi","Burundi ",
                          "Cambodia","Cambodia ",
                          "Cameroon","Cameroon ",
                          "Cape Verde","Cape Verde ",
                          "Cayman Islands","Cayman Islands ",
                          "Central African Republic","Central African Republic ",
                          "Chad","Chad ",
                          "Chile","Chile ",
                          "China","China ",
                          "Christmas Island","Christmas Island ",
                          "Cocos Islands","Cocos Islands ",
                          "Colombia","Colombia ",
                          "Comoros","Comoros ",
                          "Congo","Congo ",
                          "Cook Islands","Cook Islands ",
                          "Costa Rica","Costa Rica ",
                          "Croatia","Croatia ",
                          "Cuba","Cuba ",
                          "Cyprus","Cyprus ",
                          "Czech Republic","Czech Republic ",
                          "Denmark","Denmark ",
                          "Djibouti","Djibouti ",
                          "Dominica","Dominica ",
                          "Dominican Republic","Dominican Republic ",
                          "East Timor","East Timor ",
                          "Ecuador","Ecuador ",
                          "Egypt","Egypt ",
                          "El Salvador","El Salvador ",
                          "Equatorial Guinea","Equatorial Guinea ",
                          "Eritrea","Eritrea ",
                          "Estonia","Estonia ",
                          "Ethiopia","Ethiopia ",
                          "Falkland Islands","Falkland Islands ",
                          "Faroe Islands","Faroe Islands ",
                          "Fiji","Fiji ",
                          "Finland","Finland ",
                          "France","France ",
                          "French Guiana","French Guiana ",
                          "French Polynesia","French Polynesia ",
                          "French Southern Territories","French Southern Territories ",
                          "Gabon","Gabon ",
                          "Gambia","Gambia ",
                          "Georgia","Georgia ",
                          "Germany","Germany ",
                          "Ghana","Ghana ",
                          "Gibraltar","Gibraltar ",
                          "Greece","Greece ",
                          "Greenland","Greenland ",
                          "Grenada","Grenada ",
                          "Guadeloupe","Guadeloupe ",
                          "Guam","Guam ",
                          "Guatemala","Guatemala ",
                          "Guinea","Guinea ",
                          "Guinea-Bissau","Guinea-Bissau ",
                          "Guyana","Guyana ",
                          "Haiti","Haiti ",
                          "Heard and McDonald Islands","Heard and McDonald Islands ",
                          "Honduras","Honduras ",
                          "Hong Kong","Hong Kong ",
                          "Hungary","Hungary ",
                          "Iceland","Iceland ",
                          "India","India ",
                          "Indonesia","Indonesia ",
                          "Iran","Iran ",
                          "Iraq","Iraq ",
                          "Ireland","Ireland ",
                          "Israel","Israel ",
                          "Italy","Italy ",
                          "Ivory Coast","Ivory Coast ",
                          "Jamaica","Jamaica ",
                          "Japan","Japan ",
                          "Jordan","Jordan ",
                          "Kazakhstan","Kazakhstan ",
                          "Kenya","Kenya ",
                          "Kiribati","Kiribati ",
                          "Korea, North","Korea, North ",
                          "Korea, South","Korea, South ",
                          "Kuwait","Kuwait ",
                          "Kyrgyzstan","Kyrgyzstan ",
                          "Laos","Laos ",
                          "Latvia","Latvia ",
                          "Lebanon","Lebanon ",
                          "Lesotho","Lesotho ",
                          "Liberia","Liberia ",
                          "Libya","Libya ",
                          "Liechtenstein","Liechtenstein ",
                          "Lithuania","Lithuania ",
                          "Luxembourg","Luxembourg ",
                          "Macau","Macau ",
                          "Macedonia, Former Yugoslav Republic of","Macedonia, Former Yugoslav Republic of ",
                          "Madagascar","Madagascar ",
                          "Malawi","Malawi ",
                          "Malaysia","Malaysia ",
                          "Maldives","Maldives ",
                          "Mali","Mali ",
                          "Malta","Malta ",
                          "Marshall Islands","Marshall Islands ",
                          "Martinique","Martinique ",
                          "Mauritania","Mauritania ",
                          "Mauritius","Mauritius ",
                          "Mayotte","Mayotte ",
                          "Mexico","Mexico ",
                          "Micronesia, Federated States of","Micronesia, Federated States of ",
                          "Moldova","Moldova ",
                          "Monaco","Monaco ",
                          "Mongolia","Mongolia ",
                          "Montserrat","Montserrat ",
                          "Morocco","Morocco ",
                          "Mozambique","Mozambique ",
                          "Myanmar","Myanmar ",
                          "Namibia","Namibia ",
                          "Nauru","Nauru ",
                          "Nepal","Nepal ",
                          "Netherlands","Netherlands ",
                          "Netherlands Antilles","Netherlands Antilles ",
                          "New Caledonia","New Caledonia ",
                          "New Zealand","New Zealand ",
                          "Nicaragua","Nicaragua ",
                          "Niger","Niger ",
                          "Nigeria","Nigeria ",
                          "Niue","Niue ",
                          "Norfolk Island","Norfolk Island ",
                          "Northern Mariana Islands","Northern Mariana Islands ",
                          "Norway","Norway ",
                          "Oman","Oman ",
                          "Pakistan","Pakistan ",
                          "Palau","Palau ",
                          "Panama","Panama ",
                          "Papua New Guinea","Papua New Guinea ",
                          "Paraguay","Paraguay ",
                          "Peru","Peru ",
                          "Philippines","Philippines ",
                          "Pitcairn Island","Pitcairn Island ",
                          "Poland","Poland ",
                          "Portugal","Portugal ",
                          "Puerto Rico","Puerto Rico ",
                          "Qatar","Qatar ",
                          "Reunion","Reunion ",
                          "Romania","Romania ",
                          "Russia","Russia ",
                          "Rwanda","Rwanda ",
                          "S. Georgia and S. Sandwich Isls.","S. Georgia and S. Sandwich Isls.", 
                          "Saint Kitts & Nevis","Saint Kitts & Nevis ",
                          "Saint Lucia","Saint Lucia ",
                          "Saint Vincent and The Grenadines","Saint Vincent and The Grenadines ",
                          "Samoa","Samoa ",
                          "San Marino","San Marino ",
                          "Sao Tome and Principe","Sao Tome and Principe ",
                          "Saudi Arabia","Saudi Arabia ",
                          "Senegal","Senegal", 
                          "Seychelles","Seychelles ",
                          "Sierra Leone","Sierra Leone ",
                          "Singapore","Singapore ",
                          "Slovakia","Slovakia ",
                          "Slovenia","Slovenia ",
                          "Somalia","Somalia ",
                          "South Africa","South Africa ",
                          "Spain","Spain ",
                          "Sri Lanka","Sri Lanka ",
                          "St. Helena","St. Helena ",
                          "St. Pierre and Miquelon","St. Pierre and Miquelon ",
                          "Sudan","Sudan ",
                          "Suriname","Suriname ",
                          "Svalbard and Jan Mayen Islands","Svalbard and Jan Mayen Islands ",
                          "Swaziland","Swaziland ",
                          "Sweden","Sweden ",
                          "Switzerland","Switzerland ",
                          "Syria","Syria ",
                          "Taiwan","Taiwan ",
                          "Tajikistan","Tajikistan ",
                          "Tanzania","Tanzania ",
                          "Thailand","Thailand ",
                          "Togo","Togo ",
                          "Tokelau","Tokelau ",
                          "Tonga","Tonga ",
                          "Trinidad and Tobago","Trinidad and Tobago ",
                          "Tunisia","Tunisia ",
                          "Turkey","Turkey ",
                          "Turkmenistan","Turkmenistan ",
                          "Turks and Caicos Islands","Turks and Caicos Islands ",
                          "Tuvalu","Tuvalu ",
                          "U.S. Minor Outlying Islands","U.S. Minor Outlying Islands ",
                          "Uganda","Uganda ",
                          "Ukraine","Ukraine ",
                          "United Arab Emirates","United Arab Emirates ",
                          "United Kingdom","United Kingdom ",
				          "United States of America","United States of America", 
                          "Uruguay","Uruguay ",
                          "Uzbekistan","Uzbekistan ",
                          "Vanuatu","Vanuatu ",
                          "Vatican City","Vatican City ",
                          "Venezuela","Venezuela ",
                          "Virgin Islands","Virgin Islands ",
                          "Wallis and Futuna Islands","Wallis and Futuna Islands ",
                          "Western Sahara","Western Sahara ",
                          "Yemen","Yemen ",
                          "Yugoslavia (Former)","Yugoslavia (Former) ",
                          "Zaire","Zaire ",
                          "Zambia","Zambia ",
                          "Zimbabwe","Zimbabwe");
            break;
        default:
            var cityOptions = new Array("Chọn Huyện/Thị!", "");
            break;
    }
	
	var cityObject = document.getElementById(cityid);
	cityObject.options.length = 0;
	cityObject.options[0] = new Option("Chọn Huyện/Thị", "");
	var j = 0;
	for(var i = 0; i < cityOptions.length/2; i++) {
		j = i + 1;
	    cityObject.options[j] = new Option(cityOptions[i*2],cityOptions[i*2+1]);
	}
}

function initprovcity(provinceid, province) {
	var provObject = document.getElementById(provinceid);
    for(var i = 0; i < provObject.options.length; i++) {
        if (provObject.options[i].value == province) {
        	provObject.selectedIndex = i;
			break;
        }
    }
    //setcity(provinceid, cityid);
}

function showprovince(provinceid, cityid, province) {
	var provinces = new Array(
		"Hà Nội","An Giang","Tp Hồ Chí Minh","Bà Rịa - Vũng Tàu","Bình Dương","Bình Phước","Bình Thuận","Bình Định","Bạc Liêu","Bắc Giang","Bắc Kạn","Bắc Ninh","Bến Tre","Cao Bằng","Cà Mau","Cần Thơ","Gia Lai","Hà Giang","Đồng Tháp","Đồng Nai","Điện Biên","Đắk Nông","Đà Nẵng","Đaklak","Hà Nam","Hà Tĩnh","Hải Dương","Tp.Hải Phòng","Hậu Giang","Hoà Bình","Hưng Yên","Khánh Hoà","Kiên Giang","Kon Tum","Lai Châu","Lào Cai","Lâm Đồng","Long An","Nam Định","Nghệ An","Ninh Bình","Ninh Thuận","Phú Thọ","Phú Yên","Quảng Bình","Quảng Nam","Quảng Ngãi","Quảng Ninh","Quảng Trị","Sóc Trăng","Sơn La","Tây Ninh","Thanh Hoá","Thái Bình","Thái Nguyên","Thừa Thiên Huế","Tiền Giang","Trà Vinh","Tuyên Quang","Vĩnh Long","Vĩnh Phúc","Yên Bái","Chọn Nước ngoài");

	var html = "<select name=\"" + provinceid + "\" id=\"" + provinceid + "\" onchange=\"setcity('" + provinceid + "', '" + cityid + "');\">";
	html = html + "<option value=\"\">Chọn Tỉnh thành</option>";
	for(var i = 0; i < provinces.length; i++) {
		html = html + "<option value=\"" + provinces[i] + "\">" + provinces[i] + "</option>";
	}
	html = html + "</select>";
	document.write(html);

	initprovcity(provinceid, province);

}

function showcity(cityid, city) {
	var html = "&nbsp;<select name=\"" + cityid + "\" id=\"" + cityid + "\">";
	if(city == "") {
		html = html + "<option value=\"\">Chọn Huyện/Thị</option>";
	} else {
		html = html + "<option value=\"" + city + "\">" + city + "</option>";
	}
	html = html + "</select>";
	document.write(html);
}
