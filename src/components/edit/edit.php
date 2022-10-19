<?php
include "/xampp/htdocs/victor_braz_crud_mysql_php/database/connect_database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($connexion_to_data_base, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];

        $_SESSION["title"] = $title;
        $_SESSION["description"] = $description;

        header("Location: http://localhost/victor_braz_crud_mysql_php/index.php");
    }
}
