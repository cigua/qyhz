<?
session_start();
include("inc/conn.php");
include("inc/func.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
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
        document.getElementById("div_username").innerHTML="���������˺�!";
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
        document.getElementById("div_password").innerHTML="�����������룡!";
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
        document.getElementById("div_name").innerHTML="������������!";
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
        document.getElementById("div_email").innerHTML="����д�����ʼ�!";
        return false;
    }
	else
	{
		 var strEmail = form10.email.value;  
		  var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
		  var email_Flag = reg.test(strEmail);
		  if(!email_Flag)
		  {
		    document.getElementById("div_email").innerHTML="��������ȷ�ĸ�ʽ";
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
          <td height="35" align="left" valign="middle" bgcolor="#E7CD9A"><span class="Zred">��</span><span class="bai14">��Աע��</span></td>
        </tr>
        <tr>
          <td height="378" align="center" valign="middle"><table width="598" border="0" align="center" cellpadding="0" cellspacing="0">
            <form action="save_hy.php?act=add" method="post" name="form10" id="form10">
              <tr bgcolor="#FFFFFF">
                <td width="105"  height="30" align="right" bgcolor="#FFFFFF" class="text12">�˺ţ�</td>
                <td width="214" align="left" bgcolor="#FFFFFF" class="text12"><input name="userid" type="text" id="userid" maxlength="35" />
                </td>
                <td width="279" class="text12"><span id="div_username" style="margin:0;padding:0;width:100px; color:#FF0000; height:20px; font-size:12px"></span></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="32" align="right" bgcolor="#FFFFFF" class="text12">���룺</td>
                <td align="left" bgcolor="#FFFFFF" class="text12"><input name="password" type="text" id="password"  maxlength="35" />
                </td>
                <td align="left" class="text12"><span id="div_password" style="margin:0;padding:0;width:100px; color:#FF0000; height:20px; font-size:12px"></span></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="36" align="right" bgcolor="#FFFFFF" class="text12">������</td>
                <td align="left" bgcolor="#FFFFFF" class="text12"><input name="name" type="text" id="name" maxlength="35" />
                </td>
                <td align="left" class="text12"><span id="div_name" style="margin:0;padding:0;width:100px; color:#FF0000; height:20px; font-size:12px"></span></td>
              </tr>
              <tr>
                <td height="25" align="right" class="text12">�Ա�</td>
                <td align="left" class="text12"><input name="sex" type="radio" value="��" checked="checked" />
                  ��
                  <input type="radio" name="sex" value="Ů" />
                  Ů</td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="35" align="right" bgcolor="#FFFFFF" class="text12">�����ʼ���</td>
                <td align="left" bgcolor="#FFFFFF" class="text12"><input name="email" type="text" id="email" maxlength="35" />
                </td>
                <td align="left" class="text12"><span id="div_email" style="margin:0;padding:0;width:100px; color:#FF0000; height:20px; font-size:12px"></span></td>
              </tr>
              <tr>
                <td height="29" align="right" class="text12">�绰��</td>
                <td align="left" class="text12"><input name="tel" type="text" id="tel" maxlength="35" /></td>
              </tr>
              <tr>
                <td height="30" align="right" class="text12">���ڵأ�</td>
                <td height="30" align="left"><span class="text12">
                  <input name="addr" type="text" id="addr" maxlength="35" />
                </span></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td height="30" align="right">&nbsp;</td>
                <td height="30" align="left" bgcolor="#FFFFFF"><input name="ChangeAD" type="button" class="input1" value="ȷ ��" onclick="checkform()" /></td>
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
