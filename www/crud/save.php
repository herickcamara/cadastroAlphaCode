<?php
require '../database/connectionDatabase.php';

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
$data = filter_input(INPUT_POST,'data');
$tel = filter_input(INPUT_POST,'tel');
$cel = filter_input(INPUT_POST,'cel');
$job = filter_input(INPUT_POST,'job');
$whatsapp = filter_input(INPUT_POST,'whatsapp');
$sms = filter_input(INPUT_POST,'sms');
$notificationEmail = filter_input(INPUT_POST,'notificationEmail');




if($name && $email && $data){

    $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = :email");
    $sql->bindValue(':email',$email);
    $sql->execute();

    if($sql->rowCount() === 0) {

        $sql = $pdo->prepare("INSERT INTO usuario ( nameUser, email, send_notifications_SMS, date_of_birth, job, tel, cel, possui_whatsapp, send_notifications_by_email) VALUES ( :name, :email, :send_notifications_SMS, :date_of_birth, :job, :tel, :cel, :possui_whatsapp, :send_notifications_by_email)");
        
        $sql->bindValue(':name',$name);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':send_notifications_SMS',$sms);
        $sql->bindValue(':date_of_birth',$data);
        $sql->bindValue(':job',$job);
        $sql->bindValue(':tel',$tel);
        $sql->bindValue(':cel',$cel);
        $sql->bindValue(':possui_whatsapp',$whatsapp);
        $sql->bindValue(':send_notifications_by_email',$notificationEmail);
        $sql->execute();
        
        header("Location: ../index.php");
        exit;

    } else{
        header("Location: ../index.php");
        exit;
}

}else{
    header("Location: ../index.php");
    exit;
}