<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	background-image: url();
	background-repeat: repeat-x;
}
.STYLE1 {color: #FFFFFF}
-->
</style></head>

<body>
<? include("top.php");?>
<table width="100" height="5" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="980" height="237" border="0" align="center" cellpadding="0" cellspacing="0" class="border">
  <tr>
    <td height="235"><img src="images/banner.jpg" width="980" height="235" /></td>
  </tr>
</table>
<table width="100" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="980" height="507" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="242" height="332" align="left" valign="top"><? include("inc_login.php");?>
      <table width="89%" height="5" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <? include("inc_category.php");?>
      <table width="89%" height="5" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="100%" height="78" border="0" cellpadding="0" cellspacing="0" class="border">
        <tr>
          <td align="center" valign="bottom"><? include("inc_tj.php");?></td>
        </tr>
      </table></td>
    <td width="10" align="center">&nbsp;</td>
    <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="border">
        <tr>
          <td height="35" align="left" valign="middle" bgcolor="#E7CD9A"><span class="Zred">　</span><span class="bai14">产品展示</span></td>
        </tr>
        <tr>
          <td height="240" align="center" valign="middle"><table width="99%" border="0" cellpadding="0" cellspacing="0">
              <?php
		  
$c_id=$_GET["c_id"];
$b_id=$_GET["b_id"];
$sql="select * from product where b_id='$b_id'";

if(!empty($c_id))
{
  $sql=$sql." and c_id='$c_id'";
}
$num=mysql_num_rows(mysql_query($sql));
$pagesize=6;
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
if ($num==0)
{
echo "<tr><td align='center' class='word07'>该栏目暂时没有内容，抱歉</td></tr>";
}
else
{
while($row=mysql_fetch_array($result))
{
$m=$m+1;
$arry[$m]=$row["name"];//将结果集的数据倒入数组进行操作
$arryimg[$m]=$row["pic"];
$arryid[$m]=$row["product_id"];
$arrypr[$m]=$row["price"];
}
$arry_count=count($arry);//得到数组上标
}
?> <? for($i=1;$i<=(ceil($arry_count/3));$i++)
					{
					?> 
            <tr>
              <?
		  for($j=1;$j<=3;$j++)
			{
			  $t++;
		?>
              <td width="33%" height="220" align="center" valign="middle"><table width="97%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="133" align="center" valign="middle"><a href="show_product.html"></a>
                        <table width="195" height="174" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="cpborder">
                          <tr>
                            <td width="193" height="172" align="center" valign="middle"><a href="product_info.php?id=<?=$arryid[$t]?>"><img src="<?=$arryimg[$t]?>" width="173" height="155" class="img" /></a></td>
                          </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td height="23" align="center" class="text12"><a href="product_info.php?id=<?=$arryid[$t]?>" class="bai12">
                      <?=chgtitle($arry[$t],8)?>
                      :<span class="rec12">
                        <?=$arrypr[$t]?>
                      </span></a></td>
                  </tr>
              </table></td>
              <?
				if($t==sizeof($arry)) break;
				}
			?>
            </tr>
            <?
							if($t==sizeof($arry)) break;
												  
								}
								unset($t);
								unset($i);
								unset($j);
								unset($arry);
								unset($arryimg);
								unset($arryprice);
								unset($arrymprice);
								unset($arryid);
								unset($m);
				?>
          </table></td>
        </tr>
		<table width="55%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" valign="middle"><span class="text12">共有
                <?=$num?>
                条记录　分
                <?=ceil($num/$pagesize)?>
                页显示　当前是第
                <?=$page+1?>
                页 <a href="?page=0" class="text12">首页</a>
                <?
if ($page==0) echo "<span class='text12'>上一页</span>";
else echo "<a href='?page=$prepage' class='text12'>上一页</a>";
?>
                <?
if($page==$pagecount) echo "<span class='text12'>下一页</span>";
else echo "<a href='?page=$nextpage' class='text12'>下一页</a>"; 
?>
                <?
if($page==$pagecount) echo "<span class='text12'>尾页</span>";
else echo "<a href='?page=$pagecount' class='text12'>尾页</a>";
?>
              </span></td>
            </tr>
          </table>
    </table></td>
  </tr>
</table>
<table width="100" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="100" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<? include("copy.php");?>
</body>
</html>
