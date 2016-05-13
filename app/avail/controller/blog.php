<?php
class blog
{
    public function index()
    {
        $app = new template(ROOT.'/app/'.APP.'/views/app.php');
        $app->set("title","News");
        $app->set("go","News");
        echo $app->output();
    }
    public function viewPost($id)
    {
        $app = new template(ROOT.'/app/'.APP.'/views/app.php');
        $app->set("title","News");
        $app->set("go","News : ".$id);
        echo $app->output();
    }
     public function edit($id)
    {
        $app = new template(ROOT.'/app/'.APP.'/views/app.php');
        $app->set("title","News");
        $app->set("go","News edit : ".$id);
        echo $app->output();
       
    }
}