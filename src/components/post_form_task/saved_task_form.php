<?php

include "/xampp/htdocs/victor_braz_crud_mysql_php/database/connect_database.php";

if (isset($_POST["save_task"])) {
    echo "Saving data from: post_form_task.php <br>";

    $title = $_POST["title"];
    $description = $_POST["description"];

    echo "Title: $title <br> Description: $description";

    $query = "INSERT INTO task(title, description) VALUES('$title', '$description')";
    $result = mysqli_query($connexion_to_data_base, $query);

    echo "<br>";

    if (!$result) {
        echo "Query Failed";
    }

    $_SESSION["message"] = "Saved in the database.";
    $_SESSION["message_type"] = "success";

    header("Location: http://localhost/victor_braz_crud_mysql_php/index.php");
}
