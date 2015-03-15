<?php namespace S94\Debug;

class Debug{
	public function dump($value){
		echo '<pre>';
		var_dump($value);
		echo '</pre>';
	}
}
