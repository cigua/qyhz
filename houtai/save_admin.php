<?
include("../inc/checkadmin.php");//������¼��֤ҳ��
include("../inc/conn.php");//�������ݿ�����ҳ��
$web_admin=$_POST["web_admin"];//
$password=$_POST["password"];//
$act=$_GET["act"];//�õ���������act����
echo $area;
//��Ӳ���
if($act=="add")//����act��ֵ��add,��ô�ǲ������ݿ����
{
  $sql="insert into web_admin(web_admin,password) values('$web_admin','$password')";//������SQL���
   mysql_query($sql);//ִ�и�sql���Ĳ�ѯ
   echo "<script>alert('��ӳɹ���'); window.location.href='add_admin.php';</script>";//ִ����Ϻ���е�������ʾ
}
//�༭����
if($act=="edit")//����act��edit����ô�Ǳ༭����
{
$id=$_POST["id"];//�õ���������IDֵ
$sql="update web_admin set web_admin='$web_admin',password='$password' where admin_id='$id'";//����ID�ڵ�����dq�н����޸ĵ�SQL���
mysql_query($sql);
echo "<script>alert('�Ѿ��޸ĳɹ���'); window.location.href='manage_admin.php';</script>";//������ʾ������ʾ
}
//ɾ������
if($act=="del")//����act��del,��ôִ��ɾ������
{
$id=$_GET["id"];//�õ���������IDֵ
$url=$_SERVER["HTTP_REFERER"];//�õ���һҳ�ĵ�ַ
$sql="delete from web_admin where admin_id='$id'";//ɾ����SQL���
mysql_query($sql);//ִ�в�ѯ
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";//������ʾ���ڲ�ת��
}
?>