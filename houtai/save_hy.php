<?
include("../inc/conn.php");
include("../inc/func.php");
$act=$_GET["act"];
//修改操作
if($act=='edit')
{
	$id=$_POST["id"];
	 $sql="update hy set name='$name',password='$password',sex='$sex',tel='$tel',email='$email',post_address='$addr' where hy_id='$id'";
	 $query=mysql_query($sql);
	 echo "<script>alert('修改成功！'); window.location.href='pllist.php';</script>";
}
if($act=="del")
{
$id=isint($_GET["id"]);
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from hy where hy_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}

?>