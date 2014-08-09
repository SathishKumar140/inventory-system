<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function show()
{
var ddd=document.getElementById("bukpg").value;
alert(ddd);
}
</script>
</head>        
<body>

<div class="add">

	<form action="#">
	 <table>	
	 			<tr><td><div id="my"></div></td><td></td></tr>
				<tr><td>Stock Book Pgno</td> <td><input type="text" id="bukpg"/></td></tr>
				<tr><td>Description</td> <td><input type="text" id="descp"/></td></tr>
				<tr><td>Book Figure</td> <td><input type="text" id="bf"/></td></tr>
				<tr><td>Book Value</td> <td><input type="text" id="bv"/></td></tr>
				<tr><td>Actual Value</td> <td><input type="text" id="av"/></td></tr>
				<tr><td>Storage Place</td> <td><input type="text" id="sp"/></td></tr>
				<tr><td>Bill Date</td> <td><input type="text" id="bd"/></td></tr>
				<tr><td>Warranty Duration</td> <td><input type="text" id="wd"/><td></tr>		
				<tr><td></td><td><button type="button" onclick="result()">Add Data</button></td></tr>
	 </table>	

</form>
</div>
</body>
</html>

