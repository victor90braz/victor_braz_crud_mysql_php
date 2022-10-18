<?php

$connexion_to_data_base = mysqli_connect("localhost", "root", "", "crud_mysql_php");

if (isset($connexion_to_data_base)) {
    echo "DataBase is connected. <br>";
}
