<?php 
//class
class animal{
	//property
	public $name;
	public $legs;
	public $cold_blooded;
	
	//konstruktor
	public function __construct($name, $legs, $cold_blooded){
		$this->name = $name;
		$this->legs = $legs;
		$this->cold_blooded=$cold_blooded;
	}

//metode set && metode get
public function set_name($name){
	$this->name = $name;
	
}
public function get_name(){
	return $this->name;

}
public function set_legs($legs){
	$this->legs= $legs;
}
public function get_legs(){
	return $this->legs;

}
public function set_cold_blooded($cold_blooded){
	$this->cold_blooded = $cold_blooded;
}
public function get_cold_blooded(){
	return $this->cold_blooded;
}
}



 ?>