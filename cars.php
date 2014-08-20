<?php

class car
{
	public function go(){
		echo "go go";
	}
}

class light extends car
{
	public function housing(){
		echo "housing";
	}

	public function weight(){
		echo "weight";
	}

	public function power(){
		echo "power";
	}
}

class bus extends car
{
	public function housing(){
		echo "housing";
	}

	public function weight(){
		echo "weight";
	}

	public function power(){
		echo "power";
	}
}


class truck extends car
{
	public function housing(){
		echo "housing";
		$this->
	}

	public function weight(){
		echo "weight";
	}

	public function power(){
		echo "power";
	}
}



class audi extends light
{
	public $color="orange";
	public $doors="2";
	public $maxSpeed="200";
}

class porshe extends light
{
	public $color="black";
	public $doors="4";
	public $maxSpeed="300";
}

class bmw extends light
{
	public $color="red";
	public $doors="4";
	public $maxSpeed="240";
}



class ikarus extends bus
{
	public $color="green";
	public $doors="2";
	public $maxSpeed="100";
}

class neoplan extends bus
{
	public $color="yellow";
	public $doors="2";
	public $maxSpeed="180";
}

class bogdan extends bus
{
	public $color="black";
	public $doors="2";
	public $maxSpeed="110";
}






class zil extends truck
{
	public $color="orange";
	public $doors="2";
	public $maxSpeed="90";
}

class kamaz extends truck
{
	public $color="black";
	public $doors="2";
	public $maxSpeed="110";
}

class kran extends truck
{
	public $color="pink";
	public $doors="1";
	public $maxSpeed="30";
}


?>