<?
include("../inc/conn.php");
include("../inc/func.php");
$title=$_POST["title"];
$content=$_POST["content"];
$pic=$_POST["pic"];
$lb=$_POST["lb"];
date_default_timezone_set("PRC");
$time=date("Y-m-d");
$act=$_GET["act"];
//添加操作
if($act=='add')
{
 $sql="insert into arc(lb,title,content,arc_rq,pic) values('$lb','$title','$content','$time','$pic')";
mysql_query($sql);
 echo "<script>alert('添加成功！'); window.location.href='add_arc.php';</script>";
}
//修改操作
if($act=='edit')
{
   $id=$_POST["id"];
   $sql="update arc set title='$title',lb='$lb',content='$content',pic='$pic' where arc_id='$id'";
mysql_query($sql);
   echo "<script>alert('修改成功！'); window.location.href='list_arc.php';</script>";
}
//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from arc where arc_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}

?>