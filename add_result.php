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
	 $data = mysql_query("INSERT INTO volume_1(stock_book_pgno,description,book_figure,book_value,actual,storage_place,bill_date,warranty)
	 	values('{$stock_book_pgno}','{$description}','{$book_figure}','{$book_value}','{$actual}','{$storage_place}','{$bill_date}','{$warranty}')") 
	 or die(mysql_error()); 
	  echo "success";
?>