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
<br>
<table width="351" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="productlist.php">
    <tr>
      <td width="98" height="33" align="center">商品名:</td>
      <td width="173" align="center"><input name="key" type="text" id="key" size="15"></td>
      <td width="80" align="center"><input type="submit" name="Submit" value="查询"></td>
    </tr>
  </form>
</table>
<br>

<table width='66%' border="0" cellpadding="0" cellspacing="0" align=center>
  <tr>
   
     <td><table class="border" border="0" cellspacing="1" width="100%" cellpadding="0">
          <tr class="title" height="22"> 
            <td width="95" height="22" align="center"><strong>大类</strong></td>
            <td align="center"  width=112><strong>小类</strong></td>
            <td align="center"  width=122><strong>商家</strong></td>
            <td align="center"  width=227><strong>名称</strong></td>
            <td  width=83 align="center">价格</td>
            <td align="center"  width=85>图片</td>
            <td align="center"  width=116>是否推荐</td>
            <td width="78" align="center" ><strong>操作</strong></td>
          </tr>
           <?php
$key=$_GET["key"];
$sql="select * from product where 1=1";
if(!empty($key))
{
  $sql=$sql." and name like '%".$key."%'";
}

$num=mysql_num_rows(mysql_query($sql));
$pagesize=5;
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
$exec=$sql." order by product_id desc limit ".($page*$pagesize).",$pagesize"; 
$result=mysql_query($exec);
if($num==0)
{
 echo "<tr><td colspan=7>暂时没有信息</td></tr>";
}
else
{
while($rs=mysql_fetch_array($result))
{
?>
          <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'"> 
            <td height="24" align="center"><?
			$cx=mysql_query("select * from bigname where b_id='".$rs["b_id"]."'");
			$rst=mysql_fetch_assoc($cx);
			echo $rst["bigcm"];
			mysql_free_result($cx);
			?></td>
            <td align="center"><?=turn_fenlei($rs["c_id"])?></td>
            <td align="center"><?=$rs["sj"]?></td>
            <td align="center"><?=$rs["name"]?></td>
            <td align="center"><?=$rs["price"]?>元</td>
            <td align="center"><img src="../<?=$rs["pic"]?>" width="30" height="30"></td>
            <td align="center"><? if($rs["tj"]==1){
	  echo "<a href='save_product.php?act=tj&value=0&id=".$rs["product_id"]."'><img src='images/icon_01.gif' border=0></a>";
	  }
	  else{
	  echo "<a href='save_product.php?act=tj&value=1&id=".$rs["product_id"]."'><img src='images/icon_02.gif' border=0></a>";
	  }
	  ?></td>
            <td width="78" align="center"><a href="save_product.php?act=del&id=<?=$rs["product_id"]?>" class="text12">删除</a> <a href="edit_product.php?id=<?=$rs["product_id"]?>">修改</a></td>
          </tr>
<?
  }
}
?>
		  <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'">
			<td align=center  colspan=8  height=30><div align="center" class="text1">
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
else echo "<a href='?page=$pagecount' class='text1'>尾页</a>";
?>

</div></td>
		  </tr>
        </table>

</td>
</tr></table>
</body>
</html>
