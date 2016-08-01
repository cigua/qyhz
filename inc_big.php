<table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
        <tr>
          <td height="35" bgcolor="#E7CD9A" class="bai14"> 　产品分类</td>
        </tr>
        <tr>
          <td height="140" align="center" valign="middle" bgcolor="#FDFCF8">　          
            <table width="95%" border="0" cellspacing="0" cellpadding="0">
              <?
		$sql="select * from bigname order by b_id  desc";
		$query=mysql_query($sql);
		while($rs=mysql_fetch_array($query))
		{
		?>
              <tr>
                <td width="20%" height="30" align="center" valign="middle"><img src="images/ico03.jpg" width="8" height="6" /></td>
                <td width="80%" align="left" valign="middle" class="text12"><a href="cp.php?b_id=<?=$rs["b_id"]?>" >
                  <?=$rs["bigcm"]?>
                </a></td>
              </tr>
              <tr>
                <td height="1" colspan="2" background="images/dot.gif"></td>
              </tr>
              <?
		}
		mysql_free_result($query);
		?>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
            </table></td>
        </tr>
      </table>