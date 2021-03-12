<?php
	require_once ROOT . '/models/Validate.php';
	require_once ROOT . '/models/Comments.php';

    class FormController
    {
        public function actionIndex(){
            
            $email = $_POST['uemail'];
			$comment = $_POST['ucomment'];
			$arr = array();

            
			if(Validate::validateEmail($email)){
				$comment = addcslashes($comment, "><;");
				$date = date("d.m.Y H:i", time());
				$id = Comments::addNewComment($email, $comment, $date);
				$arr['type'] = 'success';
				$arr['text'] = $comment;
				$arr['date'] = $date;
			}else{
				$arr['type'] = 'error';
				$arr['text'] = 'Вы ввели некорректный Email';
			}
			
            echo json_encode($arr);
			
			return true;
        }
    }
