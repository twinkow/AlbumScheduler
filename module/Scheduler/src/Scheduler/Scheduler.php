<?php

require '/Users/twinkow/Desktop/ZendSkeletonApplication-master/vendor/jfloff/djjob-zf2/src/DJJob/DJJob.php';
require '/Users/twinkow/Desktop/ZendSkeletonApplication-master/module/Album/src/Album/Controller/HelloWorldJob.php';

	DJJob::configure("pgsql:host=127.0.0.1;dbname=djjob_test;port=5432;user=postgres;password=");

	$worker = new DJWorker(array("count" => 0, "max_attempts" => 2, "sleep" => 5));
	$worker->start();

	error_log("OLAAA");
	var_dump(DJJob::status());

	// $fileHandle = "fsdfs.txt";
	// $fileHandle = fopen($fileHandle, 'w') or die("Can't open file");
	// $data = "ISTO ESTÁ A BOMBIX MO PUT!\n";
	// fwrite($fileHandle, $data);
	// fclose($fileHandle);

