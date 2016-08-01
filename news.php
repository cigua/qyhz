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
    <td align="left" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="border">
        <tr>
          <td height="35" align="left" valign="middle" bgcolor="#E7CD9A"><span class="Zred">　</span><span class="bai14">新闻动态</span></td>
        </tr>
        <tr>
          <td height="240" align="center" valign="middle"><table width="92%" border="0" cellpadding="0" cellspacing="0">
            <?
				$sql1="select * from arc  where lb='新闻动态' order by arc_id desc limit 3";
				$cx1=mysql_query($sql1);
				while($r=mysql_fetch_array($cx1))
				{
				?>
            <tr>
              <td width="8%" height="31" align="center" valign="middle"><img src="images/ico03.jpg" width="8" height="6" /></td>
              <td width="80%" height="31" align="left" valign="middle"class="htext12"><a href="news_info.php?id=<?=$r["arc_id"]?>" class="text12">
                <?=$r["title"]?>
              </a></td>
              <td width="12%" align="left" valign="middle"class="htext12"><span class="text12">[
                  <?=date("Y-m-d",strtotime($rs["arc_rq"]))?>
]</span></td>
            </tr>
            <tr align="right">
              <td height="1" colspan="3" background="images/dot.gif"></td>
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
