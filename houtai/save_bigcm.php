<?
include("../inc/conn.php");
include("../inc/func.php");
$dl=$_POST["dl"];
$act=$_GET["act"];
//��Ӳ���
if($act=='add')
{
 $sql="insert into bigname(bigcm) values('$dl')";
 $query=mysql_query($sql);
 echo "<script>alert('��ӳɹ���'); window.location.href='add_bigclassname';</script>";
}
//�޸Ĳ���
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update bigname set bigcm='$dl' where b_id='$id'";
 $query=mysql_query($sql);
 echo "<script>alert('�޸ĳɹ���'); window.location.href='big_classlist.php';</script>";
}
//ɾ������
if($act=="del")
{
$id=isint($_GET["id"]);
$url=$_SERVER["HTTP_REFERER"];
			$cx=mysql_query("select * from category where b_id='".$id."'");
			$rst=mysql_fetch_assoc($cx);
			$c_id=$rst["c_id"];
			echo $c_id;
			mysql_free_result($cx);
$sqlp="delete from product where c_id='$c_id'";
mysql_query($sqlp);			
$sqlt="delete from category where b_id='$id'";
mysql_query($sqlt);
$sql="delete from bigname where b_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ����'); window.location.href='".$url."';</script>";
}

?>