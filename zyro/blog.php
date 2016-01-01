<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.16" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1451485801" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1451485801" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_main" style="height: 200px;">
	
<div id="wb_element_instance57" class="wb_element"><ul class="hmenu"><li><a href="Trang-ch%E1%BB%A7/" target="_self" title="Trang chủ">Trang chủ</a></li><li><a href="Hu%E1%BA%A5n-luy%E1%BB%87n-l%C3%A0-g%C3%AC/" target="_self" title="Huấn luyện là gì?">Huấn luyện là gì?</a></li><li><a href="C%C3%A2u-chuy%E1%BB%87n-th%C3%A0nh-c%C3%B4ng/" target="_self" title="Câu chuyện thành công">Câu chuyện thành công</a></li><li><a href="Li%C3%AAn-h%E1%BB%87/" target="_self" title="Liên hệ">Liên hệ</a></li></ul></div><div id="wb_element_instance58" class="wb_element"><div></div></div><div id="wb_element_instance59" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle" style="text-align: center;"><a href="Trang-ch%E1%BB%A7/">Huấn luyện</a></h4></div><div id="wb_element_instance60" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2015 <a href="http://hocdientu.tk">hocdientu.tk</a></p></div><div id="wb_element_instance61" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">L <i class="icon-wb-logo"></i><a href="http://zyro.com/examples/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "9201a4be47518cada1e3dca4d52d2eec", cont: "wb_element_instance61"});

				(function() {
					var script = document.createElement("script");
					var src = "http://zyro.com/examples/getjs/";
					script.type = "text/javascript";
					script.async = true;
					script.src = src.replace(/http.*:/, location.protocol);
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance62" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance62");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance62").hide();
				});
			</script>
			<?php
				}
			?>
			</div><div id="wb_element_instance63" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(0);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>