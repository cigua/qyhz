<?
include("../inc/checkadmin.php");
include("../inc/conn.php");
include("../inc/func.php");
$category=$_POST["category"];
$name=$_POST["name"];
$bz=$_POST["bz"];
$b_id=$_POST["b_id"];
$sj=$_POST["sj"];
$price=$_POST["price"];
$content=$_POST["content"];
$pic=$_POST["pic"];
$act=$_GET["act"];
//��Ӳ��� 
if($act=="add")
{
$sql="insert into product(c_id,name,price,content,pic,sj,b_id) values('$category','$name','$price','$content','$pic','$sj','$b_id')";
mysql_query($sql);
echo "<script>alert('�Ѿ���ӳɹ���'); window.location.href='add_product.php';</script>";
}
//����༭����
if($act=="edit")
{
$id=$_POST["id"];
$sql="update product set c_id='$category',name='$name',sj='$sj',pic='$pic',price='$price',content='$content',b_id='$b_id' where product_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ��޸ĳɹ���'); window.location.href='productlist.php';</script>";
}
//�Ƽ�����
if($act=="tj")
{
$id=isint($_GET["id"]);
$value=$_GET["value"];
$url=$_SERVER["HTTP_REFERER"];
$sql="update product set tj='$value' where product_id='$id'";
mysql_query($sql);
echo "<script>window.location.href='".$url."';</script>";
}

//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from product where product_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}
?>