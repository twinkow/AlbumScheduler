<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Scheduler\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use DJJob;
use DJWorker;

class SchedulerController extends AbstractActionController
{
    public function indexAction()
    {	

    	DJJob::configure("mysql:host=127.0.0.1;dbname=djjob_test;port=8889", array('mysql_user' => "root", 'mysql_pass' => "root"));
    	
    	DJJob::enqueue(new HelloWorldJob("FACIL"));

    	$worker = new DJWorker(array("count" => 1, "max_attempts" => 2, "sleep" => 5));
		$worker->start();

		var_dump(DJJob::status());

		$fileHandle = "bombix.txt";
		$fileHandle = fopen($fileHandle, 'w') or die("Can't open file");
		$data = "ISTO ESTÁ A BOMBIX MO PUT!\n";
		fwrite($fileHandle, $data);
		fclose($fileHandle);

        return new ViewModel();
    }

}
