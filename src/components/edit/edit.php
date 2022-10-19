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
        $id = $row['id'];

        $_SESSION["title"] = $title;
        $_SESSION["description"] = $description;
        $_SESSION["id"] = $id;

        header("Location: http://localhost/victor_braz_crud_mysql_php/index.php");
    }
}
;

?>


<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mt-4">
        <div class="card-body">

          <a href="http://localhost/victor_braz_crud_mysql_php/index.php" class="btn btn-info"><i class="fa-solid fa-angles-left"></i> Back</a>
          <hr>

          <form action="/victor_braz_crud_mysql_php/src/components/edit/edit.php?id=<?php echo $_GET[$_SESSION['id']]; ?>" method="POST">
            <label for="title"></label>
            <input type="text" class="form-control" id="title" name="title" value=<?=$_SESSION['title']?> placeholder="Task Title">

            <textarea type="description" class="form-control"  name="description" rows="2" placeholder="Task Description"> <?=$_SESSION['description']?> </textarea>

            <button class="btn btn-warning mt-3"><i class="fa-regular fa-floppy-disk"></i> Update Register</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>


