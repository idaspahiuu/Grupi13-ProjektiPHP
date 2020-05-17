<?php
require("dbconfig.php");

$connect = mysqli_connect(servername, username, password, dbname);  
if (!$connect) {  
   die("Connection failed: " . mysqli_connect_error()); 
}

$insert = "INSERT INTO produktet( item_id, item_name, item_image, item_price) VALUES
(1, 'Dog Backpack', 'dog-backpack', 50.00),
(2, 'Giraffe Notebook', 'GIR-notebook', 2.00),
(3, 'Bear Pencilcase', 'bear-pencilcase', 6.00),
(4, 'Nicks Night At The Zoo', 'NicksNight', 26.00),
(5, 'Black Pencilcase', 'pencil-case4', 2.50),
(6, 'Watermelon Notebook', 'notebook2', 2.00),
(7, 'Dog Bottle', 'dog-bottle', 2.00),
(8, 'Everybody Has Something To Give', 'EverbodyHasSomethingToGive', 22.00),
(9, 'Spiderman Backpack', 'spiderman-backpack', 39.00) ";

/*
$insert = "INSERT INTO admin_info (admin_id, admin_name, admin_email, admin_password) VALUES
(1, 'admin', 'admin@gmail.com', '25f9e794323b453885f5181f1b624d0b') ";


$insert = "INSERT INTO user_info ( user_id, first_name, last_name, email, password, mobile, address) VALUES
(12, 'Mevlane', 'Dullovi', 'mevlanedullovi15@gmail.com', 'mevlaneee', '38345490872', 'Kacanik'),
(15, 'Linda', 'Korca', 'lindakorca@gmail.com', '346778', '536487276', ',Gjilan' ),
(16, 'Ida', 'Spahiu', 'idaspahiu@gmail.com', '1234534', '9877654334', 'Prizren' ),
(19, 'Andi', 'Dullovi', 'dullovi17@gmail.com', 'dullovi12', '9871236534', 'Kacanik'),
(21, 'Almir', 'Dullovi', 'mili123@gmail.com', '1234545662', '202-555-01', 'Prishtine'),
(22, 'Ejrisa', 'Korca', 'risakk@gmail.com', '1234534', '9877654334', 'Mitrovice'),
(23, 'Ela', 'Spahiu', 'ela12@gmail.com', 'ela321@123', '9876543234', 'Peje'),
(24, 'Ermira', 'Axhami', 'erira.a03@gmail.com', 'ermi@123', '9535688928', 'Ferizaj'),
(25, 'Rilinda', 'Berisha', 'ril.berisha@gmail.com', 'rilinda123', '9535688928', 'Lipjan')";
*/
if (!mysqli_multi_query($connect, $insert))
{
die('Nuk mund te shtohen te dhenat ne tabele: ' . mysqli_error($connect));
}
echo "Te dhenat u shtuan me sukses\n";
 mysqli_close($connect);
?>