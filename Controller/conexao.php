<?php
 

/**
 * @return \PDO
 */
 function getConection() {
    $dsn = 'pgsql:host=localhost;dbname=advocacia';
    $user = 'jean';
    $pass = 'dyjesus0129';


    try {
        $pdo = new PDO($dsn, $user, $pass);
        return $pdo;
        /* if(isset($pdo)){
          echo"<script>alert('CONECTADO COM O POSTGRES!');</script>";
          }  else {
          echo"<script>alert('ERRO!');</script>";
          } */
    } catch (PDOException $ex) {
        echo 'ERRO ' . $ex->getMessage();
    }
}






/*___________________________________*/
