<?php
/**
* 
*/
class Button 
{
	public $data;
	public $surround = 'p';
	private $nom;
	function __construct($data)
	{
		$this->data=$data;
	}

	private function getValue($index){
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}

	private function surround($html){
		return "<{$this->surround}>$html</{$this->surround}>";
	}
	public function submit($name){
		return $this->surround('<button type="submit" name""'.$this->getValue($name).'>'.$this->getValue($name).'</button>');
		setNom($name);
	}

	public function setNom($nom){
		$this->nom=$nom;
	}

	public function getNom(){
		return $this->nom;
	}

}



?>