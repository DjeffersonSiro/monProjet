<?php
//Front controller
// URL = localhost:8000

require_once("../models/User.php");
require_once("../models/RP.php");

/*$user = new User();
$user->setId(1)
     ->setLogin("djefferson")
     ->setPassword("Delbert")
     ->setRole("Role");

echo $user->getLogin();
*/
$user = new RP();
$user->setId(1)
     ->setLogin("djefferson")
     ->setPassword("Delbert");
     
$user->getRole("Role");

