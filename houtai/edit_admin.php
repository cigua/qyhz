<?
include("../inc/checkadmin.php");//包含登录验证页面
include("../inc/conn.php");//包含数据库连接页面
include("../inc/func.php");//包含函数库页面
?>
<html>
<head>
<SCRIPT language=javascript>
function CheckPost()
{
	if (form10.area.value.length==0)
	{
		alert("请填写地区");
		form10.area.focus();
		return false;
	}	
     form10.submit();
}

</SCRIPT>
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
<?
    $id=$_GET["id"];//得到传递的ID
	$query=mysql_query("select * from web_admin where admin_id='$id'");//根据ID在dq表中进行查询的SQL语句
	$rs=mysql_fetch_assoc($query);//根据此查询建立一个数据集合

?>
	<table width="100%" border="0" cellpadding="2" cellspacing="1">
	<form action="save_admin.php?act=edit" method="post" name="form10">
	<input type="hidden" name="id" value="<?=$id?>">
          <tr class="tdbg"> 
            <td width="100" height="32" align="right"><strong>账号：</strong></td>
            <td width="595"><input name="web_admin" type="text" id="web_admin" value="<?=$rs["web_admin"]?>"></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle">密码：</td>
            <td><input name="password" type="text" id="password" value="<?=$rs["password"]?>"></td>
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
