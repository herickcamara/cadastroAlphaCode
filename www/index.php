<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alphacode</title>
    <style>

#input {
  width: 100%;
    outline: 0;
} 
.focus{
  flex-direction: column-reverse;
    display: flex;
}
#input:focus{
  border-bottom:2px solid rgba(6, 142, 208, 1) !important ;
}
 #input:focus~label{
  color:rgba(6, 142, 208, 1) !important ;
}
</style>
  </head>
  <body>
     <?php
  switch(@$_REQUEST["page"]){
    case "edit";
    include('./pages/edit.php');
    break;
    case "del";
    include('./crud/delete.php');
    break;
    default:
    include('./pages/home.php');


  }

?>

<footer class=" d-flex align-items-center p-4 justify-content-between text-white rounded-bottom  ">

    <span  >Termos | Políticas</span>
    <div>

        <span>© Copyright 2022 | Desenvolvido por</span>
        <img  class="alphacodeImg" src="./styles/assets/logo_rodape_alphacode.png" alt="">
    </div>
    <span>©Alphacode IT Solutions 2022</span>
</footer>

    <script src="./js/bootstrap.min.js"></script>
  </body>
</html> 