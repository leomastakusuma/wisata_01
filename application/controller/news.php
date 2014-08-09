<?php
class News extends Controller{


	public function index(){
		require_once 'application/templates/header.html';
 		require_once 'application/templates/menu.html';
		require_once "application/views/news/fisrt.html";
        require_once 'application/templates/footer.php';

	}


	public function news(){
            $user = $this->loadModel('user');
            pr($user);
            
	}

}
