<?php

if (isset($_POST["save_task"])) {
    echo "saving...";

    $title = $_POST["title"];
    $description = $_POST["description"];

    echo "$title and $description";

}
