<?php
/**
 * This file creates the DB connection.
 */
$db_connection = mysqli_connect(DBSERVER, DBUSER, DBPASSWORT, DBNAME)
OR die('DB verbindung hat nicht geklappt: '.mysqli_connect_error());