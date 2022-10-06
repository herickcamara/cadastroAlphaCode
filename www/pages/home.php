<?php
require 'components/header/header.php';
require 'components/form/index.php';
require 'database/connectionDatabase.php';



 $list = [];
$data = $pdo->query("SELECT * FROM usuario");
if($data->rowCount() > 0){
  $list = $data->fetchAll(PDO::FETCH_ASSOC);
}
?>


      <?= HeaderComponent("Cadastro de contatos")  ?>
      <?= fomrComponent() ?>
    <hr>

<div class="container p-5 mt-4 mb-5">

    <table class="table border shadow p-3 mb-5 bg-body ">
        <thead class=" thead ">
          <tr>
            <th class="text-center" >Nome</th>
            <th class="text-center" >Data de nascimento</th>
            <th class="text-center" >E-mail</th>
            <th class="text-center" >Celular para contato</th>
            <th class="text-center" >Ações</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach($list as $user): ?>
          <tr  >
            <td class="text-center  " ><?=$user['nameUser']; ?></td>
            <td class="text-center  " ><?=$user['date_of_birth']; ?></td>
            <td class="text-center  " ><?=$user['email']; ?></td>
            <td class="text-center  " ><?=$user['cel']; ?></td>
            <td class="d-flex text-center" >
            <a  href='?page=edit&id=<?=$user['id']; ?>' class='btn' >
                    <img src='styles/assets/editar.png' style='width:15px;height:15px;' alt='editar' />
                </a>
                <a href="?page=del&id=<?=$user['id']; ?>" class='btn'>
                <img src='styles/assets/excluir.png' style='width:15px;height:15px;' alt='excluir' />

                </a>
              
            </td>
          </tr>
        <?php endforeach; ?>
          
        </tbody>
      </table>
</div>