<?
include("../inc/checkadmin.php");//包含登录验证页面
include("../inc/conn.php");//包含数据库连接页面
include("../inc/func.php");//包含函数库页面
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>添加产品</title>
<link rel="stylesheet" type="text/css" href="Admin_Style.css">
</head>

<body onLoad="javascipt:setTimeout('loadForm()',2000);">

  <table width="605" border="0" align="center" cellpadding="0" cellspacing="0" class="border">
    <tr class="title">
      <td height="22" align="center">&nbsp;</td>
    </tr>
    <tr align="center">
      <td>
	<table width="100%" border="0" cellpadding="2" cellspacing="1">
	<form action="save_admin.php?act=add" method="post" name="form10">
          <tr class="tdbg"> 
            <td width="100" height="32" align="right"><strong>账号：</strong></td>
            <td width="595"><input name="web_admin" type="text" id="web_admin"></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle">密码：</td>
            <td><input name="password" type="text" id="password"></td>
          </tr>
          <tr class="tdbg"> 
            <td width="100" height="24" align="right" valign="middle"></td>
            <td><input type="submit" name="Submit" value="提交"></td>
          </tr>
		  </form>
        </table>
      </td>
    </tr>
</table>
  

</body>
</html>
