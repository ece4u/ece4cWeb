<?php $mrecord = getRecord("tbl_supports", "id=".$_REQUEST['id']);?>
<link href="../css/css.css" rel="stylesheet" type="text/css" />

<style type="text/css"></style>
<table width="100%">
	<tr>
		<td width="100%" align="center" valign="top"><?php echo $mrecord['full_description']?></td>
	</tr>
	<!--- below code will handle comment -->
	<tr>
		<td width="100%" align="center" style="padding-top:50px"> will have comment function here later </td>
	</tr>
</table>
