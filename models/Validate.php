<?php
	
class Validate{
	
	public static function validateEmail($email){
		$email = trim($email);
		if(preg_match('/^([0-9A-Za-z\.+=-_!]+)@([a-z]+)\.([a-z]+)$/', $email)){
			return true;	
		}else{
			return false;	
		}	
	}
	
}	