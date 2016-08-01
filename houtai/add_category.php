<?
include("../inc/conn.php");
include("../inc/func.php");
date_default_timezone_set('Asia/Shanghai');
date_default_timezone_set("PRC");
$time=date("Y-m-d");
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
      <td height="22" align="center"><b>添 加 </b></td>
    </tr>
    <tr align="center">
      <td>
	<table width="100%" border="0" cellpadding="2" cellspacing="1">
	<form action="save_category.php?act=add" method="post" name="form10">
          <tr class="tdbg">
            <td height="32" align="right"><strong>大类名称：</strong></td>
            <td><span style="COLOR: #880000">
              <select name="b_id" id="zt">
                <?
	 $query=mysql_query("select * from bigname");
	 while($rs=mysql_fetch_array($query))
	 {
	 ?>
                <option value="<?=$rs["b_id"]?>">
                <?=$rs["bigcm"]?>
                </option>
                <?
	  }
	  ?>
              </select>
            </span></td>
          </tr>
          <tr class="tdbg"> 
            <td width="100" height="32" align="right"><strong>小类名称：</strong></td>
            <td width="595"><span style="COLOR: #880000">
              <input name="category" type="text" id="category">
            </span><font color="#FF0000">*</font></td>
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
