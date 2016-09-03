<?php 
class load
{
   public function js($path)
   {
    $output = file_get_contents(ROOT.'/app/'.APP.'/load/js/'.$path);

      echo $output;
      
   }
   public function css($path)
   {
     http_response_code(304);
      $output = file_get_contents(ROOT.'/app/'.APP.'/load/css/'.$path);
      echo $output;
      
   }
}