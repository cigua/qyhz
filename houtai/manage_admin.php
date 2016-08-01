<?
include("../inc/checkadmin.php");//包含登录验证页面
include("../inc/conn.php");//包含数据库连接页面
include("../inc/func.php");//包含函数库页面
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
<table width="100%" border="0" cellpadding="2" cellspacing="1">
      <tr>
        <td height="54" align="center"><table width="252" border="0" bgcolor="#E1F4EE">
          <form action="manage_admin.php">
            <tr>
              <td width="60" height="34" align="center">账号</td>
              <td width="109" align="center"><input name="key" type="text" id="key" size="15"></td>
              <td width="69" align="center"><input type="submit" name="Submit" value="查  询"></td>
            </tr>
          </form>
        </table></td>
      </tr>
</table>
<table width='44%' border="0" cellpadding="0" cellspacing="0" align=center>
  <tr>
   
     <td><table class="border" border="0" cellspacing="1" width="100%" cellpadding="0">
          <tr class="title" height="22"> 
            <td  width=209 height="22" align="center">ID</td>
            <td align="center"  width=366>账号</td>
            <td width="139" align="center" ><strong>操作</strong></td>
          </tr>
<?php
$key=$_GET["key"];
$sql="select * from web_admin where 1=1";
if(!empty($key))
{
  $sql=$sql." and web_admin like '%".$key."%'";
}

$sql=$sql." order by admin_id desc";//构造查询地区表area的SQL语句
//
$num=mysql_num_rows(mysql_query($sql));//得到查询结果数目
$pagesize=15;//设定每页15条数据
$pagecount=ceil($num/$pagesize)-1;//得到总页数

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
$exec=$sql." limit ".($page*$pagesize).",$pagesize"; 
$result=mysql_query($exec);//以上为PHP分页的固定用法
if($num==0)//假如没数据 
{
 echo "<tr><td colspan=7>暂时没有信息</td></tr>";
}
else
{
while($rs=mysql_fetch_array($result))//循环数据 
{
?>
          <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'"> 
            <td height="24" align="center"><?=$rs["admin_id"]//显示表字段的用法?></td>
            <td align="center"><?=$rs["web_admin"]?></td>
            <td width="139" align="center"><a href="save_admin.php?act=del&id=<?=$rs["admin_id"]?>" onClick="{if(confirm('确定删除吗?')){return true;}return false;}"><font color="#000000">删除 </font></a> <a href="edit_admin.php?id=<?=$rs["admin_id"]?>">编辑</a></td>
          </tr>
<?
}
}
?>
		 
            </table></td>
  </tr>
		  <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'">
			<td align=center  colspan=7  height=30>
			<div align="center" class="text1">
共有<?=$num?>条记录　分<?=ceil($num/$pagesize)?>页显示　当前是第<?=$page+1?>页
<a href="?page=0" class="text1">首页</a>
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
else echo "<a href='?page=$pagecount' class='text1'>尾页</a>";//以上为显示分页效果
?>
</div>			</td>
		  </tr>
</table>

</td>
</tr></table>
</body>
</html>
