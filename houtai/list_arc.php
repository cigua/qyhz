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
<link rel="stylesheet" type="text/css" href="Admin_Style.css"></head>
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
    <td height="22">����</td>
  </tr>
</table>
<br><br>
<table width='80%' border="0" cellpadding="0" cellspacing="0" align=center><tr>
   
     <td align="center"><table class="border" border="0" cellspacing="1" width="83%" cellpadding="0">
       <tr class="title" height="22">
         <td width="411" height="22" align="center"><strong>����</strong></td>
         <td align="center"  width=163><strong>���</strong></td>
         <td align="center"  width=265><strong>����</strong></td>
         
         <td width="89" align="center" ><strong>����</strong></td>
       </tr>
       <?php
 $execc="select count(*) from arc";
$resultc=mysql_query($execc);
$rsc=mysql_fetch_array($resultc);
$num=$rsc[0];
$pagesize=15;
$pagecount=ceil($num/$pagesize)-1;

if(empty($_GET["page"]))
{
$page=0;
}
else
{
$page=$_GET["page"];
}
if($page<0)
{
$page=0;
}
if($page>$pagecount)
{
$page=ceil($num/$pagesize)-1;
}
$nextpage=$page+1;
$prepage=$page-1;
$exec="select * from arc order by arc_id desc limit ".($page*$pagesize).",$pagesize"; 

$result=mysql_query($exec);
if($num==0)
{
 echo "������Ϣ";
}
else
{
while($rs=mysql_fetch_array($result))
{
?>
       <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'">
         <td height="24" align="center"><?=chgtitle($rs["title"],12)?></td>
         <td align="center"><?=$rs["lb"]?></td>
         <td align="center"><?=$rs["arc_rq"]?></td>
         
         <td width="89" align="center"><a href="edit_arc.php?act=edit&id=<?=$rs["arc_id"]?>" class="text12">�޸�</a><a href="save_arc.php?act=del&id=<?=$rs["arc_id"]?>" class="text12">ɾ��</a></td>
       </tr>
       <?
  }
}
?>
       <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'">
         <td align=center  colspan=6  height=30><div align="center" class="text1"> ����
               <?=$num?>
           ����¼����
           <?=ceil($num/$pagesize)?>
           ҳ��ʾ����ǰ�ǵ�
           <?=$page+1?>
           ҳ <a href="?page=0" class="text1">��ҳ</a>
                 <?
if ($page==0) echo "<span class='text1'>��һҳ</span>";
else echo "<a href='?page=$prepage' class='text1'>��һҳ</a>";
?>
                 <?
if($page==$pagecount) echo "<span class='text1'>��һҳ</span>";
else echo "<a href='?page=$nextpage' class='text1'>��һҳ</a>"; 
?>
                 <?
if($page==$pagecount) echo "<span class='text1'>βҳ</span>";
else echo "<a href='?page=$pagecount' class='text1'>βҳ</a>";
?>
         </div></td>
       </tr>
     </table></td>
</tr></table>
</body>
</html>
