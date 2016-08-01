<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
?>
<html>
<head>
<title>管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<link rel="stylesheet" type="text/css" href="Admin_Style.css">

</head>
<body leftmargin="2" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="border">
  <tr class="topbg"> 
    <td height="22" colspan="2"  align="center"><strong>后 台 管 理</strong></td>
  </tr>
  <tr class="tdbg"> 
    <td width="70" height="30" ><strong>管理导航：</strong></td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="border">
  <tr class="title"> 
    <td height="22">分类管理</td>
  </tr>
</table>
<br><br>
<table width='80%' border="0" cellpadding="0" cellspacing="0" align=center><tr>
   
     <td align="center"><table class="border" border="0" cellspacing="1" width="55%" cellpadding="0">
          <tr class="title" height="22"> 
            <td height="22" width="238" align="center"><strong>大类</strong></td>
            <td align="center"  width=192><strong>小类</strong></td>
            <td width="183" align="center" ><strong>操作</strong></td>
          </tr>
 <?php
 $sql="select * from category order by c_id desc";
 $query=mysql_query($sql);
 while($rs=mysql_fetch_array($query))
 {
?>
          <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'"> 
            <td width="238" height="24" align="center"><?
			$cx=mysql_query("select * from bigname where b_id='".$rs["b_id"]."'");
			$rst=mysql_fetch_assoc($cx);
			echo $rst["bigcm"];
			mysql_free_result($cx);
			?></td>
            <td align="center"><?=$rs["category"]?></td>
            <td width="183" align="center"><a href="save_category.php?act=del&id=<?=$rs["c_id"]?>" onClick="{if(confirm('确定删除吗?')){return true;}return false;}"><font color="#000000">删除</font></a> <a href="edit_category.php?act=edit&id=<?=$rs["c_id"]?>">修改</a></td>
          </tr>
         <?
		 }
		 ?>
		  
        </table>

</td>
</tr></table>
</body>
</html>
