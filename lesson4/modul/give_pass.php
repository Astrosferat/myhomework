<?php
	session_start();
	
	function checkPassword($username,$password) {
		//задаєм масив паролей і логінів
		$login_pass = array(
		    "Admiral" => "general",
		    "Captain" => "midle",
		    "Boatswain" => "pilot"    
		);		
		
		//перевіряєм пароль і логін		
		foreach ($login_pass as $key => $value){
			if ($key==$username AND $value==$password )
			{ 
			return true ;
			}
		}
		return false ;
	}

	if (empty($_POST["username"]) OR empty($_POST["password"])) 
	{
		
		$_SESSION['data'] = "<br> Please fill in all fields <br> ";
	}	
	else{
		if (checkPassword($_POST["username"],$_POST["password"])==TRUE)
		{
			$_SESSION['data'] = "WELCOME ! DEAR ".$_POST["username"]."<h3> WE ARE GLAD TO SEE YOU !!! </h3>" ;
		}
				else {
				$_SESSION['data']="WHO ARE YOU ? <h4>Incorect password or login!</h4>" ; 
			}
	}
	
	// вертаємось на головну
	header( "Location: ../index.php?page=login" );

?>