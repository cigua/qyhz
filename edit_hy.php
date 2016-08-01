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
</style><script>
function checkform()
{
    //
	if(form10.userid.value=="")    
	{
        form10.userid.focus();
        document.getElementById("div_username").innerHTML="请您输入账号!";
        return false;
    }
	else
	{
	  document.getElementById("div_username").innerHTML="";
	}
	//
	if(form10.password.value=="")    
	{
        form10.password.focus();
        document.getElementById("div_password").innerHTML="请您输入密码！!";
        return false;
    }
	else
	{
	  document.getElementById("div_password").innerHTML="";
	}

	//
	if(form10.name.value=="")    
	{
        form10.name.focus();
        document.getElementById("div_name").innerHTML="请您输入名字!";
        return false;
    }
	else
	{
	  document.getElementById("div_name").innerHTML="";
	}
	//
	if(form10.email.value=="")    
	{
        form10.email.focus();
        document.getElementById("div_email").innerHTML="请填写电子邮件!";
        return false;
    }
	else
	{
		 var strEmail = form10.email.value;  
		  var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
		  var email_Flag = reg.test(strEmail);
		  if(!email_Flag)
		  {
		    document.getElementById("div_email").innerHTML="请输入正确的格式";
			form10.email.focus();
		   return false;
		  }
	  document.getElementById("div_email").innerHTML="";
	}
	//

   form10.submit();
}
</script></head>

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
          <td height="35" align="left" valign="middle" bgcolor="#E7CD9A"><span class="Zred">　</span><span class="bai14">会员修改资料</span></td>
        </tr>
        <tr>
          <td height="466" align="center" valign="middle"><?
		$id=$_SESSION["hy_id"];
		$q=mysql_query("select * from hy where hy_id='$id'");
		$rst=mysql_fetch_assoc($q);
		?>
            <table width="598" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#E9E5D9" class="border">
              <form action="save_hy.php?act=edit" method="post" name="form10" id="form10">
                <input type="hidden" name="id" value="<?=$id?>" />
                <tr bgcolor="#FFFFFF">
                  <td width="94"  height="30" align="right" class="text12">账号：</td>
                  <td width="487" align="left" class="text12"><?=$_SESSION["userid"]?></td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="32" align="right" class="text12">密码：</td>
                  <td align="left" class="text12"><input name="password" type="text" id="password"  maxlength="35" value="<?=$rst["password"]?>" /></td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="36" align="right" class="text12">姓名：</td>
                  <td align="left" class="text12"><input name="name" type="text" id="name" maxlength="35" value="<?=$rst["name"]?>" /></td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="25" align="right" class="text12">性别：</td>
                  <td align="left" class="text12"><input name="sex" type="radio" value="男" <? if($rst["sex"]=="男") echo "checked"?> />
                    男
                    <input type="radio" name="sex" value="女" <? if($rst["sex"]=="女") echo "checked"?> />
                    女</td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="35" align="right" class="text12">电子邮件：</td>
                  <td align="left" class="text12"><input name="email" type="text" id="email" maxlength="35" value="<?=$rst["email"]?>" /></td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="29" align="right" class="text12">电话：</td>
                  <td align="left" class="text12"><input name="tel" type="text" id="tel" maxlength="35" value="<?=$rst["tel"]?>" /></td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="30" align="right" class="text12">地址：</td>
                  <td height="30" align="left"><span class="text12">
                    <input name="addr" type="text" id="addr" maxlength="35" value="<?=$rst["post_address"]?>" />
                  </span></td>
                </tr>
                <tr bgcolor="#FFFFFF">
                  <td height="30" align="right">&nbsp;</td>
                  <td height="30" align="left"><input type="submit" name="Submit" value="提交" /></td>
                </tr>
              </form>
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
