<?php
Class BDD{
  public static $bdd;
  public static function connect(){
    self::$bdd=new PDO('mysql:host=127.0.0.1;dbname=web_service;charset=utf8', 'user', 'webservice');
  }
}
try{
  BDD::connect();
}catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String.
die($Exception);
  echo "error in Db connection";
}

?>
