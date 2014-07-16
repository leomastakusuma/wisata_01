<?php

class Home extends Controller{
	public function nama(){
		 require_once 'application/templates/header.html';
		 require_once 'application/templates/menu.html';
		 require_once 'application/templates/content.php';
		 require_once 'application/templates/footer.php';
		

		// die;

	}


	public function test(){

			$data=$_POST;
			if(isset($data)){
				require_once 'application/templates/header.html';
		 		require_once 'application/templates/menu.html';
				require_once"application/views/home/nama.html";
                require_once 'application/templates/footer.php';

			}
      

		

	

	}

}
