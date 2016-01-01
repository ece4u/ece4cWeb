<?php switch ($_REQUEST['frame']){

	case "product" :
		$cat = 0;
		if ($_REQUEST['cat']!= '') $cat = killInjection($_REQUEST['cat']);
		$catInfo = getRecord("tbl_product_category","id=".$cat);
		$title = $catInfo['name'];
		break;	
		
	case "product_detail" : $title = $_lang=="vn" ? "Thông tin chi tiết" : "PRODUCT DETAIL";break;													
	//--------------------------------------------------------------------------------------------	
	case "cart"    		   : $title = $_lang=="vn" ? "Giỏ hàng" : "CART";	break;
	case "customer" 	   : $title = $_lang=="vn" ? "Khách hàng" : "Khách hàng";	break;
	case "contact"         : $title = $_lang=="vn" ? "Liên hệ" : "CONTACT";	break;
	case "intro"           : $title = $_lang=="vn" ? "Giới thiệu" : "INTRODUCTION";break;
	case "news"            : $title = $_lang=="vn" ? "Tin tức & Sự kiện" : "NEWS & EVENT";break;
	case "news_detail"     : $title = $_lang=="vn" ? "Thông tin chi tiết" : "NEWS DETAIL";break;
	case "service"  	   : $title = $_lang=="vn" ? "Dịch vụ" : "Service";break;
	case "checkout"  	   : $title = $_lang=="vn" ? "Thông tin đơn hàng" : "Order";break;
	case "search"          : $title = $_lang=="vn" ? "Kết quả tìm kiếm" : "RETURN SEARCH";break;
	case "registry"        : $title = $_lang=="vn" ? "Đăng ký thành viên" : "REGISTRY";break;
	case "member"          : $title = $_lang=="vn" ? "Thành viên" : "LOGIN";break;
	case "login"           : $title = $_lang=="vn" ? "Ðăng nhập" : "LOGIN";break;
	case "forgotpass"      : $title = $_lang=="vn" ? "Quên mật khẩu" : "Forgot password";break;	
	case "changepassword"  : $title = $_lang=="vn" ? "Đổi mật khẩu" : "Change password";break;		
	
	case "home"            : $title = $_lang=="vn" ? "Sản phẩm mới" : "New product";break;
        case "about"           : $title = $_lang=="vn" ? "V&#7873; ch�ng t�i" : "New product";break;
        case "learnmcu"        : $title = $_lang=="vn" ? "H&#7885;c Vi &#272;i&#7873;u Khi&#7875;n" : "New product";break;
        case "learnchipdesign"           : $title = $_lang=="vn" ? "H&#7885;c Verilog/VHDL" : "New product";break;
        case "learnc_cplus"        : $title = $_lang=="vn" ? "H&#7885;c C/C++" : "New product";break;
        case "learnhwdesign"        : $title = $_lang=="vn" ? "H&#7885;c Thi&#7871;t K&#7871; Ph&#7847;n C&#7913;ng" : "New product";break;
        case "showproducts"        : $title = $_lang=="vn" ? "S&#7843;n Ph&#7849;m &#7912;ng D&#7909;ng" : "New product";break;
        case "tool"        : $title = $_lang=="vn" ? "C�ng C&#7909; H&#7895; Tr&#7907;" : "New product";break;
	default                : $title = $_lang=="vn" ? "Sản phẩm mới" : "New product";break;

}
echo $title;
?>
