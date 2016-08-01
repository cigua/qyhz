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

//添加操作
if($act=='add')
{
  $num=exist_member($userid);
  if(!$num)
  {
    $sql="insert into hy(userid,password,name,sex,tel,email,post_address) values('$userid','$password','$name','$sex','$tel','$email','$addr')";
    $query=mysql_query($sql);
    echo "<script>alert('注册成功,请登录！'); window.location.href='index.php';</script>";
  }
  else
  {
    echo "<script>alert('该会员账号已经存在,请重新注册！'); window.location.href='index.php';</script>";
  }
  //
}
//修改操作
//修改操作
if($act=='edit')
{
	$id=$_POST["id"];
	 $sql="update hy set name='$name',password='$password',sex='$sex',tel='$tel',email='$email',post_address='$addr' where hy_id='$id'";
	 $query=mysql_query($sql);
	 echo "<script>alert('修改成功！'); window.location.href='index.php';</script>";
}



?>