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
      <td height="22" align="center"><b>添 加 </b></td>
    </tr>
    <tr align="center">
      <td>
<?
$id=$_GET["id"];
$sql="select * from category where c_id='$id'";
$query=mysql_query($sql);
$rs=mysql_fetch_assoc($query);
?>
	<table width="100%" border="0" cellpadding="2" cellspacing="1">
	<form action="save_category.php?act=edit" method="post">
<input type="hidden" name="id" value="<?=$id?>">
          <tr class="tdbg">
            <td height="32" align="right"><strong>大类名称：</strong></td>
            <td><span style="COLOR: #880000">
              <select name="b_id" id="zt">
                <?    
$sql = "select * from bigname";    
$result = mysql_query( $sql );    
while($res = mysql_fetch_array($result)){    
?>
                <option value="<? echo $res["b_id"]; ?>" <? if($rs["b_id"]==$res["b_id"]) echo "selected"?>><? echo $res["bigcm"]; ?></option>
                <? 
		}
		mysql_free_result($result);
		?>
              </select>
            </span></td>
          </tr>
          <tr class="tdbg"> 
            <td width="100" height="32" align="right"><strong>名称：</strong></td>
            <td width="595"><span style="COLOR: #880000">
              <input name="category" type="text" id="category" value="<?=$rs["category"]?>">
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
