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
      <? include("inc_big.php");?>
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
    <td align="left" valign="top">
	  <table width="100%" height="238" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="476" height="230" align="left" valign="top"><table width="100%" height="239" border="0" cellpadding="0" cellspacing="0" class="border">
            <tr>
              <td height="33" bgcolor="#E7CD9A"><span class="bai14">　关于我们</span></td>
            </tr>
            <tr>
              <td height="" align="center" valign="middle"><table width="97%" height="207" border="0" cellpadding="0" cellspacing="0">
                <?
				$sql1="select * from arc  where lb='关于我们' order by arc_id desc limit 1";
				$cx1=mysql_query($sql1);
				while($r=mysql_fetch_array($cx1))
				{
				?>
                <tr>
                  <td height="207" align="left" valign="top"><div style="width:98%" class="text12p"><img src="<?=$r["pic"]?>" width="185" height="127" style="float:left; margin:15px; "/><span class="text12p" style="width:99%">
                    <?=chgtitle($r["content"],150)?>
                  </span>......<span class="text12p" style="width:99%"><a href="about.php" class="text12">《详情》</a></span> </div></td>
                </tr>
                <?
				}
				mysql_free_result($cx1);
				?>
              </table></td>
            </tr>
          </table></td>
          <td width="12"></td>
          <td width="240" align="right" valign="top"><table width="240" height="239" border="0" cellpadding="0" cellspacing="0" class="border">
              <tr>
                <td height="33" bgcolor="#E7CD9A"><span class="bai14">　新闻动态</span></td>
              </tr>
              <tr>
                <td height="137" align="center" valign="middle"><table width="95%" border="0" cellspacing="0" cellpadding="0">
                    <?
				$sql1="select * from arc  where lb='新闻动态' order by arc_id desc limit 6";
				$cx1=mysql_query($sql1);
				while($r=mysql_fetch_array($cx1))
				{
				?>
                    <tr>
                      <td width="14%" height="30" align="center" valign="middle"><img src="images/ico03.jpg" width="8" height="6" /></td>
                      <td width="86%" align="left" valign="middle"><a href="news_info.php?id=<?=$r["arc_id"]?>" class="text12">
                        <?=chgtitle($r["title"],14)?>
                      </a></td>
                    </tr>
                    <tr>
                      <td height="1" colspan="2" background="images/dot.gif"></td>
                    </tr>
                    <?
				}
				mysql_free_result($cx1);
				?>
                </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
	 
	  <table width="89%" height="8" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>

	  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="border">
      <tr>
        <td height="35" align="left" valign="middle" bgcolor="#E7CD9A"><span class="bai14"><span class="Zred">　</span>热卖推荐</span></td>
      </tr>
      <tr>
        <td height="235" align="center" valign="middle">
		<!--循环-->
		<table width="99%" border="0" cellpadding="0" cellspacing="0">
		<?
$sql=mysql_query("select * from  product where tj=1 order by product_id desc limit 3");
while($row=mysql_fetch_array($sql))
{
$m=$m+1;
$arry[$m]=$row["name"];//将结果集的数据倒入数组进行操作
$arryimg[$m]=$row["pic"];
$arryid[$m]=$row["product_id"];
$arrypr[$m]=$row["price"];
}
mysql_free_result($sql);
?>
<?
for($i=1;$i<=1;$i++){
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
                  <?=chgtitle($arry[$t],8)?>:<span class="rec12"><?=$arrypr[$t]?></span></a></td>
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
        </table>
		<!--1行结束-->
		</td>
      </tr>
    </table>
      <table width="89%" height="8" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td></td>
        </tr>
      </table>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="border">
        <tr>
          <td height="35" align="left" valign="middle" bgcolor="#E7CD9A"><span class="Zred">　</span><span class="bai14">商品展示</span></td>
        </tr>
        <tr>
          <td height="240" align="center" valign="middle"><table width="99%" border="0" cellpadding="0" cellspacing="0">
            <?
$sql=mysql_query("select * from  product  order by product_id desc limit 3");
while($row=mysql_fetch_array($sql))
{
$m=$m+1;
$arry[$m]=$row["name"];//将结果集的数据倒入数组进行操作
$arryimg[$m]=$row["pic"];
$arryid[$m]=$row["product_id"];
$arrypr[$m]=$row["price"];
}
mysql_free_result($sql);
?>
            <?
for($i=1;$i<=1;$i++){
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
