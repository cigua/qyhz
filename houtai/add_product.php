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
      <td height="22" align="center">&nbsp;</td>
    </tr>
    <tr align="center">
      <td>
	<table width="800" height="310" border="0" cellpadding="2" cellspacing="1">
	<form action="save_product.php?act=add" method="post" name="form10">
          <tr class="tdbg">
            <td height="32" align="right">大类：</td>
            <td><span style="COLOR: #880000">
              <select name="b_id" id="b_id">
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
            <td height="32" align="right">小类：</td>
            <td><span style="COLOR: #880000">
              <select name="category" id="zt">
                <?
	 $query=mysql_query("select * from category");
	 while($rs=mysql_fetch_array($query))
	 {
	 ?>
                <option value="<?=$rs["c_id"]?>">
                  <?=$rs["category"]?>
                </option>
                <?
	  }
	  ?>
              </select>
            </span></td>
          </tr>
          <tr class="tdbg"> 
            <td width="76" height="32" align="right">商品名称:</td>
            <td width="619"><input name="name" type="text" id="name"></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle">销售商：</td>
            <td><input name="sj" type="text" id="sj"></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle">价格；</td>
            <td><input name="price" type="text" id="price"></td>
          </tr>
          <tr class="tdbg">
            <td height="84" align="right" valign="middle">产品描述：</td>
            <td><script charset="utf-8" src="kindeditor/kindeditor.js"></script>
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
     <textarea name="content" display="none" style="width:500px;height:360px;"></textarea>
                      
      </div></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle">图片地址：</td>
            <td><input name="pic" type="text" id="pic"></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle"></td>
            <td><iframe border="0" frameBorder="0" frameSpacing="0" height="21" marginHeight="0" marginWidth="0" noResize scrolling="no" width="100%" vspale="0" src="up.php"></iframe></td>
          </tr>
          <tr class="tdbg"> 
            <td width="76" height="24" align="right" valign="middle"></td>
            <td><input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
          </tr>
	    </form>
        </table>
      </td>
    </tr>
  </table>
  

</body>
</html>
