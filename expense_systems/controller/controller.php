<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
       // load a admin dashboard
       parent::__construct();
       // insert data  
       {

       }  
        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
             {
                case'/':
                  require_once("index.php");
                  require_once("navbar.php");
                  require_once("content.php");
                default:
                   require_once("index.php");
                   require_once("navbar.php");
                   require_once("404.php");
                   break;
             }
        }    
    }
}
$obj=new controller; 
?>