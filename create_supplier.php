<?php

$first_name = $_POST['fName'];
$last_name = $_POST['sName'];
$organization = $_POST['organization'];
$email = $_POST['email'];
$phone_number = $_POST['cell_number'];
$reg = $_POST['reg_number'];
$location = $_POST['location'];
$product = $_POST['product'];
$desc = $_POST['desc'];
$qty = $_POST['qty'];
$cost = $_POST['cost'];

$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br>';

for ($i=0; $i < count($product); $i++) { 
	// How to insert your things into DB
$sql = "INSERT INTO suppliers ".
      "(first_name,last_name, organization, email, phone_number, reg, location, product, description, quantity, cost) ".
      "VALUES ( '$first_name', '$last_name', '$organization', '$email', '$phone_number', '$reg', '$location','$product[$i]', '$desc[$i]', '$qty[$i]', '$cost[$i]')";
      
   mysql_select_db('acc');
   $retval = mysql_query( $sql, $link );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
}


   
echo "Entered data successfully\n";

mysql_close($link);



?>