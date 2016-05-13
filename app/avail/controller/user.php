<?php
class user
{
    public function id($id)
    {
       $app = new template(ROOT.'/app/'.APP.'/views/app.php');
        $app->set("title",$id);
        $app->set("go","User : ".$id);
        echo $app->output();
    }
}