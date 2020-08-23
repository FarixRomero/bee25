<?php
// require_once "phpMailer\PHPMailer.php";
// require_once "phpMailer\SMTP.php";
// require_once "phpMailer\Exception.php";
// use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];
    $mailTo="hola@bee25.com";
    $headers="From:".$mailFrom;
    $txt="Recibiste un mensaje de".$name."de Corre:".$mailFrom ." El mensaje es:".$message;
    mail($mailTo,$subject,$txt,$headers);
    header("Location: index.html?mailSendSuccs");
}


// $mail= new PHPMailer();

// //SMTP Settings
// $mail->isSMTP();
// $mail->Host="smtp.gmail.com";
// $mail->SMTPAuth=true;
// $mail->Username="farix@e-quipu.pe";
// $mail->Password="trilce123";
// $mail->Port=465;
// $mail->SMTPSecure="ssl";

// //Email Setttings

// $mail->setFrom($mailFrom,$name);
// $mail->addAddress("Hola@bee25.com");
// $mail->Subject=$subject;
// $mail->Body=$txt;
// if($mail->send()){
//     // echo "hola";
// }else{
    
//     // echo "no funca";
// }
// header("Location: index.html?mailSendSuccs");