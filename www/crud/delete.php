<?php
require 'database/connectionDatabase.php';
 $id = filter_input(INPUT_GET,'id') ;
 if($id){
   $data = $pdo->prepare("DELETE FROM usuario WHERE id= :id");
   $data->bindValue(':id',$id);
   $data->execute();
   
     
    }

  echo "<script>location.href='?page=home'</script>";
  exit;

?>