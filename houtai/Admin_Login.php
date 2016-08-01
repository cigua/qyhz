<html>
<head>
<title>管理员登录</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="Admin_Style.css">

</head>
<body class="bgcolor" onLoad="SetFocus();">
<p>　</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form name="Login" action="check.php" method="post"  onSubmit="return CheckForm();">
  <table width="585" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="280"><img src="images/entry1.gif" width="280" height="246"></td>
      <td width="305" valign="top" background="images/entry2.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="24" colspan="2" align="center">&nbsp;</td>
          </tr>
        <tr>
          <td height="49" colspan="2" align="center"><font color="#000000" size="3"><strong>管理员登录</strong></font></td>
          </tr>
        
        <tr>
          <td width="109" height="38" align="right" valign="middle"><font color="#000000">用户名称：</font></td>
          <td width="196" align="left" valign="middle"><input name="username"  type="text"  maxlength="20" style="width:160px;border-style:solid;border-width:1;padding-left:4;padding-right:4;padding-top:1;padding-bottom:1" onMouseOver="this.style.background='#E1F4EE';" onMouseOut="this.style.background='#E1F4EE'" onFocus="this.select(); "></td>
        </tr>
        <tr>
          <td height="28" align="right" valign="middle"><font color="#000000">用户密码：</font></td>
          <td align="left" valign="middle"><input name="password"  type="password" maxlength="20" style="width:160px;border-style:solid;border-width:1;padding-left:4;padding-right:4;padding-top:1;padding-bottom:1" onMouseOver="this.style.background='#E1F4EE';" onMouseOut="this.style.background='#E1F4EE'" onFocus="this.select(); "></td>
        </tr>
        <tr>
          <td height="31" colspan="2" align="center"><input   type="submit" name="Submit" value=" 确认 " style="font-size: 9pt; height: 19; width: 60; ">
&nbsp;
<input name="reset" type="reset"  id="reset" value=" 清除 " style="font-size: 9pt; height: 19; width: 60; "></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <p align="center">&nbsp;</p>
</form>
</body>
</html>
