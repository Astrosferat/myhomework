<?php
	class Server
	{
		private $_item;
		
		function __construct($item)
		{
			$this->_item=$item;		
		}
		
		function request_uri()
		{
			return $_SERVER['REQUEST_URI'] ;
		}
		function ip()
		{
			return $_SERVER['REMOTE_ADDR']  ;
		}
		function document_root()
		{
			return $_SERVER['HTTP_HOST'] ;
		}
		function http_user_agent()
		{
			return $_SERVER['HTTP_USER_AGENT'] ;
		}
		function http_user_agent()
		{
			echo $_SERVER['QUERY_STRING']; // id=1&test=wet&id_theme=512 
		}						
	}
	
?>