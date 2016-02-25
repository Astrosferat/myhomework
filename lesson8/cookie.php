<?php
	class Cookie
	{
		private $_item;
		
		function is()
		{
			if (isset($_COOKIE["login"])) return TRUE;
			else return False;
		}
			
		function set_cookie($login,$timecooki=60*60*24*365)
		{
			setcookie('login', $login, time() + $timecooki);
		}
		/*	
		function delete_cookie($name) {
			//if (getCookie($name)) 
			{
				$this->set_cookie($name,time()) ;
			}
		}
	*/	
		function get_cookie()
		{
			if (isset($_COOKIE['cookie'])) {
			foreach ($_COOKIE['cookie'] as $name => $value) {
			        echo "$name : $value <br>";
			        }
			        }
			        else echo " no cookies <br>";
    	}
							
	}
	
?>

