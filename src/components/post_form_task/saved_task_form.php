<?php

if (isset($_POST["save_task"])) {
    echo "Saving data from: post_form_task.php <br>";

    $title = $_POST["title"];
    $description = $_POST["description"];

    echo "Title: $title <br> Description: $description";

}
