<?php 

class App{

	static $db = null;
	static function getDatabase(){
		if(!self::$db){
			self::$db = new Modele('bddtest.sql','root','');
	    }

		return  self::$db;
	}	
}