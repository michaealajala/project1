<?php

//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);

class Manage {
    public static function autoload($class) {
        //you can put any file name or directory here
        include $class . '.php';
    }
}

spl_autoload_register(array('Manage', 'autoload'));

$obj = new main();

class main {

    public function __construct()
    {   
       $pageRequest = 'uploadform';     
        if(isset($_REQUEST['page'])) {
            $pageRequest = $_REQUEST['page'];
        }
         $page = new $pageRequest;
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $page->get();
        } else {
            $page->post();
        }

    


    }

}


?>
