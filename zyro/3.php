<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Liên hệ</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.16" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1451485800" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1451485800" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance27" class="wb_element"><ul class="hmenu"><li><a href="Trang-ch%E1%BB%A7/" target="_self" title="Trang chủ">Trang chủ</a></li><li><a href="Hu%E1%BA%A5n-luy%E1%BB%87n-l%C3%A0-g%C3%AC/" target="_self" title="Huấn luyện là gì?">Huấn luyện là gì?</a></li><li><a href="C%C3%A2u-chuy%E1%BB%87n-th%C3%A0nh-c%C3%B4ng/" target="_self" title="Câu chuyện thành công">Câu chuyện thành công</a></li><li class="active"><a href="Li%C3%AAn-h%E1%BB%87/" target="_self" title="Liên hệ">Liên hệ</a></li></ul></div><div id="wb_element_instance28" class="wb_element"><div></div></div><div id="wb_element_instance29" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle" style="text-align: center;"><a href="Trang-ch%E1%BB%A7/">Huấn luyện</a></h4></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance32" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">Giới thiệu chúng tôi trong template Giới thiệu chúng tôi trong template Giới thiệu chúng tôi trong template Giới thiệu chúng tôi trong template Giới thiệu chúng tôi trong template Giới thiệu chúng tôi...</p></div><div id="wb_element_instance33" class="wb_element"><form class="wb_form" method="post"><input type="hidden" name="wb_form_id" value="1856673c"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th class="wb-stl-normal">Tên&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Tên"><input class="form-field" type="text" value="" name="wb_input_0"></td></tr><tr><th class="wb-stl-normal">Email&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="Email"><input class="form-field" type="text" value="" name="wb_input_1"></td></tr><tr class="area-row"><th class="wb-stl-normal">Thư&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Thư"><textarea class="form-field form-area-field" rows="3" cols="20" name="wb_input_2"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn">Áp dụng</button></td></tr></table></form><script type="text/javascript">
			var formValues = <?php echo json_encode($_POST); ?>;
			var formErrors = <?php global $formErrors; echo json_encode($formErrors); ?>;
			wb_form_validateForm("1856673c", formValues, formErrors);
			<?php global $wb_form_send_state; if (isset($wb_form_send_state) && $wb_form_send_state) { ?>
				setTimeout(function() {
					alert("<?php echo addcslashes($wb_form_send_state, "\\'\"&\n\r\0\t<>"); ?>");
				}, 1);
			<?php } ?>	
			</script></div><div id="wb_element_instance34" class="wb_element"><div></div></div><div id="wb_element_instance35" class="wb_element" style=" line-height: normal;"><h2 class="wb-stl-heading2">Liên hệ</h2></div><div id="wb_element_instance36" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">+00 000 00000</p>
<p class="wb-stl-normal">Tòa nhà Empire State</p>
<p class="wb-stl-normal">350 5th Ave</p>
<p class="wb-stl-normal">New York</p>
<p class="wb-stl-normal">NY 10118</p>
<p class="wb-stl-normal">USA</p></div><div id="wb_element_instance37" class="wb_element"><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places"></script><script type="text/javascript">
				function initialize() {
					if (window.google) {
						var div = document.getElementById("wb_element_instance37");
						var ll = new google.maps.LatLng(40.689247,-74.044502);
						var map = new google.maps.Map(div, {
							zoom: 16,
							center: ll,
							mapTypeId: "roadmap"
						});
						
						var marker = new google.maps.Marker({
							position: ll,
							clickable: false,
							map: map
						});
					}
				}
				google.maps.event.addDomListener(window, "load", initialize);
			</script></div><div id="wb_element_instance38" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(3);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance38");
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
					$("#wb_element_instance38").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 135px;">
	
<div id="wb_element_instance30" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2015 <a href="http://hocdientu.tk">hocdientu.tk</a></p></div><div id="wb_element_instance31" class="wb_element"><div class="wb-stl-footer" style="white-space: nowrap;">L <i class="icon-wb-logo"></i><a href="http://zyro.com/examples/" target="_blank" title="Zyro - Website Builder">Zyro</a></div><script type="text/javascript">
				var _siteProBadge = _siteProBadge || [];
				_siteProBadge.push({hash: "9201a4be47518cada1e3dca4d52d2eec", cont: "wb_element_instance31"});

				(function() {
					var script = document.createElement("script");
					var src = "http://zyro.com/examples/getjs/";
					script.type = "text/javascript";
					script.async = true;
					script.src = src.replace(/http.*:/, location.protocol);
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(script, s);
				})();
				</script></div><div id="wb_element_instance39" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(74);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>