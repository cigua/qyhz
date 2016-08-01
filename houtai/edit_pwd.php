<?
include("../inc/conn.php");
include("../inc/func.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>添加产品</title>
<link rel="stylesheet" type="text/css" href="Admin_Style.css">
</head>

<body onLoad="javascipt:setTimeout('loadForm()',2000);">

  <table border="0" align="center" cellpadding="0" cellspacing="0" class="border">
    <tr class="title">
      <td height="22" align="center">&nbsp;</td>
    </tr>
    <tr align="center">
      <td>
<?
$admin_id=$_SESSION['user_id'];
$sql="select * from web_admin where admin_id='$admin_id'";
$rs=mysql_fetch_assoc(mysql_query($sql));
?>
	<table width="100%" border="0" cellpadding="2" cellspacing="1">
	<form name=form action="save_pwd.php?act=edit" method="post">
<input type="hidden" name="id" value="<?=$id?>">
          <tr class="tdbg">
            <td height="32" align="right">账号：</td>
            <td><span style="COLOR: #880000">
              <input name="web_admin" type="text" class="input1" id="web_admin" size=20 maxlength=20 value="<?=$rs['web_admin']?>">
            </span></td>
          </tr>
          <tr class="tdbg"> 
            <td width="100" height="32" align="right">密码：</td>
            <td width="595"><INPUT name="pwd" type="password" class="input1" size=20 maxlength=20></td>
          </tr>
          <tr class="tdbg"> 
            <td width="100" height="24" align="right" valign="middle"></td>
            <td><input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
          </tr>
		  </form>
        </table>
      </td>
    </tr>
  </table>
  

</body>
</html>
