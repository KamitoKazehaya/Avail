<?php
require_once(ROOT.'/avail/core/lib/database/rb.php');
 $db = require_once(ROOT.'/avail/config/setting.php');
class db extends R
{


   public function __construct($db)
   {
        self::setup('mysql:host='.DB_H.';dbname='.$db.'',
        DB_U, DB_P);
   }
}
