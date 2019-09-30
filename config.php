<?php
/**
 * Created by PhpStorm.
 * User: Pauline Cairns
 * Date: 11/03/2019
 * Purpose: set up connection to the database
 */

define('DB_SERVER', 'server-name');
define('DB_USERNAME', 'user-name');
define('DB_PASSWORD', 'user-name');
define('DB_DATABASE', 'resourcing');
$db= mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


/* Check connection - used only for testing when setting up configuration with the database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Connected to database";
}
*/
?>