<?

session_start();
include("inc/conn.php");
include("inc/func.php");
$id=$_GET["id"];
$sql=mysql_query("select * from product where product_id='$id'");
$rs=mysql_fetch_assoc($sql);
$name=$rs["name"];
$sj=$rs["sj"];
$price=$rs["price"];
$content=$rs["content"];
$pic=$rs["pic"];
mysql_free_result($sql);
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
          <td height="35" align="left" valign="middle" bgcolor="#E7CD9A"><span class="Zred">　</span><span class="bai14">产品展示</span></td>
        </tr>
        <tr>
          <td height="381" align="center" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center"><table width="97%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="41%" height="247" align="center"><img src="<?=$pic?>" width="223" height="229" /></td>
                    <td width="59%" valign="top"><table width="99%" border="0" cellpadding="0" cellspacing="0" class="word07">
                        <tr>
                          <td height="16" colspan="2" align="left" bgcolor="#FFFFFF" class="text12"> 　 </td>
                        </tr>
                        <tr>
                          <td height="30" colspan="2" align="center" bgcolor="#F8E8DE"><span class="text12">
                            <?=$name?>
                          </span></td>
                        </tr>
                        <tr>
                          <td height="12" colspan="2" align="center" bgcolor="#FFFFFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="23%" height="30" align="center" bgcolor="#FFFFFF" class="text12">产品名称:</td>
                          <td width="77%" align="left" bgcolor="#FFFFFF" class="text12"><?=$name?></td>
                        </tr>
                        <tr>
                          <td height="30" align="center" bgcolor="#FFFFFF" class="text12">经销商</td>
                          <td align="left" bgcolor="#FFFFFF" class="text12"><?=$sj?></td>
                        </tr>
                        <tr>
                          <td height="30" align="center" bgcolor="#FFFFFF" class="text12">单价:</td>
                          <td align="left" bgcolor="#FFFFFF" class="text12"><?=$price?></td>
                        </tr>
                        <tr>
                          <td height="62" colspan="2" align="left"></td>
                        </tr>
                    </table></td>
                  </tr>
              </table></td>
            </tr>
          </table>
            <table width="55%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="35" align="left" valign="middle" bgcolor="#DBF5FD">　<span class="blue12">产品描述</span></td>
              </tr>
              <tr>
                <td height="10" align="center" valign="top"></td>
              </tr>
              <tr>
                <td height="93" align="center" valign="top"><table width="96%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="63" align="left" valign="top" class="text12p"><?=$content?></td>
                    </tr>
                </table></td>
              </tr>
            </table></td>
        </tr>
		<table width="55%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
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
