<?php
/**
 * * PHP version 7.2.10
 * 
 * @category Components
 * @package  PackageName
 * @author   Bagish <Bagishpandey999@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://localhost/training/taskmy/config.php
 */
$siteURL ="http://localhost/training/taskmy/";
$sitename = "MYSQL TASK1";
$con= mysqli_connect("localhost", "root", "", "template");
if ($con->connect_error) {
    die("Not Connected".$con->connect_error);
}
?>