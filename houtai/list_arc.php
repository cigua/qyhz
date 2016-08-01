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
<link rel="stylesheet" type="text/css" href="Admin_Style.css"></head>
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
    <td height="22">管理</td>
  </tr>
</table>
<br><br>
<table width='80%' border="0" cellpadding="0" cellspacing="0" align=center><tr>
   
     <td align="center"><table class="border" border="0" cellspacing="1" width="83%" cellpadding="0">
       <tr class="title" height="22">
         <td width="411" height="22" align="center"><strong>标题</strong></td>
         <td align="center"  width=163><strong>类别</strong></td>
         <td align="center"  width=265><strong>日期</strong></td>
         
         <td width="89" align="center" ><strong>操作</strong></td>
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
 echo "暂无信息";
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
         
         <td width="89" align="center"><a href="edit_arc.php?act=edit&id=<?=$rs["arc_id"]?>" class="text12">修改</a><a href="save_arc.php?act=del&id=<?=$rs["arc_id"]?>" class="text12">删除</a></td>
       </tr>
       <?
  }
}
?>
       <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'">
         <td align=center  colspan=6  height=30><div align="center" class="text1"> 共有
               <?=$num?>
           条记录　分
           <?=ceil($num/$pagesize)?>
           页显示　当前是第
           <?=$page+1?>
           页 <a href="?page=0" class="text1">首页</a>
                 <?
if ($page==0) echo "<span class='text1'>上一页</span>";
else echo "<a href='?page=$prepage' class='text1'>上一页</a>";
?>
                 <?
if($page==$pagecount) echo "<span class='text1'>下一页</span>";
else echo "<a href='?page=$nextpage' class='text1'>下一页</a>"; 
?>
                 <?
if($page==$pagecount) echo "<span class='text1'>尾页</span>";
else echo "<a href='?page=$pagecount' class='text1'>尾页</a>";
?>
         </div></td>
       </tr>
     </table></td>
</tr></table>
</body>
</html>
