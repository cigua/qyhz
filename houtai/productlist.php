<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
?>
<html>
<head>
<title>����</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="GENERATOR" content="Microsoft FrontPage 6.0">
<link rel="stylesheet" type="text/css" href="Admin_Style.css"></head>
<body leftmargin="2" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="border">
  <tr class="topbg"> 
    <td height="22" colspan="2"  align="center"><strong>�� ̨ �� ��</strong></td>
  </tr>
  <tr class="tdbg"> 
    <td width="70" height="30" ><strong>��������</strong></td>
    <td>&nbsp;</td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="border">
  <tr class="title"> 
    <td height="22">����</td>
  </tr>
</table>
<br>
<table width="351" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="productlist.php">
    <tr>
      <td width="98" height="33" align="center">��Ʒ��:</td>
      <td width="173" align="center"><input name="key" type="text" id="key" size="15"></td>
      <td width="80" align="center"><input type="submit" name="Submit" value="��ѯ"></td>
    </tr>
  </form>
</table>
<br>

<table width='66%' border="0" cellpadding="0" cellspacing="0" align=center>
  <tr>
   
     <td><table class="border" border="0" cellspacing="1" width="100%" cellpadding="0">
          <tr class="title" height="22"> 
            <td width="95" height="22" align="center"><strong>����</strong></td>
            <td align="center"  width=112><strong>С��</strong></td>
            <td align="center"  width=122><strong>�̼�</strong></td>
            <td align="center"  width=227><strong>����</strong></td>
            <td  width=83 align="center">�۸�</td>
            <td align="center"  width=85>ͼƬ</td>
            <td align="center"  width=116>�Ƿ��Ƽ�</td>
            <td width="78" align="center" ><strong>����</strong></td>
          </tr>
           <?php
$key=$_GET["key"];
$sql="select * from product where 1=1";
if(!empty($key))
{
  $sql=$sql." and name like '%".$key."%'";
}

$num=mysql_num_rows(mysql_query($sql));
$pagesize=5;
$pagecount=ceil($num/$pagesize)-1;

if(empty($_GET["page"]))
{
$page=0;
}
else
{
$page=$_GET["page"];
}
if($page<0)
{
$page=0;
}
if($page>$pagecount)
{
$page=ceil($num/$pagesize)-1;
}
$nextpage=$page+1;
$prepage=$page-1;
$exec=$sql." order by product_id desc limit ".($page*$pagesize).",$pagesize"; 
$result=mysql_query($exec);
if($num==0)
{
 echo "<tr><td colspan=7>��ʱû����Ϣ</td></tr>";
}
else
{
while($rs=mysql_fetch_array($result))
{
?>
          <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'"> 
            <td height="24" align="center"><?
			$cx=mysql_query("select * from bigname where b_id='".$rs["b_id"]."'");
			$rst=mysql_fetch_assoc($cx);
			echo $rst["bigcm"];
			mysql_free_result($cx);
			?></td>
            <td align="center"><?=turn_fenlei($rs["c_id"])?></td>
            <td align="center"><?=$rs["sj"]?></td>
            <td align="center"><?=$rs["name"]?></td>
            <td align="center"><?=$rs["price"]?>Ԫ</td>
            <td align="center"><img src="../<?=$rs["pic"]?>" width="30" height="30"></td>
            <td align="center"><? if($rs["tj"]==1){
	  echo "<a href='save_product.php?act=tj&value=0&id=".$rs["product_id"]."'><img src='images/icon_01.gif' border=0></a>";
	  }
	  else{
	  echo "<a href='save_product.php?act=tj&value=1&id=".$rs["product_id"]."'><img src='images/icon_02.gif' border=0></a>";
	  }
	  ?></td>
            <td width="78" align="center"><a href="save_product.php?act=del&id=<?=$rs["product_id"]?>" class="text12">ɾ��</a> <a href="edit_product.php?id=<?=$rs["product_id"]?>">�޸�</a></td>
          </tr>
<?
  }
}
?>
		  <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'">
			<td align=center  colspan=8  height=30><div align="center" class="text1">
����<?=$num?>����¼����<?=ceil($num/$pagesize)?>ҳ��ʾ����ǰ�ǵ�<?=$page+1?>ҳ
<a href="?page=0" class="text1">��ҳ</a>
<?
if ($page==0) echo "<span class='text1'>��һҳ</span>";
else echo "<a href='?page=$prepage' class='text1'>��һҳ</a>";
?>
<?
if($page==$pagecount) echo "<span class='text1'>��һҳ</span>";
else echo "<a href='?page=$nextpage' class='text1'>��һҳ</a>"; 
?>

<?
if($page==$pagecount) echo "<span class='text1'>βҳ</span>";
else echo "<a href='?page=$pagecount' class='text1'>βҳ</a>";
?>

</div></td>
		  </tr>
        </table>

</td>
</tr></table>
</body>
</html>
