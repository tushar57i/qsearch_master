<?php
	class Connection{

		private $con;


		function isConnect(){
			include_once dirname(__FILE__).'/constant.php';
			$this->con=new mysqli(HOST,USER,PASSWORD,DB);

			if (mysqli_connect_errno()) {
				echo "Failed to connected with database".mysqli_connect_error();
				return null;
			}
			return $this->con;
		}


	}


  ?>


