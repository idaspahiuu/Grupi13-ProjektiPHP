<?php
require("dbconfig.php");

$connect = mysqli_connect(servername, username, password, dbname);  
if (!$connect) {  
   die("Connection failed: " . mysqli_connect_error()); 
}

$insert = "INSERT INTO produktet( item_id, item_name, item_image, item_price) VALUES
(1, 'Dog Backpack', 'dog-backpack.jpg', 50.00),
(2, 'Giraffe Notebook', 'GIR-notebook.jpg', 2.00),
(3, 'Bear Pencilcase', 'bear-pencilcase.jpg', 6.00),
(4, 'Nicks Night At The Zoo', 'NicksNight.jpg', 26.00),
(5, 'Black Pencilcase', 'pencil-case4.jpg', 2.50),
(6, 'Watermelon Notebook', 'notebook2.jpg', 2.00),
(7, 'Dog Bottle', 'dog-bottle.jpg', 2.00),
(8, 'Everybody Has Something To Give', 'EverbodyHasSomethingToGive.jpg', 22.00),
(9, 'Spiderman Backpack', 'spiderman-backpack.jpg', 39.00) ";

$insert = "INSERT INTO admin_info (admin_id, admin_name, admin_email, admin_password) VALUES
(1, 'admin', 'admin@gmail.com', '25f9e794323b453885f5181f1b624d0b') ";

$insert = "INSERT INTO cart ( id, p_id, ip_add, user_id, qty) VALUES
(6, 26, '::1', 4, 1),
(9, 10, '::1', 7, 1),
(10, 11, '::1', 7, 1),
(11, 45, '::1', 7, 1),
(44, 5, '::1', 3, 0),
(46, 2, '::1', 3, 0),
(48, 72, '::1', 3, 0),
(49, 60, '::1', 8, 1),
(50, 61, '::1', 8, 1),
(51, 1, '::1', 8, 1),
(52, 5, '::1', 9, 1),
(53, 2, '::1', 14, 1),
(54, 3, '::1', 14, 1),
(55, 5, '::1', 14, 1),
(56, 1, '::1', 9, 1),
(57, 2, '::1', 9, 1),
(71, 61, '127.0.0.1', -1, 1)";

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

if (!mysqli_multi_query($connect, $insert))
{
die('Nuk mund te shtohen te dhenat ne tabele: ' . mysqli_error($connect));
}
echo "Te dhenat u shtuan me sukses\n";
 mysqli_close($connect);
?>