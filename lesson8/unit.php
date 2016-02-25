<?php
	class Power
	{
		private $_item;
		
		function __construct($item)
		{
			$this->_item=$item;		
		}
		
		function two()
		{
			return pow($this->_item,2) ;
		}
		function three()
		{
			return pow($this->_item,3) ;
		}
		function four()
		{
			return pow($this->_item,4) ;
		}
		function five()
		{
			return pow($this->_item,5) ;
		}				
	}
	
?>