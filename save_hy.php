<?
include("inc/conn.php");
include("inc/func.php");
$userid=$_POST["userid"];
$password=$_POST["password"];
$name=$_POST["name"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$sex=$_POST["sex"];
$addr=$_POST["addr"];
$act=$_GET["act"];

//���Ӳ���
if($act=='add')
{
  $num=exist_member($userid);
  if(!$num)
  {
    $sql="insert into hy(userid,password,name,sex,tel,email,post_address) values('$userid','$password','$name','$sex','$tel','$email','$addr')";
    $query=mysql_query($sql);
    echo "<script>alert('ע��ɹ�,���¼��'); window.location.href='index.php';</script>";
  }
  else
  {
    echo "<script>alert('�û�Ա�˺��Ѿ�����,������ע�ᣡ'); window.location.href='index.php';</script>";
  }
  //
}
//�޸Ĳ���
//�޸Ĳ���
if($act=='edit')
{
	$id=$_POST["id"];
	 $sql="update hy set name='$name',password='$password',sex='$sex',tel='$tel',email='$email',post_address='$addr' where hy_id='$id'";
	 $query=mysql_query($sql);
	 echo "<script>alert('�޸ĳɹ���'); window.location.href='index.php';</script>";
}



?>