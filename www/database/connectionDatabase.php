<?php
require 'configDatabase.php';
$pdo = new PDO("mysql:dbname=".$DB_NAME.";host=".$DB_HOST,$DB_USER,$DB_PASS );
// $sql = $pdo->query("SELECT * FROM usuario");
// if($sql->rowCount() > 0) {

// $users = $sql->fetchAll( PDO::FETCH_ASSOC) ;
// print_r($users);
// foreach($users as $user){
// echo "<li>".$user['name']."<li>";
// }
// }else{
// echo 'nada';
// } 
?>