<?php switch (addslashes($_REQUEST['frame'])){

	//----------------------Product-------------------------------------------------------------
	case "product"			: include("module/product.php");break;		
	case "product_new"		: include("module/product_new.php");break;		
	case "product_detail"	: include("module/product_detail.php");break;		
	//---------------------- Content------------------------------------------------------------
	case "intro"          	: include("module/intro.php");break;
	case "service"			: include("module/single.php");break;	
	case "contact"          : include("module/contact.php");break;	
	//----------------------News----------------------------------------------------------------
	case "news"             : include("module/news.php");break;
	case "news_detail"      : include("module/news_detail.php");break;	
		
	case "search"           : include("module/search.php");break;
	case "registry"         : include("module/member_registry.php");break;
	case "login"            : include("module/member_login.php");break;
	case "forgotpass"       : include("module/member_forgotpass.php");break;
	case "customer"         : include("module/customer.php");break;
	case "changepassword"   : include("module/member_changepassword.php");break;
	case "cart"		        : include("module/cart.php");break;
	case "checkout"	        : include("module/checkout.php");break;
	
	case "logout"           : 
		unset($_SESSION['member']);
		echo "<script>window.location='./?frame=login'</script>";
		break;
	case "forum"            : echo "<script>window.location='forum'</script>";break;
		
	case "home"             : include("module/home.php");break;
        case "about"           : include("module/about.php");break;
        case "learnmcu"        : include("module/learnmcu.php");break;
        case "learnchipdesign"           : include("module/learnchipdesign.php");break;
        case "learnc_cplus"        : include("module/learnc_cplus.php");break;
        case "learnhwdesign"        :include("module/learnhwdesign.php");break;
        case "showproducts"        : include("module/showproducts.php");break;
        case "tool"        : include("module/tool.php");break;
        case "tool_details" : include("module/tool_details.php");break;
	default                 : include("module/home.php");break;

}
?>