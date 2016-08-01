<table width="240" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="border">
        <tr>
          <td width="236" height="33" align="left" bgcolor="#E7CD9A">¡¡<span class="bai14">ÍÆ¼ö²úÆ·</span></td>
        </tr>
        <tr>
          <td height="187" align="center"><table width="97%" border="0" cellspacing="0" cellpadding="0">
		  <?
		$sql="select * from product where tj=1 order by product_id   limit 2";
		$query=mysql_query($sql);
		while($rs=mysql_fetch_array($query))
		{
		?>
            <tr>
              <td height="173" align="center"><table width="90%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                <tr>
                  <td height="143" align="center" valign="bottom"><a href="product_info.php?id=<?=$rs["product_id"]?>" ><img src="<?=$rs["pic"]?>" class="img" width="194" height="127" /></a></td>
                </tr>
                <tr>
                  <td height="25" align="center" bgcolor="#FFE1E2" ><a href="product_info.php?id=<?=$rs["product_id"]?>" class="text12"><?=chgtitle($rs["name"],14)?></a></td>
                </tr>
              </table></td>
            </tr>
          <?
		}
		mysql_free_result($query);
		?>  
            
          </table></td>
        </tr>
      </table>