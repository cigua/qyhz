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
//添加操作 
if($act=="add")
{
$sql="insert into product(c_id,name,price,content,pic,sj,b_id) values('$category','$name','$price','$content','$pic','$sj','$b_id')";
mysql_query($sql);
echo "<script>alert('已经添加成功！'); window.location.href='add_product.php';</script>";
}
//大类编辑操作
if($act=="edit")
{
$id=$_POST["id"];
$sql="update product set c_id='$category',name='$name',sj='$sj',pic='$pic',price='$price',content='$content',b_id='$b_id' where product_id='$id'";
mysql_query($sql);
echo "<script>alert('已经修改成功！'); window.location.href='productlist.php';</script>";
}
//推荐操作
if($act=="tj")
{
$id=isint($_GET["id"]);
$value=$_GET["value"];
$url=$_SERVER["HTTP_REFERER"];
$sql="update product set tj='$value' where product_id='$id'";
mysql_query($sql);
echo "<script>window.location.href='".$url."';</script>";
}

//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from product where product_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}
?>