<?php 
/**MySQLi connect to DB */
$conn = mysqli_connect('localhost', 'selene', 'SelHdz_15', 'sel_pizza');

/**Check connection */
if(!$conn){
   echo 'connection error: ' . mysqli_connect();
}
?>