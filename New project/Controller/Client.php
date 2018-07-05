<?php
class Client extends User
{
   function __construct ($id)
	{
		if ($id !="")
	   {	
		       parent::__construct($id);
	   }
	}
}
?>