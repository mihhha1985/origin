<?php

	require_once ROOT . '/component/conect.php';
		
	class Comments{
		
			public static function getAllComments()
			{
				$db = Db::getConect();
				$sql = "SELECT * FROM comments ORDER BY id DESC";
				return $db->query($sql)->fetchAll();	
			}	

			public static function addNewComment($email, $comment, $date)
			{
				$db = Db::getConect();	
				$sql = "INSERT INTO comments(email, comment, created_at) VALUES(:email, :comment, :date)";
			
				$result = $db->prepare($sql);
				$result->bindParam(':email', $email, PDO::PARAM_STR);
				$result->bindParam(':comment', $comment, PDO::PARAM_STR);
				$result->bindParam(':date', $date, PDO::PARAM_STR);	
			
				$result->execute();
				return $db->lastInsertId();	
			}	
	}	