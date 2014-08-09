<?php
include 'config.php';
	$stock_book_pgno=$_GET['bukpg'];
	$description=$_GET['descp'];
	$book_figure=$_GET['bf'];
	$book_value=$_GET['bv'];
	$actual=$_GET['av'];
	$storage_place=$_GET['sp'];
	$bill_date=$_GET['bd'];
	$warranty=$_GET['wd'];
	$eid=$_GET['eid'];
	mysql_query("UPDATE volume_1 SET stock_book_pgno='{$stock_book_pgno}',description='{$description}',book_figure='{$book_figure}',book_value='{$book_value}',actual='{$actual}',storage_place='{$storage_place}',bill_date='{$bill_date}',warranty='{$warranty}' WHERE id=$eid") or die(mysql_error()) ;
echo "updated";
?>