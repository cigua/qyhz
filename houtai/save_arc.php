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
//��Ӳ���
if($act=='add')
{
 $sql="insert into arc(lb,title,content,arc_rq,pic) values('$lb','$title','$content','$time','$pic')";
mysql_query($sql);
 echo "<script>alert('��ӳɹ���'); window.location.href='add_arc.php';</script>";
}
//�޸Ĳ���
if($act=='edit')
{
   $id=$_POST["id"];
   $sql="update arc set title='$title',lb='$lb',content='$content',pic='$pic' where arc_id='$id'";
mysql_query($sql);
   echo "<script>alert('�޸ĳɹ���'); window.location.href='list_arc.php';</script>";
}
//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from arc where arc_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}

?>