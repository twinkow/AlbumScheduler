<?php

namespace Album\Job;

use SlmQueue\Job\JobInterface;

class HelloWorldJob implements JobInterface
{
  protected $options;
  public function setOptions(array $options)
  {
    $this->options = $options;
  }

  public function getOptions()
  {
    return $this->options;
  }

  public function __invoke()
  {
    echo "Hello World";
  }
}