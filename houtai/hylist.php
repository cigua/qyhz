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
<link rel="stylesheet" type="text/css" href="Admin_Style.css">

</head>
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
<table width="410" border="0" align="center" cellpadding="0" cellspacing="0">
  <form action="hylist.php">
    <tr>
      <td width="131" height="33" align="right">�ʺ�:</td>
      <td width="152" align="center"><input name="key" type="text" id="key" size="15"></td>
      <td width="127" align="center"><input type="submit" name="Submit" value="��ѯ"></td>
    </tr>
  </form>
</table>
<br>
<table width='80%' border="0" cellpadding="0" cellspacing="0" align=center><tr>
   
     <td><table class="border" border="0" cellspacing="1" width="100%" cellpadding="0">
          <tr class="title" height="22"> 
            <td height="22" width="44" align="center">&nbsp;</td>
            <td width="103" align="center"  height="22"><strong>�˺�</strong></td>
            <td align="center"  width=243><strong>����</strong></td>
            <td align="center"  width=199>����</td>
            <td align="center"  width=151>�Ա�</td>
            <td align="center"  width=152>email</td>
            <td width="164" align="center" ><strong>����</strong></td>
          </tr>
          <?php
$key=$_GET["key"];
$sql="select * from hy where 1=1";
if(!empty($key))
{
  $sql=$sql." and userid like '%".$key."%'";
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
$exec=$sql." order by hy_id desc limit ".($page*$pagesize).",$pagesize"; 
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
            <td width="44" height="24" align="center">&nbsp;</td>
            <td width="103" align="center"><?=$rs["userid"]?></td>
            <td align="center"><?=$rs["password"]?></td>
            <td align="center"><?=$rs["name"]?></td>
            <td align="center"><?=$rs["sex"]?></td>
            <td align="center"><?=$rs["email"]?></td>
            <td width="164" align="center"><a href="edit_hy.php?id=<?=$rs["product_id"]?>"></a> <a href="save_hy.php?act=del&id=<?=$rs["hy_id"]?>" class="text12">ɾ��</a></td>
          </tr>
<?
  }
}
?>
		  <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'">
			<td align=center  colspan=7  height=30><div align="center" class="text1">
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
