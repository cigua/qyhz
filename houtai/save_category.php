<?
include("../inc/conn.php");
include("../inc/func.php");
$dl=$_POST["b_id"];
$category=$_POST["category"];
$act=$_GET["act"];
//��Ӳ���
if($act=='add')
{
 $sql="insert into category(category,b_id) values('$category','$dl')";
 $query=mysql_query($sql);
 echo "<script>alert('��ӳɹ���'); window.location.href='add_category.php';</script>";
}
//�޸Ĳ���
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update category set category='$category',b_id='$dl' where c_id='$id'";
 $query=mysql_query($sql);
 echo "<script>alert('�޸ĳɹ���'); window.location.href='categorylist.php';</script>";
}
//ɾ������
if($act=="del")
{
$id=isint($_GET["id"]);
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from category where c_id='$id'";
mysql_query($sql);
$sqlt="delete from product where c_id='$id'";
mysql_query($sqlt);
echo "<script>alert('�Ѿ�ɾ��С�࣬С���²�Ʒ��'); window.location.href='".$url."';</script>";
}

?>