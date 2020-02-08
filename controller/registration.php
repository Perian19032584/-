
<?php

$registration = new registration;
switch ($_GET['method']){
    case "create_user":
        $email_and_password = base64_decode($_GET['data']);
        $registration->create_user_bd($email_and_password);
    break;
    case "check_for_mail":
		$testtt=$registration->check_for_mail($_POST['params']);
       echo json_encode($testtt);//Зачем тут надо echo, и опять зашифровать даннеы
    break;
    case "authorization_user":
	   //echo json_encode - нужно вернуть {ss:dss}
       echo json_encode ($registration->authorization_create($_GET['authorization_data']));
    break;		
     default:		
        //echo $front_app->render('registration.php');//Этот метод не работает
       include_once ( $_SERVER['DOCUMENT_ROOT'].'/view/tpl/registration/registration.php');
    break;
}

?>