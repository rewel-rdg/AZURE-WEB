<?php
$serverName = "farmplanningportal.database.windows.net";
$database = "FARM_PLANNING";
$uid = "Admin";
$pass = "#######";
//$connection = odbc_connect('E-FarmContactDetails', 'AdminRDG', 'RDG#12345');
$connect = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
];

$conn = sqlsrv_connect(
    $serverName,
    $connect
);
if (!$conn)
    die(print_r(sqlsrv_errors(), true));
// else
    // echo 'Connection Succesfull !';
?>