<?php

include "/xampp/htdocs/victor_braz_crud_mysql_php/database/connect_database.php";

if (isset($_GET["id"])) {
    echo "Updating data from: update_form_task.php <br>";

    $title = $_GET["title"];
    $description = $_GET["description"];
    $id = $_GET["id"];

    $query = "SELECT * FROM task WHERE id = $id";

    $result = mysqli_query($connexion_to_data_base, $query);

    $_SESSION["title"] = $title;
    $_SESSION["description"] = $description;
    $_SESSION["id"] = $id;

    header("Location: http://localhost/victor_braz_crud_mysql_php/index.php");
}
