<?php
$hostnom = 'host=srvmysql.btssio.dedyn.io';
$usernom = 'MERIMIR';
$password = '03032006';
$bdd = 'MERIMIR_Biblio2';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?>