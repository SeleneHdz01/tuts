<?php 
/**MySQLi connect to DB */
$conn = mysqli_connect('localhost', 'root', '', 'sel_bd');

/**Check connection */
if(!$conn){
   echo 'connection error: ' . mysqli_connect();
}
?>