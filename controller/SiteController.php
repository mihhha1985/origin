<?php
	require_once ROOT . '/component/conect.php';
	require_once ROOT . '/models/Comments.php';

    class SiteController
    {
        public function actionIndex(){
	
			$comments = Comments::getAllComments();
			         
            require_once ROOT . '/views/site/index.php';
            
            return true;
        }
    }
