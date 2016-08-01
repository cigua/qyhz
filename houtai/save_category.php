<?
include("../inc/conn.php");
include("../inc/func.php");
$dl=$_POST["b_id"];
$category=$_POST["category"];
$act=$_GET["act"];
//添加操作
if($act=='add')
{
 $sql="insert into category(category,b_id) values('$category','$dl')";
 $query=mysql_query($sql);
 echo "<script>alert('添加成功！'); window.location.href='add_category.php';</script>";
}
//修改操作
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update category set category='$category',b_id='$dl' where c_id='$id'";
 $query=mysql_query($sql);
 echo "<script>alert('修改成功！'); window.location.href='categorylist.php';</script>";
}
//删除操作
if($act=="del")
{
$id=isint($_GET["id"]);
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from category where c_id='$id'";
mysql_query($sql);
$sqlt="delete from product where c_id='$id'";
mysql_query($sqlt);
echo "<script>alert('已经删除小类，小类下产品！'); window.location.href='".$url."';</script>";
}

?>