<?
include("../inc/checkadmin.php");//������¼��֤ҳ��
include("../inc/conn.php");//�������ݿ�����ҳ��
include("../inc/func.php");//����������ҳ��
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
<table width="100%" border="0" cellpadding="2" cellspacing="1">
      <tr>
        <td height="54" align="center"><table width="252" border="0" bgcolor="#E1F4EE">
          <form action="manage_admin.php">
            <tr>
              <td width="60" height="34" align="center">�˺�</td>
              <td width="109" align="center"><input name="key" type="text" id="key" size="15"></td>
              <td width="69" align="center"><input type="submit" name="Submit" value="��  ѯ"></td>
            </tr>
          </form>
        </table></td>
      </tr>
</table>
<table width='44%' border="0" cellpadding="0" cellspacing="0" align=center>
  <tr>
   
     <td><table class="border" border="0" cellspacing="1" width="100%" cellpadding="0">
          <tr class="title" height="22"> 
            <td  width=209 height="22" align="center">ID</td>
            <td align="center"  width=366>�˺�</td>
            <td width="139" align="center" ><strong>����</strong></td>
          </tr>
<?php
$key=$_GET["key"];
$sql="select * from web_admin where 1=1";
if(!empty($key))
{
  $sql=$sql." and web_admin like '%".$key."%'";
}

$sql=$sql." order by admin_id desc";//�����ѯ������area��SQL���
//
$num=mysql_num_rows(mysql_query($sql));//�õ���ѯ�����Ŀ
$pagesize=15;//�趨ÿҳ15������
$pagecount=ceil($num/$pagesize)-1;//�õ���ҳ��

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
$exec=$sql." limit ".($page*$pagesize).",$pagesize"; 
$result=mysql_query($exec);//����ΪPHP��ҳ�Ĺ̶��÷�
if($num==0)//����û���� 
{
 echo "<tr><td colspan=7>��ʱû����Ϣ</td></tr>";
}
else
{
while($rs=mysql_fetch_array($result))//ѭ������ 
{
?>
          <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'"> 
            <td height="24" align="center"><?=$rs["admin_id"]//��ʾ���ֶε��÷�?></td>
            <td align="center"><?=$rs["web_admin"]?></td>
            <td width="139" align="center"><a href="save_admin.php?act=del&id=<?=$rs["admin_id"]?>" onClick="{if(confirm('ȷ��ɾ����?')){return true;}return false;}"><font color="#000000">ɾ�� </font></a> <a href="edit_admin.php?id=<?=$rs["admin_id"]?>">�༭</a></td>
          </tr>
<?
}
}
?>
		 
            </table></td>
  </tr>
		  <tr class="tdbg" onMouseOut="this.style.backgroundColor=''" onMouseOver="this.style.backgroundColor='#BFDFFF'">
			<td align=center  colspan=7  height=30>
			<div align="center" class="text1">
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
else echo "<a href='?page=$pagecount' class='text1'>βҳ</a>";//����Ϊ��ʾ��ҳЧ��
?>
</div>			</td>
		  </tr>
</table>

</td>
</tr></table>
</body>
</html>
