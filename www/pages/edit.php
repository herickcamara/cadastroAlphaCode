<?php
require 'database/connectionDatabase.php';
require 'components/header/header.php';
 $id = filter_input(INPUT_GET,'id') ;
 if($id){
   $data = $pdo->prepare("SELECT * FROM usuario WHERE id= :id");
   $data->bindValue(':id',$id);
   $data->execute();
   if($data->rowCount() > 0){
     $list = $data->fetch(PDO::FETCH_ASSOC);
     $name = $list['nameUser'];
     $email = $list['email'];
     $date_of_birth = $list['date_of_birth'];
     $job = $list['job'];
     $tel = $list['tel'];
     $cel = $list['cel'];
     $possui_whatsapp = $list['possui_whatsapp'] ? "checked" : "";
     $send_notifications_SMS = $list['send_notifications_SMS'] ? "checked" : "";
     $send_notifications_by_email = $list['send_notifications_by_email'] ? "checked" : "" ;
   }else{
   echo "<script>location.href='/'</script>";
   exit;
   }
}else{
   echo "<script>location.href='/'</script>";
  exit;
}
?>  
 
<?= HeaderComponent('Editar cadastro') ;?>
    <div class='container-fluid'>
        <form class='row p-4 justify-content-around mt-4' method='POST' action='crud/editAction.php' >
          <input type='hidden'  value='<?=$id?>' name='id'  />
          <div class='col-md-5  p-4'>
              <div class='focus'>
                <input required type='text' name='name' value='<?=$name?>' class='border  mb-5 border-0  border-bottom' id='input'  placeholder='Ex.: Letícia Pacheco dos Santos'>
                <label  class='form-label text-secondary fw-bold'>Nome completo</label>
              </div>
    <div class='focus'>

      <input required type='email' name='email'value='<?=$email?>'   id='input' class=' border mb-5  border-0  border-bottom' placeholder='Ex.: leticia@gmail.com'>
      <label class='form-label text-secondary fw-bold'>Email</label>
    </div>
              <div class='focus'>

                <input type='text' name='tel' value='<?=$tel?>'  id='input' class=' border mb-5  border-0  border-bottom' placeholder='Ex.: (11) 4033-2019'>
                <label  class='form-label text-secondary fw-bold'>Telefone para contato</label>
              </div>


              <div class='form-check mt-5 mb-5'>
                <input class='form-check-input' name='whatsapp' value='sim' <?=$possui_whatsapp?> type='checkbox' id='gridCheck'>
                <label class='form-check-label'  for='gridCheck'>
                    Número de celular possui Whatsapp
                </label>
              </div>
              <div class='form-check mt-5 mb-5'>
                <input class='form-check-input' name='sms' value='sim' <?=$send_notifications_SMS?>   type='checkbox' id='gridCheck'>
                <label class='form-check-label' for='gridCheck'>
                    Enviar notificações por SMS
                </label>
              </div>
            </div>


            <!--  -->
            <div class='col-md-5 p-4 '>
    <div class='focus'>

      <input required type='text' name='data' value='<?=$date_of_birth?>'  id='input' class=' border  mb-5 border-0  border-bottom' placeholder='Ex.: 03/10/2003'>
      <label  class='form-label text-secondary fw-bold'>Data de nascimento</label>
    </div>

                <div class='focus'>
                  <input type='text' name='job' value='<?=$job?>'  id='input' class=' border mb-5  border-0  border-bottom' placeholder='Ex.: Desenvolvedora Web'>
                  <label  class='form-label text-secondary fw-bold'>Profissão</label>

                </div>
  
                <div class='focus'>

                  <input type='text' name='cel' value='<?=$cel?>'  id='input' class=' border mb-5  border-0  border-bottom' placeholder='Ex.: (11) 98493-2039'>
                  <label  class='form-label text-secondary fw-bold'>Celular para contato</label>
                </div>
  
  
                <div class='form-check mt-5 mb-5'>
                  <input class='form-check-input' <?=$send_notifications_by_email?> name='notificationEmail' value='sim'  type='checkbox' id='gridCheck'>
                  <label class='form-check-label' for='gridCheck'>
                    Enviar notificações por E-mail
                  </label>
                </div>
            </div>
            
            <div class='col-12'>
              
            </div>
            <div class='col-12 d-flex justify-content-end px-5' >
              <input type='submit' class='btn btn-primary save' value='Cadastrar contato'  />
            </div>
          </form>


    </div>
