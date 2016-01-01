<?php
if(!session_id())
	session_start();

error_reporting(0);

require("config.php");
require("common_start.php");
require("lib/func.lib.php");

?>
<html>
<head>
<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>H&#7884;C &#272;I&#7878;N T&#7916; ONLINE</title>
<script language="javascript" src="lib/varAlert.<?php echo $_lang?>.unicode.js"></script>
<script language="javascript" src="lib/javascript.lib.js"></script>
<script language="javascript">
function btnSearch_onclick(){
	if(test_empty(document.frmSearch.keyword.value)){
		alert(mustInput_Search);document.frmSearch.keyword.focus();return false;
	}
	document.frmSearch.submit();
	return true;
}

</script>

<link href="css/css.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td bgcolor="#FFFFFF"><img src="Hinh/space.jpg" width="5" height="5"></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td><a href="http://hocdientu.tk" ><img height="200" width="100%" style="border:none;" src="http://www.norcott.co.uk/wp-content/themes/norcott/images/internal_banner.jpg"/></a></td>
      </tr>
      <tr>
        <td class="cssmenu" width="100%">
			<!--table width="100%" width="100%" align="center" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center"><a href="./" class="link1">TRANG CHỦ</a></td>
              <td align="center"><a href="./?frame=learnmcu" class="link1">H&#7884;C V&#272;K</a></td>
              <td align="center"><a href="./?frame=learnchipdesign" class="link1">H&#7884;C FPGA Design</a></td>
              <td align="center"><a href="./?frame=learnc_cplus" class="link1">C/C++/Java/Android</a></td>
              <td align="center"><a href="./?frame=learhwdesign" class="link1">THI&#7870;T K&#7870; HW</a></td>
              <td align="center"><a href="./?frame=showproducts" class="link1">S&#7842;N PH&#7848;M</a></td>
              <td align="center"><a href="./?frame=tools" class="link1">TOOLs H&#7894; TR&#7906;</a></td>
              <td align="center"><a href="./?frame=about" class="link1">ABOUT US</a></td>
            </tr>
			</table--> 
			
			<div id='cssmenu'>
				<ul>
					<li class='has-sub'><a href='./'><span>Home</span></a></li>
					<li class='has-sub'><a href='./?frame=learnmcu'><span>Learn MCU</span></a>
						<ul>
							<li class='has-sub'><a href='#'><span>MSP430</span></a>
								<ul>
									<li><a href='#'><span>...</span></a></li>
									<li class='last'><a href='#'><span>...</span></a></li>
								</ul>
							</li>
							<li class='has-sub'><a href='#'><span>PIC</span></a>
								<ul>
								   <li><a href='#'><span>...</span></a></li>
								   <li class='last'><a href='#'><span>...</span></a></li>
								</ul>
							</li>
							<li class='has-sub'><a href='#'><span>AVR</span></a>
								<ul>
								   <li><a href='#'><span>...</span></a></li>
								   <li class='last'><a href='#'><span>...</span></a></li>
								</ul>
							</li>
							<li class='has-sub'><a href='#'><span>DSP</span></a>
								<ul>
								   <li><a href='#'><span>...</span></a></li>
								   <li class='last'><a href='#'><span>...</span></a></li>
								</ul>
							</li>
							<li class='has-sub'><a href='#'><span>FPGA</span></a>
								<ul>
								   <li><a href='#'><span>...</span></a></li>
								   <li class='last'><a href='#'><span>...</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class='has-sub'><a href='./?frame=learnchipdesign'><span>FPGA Design</span></a>
						<ul>
							<li class='has-sub'><a href='./?frame=learnchipdesign'><span>Verilog/VHDL</span></a>
								<ul>
									<li><a href='#'><span>...</span></a></li>
									<li class='last'><a href='#'><span>...</span></a></li>
								</ul>
							</li>
							<li class='has-sub'><a href='#'><span>XILINX Kits</span></a>
							</li>
							<li class='has-sub'><a href='#'><span>XILINX Tools</span></a>
							</li>
						</ul>
					</li>
					<li class='has-sub'><a href="./?frame=learnc_cplus"><span>C/C++/JAVA/Android</span></a>
						<ul>
							<li class='has-sub'><a href='#'><span>...</span></a>
								<ul>
									<li><a href='#'><span>...</span></a></li>
									<li class='last'><a href='#'><span>...</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class='has-sub'><a href="./?frame=learnhwdesign"><span>Design HW</span></a>
						<ul>
							<li class='has-sub'><a href='./?frame=learnhwdesign'><span>DESIGN WITH ALTIUM</span></a>
							</li>
							<li class='has-sub'><a href='./?frame=learnhwdesign'><span>DESIGN WITH ORCAD</span></a>
							</li>
						</ul>
					</li>
					<li class='has-sub'><a href="./?frame=showproducts"><span>Products</span></a>
						<!--ul>
							<li class='has-sub'><a href='#'><span>...</span></a>
								<ul>
									<li><a href='#'><span>...</span></a></li>
									<li class='last'><a href='#'><span>...</span></a></li>
								</ul>
							</li>
						</ul-->
					</li>
					<li class='has-sub'><a href='./?frame=tool'><span>Support Tools</span></a>
						<!--ul>
							<li class='has-sub'><a href='#'><span>...</span></a>
								<ul>
									<li><a href='#'><span>...</span></a></li>
									<li class='last'><a href='#'><span>...</span></a></li>
								</ul>
							</li>
						</ul-->
					</li>
					<li class='last'><a href='./?frame=about'><span>About Us</span></a></li>
				</ul>
			</div>
		</td>
      </tr>

     <tr><td width="100%"><table width="100%"><tr>
            <td align="left" width="20">

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium" data-annotation="none"></div>

