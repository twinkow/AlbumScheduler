<?php

namespace Album\Controller;

class HelloWorldJob {
	private $name;

    public function __construct($name) {
        $this->name = $name;
    }
    public function perform() {
        echo "Hello {$this->name}!\n";
    }
}
