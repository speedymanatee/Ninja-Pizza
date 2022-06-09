<?php

$conn = mysqli_connect('localhost','jon','Llamas19_', 'da_database');

if(!$conn){
	echo 'Connection error: ' . mysqli_connect_error();
}

?>