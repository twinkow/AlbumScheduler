<?php

namespace Album\Controller;

class HelloWorldJob {
	private $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function perform() {
    	error_log("CABRAO DO CARALHO!");
        echo "Hello {$this->name}!\n";
    }
}
