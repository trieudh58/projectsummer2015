<?php
/**
 * Created by PhpStorm.
 * User: dang
 * Date: 6/20/2015
 * Time: 8:36 AM
 */
$localhost = 'localhost';
$username = 'root';
$password = '';
$database_name = 'loginform';

$dbc = mysqli_connect($localhost, $username, $password, $database_name) or die(mysqli_connect_error());

$query = "SELECT * FROM users WHERE email = '$_POST[email]'";
$run = mysqli_query($dbc, $query);
if(mysqli_num_rows($run) != 0) {
    echo 'Login successfully.';
}
else {
    echo 'This account does not exist!';
}