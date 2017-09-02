<?php
Class default_Model extends CI_Model
{
		function _construct(){
			parent::_construct;
			$this->load->database();
		}
		public function mess($name,$mail,$mess)
		{
			$headers =  'MIME-Version: 1.0' . "\r\n"; 
			$headers .= 'From: Your name <info@address.com>' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

			mail('grzojda@gmail.com', 'Mail z grzojda.eu ', "Od: ".$name."\\n Email: ".$mail."\\n Wiadomość: ".$mess, $headers);
		}
}