<!DOCTYPE html>
<html>
<head>
</head>        
<body>
<?php
include 'config.php';
               $slno=$_GET['eid'];

               $fetch= mysql_query("SELECT * FROM volume_1 where id=$slno") or die(mysql_error());
               while($info=mysql_fetch_array($fetch))
               {
?>
<div class="add">

	<form action="#">
	 <table>	
	 		<input type="hidden" id = "eid" value="<?php echo $slno; ?>"/>
	 			<tr><td><div id="my"></div></td><td></td></tr>
				<tr><td>Stock Book Pgno</td> <td><input type="text" value="<?php echo $info['stock_book_pgno']; ?>" id="bukpg"/></td></tr>
				<tr><td>Description</td> <td><input type="text"value="<?php echo $info['description']; ?>"  id="descp"/></td></tr>
				<tr><td>Book Figure</td> <td><input type="text" value="<?php echo $info['book_figure']; ?>" id="bf"/></td></tr>
				<tr><td>Book Value</td> <td><input type="text" value="<?php echo $info['book_value']; ?>" id="bv"/></td></tr>
				<tr><td>Actual Value</td> <td><input type="text" value="<?php echo $info['actual']; ?>" id="av"/></td></tr>
				<tr><td>Storage Place</td> <td><input type="text" value="<?php echo $info['storage_place']; ?>" id="sp"/></td></tr>
				<tr><td>Bill Date</td> <td><input type="text" value="<?php echo $info['bill_date']; ?>" id="bd"/></td></tr>
				<tr><td>Warranty Duration</td> <td><input type="text" value="<?php echo $info['warranty']; ?>" id="wd"/><td></tr>		
				<tr><td></td><td><button type="button" onclick="editresult()">Save Changes</button></td></tr>
	 </table>	

</form>
</div>
<?}?>
</body>
</html>

