<?php
include "/xampp/htdocs/victor_braz_crud_mysql_php/database/connect_database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id = $id";
    $result = mysqli_query($connexion_to_data_base, $query);

    if (!$result) {
        die("Query failed");
    }

    $_SESSION["message"] = "Task Removed Successfully from the database.";
    $_SESSION["message_type"] = "danger";

    header("Location: http://localhost/victor_braz_crud_mysql_php/index.php");

}
