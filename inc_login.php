<?
	if(empty($_SESSION["userid"]))
	{
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
      <tr>
        <td height="35" bgcolor="#E7CD9A" class="bai14"> 　会员登录</td>
      </tr>
      <tr>
        <td height="155" align="center" valign="middle" bgcolor="#FDFCF8">　
          <table width="94%" border="0" cellspacing="0" cellpadding="0">
		  <form action="login.php" method="post">
            <tr>
              <td width="30%" height="38" align="right" class="text12">用户名：</td>
              <td width="70%" align="left"><input name="userid" type="text" class="border" id="userid" size="15" /></td>
            </tr>
            <tr>
              <td height="42" align="right" class="text12">密 码：</td>
              <td align="left"><input name="password" type="text" class="border" id="password" size="15" /></td>
            </tr>
            <tr>
              <td height="62" colspan="2" align="center" class="hui"><table width="85%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="68%" height="35" align="center"><input type="submit" name="Submit" value="提交" /></td>
                    <td width="32%" align="left" valign="middle"><a href="reg.php" class="reg12">注册</a></td>
                  </tr>
				 
              </table></td>
            </tr>
		    </form>
        </table></td>
      </tr>
</table>
	<?
	}
	else
	{
?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
      <tr>
        <td height="35" bgcolor="#E7CD9A" class="bai14"> 　会员登录</td>
      </tr>
      <tr>
        <td height="155" align="center" valign="middle" bgcolor="#FDFCF8">　
          <table width="93%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="30" colspan="2" align="center" valign="middle" class="hui12">欢迎您，
                <?=$_SESSION["userid"]?></td>
            </tr>
            <tr>
              <td width="50%" height="35" align="center" valign="middle" class="hui12"><a href="edit_hy.php" class="text12">修改资料</a></td>
              <td width="50%" align="center" valign="middle" class="text12"><a href="exit.php" class="hui12">退出登录</a></td>
            </tr>
            
          </table></td>
      </tr>
    </table>
    <?
}
?>
