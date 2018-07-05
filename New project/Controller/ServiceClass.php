<?php

class Service
{
	
	private $ID;
	private $Name;
	
	
	
	public function getID()
	{
		return $this->ID;
	}
	
	public function getName()
	{
		return $this->Name;
	}
	
	public function setID($id)
	{
		$this->ID=$id;
	}
	
	public function setName($name)
	{
		$this->Name=$name;
	}
}





















?>