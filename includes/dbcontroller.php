<?php
$DB_host = "remotemysql.com";
$DB_user = "lWtDeLM9xM";
$DB_pass = "tUNZfeby4Z";
$DB_name = "lWtDeLM9xM";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>
