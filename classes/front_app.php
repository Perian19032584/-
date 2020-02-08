<?php

class front_app{
	public $include_file;
	
	static private $connect_db;
	
	private function connect(){
		global $setting;//поиск из выше описаных
		try {
			if (!self::$connect_db){
				$connectdb=$setting['mysql_database']?";dbname=$setting[mysql_database]":'';
				self::$connect_db=new PDO("$setting[mysql_driver_db]:host=$setting[mysql_host_db];port=$setting[mysql_port_db]$connectdb",$setting['mysql_user'],$setting['mysql_password']);
			}
			return self::$connect_db;
		}catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
	
	/*function check_input_data($val, $type='email'){//Проверка на правильность символов, для email
		switch($type){
			case'email':
				if(preg_match("/^([a-zA-Z0-9_\.\-]+)@([a-zA-Z0-9_\.\-]+)\.([a-zA-Z0-9\.\-]{2,20})$/", $val))
					return true;
				break;
			break;
		}
		return false;
		
		
	}*/
	/*function check_input_data($val){//Проверка на правильность символов, для email
		if(preg_match("/^([a-zA-Z0-9_\.\-]+)@([a-zA-Z0-9_\.\-]+)\.([a-zA-Z0-9\.\-]{2,20})$/", $val)){
			return true;
		}else{
			return false;
		}				
	}*/
	
	function clean_data($data){
		return preg_replace('/\t|\n|\r/','',trim($data));
		
	}
	
	function render($file_view){
		global $controller;//Тут мы получим get Значение из input
		if(is_file($_SERVER['DOCUMENT_ROOT']."/view/tpl/$controller/$file_view"))
			$this->include_file=$_SERVER['DOCUMENT_ROOT']."/view/tpl/$controller/$file_view";
			//return $_SERVER['DOCUMENT_ROOT']."/view/tpl/$controller/$file_view";
		
		
	}
	
	function check_password($password,$hash,$return='hash'){
		if(!$password || !$hash)
			return false;
		list(,$solt,$password_hash)=explode('$',$hash);	
		$hash_check='$'.$solt.'$'.hash('sha256',$solt.$password);
		if($return=='hash')
			return $hash_check;
		else{
			return ($hash_check===$hash)?true:false;
		}
	}
	
	protected function create_password($password){
		$time=time();
		$synbol_solt='0123456789abcdefghijklmnopqrstuvwxyz_/-%&@#\ABCDEFGHIJKLMNOPQRSTUVWXYZ'.$time;
		$solt= substr(str_shuffle($synbol_solt), 0, 15);//Взять 15 рандомных символов для соли
		return '$'.$solt.'$'.hash('sha256',$solt.$password);//Вернуть зашифрованые данные
	}
	function query($query='',$get_query='array'){
		if (!self::$connect_db){
			$this->connect();
		}
		$out_sql=self::$connect_db->query($query);
		switch($get_query){
			case 'array':
				foreach($out_sql as $key=>$val){
					$array_out[$key]=$val;
				}
				return $array_out;
			break;	
		}
	}	

	public function error404(){
		include "view/tpl/404/404.php";
	}
    public function folders_smarty($name_file){
        $smarty->template_dir = "view/tpl/$name_file";
        $smarty->compile_dir = "view/cashe";
    }
}