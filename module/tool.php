<?php $row = 5;
$col = 2;

$cat = 0;
if($_REQUEST['cat']!='') $cat=killInjection($_REQUEST['cat']);

$p=0;
if ($_REQUEST['p']!='') $p=$_REQUEST['p'];
$sql = "SELECT * FROM `tbl_supports` WHERE 1 LIMIT 0, 30 ";
$result = @mysql_query($sql,$conn);

$total = countRecord("tbl_supports");
if($total==0){
?>
<link href="../css/css.css" rel="stylesheet" type="text/css" />
<table align="center" cellSpacing="0" cellPadding="0" width="100%" border="0">
	<tr><td height="10"></td></tr>
	<tr>
		<td align="center">
			<font color="#000000"><strong><?php echo $_lang=="vn"?'Sản phẩm đang cập nhật !':'Products are being updated !'?></strong></font>
		</td>
	</tr>
	<tr><td height="10"></td></tr>
</table>
<?php }else{
?>

<table cellSpacing="0" cellPadding="0" width="100%" border="0">
<?php for($i=0; $i<$row; $i++){
?>
	<tr>			  					
<?php for($j=0; $j<$col&&$products=mysql_fetch_assoc($result); $j++){
		$pro = getRecord("tbl_supports","id=".$products['id'])?><td width="10px"></td><td>
		<table width="90%" border="0" cellspacing="0" cellpadding="0" style="float:left">
			<tr><td height="10px"></td></tr>
			<tr>
			  <td class="style13" width="120"><a href="./?frame=tool_details&id=<?php echo $pro['id']?>" title="<?php echo $pro['name']?>">  
			  	<?php 
					if($pro['image']!='')
					{ $img = $pro['image'];
						?>
							<img src="<?php echo $img?>" width="120" height="120" border="0" />
						<?php }
				?>
			  	</a></td><td width="10"></td>
				<td>
					<table>
					<tr><td><a href="./?frame=tool_details&id=<?php echo $pro['id']?>" class="link4"><?php echo $pro['name']?></a></td></tr>
					<tr><td><?php echo $pro['short_description']?></td></tr>
					</table>
				</td>
			</tr>
			<!--tr>
            <td height="25" align="left"><a href="./?frame=product_detail&id=<?php echo $pro['id']?>" class="link4"><?php echo $pro['name']?></a></td>
             </tr-->
         </table>								
            <?php }
while($j<$col){
	echo "";
	$j=$j+1;
}
?></td>
	</tr>	  
<?php }?>
</table>
<table width="98%" border="0" cellpadding="0" cellspacing="0">
   <tr>
        <td colspan="2" id="boder_button">&nbsp;</td>
   </tr>
   <tr><td height="5px"></td></tr>
</table>

<table align="center" cellSpacing=0 cellPadding=0 width="98%" border=0>
<?php $newsPage       = $_lang=="vn" ? "Sản phẩm" : "Products";
$pagePage       = $_lang=="vn" ? "Trang" : "Page";
$titleFirst     = $_lang=="vn" ? "Đầu Tiên" : "First";
$titlePrevious  = $_lang=="vn" ? "Về trước" : "Previous";
$titleNext      = $_lang=="vn" ? "Tiếp theo" : "Next";
$titleLast      = $_lang=="vn" ? "Cuối cùng" : "Last";

$pages = countPages($total,$row*$col);
echo '<tr><td colspan="2" align="center"></td></tr>';
echo '<tr><td class="smallfont" align="left"><b>'.$total.'</b> '.$newsPage.'</td>';
echo '<td class="smallfont" align="right">'.$pagePage.' : ';
$param="";
if ($p>1) echo '<a class="aLink3" title="'.$titleFirst.'" href="./?frame='.$_REQUEST['frame'].'&cat='.$_REQUEST['cat'].'&'.$param.'&p=0">[&lt;&lt;]</a> ';
if ($p>0) echo '<a class="aLink3" title="'.$titlePrevious.'" href="./?frame='.$_REQUEST['frame'].'&cat='.$_REQUEST['cat'].'&'.$param.'&p='.($p-1).'">[&lt;]</a> ';
$from=($p-10>0?$p-10:0);
$to=($p+10<$pages?$p+10:$pages);
for ($i=$from;$i<$to;$i++){
	if ($i!=$p) echo '<a class="aLink3" href="./?frame='.$_REQUEST['frame'].'&cat='.$_REQUEST['cat'].'&'.$param.'&p='.$i.'">'.($i+1).' </a>';
	else echo '<b>'.($i+1).'</b> ';
}
if ($p<$i-1) echo '<a class="aLink3" title="'.$titleNext.'" href="./?frame='.$_REQUEST['frame'].'&cat='.$_REQUEST['cat'].'&'.$param.'&p='.($p+1).'">[&gt;]</a> ';
if ($p<$pages-1) echo '<a class="aLink3" title="'.$titleLast.'" href="./?frame='.$_REQUEST['frame'].'&cat='.$_REQUEST['cat'].'&'.$param.'&p='.($pages-1).'">[&gt;&gt;]</a>'; 
echo '</td></tr>';
?>
</table><br />

<?php }?>