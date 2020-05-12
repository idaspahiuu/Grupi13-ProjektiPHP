<?php
class fv {
	public $lloji;
	public $emri;
	public $ngjyra;
	
	function __set($vetia, $value) {
		if($vetia == "lloji")
			$this->lloji = $value;
		if($vetia == "emri")
			$this->emri = $value;
		if($vetia == "ngjyra")
			$this->ngjyra = $value;
	}
	
	function __get($vetia) {
		if($vetia == "lloji")
			return "This is a ".$this->lloji."<br>";
		if($vetia == "emri")
			return "It's called ".$this->emri."<br>";
		if($vetia == "ngjyra")
			return "Its color is ".$this->ngjyra."<br>";
	}
}
?>