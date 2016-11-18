<?php

try{
       $bdd = new PDO('mysql:host=192.168.1.199;dbname=web_service;charset=utf8', 'user', 'webservice');

}catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String.
die($Exception);
  echo "error in Db connection";
}

?>
