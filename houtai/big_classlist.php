<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
?>
<html>
<head>
<title>����</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<link rel="stylesheet" type="text/css" href="Admin_Style.css">

</head>
<body leftmargin="2" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="border">
  <tr class="topbg"> 
    <td height="22" colspan="2"  align="center"><strong>�� ̨ �� ��</strong></td>
  </tr>
  <tr class="tdbg"> 
    <td width="70" height="30" ><strong>��������</strong></td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="border">
  <tr class="title"> 
    <td height="22">�������</td>
  </tr>
</table>
<br><br>
<table width='80%' border="0" cellpadding="0" cellspacing="0" align=center><tr>
   
     <td align="center"><table class="border" border="0" cellspacing="1" width="55%" cellpadding="0">
          <tr class="title" height="22"> 
            <td height="22" width="41" align="center">&nbsp;</td>
            <td align="center"  width=547><strong>����</strong></td>
            <td width="248" align="center" ><strong>����</strong></td>
          </tr>
 <?php
 $sql="select * from bigname order by b_id desc";
 $query=mysql_query($sql);
 while($rs=mysql_fetch_array($query))
 {
?>
          <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'"> 
            <td width="41" height="24" align="center">&nbsp;</td>
            <td align="center"><?=$rs["bigcm"]?></td>
            <td width="248" align="center"><a href="save_bigcm.php?act=del&id=<?=$rs["b_id"]?>" onClick="{if(confirm('ȷ��ɾ����?')){return true;}return false;}"><font color="#000000">ɾ��</font></a> <a href="edit_bigclassname.php?act=edit&id=<?=$rs["b_id"]?>">�޸�</a></td>
          </tr>
         <?
		 }
		 ?>
		  
        </table>

</td>
</tr></table>
</body>
</html>
