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
  $id=$_GET["id"];
  $sql="select * from product where product_id='$id'";
  $query=mysql_query($sql);
  $rs=mysql_fetch_assoc($query);
  ?>
	<table width="800" border="0" cellpadding="2" cellspacing="1">
	<form action="save_product.php?act=edit" method="post" name="form10">
	<input type="hidden" name="id" value="<?=$id?>">
          <tr class="tdbg">
            <td height="32" align="right">大类：</td>
            <td><span style="COLOR: #880000">
              <select name="b_id" id="select">
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
            <td height="32" align="right">小类：</td>
            <td><span style="COLOR: #880000">
              <select name="category" id="zt">
        
        <?    
$sql = "select * from category";    
$result = mysql_query( $sql );    
while($res = mysql_fetch_array($result)){    
?>
        <option value="<? echo $res["c_id"]; ?>" <? if($rs["c_id"]==$res["c_id"]) echo "selected"?>><? echo $res["category"]; ?></option>
        <? 
		}
		mysql_free_result($result);
		?>
      </select>
            </span></td>
          </tr>
          <tr class="tdbg"> 
            <td width="92" height="32" align="right">名称：</td>
            <td width="697"><input name="name" type="text" id="name" value="<?=$rs["name"]?>"></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle">销售商：</td>
            <td><input name="sj" type="text" id="sj" value="<?=$rs["sj"]?>"></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle">价格；</td>
            <td><input name="price" type="text" id="price" value="<?=$rs["price"]?>"></td>
          </tr>
          <tr class="tdbg">
            <td height="84" align="right" valign="middle">产品描述：</td>
            <td>
			<script charset="utf-8" src="kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : 'kindeditor/plugins/code/prettify.css',
				uploadJson : 'kindeditor/php/upload_json.php',
				fileManagerJson : 'kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterBlur : function() {
this.sync();
K.ctrl(document, 13, function() {
K('form[name=form10]')[0].submit();
});
K.ctrl(this.edit.doc, 13, function() {
K('form[name=form10]')[0].submit();
});
}
			});
			prettyPrint();
		});
	</script>
     <textarea name="content" display="none" style="width:500px;height:360px;"><?=$rs["content"]?></textarea>
                      
      </div>			</td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle">图片地址：</td>
            <td><input name="pic" type="text" id="pic" value="<?=$rs["pic"]?>"></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle"></td>
            <td><iframe border="0" frameBorder="0" frameSpacing="0" height="21" marginHeight="0" marginWidth="0" noResize scrolling="no" width="100%" vspale="0" src="up.php"></iframe></td>
          </tr>
          <tr class="tdbg"> 
            <td width="92" height="24" align="right" valign="middle"></td>
            <td><input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
          </tr>
		  </form>
        </table>
      </td>
    </tr>
  </table>
  

</body>
</html>
