<?php
class registration extends front_app{
	protected $data;
    public function create_user_bd($data){
        $data = explode("=", $data);
        $registration_email_user = $data[1];
        $registration_password_user = $this->create_password($data[3]);//Зашифровать пароль и добавить соль
      if($this->query("select * from temporary_registration_link where email='$registration_email_user'") != null){
        $this->query("INSERT INTO registration_user(email, password) values('$registration_email_user', '$registration_password_user')");
        $this->query("delete from temporary_registration_link where email='$registration_email_user' and password='$registration_password_user'");
		//header('Location: http://testss.slavno.net');
      } 
    }
    public function check_for_mail($params){
 	global $lang;
	//	var_dump($params);
		$params=json_decode($params,1);//, почему если 1 не поставишь null, декодировать из json в обьект	
        $data = base64_encode("email=$params[registration_email]=password=$params[registration_password]");//зашифровать строку - что-бы никто не видел
        $t = $this->query("select * from temporary_registration_link where email='$params[registration_email]'");  
        $r = $this->query("select * from registration_user where email='$params[registration_email]'"); 

        if($t == null || $r == null){     
			$this->query("INSERT INTO temporary_registration_link(email, password) values('$params[registration_email]', '$params[registration_password]')");		
			mail($params['registration_email'], "Кусь","Для регистрации перейдите по ссылке http://testss.slavno.net?controller=registration&method=create_user&data=$data", 'From: slavno.net');
			$arrau_out['message']="Перейдите на ваш емайл по названию $params[registration_email] для потверждение что это вы";
			$arrau_out['code']=0;
        }else{
			$arrau_out['code']=2;
			$arrau_out['message']="Данный аккаун уже занят";
        }  
		return $arrau_out;

		//select * from temporary_registration_link inner join registration_user on temporary_registration_link.id = registration_user.id;
    }
	public function authorization_create($authorization_data){
		$authorization_data=json_decode($authorization_data, 1);//Почему если я не розшифрую будет ошибка, розшифровует данные
		//$authorization_data
		
		var_dump($authorization_data);
		//return $arrau_out['message']=$authorization_data;
		//$data_user = $this->query("SELECT * FROM registration_user where email='$authorization_data[0]' and password='$authorization_data[1]'");		
		//setcookie("authorization_data", base64_encode($data_user[0]['id']), time()+3600);
		//header('Location: http://testss.slavno.net');
	}	
}
