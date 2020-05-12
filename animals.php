<?php
class animals {
	public $emri;
	public $ngjyra;
	
	function __set($vetia, $value) {
		if($vetia == "emri")
			$this->emri = $value;
		if($vetia == "ngjyra")
			$this->ngjyra = $value;
	}
	
	function __get($vetia) {
		if($vetia == "emri")
			return "The animal: ".$this->emri."<br>";
		if($vetia == "ngjyra")
			return "Its color: ".$this->ngjyra."<br>";
	}
}
?>