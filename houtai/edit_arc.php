<?
include("../inc/conn.php");
include("../inc/func.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��Ӳ�Ʒ</title>
<link rel="stylesheet" type="text/css" href="Admin_Style.css">
</head>

<body onLoad="javascipt:setTimeout('loadForm()',2000);">

  <table border="0" align="center" cellpadding="0" cellspacing="0" class="border">
    <tr class="title">
      <td height="22" align="center"><b>�� �� </b></td>
    </tr>
    <tr align="center">
      <td>
<?php
$id=$_GET["id"];
$sql="select * from arc where arc_id='$id'";
$q=mysql_query($sql);
$rs=mysql_fetch_assoc($q);
?>
	<table width="100%" border="0" cellpadding="2" cellspacing="1">
	<form name="form10"  action="save_arc.php?act=edit" method="post"  >
	<input type="hidden" name="id" value="<?php echo $id?>">
          <tr class="tdbg"> 
            <td width="100" height="32" align="right"><strong>���ƣ�</strong></td>
            <td width="595" align="left"><select name="lb" id="lb">
              <option <? if($rs["lb"]=='��������') echo "selected"?>>��������</option>
              <option <? if($rs["lb"]=='���Ŷ�̬') echo "selected"?>>���Ŷ�̬</option>
            
            </select>
            <font color="#FF0000">*</font></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle"><strong>���⣺</strong></td>
            <td align="left" valign="middle"><input name="title" type="text" id="title" size="35" value="<?=$rs["title"]?>"></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle"><strong>���ݣ�</strong></td>
            <td align="left"><script charset="utf-8" src="kindeditor/kindeditor.js"></script>
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
     <textarea name="content" display="none" style="width:500px;height:360px;"><?=$rs["content"]?></textarea></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle">ͼƬ��ַ��</td>
            <td align="left"><input name="pic" type="text" id="pic" value="<?=$rs["pic"]?>"></td>
          </tr>
          <tr class="tdbg">
            <td height="24" align="right" valign="middle"></td>
            <td align="left"><iframe border="0" frameBorder="0" frameSpacing="0" height="21" marginHeight="0" marginWidth="0" noResize scrolling="no" width="100%" vspale="0" src="up.php"></iframe></td>
          </tr>
          <tr class="tdbg"> 
            <td width="100" height="24" align="right" valign="middle"></td>
            <td><input type="submit" name="Submit" value="�ύ"> <input type="reset" name="Submit2" value="����"></td>
          </tr>
		  </form>
        </table>
      </td>
    </tr>
  </table>
  

</body>
</html>