<td align="left" width="20"><div class="fb-share-button" data-href="http://hocdientu.tk/" data-layout="button"></div></td>
<td align="left" width="20"><a href="https://twitter.com/share" class="twitter-share-button"{count}>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></td>
<td align="right"><table><tr>
               <td bgcolor="#000"><img src="images/icon_search.gif" width="18" height="18" /></td>
              <form action="./" method="get" name="frmSearch">
                <input type="hidden" name="act" value="search"/>
                <input type="hidden" name="frame" value="search"/>
                <td align="center"><input name="keyword" type="text" class="search" value="Nh&#7853;p keywords..." onFocus="this.value='';"/></td>
                <td align="center"><input name="Submit" type="submit" class="style19" value="Tìm kiếm nhanh! " onClick="return btnSearch_onclick();"/></td>
              </form>
           </tr></table>
        </td></tr></table></td></tr>
      <tr>
        <td class="style4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr valign="top">
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
             
                  <tr>
                    <td class="style16"><?php
					if( empty( $_REQUEST['frame'] ) )
					{
						include('module/home.php');
					}
					else 
					{?>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td class="style17"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td width="6"><img src="images/c_bg1.jpg" width="6" height="29" /></td>
                                  <td class="style11"><?php include('module/processTitle.php')?></td>
                                </tr>
                            </table></td>
                          </tr>
                          <tr>
                            <td width=100%" class="style20"><table width="100%" border="0">
                                <tr>
                                  <td width=100%"><?php include('module/processFrame.php')?></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                      <?php }
				?>
                    </td>
                  </tr>
              </table></td>
          
            </tr>
        </table></td>
      </tr>
      <tr>
        <td class="footer" style=""><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
              <td class="">&nbsp;</td>
              <td align="right">&nbsp;</td>
            </tr>
            <tr valign="top">
              <td bgcolor="">&nbsp;</td>
              <td bgcolor="#000" class="style25"><strong>Copyright @ 2015 Ban quyen thuoc ve hocdientu.tk</strong><br>
                Office: No.09 alley 29/70/16 Khuong Ha Street - Ha Noi<br>
                Email: ece4ubk@gmail.com</td>
              <td align="right" bgcolor="" style="color:#FFFFFF; padding:5px;" valign="bottom">&nbsp;
			  <!-- Vì tinh thần chia sẻ, ủng hộ mình bằng việc để lại dòng này nhé. Thanks :) -->
			  </td>
            </tr>
            <tr>
              <td width="8%" bgcolor=""></td>
              <td width="87%" bgcolor="" class="">&nbsp;</td>
              <td width="5%" align="right" bgcolor=""></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"><img src="Hinh/space.jpg" width="5" height="5"></td>
  </tr>
</table>
</body>
</html>
<?php require("common_end.php"); ?>		