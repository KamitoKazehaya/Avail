<?php
/**
 * 
 */
class main
{
    
   
    public function index()
    {
        $app = new template(ROOT.'/app/'.APP.'/views/app.php');
        $app->set("title","main");
        $app->set("go","Avail");
        echo $app->output();
    }
}