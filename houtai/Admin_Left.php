
<html>
<head>
<title>管理导航</title>
<style type=text/css>
body  { background:#39867B; margin:0px; font:9pt 宋体; }
table  { border:0px; }
td  { font:normal 12px 宋体; }
img  { vertical-align:bottom; border:0px; }
a  { font:normal 12px 宋体; color:#000000; text-decoration:none; }
a:hover  { color:#cc0000;text-decoration:underline; }
.sec_menu  { border-left:1px solid white; border-right:1px solid white; border-bottom:1px solid white; overflow:hidden; background:#C6EBDE; }
.menu_title  { }
.menu_title span  { position:relative; top:2px; left:8px; color:#39867B; font-weight:bold; }
.menu_title2  { }
.menu_title2 span  { position:relative; top:2px; left:8px; color:#cc0000; font-weight:bold; }
</style>
<SCRIPT language=javascript1.2>
function showsubmenu(sid)
{
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
</SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>
<BODY leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
<table width=100% cellpadding=0 cellspacing=0 border=0 align=left>
    <tr><td valign=top><table width=158 border="0" align=center cellpadding=0 cellspacing=0>
      <tr>
        <td height=42 valign=bottom><img src="images/title.gif" width=158 height=38> </td>
      </tr>
    </table>
      <table cellpadding=0 cellspacing=0 width=158 align=center>
  <tr>
        <td height=25 background=images/title_bg_quit.gif class=menu_title id=menuTitle0 onmouseover=this.className='menu_title2'; onmouseout=this.className='menu_title';> 
          <span><a href="#"><b>管理首页</b></a> | 
			<a href=exit.php target=_top><b>退出</b></a></span>        </td>
  </tr>
  <tr>
    <td style="display:" id='submenu0'>
<div class=sec_menu style="width:158">
<table cellpadding=0 cellspacing=0 align=center width=150>
<tr><td height=20>欢迎您登陆后台！</td></tr>
</table>
</div>
<div  style="width:158">
<table cellpadding=0 cellspacing=0 align=center width=130>
<tr><td height=20></td></tr>
</table>
</div>
	</td>
  </tr>
</table>
<table cellpadding=0 cellspacing=0 width=158 align=center>
  <tr>
    <td height=25 class=menu_title onmouseover=this.className='menu_title2'; onmouseout=this.className='menu_title'; background="images/Admin_left_9.gif" id=menuTitle2 onClick="showsubmenu(4)" style="cursor:hand;"><span>系统管理</span> </td>
  </tr>
  <tr>
    <td style="display:block" id='submenu4'><div class=sec_menu style="width:158">
      <table cellpadding=0 cellspacing=0 align=center width=130>
        <tr>
  <td height=20><a href="edit_pwd.php" target="main">修改密码</a></td>
</tr>

        
      </table>
    </div>
        <div  style="width:158">
          <table cellpadding=0 cellspacing=0 align=center width=130>
            <tr>
              <td height=20></td>
            </tr>
          </table>
        </div></td>
  </tr>
</table>
<table cellpadding=0 cellspacing=0 width=158 align=center>
  <tr>
        <td height=25 class=menu_title onmouseover=this.className='menu_title2'; onmouseout=this.className='menu_title'; background="images/Admin_left_1.gif" id=menuTitle1 onClick="showsubmenu(1)" style="cursor:hand;"> 
          <span>分类管理</span> </td>
  </tr>
  <tr>
    <td style="display:block" id='submenu1'>
<div class=sec_menu style="width:158">
<table cellpadding=0 cellspacing=0 align=center width=130>
<tr><td height=20><a href="add_bigclassname.php" target=main>添加大类</a></td></tr>
<tr><td height=20><a href="big_classlist.php" target=main>大类管理</a></td></tr>
<tr><td height=20><a href="add_category.php" target=main>添加小类</a></td></tr>
<tr><td height=20><a href="categorylist.php" target=main>小类管理</a></td></tr>

</table>
</div>
<div  style="width:158">
<table cellpadding=0 cellspacing=0 align=center width=130>
<tr><td height=20></td></tr>
</table>
</div>
	</td>
  </tr>
</table>
<table cellpadding=0 cellspacing=0 width=158 align=center>
  <tr>
        <td height=25 class=menu_title onmouseover=this.className='menu_title2'; onmouseout=this.className='menu_title'; background="images/Admin_left_9.gif" id=menuTitle2 onClick="showsubmenu(2)" style="cursor:hand;"> 
          <span>商品管理</span> </td>
  </tr>
  <tr>
    <td style="display:block" id='submenu2'>
<div class=sec_menu style="width:158">
<table cellpadding=0 cellspacing=0 align=center width=130>

<tr><td height=20><a href="add_product.php" target=main>添加商品</a></td></tr>
<tr><td height=20><a href="productlist.php" target=main>商品管理</a></td></tr>

</table>
</div>
<div  style="width:158">
<table cellpadding=0 cellspacing=0 align=center width=130>
<tr><td height=20></td></tr>
</table>
</div>
	</td>
  </tr>
</table>
<table cellpadding=0 cellspacing=0 width=158 align=center>
  <tr>
    <td height=25 class=menu_title onmouseover=this.className='menu_title3'; onmouseout=this.className='menu_title'; background="images/Admin_left_9.gif" id=menuTitle2 onClick="showsubmenu(3)" style="cursor:hand;"><span>企业信息管理</span> </td>
  </tr>
  <tr>
    <td style="display:block" id='submenu2'><div class=sec_menu style="width:158">
      <table cellpadding=0 cellspacing=0 align=center width=130>
        <tr>
          <td height=20><a href="add_arc.php" target=main>添加信息</a></td>
        </tr>
        <tr>
          <td height=20><a href="list_arc.php" target=main>信息管理</a></td>
        </tr>
      </table>
    </div>
        <div  style="width:158">
          <table cellpadding=0 cellspacing=0 align=center width=130>
            <tr>
              <td height=20></td>
            </tr>
          </table>
        </div></td>
  </tr>
</table>
<table cellpadding=0 cellspacing=0 width=158 align=center>
  <tr>
        <td height=25 class=menu_title onmouseover=this.className='menu_title2'; onmouseout=this.className='menu_title'; background="images/Admin_left_9.gif" id=menuTitle2 onClick="showsubmenu(3)" style="cursor:hand;"> 
          <span>会员管理</span> </td>
  </tr>
  <tr>
    <td style="display:block" id='submenu3'>
<div class=sec_menu style="width:158">
<table cellpadding=0 cellspacing=0 align=center width=130>

<tr>
  <td height=20><a href="hylist.php" target="main">会员管理</a></td>
</tr>

</table>
</div>
<div  style="width:158">
<table cellpadding=0 cellspacing=0 align=center width=130>
<tr><td height=20></td></tr>
</table>
</div>
	</td>
  </tr>
</table>
<table cellpadding=0 cellspacing=0 width=158 align=center>
      <tr>
        <td height=25 class=menu_title onmouseover=this.className='menu_title2'; onmouseout=this.className='menu_title'; background="images/Admin_left_9.gif" id=menuTitle8>&nbsp;</td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </table>
    </div></td>
    </tr>
</table>




</td></tr>
</table>
</body>
</html>
